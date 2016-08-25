<?php
/**
 * Created by PhpStorm.
 * User: asus
 * Date: 2016/8/25
 * Time: 14:45
 */

//写出数据
/*$f=@fopen('data','w');
fwrite($f,'hello php');
fclose($f);

echo 'ok';*/

//read data

/*$f=@fopen('data','r');

while(!feof($f)){
    $content=fgets($f);
    echo $content;
}

fclose($f);*/


//得到内容
echo file_get_contents('data');




