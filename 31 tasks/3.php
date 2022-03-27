<?php
//Составьте программу, составьте программу, которая вычисляет произведение чисел от 1 до n.n вводится с клавиатуры.
$n = (int)readline('Enter an integer: ');
$product = 1;
for($i=1; $i<=$n; $i++){
    $product *= $i;
}
echo $product;
?>