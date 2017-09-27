<?php
/**
 * Created by PhpStorm.
 * User: kzw
 * Date: 2017/9/22
 * Time: 下午3:38
 */
include "../conn.php";

$username=$_POST["username"];
$paswd=$_POST["password"];
$code=$_POST["code"];

session_start();
if($code!=$_SESSION["code"]){
    echo  "<script>alert('验证码错误');location.href='login.php'</script>";
}

$result=mysqli_query($mysql,"select count( * ) from admin where username='$username' and password = '$paswd'");
$row=mysqli_fetch_row($result);
if($row[0]!=1){
  echo "<script>alert('账号或密码错误');location.href='login.php'</script>";
    exit();
}else{
    $ip=$_SERVER["REMOTE_ADDR"];
   // echo $ip;
    $result=mysqli_query($mysql,"update admin set ip='$ip' where username='$username'");
    $result=mysqli_query($mysql,"select * from admin where username='$username'");

    while ($row=mysqli_fetch_array($result)){
//        echo var_dump($row);
        $_SESSION['username']=$row['username'];
        $_SESSION['isok']='ok';
        $_SESSION["rights"]=$row["rights"];


    }

    echo "<script>location.href='main.php'</script>";
}
//echo var_dump($row);


