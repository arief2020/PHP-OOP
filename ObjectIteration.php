<?php

class Data implements IteratorAggregate{
    var string $first = "First";
    public string $second = "Second";
    private string $third = "Third";
    protected string $fourth = "Fourth";

    public function getIterator():Traversable
    {
        // $array = [
            yield "First" => $this->first;
            yield "Second" => $this->second;
            yield "Third" => $this->third;
            yield "Fourth" => $this->fourth;
        // ];
        // return new ArrayIterator($array);
    }
}

$data = new Data();

foreach($data as $property => $value){
    echo "$property : $value" . PHP_EOL;
}