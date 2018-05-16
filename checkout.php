<?php session_start();
require_once 'configs/connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
<!--[if IE]>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<![endif]-->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<title>Thanh toán</title>
<?php 
include 'views/assets/styles.php';
?>
</head>

<body>
  <div class="page"> 
    <!-- Header -->
    <?php 
    include 'views/assets/top_bar.php';
    ?>
    <!-- end header --> 
    <!-- Navbar -->
    <?php 
    include 'views/assets/menu_bar.php';
    ?>
    <!-- end nav --> 
    <form action="business/orderBusiness.php" method="post">
      <div class="main-container col2-right-layout">
        <div class="main container">
          <div class="row">
            <div class="col-sm-4">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title"><i class="fa fa-sign-in"></i> Thông tin giao hàng</h4>
                </div>
                <div class="panel-body">
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" value="1" name="addressType" id="addressType">
                    Sử dụng thông tin mặc định</label>
                  </div>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title"><i class="fa fa-user"></i> Thông tin chi tiết</h4>
                </div>
                <div class="panel-body">
                  <fieldset id="account">
                    <div class="form-group">
                      <label for="input-payment-lastname" class="control-label">Tên</label>
                      <input type="text" class="form-control" id="input-payment-lastname" placeholder="Tên" value="" name="name">
                    </div>
                    <div class="form-group">
                      <label for="input-payment-email" class="control-label">E-Mail</label>
                      <input type="text" class="form-control" id="input-payment-email" placeholder="E-Mail" value="" name="email">
                    </div>
                    <div class="form-group">
                      <label for="input-payment-telephone" class="control-label">Điện thoại</label>
                      <input type="text" class="form-control" id="input-payment-telephone" placeholder="Số điện thoại" value="" name="phone">
                    </div>
                  </fieldset>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title"><i class="fa fa-book"></i> Địa chỉ của bạn</h4>
                </div>
                <div class="panel-body">
                  <fieldset id="address" class="">
                    <div class="form-group">
                      <label for="input-payment-company" class="control-label">Số nhà</label>
                      <input type="text" class="form-control" id="input-payment-company" placeholder="Company" value="" name="company">
                    </div>
                    <div class="form-group">
                      <label for="input-payment-address-1" class="control-label">Địa chỉ 1</label>
                      <input type="text" class="form-control" id="input-payment-home" placeholder="Địa chỉ 1" value="" name="address_1">
                    </div>
                    <div class="form-group">
                      <label for="input-payment-address-2" class="control-label">Địa chỉ 2</label>
                      <input type="text" class="form-control" id="input-payment-ward" placeholder="Địa chỉ 2" value="" name="address_2">
                    </div>
                    <div class="form-group">
                      <label for="input-payment-city" class="control-label">Quận/Huyện</label>
                      <input type="text" class="form-control" id="input-payment-district" placeholder="Huyện" value="" name="city">
                    </div>
                    <div class="form-group ">
                      <label for="input-payment-country" class="control-label">Thành phố</label>
                      <select class="form-control" id="input-payment-city" name="country">
                        <option value="271" selected="selected">Hà Nội</option>
                        <option value="232">Hồ Chí Minh</option>
                        <option value="260">Đà Nẵng</option>
                        <option value="280">Cần Thơ</option>
                        <option value="242">Hải Phòng</option>
                        <option value="272">An Giang</option>
                        <option value="431">Bà Rịa Vũng Tàu</option>
                        <option value="234">Bắc Giang</option>
                        <option value="233">Bắc Kạn</option>
                        <option value="276">Bạc Liêu</option>
                        <option value="235">Bắc Ninh</option>
                        <option value="277">Bến Tre</option>
                        <option value="261">Bình Định</option>
                        <option value="273">Bình Dương</option>
                        <option value="274">Bình Phước</option>
                        <option value="278">Bình Thuận</option>
                        <option value="279">Cà Mau</option>
                        <option value="236">Cao Bằng</option>
                        <option value="558">Đăk Lăk</option>
                        <option value="577">Đăk Nông</option>
                        <option value="237">Điện Biên</option>
                        <option value="281">Đồng Nai</option>
                        <option value="282">Đồng Tháp</option>
                        <option value="262">Gia Lai</option>
                        <option value="238">Hà Giang</option>
                        <option value="239">Hà Nam</option>
                        <option value="240">Hà Tĩnh</option>
                        <option value="241">Hải Dương</option>
                        <option value="283">Hậu Giang</option>
                        <option value="244">Hòa Bình</option>
                        <option value="243">Hưng Yên</option>
                        <option value="265">Khánh Hòa</option>
                        <option value="284">Kiên Giang</option>
                        <option value="264">Kon Tum</option>
                        <option value="246">Lai Châu</option>
                        <option value="286">Lâm Đồng</option>
                        <option value="247">Lạng Sơn</option>
                        <option value="245">Lào Cai</option>
                        <option value="285">Long An</option>
                        <option value="248">Nam Định</option>
                        <option value="249">Nghệ An</option>
                        <option value="250">Ninh Bình</option>
                        <option value="287">Ninh Thuận</option>
                        <option value="251">Phú Thọ</option>
                        <option value="266">Phú Yên</option>
                        <option value="267">Quảng Bình</option>
                        <option value="269">Quảng Nam</option>
                        <option value="270">Quảng Ngãi</option>
                        <option value="252">Quảng Ninh</option>
                        <option value="268">Quảng Trị</option>
                        <option value="288">Sóc Trăng</option>
                        <option value="253">Sơn La</option>
                        <option value="289">Tây Ninh</option>
                        <option value="254">Thái Bình</option>
                        <option value="255">Thái Nguyên</option>
                        <option value="256">Thanh Hóa</option>
                        <option value="263">Thừa Thiên Huế</option>
                        <option value="290">Tiền Giang</option>
                        <option value="291">Trà Vinh</option>
                        <option value="257">Tuyên Quang</option>
                        <option value="292">Vĩnh Long</option>
                        <option value="258">Vĩnh Phúc</option>
                        <option value="259">Yên Bái</option>
                      </select>
                    </div>
                  </fieldset>
                </div>
              </div>
            </div>

            <div class="col-sm-8">
              <div class="row">
                <div class="col-sm-6">
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h4 class="panel-title"><i class="fa fa-truck"></i> Phương thức giao hàng</h4>
                    </div>
                    <div class="panel-body">
                      <p>Vui lòng chọn phương thức giao hàng cho đơn hàng này</p>
                      <div class="radio">
                        <label>
                          <input type="radio" checked="checked" name="">
                        Miễn phi - $0.00</label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" disabled="disabled" name="">
                        Chuyển phát nhanh - $8.00</label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" disabled="disabled" name="">
                        Ưu tiên - $150.00</label>
                      </div>
                    </div>
                  </div>
                </div>


                <div class="col-sm-6">
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h4 class="panel-title"><i class="fa fa-credit-card"></i> Phương thức thanh toán</h4>
                    </div>
                    <div class="panel-body">
                      <p>Please select the preferred payment method to use on this order.</p>
                      <div class="radio">
                        <label>
                          <input type="radio" checked="checked">
                        Thanh toán tận nơi</label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" disabled="disabled">
                        Chuyển khoản ngân hàng</label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" disabled="disabled">
                        Paypal</label>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-sm-12">
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h4 class="panel-title"><i class="fa fa-gift"></i> Phiếu quà tặng</h4>
                    </div>
                    <div class="panel-body">
                      <label for="input-voucher" class="col-sm-3 control-label">Sử dụng phiếu quà tặng</label>
                      <div class="input-group">
                        <input type="text" class="form-control" disabled="disabled" id="input-voucher" placeholder="Enter your gift voucher code here" value="" name="voucher">
                        <span class="input-group-btn">
                          <input type="submit" class="btn btn-primary" data-loading-text="Loading..." id="button-voucher" value="Áp dụng">
                        </span> </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-sm-12">
                    <div class="panel panel-default">
                      <div class="panel-heading">
                        <h4 class="panel-title"><i class="fa fa-shopping-cart"></i> Giỏ hàng</h4>
                      </div>
                      <div class="panel-body">
                        <div class="table-responsive">
                          <table class="table table-bordered">
                            <thead>
                              <tr>
                                <td class="text-center">Hình ảnh</td>
                                <td class="text-left">Tên sản phẩm</td>
                                <td class="text-left">Số lượng</td>
                                <td class="text-right">Giá mỗi đơn vị</td>
                                <td class="text-right">Tổng</td>
                              </tr>
                            </thead>
                            <tbody id="checkoutCartList">
                            </tbody>
                            <tfoot>
                              <?php if(!empty($_SESSION['cart'])){
                                foreach($_SESSION['cart'] as $key=>$value)
                                { 
                                 $item[]=$key; $str=implode(",",$item);
                                 $sql1="select * from products where product_id in ($str)";
                                 $presult = mysqli_query($conn,$sql1);
                               } 
                               while($prow = mysqli_fetch_assoc($presult)) 
                               { 
                                ?>
                                <tr>
                                 <td class="text-center"><img src="admin/img/products/<?php echo $prow['image1'] ?>" height="60" width="90"></td>
                                 <td class="text-right"><?php echo $prow['product_name'] ?></td>
                                 <td class="text-right"><?php echo $_SESSION['cart'][$prow['product_id']]; ?></td>
                                 <td class="text-right price"><?php echo number_format($prow['sell_price']); ?></td>
                                 <td class="text-right price"><?php echo number_format($_SESSION['cart'][$prow['product_id']]*$prow['sell_price']);
                                  ?>
                                    <input type="hidden" name="product_id" value="<?php echo $prow['product_id']; ?>">
                                    <input type="hidden" name="sell_price" value="<?php echo $prow['sell_price']; ?>">
                                    <input type="hidden" name="quantity" value="<?php echo $_SESSION['cart'][$prow['product_id']]; ?>">
                                  </td>
                               </tr>

                             <?php  @$total+=$_SESSION['cart'][$prow['product_id']]*$prow['sell_price']; }} ?>
                           </tfoot>
                         </table>
                       </div>
                     </div>
                   </div>
                 </div>
                 <div class="col-sm-12">
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h4 class="panel-title"><i class="fa fa-pencil"></i> Ghi chú giao hàng</h4>
                    </div>
                    <div class="panel-body">
                      <textarea rows="4" class="form-control" id="input-description" name="comments"></textarea>
                      <br>
                      <input type="hidden" name="user_id" value="<?php if(isset($_SESSION['user_id'])){ echo $_SESSION['user_id'];} else { echo '0';} ?>">
                      <input type="hidden" name="total" value="<?php echo $total/2; ?>">
                      <label class="control-label" for="confirm_agree">
                        <input type="checkbox" checked="checked" value="1" required="" class="validate required" id="confirm_agree" name="confirm_ agree">
                        <span>Tôi đồng ý với  <a class="agree" href="#"><b>điều khoản sử dụng</b></a></span> </label>
                        <div class="buttons">
                          <div class="pull-right">
                            <input type="submit" class="btn btn-primary" id="button-confirm" name="sm_btn" value="Đặt hàng">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php 
    include 'views/assets/brand.php';
    ?>
    <!-- End Footer --> 
  </form>
</div>
<!-- JavaScript --> 
<?php 
include 'views/assets/scripts.php';
?>
</body>
</html>