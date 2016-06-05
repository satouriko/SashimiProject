<!DOCTYPE HTML>
<html>
	<head>
<?php require_once("../../includes/functions/head.php"); ?>
<?php if(isset($_SESSION['logined'])) header("Location: /"); ?>
<?php header("Cache-control: private"); ?>
		<link rel="stylesheet" type="text/css" href="/css/auth.css" />
		<script src="/js/auth.js"></script>
		<title>新生鱼片报道>.<</title>
	</head>
	<body>
		<div class="pageBody authBody" align="center">
			<img src="/img/authLogo.png" id="authLogo"/>
			<h2 class="authTitle borderText"><span class="redText">生</span><span class="orangeText">鱼</span><span class="yellowText">片</span><span class="greenText">通</span><span class="blueText">行</span><span class="purpleText">证</span><span class="whiteText">／报道</span></h2>
			<form action="actionReg.php" method="post" onsubmit="return registerCheck(this.username.value,this.password.value,this.repassword.value,this.nickname.value)">
				<input type="text" name="username" value="生鱼片ID(3~64)" onfocus="javascript:if(this.value=='生鱼片ID(3~64)')this.value='';" onblur="javascript:if(this.value=='')this.value='生鱼片ID(3~64)';"></input></br>
				<input type="text" name="password" value="生鱼片通行暗号(6~64)" onfocus="javascript:if(this.value=='生鱼片通行暗号(6~64)'){this.value='';this.type='password';}" onblur="javascript:if(this.value==''){this.value='生鱼片通行暗号(6~64)';this.type='text'}"></input></br>
				<input type="text" name="repassword" value="暗号／二次确认" onfocus="javascript:if(this.value=='暗号／二次确认'){this.value='';this.type='password';}" onblur="javascript:if(this.value==''){this.value='暗号／二次确认';this.type='text'}"></input></br>
				<input type="text" name="nickname" value="本体称呼(0~256)" onfocus="javascript:if(this.value=='本体称呼(0~256)')this.value='';" onblur="javascript:if(this.value=='')this.value='本体称呼(0~256)';"></input></br>
				<input type="submit" name="报道" value="报道">
			</form>
			<div id="authErrorInfo"></div>
			<script>window.setInterval(function(){errorReport($_GET['exitcode']);},100);</script>
		</div>
		<?php require_once($configRootDir."includes/views/header.php"); ?>
	</body>
</html>	