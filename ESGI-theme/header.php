<!doctype html>
<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <header id="site-header">
        <div style="display: flex" class="logo">
            <h1 class="Header-Logo">ESGI.</h1>
            <div class="carré""></div>
        </div>
        <div class="container">
            <?php get_template_part('menu'); ?>
        </div>
    </header>