<?php
/*
Plugin Name: Sujit Plugin
Plugin URI: #
Description: First Plugin
Author: Sujit Joshi 
Version: 1.0
*/

add_action('login_header', 'add_custom_text');

function add_custom_text()
{
    echo "hey first plugin";
}

function change_header_url($url)
{
    $url = "https://google.com";
    return $url;
}

add_filter('login_headerurl', 'change_header_url');

function change_site_title($title)
{
    $title = "Custom Theme - Sujit";
    return $title;
}
add_filter('login_message', 'change_site_title');

