/**
 * Created by hehehe on 2017/7/31.
 */

$(document).ready(function(){
$(".innerul").click(function(){
        var $cont=$(this).siblings(".ulnone");
        if($cont.is(":hidden")){
            $cont.slideDown();
        }else {
            $cont.slideUp();
        }
        $(this).parents(".innerli").siblings("li").children(".ulnone").slideUp();
    })

    /*鼠标移动到右边的菜单 背景颜色改变*/
    $(".showOrHidden").mouseover(function(){
        $(this).css("background-color","#999")
        $(".showOrHidden span").css("color","#fff")
    })
    $(".showOrHidden").mouseout(function(){
        $(this).css("background-color","#00b8d2")
        $(".showOrHidden span").css("color","#fff")
    })

    /*鼠标移动到右边背景变色*/
    $(".rightulInnerTop").mouseover(function(){
        $(this).css("background-color","#ccc")
    })
    $(".rightulInnerTop").mouseout(function(){
        $(this).css("background-color","#00b8d2")
    })

    $(".xialalist").css("display","none");
    $(".rightulInnerTop").click(function(){
        var $cont=$(".xialalist");
        if($cont.is(":hidden")){
            $cont.slideDown();
        }else {
            $cont.slideUp();
        }
    })

    /*鼠标点击左边菜单按钮右边内容显示后者隐藏*/
    $(".showOrHidden").click(function(){
        if($(".mainLeft").is(":hidden")){
            $(".mainLeft").css("display","block");
            $(".showlogo").css("display","none");
        }else {
            $(".mainLeft").css("display","none");
            $(".showlogo").css("display","block");
        }
    })

    /*鼠标移动到缩小的图片右边侧边栏出现*/
    $(".smallulrightnone").css("display","none");
    $(".smallulleft").mouseover(function(){
        $(this).siblings(".smallulrightnone").css("display","block");
    })
    $(".smallulleft").mouseout(function(){
        $(this).siblings(".smallulrightnone").css("display","none");
    })
    $(".smallulrightnone").mouseover(function(){
        $(this).css("display","block");
    })
    $(".smallulrightnone").mouseout(function(){
        $(this).css("display","none");
    })

    //$(".xianshi").css("display","none")
    //$(".smallulleft").mouseover(function(){
    //    $(".yingcang").css("display","none")
    //    $(".xianshi").css("display","block")
    //})
    //$(".smallulleft").mouseout(function(){
    //    $(".yingcang").css("display","block")
    //    $(".xianshi").css("display","none")
    //})
    //$(".smallulleft").css("height","60px").css("overflow","hidden");
    //
    //$(".smallulleft").mouseover(function(){
    //    $(this).css("padding-top","-60px");
    //})

    /*鼠标移动到搜索出现高级搜索菜单*/
    $(".hsInner").css("display","none");
    $(".search").click(function(){

        var $cont=$(".hiddenSearch");
        if($cont.is(".h60")){
            $(".hsInner").css("display","none");
            $cont.removeClass("h60");
        }
        else {
            $(".hsInner").slideDown();
            $cont.addClass("h60");
        }

    });

    $(".ant-check-input").click(function(){
        var $cishu=$(".check-input");

        if($cishu.is(":checked")){
            $(".check-input").prop("checked",false);
        }else{
            $(".check-input").prop("checked",true);
        }
        
    });


    
    /*第一个输入框*/
    $(".choose").change(function(){
        var _this = "";
        _this = $(".choosebrand");//数据列表容器，
        var options=$(".choose option:selected");
        var mychoose = options.val();
        $.ajax({
            url: "http://demo.duochaxun.com/m-lubricant/car.php",
            type:"post",
            async: false,
            data:{"mychoose":mychoose,},
            success:function(data) {
                var json=eval("("+data+")");
                var carcount=json.count;
                if (carcount > 0) //数据总条数
                {
                    var yuanshi="<option selected>请选择</option>"
                    _this.html("");
                    _this.append(yuanshi);
                    /*if判断传递相应的参数*/
                    for (var x = 0; x < carcount; x++) {
                        var huode="<option value="+x+">"
                        var html = huode + json.arr[x].brand_name + "</option>";
                        _this.append(html);
                    }
                }else {
                    _this.html("");
                    _this.append("");
                }
            }
        })
    })

    /*第二个输入框*/
    $(".choosebrand").change(function(){
        var _this = "";
        _this = $(".choosemotrocycle");//数据列表容器，

        var options=$(".choose option:selected");
        var mychoose = options.val();
        
        var options2=$(".choosebrand option:selected");
        var mychoose2=options2.text();
        
        $.ajax({
            url: "http://demo.duochaxun.com/m-lubricant/car.php",
            type:"post",
            async: false,
            data:{"mychoose":mychoose,"mychoose2":mychoose2},
            success:function(data) {
                var json=eval("("+data+")");
                var carcount=json.count;
                if (carcount > 0) //数据总条数
                {
                    var yuanshi="<option selected>请选择</option>"
                    _this.html("");
                    _this.append(yuanshi);
                    /*if判断传递相应的参数*/

                    for (var x = 0; x < carcount; x++) {
                        var huode2="<option value="+x+">"
                        var html = huode2 + json.arr[x].car_name + "</option>";
                        _this.append(html) ;
                    }

                }else {
                    _this.html("");
                    _this.append("");
                }
            }
        })
    })
    
    /*排量输入框*/
   $(".choosemotrocycle").change(function(){
   		var _this = "";
        _this = $(".choosedisplacement");//数据列表容器，
        
        var options=$(".choose option:selected");
        var mychoose = options.val();
        
        var options2=$(".choosebrand option:selected");
        var mychoose2=options2.text();
        
        var options3=$(".choosemotrocycle option:selected");
        var mychoose3=options3.text();
        
        $.ajax({
            url: "http://demo.duochaxun.com/m-lubricant/car.php",
            type:"post",
            async: false,
            data:{"mychoose":mychoose,"mychoose2":mychoose2,"mychoose3":mychoose3},
            success:function(data) {
                var json=eval("("+data+")");
                var carcount=json.count;
                if (carcount > 0) //数据总条数
                {
                    var yuanshi="<option selected>请选择</option>"
                    _this.html("");
                    _this.append(yuanshi);
                    /*if判断传递相应的参数*/
                    for (var x = 0; x < carcount; x++) {
                        var huode="<option value="+x+">"
                        var html = huode + json.arr[x].model_discharge_rate + "</option>";
                        _this.append(html);
                    }
                }else {
                    _this.html("");
                    _this.append("");
                }
            }
        })
        
   })
   
   /*年份输入框*/
	$(".choosedisplacement").change(function(){
	  	var _this = "";
        _this = $(".chooseyear");//数据列表容器，
        
        var options=$(".choose option:selected");
        var mychoose = options.val();
        
        var options2=$(".choosebrand option:selected");
        var mychoose2=options2.text();
        
        var options3=$(".choosemotrocycle option:selected");
        var mychoose3=options3.text();
        
        var options4=$(".choosedisplacement option:selected");
        var mychoose4=options4.text();
        
        
        $.ajax({
            url: "http://demo.duochaxun.com/m-lubricant/car.php",
            type:"post",
            async: false,
            data:{"mychoose":mychoose,"mychoose2":mychoose2,"mychoose3":mychoose3,"mychoose4":mychoose4},
            success:function(data) {
                var json=eval("("+data+")");
                var carcount=json.count;
                if (carcount > 0) //数据总条数
                {
                    var yuanshi="<option selected>请选择</option>"
                    _this.html("");
                    _this.append(yuanshi);
                    /*if判断传递相应的参数*/
                    for (var x = 0; x < carcount; x++) {
                        var huode="<option value="+x+">"
                        var html = huode + json.arr[x].model_models + "</option>";
                        _this.append(html);
                    }
                }else {
                    _this.html("");
                    _this.append("");
                }
            }
        })
        
	})
	
	
    $(".submit").click(function(){
        var zhi1=$(".choose option:selected").text();
        var zhi2=$(".choose2 option:selected").text();
        var zhi3=$(".choose3 option:selected").text();
        $.ajax({
            type:"post",
            async: false,
            url: "http://demo.duochaxun.com/m-lubricant/car.php",
            datatype:'json',
            data:{"zhi1":zhi1,"zhi2":zhi2,"zhi3":zhi3},
            success:function(){
                $('.yunxing').load('pages/details.html', function () {
                    $('.de1').val(zhi1);
                    $('.de2').val(zhi2);
                    $('.de3').val(zhi3);
                });
            }
        })
    })
    
    $(".ant-check-input").click(function(){
        var $cishu=$(".check-input");

        if($cishu.is(":checked")){
            $(".check-input").prop("checked",false);
        }else{
            $(".check-input").prop("checked",true);
        }
        
    });
})


