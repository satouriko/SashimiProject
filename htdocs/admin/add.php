<?php
	require_once("../includes/functions/head.php");
	if(!$_SESSION['isadmin']){
		header("Location: ".$_SERVER['HTTP_REFERER']);
	}
?>
<form action="/admin/adddddddddd.php" method="POST">
	cardid:<input name="cardid"/><br/>
	userid:<input name="userid"/><br/>
	cardlv:<input name="cardlv"/><br/>
	<input type="submit"/>
</form>
<?php require_once($configRootDir."includes/views/header.php"); ?>