<?php
	function loginCheck($username, $password, &$row, $conn){
		$hashpassword=hash("sha256", $password);
		$sql = "select * from user where (username = '".addslashes($username)."')";
		$result = mysqli_query($conn,$sql);
		$num = mysqli_num_rows($result);
		$row = mysqli_fetch_array($result);
		if($num==0) return 404;
		else if($hashpassword!=$row['password']) return 403;
		else return 0;
	}
	function loginAction($row){
		$_SESSION["username"] = $_POST['username'];
		$_SESSION["nickname"] = $row['nickname'];
		$_SESSION["logined"] = true;
	}
	function registerCheck($username,$password,&$row,$conn){
		$hashpassword=hash("sha256", $password);
		$sql = "select * from user where username = '".addslashes($_POST["username"])."'";
		$result = mysqli_query($conn,$sql);
		$num = mysqli_num_rows($result);
		if($num>0) return 8804;
		else{
			$insert="insert into user (username,password,nickname) values('".addslashes($_POST["username"])."','".$hashpassword."','".addslashes($_POST["nickname"])."')";
			$res_insert=mysqli_query($conn,$insert);
			loginCheck($username,$password,$row,$conn);
			return 0;
		}
	}
	function logout(){
		unset($_SESSION['logined']);
		header("Location: /");
	}