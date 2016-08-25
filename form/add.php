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

    if($_POST['a']&&$_POST['b']){
        echo $_POST['a']+$_POST['b'];
    }else{
        echo '请输入参数';
    }


?>

    </body>
</head>
</html>


