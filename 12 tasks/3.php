<?php
/*Пользователь вводит с клавиатуры число.
Если оно четное, умножить его на три,
иначе – поделить на два. Результат вывести на экран.*/

$n = (int)readline('Enter number: ');
if ($n % 2 == 0){
    $res = $n * 3;
}
else{
    $res = $n / 2;
}
echo $res;
?>