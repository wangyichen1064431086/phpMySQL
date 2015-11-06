<?php require_once "common.php"?>
<html>
    <head>
        <title>添加学生</title>
    </head>
    <body>
        <h3>添加学生</h3>
        <form id="add_stu" name="add_stu" method="post" action="insert_user.php">
            学生学号：<input type="text" name="stu_id"/><br>
            学生姓名：<input type="text" name="stu_name"/><br>
            所属组别：<select name="stu_group">
                <?php
                $sql="SELECT * FROM gro";
                $result=mysql_query($sql,$con);
                while($rows=mysql_fetch_row($result))
                {
                    echo "<option value=".$rows[0].">".$rows[0]."</option>";
                }
                ?>
            </select><br>
            <br>
            <button type="submit">添加</button>
        </form>
    </body>
</html>