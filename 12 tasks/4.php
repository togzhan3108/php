<?php
/*Написать программу-калькулятор.
Пользователь вводит два числа и
выбирает арифметическое действие.
Вывести на экран результат.*/

$n1 = readline("Enter first number: ");
$n2 = readline("Enter second number: ");
$m = readline("Enter operation: ");

switch($m){
    case "+":
        echo $n1 + $n2;
        break;
    case "-":
        echo $n1 - $n2;
        break;
    case ":":
        echo $n1 / $n2;
        break;
    case "*":
        echo $n1 * $n2;
        break;
    case "%":
        echo $n1 % $n2;
        break;
    default:
        echo "Enter correct operation!";
}

?>