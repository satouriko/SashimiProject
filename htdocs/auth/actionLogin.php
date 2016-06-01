<!DOCTYPE HTML>
<html>
<head>
</head>
<body>
<?php require_once("../../includes/functions/head.php"); ?>
<?php require_once($configRootDir."includes/functions/user.php"); ?>
<?php
    $row;
	$exitcode = loginCheck($_POST['username'],$_POST['password'],$row,$conn);
    if($exitcode==0){
        loginAction($row);
		getUserInfoToSession($conn);
        header("Location: /");
    }else header("Location: /auth/login.php?exitcode=".$exitcode);
?>
</body>
</html>