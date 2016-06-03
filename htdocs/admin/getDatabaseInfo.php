<!DOCTYPE HTML>
<html>
	<head>
<?php require_once("../../admin/config.php"); ?>
<?php if(file_exists($configRootDir."admin/databaseInfo.php")) header("Location: /"); ?>
		<title>初始化世界数据中……</title>
	</head>
	<body>
<?php
	if(!file_exists($configRootDir."admin/databaseInfo.php")){
		echo "		开始写入数据库存档文件……<br/>\n"; 	
		$conn = mysqli_connect($_POST['databaseAddress'], $_POST['databaseUsername'], $_POST['databasePassword']) or die("Failed to connect to your MySQL. Please check your settings and then retry.");
		$fileDatabaseInfo = fopen($configRootDir."admin/databaseInfo.php","w");
		fwrite($fileDatabaseInfo, "<?php\n	\$conn = mysqli_connect(\"".$_POST['databaseAddress']."\", \"".$_POST['databaseUsername']."\", \"".$_POST['databasePassword']."\");\n	mysqli_query(\$conn, \"SET NAMES UTF8\");\n	mysqli_select_db(\$conn, \"".$_POST['databaseName']."\");\n");
		fclose($fileDatabaseInfo);
		echo "		开始初始化数据库……<br/>\n"; 	
		mysqli_query($conn, "SET NAMES UTF8");
		$sql = "DROP DATABASE ".$_POST['databaseName'];
		mysqli_query($conn, $sql);
		echo "		开始建立数据库……<br/>\n"; 
		$sql = "CREATE DATABASE ".$_POST['databaseName']." default character set utf8 collate utf8_general_ci";
		mysqli_query($conn, $sql);
		mysqli_select_db($conn, $_POST['databaseName']);
		echo "		开始建立数据表……<br/>\n"; 
		$sql = "CREATE TABLE user(id int(11) not null primary key auto_increment, username varchar(64) not null, password varchar(64) not null, nickname varchar(256) not null, admin tinyint(1) not null default 0, sashiminum int(11) not null default 14208, diamondnum int(11) not null default 0, cardnum int(11) not null default 0, lastssmgachatime date not null);";
		mysqli_query($conn, $sql);
		echo "		用户表建立完成……<br/>\n";  
		$sql = "CREATE TABLE cardpossession(id int(11) not null primary key auto_increment, cardid int(11) not null, userid int(11) not null, cardlv int(11) not null);";
		mysqli_query($conn, $sql);
		echo "		卡牌拥有表建立完成……<br/>\n";
		echo "<button onclick=\"window.location.href='/admin/init.php'\">返回</button>";
	}
?>
	</body>
</html>