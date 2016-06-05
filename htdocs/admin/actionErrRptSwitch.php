<?php
	session_start();
	if(($_SESSION['errRptNum'])==0&&$_SESSION['isadmin']) $_SESSION['errRptNum']=E_ALL; else $_SESSION['errRptNum']=0;
	header("Location: ".$_SERVER['HTTP_REFERER']);
