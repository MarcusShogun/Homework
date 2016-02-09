<?php
$age = 'gvghv';

if($age >= 18 && $age <= 59){
	echo 'Вам еще работать и работать';
}elseif ($age >= 60){
	echo 'Вам пора на пенсию';
}elseif($age <= 17 && $age >= 0){
	echo 'Вам еще рано работать';
}else{
	echo 'Неизвестный возраст';
}

