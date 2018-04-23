<?php session_start();
  require '../configs/connect.php';
  include '../business/userBusiness.php';
  if(!isset($_SESSION['admin'])){
    header('Location: login.php');
  } 
  load_admin();
  $sql = "select * from users as a, memberships as b, user_statuses as c 
  		  where a.membership_id = b.membership_id
  		  and a.status_id = c.status_id";
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

    <title>Quản lí người dùng</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

  <section id="container" class="">
     <!--header start-->
      <?php  include'components/topbar.php'; ?>
      <!--header end-->
      <!--sidebar start-->
      <?php  include'components/sidebar.php'; ?>
      <!--sidebar end-->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper site-min-height">
              <!-- page start-->
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                              Quản lí người dùng
                          </header>
                          <table class="table table-striped table-advance table-hover">
                              <thead>
                              <tr>
                                  <th><i class="icon-bullhorn"></i> Tên đăng nhập</th>
                                  <th class="hidden-phone"><i class="icon-question-sign"></i> Tên</th>
                                  <th><i class="icon-bookmark"></i> Email</th>
                                  <th><i class=" icon-edit"></i> Số điện thoại</th>
                                  <th><i class=" icon-edit"></i> Địa chỉ</th>
                                  <th><i class=" icon-edit"></i> Điểm</th>
                                  <th><i class=" icon-edit"></i> Loại thành viên</th>
                                  <th><i class=" icon-edit"></i> Trạng thái</th>
                                  <th><?php $nbsp ?></th>
                              </tr>
                              </thead>
                              <tbody>
                              
                              <?php while($row = mysqli_fetch_assoc($query)) 
                 				 {
                    				echo "<tr>
	                                  <td><a href='#'>".$row['username']."</a></td>
	                                  <td class='hidden-phone'>".$row['name']."</td>
	                                  <td>".$row['email']."</td>
	                                  <td>".$row['phone']."</td>
	                                  <td>".$row['address']."</td>
	                                  <td>".$row['point']."</td>
	                                  <td>".$row['membership_title']."</td>
	                                  <td><span class='label label-info label-mini'>".$row['status']."</span></td>
	                                  <td>
	                                      <button class='btn btn-success btn-xs'><i class='icon-ok'></i></button>
	                                      <button class='btn btn-primary btn-xs'><i class='icon-pencil'></i></button>
	                                      <button class='btn btn-danger btn-xs'><i class='icon-trash'></i></button>
	                                  </td>
                             		</tr> ";
                  			      }
               				  ?>
                              </tbody>
                          </table>
                      </section>
                  </div>
              </div>
              <!-- page end-->
          </section>
      </section>
      <!--main content end-->
      <!--footer start-->
      <footer class="site-footer">
          <div class="text-center">
              2013 &copy; FlatLab by VectorLab.
              <a href="#" class="go-top">
                  <i class="icon-angle-up"></i>
              </a>
          </div>
      </footer>
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="js/respond.min.js" ></script>

    <!--common script for all pages-->
    <script src="js/common-scripts.js"></script>


  </body>
</html>
