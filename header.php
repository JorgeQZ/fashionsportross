<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php
    if ( ! function_exists( '_wp_render_title_tag' ) ) {
        function theme_slug_render_title() {
            ?>
    <title>
        <?php wp_title( '|', true, 'right' ); ?>
    </title>
    <?php
            }
            add_action( 'wp_head', 'theme_slug_render_title' );
        }
        ?>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <?php wp_head(); ?>
</head>

<body class="wp_body">
    <header class="main-header">
        <div class="contain-search-bar">
            <?php dynamic_sidebar( 'Buscador' );?>
        </div>
        <div class="header-content">

            <a href="<?php home_url() ?>" class="brand-logo">
                <img src="<?php echo get_template_directory_uri() . '/img/Logo.png'; ?>" alt="" class="main-logo">
            </a>
            <div class="container-cuenta" id="container-id">
                <div class="contain-account">
                    <div class="column">
                        <a class="cart-customlocation" href="<?php echo wc_get_cart_url(); ?>"
                            title="<?php _e( 'Ve tu carrito' ); ?>">
                            Carrito
                            <img src="<?php echo get_template_directory_uri().'/img/icono-carrito.png'; ?>" alt="">
                            (<?php echo sprintf ( _n( '%d', '%d', WC()->cart->get_cart_contents_count() ), WC()->cart->get_cart_contents_count() );?>)
                        </a>
                    </div>
                </div>

                <div class="contain-search">
                    <img src="<?php echo get_template_directory_uri().'/img/search.png' ?>" alt="" id="search-button">
                </div>
                <?php
                wp_nav_menu(array(
                'menu'              => "Header",
                'menu_id'              => "main_menu",
                'container'         => "div",
                'container_class'   => "menu-cont",
                'depth'             => "2",
            ));
            ?>

            </div>

            <div class="mobile-button" id="mobile-button">
                <div class="bars"></div>
                <div class="bars"></div>
                <div class="bars"></div>
            </div>
        </div>
    </header>
    <div class="wrapper">