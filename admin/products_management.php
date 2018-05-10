<?php session_start();
require '../configs/connect.php';
include '../business/manufactureBusiness.php';
include '../business/categoryBusiness.php';
include '../business/productBusiness.php';
if(!isset($_SESSION['admin'])){
	header('Location: login.php');
} 
$sql = "select p.*, p.description as pdes, m.*, c.* from products as p, categories as c, manufactures as m
where p.category_id =c.category_id  and p.manufacture_id = m.manufacture_id";
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

	<title>Quản lí sản phẩm</title>


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
								Quản lí sản phẩm <div class="pull-right"> 
									<a class="btn btn-success btn-sm" data-toggle="modal" data-target="#myModal" ><i class="icon-plus"></i> Thêm mới</a> 
								</div>
							</header>
							<table class="table table-striped table-advance table-hover" id='pro_man_tbl'>
								<thead>
									<tr>
										<th class="col-md-1"><i class=""></i> Hình ảnh</th>
										<th class="col-md-1"><i class=""></i> Tên</th>
										<th class="col-md-1"><i class=""></i> Danh mục</th>
										<th class="col-md-1"><i class=""></i> Hãng</th>
										<th class="col-md-1"><i class=""></i> Số lượng</th>
										<th class="col-md-1"><i class=""></i> Đánh giá</th>
										<th class="col-md-2"><i class=""></i> Mô tả</th>
										<th class="col-md-1"><i class=""></i> Giá mua</th>
										<th class="col-md-1"><i class=""></i> Giá bán</th>
										<th class="col-md-3"><?php $nbsp ?></th>
									</tr>
								</thead>
								<tbody>

									<?php while($row = mysqli_fetch_assoc($query)) 
									{ 
										?>
										<tr>
											<td><a href="#"><img src="img/products/<?php echo $row['image1']?>" height="50" width="70"></a></td>
											<td class=''><?php echo $row['product_name']?></td>
											<td class=''><a><?php echo $row['category_name']?></a></td>
											<td class=''><a><?php echo $row['name']?></a></td>
											<td class=''><?php echo $row['quantity']?></td>
											<td class=''><?php echo $row['rating']?></td>
											<td class=''><div class ="text show-more-info"><?php echo $row['pdes']?></div><a href="JavaScript:Void(0);" class='show-more'> Hiện </a></td>
											<td class=''><?php echo $row['buy_price']?></td>
											<td class=''><?php echo $row['sell_price']?></td>
											<td> 
												<button class='btn btn-success btn-xs open_detail_modal' 
												data-id="<?php echo $row['product_id']?>"
												data-proname="<?php echo $row['product_name']?>"
												data-image1="<?php echo $row['image1']?>"
												data-image2="<?php echo $row['image2']?>"
												data-image3="<?php echo $row['image3']?>"
												data-image4="<?php echo $row['image4']?>"
												data-catname="<?php echo $row['category_name']?>"
												data-manname="<?php echo $row['name']?>"
												data-quantity="<?php echo $row['quantity']?>"
												data-rating="<?php echo $row['rating']?>"
												data-description="<?php echo $row['pdes']?>"
												data-bprice="<?php echo $row['buy_price']?>"
												data-sprice="<?php echo $row['sell_price']?>"
												><i class='icon-eye-open '></i></button>

												<button class='btn btn-primary btn-xs open_update_modal' 
												data-id="<?php echo $row['product_id']?>"
												data-proname="<?php echo $row['product_name']?>"
												data-image1="<?php echo $row['image1']?>"
												data-image2="<?php echo $row['image2']?>"
												data-image3="<?php echo $row['image3']?>"
												data-image4="<?php echo $row['image4']?>"
												data-catid="<?php echo $row['category_id']?>"
												data-manid="<?php echo $row['manufacture_id']?>"
												data-quantity="<?php echo $row['quantity']?>"
												data-description="<?php echo $row['pdes']?>"
												data-bprice="<?php echo $row['buy_price']?>"
												data-sprice="<?php echo $row['sell_price']?>"><i class='icon-pencil '></i></button>

												<a href="../business/productBusiness.php?del=<?php echo $row['product_id'];?>"><button class='btn btn-danger btn-xs'><i class='icon-trash'></i></button></a>
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

<!-- Adding-->
<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Thêm mới sản phẩm</h4>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-lg-12">
						<section class="panel">
							<div class="panel-body">
								<div class="form">
									<form class="cmxform form-horizontal tasi-form" method="post" action='../business/productBusiness.php'>
										<div class="scroll-modal">
											<div class="form-group ">
												<label for="image" class="control-label col-lg-3">Hình ảnh 1</label>
												<div class="col-sm-9">
													<input type="file" id="pro_add_img1" accept=".jpg, .jpeg, .png" multiple onchange="readURL(this);"/><br>
													<img id="preview_img1" src="#"/>
												</div>
											</div>
											<div class="form-group ">
												<label for="image" class="control-label col-lg-3">Hình ảnh 2</label>
												<div class="col-sm-9">
													<input type="file" id="pro_add_img2" accept=".jpg, .jpeg, .png" multiple onchange="readURL(this);"/><br>
													<img id="preview_img2" src="#"/>
												</div>
											</div>
											<div class="form-group ">
												<label for="image" class="control-label col-lg-3">Hình ảnh 3</label>
												<div class="col-sm-9">
													<input type="file" id="pro_add_img3" accept=".jpg, .jpeg, .png" multiple onchange="readURL(this);"/><br>
													<img id="preview_img3" src="#"/>
												</div>
											</div>
											<div class="form-group ">
												<label for="image" class="control-label col-lg-3">Hình ảnh 4</label>
												<div class="col-sm-9">
													<input type="file" id="pro_add_img4" accept=".jpg, .jpeg, .png" multiple onchange="readURL(this);"/><br>
													<img id="preview_img4" src="#"/>
												</div>
											</div>

											<input id="pro_insr_img1_cm" name="pro_insr_img1_cm" type="hidden" />
											<input id="pro_insr_img2_cm" name="pro_insr_img2_cm" type="hidden" />
											<input id="pro_insr_img3_cm" name="pro_insr_img3_cm" type="hidden" />
											<input id="pro_insr_img4_cm" name="pro_insr_img4_cm" type="hidden" />

											<div class="form-group ">
												<label for="name" class="control-label col-lg-3">Tên</label>
												<div class="col-lg-9">
													<input class=" form-control" placeholder="Tên sản phẩm " id="pro_insr_name" name="pro_insr_name" type="text" />
												</div>
											</div>

											<div class="form-group ">
												<label for="category" class="control-label col-lg-3">Danh mục</label>
												<div class="col-lg-9">
													<select class="dropdown" id="pro_insr_cat" name="pro_insr_cat">
														<?php load_categories() ?>
													</select>
												</div>
											</div>

											<div class="form-group dropdown">
												<label for="manufactures" class="control-label col-lg-3">Hãng</label>
												<div class="col-lg-9">
													<select id="pro_insr_man" name="pro_insr_man">
														<?php load_manufactures() ?>
													</select> 
												</div>
											</div>

											<div class="form-group ">
												<label for="quantity" class="control-label col-lg-3">Số lượng</label>
												<div class="col-lg-9">
													<input class=" form-control" placeholder="Số lượng " id="pro_insr_quan" name="pro_insr_quan" type="text" /> 
												</div>
											</div>

											<div class="form-group ">
												<label for="description" class="control-label col-lg-3">Mô tả</label>
												<div class="col-lg-9">
													<input class=" form-control" placeholder="Mô tả " id="pro_insr_des" name="pro_insr_des" type="text" /> 
												</div>
											</div>

											<div class="form-group ">
												<label for="bprice" class="control-label col-lg-3">Giá mua</label>
												<div class="col-lg-9">
													<input class=" form-control" placeholder="Giá mua " id="pro_insr_bprice" name="pro_insr_bprice" type="text" /> 
												</div>
											</div>

											<div class="form-group ">
												<label for="sprice" class="control-label col-lg-3">Giá bán</label>
												<div class="col-lg-9">
													<input class=" form-control" placeholder="Giá bán " id="pro_insr_sprice" name="pro_insr_sprice" type="text" /> 
												</div>
											</div>

											<div class="form-group">
												<div class="col-lg-offset-2 col-lg-10">
													<button class="btn btn-danger pull-right" type="submit" name="new_pro" value="new_pro" >Lưu</button>
													<button class="btn btn-default pull-right" data-dismiss="modal" type="button">Hủy</button>
												</div>
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


<!-- Manufacture Details Modal -->
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
								<td class="h6 col-md-3" ><strong>ID</strong></td>
								<td> </td>
								<td class="h5" id="row_pro_id"></td>
							</tr>

							<tr>
								<td class="h6 col-md-3"><strong>Tên</strong></td>
								<td> </td>
								<td class="h5" id="row_pro_name"></td>
							</tr>

							<tr>
								<td class="h6 col-md-3"><strong>Danh mục</strong></td>
								<td> </td>
								<td class="h5" id="row_pro_cat"></td>
							</tr>

							<tr>
								<td class="h6 col-md-3"><strong>Hãng</strong></td>
								<td> </td>
								<td class="h5" id="row_pro_man"></td>
							</tr>

							<tr>
								<td class="h6 col-md-3"><strong>Số lượng</strong></td>
								<td> </td>
								<td class="h5" id="row_pro_quan"></td>
							</tr>
							
							<tr>
								<td class="h6 col-md-3"><strong>Đánh giá</strong></td>
								<td> </td>
								<td class="h5" id="row_pro_rating"></td>
							</tr>

							<tr>
								<td class="h6 col-md-3"><strong>Mô tả</strong></td>
								<td> </td>
								<td class="h5" id="row_pro_des"></td>
							</tr>

							<tr>
								<td class="h6 col-md-3"><strong>Giá mua</strong></td>
								<td> </td>
								<td class="h5" id="row_pro_bprice"></td>
							</tr>

							<tr>
								<td class="h6 col-md-3"><strong>Giá bán</strong></td>
								<td> </td>
								<td class="h5" id="row_pro_sprice"></td>
							</tr>
						</tbody>
					</table>


					<div class="col-md-4"> 
						<div id="myCarousel" class="carousel slide" data-ride="carousel">
							<!-- Indicators -->
							<ol class="carousel-indicators">
								<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
								<li data-target="#myCarousel" data-slide-to="1"></li>
								<li data-target="#myCarousel" data-slide-to="2"></li>
								<li data-target="#myCarousel" data-slide-to="3"></li>
							</ol>

							<!-- Wrapper for slides -->
							<div class="carousel-inner">
								<div class="item active">
									<img src="#" id="slider1">
								</div>

								<div class="item">
									<img src="#" id="slider2">
								</div>

								<div class="item">
									<img src="#" id="slider3">
								</div>

								<div class="item">
									<img src="#" id="slider4">
								</div>
							</div>

							<!-- Left and right controls -->
							<a class="left carousel-control" href="#myCarousel" data-slide="prev">
								<span class="glyphicon glyphicon-chevron-left"></span>
								<span class="sr-only">Previous</span>
							</a>
							<a class="right carousel-control" href="#myCarousel" data-slide="next">
								<span class="glyphicon glyphicon-chevron-right"></span>
								<span class="sr-only">Next</span>
							</a>
						</div> 
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
										<form class="cmxform form-horizontal tasi-form" method="post" action='../business/productBusiness.php'>
											<div class="scroll-modal">
												<div class="form-group ">
													<label for="image" class="control-label col-lg-3">Hình ảnh 1</label>
													<div class="col-sm-9">
														<input type="file" id="pro_upd_img1" accept=".jpg, .jpeg, .png" multiple onchange="readUpdURL(this);"/><br>
														<img id="upd_preview_img1" src="#" />
													</div>
												</div>
												<div class="form-group ">
													<label for="image" class="control-label col-lg-3">Hình ảnh 2</label>
													<div class="col-sm-9">
														<input type="file" id="pro_upd_img2" accept=".jpg, .jpeg, .png" multiple onchange="readUpdURL(this);"/><br>
														<img id="upd_preview_img2" src="#"/>
													</div>
												</div>
												<div class="form-group ">
													<label for="image" class="control-label col-lg-3">Hình ảnh 3</label>
													<div class="col-sm-9">
														<input type="file" id="pro_upd_img3" accept=".jpg, .jpeg, .png" multiple onchange="readUpdURL(this);"/><br>
														<img id="upd_preview_img3" src="#" />
													</div>
												</div>
												<div class="form-group ">
													<label for="image" class="control-label col-lg-3">Hình ảnh 4</label>
													<div class="col-sm-9">
														<input type="file" id="pro_upd_img4" accept=".jpg, .jpeg, .png" multiple onchange="readUpdURL(this);"/><br>
														<img id="upd_preview_img4" src="#" />
													</div>
												</div>

												<input id="pro_upd_pro_id" name="pro_upd_pro_id" type="hidden" />
												<input id="pro_upd_img1_cm" name="pro_upd_img1_cm" type="hidden" />
												<input id="pro_upd_img2_cm" name="pro_upd_img2_cm" type="hidden" />
												<input id="pro_upd_img3_cm" name="pro_upd_img3_cm" type="hidden" />
												<input id="pro_upd_img4_cm" name="pro_upd_img4_cm" type="hidden" />

												<div class="form-group ">
													<label for="name" class="control-label col-lg-3">Tên</label>
													<div class="col-lg-9">
														<input class=" form-control" placeholder="Tên sản phẩm " id="pro_upd_name" name="pro_upd_name" type="text" />
													</div>
												</div>

												<div class="form-group ">
													<label for="category" class="control-label col-lg-3">Danh mục</label>
													<div class="col-lg-9">
														<select id="pro_upd_cat" name="pro_upd_cat">
															<?php load_categories() ?>
														</select> 
													</div>
												</div>

												<div class="form-group ">
													<label for="manufactures" class="control-label col-lg-3">Hãng</label>
													<div class="col-lg-9">
														<select id="pro_upd_man" name="pro_upd_man">
															<?php load_manufactures() ?>
														</select> 
													</div>
												</div>

												<div class="form-group ">
													<label for="quantity" class="control-label col-lg-3">Số lượng</label>
													<div class="col-lg-9">
														<input class=" form-control" placeholder="Số lượng " id="pro_upd_quan" name="pro_upd_quan" type="text" /> 
													</div>
												</div>

												<div class="form-group ">
													<label for="description" class="control-label col-lg-3">Mô tả</label>
													<div class="col-lg-9">
														<input class=" form-control" placeholder="Mô tả " id="pro_upd_des" name="pro_upd_des" type="text" /> 
													</div>
												</div>

												<div class="form-group ">
													<label for="bprice" class="control-label col-lg-3">Giá mua</label>
													<div class="col-lg-9">
														<input class=" form-control" placeholder="Giá mua " id="pro_upd_bprice" name="pro_upd_bprice" type="text" /> 
													</div>
												</div>

												<div class="form-group ">
													<label for="sprice" class="control-label col-lg-3">Giá bán</label>
													<div class="col-lg-9">
														<input class=" form-control" placeholder="Giá bán " id="pro_upd_sprice" name="pro_upd_sprice" type="text" /> 
													</div>
												</div>

												<div class="form-group">
													<div class="col-lg-offset-2 col-lg-10">
														<button class="btn btn-danger pull-right" type="submit" name="update_pro" value="update_pro" >Lưu</button>
														<button class="btn btn-default pull-right" data-dismiss="modal" type="button">Hủy</button>
													</div>
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


<!-- Passing Data to Products Details Modal -->
<script type="text/javascript">
	$(function () {
		$(".open_detail_modal").click(function () {
			var $product_id = $(this).data('id');
			var $name = $(this).data('proname');
			var $image1 =$(this).data('image1');
			var $image2 =$(this).data('image2');
			var $image3 =$(this).data('image3');
			var $image4 =$(this).data('image4');
			var $catname =$(this).data('catname');
			var $manname =$(this).data('manname');
			var $quantity = $(this).data('quantity');
			var $rating =$(this).data('rating');
			var $description = $(this).data('description');
			var $bprice = $(this).data('bprice');
			var $sprice = $(this).data('sprice');

			var img1 = document.getElementById('slider1');
			var img2 = document.getElementById('slider2');
			var img3 = document.getElementById('slider3');
			var img4 = document.getElementById('slider4');
			
			$("#row_pro_id").html($product_id);
			$("#row_pro_name").html($name);
			$("#row_pro_cat").html($catname);
			$("#row_pro_man").html($manname);
			$("#row_pro_quan").html($quantity);
			$("#row_pro_rating").html($rating);
			$("#row_pro_des").html($description);
			$("#row_pro_bprice").html($bprice);
			$("#row_pro_sprice").html($sprice);

			img1.src = "img/products/"+$image1;
			img2.src = "img/products/"+$image2;
			img3.src = "img/products/"+$image3;
			img4.src = "img/products/"+$image4;
			
			$("#details_modal").modal("show");
		})
	});
</script>


<!-- Passing Data to Edits Modal -->
<script type="text/javascript">
	$(function () {
		$(".open_update_modal").click(function () {
			var $product_id = $(this).data('id');
			var $name = $(this).data('proname');
			var $image1 =$(this).data('image1');
			var $image2 =$(this).data('image2');
			var $image3 =$(this).data('image3');
			var $image4 =$(this).data('image4');
			var $catid =$(this).data('catid');
			var $manid =$(this).data('manid');
			var $quantity = $(this).data('quantity');
			var $rating =$(this).data('rating');
			var $description = $(this).data('description');
			var $bprice = $(this).data('bprice');
			var $sprice = $(this).data('sprice');

			var img1 = document.getElementById('slider1');
			var img2 = document.getElementById('slider2');
			var img3 = document.getElementById('slider3');
			var img4 = document.getElementById('slider4');


			$("#pro_upd_pro_id").val($product_id);
			$("#pro_upd_name").val($name);
			$('#pro_upd_cat').val($catid);
			$("#pro_upd_man").val($manid);
			$("#pro_upd_quan").val($quantity);
			$("#pro_upd_rating").val($rating);
			$("#pro_upd_des").val($description);
			$("#pro_upd_bprice").val($bprice);
			$("#pro_upd_sprice").val($sprice);

			img1.src = "img/products/"+$image1;
			img2.src = "img/products/"+$image2;
			img3.src = "img/products/"+$image3;
			img4.src = "img/products/"+$image4;
			
			$("#updateModal").modal("show");
		})
	});
</script>

<!-- Preview Image at Adding Modal -->
<script type="text/javascript">
	function readURL(input) {
		if (input.files && input.files[0]) {
			var reader = new FileReader();

			reader.onload = function (e) {
				$('#preview_img1, #preview_img2, #preview_img3, #preview_img4').show();
				$('#preview_img1, #preview_img2, #preview_img3, #preview_img4').attr('src', e.target.result).width(70).height(50);	
			}

			reader.readAsDataURL(input.files[0]);
		}
	}

	$("#preview_img1, #preview_img2, #preview_img3, #preview_img4").change(function(){
		readURL(this);
	});
</script>

<!-- End Adding Preview --->


<!-- Preview Image at Updating Modal -->
<script type="text/javascript">
	function readUpdURL(input) {
		if (input.files && input.files[0]) {
			var reader = new FileReader();

			reader.onload = function (e) {
				$('#upd_preview_img1, #upd_preview_img2, #upd_preview_img3, #upd_preview_img4 ').show();
				$('#upd_preview_img1, #upd_preview_img2, #upd_preview_img3, #upd_preview_img4').attr('src', e.target.result).width(70).height(50);	
			}

			reader.readAsDataURL(input.files[0]);
		}
	}

	$("#upd_preview_img1, #upd_preview_img2, #upd_preview_img3, #upd_preview_img4").change(function(){
		readUpdURL(this);

	});
</script>

<!-- Hide priviewed image after close modal -->
<script type="text/javascript">
	$('#myModal, #updateModal').on('hidden.bs.modal', function () {
		$('#preview_img1, #preview_img2, #preview_img3, #preview_img4, #upd_preview_img1, #upd_preview_img2, #upd_preview_img3, #upd_preview_img4').hide();
		$(this).find('form')[0].reset();
	})
</script>


<!-- Passing Image name before submit form - Adding modal -->
<script type="text/javascript">
	$(document).ready(function(){
		$('#pro_add_img1').change(function(e){
			var imageName = e.target.files[0].name;
			$('#pro_insr_img1_cm').val(imageName);
		});
	});
</script>

<script type="text/javascript">
	$(document).ready(function(){
		$('#pro_add_img2').change(function(e){
			var imageName = e.target.files[0].name;
			$('#pro_insr_img2_cm').val(imageName);
		});
	});
</script>

<script type="text/javascript">
	$(document).ready(function(){
		$('#pro_add_img3').change(function(e){
			var imageName = e.target.files[0].name;
			$('#pro_insr_img3_cm').val(imageName);
		});
	});
</script>

<script type="text/javascript">
	$(document).ready(function(){
		$('#pro_add_img4').change(function(e){
			var imageName = e.target.files[0].name;
			$('#pro_insr_img4_cm').val(imageName);
		});
	});
</script>
<!-- End -->

<!-- Passing Image name before submit form - Updating modal -->
<script type="text/javascript">
	$(document).ready(function(){
		$('#pro_upd_img1').change(function(e){
			var imageName = e.target.files[0].name;
			$('#pro_upd_img1_cm').val(imageName);
		});
	});
</script>

<script type="text/javascript">
	$(document).ready(function(){
		$('#pro_upd_img2').change(function(e){
			var imageName = e.target.files[0].name;
			$('#pro_upd_img2_cm').val(imageName);
		});
	});
</script>

<script type="text/javascript">
	$(document).ready(function(){
		$('#pro_upd_img3').change(function(e){
			var imageName = e.target.files[0].name;
			$('#pro_upd_img3_cm').val(imageName);
		});
	});
</script>

<script type="text/javascript">
	$(document).ready(function(){
		$('#pro_upd_img4').change(function(e){
			var imageName = e.target.files[0].name;
			$('#pro_upd_img4_cm').val(imageName);
		});
	});
</script>
<!-- End -->

<!-- Hide long description text -->
<script type="text/javascript">
	$(".show-more").click(function () {
		if($(".text").hasClass("show-more-info")) {
			$(this).text("Ẩn");
		} else {
			$(this).text("Hiện");
		}

		$(".text").toggleClass("show-more-info");
	});
</script>

<script type="text/javascript">
  $(document).ready( function () {
    $('#pro_man_tbl').DataTable();
  } );
</script>