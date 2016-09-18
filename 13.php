<?php
$b = 1;
$a = 1;
while ($a <= 10) {
    while ($b <= 10) {
        echo $a . '*' . $b . '=' . $a * $b . '<br>';
        $b++;
    }
    $a++;
    $b = 1;
    echo '<br>';
}