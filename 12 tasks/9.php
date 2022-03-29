<?php
/*Даны 3 отрезка,
если возможно построить треугольник
вывести “Yes” иначе вывести “NO”*/

$a = (int)readline('Enter a: ');
$b = (int)readline('Enter b: ');
$c = (int)readline('Enter c: ');

if($a < $b + $c || $c < $a + $b || $b < $a + $c){
    echo "Yes!";
}
else{
    echo "No!";
}