<?php
/*В сберкассу на трёхпроцентный вклад положили S рублей.
Какой станет сумма вклада через N лет.*/

$n = (int)readline('Введите количество лет: ');
$s = (float)readline('Введите сумму: ');
$sum = $s + (0.03 * $s * $n);
echo "Сумма через " . $n . " лет: " . $sum;
?>