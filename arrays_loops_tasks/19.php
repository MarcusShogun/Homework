<?php
/*
$week = ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'];
$day = ['Mon'];

foreach($week as $days) {
    echo in_array($days, $day) ? '<i>' . $days . '</i>' . '<br />' : $days . '<br />';
}
*/

echo "<pre>";

$arr = [
    'Mon',
    'Tue',
    'Wed',
    'Thr',
    'Sun',
    'Fri',
    'Sat',
];

$day  = date('D');
foreach ($arr as $item) {
    echo $item == $day ? '<i>'.$item.'</i>' : $item;
    echo PHP_EOL;
}
