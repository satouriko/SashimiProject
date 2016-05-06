<link rel="stylesheet" type="text/css" href="/css/main.css" />
<?php
	error_reporting(0);
	session_start();
	if(!file_exists("../admin/.initlock")&&!file_exists("../../admin/.initlock")) header("Location: /admin/init.php");
	include("../admin/config.php");
	include("../../admin/config.php");