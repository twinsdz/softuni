<?php 

add_theme_support( 'post-thumbnails');

add_image_size( 'job-thumb', 105, 120 );

function softuni_assets () {
 wp_enqueue_style( 'softuni-jobs', 
 get_template_directory_uri() . '/css/master.css', 
 array(), 
 filemtime ( get_template_directory() . '/css/master.css' )
 );
}

add_action( 'wp_enqueue_scripts', 'softuni_assets' );

/**
 * Taking care of our customs menu
 * 
 * 
 */
 function softuni_register_nav_menu(){

    register_nav_menus( array(
        'primary_menu' => __( 'Primary Menu Name', 'softuni' ),  // backup menu
        'footer_menu'  => __( 'Footer Menu', 'softuni' ),
    ) );
}
add_action( 'after_setup_theme', 'softuni_register_nav_menu', 0 );

?>