<?php

require_once "data/Person.php";

$person = new Person();
$person->name = "Arga";
$person->address = "Garut";


var_dump($person);

echo "Name : $person->name" . PHP_EOL;

$person2 = new Person();
$person2->name = "Mario";
$person2->address = "Bandung";

var_dump($person2);

//type jugling mengonversi secara otomatis tipe data;


