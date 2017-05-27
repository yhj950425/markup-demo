<?php
include_once "SaeSqlDemo.php";
$userPhone = $_POST["userPhone"];
$password = $_POST["password"];

$query1 = "select * from  user where phoneNumber='$userPhone' and password='$password'";
$result1 = mysql_query($query1);

$query2="select * from  user where username='$userPhone' and password='$password'";
$result2=mysql_query($query2);
session_start();
if($userPhone!="" && $password!="") {
	if(mysql_num_rows($result1) == 1 || mysql_num_rows($result2) == 1){
		if(mysql_num_rows($result1) == 1) {	
			$row=mysql_fetch_assoc($result1);	
		}else if(mysql_num_rows($result2) == 1){
			$row=mysql_fetch_assoc($result2);
			$userPhone=urldecode($userPhone);
		}
		$_SESSION["userId"]=$row["user_id"];
		setcookie("username",$userPhone);
		setcookie("password",$password);
		echo '{"msg":"登陆成功"}';
	} else {
		echo '{"msg":"用户名或密码不正确"}';
	}
}else{
	echo '{"msg":"用户名或密码不能为空"}';
}
?>