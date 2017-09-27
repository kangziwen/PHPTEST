<?php
/**
 * Created by PhpStorm.
 * User: kzw
 * Date: 2017/9/22
 * Time: 下午5:32
 */
//echo 'mian.... 界面';
include "islogin.php"
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-type" content="text/html" charset="UTF-8"/>
    <title>首页</title>
</head>

<frameset rows="127,*,11" frameborder="no" border="0" framespacing="0">
    <frame src="top.php" name="topFrame" scrolling="No" noresize="noresize" id="topFrame"/>
    <frame src="center.php" name="mainFrame" id="mainFrame"/>
    <frame src="down.php" name="bottomFrame" scrolling="No" noresize="noresize" id="bottomFrame"/>

</frameset>
<noframes>
<body>
不支持
</body>
</noframes>

</html>