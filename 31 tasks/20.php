<?php
/*даны два двузначных числа А и В.
Из этих чисел составили 2 четырехзначных числа:
первое число получили путем написания сначала числа А, затем В.
Для получения второго числа сначала записали число В, затем А.
Найти числа А и В если известно, что первое четырехзначное число
нацело делится на 99, а второе на 49.
*/
for($i=10; $i<100; $i++){
    for($j=10; $j<100; $j++){
        if ((($i * 100 + $j) % 99) == 0){
            if ((($j * 100 + $i) % 49) == 0){
                echo $i . " ";
                echo $j;
            }
        }
    }
}

?>