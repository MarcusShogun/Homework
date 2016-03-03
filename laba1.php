<?PHP
$age = 20;
$zp = 1000;
$pr = 300;
if((is_numeric($zp)) && (is_numeric($pr))){
$tax_zp = 0.3;
$tax_prem = 0.1;
$fond_before = $zp + $pr;
$fond_after = $fond_before - $zp * $tax_zp - $pr * $tax_prem;
}else{
	$zp = 'Некоректные данные';
	$pr = 'Некоректные данные';
	$fond_before = 'Некоректные данные';
	$fond_after = 'Некоректные данные';
}
?>
<html>
<head>
	<style>
	td {
	border: 1px solid black;
	}
	</style>
</head>
<body>
<table>
<tr>
		<td>Показатель</td>
		<td>Значение</td>
</tr>
	<tr>
		<td>Зарплата</td>
		<td><?=$zp;?></td>
	</tr>
	<tr>
		<td>Премия</td>
		<td><?=$pr;?></td>
	</tr>	
		<td>Фонд зарплат до налогов</td>
		<td><?=$fond_before;?></td>
	</tr>
	</tr>	
		<td>Фонд зарплат после налогов</td>
		<td><?=$fond_after;?></td>
	</tr>
</table>	
</body>
</html>
