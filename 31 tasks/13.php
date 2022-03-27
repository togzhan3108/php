<?php
/*Найти сумму чисел от 100 до 200 кратных 17.*/
$arr = range(100, 200);
$sum = 0;
foreach ($arr as $a) {
    if ($a % 17 == 0){
       $sum += $a;
    }
}
echo $sum;

?>
