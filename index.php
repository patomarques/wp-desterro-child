<?php
/**
 * Template Name: Blog Index
 * Description: The template for displaying the Blog index /blog.
 *
 */

get_header();

$page_id = get_option( 'page_for_posts' );
?>

<!-- <div id='map' class="map-responsive"></div> -->

<section id="intro" class="container mt-5 pt-5">
    <div class="row">
        <div class="col-12 col-md-6 text-center">
            <h2 class="title-section">Sobre</h2>
            <h3 class="title-sub">projeto desterro</h3>
        </div>
        <div class="col-12 col-md-6">
            <div class="square-image">
                teste
            </div>
        </div>
    </div>
</section>

<?php
get_footer();
