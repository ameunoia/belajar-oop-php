<?php

namespace Data;

interface newBrand {
    function getBrand():string;
}

interface maintenance {
    function isMaintenance():bool;
}

interface Car extends newBrand{

    function drive():void;

    function getTire():int;
}

class Avanza implements Car, maintenance {
    
    public function drive():void {
        echo "Drive Avanza" . PHP_EOL;
    }

    public function getTire():int
    {
        return 4;
    }
    
    public function getBrand():string
    {
        return "Toyota";
    }

    public function isMaintenance(): bool
    {
        return true;
    }

}