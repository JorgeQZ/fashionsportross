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
            <?php wp_head(); ?>
</head>

<body class="wp_body">

    <header class="main-header">
        <a href="<?php home_url() ?>" class="brand-logo">
            <img src="<?php echo get_template_directory_uri() . '/img/Logo.png'; ?>" alt="" class="main-logo">
        </a>
        <div class="container-cuenta">
            <div class="contain-account">
                <div class="column">
                <?php 
                    if (is_user_logged_in()) {
                       ?>
                       <a href="<?php home_url().'/mi-cuenta'; ?>">Mi cuenta</a>
                       <?php
                    }else{
                       ?>
                       <a href="<?php home_url().'/mi-cuenta'; ?>">Iniciar Sesión</a>
                       <?php
                    }
                    ?>
                </div>
                <div style="padding: 0px 2px;">
                    |
                </div>
                <div class="column">
                    <a class="cart-customlocation" href="<?php echo wc_get_cart_url(); ?>" title="<?php _e( 'Ve tu carrito' ); ?>">
                        Carrito
                        <img src="<?php echo get_template_directory_uri().'/img/icono-carrito.png'; ?>" alt="">
                        (<?php echo sprintf ( _n( '%d', '%d', WC()->cart->get_cart_contents_count() ), WC()->cart->get_cart_contents_count() );?>)
                    </a>
                </div>
            </div>
            <?php
                wp_nav_menu(array(
                'menu'              => "Header",
                'container'         => "div",
                'container_class'   => "menu-cont",
                'depth'             => "2",
            ));
            ?>
        </div>
    </header>
    <div class="wrapper">