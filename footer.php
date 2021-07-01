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

    <footer class="container">
        <div class="row mb-5">
            <div class="col-12">
                <img src="<?= get_stylesheet_directory_uri() . "/assets/img/patrocinadores.png" ?>" alt="Apoiadores" 
                class="img-fluid logo-apoiadores d-block m-auto">
            </div>
        </div>
        <div class="row pb-2">
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




<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous"></script>
<script src='https://api.mapbox.com/mapbox-gl-js/v2.1.1/mapbox-gl.js'></script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</body>
</html>
