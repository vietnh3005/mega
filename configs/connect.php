 <?php
//Require
//Thông tin website
 define('SITE_URL', 'http://localhost');
//Thông tin cấu hình DB
 define('DB_SERVER', 'localhost:3360');
 define('DB_USERNAME', 'root');
 define('DB_PASSWORD', '');
 define('DB_DATABASE', 'mega');

 date_default_timezone_set('Asia/Ho_Chi_Minh');
 
//Kết nối
 $conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE) or die('Chưa kết nối tới CSDL');
//Yêu cầu lưu trữ UTF8 (Tiếng Việt)
 mysqli_query($conn, "SET NAMES 'UTF8'");
 ?> 