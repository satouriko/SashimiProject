<!DOCTYPE HTML>
<html>
	<head>
<?php require_once("../../includes/functions/head.php"); ?>
<?php if(isset($_SESSION['logined'])) header("Location: /"); ?>
		<link rel="stylesheet" type="text/css" href="/css/auth.css" />
		<script src="/js/auth.js"></script>
		<title>正在进入生鱼片的世界……</title>
	</head>
	<body>
		<div class="pageBody authBody" align="center">
			<img src="/img/authLogo.png" id="authLogo"/>
			<h2 class="authTitle borderText"><span class="redText">生</span><span class="orangeText">鱼</span><span class="yellowText">片</span><span class="greenText">通</span><span class="blueText">行</span><span class="purpleText">证</span></h2>
			<form action="actionLogin.php" method="post" onsubmit="return loginCheck(this.username.value,this.password.value)">
				<input type="text" name="username" value="生鱼片ID" onfocus="javascript:if(this.value=='生鱼片ID')this.value='';" onblur="javascript:if(this.value=='')this.value='生鱼片ID';"/><br/>
				<input type="text" name="password" value="生鱼片通行暗号" onfocus="javascript:if(this.value=='生鱼片通行暗号'||this.value=='诶嘿嘿☆~'){this.value='';this.type='password'}" onblur="javascript:if(this.value==''){this.value='诶嘿嘿☆~';this.type='text'}"/><br/>
				<input type="submit" value="进入"/>
			</form>
			<div id="authErrorInfo"></div>
			<script>errorReport($_GET['exitcode'])</script>
		</div>
<?php require_once($configRootDir."includes/views/header.php"); ?>
	</body>
</html>
