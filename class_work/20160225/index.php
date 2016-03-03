<html>
<head>
    <meta charset="utf-8">
</head>
<body>
<form action="" method="post" enctype="multipart/form-data">
    <input type="file" multiple="multiple" name="filenames[]" />
    <br>
    <input type="submit" name="submit" />
</form>
<pre>
<?php
$files = scandir('upload/');
//var_dump($files);
foreach($files as $v){
    if(($v != '.') && ($v != '..')){
        echo "<img src=http://localhost/Homework/class_work/20160225/upload/$v style='height:200px;width: 200px;float: left'>";
    }

}
if(isset($_POST['submit'])){
    //print_r($_POST);
    //print_r($_FILES);

    foreach($_FILES['filenames']['name']as $k => $name){
        //if($_FILES['filenames']['size'][$k] < 102400){
        if(getimagesize($_FILES['filenames']['tmp_name'][$k])){
            move_uploaded_file($_FILES['filenames']['tmp_name'][$k], 'upload/' . $name);
        }

       // }
    }

}






?>
</body>
</html>