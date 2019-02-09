<?php

function understrap_remove_scripts() {
    wp_dequeue_style( 'understrap-styles' );
    wp_deregister_style( 'understrap-styles' );

    wp_dequeue_script( 'understrap-scripts' );
    wp_deregister_script( 'understrap-scripts' );

    // Removes the parent themes stylesheet and scripts from inc/enqueue.php
}
add_action( 'wp_enqueue_scripts', 'understrap_remove_scripts', 20 );

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {

	// Get the theme data
	   $the_theme = wp_get_theme();
    wp_enqueue_style( 'child-understrap-styles', get_stylesheet_directory_uri() . '/css/child-theme.min.css', array(), $the_theme->get( 'Version' ) );
    wp_enqueue_script( 'jquery');
	  wp_enqueue_script( 'popper-scripts', get_template_directory_uri() . '/js/popper.min.js', array(), false);
    wp_enqueue_script( 'child-understrap-scripts', get_stylesheet_directory_uri() . '/js/child-theme.min.js', array(), $the_theme->get( 'Version' ), true );
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
	  wp_enqueue_script( 'tolka', get_stylesheet_directory_uri() . '/js/tolka.js', array('jquery'), false);

    wp_enqueue_style( 'adobe-font', 'https://use.typekit.net/sxl2gvd.css' , false );
     //wp_enqueue_style( 'google-font', 'https://fonts.googleapis.com/css?family=Montserrat' , false );


}

/****** social media icons *****/
// add_action( 'wp_enqueue_scripts', 'add_fontawesome' );
// function add_fontawesome(){
//       wp_enqueue_style( 'load-fa', 'https://use.fontawesome.com/releases/v5.0.8/css/all.css' );
// }
