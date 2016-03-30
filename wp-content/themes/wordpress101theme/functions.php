<?php

function wordpress101_script_enqueue() {

	// Enqueue custom style
	wp_enqueue_style( 'customstyle', get_template_directory_uri() . '/css/wordpress101theme.css', array(), '1.0.0', 'all' );
	// Enqueue custom javascript
	wp_enqueue_script( 'customjs', get_template_directory_uri() . '/js/wordpress101theme.js', array(), '1.0.0', true );

}

add_action( 'wp_enqueue_scripts', 'wordpress101_script_enqueue' );

// Theme support function
function wordpress101_theme_setup() {

	// Theme support hook
	add_theme_support( 'menus' );

	// Register custom navigation menu
	register_nav_menu( 'primary', 'Primary Header Navigation' );
	register_nav_menu( 'secondary', 'Footer Navigation' );

}

add_action( 'init', 'wordpress101_theme_setup' );

add_theme_support( 'custom-background' );
add_theme_support( 'custom-header' );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'post-formats', array( 'aside', 'image', 'video' ) );

add_filter( 'show_admin_bar', '__return_false' );