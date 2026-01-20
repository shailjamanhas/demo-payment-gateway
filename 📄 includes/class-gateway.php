<?php

class WC_Gateway_DemoPay extends WC_Payment_Gateway {

    public function __construct(){

        $this->id = 'demopay';
        $this->method_title = 'DemoPay Gateway';
        $this->method_description = 'Fake payment gateway for testing';
        $this->has_fields = true;

        $this->init_form_fields();
        $this->init_settings();

        $this->title = $this->get_option('title');

        add_action(
            'woocommerce_update_options_payment_gateways_' . $this->id,
            array($this, 'process_admin_options')
        );
    }

    public function init_form_fields(){

        $this->form_fields = array(
            'enabled' => array(
                'title' => 'Enable/Disable',
                'type' => 'checkbox',
                'label' => 'Enable DemoPay Gateway',
                'default' => 'yes'
            ),
            'title' => array(
                'title' => 'Title',
                'type' => 'text',
                'default' => 'Demo Payment'
            )
        );
    }

    /* Checkout form fields */
    public function payment_fields(){
        ?>
        <p>This is demo payment. No real money will be charged.</p>
        <input type="text" placeholder="Card Number (Demo)">
        <?php
    }

    /* Process payment */
    public function process_payment($order_id){

        $order = wc_get_order($order_id);

        $order->payment_complete();
        $order->update_status('processing');

        WC()->cart->empty_cart();

        return array(
            'result' => 'success',
            'redirect' => $this->get_return_url($order)
        );
    }
}
