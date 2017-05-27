<?php
	include_once "SaeSqlDemo.php";
	session_start();
	$page=0;
	define("PAGESIZE", 5);
	if(isset($_GET["page"])){
		$page=$_GET["page"];
	}
	
	$userId=$_SESSION["userId"];
//	$query="select count(*) from package";
//	$result=mysql_query($query);
//	if(mysql_num_rows($result)>=1){
//		$row=mysql_fetch_row($result);
//		$size=$row[0];
//		
//	}
//	$pages=ceil($size/PAGESIZE);
//	$arr["page"]=$pages;
	
	$query="select * from package";
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