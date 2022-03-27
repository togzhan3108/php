<?php
/*Ввести с клавиатуры 10 пар чисел.
сравнить числа в каждой паре и напечатать большие из них.*/

for($i=1; $i<10; $i++){
    $numbers = readline('Enter numbers: ');
    $arr[] = $numbers;
}

foreach ($arr as $a){
    $a =  explode(' ', $a);
    echo 'Maximum number: ' . max($a) . "\r\n";
}
?>