<?php
if($_POST)
{	
	if(isset($_POST['admin_login'])){
		require_once '../configs/connect.php';
		session_start();
		$username = mysqli_real_escape_string($conn, htmlspecialchars($_POST["username"]));
		$password = mysqli_real_escape_string($conn, htmlspecialchars($_POST["password"]));
		admin_login($username, $password);
	} 
	if(isset($_POST['user_login'])){
		require_once '../configs/connect.php';
		session_start();
		$username = mysqli_real_escape_string($conn, htmlspecialchars($_POST["username"]));
		$password = mysqli_real_escape_string($conn, htmlspecialchars($_POST["password"]));
		user_login($username, $password);
	}
	if(isset($_POST['admin_create_user'])){
		require_once '../configs/connect.php';
		$name = mysqli_real_escape_string($conn, htmlspecialchars($_POST["name"]));
		$username = mysqli_real_escape_string($conn, htmlspecialchars($_POST["username"]));
		$email = mysqli_real_escape_string($conn, htmlspecialchars($_POST["email"]));
		$password = mysqli_real_escape_string($conn, htmlspecialchars($_POST["password"]));
		$phone = mysqli_real_escape_string($conn, htmlspecialchars($_POST["phone"]));
		$address = mysqli_real_escape_string($conn, htmlspecialchars($_POST["address"]));
		admin_create_user($name, $username, $email, $password, $phone, $address);
	}
	if(isset($_POST['admin_update_user'])){
		require_once '../configs/connect.php';
		$user_id = mysqli_real_escape_string($conn, htmlspecialchars($_POST["user_upd_user_id"]));
		$name = mysqli_real_escape_string($conn, htmlspecialchars($_POST["user_upd_name"]));
		$username = mysqli_real_escape_string($conn, htmlspecialchars($_POST["user_upd_username"]));
		$email = mysqli_real_escape_string($conn, htmlspecialchars($_POST["user_upd_email"]));
		$password = mysqli_real_escape_string($conn, htmlspecialchars($_POST["user_upd_password"]));
		$phone = mysqli_real_escape_string($conn, htmlspecialchars($_POST["user_upd_phone"]));
		$address = mysqli_real_escape_string($conn, htmlspecialchars($_POST["user_upd_address"]));
		admin_update_user($user_id, $name, $username, $email, $password, $phone, $address);
	}

	if(isset($_POST['btn_rgt'])){
		require_once '../configs/connect.php';
		$avatar = mysqli_real_escape_string($conn, htmlspecialchars($_POST["user_avatar"]));
		$name = mysqli_real_escape_string($conn, htmlspecialchars($_POST["name"]));
		$username = mysqli_real_escape_string($conn, htmlspecialchars($_POST["username"]));
		$phone = mysqli_real_escape_string($conn, htmlspecialchars($_POST["phone"]));
		$email = mysqli_real_escape_string($conn, htmlspecialchars($_POST["email"]));
		$address = mysqli_real_escape_string($conn, htmlspecialchars($_POST["addr1"]));
		$password = mysqli_real_escape_string($conn, htmlspecialchars($_POST["password"]));
		$confirm = mysqli_real_escape_string($conn, htmlspecialchars($_POST["confirm"]));
		$newsletter = mysqli_real_escape_string($conn, htmlspecialchars($_POST["newsletter"]));
		register_user($avatar, $name, $username, $phone, $email, $address, $password, $confirm);
	}

	if(isset($_POST['pro_id'])){
		require_once 'configs/connect.php';
	}
}

if($_GET)
{	
	if($_GET['key'] == 'admin_logout'){
		session_start();
		admin_logout();
	}
	if($_GET['key'] == 'user_logout'){
		session_start();
		user_logout();
	}
	if(isset($_GET['del'])){
		require_once '../configs/connect.php';
		$user_id = $_GET['del'];
		del_user($user_id);
	}
}

function admin_login($username, $password){
	global $conn;
	$sql = "select * from users where username= '$username' and password = '$password' and status_id ='4'";
	$query = mysqli_query($conn, $sql);
	$num_rows = mysqli_num_rows($query);
	if($num_rows == 0){
		$_SESSION['fails'] = "fails";
		header('Location: ../admin/login.php');
	} else {
		$_SESSION['admin'] = $username;
		$_SESSION['success'] = "success";
		header('Location: ../admin/index.php');
	}
}

function admin_logout()
{	
	if(isset($_SESSION['admin']))
	{	
		session_destroy();
		header('Location:../admin/login.php');
	}
}

function user_login($username, $password){
	global $conn;
	$sql = "select * from users where username= '$username' and password = '$password' and status_id <>'4'";
	$query = mysqli_query($conn, $sql);
	$num_rows = mysqli_num_rows($query);
	$row = mysqli_fetch_assoc($query);
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
		unset($_SESSION['user']);
		header('Location: ../index.php');
	}
}

function load_user(){
	global $conn;
	if (isset($_SESSION['user'])){
		$sql = "select * from users where username = '".$_SESSION['user']."' ";
		$query = mysqli_query($conn,$sql);
		$row = mysqli_fetch_assoc($query);
		$_SESSION['user_id'] = $row['user_id'];
		$_SESSION['name'] = $row['name'];
		$_SESSION['email'] = $row['email'];
		$_SESSION['address'] = $row['address'];
	}
}

function load_admin(){
	global $conn;
	if (isset($_SESSION['admin'])){
		$sql = "select * from users where username = '".$_SESSION['admin']."' ";
		$query = mysqli_query($conn,$sql);
		$row = mysqli_fetch_assoc($query);
		$_SESSION['admin_name'] = $row['name'];
		$_SESSION['admin_avatar'] = $row['avatar'];
	}
}

function admin_create_user($name, $username, $email, $password, $phone, $address){
	global $conn;
	session_start();
	$sql = "insert into users ( avatar, username, password, name, email, phone, address, point, membership_id, status_id )
	values ('', '$username', '$password', '$name', '$email', '$phone', '$address', '0', '1', '5')";
	if(mysqli_query($conn, $sql)){
		header('Location: ../admin/users_management.php');
		$_SESSION['success'] = "success";
	}
	else {
		header('Location: ../admin/users_management.php');
		$_SESSION['fails'] = "fail";
	}
}

function del_user($user_id){
	global $conn;
	session_start();
	if($user_id != 4){
		$sql = "delete from users where user_id = '$user_id' ";
		if(mysqli_query($conn, $sql)){
			header('Location: ../admin/users_management.php');
			$_SESSION['success'] = "success";
		}
		else {
			header('Location: ../admin/users_management.php');
			$_SESSION['fails'] = "fail";
		}
	}
	else {
		header('Location: ../admin/users_management.php');
		$_SESSION['d_fails'] = "fail";
	}


}

function admin_update_user($user_id, $name, $username, $email, $password, $phone, $address){
	global $conn;
	session_start();
	$sql = "update users
	set username ='$username',
	name = '$name',
	password='$password',
	email='$email',
	phone= '$phone',
	address ='$address'
	where user_id='$user_id'";
	if(mysqli_query($conn, $sql)){	
		header('Location: ../admin/users_management.php');
		$_SESSION['success'] = "success";
	}
	else {
		header('Location: ../admin/users_management.php');
		$_SESSION['fails'] = "fail";
	}
}


function register_user($avatar, $name, $username, $phone, $email, $address, $password, $confirm){
	global $conn;
	session_start();
	if($password == $confirm) {
		$sql = "insert into users ( avatar, username, password, name, email, phone, address, point, membership_id, status_id )
		values ('$avatar', '$username', '$password', '$name', '$email', '$phone', '$address', '0', '1', '5')";
		if(mysqli_query($conn, $sql))	{
			user_login($username, $password);
			header('Location: ../account.php');
			$_SESSION['welcome'] = "welcome";
		}
		else {
			header('Location: ../register.php');
			$_SESSION['invalid'] = "invalid";
		}
	}
	else {
		header('Location: ../register.php');
		$_SESSION['invalid'] = "invalid";
	}
}	
?>
