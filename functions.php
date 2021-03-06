<?php

function learningWordPress_resources() {

   wp_enqueue_style('style', get_stylesheet_uri());
   wp_enqueue_style('uikit-style', get_bloginfo( 'stylesheet_directory' ) . '/js/ui-kit/css/uikit.min.css'); 
    wp_enqueue_style('menu-style', get_bloginfo( 'stylesheet_directory' ) . '/menu.css'); 
   wp_enqueue_script('jquery'); 
   wp_enqueue_script('uikit', get_bloginfo('stylesheet_directory') . '/js/ui-kit/js/uikit.min.js', array( 'jquery' ), '1.0.0'); 
	wp_enqueue_script('app', get_bloginfo('stylesheet_directory') . '/js/app.js', array( 'jquery' ), '1.0.0');    
}

add_action('wp_enqueue_scripts', 'learningWordPress_resources');

// Navigation Menus
register_nav_menus(array(
    'primary' => __( 'Primary Menu')
    ));