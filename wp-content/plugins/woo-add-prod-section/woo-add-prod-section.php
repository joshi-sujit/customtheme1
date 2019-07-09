<?php
/*
Plugin Name: Woo Add Product Plugin
Plugin URI: #
Description: Add a custom tab in Woocommerce Product Section and Display the content in the frontend
Author: Sujit Joshi 
Version: 1.0
Text Domain: woo_add_prod_section
License: GPL
*/

defined('ABSPATH') || exit;
/**
 * Check if the woocommerce is active 
 */


if (in_array('woocommerce/woocommerce.php', apply_filters('active_plugins', get_option('active_plugins')))) {
    /**
     * Check that the class is already created
     */
    if (!class_exists('WC_Add_Psection')) {
        class WC_Add_Psection
        {
            public function __construct()
            {
                add_filter('woocommerce_product_data_tabs', array($this, 'add_product_tabs'));
                add_action('woocommerce_product_data_panels', array($this, 'display_product_tabs'));
            }

            public function add_product_tabs($product_tabs)
            {
                $product_tabs['Downloads'] = array(
                    'label'    => __('Downloads', 'woo_add_prod_section'),
                    'target'   => 'downloads_product_data',
                    'priority' => 20,
                );
                return $product_tabs;
            }

            public function display_product_tabs()
            {
                echo "Add Specification";
                echo "Add User Manuals";
            }
        }

        $GLOBALS['wc_add_psection'] = new WC_Add_Psection();
    }
}
