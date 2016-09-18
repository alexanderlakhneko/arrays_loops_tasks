<?php
$a = 1;
$b = 1;
while ($a <= 9){
    while ($b <= $a){
        echo $a;
        $b++;
    }
    $b = 1;
    echo '<br>';
    $a++;
}