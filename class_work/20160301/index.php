<?php
define ('ROOT', dirname(__FILE__));
define ('DS', DIRECTORY_SEPARATOR);
echo '<pre>';
$files = scandir(".");
//print_r($files);
foreach($files as $name){
    if (is_dir($name)){
        $type="Directory";
    }else{
        $type="File";
    }
    echo "<a href =http://localhost/Homework/class_work/20160301/index.php?name=$name><p>$type-$name</p>></a>";
}
if($_GET['name']) {
    ?>
    <form method="POST" action="">
        <textarea name="content"><?= file_get_contents($_GET['name']); ?></textarea>
        <br>
        <input type="hidden" name="name" value=<?= $_GET['name']; ?>>
        <br>
        <input type="submit" name="edit">
    </form>
    <?PHP
}
if(isset($_POST['edit'])){
    file_put_contents($_POST['name'],$_POST['content']);
}