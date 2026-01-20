<?php
/*
Plugin Name: Demo Payment Gateway
Description: Custom demo payment gateway for WooCommerce (no real payment).
Version: 1.0
Author: Shailja
*/

if (!defined('ABSPATH')) exit;

add_action('plugins_loaded', 'dpg_init_gateway');

function dpg_init_gateway(){

    if (!class_exists('WC_Payment_Gateway')) return;

    require_once plugin_dir_path(__FILE__) . 'includes/class-gateway.php';

    add_filter('woocommerce_payment_gateways', 'dpg_add_gateway');
    function dpg_add_gateway($gateways){
        $gateways[] = 'WC_Gateway_DemoPay';
        return $gateways;
    }
}
