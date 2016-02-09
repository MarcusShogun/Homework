<?php
$age = 16;

if($age >= 18 && $age <= 59){
	echo 'Вам еще работать и работать';
}elseif ($age > 59){
	echo 'Вам пора на пенсию';
}elseif($age <= 17){
	echo 'Вам еще рано работать';
}elseif($age ){
	echo 'Неизвестный возраст';
}

