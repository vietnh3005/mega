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
    <div class="breadcrumbs">
    <div class="container">
      <div class="row">
        <ul>
          <li class="home"> <a title="Go to Home Page" href="index.html">Home</a><span>&mdash;›</span></li>
          <li class="category13"><strong>Contact Us</strong></li>
        </ul>
      </div>
    </div>
  </div>
  
  <div class="main-container col2-right-layout">
    <div class="main container">
      <div class="row">
        <section class="col-main col-sm-9 wow bounceInUp animated">
          <div class="page-title">
            <h2>Contact Us</h2>
          </div>
          <div class="static-contain">
            <fieldset class="group-select">
              <ul>
                <li>
                  <fieldset>
                    <legend>New Address</legend>
                    <input type="hidden" name="billing[address_id]" value="" id="billing:address_id">
                    <ul>
                      <li>
                        <div class="customer-name">
                          <div class="input-box name-firstname">
                            <label for="billing:firstname"> First Name<span class="required">*</span></label>
                            <br>
                            <input type="text" id="billing:firstname" name="billing[firstname]" value="" title="First Name" class="input-text ">
                          </div>
                          <div class="input-box name-lastname">
                            <label for="billing:lastname"> Email Address <span class="required">*</span> </label>
                            <br>
                            <input type="text" id="billing:lastname" name="billing[lastname]" value="" title="Last Name" class="input-text">
                          </div>
                        </div>
                      </li>
                      <li>
                        <div class="input-box">
                          <label for="billing:company">Company</label>
                          <br>
                          <input type="text" id="billing:company" name="billing[company]" value="" title="Company" class="input-text">
                        </div>
                        <div class="input-box">
                          <label for="billing:email">Telephone <span class="required">*</span></label>
                          <br>
                          <input type="text" name="billing[email]" id="billing:email" value="" title="Email Address" class="input-text validate-email">
                        </div>
                      </li>
                      <li>
                        <label for="billing:street1">Address <span class="required">*</span></label>
                        <br>
                        <input type="text" title="Street Address" name="billing[street][]" id="billing:street1" value="" class="input-text required-entry">
                      </li>
                      <li>
                        <input type="text" title="Street Address 2" name="billing[street][]" id="billing:street2" value="" class="input-text required-entry">
                      </li>
                      <li class="">
                        <label for="comment">Comment<em class="required">*</em></label>
                        <br>
                        <div class="">
                          <textarea name="comment" id="comment" title="Comment" class="required-entry input-text" cols="5" rows="3"></textarea>
                        </div>
                      </li>
                    </ul>
                  </fieldset>
                </li>
                <li>
                <p class="require"><em class="required">* </em>Required Fields</p>
                <input type="text" name="hideit" id="hideit" value="">
                <div class="buttons-set">
                  <button type="submit" title="Submit" class="button submit"> <span> Submit </span> </button>
                </div>
                </li>
              </ul>
            </fieldset>
          </div>
        </section>
        <aside class="col-right sidebar col-sm-3 wow bounceInUp animated">
          <div class="block block-company">
            <div class="block-title">Company </div>
            <div class="block-content">
              <ol id="recently-viewed-items">
                <li class="item odd"><a href="about_us.html">T_H_E_M_E_L_O_C_K_._C_O_M</a></li>
                
                <li class="item  odd"><a href="#">Terms of Service</a></li>
                <li class="item even"><a href="#">Search Terms</a></li>
                <li class="item last"><strong>Contact Us</strong></li>
              </ol>
            </div>
          </div>
        </aside>
      </div>
    </div>
  </div>
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