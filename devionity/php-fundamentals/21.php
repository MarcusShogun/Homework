<?php
/*Создать многомерный массив, который иллюстрирует список товаров. Каждый товар - это книга (художественная литература). Каждая книга имеет стиль, автора, название и цену. В списке товаров должно быть не менее 3 книг.*/


echo 'Вариант №1 <br>';
$style = array("Детектив", "Научная-фантастика","Журнал");
$name = array( "Элькюр Пуаро", "Завтрак у обочины", "Отельер&Ресторатор");
$author = array( "Агата Кристи", "Стругацкие", "Редакция !");
$price = array("50 uah", "150 uah", "250 uah");

$book = array($style, $name, $author, $price);
echo "Книга_1", " ", $book[0][0], " ", $book[1][0], " ", $book[2][0], " ", $book[3][0], "<br>"; 
echo "Книга_2", " ", $book[0][1], " ", $book[1][1], " ", $book[2][1], " ", $book[3][1], "<br>";
echo "Книга_3", " ", $book[0][2], " ", $book[1][2], " ", $book[2][2], " ", $book[3][2], "<br>";
echo '<pre>';
print_r($book);
echo '</pre>';


echo 'Вариант №2 <br>';

$book1 = array("Детектив", "Агата Кристи", "Элькюр Пуаро", "100 uah");
$book2 = array("Научная-фантастика", "Стругацкие", "Завтрак у обочины", "200 uah");
$book3 = array("Журнал", "Редакция !", "Отельер&Ресторатор", "250 uah");
$product = array($book1, $book2, $book3);

echo "Книга_1", " ", $product[0][0], " ", $product[0][1], " \"" ,$product[0][2], "\" ",$product[0][3], "<br>";
echo "Книга_2", " ", $product[1][0], " ", $product[1][1], " \"", $product[1][2], "\" ",$product[1][3], "<br>";
echo "Книга_3", " ", $product[2][0], " ", $product[2][1], " \"", $product[2][2], "\" ",$product[2][3], "<br>";
echo "<br>";
echo 'print_r: <br>';
echo '<pre>';
print_r($product);
echo '</pre>';
?>
