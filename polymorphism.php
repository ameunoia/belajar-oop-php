<?php

require_once "data/Programmer.php";


$company = new Company();
$company->programmer = new Programmer("Arga");
$company->programmer = new BackendProgrammer("Mario");
$company->programmer = new FrontendProgrammer("Raka");

//polymorphism argument;
sayHelloProgrammer(new Programmer("Argaa"));
sayHelloProgrammer(new BackendProgrammer("Argaa"));
sayHelloProgrammer(new FrontendProgrammer("Argaa"));