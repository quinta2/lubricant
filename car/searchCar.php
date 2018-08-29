<?php

	$search=$_GET['search'];
	if(empty($search)){
		echo "<script language='JavaScript'>alert('不能为空');</script>";
		header("Location:/lubricant/garage.php");
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	<title>搜索页面</title>
	<style type="text/css">
		.search-content{
			width: 100%;
		}
		.search-content table tr th,.search-content table tr td{
			width: 90px;
			padding-right:20px;
			
		}
		.search-content table tr td{
			/*border:1px solid #000;*/
		}
	</style> 

	<?php
		require_once '../config/config.php';
         
        //显示总页数的函数
       function news($pageNum1 = 1, $pageSize1 = 6)
        {
            $array = array();
            // $search=$_POST['search'];
            $search=$_GET['search'];
			// limit为约束显示多少条信息，后面有两个参数，第一个为从第几个开始，第二个为长度
            $r = mysql_query("SELECT * FROM sheet1 WHERE brand_name LIKE '%$search%' limit "  . (($pageNum1 - 1) * $pageSize1) . "," . $pageSize1);
            // var_dump($r);
            $count=mysql_num_rows($r);
            for ($i=0; $i <$count; $i++) { 
                $obj[]=mysql_fetch_array($r);
            }
            return $obj;
        }
         
         	$array = array();
			// $search =$_POST['search'];  
			$search=$_GET['search'];
			//可以显示出总页数
            $r1 = mysql_query("SELECT * FROM sheet1 WHERE brand_name LIKE '%$search%' ");//可以显示出总页数
			
            $count1 = mysql_num_rows($r1);   //显示总页数 
           	// print_r($allNum);
			// exit();
            $pageSize1 = 6; //约定没页显示几条信息
            $pageNum1 = empty($_GET["pageNum"])?1:$_GET["pageNum"];
            $endPage1 = ceil($count1 /$pageSize1); //总页数
			
            $array = news($pageNum1,$pageSize1); 
            // print_r(news($pageNum,$pageSize));
            // exit();
			//var_dump($array);  
           
    ?>
</head>
<body>
	<div class="search-content">

		<table style="">
			<thead>
				<tr>
					<th>ID</th>
					<th>brand_logo(品牌_标志)</th>
					<th>brand_fist_word(品牌_首字母)</th>
					<th>brand_name(品牌_名称)</th>
					<th>car_manufacturers(车系-厂商)</th>
					<th>car_name(车系-名称)</th>
					<th>model_models(车型-年款)</th>
					<th>model_name(车型-名称)</th>
					<th>brand_country(品牌-国家)</th>
					<th>model_brand(车系-品牌技术)</th>
					<th>model_level(车系-级别)</th>
					<th>model_discharge_rate(车型-排气量)</th>
					<th>model_gear_box(车型-变速箱)</th>
					<th>price(价格)（万）</th>
				</tr>
			</thead>

			<?php
				 
				foreach ($array as $key => $value) {

			?>		
			<tbody>
				<tr>
					<td><?php echo $value['ID']; ?></td>
				    <td><?php echo $value['brand_logo']; ?></td>
				    <td><?php echo $value['brand_fist_word']; ?></td>
				    <td><?php echo $value['brand_name']; ?></td>
				    <td><?php echo $value['car_manufacturers']; ?></td>
				    <td><?php echo $value['car_name']; ?></td>
				    <td><?php echo $value['model_models']; ?></td>
				    <td><?php echo $value['model_name']; ?></td>
				    <td><?php echo $value['brand_country']; ?></td>
				    <td><?php echo $value['model_brand']; ?></td>
				    <td><?php echo $value['model_level']; ?></td>
				    <td><?php echo $value['model_discharge_rate']; ?></td>
				    <td><?php echo $value['model_gear_box']; ?></td>
				    <td><?php echo $value['price']; ?></td>
				</tr>				
			</tbody>
			<?php } ?>
			<div class="pageList">
                <tr>
                    <td colspan="3">共<?php echo $count1 ?>条数据/共有<?php echo $endPage1 ?> 页</td>
                    <!-- <?php echo $search ?>; -->
                    <td><a href="?pageNum=1&search=<?php echo $search ?>">首页</a></td>
                    <td><a href="?pageNum=<?php echo  $pageNum1==1?1:$pageNum1-1 ?>&search=<?php echo $search ?>">上一页</a></td>
                    <td><a href="?pageNum=<?php echo $pageNum1==$endPage1 ?$endPage1 :$pageNum1+1?>&search=<?php echo $search ?>">下一页</a></td>
                    <!-- <?php echo $count1 ?> -->
                    <td><a href="?pageNum=<?php echo $pageNum1 =$endPage1?>&search=<?php echo $search ?>">尾页</a></td>
                </tr>
            </div> 
		</table>
		<div><a style="width: 80px;float: left;color: #000;" href="/lubricant/garage.php">返回</a></div>
	</div>
</body>
</html>
