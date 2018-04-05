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
<title>Polo, premium HTML5 &amp; CSS3 template</title>
  <?php 
    session_start();
    require_once 'configs/connect.php';
    include 'views/assets/styles.php';
    if (isset($_SESSION['username'])) {
    header('Location: index.php');
}
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
      <div class="account-login">
        <div class="page-title">
          <h2>Login or Create an Account</h2>
        </div>
        <fieldset class="col2-set">
          <legend>Login or Create an Account</legend>
          <div class="col-1 new-users"><strong>New Customers</strong>
            <div class="content">
              <p>By creating an account with our store, you will be able to move through the checkout process faster, store multiple shipping addresses, view and track your orders in your account and more.</p>
              <div class="buttons-set">
                <button onclick="window.location='http://demo.magentomagik.com/computerstore/customer/account/create/';" class="button create-account" type="button"><span>Create an Account</span></button>
              </div>
            </div>
          </div>
          <div class="col-2 registered-users"><strong>Registered Customers</strong>
            <div class="content">
              <form action= "business/userBusiness.php" method = "post"> 
                <p>If you have an account with us, please log in.</p>
              <ul class="form-list">
                <li>
                  <label for="email">Username <span class="required">*</span></label>
                  <br>
                  <input type="text" title="Username" class="input-text required-entry" id="email" value="" name="username">
                </li>
                <li>
                  <label for="pass">Password <span class="required">*</span></label>
                  <br>
                  <input type="password" title="Password" id="pass" class="input-text required-entry validate-password" name="password">
                </li>
              </ul>
              <p class="required">* Required Fields</p>
              <div class="buttons-set">
                <button id="send2" name="btn_submit" type="submit" class="button login"><span>Login</span></button>
                <a class="forgot-word" href="http://demo.magentomagik.com/computerstore/customer/account/forgotpassword/">Forgot Your Password?</a> </div>
              </form>  
            </div>
          </div>
        </fieldset>
      </div>
      <br>
      <br>
      <br>
      <br>
      <br>
    </div>
  </section>
    <?php 
      include 'views/assets/brand.php';
    ?>
  <!-- End Footer --> 
  
</div>
<!-- JavaScript --> 
  <?php 
      include 'views/assets/scripts.php';
    ?>
</body>
</html>