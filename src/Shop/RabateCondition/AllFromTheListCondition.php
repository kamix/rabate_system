<?php

namespace Shop\RabateCondition;

use Shop;

class AllFromTheListCondition implements RabateCondition {

    protected $productList;
    protected $workingProductList;
    protected $filteredBasket;

    public function __construct($productList) {
        $this->productList = $productList;
    }

    public function evaluate(\Shop\Basket $basket) {
        $this->workingProductList = $this->productList;

        $filteredBasket = new \Shop\Basket();

        $productList = $basket->getProductList();
        foreach ($productList as $key => $product) {
            if (!$this->_checkIfProductIsOnTheList($product)) {
                $filteredBasket->addProduct($product);
            }
        }

        if (count($this->workingProductList) == 0) {
            $this->filteredBasket = $filteredBasket;

            return true;
        } else {
            $this->filteredBasket = $basket;

            return false;
        }
    }

    /**
     * Checks if product is on the condition list.
     * @todo Not sure if unset and introducing $workingProductList is a good idea.
     * @param \Shop\Product $product
     * @return boolean
     */
    protected function _checkIfProductIsOnTheList(\Shop\Product $product) {
        foreach ($this->workingProductList as $key => $workingProduct) {
            if ($workingProduct->getBarcode() == $product->getBarcode()) {
                unset($this->workingProductList[$key]);
                return true;
            }
        }

        return false;
    }

    public function getFilteredBasket() {
        if (!($this->filteredBasket instanceof \Shop\Basket)) {
            throw new \LogicException('Basket should be evaluated first.');
        }

        return $this->filteredBasket;
    }

    public function setRabate(\Shop\Rabate\Rabate $rabate) {
        
    }

}

