<?php

$arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');

/*$en = array();
$ru = array();

foreach ($arr as $k => $v){
    $en[] = $k;
    $ru[] = $v;
}
echo "<pre>";
//print_r($en);
//print_r($ru);
*/
echo "<pre>";
$en = array_keys($arr);
$ru = array_values($arr);
print_r($ru);
print_r($en);
	
