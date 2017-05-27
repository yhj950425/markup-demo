<?php
include_once "SaeSqlDemo.php";

$phoneNum = $_POST["phoneN"];
$username = $_POST["username"];
$password = $_POST["password"];


$query = "select * from  user where phoneNumber='$phoneNum' and username='$username'";
$result = mysql_query($query);

if ($phoneNum != "" && $username != "" && (mysql_num_rows($result) == 0) && $password != "") {
	$query = "insert into user (username,password,phoneNumber) values ('$username','$password','$phoneNum')";
	$result = mysql_query($query);
	if (mysql_affected_rows() > 0) {
		$msg = '{"msg":"注册成功"}';
	} else {
		$msg = '{"msg":"注册失败"}';
	}
} else {
	$msg = '{"msg":"注册失败"}';
}
echo $msg;
?>