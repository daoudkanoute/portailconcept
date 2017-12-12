<?php
/*
Plugin Name: Portail cpt plugin
Plugin URI: http://www.e2k.fr
Description: Fonctionnalitées du site 
Version: 1.0
Author: K.Daouda
Author URI: http://www.e2k.fr
License: GPLv2 or later
Text Domain: portailcptplugin
*/

class cpt_Plugin {

	public function __construct() 
	{
		include_once plugin_dir_path(__FILE__).'classes/Collectivite.php';
		new Collectivite();

		include_once plugin_dir_path(__FILE__).'classes/Habitat.php';
		new Habitat();

		add_action('admin_menu', array($this, 'delete_admin'),0);
	}


	public function config_delete_admin($page)
	{
		remove_menu_page($page);
	}

	public function delete_admin()
	{
		$this->config_delete_admin('upload.php');
		$this->config_delete_admin('edit.php');
		//$this->config_delete_admin('themes.php');
		//$this->config_delete_admin('edit.php?post_type=page');
		$this->config_delete_admin('edit-comments.php');
		$this->config_delete_admin('tools.php');
	}



	public function getPortailcptPost($post_type) {
		$post = new WP_Query("post_type=$post_type");
		return $post;
	}

}

new cpt_Plugin();