<?php
/**
 * Created by PhpStorm.
 * User: asus
 * Date: 2016/8/25
 * Time: 12:22
 */
//循环
/*for($i=0;$i<100;$i++){
    echo 'hello'.$i.'<br />';
}*/

/*$i=0;
while($i<10){
    echo 'hello'.$i.'<br />';
    $i++;
}*/


/*$i=0;
do{
    echo 'hello'.$i.'<br />';
    $i++;
}while($i<100);
*/

for($i=0;$i<100;$i++){
    echo 'hello'.$i.'<br />';
   /* if($i==20){
        break;
    }*/
    if($i==20){
        continue;
    }
    echo 'Run hrer'.$i.'<br />';
}