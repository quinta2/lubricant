<?php
	Session_start();       //使用SESSION前必须调用该函数。
	$SID=session_id();
	$_SESSION['name']="我是黑旋风李逵!";//注册一个SESSION变量
	$_SESSION['passwd']="mynameislikui";
	$_SESSION['time']=time();
	header("Location:test1.php");
	// echo '<br /><a href="test1.php">通过COOKIE传递SESSION</a>'; 
	// _fcksavedurl '<a href="test1.php">通过COOKIE传递SESSION</a>'; //如果客户端支持cookie，可通过该链接传递session到下一页。

	// echo '<br /><a href="test1.php?' . $SID . ' ">通过URL传递SESSION</a>';//客户端不支持cookie时，使用该办法传递session.
?>