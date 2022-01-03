<?php

class Product {

    protected string $name;
    protected int $price;

    public function __construct(string $name, int $price) {
        $this->name = $name;
        $this->price = $price;
    }

    public function getName():string {
        return "Nama Product : $this->name";
    }
}

class ProductDummy extends Product {
    public function info() {
        echo "Name Product : $this->name" . PHP_EOL;
        echo "Price Product : $this->price" . PHP_EOL;
    }
}