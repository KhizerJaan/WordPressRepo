<?php

/*
Plugin Name: Form Short Code
Plugin URI: http://wordpress.org/plugins/form-shortcode/
Description: This plugin creates a short code for form submission.
Author: Khizer Jan
Version: 0.0.1
*/

defined('ABSPATH') or die("can't access!");
	
function_exists('add_action') or die("can't access!");

class FormShortCode{

	function __construct(){
		add_action('init', array($this,'customPostType'));
	}

	function activate(){

		register_uninstall_hook( __FILE__, array($this , 'uninstall') );
		// generate a CPT
		$this->customPostType();
		//flush rewrite rules
		flush_rewrite_rules();
	}

	function deactivate(){
		//flush rewrite rules
		flush_rewrite_rules();
	}

	static function uninstall(){
		//delete CPT
		echo " called";
	}

	function customPostType(){
		register_post_type("news_article", ['public' => true , 'label' => "News Articles"]);
	}

}

if (class_exists('FormShortCode')){
	$formShortCode = new FormShortCode();
}

register_activation_hook( __FILE__, array($formShortCode , 'activate') );
register_deactivation_hook( __FILE__, array($formShortCode , 'deactivate') );