<?php

namespace Shop;

use Shop\CashDesk;

class CashDesk {

    protected $rabateConditions = array();

    public function addRabateCondition(\Shop\RabateCondition\RabateCondition $rabateCondition) {
        $this->rabateConditions[] = $rabateCondition;
    }

    /**
     * 
     * @param \Shop\Basket $basket
     * @return \Shop\Basket\Evaluation
     */
    public function evaluateBasket(Basket $basket) {

        foreach ($this->rabateConditions as $rabateCondition) {
            $rabateCondition->evaluate($basket);
        }

        return new \Shop\Basket\Evaluation();
    }

}
