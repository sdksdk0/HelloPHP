<?php
/**
 * Created by PhpStorm.
 * User: asus
 * Date: 2016/8/26
 * Time: 15:30
 */

if(!isset($_POST['uname'])){
    die('user name  not define');
}

if(!isset($_POST['pwd'])){
    die('user pwd  not define');
}
$name=$_POST['uname'];
if(empty($name)){
    die('user name  not define');
}
$pwd=$_POST['pwd'];
if(empty($pwd)){
    die('user pwd  not define');
}


require_once 'function.php';
connecDB();

$pwd=intval($pwd);

mysql_query(" insert into phpuser(uname,pwd)  values('$name','$pwd')");

if(mysql_errno()){
    echo mysql_error();
}else{
    header("Location:alluser.php");
}




