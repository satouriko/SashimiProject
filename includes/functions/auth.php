<?php
	function login(){
		$_SESSION['logined']=true;
		header("Location: /");
	}
	function logout(){
		unset($_SESSION['logined']);
		header("Location: /");
	}