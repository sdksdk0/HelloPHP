<!DOCTYPE html>
<html>
    <meta charset="UTF-8">
    <title>Document</title>
<head>
    <body>
<?php
/**
 * Created by PhpStorm.
 * User: asus
 * Date: 2016/8/25
 * Time: 16:08
 */

print_r($_FILES);
$file=$_FILES['file'];
$fileName=$file['name'];
move_uploaded_file($file['tmp_name'],$fileName);
echo "<img src='$fileName'>'";


?>

    </body>
</head>
</html>


