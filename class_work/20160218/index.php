<?PHP
error_reporting(E_ALL);
include_once "msgs.lb";
?>
<html>
<head>
	<meta charset="utf-8">
</head>
<body>
<form method="POST" action="index.php">
	<label for="userName">Введите своё имя</label>
	<input id="userName" type="text" name="userName">
	<p>Оставьте свой комментарий</p>
	<textarea name="userMessage" rows="7" cols="35" placeholder="...здесь..."></textarea>
	<br>
	<input type="submit" name="submit" value="submit">
</form>
<?PHP
$messages=getContent();
$messages=addContent($messages);
showContent($messages);