<?php

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
			
		$mychoose=$_POST['mychoose'];
		$mychoose2=$_POST['mychoose2'];
		$mychoose3=$_POST['mychoose3'];

		if (!empty($mychoose3)) {
			require_once('config/config.php');					
			$result3=mysql_query("SELECT model_discharge_rate FROM sheet1  group by model_discharge_rate " );

			$count3=mysql_num_rows($result3);//count: 0
			for($i=0;$i<$count3;$i++){
				$sheet3[]=mysql_fetch_array($result3);//arr: null
			}
			// if(!empty($sheet3)){
				returnMsg($count3,true,"1","获取到的数据",$sheet3);
			// }else{
			// 	returnMsg('',false,"-1","没有获取到数据","");
			// }
		}