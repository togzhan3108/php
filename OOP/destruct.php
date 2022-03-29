<?php

class Car
{
    public $brand;
    public $year;
    public $speed;

    function __construct($brand, $year, $speed)
    {
        $this->brand = $brand;
        $this->year = $year;
        $this->speed = $speed;
    }

    function __destruct(){
        echo $this->brand . " " . $this->year . " " . $this->speed . "\r\n";
    }
}

$toyota = new Car("Toyota", 2017, 200);
$volvo = new Car("Volvo", 2015, 150);
$lexus = new Car("Lexus", 2022, 220);

