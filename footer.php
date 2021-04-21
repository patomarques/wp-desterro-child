<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bootscore
 */

?>

    <footer class="container mt-5">
        <div class="row">
            <div class="col-12 text-center">
            
                <div class="bootscore-info text-muted text-center">
                    <div class="container">
                        <small><?php bloginfo('name'); ?> &copy;&nbsp;<?php echo Date('Y'); ?></small>    
                    </div>
                </div>
            </div>
        </div>

    </footer>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
