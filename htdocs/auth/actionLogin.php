<!DOCTYPE HTML>
<html>
<head>
</head>
<body>
<?php require_once("../../includes/functions/head.php"); ?>
<?php
    $row;
	$exitcode = loginCheck($_POST['username'],$_POST['password'],$row,$conn);
    if($exitcode==0){
        loginAction($row);
        header("Location: /");
    }else header("Location: /auth/login.php?exitcode=".$exitcode);
?>
</body>
</html>