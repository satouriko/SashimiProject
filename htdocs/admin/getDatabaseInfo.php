<!DOCTYPE HTML>
<html>
	<head>
<?php require_once("../../admin/config.php"); ?>
<?php if(file_exists($configRootDir."admin/databaseInfo.php")) header("Location: /index.php"); ?>
		<title>初始化世界数据中……</title>
	</head>
	<body>
<?php
	echo "		开始写入数据库存档文件……<br/>\n"; 	
	$conn = mysqli_connect($_POST['databaseAddress'], $_POST['databaseUsername'], $_POST['databasePassword']) or die("Failed to connect to your MySQL. Please check your settings and then retry.");
	$fileDatabaseInfo = fopen($configRootDir."admin/databaseInfo.php","w");
	fwrite($fileDatabaseInfo, "<?php\n	\$conn = mysqli_connect(\"".$_POST['databaseAddress']."\", \"".$_POST['databaseUsername']."\", \"".$_POST['databasePassword']."\");\n	mysqli_query(\$conn, \"SET NAMES UTF8\");\n	mysqli_select_db(\$conn, \"".$_POST['databaseName']."\");\n");
	fclose($fileDatabaseInfo);
	mysqli_query($conn, "SET NAMES UTF8");
	$sql = "DROP DATABASE ".$_POST['databaseName'];
	mysqli_query($conn, $sql);
	$sql = "CREATE DATABASE ".$_POST['databaseName']." default character set utf8 collate utf8_general_ci";
	mysqli_query($conn, $sql);
	mysqli_select_db($conn, $_POST['databaseName']);
	$sql = "CREATE TABLE admin(id int(11) not null primary key auto_increment, username varchar(64) not null, password varchar(256) not null);";
	mysqli_query($conn, $sql);
	header("Location: /index.php");
?>
	</body>
</html>