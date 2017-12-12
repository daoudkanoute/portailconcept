<?php

class Thumbnails {
	
	public function __construct($args = array()) {
		$this->register($args);
	}

	public function register($args = array()) {

		add_action('add_meta_boxes', array($this, 'initThumbnailCore'), 0);
	}

	public function initThumbnailCore() {

	}
}