
	<?php

		/*
		 * @param $ret              返回状态   true or false
		 * @param $status           返回编码
		 * @param $message          返回信息
		 * @param $arr              返回数据
		 * @param $totalCount       返回分页总条数
		 * @param string $type      返回输出格式
		 */
		
			function returnMsg($count,$ret,$status,$message,$arr,$type='json')
			{
				$info['count'] = $count;
			    $info['ret'] = $ret;
			    $info['status']= $status;
			    $info['message']= $message;
			    $info['arr'] = $arr;
			    if($type == 'str')
			    {
			        print_r($info);
			    }
			    else
			    {
			        echo json_encode($info);
			    }
			    exit;
			}

			//第二个输入框
			$mychoose=$_POST['mychoose'];
			//print_r($mychoose);
			$mychoose2=$_POST['mychoose2'];
			//print_r($mychoose2);
			$mychoose3=$_POST['mychoose3'];
			//print_r($mychoose3);
			$mychoose4=$_POST['mychoose4'];

			if (empty($mychoose2)&!empty($mychoose)) {
				require_once('config/config.php');
				$result=mysql_query("SELECT brand_name FROM sheet1 WHERE model_level='".$mychoose."' group by brand_name");
				$count=mysql_num_rows($result);
				for ($i=0; $i <$count ; $i++) { 
					$arr[]=mysql_fetch_array($result);
				}			
				if (!empty($arr)) {
					returnMsg($count,true,"1","获取到的数据",$arr);
				}else{
					returnMsg("",false,"-1","没有获取到数据","");
				}
			}

				//第三个输入框
			if (empty($mychoose3)&!empty($mychoose2)) {
				require_once('config/config.php');
				$result2=mysql_query("SELECT car_name FROM sheet1 WHERE  model_level='".$mychoose."' and brand_name='".$mychoose2."' group by car_name ");

				$count2=mysql_num_rows($result2);
				for($i=0;$i<$count2;$i++){
					$sheet2[]=mysql_fetch_array($result2);
				}
				if(!empty($sheet2)){
					returnMsg($count2,true,"1","获取到的数据",$sheet2);
				}else{
					returnMsg('',false,"-1","没有获取到数据","");
				}
			}

				//第四个输入框
				if (empty($mychoose4) && !empty($mychoose3)) {
					require_once('config/config.php');					
					$result3=mysql_query("SELECT model_discharge_rate FROM sheet1 WHERE  model_level='".$mychoose."' and brand_name='".$mychoose2."' or model_discharge_rate='".mychoose3."' group by model_discharge_rate  " );

					$count3=mysql_num_rows($result3);//count: 0
					for($i=0;$i<$count3;$i++){
						$sheet3[]=mysql_fetch_array($result3);//arr: null
					}
					if(!empty($sheet3)){
						returnMsg($count3,true,"1","获取到的数据",$sheet3);
					}else{
						returnMsg('',false,"-1","没有获取到数据","");
					}
				}
				
			//第五个输入框
			if(!empty($mychoose4)){
				require_once('config/config.php');	
				$result4=mysql_query("SELECT model_models FROM sheet1 WHERE  model_level='".$mychoose."' and brand_name='".$mychoose2."' or model_discharge_rate='".mychoose3."' or model_models ='".$mychoose4."' group by model_models  " );
		        $count4=mysql_num_rows($result4);
				for($i=0;$i<$count4;$i++){
					$sheet4[]=mysql_fetch_array($result4);
				}
				// if(!empty($sheet4)){
					returnMsg($count4,true,"1","获取到的数据",$sheet4);
				// }else{
				// 	returnMsg('',false,"-1","没有获取到数据","");
				// }
			}	

	?>
 
