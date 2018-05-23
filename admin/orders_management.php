<?php session_start();
require '../configs/connect.php';
include '../business/orderBusiness.php';
if(!isset($_SESSION['admin'])){
	header('Location: login.php');
}   
$sql = "select * from orders, users, order_statuses where orders.user_id = users.user_id and orders.status_id = order_statuses.status_id";
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

	<title>Quản lí đơn hàng</title>
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
								Quản lí đơn hàng <div class="pull-right"> 
								</div>
							</header>
							<table class="table table-striped table-advance table-hover" id='order_tbl'>
								<thead>
									<tr>
										<th><i class=""></i> Mã đơn hàng</th>
										<th><i class=""></i> Khách hàng </th>
										<th><i class=""></i> Tên người nhận</th>
										<th><i class=""></i> Số điện thoại </th>
										<th><i class=""></i> Địa chỉ</th>
										<th><i class=""></i> Ghi chú </th>
										<th><i class=""></i> Tổng giá trị</th>
										<th><i class=""></i> Ngày tạo</th>
										<th><i class=""></i> Trạng thái </th>
										<th><?php $nbsp ?></th>
									</tr>
								</thead>
								<tbody>
									<?php while($row = mysqli_fetch_assoc($query)) 
									{ 
										?>
										<tr>
											<form method="post" action="../business/orderBusiness.php">
												<td class="order_row" data-id="<?php echo $row['status_id']?>"><a href="#"><?php echo $row['order_id']?></a></td></div>
												<td><a href="#"><?php echo $row['name']?></a></td>
												<td><?php echo $row['receiver_name']?></td>
												<td><?php echo $row['receiver_phone']?></td>
												<td><?php echo $row['receiver_address']?></td>
												<td><?php echo $row['description']?></td>
												<td><?php echo number_format($row['total_price'])?></td>
												<td><?php echo $row['open_date']?></td>
												<input name="order_id" type="hidden" value="<?php echo $row['order_id']?>"/>
												<td><select name="btn_upd" class="btn_upd"><?php load_statuses()?></select><td> 
													<button type="submit" class='btn btn-success btn-xs open_update_modal'><i class='glyphicon glyphicon-refresh'></i></button>
												</td>
											</form>
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
		$('#order_tbl').DataTable();
	} );
</script>

<!-- Hiển thị thông báo -->
<script>
	<?php
	if(isset($_SESSION['success'])){
		echo "swal('Xử lí thành công!', 'Xử lí đơn hàng thành công!', 'success');";
		unset($_SESSION['success']);
	}
	if(isset($_SESSION['fails'])){
		unset($_SESSION['fails']);
	}
	?>
</script>

<!-- Load current status -->
<script type="text/javascript">
  $(document).ready( function (){
  	
    $('.order_row').each(function(){
    	var $id = $(this).data('id');
    	$(this).parent().find('.btn_upd').val($id);
    	//$('.btn_upd').val($id);
    });
  });
</script>