<?php
$arr = array('Пн', 'Вт', 'Ср', 'Чт', 'Пт', 'Сб', 'Вс');
$hol = 6;
foreach ($arr as $key => $elem)
{
    if ($key == $hol - 1 or $key == $hol)
    {
        echo "<b>$elem</b><br>";
    }
    else
    {
        echo $elem.'<br>';
    }
}