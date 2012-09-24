<?php

namespace Shop\RabateCondition;

use Shop;

interface RabateCondition {

    public function __construct($productList);

    public function evaluate(\Shop\Basket $basket);
    
    public function getFilteredBasket();
}

