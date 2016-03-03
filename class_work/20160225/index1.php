<?php
$names = scandir('.');
foreach ($names as $path){
    if (($path != '.') && ($path != '..')){
        echo "<a href=?filename=$path>{$path}</a>";
        echo '<br>';
    }
}
if(isset($_GET['filename'])){
    ?>
    <form action="" method="post">
        <textarea name="file_edit" cols="100" rows="50"><?=file_get_contents($_GET['filename']);?></textarea>
        <input type="hidden" name="filename" value="<?=$_GET['filename']?>">
        <input name="edit" type="submit" />
    </form>
<?php
}
if(isset($_POST['edit'])){
    file_put_contents($_POST['filename'],$_POST['edit']);
}