<?php
// Enqueue Tailwind CSS
function my_theme_enqueue_styles() {
    wp_enqueue_style('tailwindcss', get_template_directory_uri() . '/output.css', array(), '1.0');
}
add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles');

// Add theme support for features like title tag, post thumbnails, etc.
function my_theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'my_theme_setup');
