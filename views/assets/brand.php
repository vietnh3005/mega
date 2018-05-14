  <?php 
  $sql = "select * from manufactures order by rand() limit 7";
  $query = mysqli_query($conn,$sql);
  $row = mysqli_fetch_assoc($query);
  ?>  

  <footer class="footer wow bounceInUp animated">
    <div class="brand-logo ">
      <div class="container">
        <div class="slider-items-products">
          <div id="brand-logo-slider" class="product-flexslider hidden-buttons">
            <div class="slider-items slider-width-col6"> 
              <?php while($row = mysqli_fetch_assoc($query)) 
                  { 
                    ?>
              <!-- Item -->
              <div class="item"> <a href="#"><img src="admin/img/manufactures/<?php echo $row['image']?>" alt="<?php echo $row['name']?>" height='70' width='70'></a> </div>
              <!-- End Item --> 

              <?php } ?>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-top">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-sm-6 col-md-7">
            <div class="block-subscribe">
              <div class="newsletter">
                <form>
                  <h4>Nhận tin</h4>
                  <input type="text" placeholder="Nhập email" class="input-text required-entry validate-email" title="Đăng kí nhận tin mới" id="newsletter1" name="email">
                  <button class="subscribe" title="Đăng kí" type="submit"><span>Đăng kí</span></button>
                </form>
              </div>
            </div>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-5">
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
        </div>
      </div>
    </div>
    <div class="footer-middle container">
      <div class="row">
        <div class="col-md-3 col-sm-4">
          <div class="footer-logo"><a href="index.html" title="Logo"><img src="images/logo.png" alt="logo"></a></div>
          <p>Website bán hàng. </p>
          <div class="payment-accept">
            <div><img src="images/payment-1.png" alt="payment"> <img src="images/payment-2.png" alt="payment"> <img src="images/payment-3.png" alt="payment"> <img src="images/payment-4.png" alt="payment"></div>
          </div>
        </div>
        <div class="col-md-2 col-sm-4">
          <h4>Hướng dẫn mua hàng</h4>
          <ul class="links">
            <li class="first"><a href="#" title="Hướng dẫn mua hàng">Mua hàng</a></li>
            <li><a href="faq.html" title="Câu hỏi thường gặp">FAQs</a></li>
            <li><a href="#" title="Hướng dẫn thanh toán">Thanh toán</a></li>
            <li><a href="#" title="Giao hàng">Giao hàng</a></li>
            <li><a href="#" title="Kiểm tra">Kiểm tra đơn hàng</a></li>
            <li class="last"><a href="#" title="Điều kiện đổi trả">Đổi trả</a></li>
          </ul>
        </div>
        <div class="col-md-2 col-sm-4">
          <h4>Tài khoản</h4>
          <ul class="links">
            <li class="first"><a title="Thông tin tài khoản" href="login.php">Tài khoản</a></li>
            <li><a title="Thông tin cá nhân" href="#">Thông tin cá nhân</a></li>
            <li><a title="Địa chỉ" href="#">Địa chỉ</a></li>
            <li><a title="Giảm giá" href="#">Giảm giá</a></li>
            <li><a title="Lịch sử đơn hàng" href="#">Lịch sử các đơn hàng</a></li>
            <li class="last"><a title=" Các thông tin khác" href="#">Các thông tin khác</a></li>
          </ul>
        </div>
        <div class="col-md-2 col-sm-4">
          <h4>Thông tin</h4>
          <ul class="links">
            <li class="first"><a href="#" title="Điều khoản bảo mật">Điều khoản bảo mật</a></li>
            <li><a href="#/" title="Tìm kiếm">Tìm kiếm</a></li>
            <li><a href="#" title="Tìm kiếm nâng cao">Tìm kiếm nâng cao</a></li>
            <li><a href="contact_us.html" title="Liên hệ">Liên hệ</a></li>
            <li><a href="#" title="Danh sách các nhà phân phối">Nhà phân phối</a></li>
            <li class=" last"><a href="#" title="Thông tin của hàng" class="link-rss">Thông tin cửa hàng</a></li>
          </ul>
        </div>
        <div class="col-md-3 col-sm-4">
          <h4>Liên hệ</h4>
          <div class="contacts-info">
            <address>
              <i class="add-icon">&nbsp;</i>Số 221B Baker Street <br>
              &nbsp;VN-12345 VN
            </address>
            <div class="phone-footer"><i class="phone-icon">&nbsp;</i> +841675877954</div>
            <div class="email-footer"><i class="email-icon">&nbsp;</i> <a href="#">support@mega.com</a> </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-bottom">
      <div class="container">
        <div class="row">
          <div class="col-sm-5 col-xs-12 coppyright"> 2018. N.H.Việt</div>
        </div>
      </div>
    </div>
  </footer>