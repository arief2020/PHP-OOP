<?php

class Zero{
    private array $properties = [];
    public string $firstname = "Arief";

    public function __get($name)
    {
        // echo "Access properties $name" . PHP_EOL;
        // return "contoh";
        return $this->properties[$name];
    }

    public function __set($name, $value)
    {
        $this->properties[$name] = $value;
    }

    public function __isset($name): bool
    {
        // echo "isset $name" . PHP_EOL;
        // return false;

        return isset($this->properties[$name]);
    }

    public function __unset($name)
    {
        // echo  "unset $name" . PHP_EOL;
        unset($this->properties[$name]);
    }

    public function __call($name, $arguments)
    {
        $join = join("," , $arguments);
        echo "Call funtion $name with arguments $join" . PHP_EOL;
    }
    
    public static function __callStatic($name, $arguments)
    {
        $join = join("," , $arguments);
        echo "Call static funtion $name with arguments $join" . PHP_EOL;
        
    }
}

$zero = new Zero();
$zero->firstname = "Muhammad";
$zero->middlename = "Syaifullah";
$zero->lastname = "Al Arief";

echo "FirstName : $zero->firstname" . PHP_EOL;
echo "MiddleName : $zero->middlename" . PHP_EOL;
echo "LastName : $zero->lastname" . PHP_EOL;

$zero->sayHello("Muhammad", "arief");
Zero::sayHello("Budi", "Nugroho");
// echo $zero->firstname . PHP_EOL;
// echo $zero->middlename . PHP_EOL;
// $zero->lastName = "Budi";
// isset($zero->favorite);
// isset($zero->hoby);
