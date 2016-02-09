<?php
$age = 'asd';

if($age >= 18 && $age <= 59){
	echo 'Вам еще работать и работать';
}elseif ($age > 59){
	echo 'Вам пора на пенсию';
}elseif($age <= 17 && $age > 0){
	echo 'Вам еще рано работать';
}elseif($age <= 0 || !is_numeric($age)){
	echo 'Неизвестный возраст';
}

//var_dump($age < 0 || !(is_numeric($age)));