<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of cart_test
 *
 * @author Parama_Fadli_Kurnia
 */
require_once dirname(__FILE__) . '/cart_api.php';

class cart_test {

    //put your code here
    function test_addItem() {
        $settings = array(
            'apikey' => "DKpsPzAYK5utMJcaIwlMWTYx|1659864696117076"
        );
        $cart_api = new Cart_api($settings);

        $data = array(
            'id_transaction' => 'AXBD123',
            'id_item' => '2',
            'total_item' => '1'
        );
        $cart_api->addItem($data);
    }
    
    function test_removeItem() {
        $settings = array(
            'apikey' => "DKpsPzAYK5utMJcaIwlMWTYx|1659864696117076"
        );
        $cart_api = new Cart_api($settings);

        $data = array(
            'id_transaction' => 'AXBD123',
            'id_item' => '2'
        );
        $cart_api->removeItem($data);
    }
    
    function test_checkout() {
        $settings = array(
            'apikey' => "DKpsPzAYK5utMJcaIwlMWTYx|1659864696117076"
        );
        $cart_api = new Cart_api($settings);

        $data = array(
            'id_transaction' => 'AXBD123',
            'coupon' => 'PROMO01'
        );
        $cart_api->checkout($data);
    }

}
