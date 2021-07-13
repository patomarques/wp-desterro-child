<?php 

function enqueue_styles() {
    get_theme_file_uri() . '/assets/scss/desterro.css';
}

wp_enqueue_style( 'desterro-css', enqu);

function hide_admin_bar(){ return false; }
add_filter( 'show_admin_bar', 'hide_admin_bar' );

add_filter('show_admin_bar', '__return_false');    


function desterro_assets() {
    wp_enqueue_style('desterro-style', get_theme_file_uri() . '/assets/scss/desterro.css');
	wp_enqueue_style('slick-style', get_theme_file_uri() . '/node_modules/slick-carousel/slick/slick.css');
    wp_enqueue_style('slick-theme-style', get_theme_file_uri() . '/node_modules/slick-carousel/slick/slick-theme.css');

    wp_enqueue_script('slick-js', get_theme_file_uri() . '/node_modules/slick-carousel/slick/slick.min.js');
    wp_enqueue_script('desterro-js', get_theme_file_uri() . '/assets/js/desterro.js', array('jquery'), '1.0', true );
}

add_action( 'wp_enqueue_scripts', 'desterro_assets' );

// Our custom post type function
function create_posttype() {
 
    register_post_type( 'sonhos',
        array(
            'labels' => array(
                'name' => __( 'Sonhos' ),
                'singular_name' => __( 'Sonho' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'sonhos'),
            'show_in_rest' => true,
            'supports' => array( 'title', 'author', 'thumbnail', 'custom-fields'), //'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields'
 
        )
    );

    register_post_type( 'equipe',
        array(
            'labels' => array(
                'name' => __( 'Equipe' ),
                'singular_name' => __( 'Equipe' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'equipe'),
            'show_in_rest' => true,
            'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'custom-fields'), //'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields'
 
        )
    );
}
// Hooking up our function to theme setup
add_action( 'init', 'create_posttype' );