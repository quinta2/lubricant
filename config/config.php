<?php
	$content=mysql_connect('localhost','root','root') or die('数据库链接失败'.mysql_error());
	    mysql_select_db('lubricant', $content);
	    mysql_query("set names utf8");
	    header('content-type:text/html;charset=utf-8');
	    