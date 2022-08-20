<?php

require_once "data/Student.php";

$student1 = new Student();
$student1->id = "1";
$student1->name = "Arief";
$student1->value = 100;

echo $student1 . PHP_EOL;


$string = (string) $student1;
echo $string . PHP_EOL;