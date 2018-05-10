<?php session_start();
require '../configs/connect.php';
include '../business/categoryBusiness.php';
if(!isset($_SESSION['admin'])){
	header('Location: login.php');
}   
$sql = "select * from categories";
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

	<title>Quản lí danh mục</title>
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
								Quản lí danh mục <div class="pull-right"> 
									<a class="btn btn-success btn-sm" data-toggle="modal" data-target="#myModal" ><i class="icon-plus"></i> Thêm mới</a> 
								</div>
							</header>
							<table class="table table-striped table-advance table-hover" id='cat_man_tbl'>
								<thead>
									<tr>
										<th><i class=""></i> Tên</th>
										<th><i class=""></i> Mô tả</th>
										<th><?php $nbsp ?></th>
									</tr>
								</thead>
								<tbody>

									<?php while($row = mysqli_fetch_assoc($query)) 
									{ 
										?>
										<tr>
											<td><a href="#"><?php echo $row['category_name']?></a></td>
											<td><?php echo $row['description']?></td>
											<td> 

												<button class='btn btn-primary btn-xs open_update_modal' 
												data-id="<?php echo $row['category_id']?>"
												data-name="<?php echo $row['category_name']?>"
												data-description="<?php echo $row['description']?>"><i class='icon-pencil '></i></button>

												<a href="../business/categoryBusiness.php?del=<?php echo $row['category_id'];?>"><button class='btn btn-danger btn-xs'><i class='icon-trash'></i></button></a>
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

	<!-- Adding -->
	<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title">Thêm mới danh mục</h4>
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="col-lg-12">
							<section class="panel">
								<div class="panel-body">
									<div class="form">
										<form class="cmxform form-horizontal tasi-form" method="post" action='../business/categoryBusiness.php'>
											<div class="form-group ">
												<label for="name" class="control-label col-lg-3">Tên</label>
												<div class="col-lg-9">
													<input class=" form-control" placeholder="Tên danh mục " id="cat_insr_name" name="cat_insr_name" type="text" />
												</div>
											</div>
											<div class="form-group ">
												<label for="description" class="control-label col-lg-3">Mô tả</label>
												<div class="col-lg-9">
													<textarea class="form-control " placeholder="Mô tả" id="cat_insr_des" name="cat_insr_des" row="3"></textarea> 
												</div>
											</div>
											<div class="form-group">
												<div class="col-lg-offset-2 col-lg-10">
													<button class="btn btn-danger pull-right" type="submit" name="new_cat" value="new_cat" >Lưu</button>
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
									<form class="cmxform form-horizontal tasi-form" method="post" action='../business/categoryBusiness.php'>
										<input id="cat_upd_id" name="cat_upd_id" type="hidden" />
										<div class="form-group ">
											<label for="name" class="control-label col-lg-3">Tên</label>
											<div class="col-lg-9">
												<input class=" form-control" id="cat_upd_name" name="cat_upd_name" type="text" />
											</div>
										</div>
										<div class="form-group ">
											<label for="description" class="control-label col-lg-3">Mô tả</label>
											<div class="col-lg-9">
												<textarea class="form-control " id="cat_upd_des" name="cat_upd_des" row="3"></textarea> 
											</div>
										</div>
										<div class="form-group">
											<div class="col-lg-offset-2 col-lg-10">
												<button class="btn btn-danger pull-right" type="submit" name="update_cat" value="update_cat" >Lưu</button>
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


<!-- Passing Data to Edits Modal -->
<script type="text/javascript">
	$(function () {
		$(".open_update_modal").click(function () {
			var $category_id = $(this).data('id');
			var $name = $(this).data('name');
			var $description = $(this).data('description');
			$("#cat_upd_id").val($category_id);
			$("#cat_upd_name").val($name);
			$("#cat_upd_des").val($description);
			
			$("#updateModal").modal("show");
		})
	});
</script>

<script type="text/javascript">
  $(document).ready( function () {
    $('#cat_man_tbl').DataTable();
  } );
</script>