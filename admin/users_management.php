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
                    <button class='btn btn-success btn-xs'><i class='icon-eye-open' data-toggle='modal' data-target='#detailsModal'></i></button>
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
<div class="modal" id="detailsModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="text-danger fa fa-times"></i></button>
        <h4 class="modal-title" id="myModalLabel"><i class="text-muted fa fa-shopping-cart"></i> <strong>Tài khoản</strong> - <?php echo $row['name']; ?> </h4>
      </div>
      <div class="modal-body">

        <table class="pull-left col-md-8 ">
         <tbody>
           <tr>
             <td class="h6"><strong>Código</strong></td>
             <td> </td>
             <td class="h5">02051</td>
           </tr>

           <tr>
             <td class="h6"><strong>Descrição</strong></td>
             <td> </td>
             <td class="h5">descrição do produto</td>
           </tr>

           <tr>
             <td class="h6"><strong>Marca/Fornecedor</strong></td>
             <td> </td>
             <td class="h5">Marca do produto</td>
           </tr>

           <tr>
             <td class="h6"><strong>Número Original</strong></td>
             <td> </td>
             <td class="h5">0230316</td>
           </tr>

           <tr>
             <td class="h6"><strong>Código N.C.M</strong></td>
             <td> </td>
             <td class="h5">032165</td>
           </tr>

           <tr>
             <td class="h6"><strong>Código de Barras</strong></td>
             <td> </td>
             <td class="h5">0321649843</td>
           </tr>  

           <tr>
             <td class="h6"><strong>Unid. por Embalagem</strong></td>
             <td> </td>
             <td class="h5">50</td>
           </tr>                            

           <tr>
             <td class="h6"><strong>Quantidade Mínima</strong></td>
             <td> </td>
             <td class="h5">50</td>
           </tr>

           <tr>
             <td class="h6"><strong>Preço Atacado</strong></td>
             <td> </td>
             <td class="h5">R$ 35,00</td>
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
<!-- fim Modal-->    

<!-- Auto dismiss alert-->
<script type="text/javascript">
  window.setTimeout(function() {
    $(".alert").fadeTo(500, 0).slideUp(500, function(){
      $(this).remove(); 
    });
  }, 2000);
</script>