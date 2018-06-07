<?php 
if($_POST)
{	
	require_once '../configs/connect.php';
	if(isset($_POST['command_type'])){
		if($_POST['command_type'] == "delete"){
			delete_message();	
		}
		if($_POST['command_type'] == "send"){
			$mes_title = mysqli_real_escape_string($conn, htmlspecialchars($_POST["mes_title"]));
			$mes_content = mysqli_real_escape_string($conn, htmlspecialchars($_POST["mes_content"]));
			$created_date = date("Y/m/d");
			send_message($mes_title, $mes_content, $created_date);	
		}
		else {echo "Meow";}
	}
}

function delete_message(){
	global $conn;
	session_start();
	foreach ($_POST["checkbox"] as $key => $value) {
		$sql = "delete from messages where message_id='$value' ";
		$query = mysqli_query($conn,$sql1);
		if(mysqli_query($conn, $sql)){
			header('Location: ../admin/messages_management.php');
			$_SESSION['del_success'] = "del_success";
		}
		else {
			header('Location: ../admin/messages_management.php');
			$_SESSION['del_fail'] = "del_fail";
		}
	}
}

function send_message($mes_title, $mes_content, $created_date){
	global $conn;
	session_start();
	$sql = "select user_id from users";
	$query = mysqli_query($conn,$sql);
	while($row = mysqli_fetch_assoc($query)){
		$sql1="insert into messages(receiver_id, title, content, status_id, is_deleted, created_date) values ('".$row['user_id']."', '$mes_title', '$mes_content', '3', '0', '$created_date') ";
		$query1 = mysqli_query($conn,$sql1);
	}
	header('Location: ../admin/messages_management.php');
	$_SESSION['send_success'] = "send_success";
}
?>