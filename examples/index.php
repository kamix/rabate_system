<?php

include('includes/bootstrap.php');

$file = file('data/products.db');
$i = 1;

// building taxes
$tax8 = new \Shop\Tax(0.08);
$tax23 = new \Shop\Tax(0.23);

// building products
foreach ($file as $row) {
    $explode = explode(';',$row);
    $tax = 'tax' . trim($explode[4]);
    $product = 'product' . $i++;
    ${$product} = new \Shop\Product($explode[0],$explode[2],$explode[3],${$tax});
}

// init basket
$basket = new \Shop\Basket();
$basket->addProduct($product5);
$basket->addProduct($product6);
$basket->addProduct($product7);

//init rabates
$rabateOnProduct = new \Shop\Rabate\RebateOnProduct($product6);

//init rabate conditions
$list = array();
$list[] = $product5;
$list[] = $product6;
$allFromTheListCondition = new \Shop\RabateCondition\AllFromTheListCondition($list);
$allFromTheListCondition->setRabate($rabateOnProduct);

$rabateConditions = array();
$rabateConditions[] = $allFromTheListCondition;

// init cash desk
$cashDesk = new \Shop\CashDesk();
$cashDesk->setUpRabateConditions($rabateConditions);
$cashDesk->evaluateBasket($basket);
