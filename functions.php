<?php

/**
 * Base theme for all Sebo Wordpress projects
 */

/**
 * Adds theme support for basic elements
 * - register navigation
 * - set up thumbnails
 */
function theme_setup()
{
    // register main navigation
    register_nav_menus( array(
        'primary' => 'Primary Menu',
        'footer' => 'Footer Menu'
    ) );
    // theme thumbnails
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'theme_setup');

/**
 * Adds Styles and Scripts
 * - Scripts
 * + custom.js
 * - Styles
 * + style.scss
 * + style.css
 */
function theme_styles_scripts()
{

    // load main stylesheet
    wp_enqueue_style('theme-style', get_stylesheet_uri());

    // load compiled scss
    wp_enqueue_style('theme-main-style', get_template_directory_uri() . '/style.php/style.scss');

}
add_action('wp_enqueue_scripts', 'theme_styles_scripts');

/**
 * Adds widget areas
 * - sidebar
 */
function theme_widget_areas()
{

    register_sidebar(array(
        'name' => 'Primary Sidebar',
        'id' => 'primary-sidebar',
        'description' => 'Appears on posts and pages',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));

}
add_action('widgets_init', 'theme_widget_areas');

