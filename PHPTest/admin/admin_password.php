<?php
/**
 * Created by PhpStorm.
 * User: kzw
 * Date: 2017/9/25
 * Time: 上午11:52
 */
include '../conn.php';
include 'islogin.php';
$result=mysqli_query($mysql,"select * from admin where username='".$_SESSION["username"]."'");
 while($row=  mysqli_fetch_array($result))//_fetch_array($result))
     {
     $username=$row["username"];
     $password=$row["password"];
//         echo $password;
     $tel=$row["tel"];
     $content=$row["content"];
     $id=$row["id"];

     }
//$username='hehe';
//$password="123456";
//$tel='1371887';
//$content='hahahahhahah';
//$id='1';
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html" charset="utf-8" >
 <title>
密码修改
 </title>
    <style type="text/css">
  body{
      margin: 0px;
  }
    </style>
    <script language="JavaScript">
        function test() {
            var username=document.getElementById('username');
            var password=document.getElementById('password');
            var tel=document.getElementById('tel');
            var content=document.getElementById('content');
            if(username.value==''){
                alert('请填写登录帐号');
               return false;
            }
            if(password.value==''){
                alert('请填写登录密码');
                return false;
            }
            if(tel.value==''){
                alert('请填写联系电话');
                return false;
            }
            if(content.value==''){
                alert('请填写描述');
                return false;
            }
            return true;
        }
    </script>
</head>
<body>
<form action="admin_editsava.php?id=<?php echo $id;?>" method="post" name="admin" id="admin" onsubmit="return test();">
<div style="background-color: #353c44; width: 100%;height: 30px;display: flex;justify-content: flex-start;align-items: center" >
<img src="images/tb.gif" width="14" height="14" style="margin-left: 20px;margin-right: 30px"/>
<span style="font-size: 12px;color: aliceblue">管理员列表</span>
</div>

<div style="width: 320px;height: 200px;margin-top: 2px;display: flex;justify-content: flex-start">
    <div style="width: 150px; height: 100%;background-color: #87adbf;">
        <div style="width: 100%;height: 50px;display: flex;justify-content: center;align-items: center">登录帐号：</div>
        <div style="width: 100%;height: 50px;display: flex;justify-content: center;align-items: center">登录密码：</div>
        <div style="width: 100%;height: 50px;display: flex;justify-content: center;align-items: center">联系方式：</div>
        <div style="width: 100%;height: 50px;display: flex;justify-content: center;align-items: center">详细描述：</div>

    </div>

    <div style="width: 0; height: 100%;margin-left: 10px;flex-grow: 1">
        <div style="width: 100%;height: 50px;display: flex;justify-content: center;align-items: center">
            <input style="width: 100%;height:25px;" type="text"
                   name="username" id="username" readonly="readonly" value='<?php echo $username?>'
            />
        </div>
        <div style="width: 100%;height: 50px;display: flex;justify-content: center;align-items: center">
            <input style="width: 100%;height:25px;" type="password"
                   name="password" id="password" value='<?php echo $password?>'
            />
        </div>
        <div style="width: 100%;height: 50px;display: flex;justify-content: center;align-items: center">
            <input style="width: 100%;height:25px;" type="text"
                   name="tel" id="tel" value='<?php echo $tel?>'
            />
        </div>
        <div style="width: 100%;height: 50px;display: flex;justify-content: center;align-items: center">
            <textarea style="width: 100%;height:25px;"
                   name="content" id="content"
            ><?php echo $content?></textarea>
        </div>

    </div>
</div>

    <div style="width: 100%;height: 25px;display: flex;justify-content: center">
    <input type="submit" name="button" id="button" value="提交"/>&nbsp;
        <input type="reset" name="button2" id="button2" value="重置"/>
    </div>
</form>
</body>
</html>
