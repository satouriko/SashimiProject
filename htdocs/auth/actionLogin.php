<!DOCTYPE HTML>
<html>
<head>
</head>
<body>
<?php require_once("../../includes/functions/head.php"); ?>
<?php
    $row;
    if(loginCheck($_POST['username'],$_POST['password'],$row,$conn))
    {
        loginAction($row);
        header("Location: /");
    }else echo "<script> alert('密码错误！'); history.go(-1);</script>";
?>
</body>
</html>