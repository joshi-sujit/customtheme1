<?php
/*
Plugin Name: Sujit Plug2
Plugin URI: #
Description: Second Plugin - to modify login page
Author: Sujit Joshi 
Version: 1.0
License: GPL2
Text Domain: sj2
*/

function sj2_load_stylesheet()
{
    wp_register_style('sj2_login_stylesheet', plugin_dir_url(__FILE__) . 'login-style.css');
    wp_enqueue_style('sj2_login_stylesheet');
}

add_action('login_enqueue_scripts', 'sj2_load_stylesheet');

/*Modify Login Error Message*/
add_filter('login_errors', 'sj2_change_login_msg');

function sj2_change_login_msg($message)
{
    $message = "Invalid Credentials";
    return $message;
}


/*Remove shaking of form*/
function sj2_remove_shake()
{
    remove_action('login_head', 'wp_shake_js', 12);
}

add_action('login_head', 'sj2_remove_shake');
