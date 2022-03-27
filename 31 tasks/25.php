<?php
/*Даны действительное (а) и натуральное (n).
вычислить: a(a+1)(a+2)*...*(a+n-1)
*/
$res = 1;
$a = (int)readline('Enter a: ');
$n = (int)readline('Enter n: ');
for($i=0; $i<=$n-1; $i++){
    $res = $res * ($a + $i);
}
echo $res;
?>