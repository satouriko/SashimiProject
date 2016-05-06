<!DOCTYPE HTML>
<html style="height:100%">
	<head>
<?php require_once("../../includes/functions/head.php"); ?>
		<title>本地phpMyadmin</title>
	</head>
	<body style="height:84%">
<?php require_once($configRootDir."includes/views/header.php"); ?>
<iframe src="/phpmyadmin" scrolling="no" frameborder="0" style="margin:0;padding:0;height:100%;width:100%;"></iframe>
<?php require_once($configRootDir."includes/views/footer.php"); ?>
	<script>
		document.getElementById("pma").className='headerActiveA';
	</script>
	</body>
</html>
