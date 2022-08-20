<?php

require_once "Exception/ValidationException.php";
require_once "data/LoginRequest.php";
require_once "helper/Validation.php";

$loginRequest = new LoginRequest();
// $loginRequest->username = " e ";
// $loginRequest->password = "  e";
try{
    validateLoginRequuest($loginRequest);
    echo "Valid" . PHP_EOL;
}catch(ValidationException | Exception $exception) {
    echo " Error : {$exception->getMessage()}" . PHP_EOL; 
    var_dump($exception->getTrace());

    echo $exception->getTraceAsString() . PHP_EOL;
}finally{
    echo "error atau enggak, akan dieksekusi" . PHP_EOL;
}
