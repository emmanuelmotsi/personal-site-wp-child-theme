<?php
/**
 * GeneratePress child theme functions and definitions.
 * Add your custom PHP in this file.
 * Only edit this file if you have direct access to it on your server (to fix errors if they happen).
 */

 function generate_press_child_theme_enqueue_styles() {
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('main-css', get_stylesheet_directory_uri() . '/style.css');
 }

 add_action('wp_enqueue_scripts', 'generate_press_child_theme_enqueue_styles');
