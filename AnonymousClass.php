<?php
interface HelloWorld {
    function sayHello(): void;
}



$helloworld = new class("Arief") implements HelloWorld {

    public string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }
    public function sayHello(): void{
        echo "Hello $this->name" . PHP_EOL;
    }
};
$helloworld->sayHello();
