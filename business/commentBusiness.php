<?php
if($_POST)
{	
	require_once '../configs/connect.php';
	if(isset($_POST['cmt_submit'])){
		$cm_user_id = mysqli_real_escape_string($conn, htmlspecialchars($_POST["cm_user_id"]));
		$cm_name = mysqli_real_escape_string($conn, htmlspecialchars($_POST["cm_name"]));
		$cm_pro_id = mysqli_real_escape_string($conn, htmlspecialchars($_POST["rev_pro_id"]));
		$cm_short = mysqli_real_escape_string($conn, htmlspecialchars($_POST["short_content"]));
		$cm_detail = mysqli_real_escape_string($conn, htmlspecialchars($_POST["detail_content"]));
		$created_date = date("Y/m/d");		
		create_comment($cm_user_id, $cm_name, $cm_pro_id, $cm_short, $cm_detail, $created_date);
	}
	if(isset($_POST['upd_cmt'])){
		$status_id =  mysqli_real_escape_string($conn, htmlspecialchars($_POST["btn_upd"]));
		$comment_id =  mysqli_real_escape_string($conn, htmlspecialchars($_POST["cmt_id"]));
		update_status($status_id, $comment_id);
	}
}


if($_GET)
{	
	if(isset($_GET['del'])){
		require_once '../configs/connect.php';
		$comment_id = $_GET['del'];
		del_comment($comment_id);
	}
}

function create_comment($cm_user_id, $cm_name, $cm_pro_id, $cm_short, $cm_detail, $created_date){
	global $conn;
	session_start();
	$sql = "insert into comments (user_id, reviewer, product_id, short_review, content, status_id, create_at)
	values ('$cm_user_id', '$cm_name', '$cm_pro_id', '$cm_short', '$cm_detail', '1','$created_date')";
	if(mysqli_query($conn, $sql)){
		header('Location: ../product_details.php');
		$_SESSION['success'] = "success";
	}
	else {
		header('Location: ../product_details.php');
		$_SESSION['fails'] = "fail";
	}
}

function del_comment($comment_id){
	global $conn;
	session_start();
	$sql = "delete from comments where comment_id = '$comment_id' ";
	if(mysqli_query($conn, $sql)){
		header('Location: ../admin/comments_management.php');
		$_SESSION['d_success'] = "success";
	}
	else {
		header('Location: ../admin/comments_management.php');
		$_SESSION['fails'] = "fail";
	}
}


function load_statuses(){
	require_once '../configs/connect.php';
	global $conn;
	$sql = "select * from comment_statuses";
	$query = mysqli_query($conn,$sql);
	while($row = mysqli_fetch_assoc($query)){
		echo "<option value=" .$row['status_id']. ">" .$row['status']. "</option>";
	}
}

function update_status($status_id, $comment_id){
	global $conn;
	session_start();
	$sql = "update comments
			set status_id ='$status_id'
			where comment_id='$comment_id'";
	if(mysqli_query($conn, $sql)){	
		header('Location: ../admin/comments_management.php');
		$_SESSION['u_success'] = "u_success";
	}
	else {
		header('Location: ../admin/comments_management.php');
		$_SESSION['fails'] = "fail";
	}
}

?>