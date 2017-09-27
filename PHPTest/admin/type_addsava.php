<?php
/**
 * Created by PhpStorm.
 * User: kzw
 * Date: 2017/9/27
 * Time: 下午4:42
 */

include_once "../conn.php";
include_once "islogin.php";
$typename=$_POST["typename"];

$result=mysqli_query($mysql,"insert into type (typename) VALUES ('$typename')");
if($result){
    echo "<script>alert('添加成功');location.href='type.php'</script>";
}else{
    echo "<script>alert('添加失败'.mysqli_error($mysql));location.href='type.php'</script>";

}