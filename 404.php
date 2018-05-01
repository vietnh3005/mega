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
<title>Polo, premium HTML5 &amp; CSS3 template</title>
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
    <section class="content-wrapper">
      <div class="container">
        <div class="std">
          <div class="page-not-found wow bounceInRight animated">
            <h2>404</h2>
            <h3><img src="images/signal.png" alt="signal">Trang chế đang tìm hổng có tồn tại đâu</h3>
            <div><a href="index.php" class="btn-home"><span>Về Trang Chủ</span></a></div>
          </div>
        </div>
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