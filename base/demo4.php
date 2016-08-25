<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>PHP</title>
</head>
<body>

<?php
/**
 * Created by PhpStorm.
 * User: asus
 * Date: 2016/8/25
 * Time: 12:08
 */


function getLevel($score){
   /* if($score>90){
        return '优秀';
    }elseif($score>80){
        return '良好';
    }elseif($score>60){
        return '合格';
    }else{
        return '不合格';
    }*/

   /* switch($score/10){
        case 10;
        case 9:
            return '优秀';
        case 8:
            return '良好';
        case 7:
            return '好';
        case 6:
            return '合格';
        default:
            return '不合格';
    }*/

    $result='不合格';
    switch(intval($score/10)){
        case 10;
        case 9:
            $result='优秀';
            break;
        case 8:
            $result='良好';
            break;
        case 7:
            $result='好';
            break;
        case 6:
            $result='合格';
            break;
        default:
            $result='不合格';
            break;
    }
    return $result;


}
echo getLevel(93);

?>

</body>
</html>

