<?php
/*
Plugin Name: Woocommerce First Plugin
Plugin URI: #
Description: Woocommerce plugin fo the computer
Version: 0.1.0
Author: Sujit Joshi
Text Domain: ats
*/

defined('ABSPATH') || exit;

/**
 * Check woocommerce is active
 */

if (in_array('woocommerce/woocommerce.php', apply_filters('active_plugins', get_option('active_plugins')))) {
    /**
     * Check if the class exists for custom plugin
     */
    if (!class_exists('WCO_Plug')) {
        class WCO_Plug
        {
            public function __construct()
            {
                // Print admin notice to the screen
                //add_action('admin_notices', array($this, 'my_admin_notice'));

                add_filter('woocommerce_settings_tabs_array', array($this, 'add_settings_tab'), 50);
                add_action('woocommerce_settings_opening_hours', array($this, 'add_settings'), 50);
            }

            /**
             * 2. Add Settings
             */
            public function add_settings()
            {
                woocommerce_admin_fields(self::get_settings());
            }

            /**
             * 3. Get Settings
             */
            public function get_settings()
            {
                $settings =  array(
                    'section_title' => array(
                        'name'  => __('Opening Hours', 'woocommerce-opening-hours'),
                        'type'  => 'title',
                        'desc'  => '',
                        'id'    => 'wc_settings_opening_hours_section_title'
                    ),
                    'closed_saturdays' => array(
                        'name'  => __('Closed on Hours', 'woocommerce-opening-hours'),
                        'type'  => 'checkbox',
                        'desc'  => __('Disable the checkout on Saturdays', 'woocommerce-opening-hours'),
                        'id'    => 'wc_settings_closed_saturdays'
                    ),
                    'section_end' => array(
                        'type'  => 'sectionend',
                        'id'    => 'wc_settings_opening_hours_section_end'
                    )
                );
                return $settings;
            }

            /**
             * 1. Add settings Tabs
             */
            public function add_settings_tab($settings_tab)
            {
                $settings_tab['opening_hours'] = __('Opening Hours', 'woocommerce-opening-hours');

                return $settings_tab;
            }


            /**
             * Print notice
             */
            public function my_admin_notice()
            { ?>
            <div class="notice notice-success is-dismissible">
                <p><?php _e('Woocommerce First Plugin Loaded!', 'sample-text-domain'); ?></p>
            </div>
        <?php
        }
    }

    $GLOBALS['wco_plug'] = new WCO_Plug();
}
}
