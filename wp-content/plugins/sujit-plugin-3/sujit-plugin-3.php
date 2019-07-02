<?php
/*
Plugin Name: Sujit Plugin 3
Plugin URI: #
Description: Add a sidebar/widget to single posts
Author: Sujit Joshi 
Version: 1.0
Text Domain: sp3
License: GPL
*/

if (!defined('ABSPATH')) {
    die;
}

/**
 * add sp3 stylesheet to the plugin
 *  */
add_action('wp_enqueue_scripts', 'sj3_add_stylesheet', 11);
function sj3_add_stylesheet()
{
    // add_filter('sj3_load_styles')
    if (apply_filter('sj3_load_styles', true)) {
        wp_register_style('sj3_stylesheet', plugin_dir_url(__FILE__) . 'sj3-style.css');
        wp_enqueue_style('sj3_stylesheet');
    }
}

/**
 * Register Sidebar HOOk
 */
add_action('widgets_init', 'sj3_register_sidebar');

function sj3_register_sidebar()
{
    register_sidebar(array(
        'name'  => __('Post Content Plus', 'sj3'),
        'id'    =>   'sj3-sidebar',
        'description'   =>  __('Widgets in this area display on single posts', 'sj3'),
        'before_widget' => '<div class="widget sj3-sidebar">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widgettitle sj3-title">',
        'after_title' => '</h2>',
    ));
}


/**
 * Display the sidebar
 */
add_filter('the_content', 'sj3_display_sidebar');
function sj3_display_sidebar($content)
{
    if (is_single() && is_active_sidebar('sj3-sidebar') && is_main_query()) {
        dynamic_sidebar('sj3-sidebar');
    }

    return $content;
}
