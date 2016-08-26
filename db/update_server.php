<?php
/**
 * Created by PhpStorm.
 * User: asus
 * Date: 2016/8/26
 * Time: 16:01
 */

require_once 'function.php';

connecDB();

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
$id=intval($_POST['id']);
$name=$_POST['uname'];
$pwd=intval($_POST['pwd']);


mysql_query("update phpuser set uname='$name',pwd='$pwd'  where id='$id'");

if(mysql_errno()){
    echo mysql_error();
}else{
    header("Location:alluser.php");
}



