<?php
	include_once "SaeSqlDemo.php";
	session_start();
	$page=0;
	define("PAGESIZE", 5);
	if(isset($_GET["page"])){
		$page=$_GET["page"];
	}
//	
	$userId=$_SESSION["userId"];
	$query="select count(*) from package where user_id=$userId order by id desc";
	$result=mysql_query($query);
	if(mysql_num_rows($result)>=1){
		$row=mysql_fetch_row($result);
		$size=$row[0];
		
	}
	$pages=ceil($size/PAGESIZE);
	$arr["page"]=$pages;
	
	if($pages==0){
		$arr["msg"]="暂无数据...";
	}
	
	$query="select * from package where user_id=$userId order by id desc";
	$result=mysql_query($query);
	if(mysql_num_rows($result)>0){
		while($row=mysql_fetch_assoc($result)){
			$arr1[]=$row;
		}
		$arr["data"]=$arr1;
	}
	$json=json_encode($arr);
	echo $json;
?>