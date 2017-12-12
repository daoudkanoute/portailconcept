<?php

class Collectivite {
	

	public function __construct() 
	{
		$this->register();
		$this->hook_admin_menu();
	}

	public function register() 
	{
		add_action('init', array(&$this, 'collectivite_add_portillons'),0);
		add_action('init', array(&$this, 'collectivite_add_cloture'),0);
		add_action('init', array(&$this, 'collectivite_add_porte_de_parking'),0);
		add_action('init', array(&$this, 'collectivite_add_controle_acces'),0);
	}

	public function collectivite_lib() 
	{
		$url = site_url();
		echo "<h1>Bibliothèque collectivité</h1>";
		echo "<a href='".$url."/wp-admin/edit.php?post_type=c_add_controle_acces'>Bibliothèque portillons</a><br>";
		echo "<a href='".$url."/wp-admin/edit.php?post_type=c_add_parking'>Bibliothèque clôture</a><br>";
		echo "<a href='".$url."/wp-admin/edit.php?post_type=c_add_controle_acces'>Bibliothèque contrôle d'accès</a><br>";	
		echo "<a href='".$url."/wp-admin/edit.php?post_type=c_add_parking'>Bibliothèque porte de parking</a><br>";
	}

	public function collectivite_dashboard() 
	{
		$url = site_url();
		echo "<h1>Tableau de bord habitat</h1>";
		echo "<a href='".$url."/wp-admin/post-new.php?post_type=c_add_portillons'>Ajouter portillons</a><br>";
		echo "<a href='".$url."/wp-admin/post-new.php?post_type=c_add_parking'>Ajouter clôture</a><br>";
		echo "<a href='".$url."/wp-admin/post-new.php?post_type=c_add_controle_acces'>Ajouter contrôle d'acces</a><br>";
		echo "<a href='".$url."/wp-admin/post-new.php?post_type=c_add_parking'>Ajouter porte de parking</a><br>";
	}

	public function hook_admin_menu() {
		add_action('admin_menu', array($this, 'hook_menu'),0);
		add_action('admin_menu', array($this, 'hook_submenu'),0);
	}

	public function hook_menu() 
	{
		add_menu_page('Configuration collectivité',
					  'Collectivité',
					  "manage_options",
					  "collectivite_dashboard",
					  array($this, 'collectivite_dashboard'), '', 5);

	}

	public function hook_submenu()
	{

				add_submenu_page('collectivite_dashboard',
						__('Collectivité', "portailconcept"),
						__('Tableau de bord', "portailconcept"),
						'manage_options',
						'collectivite_dashboard',
						array($this, 'collectivite_dashboard'));
				add_submenu_page('collectivite_dashboard',
						__('Collectivité', "portailconcept"),
						__('Bibliotheque', "portailconcept"),
						'manage_options',
						'colletivite_bibliotheque',
						array(&$this, 'collectivite_lib'));
	}

	public function collectivite_add_controle_acces() 
	{
		register_post_type('c_add_controle_acces', 
			array('public' => true,
				  'labels' => array(
				  		'name' => 'Bibliotheque des contrôle d\'accès',
				  		'add_new' => 'Ajouter un contrôle d\'accès',
				  		'add_new_item' => 'Ajouter un contrôle d\'accès',
				  		'edit_item' => 'Editer un contrôle d\'accès',
				  		'new_item' => 'Nouveau contrôle d\'accès',
				  		'view_item' => 'Voir un contrôle d\'accès',
				  		'search_item' => 'Rechercher un contrôle d\'accès',
				  	    'not_found' => 'Contrôle d\'accès introuvable',
				  	    'not_found_in_trash' => 'Aucun contrôle d\'accès dans la corbeil',
				  		'menu_name' => 'Contrôle d\'accès',
				  		'name_admin_bar' => 'Bibliotheque',
				  		),
				 'supports' => array('title', 'editor', 'thumbnail'),
				 'menu_position'=>6,
				 'show_in_nav_menus' => true,
				 'show_in_menu' => false));
	}

	public function collectivite_add_porte_de_parking() 
	{
		register_post_type('c_add_parking', 
			array('public' => true,
				  'labels' => array(
				  		'name' => 'Bibliotheque des portes de parking',
				  		'add_new' => 'Ajouter une porte de parking',
				  		'add_new_item' => 'Ajouter une porte de parking',
				  		'edit_item' => 'Editer une porte de parking',
				  		'new_item' => 'Nouvelle porte de parking',
				  		'view_item' => 'Voir une porte de parking',
				  		'search_item' => 'Rechercher une porte de parking',
				  	    'not_found' => 'Porte de parking introuvable',
				  	    'not_found_in_trash' => 'Aucune porte de parking dans la corbeil',
				  		'menu_name' => 'Porte de parking',
				  		'name_admin_bar' => 'Bibliotheque',
				  		),
				 'supports' => array('title', 'editor', 'thumbnail'),
				 'menu_position'=>5,
				 'show_in_nav_menus' => false,
				 'show_in_menu' => false));
	}

	public function collectivite_add_portillons() 
	{
		register_post_type('c_add_portillons', 
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

	public function collectivite_add_cloture() 
	{
		register_post_type('c_add_cloture', 
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
				  		'name_admin_bar' => 'Collectivité cloture',
				  		),
				 'supports' => array('title', 'editor', 'thumbnail'),
				 'menu_position'=>5,
				 'show_in_nav_menus' => true,
				 'show_in_menu' => false));
	}
}