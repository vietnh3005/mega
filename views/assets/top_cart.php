<?php
require_once 'configs/connect.php';
include 'business/categoryBusiness.php';
$sql = "select * from categories";
$result = mysqli_query($conn,$sql);

foreach($_SESSION['cart'] as $key=>$value)
{
 $item[]=$key;
}
$str=implode(",",$item);

$sql1="select * from products where product_id in ($str)";
$presult = mysqli_query($conn,$sql1);

?>
<div class="header container">
  <div class="row">
    <div class="col-lg-2 col-sm-3 col-md-2"> 
      <!-- Header Logo --> 
      <a class="logo" title="Magento Commerce" href="index.php"><img alt="Magento Commerce" src="images/logo.png"></a> 
      <!-- End Header Logo --> 
    </div>
    <div class="col-lg-8 col-sm-6 col-md-8"> 
      <!-- Search-col -->
      <div class="search-box">
        <form action="cat" method="POST" id="search_mini_form" name="Categories">
          <select name="category_id" class="cate-dropdown hidden-xs">
            <option value="0">Danh mục</option>
            <?php while($row = mysqli_fetch_assoc($result)) 
            {
              echo "<option value=".$row['category_id']."> ".$row["category_name"]." </option>";
            }
            ?>
          </select>
          <input type="text" placeholder="Tìm kiếm..." value="" maxlength="70" class="" name="search" id="search">
          <button id="submit-button" class="search-btn-bg"><span>Tìm</span></button>
        </form>
      </div>
      <!-- End Search-col --> 
    </div>
    <!-- Top Cart -->
    <div class="col-lg-2 col-sm-3 col-md-2">
      <div class="top-cart-contain">
        <div class="mini-cart">
          <div data-toggle="dropdown" data-hover="dropdown" class="basket dropdown-toggle"> 
            <a href="#"> <i class="glyphicon glyphicon-shopping-cart"></i>
              <?php 
              $ok=1;
              if(isset($_SESSION['cart']))
              {
                foreach($_SESSION['cart'] as $k=>$v)
                {
                 if(isset($k))
                 {
                   $ok=2;
                 }
               }
             }
             if ($ok != 2)
             {
              echo '<div class="cart-box"><span class="title">Giỏ hàng</span></div>';
            } else {
              $items = $_SESSION['cart'];
              echo '<div class="cart-box"><span class="title">'.count($items).' sản phẩm</span></div>';
            }
            ?>
          </a></div>
          <div>
            <div class="top-cart-content arrow_box">
              <div class="block-subtitle">Sản phẩm mới thêm vào</div>
              <ul id="cart-sidebar" class="mini-products-list">
                <?php while($prow = mysqli_fetch_assoc($presult)) 
               { 
                ?>
                <li class="item even"> <a class="product-image" href="#" title="Downloadable Product "><img alt="<?php $prow['product_name'] ?>" src="admin/img/products/<?php echo $prow['image1']?>" width="80"></a>
                  <div class="detail-item">
                    <div class="product-details"> <a href="removecart.php?productid=$prow[product_id]" title="Bỏ sản phẩm này khỏi giỏ hàng" class="glyphicon glyphicon-remove">&nbsp;</a> <a class="glyphicon glyphicon-pencil" title="Edit item" href="#">&nbsp;</a>
                      <p class="product-name"> <a href="#" title="<?php $prow['product_name'] ?>"><?php echo $prow['product_name'] ?></a> </p>
                    </div>
                    <div class="product-details-bottom"> <span class="price"><?php echo number_format($prow['sell_price']); ?></span> <span class="title-desc">Số lượng:</span> <strong><?php echo $_SESSION['cart'][$prow[product_id]]; ?></strong> </div>
                  </div>
                </li>
                <?php } ?>

              </ul>
              <div class="top-subtotal">Tổng cộng: <span class="price">$420.00</span></div>
              <div class="actions">
                <button class="btn-checkout" type="button"><span>Thanh toán</span></button>
                <button class="view-cart" type="button"><span>Chi tiết</span></button>
              </div>
            </div>
          </div>
        </div>
        <div id="ajaxconfig_info"> <a href="#/"></a>
          <input value="" type="hidden">
          <input id="enable_module" value="1" type="hidden">
          <input class="effect_to_cart" value="1" type="hidden">
          <input class="title_shopping_cart" value="Go to shopping cart" type="hidden">
        </div>
      </div>
    </div>
    <!-- End Top Cart --> 
  </div>
</div>