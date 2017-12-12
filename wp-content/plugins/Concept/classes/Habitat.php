<?php

class Habitat
{
	public function __construct()
	{
		$this->register();
		$this->hook_admin_menu();
	}	


	public function register() 
	{
		add_action('init', array($this, 'habitat_add_portail'), 0);
		add_action('init', array($this, 'habitat_add_portillons'),0);
		add_action('init', array($this, 'habitat_add_cloture'),0);
		add_action('init', array($this, 'habitat_add_automatisme'),0);
	}

	public function habitat_lib() 
	{
		$url = site_url();
		echo "<h1>Bibliothèque habitat</h1>";
		echo "<a href='".$url."/wp-admin/edit.php?post_type=cpt_h_a_portail'>Bibliothèque portail</a><br>";
		echo "<a href='".$url."/wp-admin/edit.php?post_type=cpt_h_a_portillons'>Bibliothèque portillons</a><br>";
		echo "<a href='".$url."/wp-admin/edit.php?post_type=cpt_h_a_cloture'>Bibliothèque clôture</a><br>";
		echo "<a href='".$url."/wp-admin/edit.php?post_type=cpt_h_a_automatisme'>Bibliothàque automatisme</a><br>";	

	}

	public function habitat_dashboard() 
	{
		$url = site_url();
		echo "<h1>Tableau de bord habitat</h1>";
		echo "<a href='".$url."/wp-admin/post-new.php?post_type=cpt_h_a_portail'>Ajouter portail</a><br>";
		echo "<a href='".$url."/wp-admin/post-new.php?post_type=cpt_h_a_portillons'>Ajouter portillons</a><br>";
		echo "<a href='".$url."/wp-admin/post-new.php?post_type=cpt_h_a_cloture'>Ajouter clôture</a><br>";
		echo "<a href='".$url."/wp-admin/post-new.php?post_type=cpt_h_a_automatisme'>Ajouter automatisme</a><br>";

	}

	public function hook_admin_menu() 
	{
		add_action('admin_menu', array($this, 'hook_menu'),0);
		add_action('admin_menu', array($this, 'hook_submenu'),0);
	}

	public function hook_menu()
	{
		add_menu_page(__('Configuration habitat', "portailcpt"), 
					  __('Habitat', "portailcpt"),
					  'manage_options',
					  'habitat_dashboard',
						array($this, 'content'),'', 5);

	}

	public function hook_submenu() 
	{

				add_submenu_page('habitat_dashboard',
						__('Habitat', "portailcpt"),
						__('Tableau de bord', "portailcpt"),
						'manage_options',
						'habitat_dashboard',
						array($this, 'habitat_dashboard'));
				add_submenu_page('habitat_dashboard',
						__('Habitat', "portailcpt"),
						__('Bibliotheque', "portailcpt"),
						'manage_options',
						'habitat_bibliotheque',
						array(&$this, 'habitat_lib'));

	}
	// Add menu to administration menu
	public function habitat_add_portail() 
	{
		register_post_type('cpt_h_a_portail', 
			array('public' => true,
				  'labels' => array(
				  		'name' => 'Bibliotheque des portails',
				  		'add_new' => 'Ajouter un portail',
				  		'add_new_item' => 'Ajouter un portail',
				  		'edit_item' => 'Editer un portail',
				  		'new_item' => 'Nouveau portail',
				  		'view_item' => 'Voir un portail',
				  		'search_item' => 'Rechercher un portail',
				  	    'not_found' => 'Portail introuvable',
				  	    'not_found_in_trash' => 'Aucun portail dans la corbeil',
				  		'menu_name' => 'Habitat Portail',
				  		'name_admin_bar' => 'Habitat Portail',
				  		),
				 'supports' => array('title', 'editor', 'thumbnail'),
				 'menu_position'=>5,
				 'show_in_nav_menus' => false,
				 'show_in_menu' => false)
				 );
	}

	public function habitat_add_portillons() 
	{
		register_post_type('cpt_h_a_portillons', 
			array('public' => true,
				  'labels' => array(
				  		'name' => 'Bibliotheque des portillons',
				  		'add_new' => 'Ajouter un portillons',
				  		'add_new_item' => 'Ajouter un portillons',
				  		'edit_item' => 'Editer un portillons',
				  		'new_item' => 'Nouveau portillons',
				  		'view_item' => 'Voir un portillons',
				  		'search_item' => 'Rechercher un portillons',
				  	    'not_found' => 'Portillons introuvable',
				  	    'not_found_in_trash' => 'Aucun portillons dans la corbeil',
				  		'menu_name' => 'Portillons',
				  		'name_admin_bar' => 'Bibliotheque',
				  		),
				 'supports' => array('title', 'editor', 'thumbnail'),
				 'menu_position'=>5,
				 'show_in_nav_menus' => false,
				 'show_in_menu' => false));
	}

	public function habitat_add_cloture() 
	{
		register_post_type('cpt_h_a_cloture', 
			array('public' => true,
				  'labels' => array(
				  		'name' => 'Bibliotheque des clotures',
				  		'add_new' => 'Ajouter une cloture',
				  		'add_new_item' => 'Ajouter une cloture',
				  		'edit_item' => 'Editer une cloture',
				  		'new_item' => 'Nouveau cloture',
				  		'view_item' => 'Voir une cloture',
				  		'search_item' => 'Rechercher une cloture',
				  	    'not_found' => 'Cloture introuvable',
				  	    'not_found_in_trash' => 'Aucune cloture dans la corbeil',
				  		'menu_name' => 'Cloture',
				  		'name_admin_bar' => 'Bibliotheque',
				  		),
				 'supports' => array('title', 'editor', 'thumbnail'),
				 'menu_position'=>5,
				 'show_in_nav_menus' => false,
				 'show_in_menu' => false));
	}

	public function habitat_add_automatisme() 
	{
		register_post_type('cpt_h_a_automatisme', 
			array('public' => true,
				  'labels' => array(
				  		'name' => 'Bibliotheque des automatismes',
				  		'add_new' => 'Ajouter un automatisme',
				  		'add_new_item' => 'Ajouter un automatisme',
				  		'edit_item' => 'Editer une automatisme',
				  		'new_item' => 'Nouveau automatisme',
				  		'view_item' => 'Voir une automatisme',
				  		'search_item' => 'Rechercher une automatisme',
				  	    'not_found' => 'Automatisme introuvable',
				  	    'not_found_in_trash' => 'Aucun automatisme dans la corbeil',
				  		'menu_name' => 'Automatisme',
				  		'name_admin_bar' => 'Bibliotheque',
				  		),
				 'supports' => array('title', 'editor', 'thumbnail'),
				 'menu_position'=>5,
				 'show_in_nav_menus' => false,
				 'show_in_menu' => false));
	}
}