<?php

require_once "Exception/ValidationException.php";
require_once "data/LoginRequest.php";
require_once "helper/ValidationUtil.php";

$request = new LoginRequest();
// validationUtil::validate($request);

$request->username = "eko";
$request->password = "rahasia";

validationUtil::validateReflection($request);

class RegisterUserRequest {
    public ?string $name;
    public ?string $address;
    public ?string $email;
}

$register = new RegisterUserRequest();
$register->name = null;
$register->address = null;
$register->email = null;

validationUtil::validateReflection($register);