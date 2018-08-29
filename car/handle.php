<?php
	
	$model_level=$_POST['model_level'];
	
	$brand_name=$_POST['brand_name'];

	$car_name=$_POST['car_name'];
	
	$model_discharge_rate=$_POST['model_discharge_rate'];

	$model_models=$_POST['model_models'];
	
	require_once('../config/config.php');
	mysql_query("INSERT INTO sheet1 (model_level, brand_name,car_name,model_discharge_rate,model_models) VALUES ('".$model_level."','".$brand_name."','".$car_name."','".$model_discharge_rate."','".$model_models."')") ;
	
	if ($result) {
			echo 1;
	}else{
		echo 0;
	}
	// exit;
	header("Location:/lubricant/garage.php");