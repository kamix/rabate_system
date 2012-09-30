<?php

namespace Shop;

class Basket {
    
    private $basket = array();
    
    public function __construct() {
        
    }
    
    public function addProduct(Product $product) {
        $this->basket[] = $product;
    }
    
    public function getProductList() {
        return $this->basket;
    }
}

