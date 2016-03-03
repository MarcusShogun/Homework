<?php
// Составьте массив дней недели. С помощью цикла foreach выведите все дни недели, выходные дни следует вывести жирным.

$week = ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'];
$weekend = ['Sat', 'Sun'];

/*
foreach ($week as $key => $day){
   if($key == 5 || $key == 6){
        echo '<b>' . $day . '</b>' . '<br>';
    }else {
       echo $day . '<br>';
   }
}
*/

foreach($week as $day){
    echo in_array($day, $weekend) ? '<b>' . $day . '</b>' . '<br />' : $day . '<br />';
    }