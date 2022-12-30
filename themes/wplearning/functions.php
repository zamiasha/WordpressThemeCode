<?php
 /*
 This  is  function file
 */


        function wplearning_theme_setup() {
          
            add_theme_support('custom-logo');

            
            add_theme_support('title-tag');

            add_theme_support('post-thumbnails');

            //add img  size  issue
            add_image_size('home-featured', 680, 400,  array('center', 'center' )); 


            add_theme_support('automatic-feed-links');

            register_nav_menus( array(
            'primary'   => __( 'Primary Menu', 'wplearning' ),
            ) );
             
            $args = array(
                'deafult-image' => get_template_directory_uri().'/assests/img/header-1.jpg',
                'default-text-color'  =>  '000',
                'width'         => 1920,
                'height'        => 400,
                'flex-width'    => true,
                'flex-height'   => true,
            );
            add_theme_support( "custom-header", $args  ); 
            };
        add_action('after_setup_theme', 'wplearning_theme_setup');

        



           

            function wplearning_theme_scripts() {
            wp_enqueue_style('style', get_template_directory_uri() . '/style.css', the_time());    
            wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assests/bootstrap/css/bootstrap.min.css');
            # wp_enqueue_style('style', get_stylesheet_directory_uri()); me  code
            wp_enqueue_script('jquery');
            wp_enqueue_script('bootstrap-js', get_template_directory_uri().'/assests/bootstrap/js/bootstrap.min.js'); 
            } 

            add_action('wp_enqueue_scripts', 'wplearning_theme_scripts', 10);


            // register  side  bar code 
            
            
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
            }
            add_action( 'widgets_init', 'wplearning_widgets_init',10 );






                   //zahib footer  widget display code 
                function wplearning_widgets_footer_init () {
                    register_sidebar( array (
                        'name'=>esc_html__( 'footer_widget-1', 'wplearning' ),
                        'id'=> 'footerr-1',
                        'before_widget'=>'<section class="new-sec">',
                        'after_widget'=> '</section>',
                        'before_title'=> '<h3 class="f-h">',
                        'after_title'=>'</h3>'
                    )); 
                }
                add_action( 'widgets_init', 'wplearning_widgets_footer_init', 10 );

                    //2nd  widgets
                    function wplearning_widgets_footer_init_2() {
                    register_sidebar( array (
                        'name'=>esc_html__( 'footer_widget-2', 'wplearning' ),
                        'id'=> 'footerr-2',
                        'before_widget'=>'<section class="new-sec">',
                        'after_widget'=> '</section>',
                        'before_title'=> '<h3 class="f-h">',
                        'after_title'=>'</h3>'
                    ));
                }
                add_action( 'widgets_init', 'wplearning_widgets_footer_init_2', 10 );

                        //3rd widgets 
                        function wplearning_widgets_footer_init_3 () {                   
                     register_sidebar( array (
                        'name'=>esc_html__( 'footer_widget-3', 'wplearning' ),
                        'id'=> 'footerr-3',
                        'before_widget'=>'<section class="new-sec">',
                        'after_widget'=> '</section>',
                        'before_title'=> '<h3 class="f-h">',
                        'after_title'=>'</h3>'
                     )); 
                     }
                

                add_action( 'widgets_init', 'wplearning_widgets_footer_init_3', 10 );
                













            // my  footer  old  code     to display widgets 


            //register footer  widegt  code  with backend  and  display on site apperance
     
          

            //     //footer 2nd widgets
            //     register_sidebar( array(
            //         'name'          => __( 'Footer Widgets 2', 'theme_name' ),
            //         'id'            => 'footer-2',
            //         'before_widget' => '<aside id="%1$s" class="widget %2$s">',
            //         'after_widget'  => '</aside>',
            //         'before_title'  => '<h3 class="widget-title">',
            //         'after_title'   => '</h3>',
            // ) );  


            // //footer 3rd widgets  code  
            //     register_sidebar( array(
            //         'name'          => __( 'Footer Widgets 3', 'theme_name' ),
            //         'id'            => 'footer-3',
            //         'before_widget' => '<aside id="%1$s" class="widget %2$s">',
            //         'after_widget'  => '</aside>',
            //         'before_title'  => '<h3 class="widget-title">',
            //         'after_title'   => '</h3>',
            // ) );  
        

            
        //    add_Action( 'widgets_init', 'wplearning_widgets_init' );

   




  
?>