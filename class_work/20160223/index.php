<?php
/*
 * Created by PhpStorm.
 * User: D. Kats
 * Date: 23.02.2016
 * Time: 19:03
 */
echo "<pre>";
//PHP_EOL
$f = fopen("file.txt", "r+");// открываем на чтение + - на запись,указатель в начало,перезаписование содержимого
//$f = fopen("file.txt", "a+");// открываем на чтение + - на запись,указатель в конец
//$f = fopen("file.txt", "w+");// открываем на чтение + - на запись,указатель в начало,полностью перезаписывает файл

//echo fread($f, 8);
//echo fread($f, 10);
//echo filesize("file.txt");
//echo '<br>';
//echo fread($f,filesize("file.txt"));
echo fread($f, 5);
fseek($f, 8);
echo '<br>';
echo fread($f, 8);
//fpassthru($f);
//echo fgets($f);
/*$s = [];
while($s1 = fgets($f)){
    echo $s[] = $s1;
}
echo '<br>';
var_dump($s);*/
//fputs($f,'new');
//fputs($f,'more new');


echo '<br>';

var_dump($f);
echo '<br>';
if (is_file("1.pdf")){
    echo "Есть файл";
}
echo '<br>';
if (is_dir("new")){
    echo "Есть каталог";
    }

