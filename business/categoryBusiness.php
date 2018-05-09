<?php
if($_POST)
{	
	require_once '../configs/connect.php';
	if(isset($_POST['new_cat'])){
		$cat_name = mysqli_real_escape_string($conn, htmlspecialchars($_POST["cat_insr_name"]));
		$cat_des = mysqli_real_escape_string($conn, htmlspecialchars($_POST["cat_insr_des"]));
		create_category($cat_name, $cat_des);
	}
	if(isset($_POST['update_cat'])){
		$cat_id = mysqli_real_escape_string($conn, htmlspecialchars($_POST["cat_upd_id"]));
		$cat_name = mysqli_real_escape_string($conn, htmlspecialchars($_POST["cat_upd_name"]));
		$cat_des = mysqli_real_escape_string($conn, htmlspecialchars($_POST["cat_upd_des"]));
		update_category($cat_id, $cat_name, $cat_des);
	}
}

if($_GET)
{	
	require_once '../configs/connect.php';
	if(isset($_GET['del'])){
		require_once '../configs/connect.php';
		$category_id = $_GET['del'];
		del_category($category_id);
	}
}

function load_categories(){
	require_once '../configs/connect.php';
	global $conn;
	$sql = "select * from categories";
	$query = mysqli_query($conn,$sql);
	while($row = mysqli_fetch_assoc($query)){
		echo "<option value=" .$row['category_id']. ">" .$row['category_name']. "</option>";
	}
}

function create_category($cat_name, $cat_des){
	global $conn;
	session_start();
	$sql = "insert into categories (category_name, description)
	values ('$cat_name', '$cat_des')";
	if(mysqli_query($conn, $sql)){
		header('Location: ../admin/categories_management.php');
		$_SESSION['success'] = "success";
	}
	else {
		header('Location: ../admin/categories_management.php');
		$_SESSION['fails'] = "fail";
	}
}

function del_category($category_id){
	global $conn;
	session_start();
	$sql = "delete from categories where category_id = '$category_id' ";
	if(mysqli_query($conn, $sql)){
		header('Location: ../admin/categories_management.php');
		$_SESSION['success'] = "success";
	}
	else {
		header('Location: ../admin/categories_management.php');
		$_SESSION['fails'] = "fail";
	}
}

function update_category($cat_id, $cat_name, $cat_des){
	global $conn;
	session_start();
	$sql = "update categories
			set category_name = '$cat_name',
				description = '$cat_des'
			where category_id= '$cat_id'";
	if(mysqli_query($conn, $sql)){
		header('Location: ../admin/categories_management.php');
		$_SESSION['success'] = "success";
	}
	else {
		header('Location: ../admin/categories_management.php');
		$_SESSION['fails'] = "fail";
	}
}
?>
