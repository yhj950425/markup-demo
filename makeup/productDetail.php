<?php
	include_once "SaeSqlDemo.php";
	
	$ids=$_GET["dataId"];
	
	$query="select * from product where productId='$ids'";
	$result=mysql_query($query);

	if(mysql_num_rows($result)==1){
		$row=mysql_fetch_assoc($result);
			echo json_encode($row);
		
	}
	
?>