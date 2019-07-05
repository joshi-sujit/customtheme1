<?php

defined('ABSPATH') || exit;

/**
 * Adding a new menu icon on the admin dashboard
 */
add_action('admin_menu', 'ats_add_menu');

if (!function_exists('ats_add_menu')) {
    function ats_add_menu()
    {
        add_menu_page(
            'Modify Admin Page and Login Pages',
            'Admin Tweaks',
            'manage_options',
            'ats-admin-tweaks',
            'ats_admin_create_page',
            'dashicons-editor-textcolor'
        );
    }
}
