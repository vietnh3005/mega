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
		$comments = mysqli_real_escape_string($conn, htmlspecialchars($_POST["comments"]));
		$user_id = mysqli_real_escape_string($conn, htmlspecialchars($_POST["user_id"]));
		$confirm_agree = mysqli_real_escape_string($conn, htmlspecialchars($_POST["confirm_agree"]));
		$total = mysqli_real_escape_string($conn, htmlspecialchars($_POST["total"]));
		$open_date = date_default_timezone_get();		
		create_order($user_id, $total, $name, $email, $phone, $address_1, $comments, $open_date);
	}
}

function create_order($user_id, $total, $name, $email, $phone, $address_1, $comments, $open_date){
	global $conn;
	session_start();
	$sql = "insert into orders (status_id, user_id, total_price, receiver_name, receiver_email, receiver_phone, receiver_address, description, open_date)
	values ('1', '$user_id', '$total','$name', '$email', '$phone', '$address_1', '$comments', '$open_date' )";
	if(mysqli_query($conn, $sql)){
		$order_id = mysqli_insert_id($conn);
		foreach ($_POST["order_details"] as $key => $value) {
			$arr = explode(",", $value);
			$product_id = $arr[0];
			$sell_price = $arr[1];
			$quantity = $arr[2];
			$sql1="insert into order_details (order_id, product_id, unit_price, unit_quantity)
			values('$order_id', '$product_id', '$sell_price', '$quantity')";
			$query = mysqli_query($conn,$sql1);
		}
		header('Location: ../index.php');
		$_SESSION['o_success'] = "success";
		unset($_SESSION['cart']);
	}
	else {
		header('Location: ../index.php');
		$_SESSION['fails'] = "fail";
	}
}