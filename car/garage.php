<?php        
    session_start();
    
    require_once '/config/config.php';

    $name =  $_SESSION['name'];  
    // $psw =$_SESSION['psw'];
    
	//var_dump($name);
	   
	if(!$name){ 
		header("location:/lubricant/login.html");
	}
	       
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>车库管理页面</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="font-awesome-4.5.0/css/font-awesome.css">
    <!--<link rel="stylesheet" type="text/css" href="../layui/css/layui.css">-->
    <link rel="stylesheet" href="css/file.css">

    <script src="js/jquery-1.11.3.min.js" type="text/javascript"></script><script src="js/main.js"></script>
    <style type="text/css">
        .search-car{
            width: 220px;
            height: 32px;
            float: right;
            margin-right: 20px;
            margin-bottom: 20px;
        }
        .car-list-info tr th{
            height: 70px;
        }
        .car-list-info tr td input{
            width: 13px;
            height:13px;
            margin-right: 50px;
        }
    </style>
    <?php

        
        //显示总页数的函数
       function news($pageNum = 1, $pageSize = 6)
        {
            $array = array();
            require_once '/config/config.php';
            // limit为约束显示多少条信息，后面有两个参数，第一个为从第几个开始，第二个为长度
            $r = mysql_query("select * from sheet1 limit " . (($pageNum - 1) * $pageSize) . "," . $pageSize);
            // var_dump($r);
            $count=mysql_num_rows($r);
            for ($i=0; $i <$count; $i++) { 
                $obj[]=mysql_fetch_array($r);
            }
            return $obj;
        }
         
            
           //可以显示出总页数
            $r = mysql_query("select * from sheet1");//可以显示出总页数
            $allNum = mysql_num_rows($r);   //显示总页数 
           
            $pageSize = 6; //约定没页显示几条信息
            $pageNum = empty($_GET["pageNum"])?1:$_GET["pageNum"];
            $endPage = ceil($allNum/$pageSize); //总页数
            $array = news($pageNum,$pageSize);
           
    ?>
</head>
<body style="height: 100%">
<div class="mainbody" style="display: flex;">
    
    <div class="mainRight font14">
        <div class="mainRightInner">
            <div class="mainRightInnerTop" >
                <ul class="rightTopul">
                    <li class="showOrHidden"><span class="fa fa-outdent"></span></li>
                    <li class="rightulInner">
                        <ul class="rightulInnerTop">
                            <li style="margin-top: 20px;margin-left: 20px;"><a href="javascript:void (0)" style="color:#fff;">管理员<span class="fa fa-caret-down"></span></a></li>
                            <li style="margin-right: 20px;"><a href="javascript:void (0)"><img src="/lubricant/images/15.jpg" width="40px" height="40px;"></a></li>
                        </ul>
                        <div class="clear"></div>
                      
                    </li>
                </ul>
            </div>
            <div class="mianRightInnerButtom">
                
                <div class="mainRightContent">
                    <div class="maincontent">
                        <div style="margin-bottom:10px;font-size: 16px;width: 80px;margin-right:30px;float: right;"><a href="/lubricant/car/addCar.php">添加车型</a>
                        </div>

                        <form action="/lubricant/car/searchCar.php" name="form" method="post">
                            <div class="search-car">
                                <input style="width: 150px;height: 32px;line-height: 32px;margin-right:20px;background-color: #fff;" type="text" placeholder="请输入车名的关键字" name="search" value="">
                                <input  type="submit" value="搜索">
                            </div>                            
                        </form>
                    </div>
                    <div class="car-list-info">
                        <table border="0 " cellspacing="0" cellpadding="0" style="width: 100%;">
                            <thead>
                                <tr>
                                    <th><input class="ant-check-input" type="checkbox" name="" title="" >model_level(类型)</th>
                                    <th>brand_name(品牌)</th>
                                    <th>car_name(车型)</th>
                                    <th>model_discharge_rate(排量)</th>
                                    <th>model_models(年份)</th>
                                    <th>删除</th>
                                </tr>
                            </thead>
                            <?php
                                foreach($array as $key=>$values){
                            ?>
                            <tbody>
                                <tr>
                                    <td><input type="checkbox"  class="check-input" name="model_level" title="" ><?php echo $values["model_level"]; ?></td>
                                    <td><a href="/lubricant/car/detailpage.php?id=<?php echo $values['ID']; ?>" name="brand_name" style="cursor: pointer;"><?php echo $values['brand_name']; ?></a></td>
                                    <td><?php echo $values['car_name']; ?></td>
                                    <td><?php echo $values['model_discharge_rate']; ?></td>
                                    <td><?php echo $values['model_models']; ?></td>
                                    <td><a href="/lubricant/car/deleteCar.php?id=<?php echo $values['ID']; ?>" name="" style="cursor: pointer;">删除</a> </td>
                                </tr>
                            </tbody>
                           <?php
                                }
                            ?> 
                            <div class="pageList">
                                <tr>
                                    <td colspan="3">共<?php echo $allNum ?>条数据/共有<?php echo $endPage ?> 页/每页 <?php echo $pageSize ?>条数据</td>
                                    <td><a href="?pageNum=1">首页</a></td>
                                    <td><a href="?pageNum=<?php echo  $pageNum==1?1:$pageNum-1 ?> ">上一页</a></td>
                                    <td><a href="?pageNum=<?php echo $pageNum==$endPage ?$endPage :$pageNum+1?>">下一页</a></td>
                                    <td><a href="?pageNum=<?php echo $pageNum =$endPage?>">尾页</a></td>
                                    
                                </tr>
                            </div>   
                        </table>                    
                    </div>                        
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>

