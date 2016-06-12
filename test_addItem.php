<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once dirname(__FILE__) . '/cart_api.php';

$settings = array(
    'apikey' => "DKpsPzAYK5utMJcaIwlMWTYx|1659864696117076"
);
$cart_api = new Cart_api($settings);

$data = array(
    'id_transaction' => 'STOCK001',
    'id_item' => '1',
    'total_item' => '3'
);
//$data = array(
//    'id_transaction' => 'AXBD123',
//    'id_item' => '2',
//    'total_item' => '1'
//);
echo $cart_api->addItem($data);
