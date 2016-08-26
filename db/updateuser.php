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
<?php
/**
 * Created by PhpStorm.
 * User: asus
 * Date: 2016/8/26
 * Time: 15:50
 */

/*if(isset($_GET['id']) && !empty($_GET['id'])){

}*/
require_once 'function.php';
if(!empty($_GET['id'])){
    connecDB();
    $id=intval($_GET['id']);
    $result=mysql_query(" select * from phpuser  where id= $id");
    if(mysql_errno()){

    }
    $arr=mysql_fetch_assoc($result);


}else{
    die(' no id');
}
?>


<form action="update_server.php"  method="post">
        <div>用户编号</div>
            <input type="text"  name="id"   value="<?php  echo $arr['id']; ?> ">
    用户名：<input type="text"  name="uname"   value="<?php  echo $arr['uname']; ?> "><br />
    密码：<input type="text"  name="pwd"   value="<?php  echo $arr['pwd']; ?> "><br />
    <input type="submit"  value="提交" />

</form>

</body>
</html>