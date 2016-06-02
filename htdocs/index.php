<!DOCTYPE HTML>
<html>
	<head>
<?php require_once("../includes/functions/head.php"); ?>
<link rel="stylesheet" type="text/css" href="/css/index.css" />
		<title>生鱼片Project</title>
	</head>
	<body>
		<div class="pageBody">
			<div class="picViewer">
				公告图片（预留）
			</div>
		</div>
<?php require_once($configRootDir."includes/views/header.php"); ?>
	<script>
		$(document).ready(function(){
			$("#headerLogo").removeClass("headerLogo");
			$("#headerLogo").addClass("headerActiveLogo");
		});
	</script>
	</body>
</html>
