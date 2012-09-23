<?php

namespace Test\Shop;
use Shop;

class CashDeskTest extends \PHPUnit_Framework_TestCase {
    
    private $cashDesk;
    
    protected function setUp() {
        $this->cashDesk = new Shop\CashDesk();
    }
    
    public function testUse() {
        
        $tax8 = new \Shop\Tax(0.8);
        $product1 = new \Shop\Product(00001111,125.90,130.80,$tax8);
        
        $basket = new \Shop\Basket();
        $basket->addProduct($product1);
        
        $evaluation = $this->cashDesk->evaluateBasket($basket);
        
        $this->assertEquals(1.0,$evaluation->getTotalSum());
    }
}

