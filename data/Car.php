<?php
namespace Data;

interface hasBrand{
    function getBrand(): string;
}

interface isMaintenance{
    function isMaintenance(): bool;
}

interface Car extends hasBrand{
    function drive(): void;

    function getTime(): int;
}

class Avanza implements Car, isMaintenance{
    public function drive(): void
    {
        echo "Drive Avanza" . PHP_EOL;
    }

    public function getTime(): int
    {
        return 4;
    }

    public function getBrand(): string
    {
        return "Toyota";
    }

    public function isMaintenance(): bool
    {
        return false;
    }
}