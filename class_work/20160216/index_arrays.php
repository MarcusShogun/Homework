<?PHP
$s=2;
$f=100;
for ($i=3;$i<=$f;$i++){
	$flag=true;
	for ($j=2;$j<$i;$j++){
		/*if ((($i==2) AND ($j==1)) OR (($i==3) AND ($j==1))){
			$flag=false;
			break;
		}*/
		if (($i%$j)==0){
			$flag=false;
			break;
		}
	}
	if ($flag){
			echo $i."<br>";
		}
}
$r=[];
for($i=0;$i<5;$i++){
	$r[]=rand();
}
echo "<pre>";
print_r($r);
$min=$r[0];
$mink=0;
$max=$r[0];
$maxk=0;
foreach ($r as $k=>$v){
	if ($v>$max) {
		$max=$v;
		$maxk=$k;
	}
	if ($v<$min) {
		$min=$v;
		$mink=$k;
	}
}
$r[$mink]=$max;
$r[$maxk]=$min;
echo "<br>";
print_r($r);
$j=2;
for ($i=1;$i<=5;$i++){
	for ($l=1;$l<=$j;$l++){
		echo "x";
	}
	$j+=2;
	echo "<br>";
}
$qwe=[1, 2, 3, 4, 5, 6, 7, 8, 9];
$i=0;
foreach($qwe as $v){
	if ($i>=3) {
		echo "<br>";
		$i=0;
	}
	echo "$v, ";
	$i++;
}
echo "<br>";
$arr=[4, 2, 5, 19, 13, 0, 10];
$e=2;
$flag=false;
foreach($arr as $v){
	if ($v==$e){
		$flag=true;
		break;
	}
}
if ($flag){
	echo "Есть!";
} else {
	echo "Нет!";
}
echo "<br>";
$num1=111111111;
$num=(string)$num1;
$sum=0;
for ($i=0;$i<strlen($num);$i++){
	$sum+=(int)$num{$i};
}
echo $sum."<br>";
$days=["Понедельник",
	"Вторник",
	"Среда",
	"Четверг",
	"Пятница",
	"Суббота",
	"Воскресенье"];
$wknds=["Суббота",
	"Воскресенье"];
foreach($days as $day){
	$tag="p";
	if (in_array($day,$wknds)){
		$tag="h2";
	}
	echo "<$tag>$day</$tag>";
}
/*foreach($days as $day){
	$tag="p";
	if (($day=='Суббота') OR ($day=="Воскресенье")){
		$tag="h2";
	}
	echo "<$tag>$day</$tag>";
}*/