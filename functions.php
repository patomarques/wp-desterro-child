<?php 

wp_enqueue_style( 'desterro-css', get_theme_file_uri() . '/assets/scss/desterro.css');
wp_enqueue_script( 'desterro-js', get_theme_file_uri() . '/assets/js/desterro.js', array('jquery'), '1.0', true );

function hide_admin_bar(){ return false; }
add_filter( 'show_admin_bar', 'hide_admin_bar' );

add_filter('show_admin_bar', '__return_false');    