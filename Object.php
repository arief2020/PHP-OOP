<?php

require_once "data/Person.php";

$person = new Person();
$person -> name = "arief";
// $person -> address = null;
$person -> address = "probolinggo";
// $person -> country = "jawa timur";

var_dump($person);

echo "Name : $person->name" . PHP_EOL;
echo "Address : $person->address" . PHP_EOL;
echo "Country : $person->country" . PHP_EOL;

// $person2 = new Person();
// $person2 -> name = [1,2];