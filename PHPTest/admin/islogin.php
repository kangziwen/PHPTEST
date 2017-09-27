<?php
/**
 * Created by PhpStorm.
 * User: kzw
 * Date: 2017/9/25
 * Time: 上午10:07
 */
session_start();

if($_SESSION['isok']!='ok'){
    echo "<script>alert('请先登录'); location.href='login.php'</script>";
    exit();
}