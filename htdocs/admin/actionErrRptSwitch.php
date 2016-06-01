<?php
	session_start();
	if(isset($_SESSION['openErrRpt'])) unset($_SESSION['openErrRpt']); else $_SESSION['openErrRpt']=true;
	header("Location: /user/userInfo.php");
