<?php
function blank_theme_setup() {
    add_theme_support('title-tag');
    // Add other theme support as needed
}
add_action('after_setup_theme', 'my_empty_theme_setup');

function blank_theme_styles() {
    wp_enqueue_style('style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'my_empty_theme_styles');