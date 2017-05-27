<?php
	include_once "SaeSqlDemo.php";
	$id=$_GET["id"];
	$query="update package set checked='1' where id=$id";
	$result=mysql_query($query);
?>