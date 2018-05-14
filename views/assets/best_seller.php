   <?php 
   $sql = "select * from products order by rand() limit 7";
   $query = mysqli_query($conn,$sql);
   $row = mysqli_fetch_assoc($query);
   ?>  

   <section class="main-container col1-layout home-content-container">
    <div class="container">
      <div class="std">
        <div class="best-seller-pro wow bounceInUp animated">
          <div class="slider-items-products">
            <div class="new_title center">
              <h2>Bán chạy nhất</h2>
            </div>
            <div id="best-seller-slider" class="product-flexslider hidden-buttons">
              <div class="slider-items slider-width-col4"> 
               <?php while($row = mysqli_fetch_assoc($query)) 
               { 
                ?>
                <!-- Item -->
                <div class="item">
                  <div class="col-item">
                    <div class="sale-label sale-top-right">Bán</div>
                    <div class="product-image-area"> <a class="product-image" title="Sample Product" href="http://ow.ly/XqzNo"> <img src="admin/img/products/<?php echo $row['image1']?>" class="img-responsive" alt="product-image" /> </a>
                      <div class="hover_fly"> <a class="exclusive ajax_add_to_cart_button" href="addcart.php?item=<?php echo $row['product_id']?>" title="Add to cart">
                        <div><i class="icon-shopping-cart"></i><span>Thêm vào giỏ hàng</span></div>
                      </a> <a class="quick-view" href="quick_view.html">
                        <div><i class="icon-eye-open"></i><span>Xem thông tin</span></div>
                      </a> <a class="add_to_compare" href="compare.html">
                        <div><i class="icon-random"></i><span>Thêm so sánh</span></div>
                      </a> <a class="addToWishlist wishlistProd_5" href="http://bit.do/bromq" >
                        <div><i class="icon-heart"></i><span>Đánh dấu</span></div>
                      </a> </div>
                    </div>
                    <div class="info">
                      <div class="info-inner">
                        <div class="item-title"> <a title="<?php echo $row['product_name']?>" href="#"> <?php echo $row['product_name']?> </a> </div>
                        <!--item-title-->
                        <div class="item-content">
                          <div class="ratings">
                            <div class="rating-box">
                              <div class="rating"></div>
                            </div>
                          </div>
                          <div class="price-box">
                            <p class="special-price"> <span class="price">  <?php echo number_format($row['sell_price']); ?> </span> </p>
                            <p class="old-price"> <span class="price-sep">-</span> <span class="price"> $50.00 </span> </p>
                          </div>
                        </div>
                        <!--item-content--> 
                      </div>
                      <!--info-inner-->
                      
                      <div class="clearfix"> </div>
                    </div>
                  </div>
                </div>
                <!-- End Item --> 
              <?php } ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>