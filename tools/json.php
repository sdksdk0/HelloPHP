[1,2,3,5,7,9,56,"wqewq",[12,4,67,9,0]]
{"h":"hello","w":"world"}

<?php
/**
 * Created by PhpStorm.
 * User: asus
 * Date: 2016/8/25
 * Time: 14:32
 */

//操作json

//生成json格式的数据
$arr=array(1,2,3,5,7,'hello');
echo json_encode($arr);

$obj=array('h'=>'hello','w'=>'world',array(3,4,5,7));

echo json_encode($obj);

//解码
$jsonStr="{\"h\":\"hello\",\"w\":\"world\",\"0\":[3,4,5,7]}";
$obj=json_decode($jsonStr);

echo $obj->h;
