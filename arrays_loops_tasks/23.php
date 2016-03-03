<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
</head>
<body>
<form method="post" action="23.php">
    <label for="number">Введите число</label>
    <input id="number"  type = "text" name="number" placeholder="Введите число" />
    <input type="submit" name="submit"  value="Получить сумму" />
</form>
</body>
</html>

<?php
/*
23. Вам нужно разработать программу, которая считала бы сумму цифр числа введенного пользователем.
Например: есть число 123, то программа должна вычислить сумму цифр 1, 2, 3, т. е. 6.
 */

if ($_POST){
    $sum = 0;
   // unset($_POST['submit']);
echo '<pre>';
    var_dump($_POST);
    echo '</pre>';
    if(isset($_POST['number'])) {
        $num = $_POST['number'];
        var_dump($num);
        echo '<br>';
        for ($i = 0; $i < strlen($num); $i++) {
            echo $num[$i] . '<br>';
            $sum += $num[$i];
        }
        if($sum != 0){
            echo 'Сумма = ' . $sum;
        }else{
            echo 'Введите число!';
        }

    }

}

//$arr = [1,2,3];
//$sum = array_sum($arr);


