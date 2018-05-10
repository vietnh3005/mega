<?php
if($_POST)
{	
	require_once '../configs/connect.php';
	if(isset($_POST['new_pro'])){
		$pro_img1 = mysqli_real_escape_string($conn, htmlspecialchars($_POST["pro_insr_img1_cm"]));
		$pro_img2 = mysqli_real_escape_string($conn, htmlspecialchars($_POST["pro_insr_img2_cm"]));
		$pro_img3 = mysqli_real_escape_string($conn, htmlspecialchars($_POST["pro_insr_img3_cm"]));
		$pro_img4 = mysqli_real_escape_string($conn, htmlspecialchars($_POST["pro_insr_img4_cm"]));
		$pro_cat = mysqli_real_escape_string($conn, htmlspecialchars($_POST["pro_insr_cat"]));
		$pro_man = mysqli_real_escape_string($conn, htmlspecialchars($_POST["pro_insr_man"]));
		$pro_quan = mysqli_real_escape_string($conn, htmlspecialchars($_POST["pro_insr_quan"]));
		$pro_des = mysqli_real_escape_string($conn, htmlspecialchars($_POST["pro_insr_des"]));
		$pro_name = mysqli_real_escape_string($conn, htmlspecialchars($_POST["pro_insr_name"]));
		$pro_bprice = mysqli_real_escape_string($conn, htmlspecialchars($_POST["pro_insr_bprice"]));
		$pro_sprice = mysqli_real_escape_string($conn, htmlspecialchars($_POST["pro_insr_sprice"]));
		create_product($pro_cat, $pro_man, $pro_name, $pro_bprice, $pro_sprice, $pro_quan, $pro_des, $pro_img1, $pro_img2, $pro_img3, $pro_img4);
	}
	if(isset($_POST['update_pro'])){
		$pro_id = mysqli_real_escape_string($conn, htmlspecialchars($_POST["pro_upd_pro_id"]));
		$pro_img1 = mysqli_real_escape_string($conn, htmlspecialchars($_POST["pro_upd_img1_cm"]));
		$pro_img2 = mysqli_real_escape_string($conn, htmlspecialchars($_POST["pro_upd_img2_cm"]));
		$pro_img3 = mysqli_real_escape_string($conn, htmlspecialchars($_POST["pro_upd_img3_cm"]));
		$pro_img4 = mysqli_real_escape_string($conn, htmlspecialchars($_POST["pro_upd_img4_cm"]));
		$pro_cat = mysqli_real_escape_string($conn, htmlspecialchars($_POST["pro_upd_cat"]));
		$pro_man = mysqli_real_escape_string($conn, htmlspecialchars($_POST["pro_upd_man"]));
		$pro_quan = mysqli_real_escape_string($conn, htmlspecialchars($_POST["pro_upd_quan"]));
		$pro_des = mysqli_real_escape_string($conn, htmlspecialchars($_POST["pro_upd_des"]));
		$pro_name = mysqli_real_escape_string($conn, htmlspecialchars($_POST["pro_upd_name"]));
		$pro_bprice = mysqli_real_escape_string($conn, htmlspecialchars($_POST["pro_upd_bprice"]));
		$pro_sprice = mysqli_real_escape_string($conn, htmlspecialchars($_POST["pro_upd_sprice"]));
		update_product($pro_id, $pro_cat, $pro_man, $pro_name, $pro_bprice, $pro_sprice, $pro_quan, $pro_des, $pro_img1, $pro_img2, $pro_img3, $pro_img4);
	}
}

if($_GET)
{	
	require_once '../configs/connect.php';
	if(isset($_GET['del'])){
		require_once '../configs/connect.php';
		$product_id = $_GET['del'];
		del_product($product_id);
	}
}

function create_product($pro_cat, $pro_man, $pro_name, $pro_bprice, $pro_sprice, $pro_quan, $pro_des, $pro_img1, $pro_img2, $pro_img3, $pro_img4){
	global $conn;
	session_start();
	$sql = "insert into products (category_id, manufacture_id, product_name, buy_price, sell_price, quantity, rating, description, image1, image2, image3, image4)
	values ('$pro_cat', '$pro_man','$pro_name', '$pro_bprice', '$pro_sprice', '$pro_quan', '0', '$pro_des', '$pro_img1', '$pro_img2', '$pro_img3', '$pro_img4')";
	if(mysqli_query($conn, $sql)){
		header('Location: ../admin/products_management.php');
		$_SESSION['success'] = "success";
	}
	else {
		header('Location: ../admin/products_management.php');
		$_SESSION['fails'] = "fail";
	}
}

function del_product($product_id){
	global $conn;
	session_start();
	$sql = "delete from products where product_id = '$product_id' ";
	if(mysqli_query($conn, $sql)){
		header('Location: ../admin/products_management.php');
		$_SESSION['success'] = "success";
	}
	else {
		header('Location: ../admin/products_management.php');
		$_SESSION['fails'] = "fail";
	}
}

function update_product($pro_id, $pro_cat, $pro_man, $pro_name, $pro_bprice, $pro_sprice, $pro_quan, $pro_des, $pro_img1, $pro_img2, $pro_img3, $pro_img4){
	global $conn;
	session_start();
	$sql = "update products
	set category_id = '$pro_cat',
	manufacture_id = '$pro_man',
	product_name = '$pro_name',
	buy_price = '$pro_bprice',
	sell_price = '$pro_sprice',
	quantity = '$pro_quan',
	description = '$pro_des',
	image1 = '$pro_img1',
	image2 = '$pro_img2',
	image3 = '$pro_img3',
	image4 = '$pro_img4'
	where product_id = '$pro_id'";

	if(mysqli_query($conn, $sql)){
		header('Location: ../admin/products_management.php');
		$_SESSION['success'] = "success";
	}
	else {
		header('Location: ../admin/products_management.php');
		$_SESSION['fails'] = "fail";
	}
}
?>
