<?php 
function send_message($user_id, $status_id){
	require_once '../configs/connect.php';
	global $conn;
	switch ($status_id) {
		case '1':
			$title = 'Đang chờ xử lí';
			$content = 'Đơn hàng của bạn hiện đang chờ xử lí';
			break;

		case '2':
			$title = 'Đặt hàng thành công!';
			$content = 'Đơn đặt hàng của bạn đã được chấp thuận. Chúng tôi sẽ chuyển hàng trong thời gian sớm nhất.';
			break;

		case '3':
			$title = 'Đang chuyển hàng';
			$content = 'Đơn hàng của bạn sẽ được chuyển đến trong thời gian sớm nhất';
			break;

		case '4':
			$title = 'Kết thúc';
			$content = 'Đơn hàng đã được chuyển thành công. Cám ơn bạn đã mua hàng.';
			break;

		case '5':
			$title = 'Xin lỗi';
			$content = 'Một trong số các mặt hàng có trong đơn hàng hiện không khả dụng. Xin lỗi bạn vì sự bất tiện này, chúng tôi sẽ liên lạc lại với bạn sớm nhất để xác nhận lại đơn hàng.';
			break;
		
		default:
			break;
	}
	$created_date = date("Y/m/d");	
	$sql = "insert into messages (receiver_id, title, content, status_id, created_date)
	values ('$user_id', '$title', '$content','1', '$created_date')";
	
	if(mysqli_query($conn, $sql)){
		$_SESSION['o_success'] = "success";
		}
	else {
		header('Location: ../404.html');
	}
}
?>