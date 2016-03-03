<?php

$arr = [4, 2, 5, 19, 13, 0, 10];
$e = [2,3,4];
$flag = 0;

foreach($arr as $val){
    if (in_array($val, $e)){
        $flag = 1;
        break;
    }
}

echo $flag ? "Есть!" : "Нету!";

