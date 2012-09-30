<?php

namespace Shop;

class Product {

    private $barcode;
    private $netPrice;
    private $tax;
    private $grossPrice;

    /**
     * 
     * @param int $barcode
     * @param float $netPrice
     * @param float $grossPrice
     * @param Tax $tax
     */
    public function __construct($barcode, $netPrice, $grossPrice, Tax $tax) {
        $this->barcode = $barcode;
        $this->netPrice = $netPrice;
        $this->grossPrice = $grossPrice;
        $this->tax = $tax;
    }
    
    public function getBarcode() {
        return $this->barcode;
    }

}

