<?php
/**
 * Template Name: Blog Index
 * Description: The template for displaying the Blog index /blog.
 *
 */

get_header();

$page_id = get_option( 'page_for_posts' );
?>

<div id='map' style='width: 400px; height: 300px;'></div>

<?php
get_footer();
