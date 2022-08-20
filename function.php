<?php

require_once "data/Person.php";

$akbar = new Person("Akbar", "Probolinggo");
$akbar->name = "Akbar";
$akbar->sayHello("Arief");
$akbar->info();

$budi = new Person("Budi", "Probolinggo");
$budi->name = "budi";
$budi->sayHello(null);

$budi->info();