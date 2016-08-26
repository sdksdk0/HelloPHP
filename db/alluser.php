<?php
require_once 'function.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<table width='100%'  style='text-align: center;' border='1' >
    <tr><th>id</th><th>用户名</th><th>密码</th></tr>
<?php
/**
 * Created by PhpStorm.
 * User: asus
 * Date: 2016/8/26
 * Time: 14:28
 */

    $conn=connecDB();
    mysql_select_db("day15");
    $result=mysql_query("select * from phpuser",$conn);
    $dataCount=mysql_num_rows($result);
  //  echo $dataCount;


    for($i=0;$i<$dataCount;$i++){
        $result_arr=mysql_fetch_assoc($result);
        //print_r($result_arr);

        $id=$result_arr['id'];
        $name=$result_arr['uname'];
        $pwd=$result_arr['pwd'];

        echo "<tr><td>$id</td><td>$name</td><td>$pwd</td></tr>";

    }
?>
    </table>
</body>
</html>


