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
<title>Đăng kí</title>
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
         <!--Middle Part Start-->
         <div class="col-sm-12" id="content">
          <h1 class="title">Đăng kí tài khoản</h1>
          <p>Nếu bạn đã có tài khoản, hãy <a href="login.php"><b>đăng nhập<b></a>.</p>
            <form class="form-horizontal" method="post" action="business/userBusiness.php">
              <fieldset id="account">

                <div class="form-group ">
                  <label for="image" class="col-sm-2 control-label">Avatar</label>
                  <div class="col-sm-10">
                    <input type="file" class="form-control" id="user_ava" accept=".jpg, .jpeg, .png" multiple onchange="readURL(this);"/><br>
                    <img id="preview_ava" src="#"/>
                  </div>
                </div>

                <input id="user_avatar" name="user_avatar" type="hidden" />
                <div class="form-group">
                  <label for="input-firstname" class="col-sm-2 control-label">Tên</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="input-name" placeholder="Tên" value="" name="name">
                  </div>
                </div>
                <div class="form-group">
                  <label for="input-firstname" class="col-sm-2 control-label">Tên đăng nhập</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="input-username" placeholder="Tên đăng nhập" value="" name="username">
                  </div>
                </div>
                <div class="form-group">
                  <label for="input-email" class="col-sm-2 control-label">E-Mail</label>
                  <div class="col-sm-10">
                    <input type="email" class="form-control" id="input-email" placeholder="E-Mail" value="" name="email">
                  </div>
                </div>
                <div class="form-group">
                  <label for="input-telephone" class="col-sm-2 control-label">Số điện thoại</label>
                  <div class="col-sm-10">
                    <input type="tel" class="form-control" id="input-telephone" placeholder="Telephone" value="" name="phone">
                  </div>
                </div>
              </fieldset>
              <fieldset id="address">
                <legend>Địa chỉ</legend>
                <div class="form-group">
                  <label for="input-company" class="col-sm-2 control-label">Địa chỉ 1</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="input-company" placeholder="Địa chỉ 1" value="" name="addr1">
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <div class="form-group">
                  <label for="input-password" class="col-sm-2 control-label">Mật khẩu</label>
                  <div class="col-sm-10">
                    <input type="password" class="form-control" id="input-password" placeholder="Mật khẩu" value="" name="password">
                  </div>
                </div>
                <div class="form-group">
                  <label for="input-confirm" class="col-sm-2 control-label">Xác thực mật khẩu</label>
                  <div class="col-sm-10">
                    <input type="password" class="form-control" id="input-confirm" placeholder="Xác nhận mật khẩu" value="" name="confirm">
                  </div>
                </div>
              </fieldset>
              <fieldset
              <div class="form-group">
                <label class="col-sm-2 control-label">Đăng kí nhận tin</label>
                <div class="col-sm-10">
                  <label class="radio-inline">
                    <input type="radio" value="1" name="newsletter">
                  Yes</label>
                  <label class="radio-inline">
                    <input type="radio" checked="checked" value="0" name="newsletter">
                  No</label>
                </div>
              </div>
            </fieldset>
            <div class="buttons">
              <div class="pull-right">
                <input type="checkbox" value="1" name="agree">
                &nbsp;Tôi đồng ý với  <a class="agree" href="#"><b>Điều khoản sử dụng</b></a> &nbsp;
                <input type="submit" class="btn btn-primary" value="Đăng kí" name="btn_rgt">
              </div>
            </div>
          </form>
        </div>
        <!--Middle Part End -->
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

<!-- Preview Image at Updating Modal -->
<script type="text/javascript">
  function readdURL(input) {
    if (input.files && input.files[0]) {
      var reader = new FileReader();

      reader.onload = function (e) {
        $('#preview_ava').show();
        $('#preview_ava').attr('src', e.target.result).width(100).height(100);  
      }

      reader.readAsDataURL(input.files[0]);
    }
  }

  $("#user_ava").change(function(){
    readdURL(this);

  });
</script>

<script type="text/javascript">
  $(document).ready(function(){
    $('#user_ava').change(function(e){
      var imageName = e.target.files[0].name;
      $('#user_avatar').val(imageName);
    });
  });
</script>

<!-- Hiển thị thông báo -->
<script>
  <?php
  if(isset($_SESSION['invalid'] )){
    echo "swal('Thông tin không hợp lê!', 'Vui lòng kiểm tra lại thông tin!', 'warning');";
    unset($_SESSION['invalid']);
  }
?>
</script>