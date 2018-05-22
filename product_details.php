<?php
session_start();
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
<title><?php echo $_SESSION['pro_name']?></title>
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
          <div class="row">
            <div class="product-view">
              <div class="product-essential">
                <form action="#" method="post" id="product_addtocart_form">
                  <input name="form_key" value="6UbXroakyQlbfQzK" type="hidden">
                  <div class="product-img-box col-lg-6 col-sm-6 col-xs-12">
                    <ul class="moreview" id="moreview">
                      <li class="moreview_thumb thumb_1"> <img class="moreview_thumb_image" src="admin/img/products/<?php echo $_SESSION['img1']?>" alt="thumbnail"> <img class="moreview_source_image" src="products-images/product1.jpg" alt="Hình ảnh 1"> <span class="roll-over">Di chuyển để phóng to</span> <img  class="zoomImg" src="products-images/product1.jpg" alt="thumbnail"></li>

                      <li class="moreview_thumb thumb_2 moreview_thumb_active"> <img class="moreview_thumb_image" src="admin/img/products/<?php echo $_SESSION['img2']?>" alt="thumbnail"> <img class="moreview_source_image" src="products-images/product1.jpg" alt="Hình ảnh 2"> <span class="roll-over">Di chuyển để phóng to</span> <img  class="zoomImg" src="images/product4.jpg" alt="thumbnail"></li>

                      <li class="moreview_thumb thumb_3"> <img class="moreview_thumb_image" src="admin/img/products/<?php echo $_SESSION['img3']?>" alt="thumbnail"> <img class="moreview_source_image" src="products-images/product1.jpg" alt="Hình ảnh 3"> <span class="roll-over">Di chuyển để phóng to</span> <img  class="zoomImg" src="products-images/product1.jpg" alt="thumbnail"></li>
                      
                      <li class="moreview_thumb thumb_4"> <img class="moreview_thumb_image" src="admin/img/products/<?php echo $_SESSION['img4']?>" alt="thumbnail"> <img class="moreview_source_image" src="products-images/product1.jpg" alt="Hình ảnh 4"> <span class="roll-over">Di chuyển để phóng to</span> <img  class="zoomImg" src="products-images/product1.jpg" alt="thumbnail"></li>
                    </ul>
                    <div class="moreview-control"> <a href="javascript:void(0)" class="moreview-prev"></a> <a href="javascript:void(0)" class="moreview-next"></a> </div>
                  </div>
                  <div class="product-shop col-lg-6 col-sm-6 col-xs-12">
                    <div class="product-next-prev"> <a class="product-next" href="#"><span></span></a> <a class="product-prev" href="#"><span></span></a> </div>
                    <div class="product-name">
                      <h1><?php echo $_SESSION['pro_name']?></h1>
                    </div>
                    <div class="ratings">
                      <div class="rating-box">
                        <div class="rating"></div>
                      </div>
                      <p class="rating-links"> <a href="#">1 Đánh giá</a> <span class="separator">|</span> <a href="#">Đánh giá sản phẩm</a> </p>
                    </div>
                    <?php if($_SESSION['pro_quantity'] != 0){?>
                      <p class="availability in-stock">Tình trạng: <span>Còn hàng</span></p>
                    <?php } else{ ?> <p class="availability out-of-stock">Tình trạng: <span>Hết hàng</span></p> <?php } ?>
                    <div class="price-block">
                      <div class="price-box">
                        <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> $315.99 </span> </p>
                        <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> <?php echo number_format($_SESSION['pro_sell_price'])?> </span> </p>
                      </div>
                    </div>
                    <div class="short-description">
                      <h2>Mô tả</h2>
                      <p><?php echo $_SESSION['pro_des']?></p>
                    </div>
                    <div class="add-to-box">
                      <div class="add-to-cart">
                        <label for="qty">Số lượng:</label>
                        <div class="pull-left">
                          <div class="custom pull-left">
                            <button onClick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 0 ) result.value--;return false;" class="reduced items-count" type="button"><i class="icon-minus">&nbsp;</i></button>
                            <input type="text" class="input-text qty" title="Qty" value="1" maxlength="12" id="qty" name="qty">
                            <button onClick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty )) result.value++;return false;" class="increase items-count" type="button"><i class="icon-plus">&nbsp;</i></button>
                          </div>
                        </div>
                        <a href="addcart.php?item=<?php echo $_SESSION['pro_id']?>"><button class="button btn-cart" title="Add to Cart" type="button"><span><i class="icon-basket"></i>Thêm</span></button></a>
                        <div class="email-addto-box">
                          <ul class="add-to-links">
                            <li> <a class="link-wishlist" href="#"><span>Đánh dấu</span></a></li>
                            <li><span class="separator">|</span> <a class="link-compare" href="compare.html"><span></span></a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="social">
                      <ul>
                        <li class="fb"><a href="#"></a></li>
                        <li class="tw"><a href="#"></a></li>
                        <li class="googleplus"><a href="#"></a></li>
                        <li class="rss"><a href="#"></a></li>
                        <li class="pintrest"><a href="#"></a></li>
                        <li class="linkedin"><a href="#"></a></li>
                        <li class="youtube"><a href="#"></a></li>
                      </ul>
                    </div>
                  </div>
                </form>
              </div>
              <div class="product-collateral">
                <div class="col-sm-12 wow bounceInUp animated">
                  <ul id="product-detail-tab" class="nav nav-tabs product-tabs">
                    <li class="active"> <a href="#product_tabs_description" data-toggle="tab"> Mô tả sản phẩm </a> </li>
                    <li> <a href="#reviews_tabs" data-toggle="tab">Đánh giá</a> </li>
                  </ul>
                  <div id="productTabContent" class="tab-content">
                    <div class="tab-pane fade in active" id="product_tabs_description">
                      <div class="std">
                        <p><?php echo $_SESSION['pro_des']?></p>
                      </div>
                    </div>
                    <div class="tab-pane fade" id="reviews_tabs">
                      <div class="box-collateral box-reviews" id="customer-reviews">
                        <div class="box-reviews1">
                          <div class="form-add">
                            <form id="review-form" method="post" action="#">
                              <h3>Viết đánh giá của bạn</h3>
                              <fieldset>
                                <h4>Bạn nhận xét sản phẩm này như thế nào? <em class="required">*</em></h4>
                                <span id="input-message-box"></span>
                                <table id="product-review-table" class="data-table">

                                  <thead>
                                    <tr class="first last">
                                      <th>&nbsp;</th>
                                      <th><span class="nobr">1 *</span></th>
                                      <th><span class="nobr">2 *</span></th>
                                      <th><span class="nobr">3 *</span></th>
                                      <th><span class="nobr">4 *</span></th>
                                      <th><span class="nobr">5 *</span></th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr class="first odd">
                                      <th>Giá cả</th>
                                      <td class="value"><input type="radio" class="radio" value="11" id="Price_1" name="ratings[3]"></td>
                                      <td class="value"><input type="radio" class="radio" value="12" id="Price_2" name="ratings[3]"></td>
                                      <td class="value"><input type="radio" class="radio" value="13" id="Price_3" name="ratings[3]"></td>
                                      <td class="value"><input type="radio" class="radio" value="14" id="Price_4" name="ratings[3]"></td>
                                      <td class="value last"><input type="radio" class="radio" value="15" id="Price_5" name="ratings[3]"></td>
                                    </tr>
                                    <tr class="even">
                                      <th>Giá trị</th>
                                      <td class="value"><input type="radio" class="radio" value="6" id="Value_1" name="ratings[2]"></td>
                                      <td class="value"><input type="radio" class="radio" value="7" id="Value_2" name="ratings[2]"></td>
                                      <td class="value"><input type="radio" class="radio" value="8" id="Value_3" name="ratings[2]"></td>
                                      <td class="value"><input type="radio" class="radio" value="9" id="Value_4" name="ratings[2]"></td>
                                      <td class="value last"><input type="radio" class="radio" value="10" id="Value_5" name="ratings[2]"></td>
                                    </tr>
                                    <tr class="last odd">
                                      <th>Chất lượng</th>
                                      <td class="value"><input type="radio" class="radio" value="1" id="Quality_1" name="ratings[1]"></td>
                                      <td class="value"><input type="radio" class="radio" value="2" id="Quality_2" name="ratings[1]"></td>
                                      <td class="value"><input type="radio" class="radio" value="3" id="Quality_3" name="ratings[1]"></td>
                                      <td class="value"><input type="radio" class="radio" value="4" id="Quality_4" name="ratings[1]"></td>
                                      <td class="value last"><input type="radio" class="radio" value="5" id="Quality_5" name="ratings[1]"></td>
                                    </tr>
                                  </tbody>
                                </table>
                                <input type="hidden" value="" class="validate-rating" name="validate_rating">
                                <div class="review1">
                                  <ul class="form-list">
                                    <li>
                                      <label class="required" for="nickname_field">Nickname<em>*</em></label>
                                      <div class="input-box">
                                        <input type="text" class="input-text required-entry" id="nickname_field" name="nickname">
                                      </div>
                                    </li>
                                    <li>
                                      <label class="required" for="summary_field">Tóm tắt<em>*</em></label>
                                      <div class="input-box">
                                        <input type="text" class="input-text required-entry" id="summary_field" name="title">
                                      </div>
                                    </li>
                                  </ul>
                                </div>
                                <div class="review2">
                                  <ul>
                                    <li>
                                      <label class="label-wide" for="review_field">Đánh giá<em>*</em></label>
                                      <div class="input-box">
                                        <textarea class="required-entry" rows="3" cols="5" id="review_field" name="detail"></textarea>
                                      </div>
                                    </li>
                                  </ul>
                                  <div class="buttons-set">
                                    <button class="button submit" title="Submit Review" type="submit"><span>Gửi đánh giá</span></button>
                                  </div>
                                </div>
                              </fieldset>
                            </form>
                          </div>
                        </div>
                        <div class="box-reviews2">
                          <h3>Đánh giá của khách hàng</h3>
                          <div class="box visible">
                            <ul>
                              <li>
                                <table class="ratings-table">

                                  <tbody>
                                    <tr>
                                      <th>Value</th>
                                      <td><div class="rating-box">
                                        <div class="rating"></div>
                                      </div></td>
                                    </tr>
                                    <tr>
                                      <th>Quality</th>
                                      <td><div class="rating-box">
                                        <div class="rating"></div>
                                      </div></td>
                                    </tr>
                                    <tr>
                                      <th>Price</th>
                                      <td><div class="rating-box">
                                        <div class="rating"></div>
                                      </div></td>
                                    </tr>
                                  </tbody>
                                </table>
                                <div class="review">
                                  <h6><a href="#/catalog/product/view/id/59/">Nicely</a></h6>
                                  <small>Review by <span>Anthony  Lewis</span>on 1/3/2014 </small>
                                  <div class="review-txt"> Unbeatable service and selection. This store has the best business model I have seen on the net. They are true to their word, and go the extra mile for their customers. I felt like a purchasing partner more than a customer. You have a lifetime client in me. </div>
                                </div>
                              </li>
                            </ul>
                          </div>
                          <div class="actions"> <a class="button view-all" id="revies-button"><span><span>View all</span></span></a> </div>
                        </div>
                        <div class="clear"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-12">
                  <?php 
                  include 'views/assets/related_product.php';
                  include 'views/assets/upsell.php';
                  ?>       
                </div>
              </div>
            </div>
          </div>
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