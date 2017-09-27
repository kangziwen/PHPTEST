<!DOCTYPE html>
<head>
    <meta http-equiv="content-type" content="text/html" charset="UTF-8"/>
    <title>登录</title>
    <style type="text/css">

       #back{
           display: flex;
           flex-direction: row;
           justify-content: space-between;
          // background-color: burlywood;
           width: 300px;
           height: 100px;
           margin: 20px auto 0 auto;
       }
        #left{
            background-color: transparent;
            width: 190px;
            height: auto;
            margin-right: 0px;

        }
        #right{
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            background-color: transparent;
            width: 100px ;
            height: auto;
            margin-left: 0;
        }

     </style>
    <script language="JavaScript" >
        window.onload=function () {

        }
        function reset(){
            console.log("reset----")
            alert("重置")

        }
        function test() {
            var username=document.getElementById("username")
            var passwd=document.getElementById("password")

            var code=document.getElementById("code")
            if(username.value==''){
               alert("用户名为空")
                return false;
            }
            if(passwd.value==''){
                alert("密码为空")
                return false;
            }
            if(code.value==''){
                alert("验证码为空")
                return false;
            }

            return true;
        }

    </script>
</head>
<body bgcolor="#1a608c"  >

<form name="admin" id="admin" action="login_sava.php" method="post" onsubmit=" return test();">
    <div style="width: 320px;height: 160px ;  margin:20% auto 0 auto;" id="">
    <img src="images/login_04.gif" alt="" width="320px" height="160px" style="margin: auto" >
    </div>

    <div id="back">
        <div id="left" >
         <div class="name" >
           <span style="width:60px;color:lightgoldenrodyellow;
           display:-moz-inline-box;display:inline-block;
           text-align: right;font-size: 14px ">用户名:</span>
             <input type="text" name="username" id="username"
                    style="width:100px; height:17px; background-color:#87adbf;
              border:solid 1px #153966; font-size:12px; color:#283439; ">
         </div>
            <div class="passwd">
                <span style="width:60px;color:lightgoldenrodyellow;
                display:-moz-inline-box;display:inline-block;
                 text-align: right ;font-size: 14px " >密码:</span>
                <input type="password" name="password" id="password"
                       style="width:100px; height:17px; background-color:#87adbf;
              border:solid 1px #153966; font-size:12px; color:#283439; ">
            </div>
            <div class="yanzheng">
                <span style="width: 60px;color:lightgoldenrodyellow;
                        display: -moz-inline-box;display: inline-block;
                        text-align: right;font-size: 14px">验证码:</span>
                <input type="text" name="code" id="code" style="width: 50px;height: 17px;background-color:#87adbf
                    border: solid 1px #153966; font-size: 12px;color:#283439 ">
                <img src="code.php" 1="50px" height="20px" />
            </div>
        </div>
        <div id="right" >
        <input type="image" src="images/dl.gif" width="62px"  style="margin-bottom: 2px">
         <img  src="images/cz.gif" width="62px" height="20px" style="margin-top: 2px" onclick="window.reset()">

        </div>
    </div>

    
</form>
</body
<?php
/**
 * Created by PhpStorm.
 * User: kzw
 * Date: 2017/9/22
 * Time: 上午10:27
 */

?>