<?php
function francdesigns_enqueue_styles() {
    wp_enqueue_style('francdesigns-style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'francdesigns_enqueue_styles');

function francdesigns_theme_setup() {
    add_theme_support('custom-logo', array(
        'height'      => 100,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
    ));
}

add_action('after_setup_theme', 'francdesigns_theme_setup');

function francdesigns_register_menus() {
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'francdesigns'),
        'footer'  => __('Footer Menu', 'francdesigns'),
    ));
}

add_action('after_setup_theme', 'francdesigns_register_menus');
?>