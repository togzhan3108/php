<?php
/*С клавиатуры вводятся n чисел.
Составьте программу, которая определяет кол-во отрицательных,
кол-во положительных и кол-во нулей среди введеных чисел.
Значение n вводится с клавиатуры.*/

$neg = 0; $z = 0; $pos = 0;
$n = (int)readline('Enter n: ');
for($i=1; $i<=$n; $i++ ){
    $num = (int)readline('Enter number: ');
    if($num > 0){ $pos++; }
    else if($num == 0){ $z++; }
    else { $neg++; }
}
echo "Negative numbers: " . $neg . "\r\n" .
    "Positive numbers: " . $pos . "\r\n" .
    "Zeroes: " . $z . "\r\n";
?>