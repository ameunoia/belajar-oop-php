<?php

namespace Data\Traits;

trait SayGoodBye {

    public function goodyBye(?string $name):void {
        if(is_null($name)){
            echo "Good Bye" . PHP_EOL;
        } else {
            echo "Good Bye $name" . PHP_EOL;
        }
    }
}

trait SayHello {
    public function hello(?string $name) : void {
        if(is_null($name)) {
            echo "Hello" . PHP_EOL;
        } else {
            echo "Hello $name" . PHP_EOL;
        }
    }
}

trait HasName {
    public string $name;
}

trait canRun {
    public abstract function run():void;
}

trait All {
    use SayGoodBye, SayHello, HasName, canRun {
        //bisa di override
        //hello as private;
        //goodyBye as private;
    }
}

class Person {
    use All;

    public function run():void {
        echo "Person $this->name is running" . PHP_EOL;
    }
}