<?php
	function getUserInfoToSession($conn){
		$userId=$_SESSION['userid'];
		$sql = "select * from user where (id = '".$userId."')";
		$result = mysqli_query($conn,$sql);
		$num = mysqli_num_rows($result);
		$row = mysqli_fetch_array($result);
		$_SESSION['username'] = $row['username'];
		$_SESSION['nickname'] = $row['nickname'];
		$_SESSION['isadmin'] = $row['admin'];
		$_SESSION['sashiminum'] = $row['sashiminum'];
		$_SESSION['diamondnum'] = $row['diamondnum'];
		$_SESSION['cardnum'] = $row['cardnum'];
	}