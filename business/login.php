<?php
	session_start();
	require_once '../configs/connect.php';

	if($_POST)
	{
		$username = $_POST["username"];
		$password = $_POST["password"];
		if(isset($_POST['login'])){
			login($username, $password);
		}
	}

	function login($username, $password){
		global $conn;
		$sql = "select * from users where username= '$username' and password = '$password' and status_id ='4'";
		$query = mysqli_query($conn, $sql);
		$num_rows = mysqli_num_rows($query);
			if($num_rows == 0){
				
				header('Location: ../admin/admin_login.php');
				}else{
					$_SESSION['admin_name'] = $username;
					header('Location: ../admin/index.php');
			}
	}

	fucntion logout()
	{
		session_destroy();
		header('Location:../admin/admin_login.php');
	}
?>