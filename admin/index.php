<?php session_start();
require '../configs/connect.php';
include '../business/userBusiness.php';
include '../business/commonBusiness.php';
if(!isset($_SESSION['admin'])){
  header('Location: login.php');
} 
load_admin();
count_new_user();
count_user();
count_new_order();
count_new_comment();
count_order();
popular_product();
no_of_sell();
income();

$sql = "select * from products where product_id ='".$_SESSION['popular_product_id']."'";
$query = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($query);
?>  

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Mosaddek">
  <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <link rel="shortcut icon" href="img/favicon.png">

  <title>Trang chủ</title>
  <?php  include 'components/style.php'; ?>
  <script src="js/jquery.js"></script>
  <script src="js/sweet-alert.js"></script>
</head>

<body>

  <section id="container" >
    <!--header start-->
    <?php  include'components/topbar.php'; ?>
    <!--header end-->
    <!--sidebar start-->
    <?php  include'components/sidebar.php'; ?>
    <!--sidebar end-->
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <!--state overview start-->
        <div class="row state-overview">
          <div class="col-lg-3 col-sm-6">
            <section class="panel">
              <div class="symbol terques">
                <i class="icon-user"></i>
              </div>
              <div class="value">
                <input type="hidden" id="number_of_user" value="<?php echo $_SESSION['number_of_user']; ?>">
                <h1 class="count">
                  0
                </h1>
                <p>Người dùng</p>
              </div>
            </section>
          </div>
          <div class="col-lg-3 col-sm-6">
            <section class="panel">
              <div class="symbol red">
                <i class="icon-desktop"></i>
              </div>
              <div class="value">
                <input type="hidden" id="no_of_sell" value="<?php echo $_SESSION['total_num']; ?>">
                <h1 class=" count2">
                  0
                </h1>
                <p>Sản phẩm bán ra</p>
              </div>
            </section>
          </div>
          <div class="col-lg-3 col-sm-6">
            <section class="panel">
              <div class="symbol yellow">
                <i class="icon-shopping-cart"></i>
              </div>
              <div class="value">
                <input type="hidden" id="number_of_order" value="<?php echo $_SESSION['number_of_order']; ?>">
                <h1 class=" count3">
                  0
                </h1>
                <p>Đơn hàng</p>
              </div>
            </section>
          </div>
          <div class="col-lg-3 col-sm-6">
            <section class="panel">
              <div class="symbol blue">
                <i class="icon-bar-chart"></i>
              </div>
              <div class="value">
                <input type="hidden" id="income" value="<?php echo $_SESSION['income']; ?>">
                <h1 class=" count4">
                  0
                </h1>
                <p>Lợi nhuận</p>
              </div>
            </section>
          </div>
        </div>
        <!--state overview end-->

        <div class="row">
          <div class="col-lg-8">
            <!--custom chart start-->
            <div class="border-head">
              <h3>Earning Graph</h3>
            </div>
            <div class="custom-bar-chart">
              <ul class="y-axis">
                <li><span>100</span></li>
                <li><span>80</span></li>
                <li><span>60</span></li>
                <li><span>40</span></li>
                <li><span>20</span></li>
                <li><span>0</span></li>
              </ul>
              <div class="bar">
                <div class="title">JAN</div>
                <div class="value tooltips" data-original-title="30%" data-toggle="tooltip" data-placement="top">30%</div>
              </div>
              <div class="bar ">
                <div class="title">FEB</div>
                <div class="value tooltips" data-original-title="50%" data-toggle="tooltip" data-placement="top">50%</div>
              </div>
              <div class="bar ">
                <div class="title">MAR</div>
                <div class="value tooltips" data-original-title="40%" data-toggle="tooltip" data-placement="top">40%</div>
              </div>
              <div class="bar ">
                <div class="title">APR</div>
                <div class="value tooltips" data-original-title="55%" data-toggle="tooltip" data-placement="top">55%</div>
              </div>
              <div class="bar">
                <div class="title">MAY</div>
                <div class="value tooltips" data-original-title="20%" data-toggle="tooltip" data-placement="top">20%</div>
              </div>
              <div class="bar ">
                <div class="title">JUN</div>
                <div class="value tooltips" data-original-title="39%" data-toggle="tooltip" data-placement="top">39%</div>
              </div>
              <div class="bar">
                <div class="title">JUL</div>
                <div class="value tooltips" data-original-title="75%" data-toggle="tooltip" data-placement="top">75%</div>
              </div>
              <div class="bar ">
                <div class="title">AUG</div>
                <div class="value tooltips" data-original-title="45%" data-toggle="tooltip" data-placement="top">45%</div>
              </div>
              <div class="bar ">
                <div class="title">SEP</div>
                <div class="value tooltips" data-original-title="50%" data-toggle="tooltip" data-placement="top">50%</div>
              </div>
              <div class="bar ">
                <div class="title">OCT</div>
                <div class="value tooltips" data-original-title="42%" data-toggle="tooltip" data-placement="top">42%</div>
              </div>
              <div class="bar ">
                <div class="title">NOV</div>
                <div class="value tooltips" data-original-title="60%" data-toggle="tooltip" data-placement="top">60%</div>
              </div>
              <div class="bar ">
                <div class="title">DEC</div>
                <div class="value tooltips" data-original-title="90%" data-toggle="tooltip" data-placement="top">90%</div>
              </div>
            </div>
            <!--custom chart end-->
          </div>
          <div class="col-lg-4">
            <!--new earning start-->
            <div class="panel terques-chart">
              <div class="panel-body chart-texture">
                <div class="chart">
                  <div class="heading">
                    <span>Friday</span>
                    <strong>$ 57,00 | 15%</strong>
                  </div>
                  <div class="sparkline" data-type="line" data-resize="true" data-height="75" data-width="90%" data-line-width="1" data-line-color="#fff" data-spot-color="#fff" data-fill-color="" data-highlight-line-color="#fff" data-spot-radius="4" data-data="[200,135,667,333,526,996,564,123,890,564,455]"></div>
                </div>
              </div>
              <div class="chart-tittle">
                <span class="title">New Earning</span>
                <span class="value">
                  <a href="#" class="active">Market</a>
                  |
                  <a href="#">Referal</a>
                  |
                  <a href="#">Online</a>
                </span>
              </div>
            </div>
            <!--new earning end-->

            <!--total earning start-->
            <div class="panel green-chart">
              <div class="panel-body">
                <div class="chart">
                  <div class="heading">
                    <span>June</span>
                    <strong>23 Days | 65%</strong>
                  </div>
                  <div id="barchart"></div>
                </div>
              </div>
              <div class="chart-tittle">
                <span class="title">Total Earning</span>
                <span class="value">$, 76,54,678</span>
              </div>
            </div>
            <!--total earning end-->
          </div>
        </div>

      </div>
      <div class="row">
        <div class="col-lg-8">
          <!--latest product info start-->
          <section class="panel post-wrap pro-box">
            <aside>
              <div class="post-info">
                <span class="arrow-pro right"></span>
                <div class="panel-body">
                  <h1><strong>Bán chạy</strong> <br> Sản phẩm của tuần</h1>
                  <div class="desk">
                    <h3><?php echo $row['product_name']; ?></h3>
                    <p><?php echo $row['description']; ?></p>
                  </div>
                  <div class="post-btn">
                    <a href="javascript:;">
                      <i class="icon-chevron-sign-left"></i>
                    </a>
                    <a href="javascript:;">
                      <i class="icon-chevron-sign-right"></i>
                    </a>
                  </div>
                </div>
              </div>
            </aside>
            <aside class="post-highlight yellow v-align">
              <div class="panel-body text-center">
                <div class="pro-thumb">
                  <img src="img/products/<?php echo $row['image1']; ?>" alt="">
                </div>
              </div>
            </aside>
          </section>
          <!--latest product info end-->
        </div>
        <div class="col-lg-4">
             <div class="weather-bg">
              <div class="panel-body">
                <div class="row">
                  <div class="col-xs-6">
                    <i class="icon-cloud"></i>
                    California
                  </div>
                  <div class="col-xs-6">
                    <div class="degree">
                      24°
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <footer class="weather-category">
              <ul>
                <li class="active">
                  <h5>humidity</h5>
                  56%
                </li>
                <li>
                  <h5>precip</h5>
                  1.50 in
                </li>
                <li>
                  <h5>winds</h5>
                  10 mph
                </li>
              </ul>
            </footer>
        </div>
      </div>

    </section>
  </section>
  <!--main content end-->
  <!--footer start-->
  <footer class="site-footer">
    <div class="text-center">
      2018 Admega Management Page
      <a href="#" class="go-top">
        <i class="icon-angle-up"></i>
      </a>
    </div>
  </footer>
  <!--footer end-->
</section>

<!-- js placed at the end of the document so the pages load faster -->
<script src="js/bootstrap.min.js"></script>
<script class="include" type="text/javascript" src="js/jquery.dcjqaccordion.2.7.js"></script>
<script src="js/jquery.scrollTo.min.js"></script>
<script src="js/jquery.nicescroll.js" type="text/javascript"></script>
<script src="js/jquery.sparkline.js" type="text/javascript"></script>
<script src="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
<script src="js/owl.carousel.js" ></script>
<script src="js/jquery.customSelect.min.js" ></script>
<script src="js/respond.min.js" ></script>

<!--common script for all pages-->
<script src="js/common-scripts.js"></script>

<!--script for this page-->
<script src="js/sparkline-chart.js"></script>
<script src="js/easy-pie-chart.js"></script>
<script src="js/count.js"></script>

<script>

      //owl carousel

      $(document).ready(function() {
        $("#owl-demo").owlCarousel({
          navigation : true,
          slideSpeed : 300,
          paginationSpeed : 400,
          singleItem : true,
          autoPlay:true

        });
      });

      //custom select box

      $(function(){
        $('select.styled').customSelect();
      });

    </script>

    <script>
      <?php
      if(isset($_SESSION['success'])){
        echo "swal('Success!', 'Đăng nhập thành công!', 'success');";
        unset($_SESSION['success']);
      }
      ?>
    </script>

  </body>
  </html>
