<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<style>
	td, th{
		border:1px solid black;
	}
	.st{
		background:yellow;
	}
	</style>
</head>
<body>
<table>
<?PHP
error_reporting(E_ALL);
echo "<pre>";
$nav=[
	["href"=>"index.php","link"=>"Главная"],
	["href"=>"delivery.php","link"=>"Доставка"],
	["href"=>"contacts.php","link"=>"Контакты"],
	["href"=>"oplata.php","link"=>"Оплата"],
	["href"=>"catalog.php","link"=>"Каталог"],
];
echo "<ul>";
foreach ($nav as $item){
	echo "<li>";
	echo "<a href={$item['href']}>{$item['link']}</a>";
	echo "</li>";
}
echo "</ul>";
/*$arr=[
 1=>1,
 true=>2,
 "1"=>3,
 1.5=>4
];*/
$arr=[1,"keyy"=>2,6=>3,10=>4,5,"ttt"=>6,7,30=>8];
print_r($arr);
$sum=0;
$i=0;
$j=0;
$c=count($arr);
echo "<br>";
$ar1=array_keys($arr);
print_r($ar1);
$e=count($ar1);
for ($o=0;$o<$e;$o++){
	$key=$ar1[$o];
	$sum+=$arr[$key];
}
echo "<br>";
echo "Сумма новая - $sum <br>";
$sum=0;
/*while ($i<$c){
	if (isset($arr[$j])){
	$sum+=$arr[$j];
	$i++;
	}
	$j++;
}*/
echo "Сумма: $sum<br>";
$t=0;
while ($t<20){
	echo $t++." : ".$t."<br>";
	
}

echo count($arr);
print_r($arr);
echo "<br>";	
$sum=0;
$keys=[];
$vals=[];
$cnt=0;
foreach ($arr as $v){
	$cnt++;
}
echo $cnt;
echo "<br>";	
foreach ($arr as $k=>$v){
	//$arr[$k]+=10;
	//$v+=10;
	$keys[]=$k;
	$vals[]=$v;
}
print_r($keys);
print_r($vals);
print_r($arr);
echo "<br>";
foreach ($arr as $v){
	echo $sum+=$v;
}
$sum=0;
echo "<br>";
echo "Сумма по форич - ".$sum;
echo "<br>";
for ($i=0;$i<count($arr);$i++){
	$sum+=$arr[$i];
}
echo "<br>";
echo "Сумма - $sum <br>";
$start=1;
$end=50;
$i=$start;
$rows=10;
$cols=10;
for ($i=1;$i<=$cols;$i++){
	echo "<tr>";
	for ($j=1;$j<=$rows;$j++){
		if (($i==1) OR ($j==1)){
			$tag="th";
		} else {
			$tag="td";
		}
		if ($i==$j) {
			$style="class=st";
		} else {
			$style='';
		}
		echo "<$tag $style>";
		echo $i*$j;
		echo "</$tag>";
	}
	echo "</tr>";
}
/*while ($i<20){
	echo $i."<br>";
	$i++;
}
echo "<br>";
for ($i=$start;$i<$end;print $i++){
	echo "<br>";
}
echo "<br>";
for ($i=$start;$i<$end;$i++){
	if ($i%2!=0) {
		echo $i."<br>";
	}
}
echo "<br>";
echo $i;*/
?>
</table>
</html>