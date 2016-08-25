<?php
/**
 * Created by PhpStorm.
 * User: asus
 * Date: 2016/8/25
 * Time: 13:00
 */

include  'demo1.php';  //包含，如果没有不会报错。
require  'demo1.php';  //依赖 ，如果没有就报错

//同一个php在不同的地方重复引用，
require_once  'demo1.php';
