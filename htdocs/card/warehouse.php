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
	$sql = "select * from cardpossession where (userid = '".$_SESSION['userid']."');";
	$result = mysqli_query($conn,$sql);
	while($row=mysqli_fetch_array($result)){
		displayCard($row['cardid'],$conn);
	}
?>
		</div>
<?php require_once($configRootDir."includes/views/header.php"); ?>
	<script>
		document.getElementById("getFish").className='headerActiveA';
	</script>
	</body>
</html>
