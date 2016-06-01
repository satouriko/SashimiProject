<!DOCTYPE HTML>
<html>
	<head>
<?php require_once("../../includes/functions/head.php"); ?>
<?php require_once($configRootDir."includes/functions/user.php"); ?>
		<title><?php echo $_SESSION['nickname']; ?> - 生鱼片Project</title>
	</head>
	<body>
		<?php getUserInfoToSession($conn); ?>
		<div class="pageBody">
			生鱼片ID：<?php echo $_SESSION['username']; ?><br/>
			管理者身份：<?php if($_SESSION['isadmin']) echo "是"; else echo "否"; ?><br/>
			持有生鱼片数量：<?php echo $_SESSION['sashiminum']; ?><br/>
			持有钻石数量：<?php echo $_SESSION['diamondnum']; ?><br/>
			持有卡牌数量：<?php echo $_SESSION['cardnum']; ?><br/>
			<form action="" method="POST">
				旧暗号：<input type="password" name="oldPassword"/><br/>
				新暗号：<input type="password" name="newPassword"/><br/>
				重复新暗号：<input type="password" name="retypePassword"/><br/>
				昵称：<input name="nickname" value="<?php echo $_SESSION['nickname']; ?>"/><br/>
				<input type="submit" value="提交更改"/>
			</form>
<?php
	if($_SESSION['isadmin']){
		if(isset($_SESSION['openErrRpt'])) echo "<button onclick=\"window.location.href='/admin/actionErrRptSwitch.php'\">禁用错误报告</button>";
		else echo "<button onclick=\"window.location.href='/admin/actionErrRptSwitch.php'\">启用错误报告</button>";
	}
?>
		</div>
<?php require_once($configRootDir."includes/views/header.php"); ?>
	<script>
		document.getElementById("userInfo").className='headerActiveA';
	</script>
	</body>
</html>
