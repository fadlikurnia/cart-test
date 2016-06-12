<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of cart_api
 *
 * @author Parama_Fadli_Kurnia
 * 
 * http://localhost/cart-api/cart/addItem/AXBD123/2/2?apikey=DKpsPzAYK5utMJcaIwlMWTYx|1659864696117076
 * http://localhost/cart-api/cart/removeItem/AXBD123/2?apikey=DKpsPzAYK5utMJcaIwlMWTYx|1659864696117076
 * http://localhost/cart-api/cart/checkout/AXBD123/PROMOX1?apikey=DKpsPzAYK5utMJcaIwlMWTYx|1659864696117076
 */
class Cart_api {

    //put your code here
    private $host;
    private $apikey;
    
    public function __construct($settings) {
        $this->apikey = $settings['apikey'];
//        $this->host = "http://localhost/cart-api/cart/";
        $this->host = "http://rest.labanian.com/cart/";
    }
    
    public function addItem($data){
        $id_transaction = $data["id_transaction"];
        $id_item = $data["id_item"];
        $total_item = $data["total_item"];
        $url = $this->host. "addItem/$id_transaction/$id_item/$total_item?apikey=".$this->apikey;
        return $this->mcurl($url);
    }
    
    public function removeItem($data){
        $id_transaction = $data["id_transaction"];
        $id_item = $data["id_item"];
        $url = $this->host. "removeItem/$id_transaction/$id_item?apikey=".$this->apikey;
        return $this->mcurl($url);
    }
    
    public function checkout($data){
        $id_transaction = $data["id_transaction"];
        $coupon = $data["coupon"];
        $url = $this->host. "checkout/$id_transaction/$coupon?apikey=".$this->apikey;
        return $this->mcurl($url);
    }
    
    public function mcurl($url) {
        $result = "";
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HEADER, false);
        $result = curl_exec($ch);
        curl_close($ch);
        return $result;
    }

}
