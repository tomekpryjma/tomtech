<?php

function tomtech_register_menus() {
    register_nav_menu( 'primary', 'Primary Menu' );
}
add_action( 'init', 'tomtech_register_menus' );

function tomtech_custom_post_types() {
    register_post_type('tutorial', array(
        'labels' => array(
            'name' => 'Tutorials',
            'singular_name' => 'Tutorial',
        ),

        'public' => true,
        'has_archive' => true,
    ));
}
add_action('init', 'tomtech_custom_post_types');

function tomtech_enqueue_scripts() {
    wp_enqueue_script('gsap', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js', array(), '3.5.1', true);

    wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js', array('gsap'), '1.0', true);
}
add_action('wp_enqueue_scripts', 'tomtech_enqueue_scripts');

function tomtech_enqueue_styles() {
    wp_enqueue_style('tomtech-style', get_stylesheet_uri(), array(), '1.0');
}
add_action('wp_enqueue_scripts', 'tomtech_enqueue_styles');

function tomtech_homepage_banner_text_output() {
    $banner_title = get_field('banner_title');
    
    if ($banner_title) {
        echo $banner_title;
        return;
    }

    $available_titles = array(
        'Wilkommen!',
        'Hi!',
        'Hello!',
        'Dobar Dan!',
        'Cześć!',
    );
    
    $random_index = rand(0, count($available_titles) - 1);
    $banner_title = $available_titles[$random_index];

    echo $banner_title;
}
add_action('tomtech_homepage_banner_text', 'tomtech_homepage_banner_text_output');