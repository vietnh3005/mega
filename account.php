<?php
  session_start();
  require_once 'configs/connect.php';
  // include 'business/commonBusiness.php';
  // check_login_user();
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
                      <tr class="first odd">
                        <td>500000002</td>
                        <td>9/9/10 </td>
                        <td>pranali d</td>
                        <td><span class="price">$5.00</span></td>
                        <td><em>Pending</em></td>
                        <td class="a-center last"><span class="nobr"> <a href="#">View Order</a> <span class="separator">|</span> <a href="#">Reorder</a> </span></td>
                      </tr>
                      <tr class="last even">
                        <td>500000001</td>
                        <td>9/9/10 </td>
                        <td>pranali d</td>
                        <td><span class="price">$1,397.99</span></td>
                        <td><em>Pending</em></td>
                        <td class="a-center last"><span class="nobr"> <a href="#">View Order</a> <span class="separator">|</span> <a href="#">Reorder</a> </span></td>
                      </tr>
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
                    pranali d<br>
                    aundh<br>
                    tyyrt,  Alabama, 46532<br>
                    United States<br>
                    T: 454541 <br>
                    <a href="#">Edit Address</a>
                    </address>
                  </div>
                  <div class="col-2">
                    <h5>Địa chỉ giao hàng</h5>
                    <address>
                    pranali d<br>
                    aundh<br>
                    tyyrt,  Alabama, 46532<br>
                    United States<br>
                    T: 454541 <br>
                    <a href="#">Edit Address</a>
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