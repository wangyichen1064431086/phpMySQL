<?php
require_once "common.php";
$stu_id=trim($_POST['stu_id']);
$stu_name=trim($_POST['stu_name']);
$stu_group=trim($_POST['stu_group']);
$sql="INSERT INTO student(stu_id,stu_name,stu_group)";
$sql=$sql." VALUES('".$stu_id."','".$stu_name."',".$stu_group.")";
echo 1 mysql_query($sql,$con);
/*
if(mysql_query($sql,$con))
echo "用户添加成功！<br>";
else
echo "用户添加失败！<br>";*/
?>