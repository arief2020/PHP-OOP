<?php

class Person {

    const AUTHOR = "Programmer Pemula";

    var string $name;
    var ?string $address = null;
    var string $country = "indonesia";

    function __construct(string $name, ?string $address)
    {
        $this->name = $name;
        $this->address = $address;
    }

    function sayHello(?string $name){

        if (is_null($name)) {
            echo "Hello, My Name is $this->name" . PHP_EOL;
        }else {
            echo "Hello $name, My Name is $this->name" . PHP_EOL;
        }
    }

    function info () {
        echo "Author : " . self::AUTHOR . PHP_EOL;
    }

    function __destruct()
    {
        echo "Object Person $this->name is destroyed" . PHP_EOL;
    }
}