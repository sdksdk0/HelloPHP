<?php
/**
 * Created by PhpStorm.
 * User: asus
 * Date: 2016/8/25
 * Time: 15:15
 */

//创建图片
$img=imagecreate(400,300);
imagecolorallocate($img,255,255,255);
header('Content-type:image/png');
imageellipse($img,200,200,50,50,imagecolorallocate($img,255,0,0));
imagepng($img);




