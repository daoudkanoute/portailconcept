<?php
/*
Plugin Name: Concept Widgets
Plugin URI: http://www.e2k.fr
Description: Concept widget caracteristique d'un produit
Version: 1.0
Author: K.Daouda
Author URI: http://www.e2k.fr
License: GPLv2 or later
Text Domain: portailconcept
*/
add_action('widgets_init', function(){register_widget('ConceptWidgets_Widget');});
class ConceptWidgets_Widget extends WP_widget {
	
	public function __construct() 
	{
			parent::__construct('widget-concept-caract', 
					        'Concept Caracteristique fiche habitat', array("description" => "Caracteristique du produit"));
	}


	public function widget($args, $instance)
	{
		echo "cpt widget";
	}

	public function update($new, $old) 
	{

	}
	
	public function form($instance)
	{
		#habitat caracteristique
		$list_post_type = array();
		foreach(get_post_types() as $post_type) {
				if(preg_match('/^cpt_h/', $post_type))
				{
					$current_post =new WP_Query("post_type=$post_type"); 
					$count = $current_post->post_count;
					if($count)
					{
						for($i=0; $i < $count; $i++)
						{
							$list_post_type[$current_post->posts[$i]->ID]= $current_post->posts[$i]->post_title;	
						}			
					}
				}
		}
		?>
		<label for=<?php echo $this->get_field_name('post_custom_caract'); ?>><?php _e('Selectionnez : ');?></label>
		<select id='post_custom'>
		<?php
			if (empty($list_post_type)) 
			{
				echo "<option value=''>Aucune fiche créez</option>";
			} 
			else
			{ 	
						foreach($list_post_type as $id=>$title)
						{
								
								echo "<option value='$id'>$title</option>";
								
						}
			}
		?>
		</select>
		<?php
		//echo "<pre>";
		//var_dump($list_post_type); 
		//echo "hello";
	}	
}