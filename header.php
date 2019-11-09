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
            <title><?php wp_title( '|', true, 'right' ); ?></title>
            <?php
            }
            add_action( 'wp_head', 'theme_slug_render_title' );
        }
        ?>
    <?php wp_head(); ?>
</head>

<body class="wp_body">

    <header class="main-header">
        <a href="" class="brand-logo">
            <img src="<?php echo get_template_directory_uri() . '/img/Logo.png'; ?>" alt="" class="main-logo">
        </a>

        <?php
        wp_nav_menu(array(
            'menu'              => "Header",
            'container'         => "div",
            'container_class'   => "menu-cont",
            'depth'             => "2",

        ));
        ?>
    </header>
    <div class="wrapper">