<?php
/*Найти произведение двузначных нечетных чисел кратных 13.*/
$prod = 1;
for ($i = 10; $i < 100; $i++){
    if($i % 2 == 1 && $i % 13 == 0){
       $prod *= $i;
    }
}
echo $prod;
?>