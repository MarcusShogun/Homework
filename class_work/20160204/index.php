<p>Этот текст обработается в браузере</p>
<?PHP
//phpinfo();
error_reporting(E_ALL);
echo "Этот код обработает PHP";
$a=5;
$b=&$a;
$b=10;
?>
<h1>Заголовок</h1>
<p><?=$a;?></p>
<?
echo "<br>";
echo "Переменная а - ".$a;
echo "<pre>";
//print_r(get_defined_constants());
define("MYCONST",100,1);
echo "<br>";
echo "Константа - ".myconst;

?>
<p>Этот текст тоже обработается в браузере</p>








