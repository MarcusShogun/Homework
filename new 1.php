<!DOCTYPE html>
<html>
<head></head>
<?php
echo "<pre>"
$start=1;
$end=50;
$i=$start;
$rows=10;
$cols=8;

for($i=1; $<=$cols; $i++){
	
	echo '<tr>';
	for($j=1; $j<=rows)
    echo '</tr>';
}
	



while($i<20){
	$i++;
	echo $i.'<br>';
}

echo '<br>';
for ($i=$start; $i<$end; $i++){
	if($i%2!=0){
		echo $i.'<br>';
	}
}