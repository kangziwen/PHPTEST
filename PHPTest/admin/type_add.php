<?php
/**
 * Created by PhpStorm.
 * User: kzw
 * Date: 2017/9/27
 * Time: 下午4:27
 */
?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
<style type="text/css">
.SYYLE6{
    color: #000;
    font-size: 12px;
}
.STYLE19{
    color: #344b50;
    font-size: 12px;
}
.STYLE21 {
    font-size: 12px;
    color: #3b6375;
}
</style>
<script language="JavaScript">
    function test()
    {

        var typename=document.getElementById('typename');
        if(typename.value==''){
            alert('名字不能为空');
            return false;
        }

        return true;
    }
</script>

</head>

<body>
<form action="type_addsava.php" method="post" name="type" id="type" onsubmit="return test();">
    <div style="background-color: #353c44; width: 100%;height: 30px;display: flex;justify-content: flex-start;align-items: center" >
        <img src="images/tb.gif" width="14" height="14" style="margin-left: 20px;margin-right: 30px"/>
        <span style="font-size: 12px;color: aliceblue">添加文章分类</span>
    </div>


    <div style="width: 320px;height: 30px;margin-top: 2px;display: flex;justify-content: flex-start">
        <div style="width: 100px; height: 100%;background-color: #87adbf;">
            <div style="width: 100%;height: 100%;display: flex;justify-content: center;align-items: center;" align="center">分类名称：</div>

        </div>

        <div style="width: 0; height: 100%;margin-left: 10px;flex-grow: 1">
         <input style="width: 100%;height:25px;" type="text"
                name="typename" id="typename"  value=''/>
        </div>

    </div>

    <div style="width: 100%;height: 25px;display: flex;justify-content: center">
        <input type="submit" name="button" id="button" value="提交"/>&nbsp;
        <input type="reset" name="button2" id="button2" value="重置"/>
    </div>
</form>
</body>
</html>
