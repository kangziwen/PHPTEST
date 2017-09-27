<?php
/**
 * Created by PhpStorm.
 * User: kzw
 * Date: 2017/9/27
 * Time: 下午5:08
 */
include_once "../conn.php";
include_once  "islogin.php";

$id=$_GET['id'];

$result=mysqli_query($mysql,"delete from type where id='$id'");

if($result){
    echo "<script>alert('删除成功');location.href='type.php'</script>";
}else{
    echo "<script>alert('删除失败');location.href='type.php'</script>";

}