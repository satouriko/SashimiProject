<!DOCTYPE HTML>
<html>
	<head>
<?php require_once("../../includes/functions/head.php"); ?>
		<title>新用户注册>.<</title>
	</head>
	<body>
		<div class="pageBody">
	<form action="actionReg.php" method="post">
	用户名:<input type="text" name="username"> 由字母和数字组成 6~20位。></input></br>
	       密码:<input type="text" name="password"> 由字母和数字组成，6~20位。</input></br>
	重复您的密码:<input type="text" name="repassword"> 再次输入您的密码以确认。</input></br>
	昵称:<input type="text" name="nickname"> 由任意字符组成。</input></br>
	<input type="submit" name="确定" value="确定">
	</form>
	</div>
		<?php require_once($configRootDir."includes/views/header.php"); ?>
	</body>
</html>	