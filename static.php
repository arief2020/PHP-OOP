<?php
require_once "helper/MathHelper.php";

use Helper\MathHelper;

echo MathHelper::$name . PHP_EOL;

MathHelper::$name = "Arief";
echo MathHelper::$name . PHP_EOL;

$result = MathHelper::sum(10,22,121,32,80);

echo "Result : $result" . PHP_EOL;