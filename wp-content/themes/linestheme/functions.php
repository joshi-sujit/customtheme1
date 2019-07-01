<?php
function load_stylesheets()
{
    wp_register_style('bootstrap_css', get_template_directory_uri() . '/css/bootstrap.min.css', array(), false, 'all');
    wp_enqueue_style('bootstrap_css'); //bootstrap_css is css file name it can be anything

    wp_register_style('main_css', get_template_directory_uri() . '/style.css', array(), false, 'all');
    wp_enqueue_style('main_css'); //bootstrap_css is css file name it can be anything
}

add_action('wp_enqueue_scripts', 'load_stylesheets');


function load_js()
{
    wp_register_script('vuejs', get_template_directory_uri() . '/js/vue.js', '', '2.6.10', true);
    wp_enqueue_script('vuejs');

    wp_register_script('theme_js', get_template_directory_uri() . '/js/script.js', '', '1.0', true);
    wp_enqueue_script('theme_js');
}



add_action('wp_enqueue_scripts', 'load_js');

//Add Menus in the Theme

add_theme_support('menus');


register_nav_menus(
    array(
        'top-menu' => __('Top Menu', 'theme'),
        'footer-menu' => __('Footer Menu', 'theme')

    )
);

/*Add Theme Support*/
add_theme_support('post-thumbnails');


add_image_size('smallest', 300, 300, true);
add_image_size('largest', 800, 800, true);
