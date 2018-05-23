<?php session_start();
require '../configs/connect.php';
include '../business/commentBusiness.php';
if(!isset($_SESSION['admin'])){
	header('Location: login.php');
}   
$sql = "select c.*, c.status_id as c_status, p.*, s.*, u.*, u.name as uname from comments c, products p, comment_statuses s, users u where c.user_id = u.user_id and c. product_id = p.product_id and c.status_id = s.status_id";
$query = mysqli_query($conn,$sql);
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

	<title>Quản lí bình luận</title>
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
								Quản lí bình luận <div class="pull-right"> 
								</div>
							</header>
							<table class="table table-striped table-advance table-hover" id='cmnt_tbl'>
								<thead>
									<tr>
										<th class="col-sm-1"><i class=""></i> Người bình luận</th>
										<th class="col-sm-1"><i></i> Người dùng </th>
										<th class="col-sm-2"><i ></i> Tại</th>
										<th class="col-sm-1"><i ></i> Mô tả ngắn </th>
										<th class="col-sm-3"><i ></i> Chi tiết</th>
										<th class="col-sm-1"><i ></i> Trạng thái</th>
										<th class="col-sm-1"><i ></i> Ngày tạo</th>
										<th class="col-sm-2"><?php $nbsp ?></th>
									</tr>
								</thead>
								<tbody>
									<?php while($row = mysqli_fetch_assoc($query)) 
									{ 
										?>
										<tr>
											<form method="post" action="../business/commentBusiness.php">
												<td class="sts_row" data-id="<?php echo $row['c_status']?>"><a href="#"><?php echo $row['reviewer']?></a></td>
												<td><a href="#"><?php echo $row['uname']?></a></td>
												<td><?php echo $row['product_name']?></td>
												<td><?php echo $row['short_review']?></td>
												<td><?php echo $row['content']?></td>
												<td><select name="btn_upd" class="btn_upd"><?php load_statuses()?></select></td> 
												<td><?php echo $row['create_at']?></td>
												<input name="cmt_id" type="hidden" value="<?php echo $row['comment_id']?>"/>
												<td><button type="submit" name='upd_cmt' class='btn btn-success btn-xs' title="Thay đổi trạng thái"><i class='glyphicon glyphicon-refresh'></i></button> </form>
												<a href="../business/commentBusiness.php?del=<?php echo $row['comment_id'];?>"><button class='btn btn-danger btn-xs'><i class='icon-trash'></i></button></a>
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

</body>
</html>

<script type="text/javascript">
	$(document).ready( function () {
		$('#cmnt_tbl').DataTable();
	} );
</script>

<!-- Hiển thị thông báo -->
<script>
	<?php
	if(isset($_SESSION['u_success'])){
		echo "swal('Xử lí thành công!', 'Xử lí bình luận thành công!', 'success');";
		unset($_SESSION['u_success']);
	}
	if(isset($_SESSION['d_success'])){
		echo "swal('Xử lí thành công!', 'Đã xóa bình luận!', 'success');";
		unset($_SESSION['d_success']);
	}
	if(isset($_SESSION['fails'])){
		unset($_SESSION['fails']);
	}
	?>
</script>

<!-- Load current status -->
<script type="text/javascript">
	$(document).ready( function (){

		$('.sts_row').each(function(){
			var $id = $(this).data('id');
			$(this).parent().find('.btn_upd').val($id);
    	//$('.btn_upd').val($id);
    });
	});
</script>