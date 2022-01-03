<?php

require_once "data/Manager.php";

$manager = new Manager();
$manager->name = "Arga Satya";
$manager->sayHello("Mario");


$vp = new VicePresident();
$vp->name = "Radit";
$vp->sayHello("Arga");