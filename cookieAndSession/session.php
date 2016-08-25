<?php
/**
 * Created by PhpStorm.
 * User: asus
 * Date: 2016/8/25
 * Time: 18:57
 */

session_start();

$_SESSION['name']='tf';

echo session_id();

session_destroy();

header('Location:b.php');
