<?php

//call custom css files

 function rb_theme_styles(){

    //splide slider
    wp_enqueue_style('splide_css', get_template_directory_uri() . '/css/plugins/splide.min.css' ,null ,false , 'screen');
    
    //google fonts
    wp_enqueue_style('font_libre_baskerville', 'https://fonts.googleapis.com/css2?family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&display=swap' ,null ,false , 'all');

    //google font judson
    wp_enqueue_style('font_judson', 'https://fonts.googleapis.com/css2?family=Judson&display=swap' ,null ,false , 'all');

    //myowncss
    wp_enqueue_style('my_styles', get_template_directory_uri() . '/css/style.css' ,array('font_libre_baskerville','font_judson') ,false , 'screen');

 }

 add_action('wp_enqueue_scripts','rb_theme_styles');

//Load custom js files
function rb_theme_script(){
    //font awesome
    wp_enqueue_script('font_awesome', 'https://kit.fontawesome.com/92c701d7b9.js' , null ,false,true);
    //splide load
    wp_enqueue_script('splide_js', get_template_directory_uri() .'/js/splide/splide.min.js', null ,false,true);
    //splide initialization
    wp_enqueue_script('splide_init_js', get_template_directory_uri() .'/js/splide/splide.init.js', 'slide_js' ,false,true);
}

add_action('wp_enqueue_script' , 'rb_theme_script');


//register nav menu

function register_my_menus() {

    register_nav_menus(
      array(
        'header-menu' => __( 'Header Menu' ),
        'extra-menu' => __( 'Extra Menu' )
       )
     );
}

   add_action( 'init', 'register_my_menus' );

//featured images
   add_theme_support( 'post-thumbnails' );

    /**
     * Enable support for the following post formats:
     * aside, gallery, quote, image, and video
     */
    add_theme_support( 'post-formats', array ( 'aside', 'gallery', 'quote', 'image', 'video' ) );

// Register sidebars 
add_action( 'widgets_init', 'rb_register_sidebars' );
function rb_register_sidebars() {
    /* Register the 'primary' sidebar. */
    register_sidebar(
        array(
            'id'            => 'primary',
            'name'          => __( 'Primary Sidebar' ),
            'description'   => __( 'A short description of the sidebar.' ),
           
        )
    );
   /* Register the 'secondary' sidebar. */
   register_sidebar(
      array(
          'id'            => 'references',
          'name'          => __( 'References Sidebar' ),
          'description'   => __( 'References will show up here' ),
         
      )
  );

}
?>
