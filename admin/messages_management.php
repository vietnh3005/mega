<?php session_start();
require '../configs/connect.php';
if(!isset($_SESSION['admin'])){
	header('Location: login.php');
} 
$sql = "select * from messages m, users u where m.receiver_id = u.user_id and m.status_id='3' ";
$query = mysqli_query($conn,$sql);
?>  
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="Siegfried">
	<meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
	<link rel="shortcut icon" href="img/favicon.png">

	<title>Quản lí tin nhắn</title>
	<?php  include 'components/style.php';
	include 'components/scripts.php'; ?>
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
			<section class="wrapper">
				<!--mail inbox start-->
				<div class="mail-box">
					<aside class="sm-side">
						<div class="user-head">
							<a href="javascript:;" class="inbox-avatar">
								<img src="<?php echo $_SESSION['admin_avatar']; ?>" alt="" width="60" height="60">
							</a>
							<div class="user-name">
								<h5><a href="#"><?php echo $_SESSION['admin_name']; ?></a></h5>
							</div>
							<a href="javascript:;" class="mail-dropdown pull-right">
								<i class="icon-chevron-down"></i>
							</a>
						</div>
						<div class="inbox-body">
							<a class="btn btn-compose" data-toggle="modal" href="#myModal">
								Soạn tin nhắn
							</a>
							<!-- Modal -->
							<div class="modal fade " id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
								<div class="modal-dialog modal-lg">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
											<h4 class="modal-title">Soạn tin nhắn</h4>
										</div>
										<div class="modal-body">
											<form class="form-horizontal" id="send_mail" role="form" action="../business/messageBusiness.php" method="post">
												<div class="form-group">
													<label  class="col-lg-2 control-label">Gửi đến</label>
													<div class="col-lg-8">
														<input type="text" class="form-control" name="name" placeholder="" disabled>
													</div>
													<div class="col-lg-2">
														<a class="btn btn-success btn-sm" ><i class="icon-plus"></i> Thêm </a> 
													</div>
												</div>
												<div class="form-group">
													<label class="col-lg-2 control-label">Chủ đề</label>
													<div class="col-lg-10">
														<input type="text" class="form-control" name="mes_title" placeholder="">
													</div>
												</div>
												<div class="form-group">
													<label class="col-lg-2 control-label">Nội dung</label>
													<div class="col-lg-10">
														<textarea name="mes_content" class="form-control" cols="30" rows="10"></textarea>
													</div>
												</div>
												<input id="send_mes_command" name="command_type" type="hidden" />
												<div class="form-group">
													<div class="col-lg-offset-2 col-lg-10">
														<button type="submit" id="send_command" class="btn btn-send">Gửi</button>
													</div>
												</div>

											</form>
										</div>
									</div><!-- /.modal-content -->
								</div><!-- /.modal-dialog -->
							</div><!-- /.modal -->
						</div>

						<ul class="inbox-nav inbox-divider">
							<li>
								<a href="#"><i class="icon-envelope-alt"></i> Tin đã gửi</a>
							</li>
							<li>
								<a href="#"><i class="icon-bookmark-empty"></i> Tin thông báo</a>
							</li>
							<li>
								<a href="#"><i class=" icon-trash"></i> Tin đã xóa</a>
							</li>
						</ul>
						<ul class="nav nav-pills nav-stacked labels-info inbox-divider">
							<li> <h4>Labels</h4> </li>
							<li> <a href="#"> <i class=" icon-sign-blank text-danger"></i> Work </a> </li>
							<li> <a href="#"> <i class=" icon-sign-blank text-success"></i> Design </a> </li>
							<li> <a href="#"> <i class=" icon-sign-blank text-info "></i> Family </a>
								<li> <a href="#"> <i class=" icon-sign-blank text-warning "></i> Friends </a>
									<li> <a href="#"> <i class=" icon-sign-blank text-primary "></i> Office </a>
									</li>
								</ul>

								<div class="inbox-body text-center">
									<div class="btn-group">
										<a href="javascript:;" class="btn mini btn-primary">
											<i class="icon-plus"></i>
										</a>
									</div>
									<div class="btn-group">
										<a href="javascript:;" class="btn mini btn-success">
											<i class="icon-phone"></i>
										</a>
									</div>
									<div class="btn-group">
										<a href="javascript:;" class="btn mini btn-info">
											<i class="icon-cog"></i>
										</a>
									</div>
								</div>

							</aside>
							<aside class="lg-side">
								<div class="inbox-head">
									<h3>Tin đến</h3>
									<form class="pull-right position" action="#">
										<div class="input-append">
											<input type="text"  placeholder="Tìm kiếm" class="sr-input">
											<button type="button" class="btn sr-btn"><i class="icon-search"></i></button>
										</div>
									</form>
								</div>
								<form id="data_form" method="post" action="../business/messageBusiness.php">
									<div class="inbox-body">
										<div class="mail-option">
											<div class="chk-all" >
												<input type="checkbox" id="select_all" class="mail-checkbox mail-group-checkbox">
												<div class="btn-group" >
													Tất cả
												</a>
											</div>
										</div>

										<div class="btn-group">
											<a class="btn mini tooltips" href="#" data-toggle="dropdown" data-placement="top" data-original-title="Refresh">
												<i class=" icon-refresh"></i>
											</a>
										</div>
										<div class="btn-group hidden-phone">
											<a href="#" id="delete_command"><i class="icon-trash"></i> Xóa</a>
											<input id="command_type" name="command_type" type="hidden" />
										</div>
									</div>
									<table id="message_tbl" class="table table-inbox table-hover">
										<thead>
											<tr>
												<th class=""><i class=""><?php $nbsp ?></i></th>
												<th class=""><i><?php $nbsp ?></i></th>
												<th class=""><i ></i> Người nhận</th>
												<th class=""><i ></i> Tiêu đề </th>
												<th class=""><i ></i> Loại</th>
												<th class="text-right"><i ></i> Ngày tạo</th>
											</tr>
										</thead>
										<tbody>
											<?php while($row = mysqli_fetch_assoc($query)){ ?>
												<tr class='unread'>
													<td class='inbox-small-cells'>
														<input type='checkbox' name="checkbox[]" value="<?php echo $row['message_id']; ?>" class='mail-checkbox'>
													</td>
													<td class='inbox-small-cells'><i class='icon-star'></i></td>
													<td class='view-message  dont-show'> <?php echo $row['name'] ?></td>
													<td class='view-message ''><?php echo $row['title'] ?></td>
													<td class='view-message  inbox-small-cells'></td>
													<td class='view-message  text-right'><?php echo $row['created_date'] ?></td>
												</tr>
											<?php } ?>
										</tbody>
									</table>
								</form>
							</div>
						</aside>
					</div>
					<!--mail inbox end-->
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

	</body>
	</html>
	<script type="text/javascript">
		$('#select_all').click(function(event) {
			if(this.checked) {
      // Iterate each checkbox
      $(':checkbox').each(function() {
      	this.checked = true;
      });
  }
  else {
  	$(':checkbox').each(function() {
  		this.checked = false;
  	});
  }
});
</script>

<script type="text/javascript">
	$(function () {
		$("#delete_command").click(function () {
			$("#command_type").val('delete');
			document.getElementById('data_form').submit();
		})
	});
</script>

<script type="text/javascript">
	$(function () {
		$("#send_command").click(function () {
			$("#send_mes_command").val('send');
			document.getElementById('send_mail').submit();
		})
	});
</script>

<script>
	<?php
	if(isset($_SESSION['send_success'])){
		echo "swal('Success!', 'Đã gửi tin nhắn!', 'success');";
		unset($_SESSION['send_success']);
	}
	if(isset($_SESSION['del_success'])){
		echo "swal('Success!', 'Xóa thành công!', 'success');";
		unset($_SESSION['del_success']);
	}
	if(isset($_SESSION['del_fail'])){
		echo "swal('Failed!', 'Xóa không thành công!', 'warning');";
		unset($_SESSION['del_fail']);
	}
	?>
</script>

<script type="text/javascript">
	$(document).ready( function () {
		$('#message_tbl').DataTable();
	} );
</script>