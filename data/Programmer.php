<?php

class Programmer {

    public string $name;

    public function __construct(string $name) {
        $this->name = $name;
    }
}

class BackendProgrammer extends Programmer {

}

class FrontendProgrammer extends Programmer{

}

class Company {
    public Programmer $programmer;
}

function sayHelloProgrammer(programmer $programmer) {
    if ($programmer instanceof BackendProgrammer) {
        echo "Hello Backend Programmer $programmer->name" . PHP_EOL;
    } else if ($programmer instanceof FrontendProgrammer) {
        echo "Hello Frontend Programmer $programmer->name" . PHP_EOL;
    } else {
        echo "Hello Programmer $programmer->name" . PHP_EOL;
    }
}