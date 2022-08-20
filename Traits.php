<?php
require_once "data/sayGoodBye.php";

use Data\Traits\{Person, sayGoodBye, sayHello};

$person = new Person();
$person->goodBye("Joko");
$person->Hello("Budi");
$person->name = "Arief";
var_dump($person);

$person->run();