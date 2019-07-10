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
                add_filter('woocommerce_product_data_tabs', array($this, 'add_product_tabs'), 50);
                add_action('woocommerce_product_data_panels', array($this, 'display_spec_tabs'), 50);
                add_action('woocommerce_process_product_meta', array($this, 'save_data_spec_tabs'), 51);
            }

            /**
             * Add a product data tabs in the Product edit page
             */

            public function add_product_tabs($product_tabs)
            {
                $product_tabs['spec_downloads'] = array(
                    'label'    => __('Spec Downloads', 'woo_add_prod_section'),
                    'target'   => 'display_spec_tabs',
                    'priority' => 10001,
                    'class'     => array()
                );
                return $product_tabs;
            }

            /**
             * Add a display setting section for the tab created in the add_product_tabs
             * Notice the div id echoed on top which is equivalent to target set on add_product_tabs
             */

            public function display_spec_tabs()
            {
                echo '<div id="display_spec_tabs" class="panel woocommerce_options_panel">';
                $specification_link = array(
                    'id'    => 'specification_link_id',
                    'name' =>  __('specification_link', 'woo_add_prod_section'),
                    'label'     => __('Spec Download Link', 'woo_add_prod_section'),
                    'desc_tip' => __('Add a link to the product specification document', 'woo_add_prod_section')

                );
                woocommerce_wp_text_input($specification_link);
                echo '</div>';
            }


            /**
             * Saving the Spec Link data using a update_post_meta
             * @params $post_id
             */
            public function save_data_spec_tabs($post_id)
            {
                if (isset($_POST['specification_link'])) {
                    update_post_meta($post_id, 'specification_link_id', $_POST['specification_link']);
                }
            }
        }

        $GLOBALS['wc_add_psection'] = new WC_Add_Psection();
    }
}
