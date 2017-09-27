<?php
/**
 * Created by PhpStorm.
 * User: kzw
 * Date: 2017/9/25
 * Time: 上午11:52
 */
session_start();
session_destroy();
echo "<script>alert('退出登录');top.location.href='login.php';</script>";