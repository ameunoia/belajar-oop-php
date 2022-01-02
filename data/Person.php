<?php

class Person {

    const AUTHOR = "AXROUS";

    var string $name;
    //nullable
    var ?string $address = null;
    //default value
    var string $country = "Indonesia";

    function __construct(string $name, ?string $address) {
        $this->name = $name;
        $this->address = $address;
    }   


    function sayHello(?string $name) {
        if(is_null($name)) {
            echo "Hi, my name is $this->name" . PHP_EOL;
        } else {
            echo "Hi $name, my name is $this->name" . PHP_EOL;
        }
    }

    function info() {
        echo "AUTHOR : " . self::AUTHOR . PHP_EOL;
    }
}

