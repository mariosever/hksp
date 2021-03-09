<?php

if ( ! function_exists( 'hksp_setup' ) ) {

    function hksp_setup() {
     
        add_theme_support( 'post-thumbnails' );
        add_theme_support( 'title-tag' );

        register_nav_menu( 'primary', 'Primary Menu' );

        add_theme_support( 'post-formats', array ( 'aside', 'gallery', 'quote', 'image', 'video' ) );

    }

}

add_action( 'after_setup_theme', 'hksp_setup' );


// učitaj skripte i css 
if ( ! function_exists( 'hksp_scripts_and_styles' ) ) {

	function hksp_scripts_and_styles() {

		$cache_ver = '1.0';

		wp_register_style( 'global', get_template_directory_uri() . '/assets/css/main.css?v='.time(), array(), false, 'all' );

		wp_register_script( 'global', get_template_directory_uri() . '/assets/js/main.js', array(), $cache_ver, true );

		wp_enqueue_style( 'global' );
		wp_enqueue_script( 'global' );

	}

}

add_action( 'wp_enqueue_scripts', 'hksp_scripts_and_styles' );


?>