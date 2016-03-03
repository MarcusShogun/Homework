<?PHP
error_reporting(E_ALL);	
echo "<pre>";
$userName=[];
var_dump(is_array($userName));
$userName=[
	1=>"john",
	'1'=>"mike",
	1.5=>"psapdkas",
	true=>"qwerty",
	"name"=>"maria",
	10
];
print_r($userName);
$user=[
	["name"=>"John","pass"=>12345],
	["name"=>"Jack","pass"=>12354],
	["name"=>"Maria","pass"=>5478],
	["name"=>"Mike","pass"=>999],
];
print_r($user[0]);
echo $user[0]["name"];
//echo $userName[95];
$userMail=[
	1=>"john@",
	5=>"mike@",
	10=>"maria@"
];

echo $userName[1]." ".$userMail[1];
echo "<br>";
echo $userName[0];
$userName[100]="Jack";
echo "<br>";
echo $userName;
print_r($userName);
$a=10;
$b=20;
$a=($a>$b)?$a:$b;
echo $a;
echo "<br>";
if ($b>$a){
	$a=$b;
}
$q=10;
$q1='10';
if ($q<=10){
?>
<p>HTML по условию</p>
<?PHP
} else {
?>
<p>HTML по else</p>
<?PHP
}
$age=80;
if ($age<20){
	echo "Вы школьник";
} elseif ($age<40) {
	echo "Вы работник";
} else {
	echo "Вы пенсионер";
}
echo "<br>";
$age=10;
switch ($age){
	case 10:echo "Вам 10 лет";break;
	case $age<20:
		echo "Вы школьник";break;
	case $age<40:
		echo "Вы работник";break;
	case $age<120:
		echo "Вы пенсионер";break;
	default:
		echo "Вы шутите";
}
echo "<br>";
$a=5;
$b=6;
if (($a<$b) OR ($c<$d)   AND  ($c<$d) ) {
	echo "Условие<br>";
}
$zp='1000 UAH';
$pr="300";
if ((is_numeric($zp)) AND (is_numeric($pr))) {
$tax_zp=0.3;
$tax_prem=0.1;
$fond_do=$zp+$pr;
$fond_posle=$fond_do-$zp*$tax_zp-$pr*$tax_prem;
} else {
	$zp="Некорректные данные";
	$pr="Некорректные данные";
	$fond_do="Некорректные данные";
	$fond_posle="Некорректные данные";
}

?>
<head>
<style>
td{
	border:1px solid black;
}
</style>
</head>
<table>
	<tr>
	<td>Показатель	</td>
	<td>Значение	</td>
	</tr>
	<tr>
	<td>Зарплата	</td>
	<td><?=$zp;?></td>
	</tr>
	<tr>
	<td>	Премия</td>
	<td>	<?=$pr;?></td>
	</tr>
	<tr>
	<td>Фонд зарплаты до налогов	</td>
	<td>	<?=$fond_do;?></td>
	</tr>
	<tr>
	<td>Фонд зарплаты после налогов</td>
	<td>	<?=$fond_posle;?></td>
	</tr>
</table>
<?PHP
error_reporting(E_ALL);
echo "<pre>";
echo "<br>";
$name="John";
$age=30;
$n=1.45464646;
$str='text';
$str1="text2 $age";
$t=null;
unset($q);
$flag=true;
echo "Типы<br>";
$a='dg8dagd';
$b="10";
echo (gettype($b));
var_dump((int)$flag);
var_dump(is_integer($b));
var_dump(is_numeric($b));
echo "<br>";
echo $a+$b+$flag;
echo "<br>";
echo <<<start
какой-то текст
'ещё текст'
"ещё текст"
$age
start;
echo "Привет, вас зовут \$dollars<br>";
echo date("d-m-Y H:i:s");
echo "<br>";
echo 'some text "and new text" ';
print "Вам $age лет"."some text"."and more text";
echo "<br>";
echo "Новый вывод:
ещё вывод
ещё вывод
и ещё вывод.
";
echo "<br>";
$input="userName";
$$input="John";
echo "<p>$userName</p>";











