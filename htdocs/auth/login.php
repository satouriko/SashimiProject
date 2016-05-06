<?php
	session_start();
	$_SESSION['logined'] = true;
	header("Location: /");