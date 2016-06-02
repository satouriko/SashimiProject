<!DOCTYPE HTML>
<html>
	<head>
<?php require_once("../../includes/functions/head.php"); ?>
<?php require_once($configRootDir."includes/functions/card.php"); ?>
		<title>仓库 - 生鱼片Project</title>
	</head>
	<body>
		<div class="pageBody">
<?php
	$card;
	getCardInfo($configRootDir, $card);
	$sql = "select * from cardpossession where (id = '".$_GET['id']."');";
	$result = mysqli_query($conn,$sql);
	$row=mysqli_fetch_array($result);
	displayCard($row['cardid'],$card);
	echo "　<br/>卡牌等级:".$row['cardlv'];
?>
		</div>
<?php require_once($configRootDir."includes/views/header.php"); ?>
	<script>
		changeHeaderClass("getFish");
	</script>
	</body>
</html>
