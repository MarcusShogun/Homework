<?PHP
include_once "msgs.lib"; //проверка на подключение дублей библиотек
?>
<html>
<head>
<meta charset = "utf-8">
</head>
<body>
<form method = "POST" action = "function.php">
    <p>Введите свое имя</p>
    <input type = "text" name = "userName">
	<p>Оставьте свой коментарий</p>
	<textarea name="userMessage" rows="7" cols="35" placeholder="...здесь..."></textarea>
	<br />
	<input type="submit" name="submit" value="submit">
</form>	
<?php
$messages = getContent();
$messages = addContetn($messages);
showContent($messages);


//массив cens в функцию в отдельный файл, предусмотреть форму наполнения cens