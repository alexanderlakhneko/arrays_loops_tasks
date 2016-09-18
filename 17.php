<?php
$arr = array('Jn', 'Fb', 'Mr', 'Ap', 'Ma', 'Jn', 'Jl', 'Au', 'Sp', 'Oc', 'Nv', 'Dc');
$month = 9;
$b = '';
foreach ($arr as $key => $p){
    if ($key == ($month - 1)){
        echo '<b>' . $p . '</b><br>';
    }
    else {
        echo $p . '<br>';
    }
}
echo $b;