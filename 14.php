<?php
$a = 0;
$e = 3; //Значения 2, 3, 4.
$arr = [2, 4, 5, 19, 13, 0, 10];
foreach ($arr as $b){
    if ($b == $e){
        $a = 1;
    }
}
if ($a == 1){
    echo 'Есть!';
}
else {
    echo 'Нет!';
}
