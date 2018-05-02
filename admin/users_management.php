<?php session_start();
require '../configs/connect.php';
include '../business/userBusiness.php';
if(!isset($_SESSION['admin'])){
  header('Location: login.php');
} 
load_admin();
// if(isset($_SESSION['message'])){
//   if($_SESSION['message']=="success"){
//      echo "<script>
//              sweetAlert('Congratulations!', 'Action success!!', 'success');
//          </script>";
//     }    
//   if($_SESSION['message']=="fail"){
//     echo "<script>
//             sweetAlert('Congratulations!', 'Action fail!!', 'error');
//         </script>";
//   }
// }
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
  <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
  </head>
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/bootstrap-reset.css" rel="stylesheet">
  <!--external css-->
  <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet" />
  <?php  include'components/style.php'; ?>
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
                Quản lí người dùng <div class="pull-right"> 
                  <a class="btn btn-success btn-sm" data-toggle="modal" data-target="#myModal" ><i class="icon-plus"></i> Thêm mới</a> 
                </div>
              </header>
              <table class="table table-striped table-advance table-hover">
                <thead>
                  <tr>
                    <th><i class=""></i> Tên đăng nhập</th>
                    <th class="hidden-phone"><i class=""></i> Tên</th>
                    <th><i class=""></i> Email</th>
                    <th><i class=""></i> Số điện thoại</th>
                    <th><i class=""></i> Địa chỉ</th>
                    <th><i class=""></i> Điểm</th>
                    <th><i class=""></i> Loại thành viên</th>
                    <th><i class=""></i> Trạng thái</th>
                    <th><?php $nbsp ?></th>
                  </tr>
                </thead>
                <tbody>

                  <?php while($row = mysqli_fetch_assoc($query)) 
                  { 
                    ?>
                    <tr>
                      <td><a href="#"><?php echo $row['username']?></a></td>
                      <td class='hidden-phone'><?php echo $row['name']?></td>
                      <td><?php echo $row['email']?></td>
                      <td><?php echo $row['phone']?></td>
                      <td><?php echo $row['address']?></td>
                      <td><?php echo $row['point']?></td>
                      <td><?php echo $row['membership_title']?></td>
                      <td><span class='label label-info label-mini'><?php echo $row['status']?></span></td>
                      <td> 
                        <button class='btn btn-success btn-xs'><i class='icon-eye-open open_detail_modal' data-target="#details_modal" data-toggle='modal' 
                          data-id="<?php echo $row['user_id']?>"
                          data-username="<?php echo $row['username']?>"
                          data-name="<?php echo $row['name']?>"
                          data-avatar="<?php echo $row['avatar']?>"
                          data-email="<?php echo $row['email']?>"
                          data-address="<?php echo $row['address']?>"
                          data-phone="<?php echo $row['phone']?>"
                          data-point="<?php echo $row['point']?>"
                          data-status="<?php echo $row['status']?>"
                          data-membership="<?php echo $row['membership_title']?>"></i></button>
                          <button class='btn btn-primary btn-xs' href=""><i class='icon-pencil'></i></button>
                          <a href="../business/userBusiness.php?del=<?php echo $row['user_id'];?>"><button class='btn btn-danger btn-xs'><i class='icon-trash'></i></button></a>
                        </td>
                      </tr>
                      <?php } ?>
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
      <!-- The scripts file will be put here -->
      <!-- js placed at the end of the document so the pages load faster -->
      <script src="js/jquery.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script class="include" type="text/javascript" src="js/jquery.dcjqaccordion.2.7.js"></script>
      <script src="js/jquery.scrollTo.min.js"></script>
      <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
      <script src="js/respond.min.js" ></script>

      <!--common script for all pages-->
      <script src="js/common-scripts.js"></script>
      <?php  include'components/scripts.php'; ?>


    </body>
    </html>
    <!-- Adding Modal -->
    <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title">Thêm mới người dùng</h4>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="col-lg-12">
                <section class="panel">
                  <div class="panel-body">
                    <div class="form">
                      <?php  include'components/user_form.php'; ?>
                    </div>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </form>
  <!-- modal --> 

  
  <!-- User Details Modal -->
  <div class="modal fade" id="details_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="text-danger fa fa-times"></i></button>
          <h4 class="modal-title" id="myModalLabel"><i class="text-muted fa fa-shopping-cart"></i> 
            <strong>Tài khoản</strong> - </h4>
          </div>

          <div class="modal-body">
            <table class="pull-left col-md-8 ">
             <tbody>
               <tr>
                 <td class="h6"><strong>ID</strong></td>
                 <td> </td>
                 <td class="h5" id="row_user_id"></td>
               </tr>

               <tr>
                 <td class="h6"><strong>Tên đăng nhập</strong></td>
                 <td> </td>
                 <td class="h5" id="row_username"></td>
               </tr>

               <tr>
                 <td class="h6"><strong>Tên</strong></td>
                 <td> </td>
                 <td class="h5" id="row_user_name"></td>
               </tr>

               <tr>
                 <td class="h6"><strong>Email</strong></td>
                 <td> </td>
                 <td class="h5" id="row_user_email"></td>
               </tr>

               <tr>
                 <td class="h6"><strong>Địa chỉ</strong></td>
                 <td> </td>
                 <td class="h5" id="row_user_address"></td>
               </tr>

               <tr>
                 <td class="h6"><strong>Số điện thoại</strong></td>
                 <td> </td>
                 <td class="h5" id="row_user_phone"></td>
               </tr>  

               <tr>
                 <td class="h6"><strong>Điểm</strong></td>
                 <td> </td>
                 <td class="h5" id="row_user_point"></td>
               </tr>                            

               <tr>
                 <td class="h6"><strong>Thành viên</strong></td>
                 <td> </td>
                 <td class="h5" id="row_user_membership"></td>
               </tr>

               <tr>
                 <td class="h6"><strong>Trạng thái</strong></td>
                 <td> </td>
                 <td class="h5" id="row_user_status"></td>
               </tr> 

               <tr>
                 <td class="btn-mais-info text-primary">
                   <i class="open_info fa fa-plus-square-o"></i>
                   <i class="open_info hide fa fa-minus-square-o"></i> informações
                 </td>
                 <td> </td>
                 <td class="h5"></td>
               </tr> 

             </tbody>
           </table>


           <div class="col-md-4"> 
            <img src="#" alt="teste" class="img-thumbnail">  
          </div>

          <div class="clearfix"></div>
          <p class="open_info hide">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
        </div>

        <div class="modal-footer">       

          <div class="text-right pull-right col-md-3">
            Varejo: <br/> 
            <span class="h3 text-muted"><strong> R$50,00 </strong></span></span> 
          </div> 

          <div class="text-right pull-right col-md-3">
            Atacado: <br/> 
            <span class="h3 text-muted"><strong>R$35,00</strong></span>
          </div>

        </div>
      </div>
    </div>
  </div>
  <!-- End-->   



  <!-- Auto dismiss alert-->
  <script type="text/javascript">
    window.setTimeout(function() {
      $(".alert").fadeTo(500, 0).slideUp(500, function(){
        $(this).remove(); 
      });
    }, 2000);
  </script>

  <!-- Passing Data -->
  <script type="text/javascript">
    $(function () {
      $(".open_detail_modal").click(function () {
       var $user_id = $(this).data('id');
       var $username =$(this).data('username');
       var $name = $(this).data('name');
       var $email = $(this).data('email');
       var $address = $(this).data('address');
       var $phone = $(this).data('phone');
       var $point = $(this).data('point');
       var $membership = $(this).data('membership');
       var $status =$(this).data('status');
       var $avatar = $(this).data('avatar');
       $("#row_user_id").html($user_id);
       $("#row_username").html($username);
       $("#row_user_name").html($name);
       $("#row_user_email").html($email);
       $("#row_user_address").html($address);
       $("#row_user_phone").html($phone);
       $("#row_user_point").html($point);
       $("#row_user_membership").html($membership);
       $("#row_user_status").html($status);
       $("#row_user_avatar").html($avatar);
       $("#details_modal").modal("show");
     })
    });
  </script>