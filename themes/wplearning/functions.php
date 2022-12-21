<?php
 /*
 This  is  function file
 */



 add_theme_support('custom-logo');
 register_nav_menus( array(
    'primary'   => __( 'Primary Menu', 'myfirsttheme' ),
    'secondary' => __( 'Secondary Menu', 'myfirsttheme' )
) );

function wplearning_theme_scripts() {
    wp_enqueue_style('style', get_template_directory_uri() . '/style.css', the_time());    
    wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/assests/bootstrap/css/bootstrap.min.css');
    # wp_enqueue_style('style', get_stylesheet_directory_uri()); me  code
    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrap-js', get_template_directory_uri().'/assests/bootstrap/js/bootstrap.min.js'); 
} 

add_action('wp_enqueue_scripts', 'wplearning_theme_scripts', 10);


?>