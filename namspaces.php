<?php

require_once "data/Conflict.php";
require_once "data/helper.php";

$conflict1 = new Data\One\Conflict();

echo Helper\AUTHOR . PHP_EOL;
Helper\helpMe();

$conflict2 = new Data\Two\Conflict();