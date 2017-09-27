<?php
/**
 * Created by PhpStorm.
 * User: kzw
 * Date: 2017/9/27
 * Time: 上午10:32
 */

include "../conn.php";
$username=$_POST["username"];
$password=$_POST["password"];
$tel=$_POST["tel"];
$content=$_POST["content"];
$rights=$_POST["rights"];

//echo var_dump($_POST);
//exit();
$result=mysqli_query($mysql,"select count(*) from admin where username='$username'");
$row=mysqli_fetch_row($result);
if($row[0]!=0){
    echo "<script> alert('用户已存在');location.href='admin.php'</script>";
    exit();
}
$ip=$_SERVER["REMOTE_ADDR"];
$result=mysqli_query($mysql,"insert into admin (username,password,tel,content,rights,ip) VALUES (
'$username','$password','$tel','$content','$rights','$ip')");

if($result){
   echo "<script>alert('创建管理员成功');location.href='admin.php' </script>";
    echo "插入成功";
}else{
    echo "<script>alert('mysqli_error($mysql)');location.href='admin.php'</script>";

}

