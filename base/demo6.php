<?php
/**
 * Created by PhpStorm.
 * User: asus
 * Date: 2016/8/25
 * Time: 12:29
 */
//同时被2和3整除的
function  traceNum(){
    for($i=0;$i<=100;$i++){
       /* if($i%2==0  && $i%3==0){
            echo $i.'<br />';
        }*/

      /*  if($i%2==0 ||  $i%3==0){
            echo $i.'<br />';
        }*/

        if($i%2!=0  && $i%3!=0){
            echo $i.'<br />';
        }



    }
}
traceNum();

