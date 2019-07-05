<?php
/*
Plugin Name: Admin Tweaks
Plugin URI: #
Description: Modifying the wordpress admin section
Version: 0.1.0
Author: Sujit Joshi
Text Domain: ats
*/

defined('ABSPATH') || exit;

if (is_admin()) {
    require_once(plugin_dir_path(__FILE__) . 'admin/ats-admin-menu.php');
    require_once(plugin_dir_path(__FILE__) . 'admin/ats-settings-page.php');
}
