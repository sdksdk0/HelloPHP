<?php
/**
 * Created by PhpStorm.
 * User: asus
 * Date: 2016/8/25
 * Time: 15:24
 */

$img=imagecreatefrompng('img.png');

imagestring($img,5,5,5,'www.tianfang1314.cn',imagecolorallocate($img,255,0,0));

header('Content-type:image/png');
imagepng($img);
