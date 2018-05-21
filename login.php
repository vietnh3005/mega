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
<title>Đăng nhập</title>
<?php 
session_start();
require_once 'configs/connect.php';
include 'views/assets/styles.php';
if (isset($_SESSION['user'])) {
  header('Location: index.php');}
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
    
    <section class="main-container col1-layout">
      <div class="main container">
        <div class="account-login">
          <div class="page-title">
            <h2>Đăng nhập hoặc tạo tài khoản mới</h2>
          </div>
          <fieldset class="col2-set">
            <legend>Đăng nhập hoặc tạo tài khoản mới</legend>
            <div class="col-1 new-users"><strong>Khách hàng mới</strong>
              <div class="content">
                <p>Tạo tài khoản để có thể nhận được các thông báo về giảm giá cũng nhu các thông tin mới nhất về các mặt hàng, theo dõi các đơn hàng.</p>
                <div class="buttons-set">
                  <button onclick="window.location='#';" class="button create-account" type="button"><span>Tạo tài khoản</span></button>
                </div>
              </div>
            </div>
            <div class="col-2 registered-users"><strong>Đăng kí</strong>
              <div class="content">
                <form action= "business/userBusiness.php" method = "post"> 
                  <p>Đăng nhập nếu bạn đã có tài khoản.</p>
                  <ul class="form-list">
                    <li>
                      <label for="email">Tên đăng nhập <span class="required">*</span></label>
                      <br>
                      <input type="text" title="Username" class="input-text required-entry" id="username" value="" name="username">
                    </li>
                    <li>
                      <label for="pass">Password <span class="required">*</span></label>
                      <br>
                      <input type="password" title="Password" id="pass" class="input-text required-entry validate-password" name="password" value="">
                    </li>
                  </ul>
                  <p class="required">* Thông tin bắt buộc</p>
                  <div class="buttons-set">
                    <button id="send2" name="user_login" type="submit" class="button login"><span>Đăng nhập</span></button>
                    <a class="forgot-word" href="#">Quên mật khẩu?</a> </div>
                  </form>  
                </div>
              </div>
            </fieldset>
          </div>
          <br>
          <br>
          <br>
          <br>
          <br>
        </div>
      </section>
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