<?php
	require_once("../includes/functions/head.php");
	if(!$_SESSION['isadmin']){
		header("Location: ".$_SERVER['HTTP_REFERER']);
	}
	require_once($configRootDir."includes/functions/card.php");
	if($_SESSION['isadmin']) get_card($_POST['cardid'],$_POST['userid'],$_POST['cardlv'],$conn);
	header("Location: ".$_SERVER['HTTP_REFERER']);
	require_once($configRootDir."includes/views/header.php");