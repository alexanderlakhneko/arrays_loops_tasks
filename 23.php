<?php
$a = 1234;
$b = str_split($a);
$d = 0;
foreach ($b as $c){
    $d += $c;
}
echo $d;
