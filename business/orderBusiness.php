<?php
if($_POST)
{	
	require_once '../configs/connect.php';
	if(isset($_POST['sm_btn'])){
		$name = mysqli_real_escape_string($conn, htmlspecialchars($_POST["name"]));
		$email = mysqli_real_escape_string($conn, htmlspecialchars($_POST["email"]));
		$phone = mysqli_real_escape_string($conn, htmlspecialchars($_POST["phone"]));
		$company = mysqli_real_escape_string($conn, htmlspecialchars($_POST["company"]));
		$address_1 = mysqli_real_escape_string($conn, htmlspecialchars($_POST["address_1"]));
		$address_2 = mysqli_real_escape_string($conn, htmlspecialchars($_POST["address_2"]));
		$city = mysqli_real_escape_string($conn, htmlspecialchars($_POST["city"]));
		$country = mysqli_real_escape_string($conn, htmlspecialchars($_POST["country"]));
		$product_id = mysqli_real_escape_string($conn, htmlspecialchars($_POST["product_id"]));
		$sell_price = mysqli_real_escape_string($conn, htmlspecialchars($_POST["sell_price"]));
		$quantity = mysqli_real_escape_string($conn, htmlspecialchars($_POST["quantity"]));
		$comments = mysqli_real_escape_string($conn, htmlspecialchars($_POST["comments"]));
		$user_id = mysqli_real_escape_string($conn, htmlspecialchars($_POST["user_id"]));
		$confirm_agree = mysqli_real_escape_string($conn, htmlspecialchars($_POST["confirm agree"]));
		$total = mysqli_real_escape_string($conn, htmlspecialchars($_POST["total"]));
		$open_date = date_default_timezone_get();
		create_order($name, $email, $phone, $address_1, $sell_price, $comments, $user_id, $total);

	}
}

function create_order($name, $email, $phone, $address_1, $sell_price, $comments, $user_id, $total){
	global $conn;
	session_start();
	$sql = "insert into orders (status_id, user_id, total_price, receiver_name, receiver_email, receiver_phone, receiver_address, description, open_date, close_date)
	values ('1', '$user_id', '$total',' $name', '$email', '$phone', '$address_1', '$comments', '$open_date', '')";
	if(mysqli_query($conn, $sql)){
		header('Location: ../index.php');
		$_SESSION['success'] = "success";
	}
	else {
		header('Location: ../index.php');
		$_SESSION['fails'] = "fail";
	}
}