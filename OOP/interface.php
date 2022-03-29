<?php
interface Figure{
    public function findArea();
}
class Triangle implements Figure{
    public $width;
    public $height;

    public function __construct($width, $height){
        $this->height = $height;
        $this->width = $width;
    }

    public function findArea()
    {
     return 1/2 * $this -> width * $this -> height;
    }
}

class Circle implements Figure{
    public $radius;

    public function __construct($radius){
        $this->radius = $radius;
    }

    public function findArea()
    {
        return $this -> radius * $this -> radius * pi();
    }
}

class Square implements Figure{
    public $width;

    public function __construct($width){
        $this->width = $width;
    }

    public function findArea()
    {
        return pow($this -> width, 2);
    }
}

$triangle = new Triangle(3,4);
$circle = new Circle(3);
$square = new Square(4);

echo $triangle -> findArea() . "\r\n";
echo $circle -> findArea() . "\r\n";
echo $square-> findArea() . "\r\n";
?>