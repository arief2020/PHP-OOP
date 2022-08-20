<?php

$mathces = [] ;
$result = preg_match_all("/eko|awan|edy/i", "Eko Khurniawan Khanedy", $mathces);
var_dump($result);
var_dump($mathces);

$result = preg_replace("/anjing|bangsat/i", "***", "dasar lu anjing dan bangsat");

var_dump($result);

$result = preg_split("/[\s,-]/", "Eko Khurniawan Khanedy,Programmer,Zaman,Now");
var_dump($result);