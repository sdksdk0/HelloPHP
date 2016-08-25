<?php
/**
 * Created by PhpStorm.
 * User: asus
 * Date: 2016/8/25
 * Time: 18:59
 */
session_start();

if(isset($_SESSION['name'])){
    echo session_id();
}else{
    echo 'no session';
}


