<?php
/**
 * Created by PhpStorm.
 * User: kzw
 * Date: 2017/9/22
 * Time: 下午3:18
 */
$db=imagecreate(50,20);
$b=imagecolorallocate($db,255,0,0);
$f=imagecolorallocate($db,255,255,255);
$str="1234567890";
$s='';
for($i=0;$i<4;$i++){
   $k=mt_rand(1,strlen($str));
    $s.=$str[$k-1];
}
session_start();
$_SESSION["code"]=$s;
imagefill($db,0,0,$b);
imagestring($db,5,5,3,$s,$f);
header("content-type:image/png");
imagepng($db);
