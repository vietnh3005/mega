<?php
	if($_POST)
	{	
		require_once '../configs/connect.php';
		session_start();
		$username = $_POST["username"];
		$password = $_POST["password"];
		$username = strip_tags($username);
		$username = addslashes($username);
		$password = strip_tags($password);
		$password = addslashes($password);
		if(isset($_POST['admin_login'])){
			admin_login($username, $password);
		} 
		if(isset($_POST['user_login'])){
			user_login($username, $password);
		}
	}

	if($_GET)
	{	
		session_start();
		if($_GET['key'] == 'admin_logout'){
			admin_logout();
		}
		if($_GET['key'] == 'user_logout'){
			user_logout();
		}
	}

	function admin_login($username, $password){
			global $conn;
			$sql = "select * from users where username= '$username' and password = '$password' and status_id ='4'";
				$query = mysqli_query($conn, $sql);
				$num_rows = mysqli_num_rows($query);
					if($num_rows == 0){
						
						header('Location: ../admin/admin_login.php');
						} else {
							$_SESSION['admin'] = $username;
							header('Location: ../admin/index.php');
			}
	}

	function admin_logout()
	{	
		if(isset($_SESSION['admin']))
		{	
			session_destroy();
			header('Location:../admin/admin_login.php');
		}
	}

	function user_login($username, $password){
			global $conn;
			$sql = "select * from users where username= '$username' and password = '$password'";
				$query = mysqli_query($conn, $sql);
				$num_rows = mysqli_num_rows($query);
					if($num_rows == 0){
						
						header('Location: ../login.php');
						} else {
							$_SESSION['user'] = $username;
							header('Location: ../index.php');
			}
	}

	function user_logout()
	{	
		if(isset($_SESSION['user']))
		{	
			session_destroy();
			header('Location: ../index.php');
		}
	}

	function load_user(){
	  require_once 'configs/connect.php';
	  global $conn;
	  if (isset($_SESSION['user'])){
      $sql = "select * from users where username = '".$_SESSION['user']."' ";
      $query = mysqli_query($conn,$sql);
      $row = mysqli_fetch_assoc($query);
      $_SESSION['name'] = $row['name'];
    	}
	}

	function load_admin(){
	  require_once '../configs/connect.php';
	  if (isset($_SESSION['admin'])){
      $sql = "select * from users where username = '".$_SESSION['admin']."' ";
      $query = mysqli_query($conn,$sql);
      $row = mysqli_fetch_assoc($query);
      $_SESSION['name'] = $row['name'];
    	}
	}
?>