<?php
$arr = array('Пн', 'Вт', 'Ср', 'Чт', 'Пт', 'Сб', 'Вс');
$day = 7;
foreach ($arr as $key => $elem)
{
    if ($key == $day - 1)
    {
        echo "<i>$elem</i><br>";
    }
    else
    {
        echo $elem . '<br>';
    }
}