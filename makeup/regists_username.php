<?php
include_once "SaeSqlDemo.php";
$phoneNum = $_POST["phoneN"];
$username = $_POST["username"];
$password = $_POST["password"];
$query = "select * from  user where phoneNumber='$phoneNum'";
$result = mysql_query($query);
if($username==""){
	echo '{"msg":"用户名不能为空"}';
}else{
	if(mysql_num_rows($result)>0){
		echo '{"msg":"用户名已存在"}';
	}else{
		echo '{"msg":""}';
	}
}
?>