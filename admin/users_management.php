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
  <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
  </head>
  <?php  include 'components/style.php';
  include 'components/scripts.php'; ?>
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
              <table class="table table-striped table-advance table-hover" id="user_man_tbl">
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
                        <button class='btn btn-success btn-xs open_detail_modal' 
                        data-id="<?php echo $row['user_id']?>"
                        data-username="<?php echo $row['username']?>"
                        data-name="<?php echo $row['name']?>"
                        data-avatar="<?php echo $row['avatar']?>"
                        data-email="<?php echo $row['email']?>"
                        data-address="<?php echo $row['address']?>"
                        data-phone="<?php echo $row['phone']?>"
                        data-point="<?php echo $row['point']?>"
                        data-status="<?php echo $row['status']?>"
                        data-membership="<?php echo $row['membership_title']?>" ><i class='icon-eye-open '  
                        ></i></button>

                        <button class='btn btn-primary btn-xs open_update_modal' 
                        data-id="<?php echo $row['user_id']?>"
                        data-username="<?php echo $row['username']?>"
                        data-name="<?php echo $row['name']?>"
                        data-email="<?php echo $row['email']?>"
                        data-password="<?php echo $row['password']?>"
                        data-address="<?php echo $row['address']?>"
                        data-phone="<?php echo $row['phone']?>"><i class='icon-pencil '></i></button>

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

    <!-- Hiển thị thông báo -->
    <script>
      <?php
      if(isset($_SESSION['success'])){
        echo "swal('Success!', 'Thao tác thành công!', 'success');";
        unset($_SESSION['success']);
      }
      if(isset($_SESSION['fails'])){
        unset($_SESSION['fails']);
      }
      ?>
    </script>
  </body>
  </html>

  <!-- Adding/Updating Modal -->
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
                    <form class="cmxform form-horizontal tasi-form" method="post" action='../business/userBusiness.php'>
                      <div class="form-group ">
                        <label for="firstname" class="control-label col-lg-3">Tên</label>
                        <div class="col-sm-9">
                          <input class=" form-control" placeholder="Tên đầy đủ" id="name" name="name" type="text" />
                        </div>
                      </div>
                      <div class="form-group ">
                        <label for="lastname" class="control-label col-lg-3">Tên đăng nhập</label>
                        <div class="col-lg-9">
                          <input class=" form-control" placeholder="Tên đăng nhập" id="username" name="username" type="text" />
                        </div>
                      </div>
                      <div class="form-group ">
                        <label for="username" class="control-label col-lg-3">Email</label>
                        <div class="col-lg-9">
                          <input class="form-control " placeholder="Email" id="email" name="email" type="email" />
                        </div>
                      </div>
                      <div class="form-group ">
                        <label for="password" class="control-label col-lg-3">Password</label>
                        <div class="col-lg-9">
                          <input class="form-control " placeholder="password" id="password" name="password" type="password" />
                        </div>
                      </div>
                      <div class="form-group ">
                        <label for="confirm_password" class="control-label col-lg-3">Số điện thoại</label>
                        <div class="col-lg-9">
                          <input class="form-control " placeholder="Số điện thoại" id="phone" name="phone" type="text" />
                        </div>
                      </div>
                      <div class="form-group ">
                        <label for="email" class="control-label col-lg-3">Địa chỉ</label>
                        <div class="col-lg-9">
                          <input class="form-control " placeholder="Địa chỉ" id="address" name="address" type="text" />
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-lg-offset-2 col-lg-10">
                          <button class="btn btn-danger pull-right" type="submit" name="admin_create_user" value="admin_create_user" >Lưu</button>
                          <button class="btn btn-default pull-right" data-dismiss="modal" type="button">Hủy</button>
                        </div>
                      </div>
                    </form>
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
                 <i class="open_info hide fa fa-minus-square-o"></i> Thông tin chi tiết
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
        <p class="open_info hide">Thông tin chi tiết của người dùng thôi mà. Hiện tại chưa có gì đâu.</p>
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


<!-- Updating Modal -->
<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="updateModal" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Cập nhật thông tin người dùng</h4>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <div class="panel-body">
                <div class="form">
                  <form class="cmxform form-horizontal tasi-form" method="post" action='../business/userBusiness.php'>
                    <div class="form-group ">
                      <label for="firstname" class="control-label col-lg-3">Tên</label>
                      <div class="col-sm-9">
                        <input class=" form-control" id="user_upd_name" name="user_upd_name" type="text" />
                      </div>
                    </div>
                    <input id="user_upd_user_id" name="user_upd_user_id" type="hidden" />
                    <div class="form-group ">
                      <label for="lastname" class="control-label col-lg-3">Tên đăng nhập</label>
                      <div class="col-lg-9">
                        <input class=" form-control" id="user_upd_username" name="user_upd_username" type="text" />
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="username" class="control-label col-lg-3">Email</label>
                      <div class="col-lg-9">
                        <input class="form-control " id="user_upd_email" name="user_upd_email" type="email" />
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="password" class="control-label col-lg-3">Password</label>
                      <div class="col-lg-9">
                        <input class="form-control " id="user_upd_password" name="user_upd_password" type="password" />
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="confirm_password" class="control-label col-lg-3">Số điện thoại</label>
                      <div class="col-lg-9">
                        <input class="form-control " id="user_upd_phone" name="user_upd_phone" type="text" />
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="email" class="control-label col-lg-3">Địa chỉ</label>
                      <div class="col-lg-9">
                        <input class="form-control " id="user_upd_address" name="user_upd_address" type="text" />
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-lg-offset-2 col-lg-10">
                        <button class="btn btn-danger pull-right" type="submit" name="admin_update_user" value="admin_update_user" >Lưu</button>
                        <button class="btn btn-default pull-right" data-dismiss="modal" type="button">Hủy</button>
                      </div>
                    </div>
                  </form>
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

<!-- Auto dismiss alert-->
<script type="text/javascript">
  window.setTimeout(function() {
    $(".alert").fadeTo(500, 0).slideUp(500, function(){
      $(this).remove(); 
    });
  }, 2000);
</script>

<!-- Passing Data to User Details Modal -->
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


<!-- Passing Data to Edits Modal -->
<script type="text/javascript">
  $(function () {
    $(".open_update_modal").click(function () {
     var $user_id = $(this).data('id');
     var $name = $(this).data('name');
     var $username =$(this).data('username');
     var $email = $(this).data('email');
     var $password = $(this).data('email');
     var $address = $(this).data('address');
     var $phone = $(this).data('phone');

     $("#user_upd_user_id").val($user_id);
     $("#user_upd_name").val($name);
     $("#user_upd_username").val($username);
     $("#user_upd_email").val($email);
     $("#user_upd_password").val($password);
     $("#user_upd_address").val($address);
     $("#user_upd_phone").val($phone);

     $("#updateModal").modal("show");
   })
  });
</script>

<script type="text/javascript">
  $(document).ready( function () {
    $('#user_man_tbl').DataTable();
  } );
</script>