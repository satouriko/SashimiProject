<?php
	function loginCheck($username, $password, &$row, $conn){
		$hashpassword=hash("sha256", $password);
		$sql = "select * from user where (username = '$username' and password = '$hashpassword')";
		$result = mysqli_query($conn,$sql);
		$num = mysqli_num_rows($result);
		$row = mysqli_fetch_array($result);
		if($num>0) return true;
	}
	function loginAction($row){
		$_SESSION["username"] = $_POST['username'];
		$_SESSION["nickname"] = $row['nickname'];
		$_SESSION["logined"] = true;
	}
	function logout(){
		unset($_SESSION['logined']);
		header("Location: /");
	}