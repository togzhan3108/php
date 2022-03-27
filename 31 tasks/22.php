<?php
/*дано натуральное n. вычислить: 1 + 1/2 + 1/3 + 1/4 + ... + 1/n.*/
$n = (int)readline('Enter n: ');
$sum = 0;
for ($i=1; $i<=$n; $i++){
    $sum = $sum + (1/$i);
}
echo $sum;
?>