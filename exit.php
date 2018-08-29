
<?php
session_start();

require_once '/config/config.php';

$name =  $_SESSION['name'];

session_destroy(); //清空以创建的所有SESSION
unset($name);//清空指定的session
//print_r($name);
//exit();
if(empty($name)){
    header("location:/lubricant/login.html");
}

?>
