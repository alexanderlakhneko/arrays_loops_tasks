<?php
for ($i = 0; $i < 10; $i++){
    $a[] = rand(1,100);
}
print_r($a);
echo '<br>';
$index_min = array_search(min($a),$a);
$index_max = array_search(max($a),$a);
$b = $a[$index_min];
$a[$index_min] = $a[$index_max];
$a[$index_max] = $b;
print_r($a);

