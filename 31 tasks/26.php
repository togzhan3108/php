<?php
/* даны действительно х и натуральное n.
вычислить: sin x + sin x в квадрате + ... sin x в степени n.
*/
$sum = 0;
$n = (int)readline('Enter n: ');
$x = (double)readline('Enter x: ');
for($i=1; $i<=$n; $i++){
    $sum+=pow(sin($x), $i);
}
echo $sum;