<?php
//	$SAE_MYSQL_HOST_M='w.rdc.sae.sina.com.cn';
//	$SAE_MYSQL_PORT='3306';
//	$SAE_MYSQL_USER='ynyjz0oymw';
//	$SAE_MYSQL_PASS='kymkzlwi225l3j5xx2345i5izwym4m15zx3l23z3';
//	$SAE_MYSQL_DB='app_0919yaya';
//	$db = mysql_connect($SAE_MYSQL_HOST_M.':'.$SAE_MYSQL_PORT,$SAE_MYSQL_USER,$SAE_MYSQL_PASS);
//	mysql_select_db($SAE_MYSQL_DB, $db);
//	mysql_query("set names utf8");


    header("Content-type:text/html;charset=utf-8");
	date_default_timezone_set('PRC');
	
	mysql_connect("localhost","root","");
	mysql_select_db("markup");
	
	// 往数据库插入内容的时候处理中文乱码问题
	mysql_query("set names utf8");  
?>