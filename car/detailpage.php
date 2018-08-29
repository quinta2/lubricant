
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>详情页面</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../font-awesome-4.5.0/css/font-awesome.css">
    <!--<link rel="stylesheet" type="text/css" href="../layui/css/layui.css">-->
    <!-- <link rel="stylesheet" href="../css/addcar.css"> -->
    <link rel="stylesheet" href="../css/file.css">
    <script src="../js/jquery-1.11.3.min.js" type="text/javascript"></script><script src="../js/main.js"></script>
    <style type="text/css">
        .detail-info>div{
            height: 20px;
            line-height: 20px;
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
            <div class="mianRightInnerButtom" style="">
                <!-- <div class="navTitle">
                    <h5>首页<i>></i></h5><h5>订单<i>></i></h5><h5 class="current">订货单</h5>
                </div> -->
                <div class="detailpage" style="width: 800px;margin: 0px auto;height: 600px;">
                    
                    <div class="detail-info" style="height:100%;" >
                        <?php
                            $id=intval($_GET['id']);
                            require_once '../config/config.php';//引入一个文件
                            
                            $result=mysql_query("SELECT * FROM sheet1 WHERE ID=$id ");
                            $mysql1=mysql_fetch_assoc($result);
                                     
                        ?>
                            <div>ID：<?php echo $mysql1['ID']; ?></div>
                            <div>brand_logo(品牌_标志)：<?php echo $mysql1['brand_logo']; ?></div>
                            <div>brand_fist_word(品牌_首字母)：<?php echo $mysql1['brand_fist_word']; ?></div>
                            <div>brand_name(品牌_名称)：<?php echo $mysql1['brand_name']; ?></div>
                            <div>car_manufacturers(车系-厂商)：<?php echo $mysql1['car_manufacturers']; ?></div>
                            <div>car_name(车系-名称)：<?php echo $mysql1['car_name']; ?></div>
                            <div>model_models(车型-年款)：<?php echo $mysql1['model_models']; ?></div>
                            <div>model_name(车型-名称)：<?php echo $mysql1['model_name']; ?></div>
                            <div>brand_country(品牌-国家)：<?php echo $mysql1['brand_country']; ?></div>
                            <div>model_brand(车系-品牌技术)：<?php echo $mysql1['model_brand']; ?></div>
                            <div>model_level(车系-级别)：<?php echo $mysql1['model_level']; ?></div>
                            <div>model_discharge_rate(车型-排气量)：<?php echo $mysql1['model_discharge_rate']; ?></div>
                            <div>model_gear_box(车型-变速箱)：<?php echo $mysql1['model_gear_box']; ?></div>
                            <div>price(价格)（万）：<?php echo $mysql1['price']; ?></div>
                            
                            <div><a style="width: 80px;float: left;color: #000;" href="/lubricant/garage.php">返回</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>

