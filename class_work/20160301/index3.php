<?php
//header("content-type:text/html; charset=utf-8");
//header("content-type:image/png");
//header("Location:http://php-academy.kiev.ua", true, 301); // постоянный редирект
//header("Location:http://php-academy.kiev.ua"); //временный редирект
//header("Refresh:1"); //обновление
header("content-type:application/pdf");
$str = file_get_contents("Pimsleur_Reading_Lesson_Book.pdf");
echo $str;