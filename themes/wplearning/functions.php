<?php
 /*
 This  is  function file
 */


        function wplearning_theme_setup() {
          
            add_theme_support('custom-logo');

            
            add_theme_support('title-tag');

            add_theme_support('post-thumbnails');

            add_theme_support('automatic-feed-links');

            register_nav_menus( array(
            'primary'   => __( 'Primary Menu', 'wplearning' ),
            ) );
            };
        add_action('after_setup_theme', 'wplearning_theme_setup');



           

            function wplearning_theme_scripts() {
            wp_enqueue_style('style', get_template_directory_uri() . '/style.css', the_time());    
            wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/assests/bootstrap/css/bootstrap.min.css');
            # wp_enqueue_style('style', get_stylesheet_directory_uri()); me  code
            wp_enqueue_script('jquery');
            wp_enqueue_script('bootstrap-js', get_template_directory_uri().'/assests/bootstrap/js/bootstrap.min.js'); 
            } 

            add_action('wp_enqueue_scripts', 'wplearning_theme_scripts', 10);


            //register  side  bar code 
            
            
                    function wplearning_widgets_init() {
	                register_sidebar( array(
		            'name'          => __( 'Primary Sidebar', 'theme_name' ),
		            'id'            => 'main-sidebar',
                    'description'   =>  'Main Sidebar on Right Side',
		            'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		            'after_widget'  => '</aside>',
		            'before_title'  => '<h3 class="widget-title">',
		            'after_title'   => '</h3>',
	         ) );
             
             
             function wplearning_widgets_init() {
                register_sidebar( array(
                'name'          => __( 'Footer widget 1', 'theme_name' ),
                'id'            => 'footer-1',
                'before_widget' => '<aside id="%1$s" class="widget %2$s">',
                'after_widget'  => '</aside>',
                'before_title'  => '<h3 class="widget-title">',
                'after_title'   => '</h3>',
            ) );

                function wplearning_widgets_init() {
                    register_sidebar( array(
                    'name'          => __( 'Footer widget 2', 'theme_name' ),
                    'id'            => 'footer-2',
                    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
                    'after_widget'  => '</aside>',
                    'before_title'  => '<h3 class="widget-title">',
                    'after_title'   => '</h3>',
            ) );
            
                function wplearning_widgets_init() {
                    register_sidebar( array(
                    'name'          => __( 'Footer widget 3', 'theme_name' ),
                    'id'            => 'footer-3',
                    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
                    'after_widget'  => '</aside>',
                    'before_title'  => '<h3 class="widget-title">',
                    'after_title'   => '</h3>',
            ) );
        	       
            }
           add_Action( 'widgets_init', 'wplearning_widgets_init' );


?>