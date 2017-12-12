<?php
function portailcpt_setup() {
	wp_localize_script('ajax-post', 'ajaxpost', array('ajaxurl' => admin_url('admin-ajax.php')));
	// Add post thumbnail
		add_theme_support( 'post-thumbnails' ); 
		add_theme_support( 'menus' );
		// Add register menu
		register_nav_menus( array(
			"nav-general"    	=> __("Menu General", "portailconcept"),
		));
		// Add support widgets
		add_theme_support( 'customize-selective-refresh-widgets' ); 
		add_theme_support( 'widget-customizer' );

		// Add Image custom
		add_image_size('concept-carousel-thumbnails', 600, 400, true);

		// Add multi post thumbnail
		if (class_exists('MultiPostThumbnails')) {
		    new MultiPostThumbnails(
		        array(
		            'label' => 'Image secondaire',
		            'id' => 'secondary-image',
		            'post_type' => array('cpt_h_a_portail','cpt_h_a_portillons','cpt_h_a_cloture', 'add_automatisme', 'add_controle_acces','add_porte_de_parking')
		        )
		    );
		}	
}
add_action( 'after_setup_theme', 'portailcpt_setup' );

function asyncPortail(){
	$post = new WP_Query('post_type=cpt_h_a_portail');
	$i=1;
	if($post->have_posts()):  while($post->have_posts()): $post->the_post();
?>
						<h3><?php echo ucfirst(explode('_',get_post_type())[3]); ?></h3>
						<div class="item__content" style='margin-top:20px!important;margin-bottom:20px!important;border-bottom: 1px solid gray'>
							<div id="carouselIndicators_portail_<?php echo $i; ?>" class="carousel slide" data-ride="carousel">
							  <ol class="carousel-indicators">
							    <li data-target="#carouselIndicators_portail_<?php echo $i; ?>" data-slide-to="0" class="active"></li>
							    <li data-target="#carouselIndicators_portail_<?php echo $i; ?>" data-slide-to="1"></li>
							  </ol>
							  <div class="carousel-inner">
								<div class="carousel-item active">
								  <?php the_post_thumbnail('concept-carousel-thumbnails');?>
								  <div class="carousel-caption d-none d-md-block">
								    <h3><?php the_title(); ?></h3>
								    <?php the_content(); ?>
								    <p>
								    <a href="<?php site_url();?>/contact" style="color:red!important">Demande de devis gratuit pour <?php the_title(); ?></a></p>
								  </div>
								</div>
							  </div>
							  <a class="carousel-control-prev" href="#carouselIndicators_portail_<?php echo $i; ?>" role="button" data-slide="prev">
							    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
							    <span class="sr-only">Précedent</span>
							  </a>
							  <a class="carousel-control-next" href="#carouselIndicators_portail_<?php echo $i; ?>" role="button" data-slide="next">
							    <span class="carousel-control-next-icon" aria-hidden="true"></span>
							    <span class="sr-only">Suivant</span>
							  </a>
							  
							</div>

						</div>
<?php
	$i++;
	endwhile;endif;
	die;
}
add_action( 'wp_ajax_nopriv_async', 'asyncPortail' );
add_action( 'wp_ajax_async', 'asyncPortail' );

function asyncPortillon()
{
	$post = new WP_Query('post_type=cpt_h_a_portillons');
	$i=1;
	if($post->have_posts()):  while($post->have_posts()): $post->the_post();
?>
						<h3><?php echo ucfirst(explode('_',get_post_type())[3]); ?></h3>
						<div class="item__content" style='margin-top:20px!important;margin-bottom:20px!important;border-bottom: 1px solid gray'>
							<div id="carouselIndicators_portail_<?php echo $i; ?>" class="carousel slide" data-ride="carousel">
							  <ol class="carousel-indicators">
							    <li data-target="#carouselIndicators_portail_<?php echo $i; ?>" data-slide-to="0" class="active"></li>
							    <li data-target="#carouselIndicators_portail_<?php echo $i; ?>" data-slide-to="1"></li>
							  </ol>
							  <div class="carousel-inner">
								<div class="carousel-item active">
								  <?php the_post_thumbnail('concept-carousel-thumbnails');?>
								  <div class="carousel-caption d-none d-md-block">
								    <h3><?php the_title(); ?></h3>
								    <?php the_content(); ?>
								    <p>
								    <a href="<?php site_url();?>/contact" style="color:red!important">Demande de devis gratuit pour <?php the_title(); ?></a></p>
								  </div>
								</div>
							  </div>
							  <a class="carousel-control-prev" href="#carouselIndicators_portail_<?php echo $i; ?>" role="button" data-slide="prev">
							    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
							    <span class="sr-only">Précedent</span>
							  </a>
							  <a class="carousel-control-next" href="#carouselIndicators_portail_<?php echo $i; ?>" role="button" data-slide="next">
							    <span class="carousel-control-next-icon" aria-hidden="true"></span>
							    <span class="sr-only">Suivant</span>
							  </a>
							  
							</div>

						</div>
<?php
	$i++;
	endwhile;endif;
	die;
}
add_action( 'wp_ajax_nopriv_asyncPortillon', 'asyncPortillon' );
add_action( 'wp_ajax_asyncPortillon', 'asyncPortillon' );

function asyncCloture(){
	$post = new WP_Query('post_type=cpt_h_a_cloture');
	$i=1;
	if($post->have_posts()):  while($post->have_posts()): $post->the_post();
?>
						<h3><?php echo ucfirst(explode('_',get_post_type())[3]); ?></h3>
						<div class="item__content" style='margin-top:20px!important;margin-bottom:20px!important;border-bottom: 1px solid gray'>
							<div id="carouselIndicators_portail_<?php echo $i; ?>" class="carousel slide" data-ride="carousel">
							  <ol class="carousel-indicators">
							    <li data-target="#carouselIndicators_portail_<?php echo $i; ?>" data-slide-to="0" class="active"></li>
							    <li data-target="#carouselIndicators_portail_<?php echo $i; ?>" data-slide-to="1"></li>
							  </ol>
							  <div class="carousel-inner">
								<div class="carousel-item active">
								  <?php the_post_thumbnail('concept-carousel-thumbnails');?>
								  <div class="carousel-caption d-none d-md-block">
								    <h3><?php the_title(); ?></h3>
								    <?php the_content(); ?>
								    <p>
								    <a href="<?php site_url();?>/contact" style="color:red!important">Demande de devis gratuit pour <?php the_title(); ?></a></p>
								  </div>
								</div>
							  </div>
							  <a class="carousel-control-prev" href="#carouselIndicators_portail_<?php echo $i; ?>" role="button" data-slide="prev">
							    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
							    <span class="sr-only">Précedent</span>
							  </a>
							  <a class="carousel-control-next" href="#carouselIndicators_portail_<?php echo $i; ?>" role="button" data-slide="next">
							    <span class="carousel-control-next-icon" aria-hidden="true"></span>
							    <span class="sr-only">Suivant</span>
							  </a>
							  
							</div>

						</div>
<?php
	$i++;
	endwhile;endif;
	die;
}
add_action( 'wp_ajax_nopriv_asyncCloture', 'asyncCloture' );
add_action( 'wp_ajax_asyncCloture', 'asyncCloture' );

function asyncAutomatisme(){
	$post = new WP_Query('post_type=cpt_h_a_automatisme');
	$i=1;
	if($post->have_posts()):  while($post->have_posts()): $post->the_post();
?>
						<h3><?php echo ucfirst(explode('_',get_post_type())[3]); ?></h3>
						<div class="item__content" style='margin-top:20px!important;margin-bottom:20px!important;border-bottom: 1px solid gray'>
							<div id="carouselIndicators_portail_<?php echo $i; ?>" class="carousel slide" data-ride="carousel">
							  <ol class="carousel-indicators">
							    <li data-target="#carouselIndicators_portail_<?php echo $i; ?>" data-slide-to="0" class="active"></li>
							    <li data-target="#carouselIndicators_portail_<?php echo $i; ?>" data-slide-to="1"></li>
							  </ol>
							  <div class="carousel-inner">
								<div class="carousel-item active">
								  <?php the_post_thumbnail('concept-carousel-thumbnails');?>
								  <div class="carousel-caption d-none d-md-block">
								    <h3><?php the_title(); ?></h3>
								    <?php the_content(); ?>
								    <p>
								    <a href="<?php site_url();?>/contact" style="color:red!important">Demande de devis gratuit pour <?php the_title(); ?></a></p>
								  </div>
								</div>
							  </div>
							  <a class="carousel-control-prev" href="#carouselIndicators_portail_<?php echo $i; ?>" role="button" data-slide="prev">
							    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
							    <span class="sr-only">Précedent</span>
							  </a>
							  <a class="carousel-control-next" href="#carouselIndicators_portail_<?php echo $i; ?>" role="button" data-slide="next">
							    <span class="carousel-control-next-icon" aria-hidden="true"></span>
							    <span class="sr-only">Suivant</span>
							  </a>
							  
							</div>

						</div>
<?php
	$i++;
	endwhile;endif;
	die;
}
add_action( 'wp_ajax_nopriv_asyncAutomatisme', 'asyncAutomatisme' );
add_action( 'wp_ajax_asyncAutomatisme', 'asyncAutomatisme' );


function portailcpt_widgets_init()
{
			register_sidebar(
			array(
					'name'          => __( 'Caractèristique fiche', 'portailcpt' ),
					'id'            => 'fiche_portailcpt',
					'description'   => '',
				    'class'         => '',
				));
}
add_action( 'widgets_init', 'portailcpt_widgets_init');