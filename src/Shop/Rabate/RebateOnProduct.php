<?php

namespace Shop\Rabate;
use Shop;

class RebateOnProduct implements Rabate {
    protected $product;
    public function __construct(\Shop\Product $product) {
        $this->product = $product;
    }
    
    
}

