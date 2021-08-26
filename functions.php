<?php


function load_css(){
	wp_register_style('mycss' , get_template_directory_uri() . '/css/main.css', array(), false, 'all');
	wp_enqueue_style('mycss');
}

add_action('wp_enqueue_scripts' , 'load_css');

function load_js(){
	wp_enqueue_script('jquery');

	wp_register_script('myjs' , get_template_directory_uri() . 'myjs.js');
}

add_action('wp_enqueue_scripts' , 'load_js');





//Menu

add_theme_support('menus');


update_option( 'siteurl', 'localhost/wordpress' );

add_filter( 'http_request_host_is_external', '__return_true' );