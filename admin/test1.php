<?php
session_start();
echo $_SESSION['name']; //
echo $_SESSION['passwd'];   //
echo date('Y m d H:i:s', $_SESSION['time']);
echo '<br /><a href="test.php">返回山一页</a>';
?>







