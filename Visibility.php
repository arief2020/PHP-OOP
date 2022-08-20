<?php

require_once "data/Product.php";

$product = new Product("apple", 20000);

echo $product->getName() . PHP_EOL;

$dummy = new ProductDummy("orange", 1000);
$dummy->info();