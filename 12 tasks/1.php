<?php
/*Пользователь вводит два числа.
Определить, равны ли эти числа, и если нет,
вывести их на экран в порядке возрастания.*/
for($i=0; $i<2; $i++){
    $n = (int)readline('Enter number: ');
    $arr[] = $n;
}

if($arr[0]==$arr[1]){
    echo $arr;
}
elseif($arr[0]>$arr[1]){
    echo $arr[1] . " " . $arr[0];
}
else{
    echo $arr[0] . " " . $arr[1];
}
?>