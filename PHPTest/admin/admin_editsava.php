<?php
/**
 * Created by PhpStorm.
 * User: kzw
 * Date: 2017/9/26
 * Time: 下午3:09
 */
//
//echo var_dump($_POST);
//echo var_dump($_GET);
include '../conn.php';
$id=$_GET['id'];
$username=$_POST['username'];
$tel=$_POST['tel'];
$content=$_POST['content'];


$result=mysqli_query($mysql,
    "update admin set password='$password',tel='$tel',content='$content' where id=$id");
if($result){
  echo "<script>alert('修改成功');location.href='o.php'</script>";
}else{
    echo "<script>alert('修改删除');location.href='o.php'</script>";

}