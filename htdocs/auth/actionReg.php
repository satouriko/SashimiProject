<!DOCTYPE HTML>
<html>
	<head>
<?php require_once("../../includes/functions/head.php"); ?>
<?php require_once($configRootDir."includes/functions/user.php"); ?>
<?php
	$row;
	$exitcode = registerCheck($_POST['username'],$_POST['password'],$row,$conn);
	if($exitcode==0){
        loginAction($row);
		getUserInfoToSession($conn);
        header("Location: /");
	}else header("Location: /auth/register.php?exitcode=".$exitcode);
?>
<?php require_once($configRootDir."includes/views/header.php"); ?>
	</head>
</html>	
