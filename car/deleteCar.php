
<?php
	
	$id=intval($_GET['id']);
	print_r($id);
	require_once ('../config/config.php');//引入一个文件
	mysql_query("DELETE FROM sheet1 WHERE ID=$id");

	if(mysql_errno()){
		mysql_error();
	}else{
		header("Location:/lubricant/garage.php");
		// $_SESSION['name'] = $order_name;
	}
?>

