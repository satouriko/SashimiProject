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
			<div style="text-align:center">@卡牌模板暂时使用Weiβ Schwarz。</div>
			<div style="text-align:center">@大部分资源来自互联网。</div>
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
