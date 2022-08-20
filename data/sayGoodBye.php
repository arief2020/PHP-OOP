<?php
namespace Data\Traits;

trait sayGoodBye{
    public function goodBye(?string $name): void{
        if(is_null($name)){
            echo "Good Bye" . PHP_EOL;
        }else{
            echo "Good bye $name" . PHP_EOL;
        }
    }
}
trait sayHello{
    public function Hello(?string $name): void{
        if(is_null($name)){
            echo "Hello, " . PHP_EOL;
        }else{
            echo "Hello, $name" . PHP_EOL;
        }
    }
}

trait HasName {
    public string $name;
}

trait CanRun {
    public abstract function run(): void;
}

class ParentPerson {
    public function goodBye(?string $name): void
    {
        echo "Good bye in Person" . PHP_EOL;
    }

    public function Hello(?string $name): void
    {
        echo "Hello in Person" . PHP_EOL;
    }
}

trait All {
    use sayGoodBye, sayHello, HasName, CanRun{
        // bisa di override
        // Hello as private; 
        // goodBye as private;
    }
}

class Person extends ParentPerson{
    use All;

    public function run(): void
    {
        echo "Person $this->name running" . PHP_EOL;
    }

    
}