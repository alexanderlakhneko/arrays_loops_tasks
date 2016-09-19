<?php
$a = 1;
for ($i = 0; $i < 10; $i++){
    $arr[] = rand(1,100);
}
foreach ($arr as $key => $b){
    if ($key % 2 == 0 && $b > 0 ){
        $a *= $b;
    }
    if ($key % 2 == 1 && $b > 0){
        echo $b . '<br>';
    }
}
echo $a;