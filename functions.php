<?php

add_theme_support( 'post-thumbnails' );

function g_scripts() {

    wp_enqueue_style('style', get_template_directory_uri() . '/assets/css/style.css');

    wp_enqueue_script('jquery-3.4.1', get_template_directory_uri() . '/assets/js/jquery-3.4.1.js');
    wp_enqueue_script('index', get_template_directory_uri() . '/assets/js/bootstrap/index.js');
    wp_enqueue_script('owl.carousel', get_template_directory_uri() . '/assets/js/owl/owl.carousel.js');
    wp_enqueue_script('script', get_template_directory_uri() . '/assets/js/script.js', array('jquery'), '1.0', true);

}

add_action('wp_enqueue_scripts', 'g_scripts');

require get_template_directory() . '/inc/customizer.php';


?>