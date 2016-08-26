<?php
/**
 * Created by PhpStorm.
 * User: asus
 * Date: 2016/8/26
 * Time: 16:19
 */

require_once 'function.php';

$id=intval($_GET['id']);
connecDB();
mysql_query("delete from phpuser  where id='$id'");

if(mysql_errno()){
    echo mysql_error();
}else{
    header("Location:alluser.php");
}

