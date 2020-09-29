<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo bloginfo('name'); ?></title>

    <?php wp_head(); ?>
</head>
<body>
    
    <header>
        <nav id="site-nav">
            <div id="nav-operations">
                <button id="close-nav"></button>
            </div>

            <?php
                wp_nav_menu( array(
                    'menu' => 'primary',
                    'menu_id'   => 'primary-menu'
                ) );
            ?>
        </nav>
        <!-- <button id="open-nav"></button> -->

        <div id="logo">
            <div class="layer-1">
                <a href="<?php echo esc_url(site_url()); ?>">
                    <?php echo file_get_contents(get_template_directory_uri() . '/assets/images/t-logo.svg') ?>
                </a>
            </div>
            <?php
            /*
            <div class="layer-2">
                <?php echo file_get_contents(get_template_directory_uri() . '/assets/images/t-logo.svg') ?>
            </div>
            <div class="layer-3">
                <?php echo file_get_contents(get_template_directory_uri() . '/assets/images/t-logo.svg') ?>
            </div>
            <img src="<?php echo get_template_directory_uri() . '/assets/images/tp-logo.png' ?>" alt="">
            */
            ?>
        </div>
    </header>

    <main id="site-content">