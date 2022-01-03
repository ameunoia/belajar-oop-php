<?php

require_once "data/Category.php";


$category = new Category();
$category->setName("Maps");
$category->setExpensive(true);

echo "Name : {$category->getName()}" . PHP_EOL;
echo "Name : {$category->isExpensive()}" . PHP_EOL;
