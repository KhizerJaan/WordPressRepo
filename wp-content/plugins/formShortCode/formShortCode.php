<?php

/*
Plugin Name: Form Short Code
Plugin URI: http://wordpress.org/plugins/form-shortcode/
Description: This plugin creates a short code for form submission.
Author: Khizer Jan
Version: 0.0.1
*/


function userForm() {
	
	printf(
		'<p id="form"><span class="screen-reader-text">%s </span><span dir="ltr"%s>%s</span></p>'
	);
}

// Now we set that function up to execute when the admin_notices action is called.
add_action( 'userForm', 'userForm' );