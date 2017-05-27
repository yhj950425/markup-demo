<?php
include_once "SaeSqlDemo.php";
$phoneNum = $_POST["phoneN"];
$username = $_POST["username"];
$password = $_POST["password"];
$query = "select * from  user where phoneNumber='$phoneNum'";
$result = mysql_query($query);
if ($phoneNum != "") {
	if (mysql_num_rows($result)> 0) {
		echo '{"msg":"手机号已被占用"}';
	} else {
		if (preg_match("/^1[34578]\d{9}$/", $phoneNum)) {
			echo '{"msg":""}';

		} else {
			echo '{"msg":"请填写正确格式的手机号"}';
		}
	}
} else {
	echo '{"msg":"手机号不能为空"}';
}
?>