<?php
/*
	==============================================
	Include scripts
	==============================================
*/
function wordpress101_script_enqueue() {

	wp_enqueue_style( 'bootstrap-style', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '3.3.6', 'all' );
	wp_enqueue_style( 'custom-style', get_template_directory_uri() . '/css/wordpress101theme.css', array(), '1.0.0', 'all' );
	wp_enqueue_script( 'jquery-library', get_template_directory_uri() . '/js/jquery-1.12.2.min.js', array(), '1.12.2', true );
	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '1.0.0', true );
	wp_enqueue_script( 'custom-js', get_template_directory_uri() . '/js/wordpress101theme.js', array(), '3.3.6', true );

}

add_action( 'wp_enqueue_scripts', 'wordpress101_script_enqueue' );

/*
	==============================================
	Activate menus
	==============================================
*/
function wordpress101_theme_setup() {

	// Theme support hook
	add_theme_support( 'menus' );

	// Register custom navigation menu
	register_nav_menu( 'primary', 'Primary Header Navigation' );
	register_nav_menu( 'secondary', 'Footer Navigation' );

}

add_action( 'init', 'wordpress101_theme_setup' );

/*
	==============================================
	Theme support functions
	==============================================
*/
add_theme_support( 'custom-background' );
add_theme_support( 'custom-header' );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'post-formats', array( 'aside', 'image', 'video' ) );

/*
	==============================================
	Filters
	==============================================
*/
add_filter( 'show_admin_bar', '__return_false' );