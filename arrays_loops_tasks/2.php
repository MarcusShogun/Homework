<?php
$summ = 0;
$arr = array (1, 20, 15, 17, 24, 35);


foreach($arr as $ar){
	$summ += $ar;
	}
$result = &$summ;
echo $result;