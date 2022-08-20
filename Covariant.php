<?php


require_once "data/Animal.php";
require_once "data/AnimalShelter.php";
require_once "data/Food.php";

$catshelter = new \Data\CatShelter();
$cat = $catshelter->adopt("Luna");
$cat->eat(new \Data\AnimalFood());

$dogshelter = new Data\DogShelter();
$dog = $dogshelter->adopt("Doggy");
$dog->eat(new \Data\Food());