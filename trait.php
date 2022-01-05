<?php

require_once "data/SayGoodBye.php";

use Data\Traits\{Person, SayHello, SayGoodBye};

$person = new Person();

$person->hello("Arga");
$person->goodyBye("Mario");
$person->name = "Raka";
$person->run();

var_dump($person);