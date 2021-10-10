<?php

// SVG Support

function upload_svg_files( $allowed ) {
    if ( !current_user_can( 'manage_options' ) )
        return $allowed;
    $allowed['svg'] = 'image/svg+xml';
    return $allowed;
}
add_filter( 'upload_mimes', 'upload_svg_files');

// Remove <p> and <br/> from Contact Form 7
add_filter('wpcf7_autop_or_not', '__return_false');

// Hooking up our function to theme setup

function wpb_adding_scripts() {
    wp_enqueue_style( 'slick', get_stylesheet_directory_uri() . '/assets/css/slick.css');
    wp_enqueue_style( 'slick-theme', get_stylesheet_directory_uri() . '/assets/css/slick-theme.css');
    wp_enqueue_style( 'styles', get_stylesheet_directory_uri() . '/assets/css/build.css');

    wp_enqueue_script( 'slick-js', get_template_directory_uri() . '/assets/js/slick.js', array( 'jquery' ),true );
    wp_enqueue_script( 'vivus', get_template_directory_uri() . '/assets/js/vivus.js', array( 'jquery' ),true );
    wp_enqueue_script('gsap',"https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js", array(),true);
    wp_enqueue_script('lottie',"https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.7.3/lottie.min.js", array('jquery'),true);
    wp_enqueue_script('scrolltrigger', "https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/ScrollTrigger.min.js", array('gsap'),true);
    wp_enqueue_script( 'scripts', get_template_directory_uri() . '/assets/js/main.js', array( 'jquery'),true );
    if ( is_front_page() ) :
        wp_enqueue_script( 'google-maps', "https://maps.googleapis.com/maps/api/js?key=AIzaSyBxvPmHKOldzCumaOLDwKeH9X4UlB5Wk_w",true );
    endif;
}
add_action( 'wp_enqueue_scripts', 'wpb_adding_scripts' );