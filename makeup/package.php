<?php
	include_once "SaeSqlDemo.php";
	session_start();
	$userId=$_SESSION["userId"];
	$productId=$_GET["productId"];
	$count=$_GET["count"];
	$price=$_GET["proprice"];
	$name=$_GET["proname"];
	$src=$_GET["prosrc"];
	$totalPrice=$price*$count;
	$query="insert into package (user_id,productId,count,price,name,src,totalprice) values ($userId,$productId,$count,'$price','$name','$src',$totalPrice)";
	$result=mysql_query($query);
	
?>