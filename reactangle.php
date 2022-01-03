<?php

require_once "data/Shape.php";

use Data\{Shape, Reactangle};

$shape = new Shape();
echo $shape->getCorner() . PHP_EOL;

$rectangle = new Reactangle();
echo $rectangle->getCorner() . PHP_EOL;
echo $rectangle->getCornerParent();