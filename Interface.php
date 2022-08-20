<?php
require_once "data/Car.php";

use Data\{Avanza, Car};

$car = new Avanza();
echo $car->getTime() . PHP_EOL;
$car->drive();
