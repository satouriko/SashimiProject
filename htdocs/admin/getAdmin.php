<!DOCTYPE HTML>
<html>
	<head>
<?php require_once("../../admin/config.php"); ?>
<?php if(file_exists($configRootDir."admin/.initlock")) header("Location: /index.php"); ?>
		<title>初始化世界管理者数据中……</title>
	</head>
	<body>
<?php
	echo "		重连接至世界……<br/>\n";
	require_once($configRootDir."admin/databaseInfo.php");
	echo "		开始向世界提交管理者数据……<br/>\n";
	$sql = "INSERT INTO admin (username, password) VALUES ('".$_POST['adminUsername']."', '".hash("sha256", $_POST['adminPassword'])."');";
	mysqli_query($conn, $sql);
?>
	</body>
</html>