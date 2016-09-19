<?php
$colors = ['red','yellow','blue','gray','maroon','brown','green'];
$rows = rand(2,15);
$cols = rand(2,15);
echo '<table border="1">';
for ($tr = 1; $tr <= $rows; $tr++) {
    echo '<tr>';
    for($td = 1; $td <= $cols; $td++){
        $i = $colors[rand(1, count($colors) - 1)];
        $number = rand();
        echo "<td style='background-color:{$i}'>" . $number . '</td>';
    }
echo '</tr>';
}
echo '</table>';