<?php
/*
22. Нарисуйте пирамиду, как показано на рисунке, воспользовавшись циклом for или while.

xx
xxxx
xxxxxx
xxxxxxxx
xxxxxxxxxx
*/


for ($i = 1; $i <=5; $i++){
    for ($j = 1; $j <= $i; $j++){
        echo '**';
    }
    echo '<br>';
}

echo '<br>';

$str = '';
for ($i = 1; $i <=5; $i++){
    $str .= '**';
    echo $str;
    echo '<br>';
}