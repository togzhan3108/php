<?php
/*В ЭВМ вводятся по очереди данные о росте N учащихся класса.
Определить средний рост учащихся класса.
*/
$n = (int)readline('Enter number of students: ');
$sum = 0;
for($i=0; $i<$n; $i++){
    $h = readline('Enter students height: ');
    $sum += $h;
}
$m = $sum / $n;
echo $m;