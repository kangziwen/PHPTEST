<?php
/**
 * Created by PhpStorm.
 * User: kzw
 * Date: 2017/9/22
 * Time: 下午3:52
 *  create database article;
 *  use article;
 * show tables;
 * create table admin(username CHAR(20),password CHAR(20),ip CHAR(50))
 alter table admin add id int
Alter table admin add primary key(id);
alter table admin add rights varchar(1)


insert into admin(username,password) values(“kzw”,”123456”);
 */
/*
 *  alter table admin  modify id integer auto_increment;
 * 修改字段类型
 * alter table admin change content content varchar(200);
 *
 * update admin set content='人生自是有情痴，此恨无关风与月' where id='0';
 *
 *
 *  username | password | ip   | id | rights | tel         | content  
 * */
//$mysql=mysql_connect("localhost","root","");
////if(mysql_errno($mysql)){
////
////}
//mysql_select_db("article");
//mysql_query("set names gbk2312");
//
//date_default_timezone_set("PRC");
$mysql=mysqli_connect("localhost","root","") or die("数据库链接失败");
$sql="set names gbk2312";
mysqli_query($mysql,$sql);
mysqli_select_db($mysql,"article");
date_default_timezone_set("PRC");