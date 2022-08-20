<?php

require_once "data/conflict.php";
require_once "data/Helper.php";

use Data\One\{Conflict as Conflict1, Dummy, Sample};
use Data\Two\Conflict;

use function Helper\{helpMe};

$conflict = new Conflict();
$dummy = new Dummy();
$sample = new Sample();

helpMe();