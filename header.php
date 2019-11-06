<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
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