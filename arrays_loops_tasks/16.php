<?php

$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];
$i = 0;

foreach($arr as $e){
    echo   $e ."," . " ";
    $i++;
    if ($i == 3){
        echo "<br>";
        $i = 0;
    }

}