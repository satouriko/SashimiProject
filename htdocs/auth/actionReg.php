<!DOCTYPE HTML>
<html>
	<head>
<?php require_once("../../includes/functions/head.php"); ?>
<?php
	$username=$_POST["username"];
	$password=$_POST["password"];
	$nickname=$_POST["nickname"];
	$sql = "select * from user where username = '$username'";
	$result = mysqli_query($conn,$sql);
	$num = mysqli_num_rows($result);
	if($num)
	{echo "<script>alert('用户名已存在'); history.go(-1);</script>";}
	else
	$insert="insert into user (username,password,nickname) values('$username','".hash("sha256", $password)."','$nickname')";
	$res_insert=mysqli_query($conn,$insert);
	if($res_insert)
	{echo "<script>alert('注册成功'); history.go(-1);</script>";}
	else
	{echo "<script>alert('注册失败QAQ'); history.go(-1);</script>";}
?>
<?php require_once($configRootDir."includes/views/header.php"); ?>
	</head>
</html>	
