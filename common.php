<?php
$con=mysql_connect("localhost:3306","root")
or die("数据库服务器连接失败！<br>");
mysql_select_db("newmedia",$con)
or die("数据库选择失败!<br>");
mysql_query("set names 'utf8'");
?>