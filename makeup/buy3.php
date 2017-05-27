<?php
	include_once "SaeSqlDemo.php";
	$sum=$_GET["sum"];
	$arr["sum"]=$sum;
	$query="select * from package where checked=1";
	$result=mysql_query($query);
	$arr1=[];
	if(mysql_affected_rows()>0){
		while($row=mysql_fetch_assoc($result)){
			$arr1[]=$row;
		}
		$arr["data"]=$arr1;
		echo json_encode($arr);
	}
	$query1="update package set checked=0";
	mysql_query($query1);
	
?>