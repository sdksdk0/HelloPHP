<?php
/**
 * Created by PhpStorm.
 * User: asus
 * Date: 2016/8/26
 * Time: 14:30
 */
require_once 'config.php';

function connecDB(){
    $conn=mysql_connect(MYSQL_HOST,MYSQL_USER,MYSQL_PW);

    if(!$conn){
        die('can\'t  connection db');
    }

    mysql_select_db('day15');
    return  $conn;
}

