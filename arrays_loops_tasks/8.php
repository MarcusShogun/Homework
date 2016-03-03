<?php
echo "<pre>";
$arr = array(1, 2, 3, 4, 5, 6, 7, 8, 9);
$str = 0;
foreach ($arr as $v){
	$str .= $v;
}
echo $str;