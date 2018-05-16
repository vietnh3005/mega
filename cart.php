<?php
session_start();
require_once 'configs/connect.php';
if(isset($_POST['submit']))
{
 foreach($_POST['qty'] as $key=>$value)
 {
  if( ($value == 0) and (is_numeric($value)))
  {
   unset ($_SESSION['cart'][$key]);
 }
 elseif(($value > 0) and (is_numeric($value)))
 {
   $_SESSION['cart'][$key]=$value;
 }
}
header("Location: cart.php");
}
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
<title>Giỏ hàng</title>
<!-- CSS and JS -->
<?php 
include 'views/assets/styles.php';
include 'views/assets/scripts.php';
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

    <section class="main-container col1-layout">
      <div class="main container">
        <div class="col-main">
          <div class="cart wow bounceInUp animated">
            <div class="page-title">
              <h2>Giỏ hàng</h2>
            </div>
            <div class="table-responsive">
              <input type="hidden" value="Vwww7itR3zQFe86m" name="form_key">
              <fieldset>
                <table class="data-table cart-table" id="shopping-cart-table">
                  <thead>
                    <tr class="first last">
                      <th rowspan="1">&nbsp;</th>
                      <th rowspan="1"><span class="nobr">Tên sản phẩm</span></th>
                      <th rowspan="1"></th>
                      <th colspan="1" class="a-center"><span class="nobr">Giá mỗi đơn vị</span></th>
                      <th class="a-center" rowspan="1">Số lượng</th>
                      <th colspan="1" class="a-center">Giá</th>
                      <th class="a-center" rowspan="1">&nbsp;</th>
                    </tr>
                  </thead>               
                  <tbody>
                    <form action="cart.php" method="post"> 
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
                      <tr class="first odd">
                        <td class="image"><a class="product-image" title="Sample Product" href="#"><img width="75" alt="Sample Product" src="admin/img/products/<?php echo $prow['image1']?>"></a></td>
                        <td><h2 class="product-name"> <a href="#"><?php echo $prow['product_name'] ?></a> </h2></td>
                        <td class="a-center"><a title="Edit item parameters" class="edit-bnt" href="#configure/id/15945/"></a></td>
                        <td class="a-right"><span class="cart-price"> <span class="price"><?php echo number_format($prow['sell_price']) ?></span> </span></td>
                        <td class="a-center movewishlist"><input maxlength="12" class="input-text qty" title="Số lượng" name="qty[<?php echo $prow['product_id']; ?>]" size="4" value="<?php echo $_SESSION['cart'][$prow['product_id']]; ?>" ></td>
                        <td class="a-right movewishlist"><span class="cart-price"> <span class="price"><?php echo number_format($_SESSION['cart'][$prow['product_id']]*$prow['sell_price']); ?></span> </span></td>
                        <td class="a-center last"><a class="button remove-item" title="Remove item" <a href="removecart.php?productid=<?php echo $prow['product_id']; ?>"><span><span>Bỏ sản phẩm</span></span></a></td>
                      </tr>     
                    <?php }} ?>
                    <tfoot>
                      <tr class="first last">
                        <td class="a-right last" colspan="7"><a href="index.php"><button class="button btn-continue" title="Continue Shopping" type="button"><span><span>Tiếp tục mua hàng</span></span></button></a>
                          <button class="button btn-update" title="Cập nhật giỏ hàng" name="submit" type="submit"><span><span>Cập nhật giỏ hàng</span></span></button>
                        </form>
                        <a href="removecart.php?productid=0"><button id="empty_cart_button" class="button btn-empty" title="Clear Cart" ><span><span>Xóa giỏ hàng</span></span></button></td></a>
                      </tr>
                    </tfoot>
                  </tbody>
                </table>
              </fieldset>
            </div>
          </div>
          <!-- BEGIN CART COLLATERALS -->
          <div class="cart-collaterals row  wow bounceInUp animated">
            <div class="col-sm-6">
              <div class="discount">
                <h3>Mã giảm giá</h3>
                <form method="post" action="#couponPost/" id="discount-coupon-form">
                  <label for="coupon_code">Thêm mã giảm giá nếu có.</label>
                  <input type="hidden" value="0" id="remove-coupone" name="remove">
                  <input type="text" value="" name="coupon_code" id="coupon_code" class="input-text fullwidth">
                  <button value="Apply Coupon" onclick="discountForm.submit(false)" class="button coupon " title="Apply Coupon" type="button"><span>Áp dụng</span></button>
                </form>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="totals">
                <h3>Giá trị đơn hàng</h3>
                <div class="inner">
                  <table id="shopping-cart-totals-table" class="table shopping-cart-table-total">
                    <colgroup>
                      <col>
                      <col width="1">
                    </colgroup>
                    <tfoot>
                      <tr>
                        <td class="a-left" colspan="1"><strong>Giá cuối</strong></td>
                        <td class="a-right"><strong><span class="price"><?php if(isset($total)){ echo number_format($total);} else echo 0;?></span></strong></td>
                      </tr>
                    </tfoot>
                    <tbody>
                      <tr>
                        <td class="a-left" colspan="1"> Giá trị giỏ hàng </td>
                        <td class="a-right"><span class="price"><?php if(isset($total)){ echo number_format($total);} else echo 0;?></span></td>
                      </tr>
                    </tbody>
                  </table>
                  <ul class="checkout">
                    <li>
                      <a href="checkout.php"><button type="button" title="Proceed to Checkout" class="button btn-proceed-checkout" onclick="#"><span>Thanh toán</span></button></a>
                    </li>

                    <li><a href="#" title="Checkout with Multiple Addresses">Thanh toán bằng nhiều địa chỉ</a> </li>
                    <br>
                  </ul>
                </div>
                <!--inner--> 
              </div>
              <!--totals--> 
            </div>
            <!--cart-collaterals--> 

          </div>
          <div class="crosssel wow bounceInUp animated">
            <?php 
            include 'views/assets/related_product.php';
            ?>
          </div>
        </div>
      </div>
    </section>
    <?php 
    include 'views/assets/brand.php';
    ?>
    <!-- End Footer --> 

  </div>
</body>
</html>