<?php
$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];
$b = '';
foreach ($arr as $key => $a){
    if (($key + 1) % 3 == 0){
        $b .= $a . '<br>';
    }
    else {
        $b .= $a . ' ';
    }
}
echo $b;
