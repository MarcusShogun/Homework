<?php

$months = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug'];
$month = 'Feb';

foreach ($months as $val){
    if ($month == $val){
        echo '<b>' . $val . '</b>' . '<br>';
    }else{
        echo $val . '<br>';
    }
}