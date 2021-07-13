<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<?php wp_head(); ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />

    <link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;700&display=swap" rel="stylesheet"> 

    <link href='https://api.mapbox.com/mapbox-gl-js/v2.1.1/mapbox-gl.css' rel='stylesheet' />

    <link rel="stylesheet" href="<?= get_stylesheet_directory_uri() . '/assets/scss/desterro.css' ?>">
	
</head>

<?php
	$navbar_scheme   = get_theme_mod( 'navbar_scheme', 'navbar-light bg-light' );
	$navbar_position = get_theme_mod( 'navbar_position', 'static' );

	$search_enabled  = get_theme_mod( 'search_enabled', '1' );
?>

<body <?php body_class(); ?>>

<div class="bg-gradient-degrade"></div>

<?php wp_body_open(); ?>

<a href="#main" class="sr-only sr-only-focusable"><?php _e( 'Skip to main content', 'wp_lula_cortes' ); ?></a>

<div id="wrapper">
    <header class="menu-main">
        <div class="container">
            <div class="row">
                <div class="col-6 col-md-4 offset-md-4 text-center">
                    <a class="navbar-brand" href="<?php echo esc_url( home_url() ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
						<img class="navbar-brand__image" src="<?php echo get_stylesheet_directory_uri( ) . '/assets/img/logo.png'; ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" />
						<!-- <h1 class="logo">Desterro</h1> -->
                    </a>
                </div>
                <div class="col-6 col-md-4">
                    <div class="button_container" id="toggle"><span class="top"></span><span class="middle"></span><span class="bottom"></span></div>
                    <div class="overlay" id="overlay">
                        <nav class="overlay-menu">
                            <?php
                                wp_nav_menu(
                                    array(
                                        'theme_location' => 'main-menu',
                                        'container'      => '',
                                        'menu_class'     => 'navbar-nav mr-auto',
                                        'fallback_cb'    => 'WP_Bootstrap_Navwalker::fallback',
                                        'walker'         => new WP_Bootstrap_Navwalker(),
                                    )
                                );
                            ?>
                            <ul class="social-icons d-flex justify-content-center text-center">
                                <li class="social-icons__item d-inline-flex">
                                    <a href="#" class="social-icons__link social-icons__link--actived">
                                        <i class="fab fa-facebook-f color-white"></i>
                                    </a>
                                </li>
                                <li class="social-icons__item d-inline-flex">
                                    <a href="#" class="social-icons__link ">
                                        <i class="fab fa-instagram color-white"></i>
                                    </a>
                                </li>
                                <li class="social-icons__item d-inline-flex">
                                    <a href="#" class="social-icons__link ">
                                        <i class="fab fa-youtube color-white"></i>
                                    </a>
                                </li>
                            </ul>
                        </nav>

                        
                    </div>
                </div>
            </div>
        </div>
    </header>
