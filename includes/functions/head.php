<link rel="stylesheet" type="text/css" href="/css/main.css" />
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<script src="/js/main.js"></script>
<script src="/js/jquery.js"></script>
<?php
	session_start();
	if(!isset($_SESSION['openErrRpt'])) error_reporting(0); else error_reporting(E_ALL);
	if(!file_exists("../admin/.initlock")&&!file_exists("../../admin/.initlock")) header("Location: /admin/init.php");
	if(strstr($_SERVER["REQUEST_URI"],"/auth")==NULL&&!isset($_SESSION['logined'])) header("Location: /auth/login.php");
	include("../admin/config.php");
	include("../../admin/config.php");
	require_once($configRootDir."includes/functions/auth.php");
	require_once($configRootDir."admin/databaseInfo.php");
	