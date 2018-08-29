<?php
$adminName=$_POST['adminName'];
print_R($adminName);
$password=$_POST['password'];
$repeatPassword=$_POST['repeatPassword'];
if ($password!=$repeatPassword) {
	header("Location:login.php");
	echo "请再次输入密码";
}else{
	require_once('../config/config.php');
	mysql_query("INSERT INTO admin (loginName,loginPsw) VALUES  ('$adminName','$password')");

	header('Location:/lubricant2/lubricant/index.html');
}
