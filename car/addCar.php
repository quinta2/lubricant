
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>车型添加</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../font-awesome-4.5.0/css/font-awesome.css">
    <!--<link rel="stylesheet" type="text/css" href="../layui/css/layui.css">-->
    <!-- <link rel="stylesheet" href="../css/addcar.css"> -->
    <link rel="stylesheet" href="../css/file.css">
    <script src="../js/jquery-1.11.3.min.js" type="text/javascript"></script><script src="../js/main.js"></script>
	<style type="text/css">
		.mianRightInnerButtom .car-list {
			width: 800px;
			margin-left: 30px;
		}
		.mianRightInnerButtom .car-list div>input{
			height: 26px;
			line-height: 26px;
			margin-top: 20px;
		}
	</style>
</head>
<body style="height: 100%">
<div class="mainbody" style="display: flex;">
    
    <div class="mainRight font14">
        <div class="mainRightInner">
            <div class="mainRightInnerTop">
                <ul class="rightTopul">
                    <li class="showOrHidden"><span class="fa fa-outdent"></span></li>
                    <li class="rightulInner">
                        <ul class="rightulInnerTop">
                            <li style="margin-top: 20px;margin-left: 20px;"><a href="javascript:void (0)" style="color:#fff;">管理员<span class="fa fa-caret-down"></span></a></li>
                            <li style="margin-right: 20px;"><a href="javascript:void (0)"><img src="../images/15.jpg" width="40px" height="40px;"></a></li>
                        </ul>
                        <div class="clear"></div>
                        <ul class="xialalist">
                            <div class="arrowup"></div>
                            <div class="xialaInner">
                                <li><a href="javascript:void (0)">修改密码</a></li>
                                <li><a href="/lubricant/exit.php">退出登录</a></li>
                            </div>
                        </ul>
                    </li>
                    <li class="search"><a href="javascript:void (0)"><span class="fa fa-search"></span></a></li>
                </ul>
            </div>
            <div class="mianRightInnerButtom">
              
                <div class="car-list">
                    <!-- 文件内容，请使用 "multipart/form-data"。上传文件时候必须添加，其他情况可以不添加  -->
                    <form name="form" action="/lubricant/car/handle.php" method="post">

                        <div class="">model_level(类型)：<input type="text" name="model_level"  value=""></div>
                        <div class=" " >brand_name(品牌)：<input  type="text" name="brand_name" /></div>
                        <div class=" ">car_name(车型)：<input  type="text" name="car_name" value=""></div>

                        <div class=" ">model_discharge_rate(排量)：<input type="text" name="model_discharge_rate" value=""></div>

                        <div class=" ">model_models(年份)：<input type="text" name="model_models" value=""></div>
                        <div><input style="width: 50px;height: 20px;line-height: 20px;text-align: center;" type="submit" name="" value="提交" style="background: #00b8d2;" ></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>



