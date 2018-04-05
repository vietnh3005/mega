<?php
session_start();
if (isset($_SESSION['username'])) {
 header('Location: ../index.php');
}
 else
	{
		require_once '../configs/connect.php';

		// Kiểm tra nếu người dùng đã ân nút đăng nhập thì mới xử lý
		if (isset($_POST["btn_submit"])) {
			// lấy thông tin người dùng
			$username = $_POST["username"];
			$password = $_POST["password"];
			//làm sạch thông tin, xóa bỏ các tag html, ký tự đặc biệt 
			//mà người dùng cố tình thêm vào để tấn công theo phương thức sql injection
			$username = strip_tags($username);
			$username = addslashes($username);
			$password = strip_tags($password);
			$password = addslashes($password);
			$sql = "select * from users where username = '$username' and password = '$password' ";
			$query = mysqli_query($conn,$sql);
			$num_rows = mysqli_num_rows($query);
			if ($num_rows==0) {
				echo "<div class='alert alert-block alert-danger'> 
					<button type='button' class='close' data-dismiss='alert'>
							<i class='ace-icon fa fa-times'></i>
					</button>
					Wrong username or password 
				</div>";
			}else{
				//tiến hành lưu tên đăng nhập vào session để tiện xử lý sau này
				$_SESSION['username'] = $username;
	            // Thực thi hành động sau khi lưu thông tin vào session
	            // ở đây mình tiến hành chuyển hướng trang web tới một trang gọi là index.php
	            header('Location: ../index.php');
			}
		}
	}
?>