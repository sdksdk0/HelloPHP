<?php
/**
 * Created by PhpStorm.
 * User: asus
 * Date: 2016/8/25
 * Time: 10:55
 */

function trace(){
    echo 'hello';
    echo 'hello world';
}

trace();

$func='trace';
$func();


function traceNum($a,$b)
{
    echo "a=$a,b=$b";
}
traceNum(3,4);



