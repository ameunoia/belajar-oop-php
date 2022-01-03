<?php

require_once "data/Product.php";

$product = new Product("Apel", 5000);

echo $product->getName() . PHP_EOL;

$dummy = new ProductDummy("Nanas", 10000);

$dummy->info();