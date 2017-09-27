<?php
/**
 * Created by PhpStorm.
 * User: kzw
 * Date: 2017/9/26
 * Time: 下午3:41
 */
include '../conn.php';
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
    var  highlightcolor='#d5f4fe';
    //此处clickcolor只能用win系统颜色代码才能成功,如果用#xxxxxx的代码就不行,还没搞清楚为什么:(
    var  clickcolor='#51b2f6';
 function changeto() {
     source=event.srcElement;
     if  (source.tagName=="TR"||source.tagName=="TABLE")
         return;
     while(source.tagName!="TD")
         source=source.parentElement;
     source=source.parentElement;
     cs  =  source.children;
//alert(cs.length);
     if  (cs[1].style.backgroundColor!=highlightcolor&&source.id!="nc"&&cs[1].style.backgroundColor!=clickcolor)
         for(i=0;i<cs.length;i++){
             cs[i].style.backgroundColor=highlightcolor;
         }
 }
 function changeback() {
     if  (event.fromElement.contains(event.toElement)||source.contains(event.toElement)||source.id=="nc")
         return
     if  (event.toElement!=source&&cs[1].style.backgroundColor!=clickcolor)
//source.style.backgroundColor=originalcolor
         for(i=0;i<cs.length;i++){
             cs[i].style.backgroundColor="";
         }
 }
</script>

</head>
<body>

<div style="background-color: #353c44; width: 100%;height: 30px;display: flex;
justify-content: space-between;align-items: center" >
    <div style="display: flex;align-items: center">
    <img src="images/tb.gif" width="14" height="14" style="margin-left: 20px;margin-right: 30px"/>
    <span style="font-size: 12px;color: aliceblue">管理员列表</span>
    </div>
    <div>
        <img src="images/add.gif" width="10px" height="10px"/>
        <a href="admin_add.php"><span style="color:#FFFFFF;font-size: 12px;margin-right: 10px">添加</span></a>
    </div>
</div>

<!--table表格-->
<table width="100%" border="0" cellpadding="0" cellspacing="1"
bgcolor="#a8c7ce" onmousemove="changeto()" onmouseout="changeback()">
<!-- 行 第一行标题 -->
  <tr>
<!-- 列-->
    <td width="10%" height="20" bgcolor="d3eaef" class="SYYLE6">
     <div align="center">
      <span class="SYYLE6">用户名</span>
     </div>
    </td>

      <!-- 列-->
      <td width="15%" height="20" bgcolor="d3eaef" class="SYYLE6">
          <div align="center">
              <span class="SYYLE6">用户角色</span>
          </div>
      </td>
      <!-- 列-->
      <td width="14%" height="20" bgcolor="d3eaef" class="SYYLE6">
          <div align="center">
              <span class="SYYLE6">联系方式</span>
          </div>
      </td>
      <!-- 列-->
      <td width="16%" height="20" bgcolor="d3eaef" class="SYYLE6">
          <div align="center">
              <span class="SYYLE6">IP地址</span>
          </div>
      </td>
      <!-- 列-->
      <td width="27%" height="20" bgcolor="d3eaef" class="SYYLE6">
          <div align="center">
              <span class="SYYLE6">详细描述</span>
          </div>
      </td>
      <!-- 列-->
      <td width="14%" height="20" bgcolor="d3eaef" class="SYYLE6">
          <div align="center">
              <span class="SYYLE6">基本操作</span>
          </div>
      </td>
  </tr>
<!--从数据库读出数据-->
    <?php
//    $row=array('id'=>'0','rights'=>'1','tel'=>'13718870793','ip'=>
//        '127.0.0.1','content'=>'hahah','username'=>'kzw'
//    );
    $result=mysqli_query($mysql,"select * from admin");
    while($row=mysqli_fetch_array($result))
    {
     ?>
    <tr >

      <td height="20" bgcolor="#ffffff" class="STYLE19" >
        <div align="center">
            <span class="STYLE19">
                <?php echo $row['username'];?>
            </span>
        </div>
      </td>



        <td height="20" bgcolor="#ffffff" class="STYLE19" >
            <div align="center">
            <span class="STYLE19">
                <?php
                if($row["rights"]!=1){
                    echo "普通管理员";
                }else{
                    echo "超级管理员";

                }
                ?>
            </span>
            </div>
        </td>

        <td height="20" bgcolor="#ffffff" class="STYLE19" >
            <div align="center">
            <span class="STYLE19">
                <?php echo $row['tel'];?>
            </span>
            </div>
        </td>

        <td height="20" bgcolor="#ffffff" class="STYLE19" >
            <div align="center">
            <span class="STYLE19">
                <?php echo $row['ip'];?>
            </span>
            </div>
        </td>

        <td height="20" bgcolor="#ffffff" class="STYLE19" >
            <div align="center">
            <span class="STYLE19">
                <?php echo $row['content'];?>
            </span>
            </div>
        </td>

        <td height="20" bgcolor="#FFFFFF">
            <div align="center" class="STYLE21">
                <a href="admin_del.php?id=<?php echo $row["id"];?>">删除</a> |
                <a href="admin_edit.php?id=<?php echo $row["id"];?>">修改</a>
            </div>
        </td>
    </tr>
        <!-- 行 内容 -->

    <?php
        }
    ?>

</table>

</body>
</html>
