<?php session_start();
require '../configs/connect.php';
include '../business/userBusiness.php';
include '../business/manufactureBusiness.php';
if(!isset($_SESSION['admin'])){
	header('Location: login.php');
} 
load_admin();
$sql = "select * from manufactures";
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

	<title>Quản lí nhãn hàng</title>

	<!-- Bootstrap core CSS -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/bootstrap-reset.css" rel="stylesheet">
	<!--external css-->
	<link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
	<!-- Custom styles for this template -->
	<link href="css/style.css" rel="stylesheet">
	<link href="css/style-responsive.css" rel="stylesheet" />
	<link href="css/sweet-alert.css" rel="stylesheet">
	<script src="js/jquery.js"></script>
	<script src="js/sweet-alert.js"></script>


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
								Quản lí nhãn hàng <div class="pull-right"> 
									<a class="btn btn-success btn-sm" data-toggle="modal" data-target="#myModal" ><i class="icon-plus"></i> Thêm mới</a> 
								</div>
							</header>
							<table class="table table-striped table-advance table-hover">
								<thead>
									<tr>
										<th class="col-md-2"><i class=""></i> Hình ảnh</th>
										<th class="col-md-2"><i class=""></i> Tên hãng</th>
										<th class="col-md-6"><i class=""></i> Mô tả</th>
										<th class="col-md-2 pull-right"><?php $nbsp ?></th>
									</tr>
								</thead>
								<tbody>

									<?php while($row = mysqli_fetch_assoc($query)) 
									{ 
										?>
										<tr>
											<td><a href="#"><img src="<?php echo $row['image']?>" alt="<?php echo $row['name']?>" height="50" width="50"></a></td>
											<td class='hidden-phone'><?php echo $row['name']?></td>
											<td><?php echo $row['description']?></td>
											<td> 
												<button class='btn btn-success btn-xs open_detail_modal' 
												data-id="<?php echo $row['manufacture_id']?>"
												data-image="<?php echo $row['image']?>"
												data-name="<?php echo $row['name']?>"
												data-description="<?php echo $row['description']?>"><i class='icon-eye-open '></i></button>

												<button class='btn btn-primary btn-xs open_update_modal' 
												data-id="<?php echo $row['manufacture_id']?>"
												data-image="<?php echo $row['image']?>"
												data-name="<?php echo $row['name']?>"
												data-description="<?php echo $row['description']?>"><i class='icon-pencil '></i></button>

												<a href="../business/manufactureBusiness.php?del=<?php echo $row['manufacture_id'];?>"><button class='btn btn-danger btn-xs'><i class='icon-trash'></i></button></a>
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

	<!--common script for all pages-->
	<script src="js/common-scripts.js"></script>
</body>
</html>

<!-- Adding-->
<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Thêm mới hãng sản xuất</h4>
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
					<strong>Thông tin hãng</strong></h4>
				</div>

				<div class="modal-body">
					<table class="pull-left col-md-8 ">
						<tbody>
							<tr>
								<td class="h6 col-md-2" ><strong>ID</strong></td>
								<td> </td>
								<td class="h5" id="row_manufacture_id"></td>
							</tr>

							<tr>
								<td class="h6 col-md-2"><strong>Tên</strong></td>
								<td> </td>
								<td class="h5" id="row_manufacture_name"></td>
							</tr>

							<tr>
								<td class="h6 col-md-2"><strong>Description</strong></td>
								<td> </td>
								<td class="h5" id="row_manufacture_description"></td>
							</tr>
						</tbody>
					</table>


					<div class="col-md-4"> 
						<img src="#" alt="teste" class="img-thumbnail" id="man_img">  
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
					<h4 class="modal-title">Cập nhật thông tin</h4>
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="col-lg-12">
							<section class="panel">
								<div class="panel-body">
									<div class="form">
										<form class="cmxform form-horizontal tasi-form" method="post" action='../business/manufactureBusiness.php'>
											<div class="form-group ">
												<label for="firstname" class="control-label col-lg-3">Hình ảnh</label>
												<div class="col-sm-9">
													<input type="file" src="#" id="man_upd_img" name="man_upd_img" onclick="AjaxResponse()"/>
												</div>
											</div>
											<input id="man_upd_man_id" name="man_upd_man_id" type="hidden" />
											<div class="form-group ">
												<label for="lastname" class="control-label col-lg-3">Tên</label>
												<div class="col-lg-9">
													<input class=" form-control" id="man_upd_name" name="man_upd_name" type="text" />
												</div>
											</div>
											<div class="form-group ">
												<label for="username" class="control-label col-lg-3">Mô tả</label>
												<div class="col-lg-9">
													<textarea class="form-control " id="man_upd_des" name="man_upd_des" row="3"></textarea> 
												</div>
											</div>
											<div class="form-group">
												<div class="col-lg-offset-2 col-lg-10">
													<button class="btn btn-danger pull-right" type="submit" name="update_man" value="update_man" >Lưu</button>
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


<!-- Passing Data to User Details Modal -->
<script type="text/javascript">
	$(function () {
		$(".open_detail_modal").click(function () {
			var $manufacture_id = $(this).data('id');
			var $image =$(this).data('image');
			var $name = $(this).data('name');
			var $description = $(this).data('description');
			var img = document.getElementById('man_img');
			
			$("#row_manufacture_id").html($manufacture_id);
			$("#row_manufacture_name").html($name);
			$("#row_manufacture_description").html($description);
			img.src = $image;
			
			$("#details_modal").modal("show");
		})
	});
</script>


<!-- Passing Data to Edits Modal -->
<script type="text/javascript">
	$(function () {
		$(".open_update_modal").click(function () {
			var $manufacture_id = $(this).data('id');
			var $image =$(this).data('image');
			var $name = $(this).data('name');
			var $description = $(this).data('description');
			var img = document.getElementById('man_upd_img');
			
			$("#man_upd_man_id").val($manufacture_id);
			$("#man_upd_name").val($name);
			$("#man_upd_des").val($description);
			img.src = $image;

			$("#updateModal").modal("show");
		})
	});
</script>
