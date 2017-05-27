<?php
	include_once "SaeSqlDemo.php";
	$arrtemp1=[];
	$arrtemp2=[];
	$arrtemp3=[];
	$arrtemp4=[];
	$query="select * from product where producttype_id=1 and product_id=1";
	$result=mysql_query($query);
	if(mysql_num_rows($result)>0){
		while($row=mysql_fetch_assoc($result)){
			$arrtemp1[]=$row;
		}
	}
	$arr[]=$arrtemp1;
	$query="select * from product where producttype_id=1 and product_id=2";
	$result=mysql_query($query);
	if(mysql_num_rows($result)>0){
		while($row=mysql_fetch_assoc($result)){
			$arrtemp2[]=$row;
		}
	}
	$arr[]=$arrtemp2;
	
	$query="select * from product where producttype_id=1 and product_id=3";
	$result=mysql_query($query);
	if(mysql_num_rows($result)>0){
		while($row=mysql_fetch_assoc($result)){
			$arrtemp3[]=$row;
		}
	}
	$arr[]=$arrtemp3;
	
	$query="select * from product where producttype_id=1 and product_id=4";
	$result=mysql_query($query);
	if(mysql_num_rows($result)>0){
		while($row=mysql_fetch_assoc($result)){
			$arrtemp4[]=$row;
		}
	}
	$arr[]=$arrtemp4;
	$json=json_encode($arr);
	echo $json;
	
?>