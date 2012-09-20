<?php

namespace Test\Shop;
use Shop;

class CashDeskTest extends \PHPUnit_Framework_TestCase {
    
    private $cashDesk;
    
    protected function setUp() {
        $this->cashDesk = new Shop\CashDesk();
    }
    
    public function test() {
        $this->assertEquals(1,1);
    }
}

