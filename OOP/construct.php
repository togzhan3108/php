<?php

class Car {
    public $brand;
    public $year;
    public $speed;

    function __construct($brand, $year, $speed){
        $this->brand = $brand;
        $this->year = $year;
        $this->speed = $speed;
    }

    function get_brand(){
        return $this->brand;
    }

    function get_year(){
        return $this->year;
    }

    function get_speed(){
        return $this->speed;
    }
}

$toyota = new Car("Toyota", 2017, 200);
$volvo  = new Car("Volvo", 2015, 150);
$lexus  = new Car("Lexus", 2022, 220);
echo $toyota->get_brand() . ", " . $toyota->get_year() . ", " . $toyota->get_speed() . "\r\n";
echo $volvo->get_brand() . ", " . $volvo->get_year() . ", " . $volvo->get_speed () . "\r\n";
echo $lexus->get_brand() . ", " . $lexus->get_year() . ", " . $lexus->get_speed() . "\r\n";
?>