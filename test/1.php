<?php
/* Найти максимальное число в массиве {4,5,2,1,8,9,3}
 и найти индекс максимального числа*/
$arr = array(4, 5, 2, 1, 8, 9, 3);
$n = max($arr);
echo "Maximum number is: " . $n . ". Index of maximun number: " . array_search($n, $arr) . "\r\n";

/* Найти в тексте слово «Алма-ата» и поменять на «Алматы»*/

$string = "Мой любимый город Алма-ата всегда в моем сердце!";
$search = array("Алма-ата");
$replace = array("Алматы");
echo $string . "\r\n";
echo str_replace($search, $replace, $string);
?>

