<!DOCTYPE HTML>
<html>
	<head>
<?php require_once("../includes/functions/head.php"); ?>
		<title>生鱼片Project</title>
	</head>
	<body>
		<div class="pageBody">
			公告：
			<ul>
<?php echo "<li>".$_SESSION['nickname']."</li>"; ?>
			</ul>
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
