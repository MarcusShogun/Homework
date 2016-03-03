<?php
define ('ROOT', dirname(__FILE__));
define ('DS', DIRECTORY_SEPARATOR);
$curdir = ROOT;
echo "<a href=http://localhost/Homework/class_work/20160301/index1.php><p>ROOT</p></a>";
if(isset($_GET['curdir'])) {
    $curdir = $_GET['curdir'];
}
$parent = dirname($curdir);
echo "<a href=http://localhost/Homework/class_work/20160301/index1.php?curdir=$parent><p>Parent directory</p></a>";
$files = scandir($curdir);
foreach($files as $name){
    if(($name != ".") && ($name != "..")) {
        if (is_dir($curdir.DS.$name)) {
            $type = "Directory";
        } else {
            $type = "File";
        }
        echo "<a href=http://localhost/Homework/class_work/20160301/index1.php?curdir=".$curdir.DS."$name><p>$type-$name</p></a>";
    }

}