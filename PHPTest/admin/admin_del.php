<?php
/**
 * Created by PhpStorm.
 * User: kzw
 * Date: 2017/9/26
 * Time: 下午5:08
 */
include "../conn.php";
include "islogin.php";
$id=$_GET['id'];
$result=mysqli_query($mysql,"delete from admin where id=$id");
if($result){
    echo "<script>alert('删除成功');location.href='admin.php'</script>";
}else{
    echo "<script>alert('删除失败');location.href='admin.php'</script>";
}