<?php
/**
 * Created by PhpStorm.
 * User: kzw
 * Date: 2017/9/27
 * Time: 下午2:10
 */
include "../conn.php";
include_once "islogin.php";
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

    </script>

</head>
<body>

<div style="background-color: #353c44; width: 100%;height: 30px;display: flex;
justify-content: space-between;align-items: center" >
    <div style="display: flex;align-items: center">
        <img src="images/tb.gif" width="14" height="14" style="margin-left: 20px;margin-right: 30px"/>
        <span style="font-size: 12px;color: aliceblue">文章分类列表</span>
    </div>
    <div>
        <img src="images/add.gif" width="10px" height="10px"/>
        <a href="type_add.php"><span style="color:#FFFFFF;font-size: 12px;margin-right: 10px">添加</span></a>
    </div>
</div>

<table width="100%" border="0" cellpadding="0" cellspacing="1" bgcolor="#a8c7ce"
       onmouseover="changeto()"  onmouseout="changeback()">
    <tr>
        <td width="30%" height="20" bgcolor="d3eaef" class="STYLE6">
            <div align="center"><span class="STYLE10">ID号码</span></div></td>
        <td width="40%" height="20" bgcolor="d3eaef" class="STYLE6">
            <div align="center"><span class="STYLE10">分类名称</span></div></td>
        <td width="30%" height="20" bgcolor="d3eaef" class="STYLE6">
            <div align="center"><span class="STYLE10">基本操作</span></div></td>
    </tr>

    <?php
     $result=mysqli_query($mysql,"select * from type"); // mysql_query("select * from type");
     while($row= mysqli_fetch_array($result))//mysql_fetch_array($result)
    {
        ?>
        <tr>
            <td height="20" bgcolor="#FFFFFF" class="STYLE6">
                <div align="center"><span class="STYLE19"><?php echo $row["id"];?></span></div></td>
            <td height="20" bgcolor="#FFFFFF" class="STYLE19">
                <div align="center"><?php echo $row["typename"];?></div></td>
            <td height="20" bgcolor="#FFFFFF">
                <div align="center" class="STYLE21">
                    <a href="type_del.php?id=<?php echo $row["id"];?>">删除</a> |
                    <a href="type_edit.php?id=<?php echo $row["id"];?>">修改</a></div></td>
        </tr>

        <?php
    }
    ?>
</table>
</body>
</html>