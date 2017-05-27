<?php
	include_once "SaeSqlDemo.php";
	$count=$_GET["count"];
	$id=$_GET["id"];
	$query="select * from product where productId=$id";
	$result=mysql_query($query);
	$arr=[];
	$arr["count"]=$count;
	if(mysql_affected_rows()==1){
		while($row=mysql_fetch_assoc($result)){
			$arr[]=$row;
		}
	}
	echo json_encode($arr);
?>