<?php
abstract class Figure {
    public $length;

    public function __construct($length){
        $this->length = $length;
    }

    public abstract function Area() : float;
}

class Triangle extends Figure
{
    public $height;
    public function __construct($length, $height)
    {
        parent::__construct($length);
        $this->height=$height;
    }
    public function Area(): float
    {
        return 0.5 * $this->length *  $this->height;
    }
}

class Circle extends Figure
{
    public $radius;
    public function __construct($radius, $length=0)
    {
        parent::__construct($length);
        $this->radius=$radius;
    }
//    public function __construct($radius)
//    {
//        $this->$radius=$radius;
//    }
    public function Area(): float
    {
        return pi() * pow($this->radius, 2);
    }
}
class Square extends Figure{
    public function __construct($length)
    {
        parent::__construct($length);
    }
    public function Area(): float
    {
        return pow($this->length, 2);
    }
}
$triangle = new Triangle(5, 1);
echo 'The area of triangle - ' . $triangle->Area() . "\r\n";
$circle = new Circle(5);
echo 'The area of circle - ' . $circle->Area() . "\r\n";
$square = new Square(5);
echo 'The area of square - ' . $square->Area() . "\r\n";