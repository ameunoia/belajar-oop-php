<?php

require_once "data/Person.php";

$person = new Person("Budi", "Bogor");
$person->name = "Budi";

$person->sayHello("Arga");

$anwar = new Person("Anwar", "Garut");
$anwar->name = "Anwar";

$anwar->sayHello(null);
$anwar->info();