<?php
	include_once "SaeSqlDemo.php";
	
	$id=$_GET["proId"];
	$query="delete from package where id=$id";
	$result=mysql_query($query);
//	$arr=[];
//	if(mysql_affected_rows()==1){
//		$query="select * from package";
//		$result=mysql_query($query);
//		if(mysql_num_rows($result)>0){
//			while($row=mysql_fetch_assoc($result)){
//				$arr[]=$row;
//			}
//		}
//	}
//	echo json_encode($arr);
	
?>