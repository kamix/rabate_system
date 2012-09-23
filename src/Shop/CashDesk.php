<?php

namespace Shop;

use Shop\CashDesk;

class CashDesk {
    
    public function setUpRabates() {
        
    }
    
    /**
     * 
     * @param \Shop\Basket $basket
     * @return \Shop\CashDesk\Evaluation
     */
    public function evaluateBasket(Basket $basket) {
        return new \Shop\CashDesk\Evaluation();
    }
    
}
