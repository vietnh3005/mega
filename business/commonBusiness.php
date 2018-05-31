<?php 
	require_once '../configs/connect.php';

	function count_new_user(){
		global $conn;
		$sql = "select count(user_id) as new_user from users where status_id='5'";
		$query = mysqli_query($conn,$sql);
		$row = mysqli_fetch_assoc($query);
		$_SESSION['new_user_num'] = $row['new_user'];
	}

	function count_user(){
		global $conn;
		$sql = "select count(user_id) as number_of_user from users";
		$query = mysqli_query($conn,$sql);
		$row = mysqli_fetch_assoc($query);
		$_SESSION['number_of_user'] = $row['number_of_user'];
	}

	function count_new_order(){
		global $conn;
		$sql = "select count(order_id) as new_order from orders where status_id='1'";
		$query = mysqli_query($conn,$sql);
		$row = mysqli_fetch_assoc($query);
		$_SESSION['new_order_num'] = $row['new_order'];
	}

	function count_order(){
		global $conn;
		$sql = "select count(order_id) as number_of_order from orders";
		$query = mysqli_query($conn,$sql);
		$row = mysqli_fetch_assoc($query);
		$_SESSION['number_of_order'] = $row['number_of_order'];
	}

	function count_new_comment(){
		global $conn;
		$sql = "select count(comment_id) as new_comment from comments where status_id='1'";
		$query = mysqli_query($conn,$sql);
		$row = mysqli_fetch_assoc($query);
		$_SESSION['new_comment_num'] = $row['new_comment'];
	}

	function popular_product(){
		global $conn;
		$sql = "select count(od.product_id) as cp, od.product_id from order_details as od, products p
				where p.product_id = od.product_id group by od.product_id order by cp DESC limit 1";
		$query = mysqli_query($conn,$sql);
		$row = mysqli_fetch_assoc($query);
		$_SESSION['popular_product_id'] = $row['product_id'];
	}

	function no_of_sell(){
		global $conn;
		$sql = "select sum(unit_quantity) as total_num from order_details";
		$query = mysqli_query($conn,$sql);
		$row = mysqli_fetch_assoc($query);
		$_SESSION['total_num'] = $row['total_num'];
	}

	function income(){
		global $conn;
		$sql = "select sum(od.unit_quantity*(od.unit_price - p.buy_price)) as income from order_details as od, products as p where od.product_id = p.product_id";
		$query = mysqli_query($conn,$sql);
		$row = mysqli_fetch_assoc($query);
		$_SESSION['income'] = $row['income'];
	}
?>