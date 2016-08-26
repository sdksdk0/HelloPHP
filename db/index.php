<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<?php
/**
 * Created by PhpStorm.
 * User: asus
 * Date: 2016/8/25
 * Time: 21:36
 */

$conn=mysql_connect('localhost','zp','a');
if($conn){
   // echo '连接成功';
    mysql_select_db('day15',$conn);
    $result=mysql_query("SELECT count(*)   FROM phpuser");

   // $result_arr=mysqli_fetch_array($result);
 /*   $data_count=mysql_num_rows($result);
    echo $data_count;
    for($i=0;$i<$data_count;$i++){
        print_r(mysqli_fetch_assoc($result));
    }*/

    $result_arr=mysql_fetch_array($result);
    echo  '数据条数：'.$result_arr[0];


}else{
    echo '连接失败';
}
?>
</body>
</html>