<?php
/**
 * Created by PhpStorm.
 * User: asus
 * Date: 2016/8/25
 * Time: 12:36
 */
$str='hello php ';
echo $str;

echo strpos($str,'o');

$str1=substr($str,2);

echo $str1;

/*$result=str_split($str);
print_r($result);*/

$result=explode(' ',$str);

$num=100;
$str2=$str.'<br>object-c'.$num;

echo $str2;
