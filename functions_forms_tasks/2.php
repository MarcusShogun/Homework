<form action="" method="post">
    <textarea name="content"></textarea>
    <input name="submit" type="submit">
</form>

<?php
if(isset($_POST['submit'])) {
    $str = $_POST['content'];
    $ar = explode(" ", $str);
    $q[] = '';
    $q[] = '';
    $q[] = '';
    foreach ($ar as $v){
        $l = strlen($v);
        switch($l){
            case $l > strlen ($q[0]):$q[0] = $v; break;
            case $l > strlen ($q[1]):$q[1] = $v; break;
            case $l > strlen ($q[2]):$q[2] = $v; break;
        }
    }
    print_r($q);
}