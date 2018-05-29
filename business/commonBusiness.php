<?php 
	require_once '../configs/connect.php';

	function count_new_user(){
		global $conn;
		$sql = "select count(user_id) as new_user from users where status_id='5'";
		$query = mysqli_query($conn,$sql);
		$row = mysqli_fetch_assoc($query);
		$_SESSION['new_user_num'] = $row['new_user'];
	}

	function count_new_order(){
		global $conn;
		$sql = "select count(order_id) as new_order from orders where status_id='1'";
		$query = mysqli_query($conn,$sql);
		$row = mysqli_fetch_assoc($query);
		$_SESSION['new_order_num'] = $row['new_order'];
	}

	function count_new_comment(){
		global $conn;
		$sql = "select count(comment_id) as new_comment from comments where status_id='1'";
		$query = mysqli_query($conn,$sql);
		$row = mysqli_fetch_assoc($query);
		$_SESSION['new_comment_num'] = $row['new_comment'];
	}
?>