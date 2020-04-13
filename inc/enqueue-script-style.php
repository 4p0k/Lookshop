<?php
if ( ! defined('ABSPATH')){
    exit; // Exit if accessed directly
}

function lookshop_scripts() {
	wp_enqueue_style( 'lookshop-style', get_stylesheet_uri() );

	wp_enqueue_script( 'lookshop-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'lookshop-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'lookshop_scripts' );

add_action( 'wp_enqueue_scripts', 'style_theme' );
function style_theme(){
	wp_enqueue_style( 'style', get_stylesheet_uri() );
	wp_enqueue_style( 'main_style', get_template_directory_uri() . '/assets/css/style.css');
	wp_enqueue_style( 'slick', get_template_directory_uri() . '/assets/css/slick.css');
	wp_enqueue_style( 'slick-theme', get_template_directory_uri() . '/assets/css/slick-theme.css');
}

add_action( 'wp_footer', 'scripts_theme' );
function scripts_theme(){
	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', '//ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js' );
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'migrate', '//code.jquery.com/jquery-migrate-3.1.0.js', ['jquery'], null, true );
	wp_enqueue_script( 'slick', get_template_directory_uri() . '/assets/scripts/slick.min.js', ['migrate'], null, true );
	wp_enqueue_script( 'main_script', get_template_directory_uri() . '/assets/scripts/script.js' , ['jquery'], null, true );
}