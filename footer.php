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

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous"></script>
<script src='https://api.mapbox.com/mapbox-gl-js/v2.1.1/mapbox-gl.js'></script>
<script>
    $(document).ready(function(){
        mapboxgl.accessToken = 'YOUR_MAPBOX_ACCESS_TOKEN';
            var map = new mapboxgl.Map({
            container: 'map',
            style: 'mapbox://styles/mapbox/streets-v11'
        });
    });
</script>
</body>
</html>
