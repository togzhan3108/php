<?php
/* Определить какое из трех,
введенных пользователем, чисел
максимальное и вывести его на экран.*/
$grades = explode(' ', readline('Enter grades: '), 5);
echo max($grades);
?>