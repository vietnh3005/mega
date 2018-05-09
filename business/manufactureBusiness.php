<?php
if($_POST)
{	
	require_once '../configs/connect.php';
	if(isset($_POST['new_man'])){
		$man_name = mysqli_real_escape_string($conn, htmlspecialchars($_POST["man_insr_name"]));
		$man_image = mysqli_real_escape_string($conn, htmlspecialchars($_POST["man_inser_img_cm"]));
		$man_des = mysqli_real_escape_string($conn, htmlspecialchars($_POST["man_insr_des"]));
		create_manufacture($man_name, $man_image, $man_des);
	}
	if(isset($_POST['update_man'])){
		$man_id = mysqli_real_escape_string($conn, htmlspecialchars($_POST["man_upd_man_id"]));
		$man_name = mysqli_real_escape_string($conn, htmlspecialchars($_POST["man_upd_name"]));
		$man_image = mysqli_real_escape_string($conn, htmlspecialchars($_POST["man_upd_crimg"]));
		$man_des = mysqli_real_escape_string($conn, htmlspecialchars($_POST["man_upd_des"]));
		update_manufacture($man_id, $man_name, $man_image, $man_des);
	}
}

if($_GET)
{	
	if(isset($_GET['del'])){
		require_once '../configs/connect.php';
		$manufacture_id = $_GET['del'];
		del_manufacture($manufacture_id);
	}
}

function load_manufactures(){
	require_once '../configs/connect.php';
	global $conn;
	$sql = "select * from manufactures";
	$query = mysqli_query($conn,$sql);
	while($row = mysqli_fetch_assoc($query)){
		echo "<option value=" .$row['manufacture_id']. ">" .$row['name']. "</option>";
	}
}

function create_manufacture($man_name, $man_image, $man_des){
	global $conn;
	session_start();
	$sql = "insert into manufactures ( name, description, image)
	values ('$man_name', '$man_des', '$man_image')";
	if(mysqli_query($conn, $sql)){
		header('Location: ../admin/manufactures_management.php');
		$_SESSION['success'] = "success";
	}
	else {
		header('Location: ../admin/manufactures_management.php');
		$_SESSION['fails'] = "fail";
	}
}

function del_manufacture($manufacture_id){
	global $conn;
	session_start();
	$sql = "delete from manufactures where manufacture_id = '$manufacture_id' ";
	if(mysqli_query($conn, $sql)){
		header('Location: ../admin/manufactures_management.php');
		$_SESSION['success'] = "success";
	}
	else {
		header('Location: ../admin/manufactures_management.php');
		$_SESSION['fails'] = "fail";
	}
}

function update_manufacture($man_id, $man_name, $man_image, $man_des){
	global $conn;
	session_start();
	$sql = "update manufactures
			set name ='$man_name',
				description = '$man_des',
				image='$man_image'
			where manufacture_id='$man_id'";
	if(mysqli_query($conn, $sql)){	
		header('Location: ../admin/manufactures_management.php');
		$_SESSION['success'] = "success";
	}
	else {
		header('Location: ../admin/manufactures_management.php');
		$_SESSION['fails'] = "fail";
	}
}
?>
