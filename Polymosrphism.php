<?php
require_once "data/Programmer.php";

$company = new Company();
$company->programmer = new Programmer("Eko");
var_dump($company);

$company->programmer = new BackendProgrammer("Eko");
var_dump($company);

$company->programmer = new FrontendProgrammer("Eko");
var_dump($company);

sayHelloProgrammer(new Programmer("Arief"));
sayHelloProgrammer(new BackendProgrammer("Arief"));
sayHelloProgrammer(new FrontendProgrammer("Arief"));