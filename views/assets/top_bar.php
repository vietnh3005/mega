<?php
  include 'business/userBusiness.php';
  load_user();
?>

<header class="header-container">
    <div class="header-top">
      <div class="container">
        <div class="row"> 
          <!-- Header Language -->
          <div class="col-xs-6">
            <div class="dropdown block-language-wrapper"> <a role="button" data-toggle="dropdown" data-target="#" class="block-language dropdown-toggle" href="#"> <img src="images/english.png" alt="language"> English <span class="caret"></span> </a>
              <ul class="dropdown-menu" role="menu">
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#"><img src="images/english.png" alt="language"> English </a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#"><img src="images/francais.png" alt="language"> French </a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#"><img src="images/german.png" alt="language"> German </a></li>
              </ul>
            </div>
            
            <!-- End Header Language --> 
            
            <!-- Header Currency -->
            <div class="dropdown block-currency-wrapper"> <a role="button" data-toggle="dropdown" data-target="#" class="block-currency dropdown-toggle" href="#"> USD <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#"> $ - Dollar </a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#"> £ - Pound </a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#"> € - Euro </a></li>
              </ul>
            </div>
            
            <!-- End Header Currency -->
            <?php if(ISSET($_SESSION['user'])) {
              echo "<div class='welcome-msg hidden-xs'> Chào, ".$_SESSION['name']." !</div> 
              </div>
              <div class='col-xs-6'>
              <div class='toplinks'>
              <div class='links'>
                <div class='myaccount'><a title='My Account' href='login.php'><span class='hidden-xs'>Tài khoản</span></a></div>
                <div class='wishlist'><a title='My Wishlist'  href='wishlist.php'><span class='hidden-xs'>Danh sách</span></a></div>
                <div class='check'><a title='Checkout' href='checkout.php'><span class='hidden-xs'>Thanh toán</span></a></div>
                <div class='login'><a title='Logout' href='business/userBusiness.php?key=user_logout'><span  class='hidden-xs'>Đăng xuất</span></a></div>
              </div>
            </div>";
            }
            else{
              echo "</div>
              <div class='col-xs-6'>
              <div class='toplinks'>
              <div class='links'>
                <div class='check'><a title='Checkout' href='checkout.php'><span class='hidden-xs'>Thanh toán</span></a></div>
                <div class='login'><a title='Login' href='login.php'><span  class='hidden-xs'>Đăng nhập</span></a></div>
              </div>
            </div>";
            }
            ?>
            <!-- Header Top Links -->
            
            <!-- End Header Top Links --> 
          </div>
        </div>
      </div>
    </div>
      <?php
      include 'views/assets/top_cart.php';
	   ?>
  </header>