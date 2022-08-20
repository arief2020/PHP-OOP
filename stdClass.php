<?php

require_once "data/Person.php";

$array = [
    "firstname" => "Muhammad",
    "middlename" => "Syaifullah",
    "lastname" => "Al Arief",
];


var_dump($array);
echo " ------ " . PHP_EOL; 
$object = (object) $array;
var_dump($object);

echo "First Name : $object->firstname" . PHP_EOL;
echo "Middle Name : $object->middlename" . PHP_EOL;
echo "Last Name : $object->lastname" . PHP_EOL;

$arraylagi = (array) $object;
var_dump($arraylagi);

$person = new Person("Eko", "Subang");
var_dump($person);

$arrayPerson = (array) $person;
var_dump($arrayPerson);