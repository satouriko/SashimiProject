<link rel="stylesheet" type="text/css" href="/css/main.css" />
<?php
	session_start();
	if(!file_exists("../admin/.initlock")) header("Location: /admin/init.php");
	require_once("../admin/config.php");