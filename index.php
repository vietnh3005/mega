<?php
session_start();
require_once 'configs/connect.php';
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
<title>Trang chủ</title>
<!-- JS and CSS -->
<?php 
include 'views/assets/styles.php';
include 'views/assets/scripts.php';
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

    <!-- Slider -->
    <?php 
    include 'views/assets/sliders.php';
    ?>
    <!-- end Slider --> 

    <!-- header service -->
    <?php 
    include 'views/assets/services.php';
    ?>
    <!-- end header service --> 

    <!-- main container --> 
    <?php 
    include 'views/assets/best_seller.php';
    ?>
    <!-- End main container --> 
    <!-- offer banner section -->
    <?php 
    include 'views/assets/offer_banner.php';
    ?>
    <!-- end offer banner section --> 
    
    <!-- promo banner section -->
    <?php 
    include 'views/assets/feature.php';
    ?>
    <!-- End promo banner section --> 
    <!-- middle slider -->
    <?php 
    include 'views/assets/category.php';
    ?>
    <!-- End middle slider --> 
    
    <!-- Latest Blog -->
    <?php 
    include 'views/assets/blog.php';
    ?>
    <!-- End Latest Blog -->
    <?php 
    include 'views/assets/brand.php';
    ?>
    <!-- End Footer --> 

  </div>

</body>
</html>

<!-- Hiển thị thông báo -->
<script>
  <?php
  if(isset($_SESSION['s_removed'] )){
    echo "swal('Success!', 'Đã bỏ khỏi giỏ hàng!', 'success');";
    unset($_SESSION['s_removed']);
  }
  if(isset($_SESSION['o_success'] )){
    echo "swal('Success!', 'Đã đặt hàng thành công!', 'success');";
    unset($_SESSION['s_removed']);
  }
  if(isset($_SESSION['s_added'])){
    echo "swal('Success!', 'Đã thêm vào giỏ hàng!', 'success');";
    unset($_SESSION['s_added']);
  }
  ?>
</script>