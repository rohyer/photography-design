<?php

add_theme_support( 'post-thumbnails' );

function g_scripts() {

    wp_enqueue_style('style', get_template_directory_uri() . '/assets/css/style.css');

    wp_enqueue_script('jquery-3.4.1', get_template_directory_uri() . '/assets/js/jquery-3.4.1.js', array(), '1.0', true);
    wp_enqueue_script('index', get_template_directory_uri() . '/assets/js/bootstrap/index.js', array(), '1.0', true);
    wp_enqueue_script('owl.carousel', get_template_directory_uri() . '/assets/js/owl/owl.carousel.js', array(), '1.0', true);
    wp_enqueue_script('owl.autoplay', get_template_directory_uri() . '/assets/js/owl/owl.autoplay.js', array(), '1.0', true);
    wp_enqueue_script('owl.navigation', get_template_directory_uri() . '/assets/js/owl/owl.navigation.js', array(), '1.0', true);
    wp_enqueue_script('script', get_template_directory_uri() . '/assets/js/script.min.js', array('jquery'), '1.0', true);

}

add_action('wp_enqueue_scripts', 'g_scripts');

require get_template_directory() . '/inc/customizer.php';

function my_function_admin_bar(){
    return false;
}
add_filter( 'show_admin_bar' , 'my_function_admin_bar');

?>