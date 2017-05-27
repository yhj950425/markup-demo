<?php
include_once "SaeSqlDemo.php";
$phoneNum = $_POST["phoneN"];
$username = $_POST["username"];
$password = $_POST["password"];

if($password==""){
	echo '{"msg":"密码不能为空"}';
}else{
	echo '{"msg":""}';
}
?>