<?php
/**
 * Created by PhpStorm.
 * User: kzw
 * Date: 2017/9/27
 * Time: 下午5:23
 */

include_once "../conn.php";
include_once "islogin.php";
$id=$_GET['id'];

$typename=$_POST['typename'];

$result=mysqli_query($mysql,"update type set typename='$typename' where id=$id");

if($result){
    echo "<script>alert('修改成功');location.href='type.php'</script>";
}else{
    echo "<script>alert('修改失败');location.href='type.php'</script>";

}
