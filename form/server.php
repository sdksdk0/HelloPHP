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



if(isset($_GET['name'])&& $_GET['name'] &&$_GET['pwd']==2){
    echo 'hello '.$_GET['name'];
}else{
    echo '请输入名字';
}
?>

    </body>
</head>
</html>


