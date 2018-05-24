<?php
session_start();
require 'configs/connect.php';
if(!isset($_SESSION['user'])){
  header('Location: login.php');
} 
$sql = "select * from orders as o, order_statuses as os where o.status_id = os.status_id";
$query = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
<!--[if IE]>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<![endif]-->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<title>Tài khoản</title>
<?php 
include 'views/assets/styles.php';
?>
</head>

<body>
  <div class="page"> 
    <!-- Header -->
    <?php 
    include 'views/assets/top_bar.php';
    ?>
    <!-- end header --> 
    <!-- Navbar -->
    <?php 
    include 'views/assets/menu_bar.php';
    ?>
    <!-- end nav --> 

    <div class="main-container col2-right-layout">
      <div class="main container">
        <div class="row">
          <section class="col-main col-sm-9 wow bounceInUp animated">
            <div class="my-account">
              <div class="page-title">
                <h2>THỐNG KÊ CỦA TÔI</h2>
              </div>
              <div class="dashboard">
                <div class="welcome-msg"> <strong>Chào, <?php echo $_SESSION['name']; ?></strong>
                  <p>Dưới đây là các hoạt động gần đây của bạn. Hãy tích cực tham ra cộng đồng để nắm bắt xu hướng và nhận được nhiều ưu đãi nhé.</p>
                </div>
                <div class="recent-orders">
                  <div class="title-buttons"><strong>Đơn hàng gần đây</strong> <a href="#">Xem tất cả</a> </div>
                  <div class="table-responsive">
                    <table class="data-table" id="my-orders-table">

                      <thead>
                        <tr class="first last">
                          <th>Đơn hàng #</th>
                          <th>Ngày tạo</th>
                          <th>Địa chỉ giao hàng</th>
                          <th><span class="nobr">Giá trị đơn hàng</span></th>
                          <th>Trạng thái</th>
                          <th>&nbsp;</th>
                        </tr>
                      </thead>
                      <tbody>

                      <?php while($row = mysqli_fetch_assoc($query)) 
                      { 
                        ?>
                        <tr class="first odd">
                          <td><?php echo $row['order_id']?></td>
                          <td><?php echo $row['open_date']?></td>
                          <td><?php echo $row['receiver_address']?></td>
                          <td><span class="price"><?php echo number_format($row['total_price'])?></span></td>
                          <td><em><?php echo $row['status']?></em></td>
                          <td class="a-center last"><span class="nobr"> <a href="#">Xem</a> <span class="separator">|</span> <a href="#">Đặt lại</a> </span></td>
                        </tr>
                        <?php } ?>
                      </tbody>
                    </table>
                  </div>
                </div>
                <div class="box-account">
                  <div class="page-title">
                    <h2>Thông tin cá nhân</h2>
                  </div>
                  <div class="col2-set">
                    <div class="col-1">
                      <h5>Địa chỉ liên lạc</h5>
                      <a href="#">Sửa</a>
                      <p> Tên: <?php echo $_SESSION['name']; ?><br>
                        Email: <?php echo $_SESSION['email']; ?><br>
                        <a href="#">Đổi mật khẩu</a> </p>
                      </div>
                      <div class="col-2">
                        <h5>Tin mới</h5>
                        <p> Danh sách một số tin khuyến mại mới. </p>
                      </div>
                    </div>
                    <div class="col2-set">
                      <h4>Địa chỉ</h4>
                      <div class="manage_add"><a href="#">Quản lí địa chỉ</a> </div>
                      <div class="col-1">
                        <h5>Thông tin thanh toán</h5>
                        <address>
                          <?php echo $_SESSION['address'] ?><br>
                          <a href="#">Đổi địa chỉ</a>
                        </address>
                      </div>
                      <div class="col-2">
                        <h5>Địa chỉ giao hàng</h5>
                        <address>
                          <?php echo $_SESSION['address'] ?><br>
                          <a href="#">Đổi địa chỉ</a>
                        </address>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
            <?php 
            include 'views/assets/account_bar.php';
            ?>
          </div>
        </div>
      </div>
      <?php 
      include 'views/assets/brand.php';
      ?>
      <!-- End Footer --> 

    </div>
    <!-- JavaScript --> 
    <?php 
    include 'views/assets/scripts.php';
    ?>
  </body>
  </html>


  <!-- Hiển thị thông báo -->
  <script>
    <?php
    if(isset($_SESSION['welcome'] )){
      echo "swal('Đăng kí thành công!', 'Chào mừng đến với Mega!', 'success');";
      unset($_SESSION['welcome']);
    }
    ?>
  </script>