<?php
/**
 * Created by PhpStorm.
 * User: kzw
 * Date: 2017/9/25
 * Time: 上午10:32
 */
include "islogin.php"
?>
<!DOCTYPE html>
<html>
<head>
<meta  charset="utf-8" http-equiv="Content-Type" content="text/html"/>
<style type="text/css">
    body {
        margin-left: 0px;
        margin-top: 0px;
        margin-right: 0px;
        margin-bottom: 0px;
    }
</style>
</head>
<body bgcolor="red" >
<div style="height: 57px;
background-color: beige;
background-image: url('images/main_03.gif');
display: flex;justify-content: flex-end;align-items: flex-end">

<div style="width: 200px;height: 25px;display: flex;flex-direction: row;">
<img src="images/main_05.gif" style="width: 50px;height: 100%;">
<div style="background-image: url('images/main_06.gif');height:100%;width: 150px;
display: flex;justify-content: space-around;align-items: center;flex-direction: row;">

  <a href="admin_password.php" target="main" width="40px" height="20px">
      <img src="images/pass.gif" width="40px" height="20px"></a>
    <a href="admin_password.php" target="main" width="40px" height="20px">
        <img src="images/user.gif" width="40px" height="20px"></a>
    <a href="out_login.php" width="40px" height="20px">
        <img src="images/quit.gif" width="40px" height="20px"></a>

</div>
</div>
</div>

<div style="height: 40px;width: 100%;background-image: url('images/main_10.gif');
display: flex;justify-content: flex-end;flex-direction: row;
">
    <div style="background-image: url('images/main_11.gif');width: 240px;height: 100%">
        <div align="right" style="margin-right: 5px;margin-top: 8px">
            <span  style="font-size: 12px;color: #fff;">服务器时间：
                <?php echo date("Y-m-d h:i:s",time());?>
            </span>
        </div>
    </div>
</div>
<!--底下的框-->
<div style="background-image: url('images/main_31.gif');height: 30px;width: 100%;
display: flex;justify-content: flex-start;align-items: center">

<div style="background-image: url('images/main_29.gif');width: 147px;height: 30px;
display: flex;justify-content: center;align-items: center">
    <span style="font-size: 12px;color: white;margin-right: 20px;margin-top:5px;width: auto " >管理菜单</span>
</div>
<img src="images/main_30.gif" style="width: 39px;height: 100%">
 <span style="font-size: 12px;color: white;width: 60%">当前登录用户: <?php echo $_SESSION['username']?>  &nbsp;
     用户角色：
     <?php
      if($_SESSION["rights"]==1){
      echo "超级管理员";
      }
      else
      {
          echo "普通管理员";
      }
     ?>
 </span>
    <span style="font-size: 12px;color: white; height: 20px ;
    text-align: end;margin-right: 20px;width: 30%" >IP: <?php echo $_SERVER["REMOTE_ADDR"]?></span>


</div>

</body>
</html>
