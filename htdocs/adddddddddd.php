<?php
	require_once("../includes/functions/head.php");
	require_once($configRootDir."includes/functions/card.php");
	get_card($_GET['cardid'],$_GET['userid'],$_GET['cardlv'],$conn);
	echo $_GET['cardid']."<br/>";
	echo $_GET['userid']."<br/>";
	echo $_GET['cardlv']."<br/>";