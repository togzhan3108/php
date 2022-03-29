<?php
/*Определить, кратно ли заданное число N;
если нет, вывести остаток.*/
$n = readline("Enter number: ");
$m = readline("Enter m: ");

if($n % $m == 0){
    echo "Кратно";
}
elseif ($n % $m != 0){
    echo "Не кратно! Остаток: " . $n % $m;
}
?>