<?php

require_once "data/Manager.php";

$manager = new Manager();
$manager->name = "Joko";
$manager->sayHello("Budi");

$vp = new VicePresident();
$vp->name = "Budi";
$vp->sayHello("Joko");
 