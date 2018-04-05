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
    <!-- breadcrumbs -->
  <div class="breadcrumbs">
    <div class="container">
      <div class="row">
        <ul>
          <li class="home"> <a href="index.html" title="Go to Home Page">Home</a><span>&mdash;›</span></li>
          <li class=""> <a href="grid.html" title="Go to Home Page">Women</a><span>&mdash;›</span></li>
          <li class="category13"><strong>Tops &amp; Tees</strong></li>
        </ul>
      </div>
    </div>
  </div>
  <!-- End breadcrumbs --> 
  <!-- Two columns content -->
  <div class="main-container col2-left-layout">
    <div class="main container">
      <div class="row">
        <section class="col-main col-sm-9 col-sm-push-3 wow bounceInUp animated">
          <div class="category-description std">
            <div class="slider-items-products">
              <div id="category-desc-slider" class="product-flexslider hidden-buttons">
                <div class="slider-items slider-width-col1"> 
                  
                  <!-- Item -->
                  <div class="item"> <a href="#x"><img alt="" src="images/category-banner1.jpg"></a>
                    <div class="cat-img-title cat-bg cat-box">
                      <h2 class="cat-heading">Category Banner</h2>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                  </div>
                  <!-- End Item --> 
                  
                  <!-- Item -->
                  <div class="item"> <a href="#x"><img alt="" src="images/women_banner1.png"></a> </div>
                  <!-- End Item --> 
                  
                </div>
              </div>
            </div>
          </div>
          <div class="category-title">
            <h1>Tops &amp; Tees</h1>
          </div>
          <div class="category-products">
            <div class="toolbar">
              <div class="sorter">
                <div class="view-mode"> <span title="Grid" class="button button-active button-grid">Grid</span><a href="list.html" title="List" class="button button-list">List</a> </div>
              </div>
              <div id="sort-by">
                <label class="left">Sort By: </label>
                <ul>
                  <li><a href="#">Position<span class="right-arrow"></span></a>
                    <ul>
                      <li><a href="#">Name</a></li>
                      <li><a href="#">Price</a></li>
                      <li><a href="#">Position</a></li>
                    </ul>
                  </li>
                </ul>
                <a class="button-asc left" href="#" title="Set Descending Direction"><span class="glyphicon glyphicon-arrow-up"></span></a> </div>
              <div class="pager">
                <div id="limiter">
                  <label>View: </label>
                  <ul>
                    <li><a href="#">15<span class="right-arrow"></span></a>
                      <ul>
                        <li><a href="#">20</a></li>
                        <li><a href="#">30</a></li>
                        <li><a href="#">35</a></li>
                      </ul>
                    </li>
                  </ul>
                </div>
                <div class="pages">
                  <label>Page:</label>
                  <ul class="pagination">
                    <li><a href="#">&laquo;</a></li>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#">&raquo;</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <ul class="products-grid">
              <li class="item col-lg-4 col-md-4 col-sm-6 col-xs-6">
                <div class="col-item">
                  <div class="sale-label sale-top-right">Sale</div>
                  <div class="product-image-area"> <a class="product-image" title="Sample Product" href="http://ow.ly/XqzNo"> <img src="products-images/product1.jpg" class="img-responsive" alt="a" /> </a>
                    <div class="hover_fly"> <a class="exclusive ajax_add_to_cart_button" href="#" title="Add to cart">
                      <div><i class="icon-shopping-cart"></i><span>Add to cart</span></div>
                      </a> <a class="quick-view" href="quick_view.html">
                      <div><i class="icon-eye-open"></i><span>Quick view</span></div>
                      </a> <a class="add_to_compare" href="compare.html">
                      <div><i class="icon-random"></i><span>Add to compare</span></div>
                      </a> <a class="addToWishlist wishlistProd_5" href="http://bit.do/bromq" >
                      <div><i class="icon-heart"></i><span>Add to Wishlist</span></div>
                      </a> </div>
                  </div>
                  <div class="info">
                    <div class="info-inner">
                      <div class="item-title"> <a title=" Sample Product" href="http://ow.ly/XqzNo"> Sample Product </a> </div>
                      <!--item-title-->
                      <div class="item-content">
                        <div class="ratings">
                          <div class="rating-box">
                            <div class="rating"></div>
                          </div>
                        </div>
                        <div class="price-box">
                          <p class="special-price"> <span class="price"> $45.00 </span> </p>
                          <p class="old-price"> <span class="price-sep">-</span> <span class="price"> $50.00 </span> </p>
                        </div>
                      </div>
                      <!--item-content--> 
                    </div>
                    <!--info-inner-->
                    
                    <div class="clearfix"> </div>
                  </div>
                </div>
              </li>
              <li class="item col-lg-4 col-md-4 col-sm-6 col-xs-6">
                <div class="col-item">
                  <div class="new-label new-top-right">New</div>
                  <div class="product-image-area"> <a class="product-image" title="Sample Product" href="http://ow.ly/XqzNo"> <img src="products-images/product1.jpg" class="img-responsive" alt="a" /> </a>
                    <div class="hover_fly"> <a class="exclusive ajax_add_to_cart_button" href="#" title="Add to cart">
                      <div><i class="icon-shopping-cart"></i><span>Add to cart</span></div>
                      </a> <a class="quick-view" href="quick_view.html">
                      <div><i class="icon-eye-open"></i><span>Quick view</span></div>
                      </a> <a class="add_to_compare" href="compare.html">
                      <div><i class="icon-random"></i><span>Add to compare</span></div>
                      </a> <a class="addToWishlist wishlistProd_5" href="http://bit.do/bromq" >
                      <div><i class="icon-heart"></i><span>Add to Wishlist</span></div>
                      </a> </div>
                  </div>
                  <div class="info">
                    <div class="info-inner">
                      <div class="item-title"> <a title=" Sample Product" href="http://ow.ly/XqzNo"> Sample Product </a> </div>
                      <!--item-title-->
                      <div class="item-content">
                        <div class="ratings">
                          <div class="rating-box">
                            <div class="rating"></div>
                          </div>
                        </div>
                        <div class="price-box"> <span class="regular-price"> <span class="price">$422.00</span> </span> </div>
                      </div>
                      <!--item-content--> 
                    </div>
                    <!--info-inner-->
                    
                    <div class="clearfix"> </div>
                  </div>
                </div>
              </li>
              <li class="item col-lg-4 col-md-4 col-sm-6 col-xs-6">
                <div class="col-item">
                  <div class="sale-label sale-top-right">Sale</div>
                  <div class="product-image-area"> <a class="product-image" title="Sample Product" href="http://ow.ly/XqzNo"> <img alt="a" class="img-responsive" src="products-images/product1.jpg"> </a>
                    <div class="hover_fly"> <a class="exclusive ajax_add_to_cart_button" href="#" title="Add to cart">
                      <div><i class="icon-shopping-cart"></i><span>Add to cart</span></div>
                      </a> <a class="quick-view" href="quick_view.html">
                      <div><i class="icon-eye-open"></i><span>Quick view</span></div>
                      </a> <a class="add_to_compare" href="compare.html">
                      <div><i class="icon-random"></i><span>Add to compare</span></div>
                      </a> <a class="addToWishlist wishlistProd_5" href="http://bit.do/bromq" >
                      <div><i class="icon-heart"></i><span>Add to Wishlist</span></div>
                      </a> </div>
                  </div>
                  <div class="info">
                    <div class="info-inner">
                      <div class="item-title"> <a title=" Sample Product" href="http://ow.ly/XqzNo"> Sample Product </a> </div>
                      <!--item-title-->
                      <div class="item-content">
                        <div class="ratings">
                          <div class="rating-box">
                            <div class="rating"></div>
                          </div>
                        </div>
                        <div class="price-box"> <span class="regular-price"> <span class="price">$50.00</span> </span> </div>
                      </div>
                      <!--item-content--> 
                    </div>
                    <!--info-inner-->
                    
                    <div class="clearfix"> </div>
                  </div>
                </div>
              </li>
              <li class="item col-lg-4 col-md-4 col-sm-6 col-xs-6">
                <div class="col-item">
                  <div class="sale-label sale-top-right">Sale</div>
                  <div class="product-image-area"> <a class="product-image" title="Sample Product" href="http://ow.ly/XqzNo"> <img alt="a" class="img-responsive" src="products-images/product1.jpg"> </a>
                    <div class="hover_fly"> <a class="exclusive ajax_add_to_cart_button" href="#" title="Add to cart">
                      <div><i class="icon-shopping-cart"></i><span>Add to cart</span></div>
                      </a> <a class="quick-view" href="quick_view.html">
                      <div><i class="icon-eye-open"></i><span>Quick view</span></div>
                      </a> <a class="add_to_compare" href="compare.html">
                      <div><i class="icon-random"></i><span>Add to compare</span></div>
                      </a> <a class="addToWishlist wishlistProd_5" href="http://bit.do/bromq" >
                      <div><i class="icon-heart"></i><span>Add to Wishlist</span></div>
                      </a> </div>
                  </div>
                  <div class="info">
                    <div class="info-inner">
                      <div class="item-title"> <a title=" Sample Product" href="http://ow.ly/XqzNo"> Sample Product </a> </div>
                      <!--item-title-->
                      <div class="item-content">
                        <div class="ratings">
                          <div class="rating-box">
                            <div class="rating"></div>
                          </div>
                        </div>
                        <div class="price-box">
                          <p class="special-price"> <span class="price"> $45.00 </span> </p>
                          <p class="old-price"> <span class="price-sep">-</span> <span class="price"> $50.00 </span> </p>
                        </div>
                      </div>
                      <!--item-content--> 
                    </div>
                    <!--info-inner-->
                    
                    <div class="clearfix"> </div>
                  </div>
                </div>
              </li>
              <li class="item col-lg-4 col-md-4 col-sm-6 col-xs-6">
                <div class="col-item">
                  <div class="sale-label sale-top-right">Sale</div>
                  <div class="product-image-area"> <a class="product-image" title="Sample Product" href="http://ow.ly/XqzNo"> <img alt="a" class="img-responsive" src="products-images/product1.jpg"> </a>
                    <div class="hover_fly"> <a class="exclusive ajax_add_to_cart_button" href="#" title="Add to cart">
                      <div><i class="icon-shopping-cart"></i><span>Add to cart</span></div>
                      </a> <a class="quick-view" href="quick_view.html">
                      <div><i class="icon-eye-open"></i><span>Quick view</span></div>
                      </a> <a class="add_to_compare" href="compare.html">
                      <div><i class="icon-random"></i><span>Add to compare</span></div>
                      </a> <a class="addToWishlist wishlistProd_5" href="http://bit.do/bromq" >
                      <div><i class="icon-heart"></i><span>Add to Wishlist</span></div>
                      </a> </div>
                  </div>
                  <div class="info">
                    <div class="info-inner">
                      <div class="item-title"> <a title=" Sample Product" href="http://ow.ly/XqzNo"> Sample Product </a> </div>
                      <!--item-title-->
                      <div class="item-content">
                        <div class="ratings">
                          <div class="rating-box">
                            <div class="rating"></div>
                          </div>
                        </div>
                        <div class="price-box">
                          <p class="special-price"> <span class="price"> $45.00 </span> </p>
                          <p class="old-price"> <span class="price-sep">-</span> <span class="price"> $50.00 </span> </p>
                        </div>
                      </div>
                      <!--item-content--> 
                    </div>
                    <!--info-inner-->
                    
                    <div class="clearfix"> </div>
                  </div>
                </div>
              </li>
              <li class="item col-lg-4 col-md-4 col-sm-6 col-xs-6">
                <div class="col-item">
                  <div class="new-label new-top-right">New</div>
                  <div class="product-image-area"> <a class="product-image" title="Sample Product" href="http://ow.ly/XqzNo"> <img alt="a" class="img-responsive" src="products-images/product1.jpg"> </a>
                    <div class="hover_fly"> <a class="exclusive ajax_add_to_cart_button" href="#" title="Add to cart">
                      <div><i class="icon-shopping-cart"></i><span>Add to cart</span></div>
                      </a> <a class="quick-view" href="quick_view.html">
                      <div><i class="icon-eye-open"></i><span>Quick view</span></div>
                      </a> <a class="add_to_compare" href="compare.html">
                      <div><i class="icon-random"></i><span>Add to compare</span></div>
                      </a> <a class="addToWishlist wishlistProd_5" href="http://bit.do/bromq" >
                      <div><i class="icon-heart"></i><span>Add to Wishlist</span></div>
                      </a> </div>
                  </div>
                  <div class="info">
                    <div class="info-inner">
                      <div class="item-title"> <a title=" Sample Product" href="http://ow.ly/XqzNo"> Sample Product </a> </div>
                      <!--item-title-->
                      <div class="item-content">
                        <div class="ratings">
                          <div class="rating-box">
                            <div class="rating"></div>
                          </div>
                        </div>
                        <div class="price-box"> <span class="regular-price"> <span class="price">$422.00</span> </span> </div>
                      </div>
                      <!--item-content--> 
                    </div>
                    <!--info-inner-->
                    
                    <div class="clearfix"> </div>
                  </div>
                </div>
              </li>
              <li class="item col-lg-4 col-md-4 col-sm-6 col-xs-6">
                <div class="col-item">
                  <div class="sale-label sale-top-right">Sale</div>
                  <div class="product-image-area"> <a class="product-image" title="Sample Product" href="http://ow.ly/XqzNo"> <img alt="a" class="img-responsive" src="products-images/product1.jpg"> </a>
                    <div class="hover_fly"> <a class="exclusive ajax_add_to_cart_button" href="#" title="Add to cart">
                      <div><i class="icon-shopping-cart"></i><span>Add to cart</span></div>
                      </a> <a class="quick-view" href="quick_view.html">
                      <div><i class="icon-eye-open"></i><span>Quick view</span></div>
                      </a> <a class="add_to_compare" href="compare.html">
                      <div><i class="icon-random"></i><span>Add to compare</span></div>
                      </a> <a class="addToWishlist wishlistProd_5" href="http://bit.do/bromq" >
                      <div><i class="icon-heart"></i><span>Add to Wishlist</span></div>
                      </a> </div>
                  </div>
                  <div class="info">
                    <div class="info-inner">
                      <div class="item-title"> <a title=" Sample Product" href="http://ow.ly/XqzNo"> Sample Product </a> </div>
                      <!--item-title-->
                      <div class="item-content">
                        <div class="ratings">
                          <div class="rating-box">
                            <div class="rating"></div>
                          </div>
                        </div>
                        <div class="price-box"> <span class="regular-price"> <span class="price">$50.00</span> </span> </div>
                      </div>
                      <!--item-content--> 
                    </div>
                    <!--info-inner-->
                    
                    <div class="clearfix"> </div>
                  </div>
                </div>
              </li>
              <li class="item col-lg-4 col-md-4 col-sm-6 col-xs-6">
                <div class="col-item">
                  <div class="sale-label sale-top-right">Sale</div>
                  <div class="product-image-area"> <a class="product-image" title="Sample Product" href="http://ow.ly/XqzNo"> <img alt="a" class="img-responsive" src="products-images/product1.jpg"> </a>
                    <div class="hover_fly"> <a class="exclusive ajax_add_to_cart_button" href="#" title="Add to cart">
                      <div><i class="icon-shopping-cart"></i><span>Add to cart</span></div>
                      </a> <a class="quick-view" href="quick_view.html">
                      <div><i class="icon-eye-open"></i><span>Quick view</span></div>
                      </a> <a class="add_to_compare" href="compare.html">
                      <div><i class="icon-random"></i><span>Add to compare</span></div>
                      </a> <a class="addToWishlist wishlistProd_5" href="http://bit.do/bromq" >
                      <div><i class="icon-heart"></i><span>Add to Wishlist</span></div>
                      </a> </div>
                  </div>
                  <div class="info">
                    <div class="info-inner">
                      <div class="item-title"> <a title=" Sample Product" href="http://ow.ly/XqzNo"> Sample Product </a> </div>
                      <!--item-title-->
                      <div class="item-content">
                        <div class="ratings">
                          <div class="rating-box">
                            <div class="rating"></div>
                          </div>
                        </div>
                        <div class="price-box">
                          <p class="special-price"> <span class="price"> $45.00 </span> </p>
                          <p class="old-price"> <span class="price-sep">-</span> <span class="price"> $50.00 </span> </p>
                        </div>
                      </div>
                      <!--item-content--> 
                    </div>
                    <!--info-inner-->
                    
                    <div class="clearfix"> </div>
                  </div>
                </div>
              </li>
              <li class="item col-lg-4 col-md-4 col-sm-6 col-xs-6">
                <div class="col-item">
                  <div class="sale-label sale-top-right">Sale</div>
                  <div class="product-image-area"> <a class="product-image" title="Sample Product" href="http://ow.ly/XqzNo"> <img src="products-images/product1.jpg" class="img-responsive" alt="a" /> </a>
                    <div class="hover_fly"> <a class="exclusive ajax_add_to_cart_button" href="#" title="Add to cart">
                      <div><i class="icon-shopping-cart"></i><span>Add to cart</span></div>
                      </a> <a class="quick-view" href="quick_view.html">
                      <div><i class="icon-eye-open"></i><span>Quick view</span></div>
                      </a> <a class="add_to_compare" href="compare.html">
                      <div><i class="icon-random"></i><span>Add to compare</span></div>
                      </a> <a class="addToWishlist wishlistProd_5" href="http://bit.do/bromq" >
                      <div><i class="icon-heart"></i><span>Add to Wishlist</span></div>
                      </a> </div>
                  </div>
                  <div class="info">
                    <div class="info-inner">
                      <div class="item-title"> <a title=" Sample Product" href="http://ow.ly/XqzNo"> Sample Product </a> </div>
                      <!--item-title-->
                      <div class="item-content">
                        <div class="ratings">
                          <div class="rating-box">
                            <div class="rating"></div>
                          </div>
                        </div>
                        <div class="price-box">
                          <p class="special-price"> <span class="price"> $45.00 </span> </p>
                          <p class="old-price"> <span class="price-sep">-</span> <span class="price"> $50.00 </span> </p>
                        </div>
                      </div>
                      <!--item-content--> 
                    </div>
                    <!--info-inner-->
                    
                    <div class="clearfix"> </div>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </section>
        <aside class="col-left sidebar col-sm-3 col-xs-12 col-sm-pull-9 wow bounceInUp animated">
          <div class="side-nav-categories">
            <div class="block-title"> Categories </div>
            <!--block-title--> 
            <!-- BEGIN BOX-CATEGORY -->
            <div class="box-content box-category">
              <ul>
                <li class="active"> <a  href="grid.html">Women</a> <span class="subDropdown minus"></span>
                  <ul class="level0_415">
                    <li> <a href="grid.html"> Tops </a> <span class="subDropdown plus"></span>
                      <ul class="level1">
                        <li> <a href="grid.html"> Evening Tops </a> </li>
                        <li> <a href="grid.html"> Shirts &amp; Blouses </a> </li>
                        <li> <a href="grid.html"> Tunics </a> </li>
                        <li> <a href="grid.html"> Vests </a> </li>
                        <!--end for-each -->
                      </ul>
                      <!--level1--> 
                    </li>
                    <!--level1-->
                    <li> <a href="grid.html"> Bags </a> <span class="subDropdown plus"></span>
                      <ul class="level1">
                        <li> <a href="grid.html"> Bags </a> </li>
                        <li> <a href="grid.html"> Designer Handbags </a> </li>
                        <li> <a href="grid.html"> Purses </a> </li>
                        <li> <a href="grid.html"> Shoulder Bags </a> </li>
                        <!--end for-each -->
                      </ul>
                      <!--level1--> 
                    </li>
                    <!--level1-->
                    <li> <a href="grid.html"> Shoes </a> <span class="subDropdown plus"></span>
                      <ul class="level1">
                        <li> <a href="grid.html"> Flat Shoes </a> </li>
                        <li> <a href="grid.html"> Flat Sandals </a> </li>
                        <li> <a href="grid.html"> Boots </a> </li>
                        <li> <a href="grid.html"> Heels </a> </li>
                        <!--end for-each -->
                      </ul>
                      <!--level1--> 
                    </li>
                    <!--level1-->
                    <li> <a href="grid.html"> Jewellery </a>
                      <ul class="level1">
                        <li> <a href="grid.html"> Bracelets </a> </li>
                        <li> <a href="grid.html"> Necklaces &amp; Pendants </a> </li>
                        <li> <a href="grid.html"> Pins &amp; Brooches </a> </li>
                        <!--end for-each -->
                      </ul>
                      <!--level1--> 
                    </li>
                    <!--level1-->
                    <li> <a href="grid.html"> Dresses </a> <span class="subDropdown plus"></span>
                      <ul class="level1">
                        <li> <a href="grid.html"> Casual Dresses </a> </li>
                        <li> <a href="grid.html"> Evening </a> </li>
                        <li> <a href="grid.html"> Designer </a> </li>
                        <li> <a href="grid.html"> Party </a> </li>
                        <!--end for-each -->
                      </ul>
                      <!--level1--> 
                    </li>
                    <!--level1-->
                    <li> <a href="grid.html"> Lingerie </a> <span class="subDropdown plus"></span>
                      <ul class="level1">
                        <li> <a href="grid.html"> Bras </a> </li>
                        <li> <a href="grid.html"> Bodies </a> </li>
                        <li> <a href="grid.html"> Lingerie Sets </a> </li>
                        <li> <a href="grid.html"> Shapewear </a> </li>
                        <!--end for-each -->
                      </ul>
                      <!--level1--> 
                    </li>
                    <!--level1-->
                    <li> <a href="grid.html"> Jackets </a> <span class="subDropdown plus"></span>
                      <ul class="level1">
                        <li> <a href="grid.html"> Coats </a> </li>
                        <li> <a href="grid.html"> Jackets </a> </li>
                        <li> <a href="grid.html"> Leather Jackets </a> </li>
                        <li> <a href="grid.html"> Blazers </a> </li>
                        <!--end for-each -->
                      </ul>
                      <!--level1--> 
                    </li>
                    <!--level1-->
                    <li> <a href="grid.html"> Swimwear </a> <span class="subDropdown plus"></span>
                      <ul class="level1">
                        <li> <a href="grid.html"> Swimsuits </a> </li>
                        <li> <a href="grid.html"> Beach Clothing </a> </li>
                        <li> <a href="grid.html"> Bikinis </a> </li>
                        <!--end for-each -->
                      </ul>
                      <!--level1--> 
                    </li>
                    <!--level1-->
                  </ul>
                  <!--level0--> 
                </li>
                <!--level 0-->
                <li> <a href="grid.html">Men</a> <span class="subDropdown plus"></span>
                  <ul class="level0_455">
                    <li> <a href="grid.html"> Shoes </a> <span class="subDropdown plus"></span>
                      <ul class="level1">
                        <li> <a href="grid.html"> Flat Shoes </a> </li>
                        <li> <a href="grid.html"> Boots </a> </li>
                        <li> <a href="grid.html"> Heels </a> </li>
                        <!--end for-each -->
                      </ul>
                      <!--level1--> 
                    </li>
                    <!--level1-->
                    <li> <a href="grid.html"> Jewellery </a> <span class="subDropdown plus"></span>
                      <ul class="level1">
                        <li> <a href="grid.html"> Bracelets </a> </li>
                        <li> <a href="grid.html"> Necklaces &amp; Pendants </a> </li>
                        <li> <a href="grid.html"> Pins &amp; Brooches </a> </li>
                        <!--end for-each -->
                      </ul>
                      <!--level1--> 
                    </li>
                    <!--level1-->
                    <li> <a href="grid.html"> Dresses </a> <span class="subDropdown plus"></span>
                      <ul class="level1">
                        <li> <a href="grid.html"> Casual Dresses </a> </li>
                        <li> <a href="grid.html"> Evening </a> </li>
                        <li> <a href="grid.html"> Designer </a> </li>
                        <li> <a href="grid.html"> Party </a> </li>
                        <!--end for-each -->
                      </ul>
                      <!--level1--> 
                    </li>
                    <!--level1-->
                    <li> <a href="grid.html"> Jackets </a> <span class="subDropdown plus"></span>
                      <ul class="level1">
                        <li> <a href="grid.html"> Coats </a> </li>
                        <li> <a href="grid.html"> Jackets </a> </li>
                        <li> <a href="grid.html"> Leather Jackets </a> </li>
                        <li> <a href="grid.html"> Blazers </a> </li>
                        <!--end for-each -->
                      </ul>
                      <!--level1--> 
                    </li>
                    <!--level1-->
                    <li> <a href="grid.html"> Swimwear </a> <span class="subDropdown plus"></span>
                      <ul class="level1">
                        <li> <a href="grid.html"> Swimsuits </a> </li>
                        <li> <a href="grid.html"> Beach Clothing </a> </li>
                        <!--end for-each -->
                      </ul>
                      <!--level1--> 
                    </li>
                    <!--level1-->
                  </ul>
                  <!--level0--> 
                </li>
                <!--level 0-->
                <li> <a href="grid.html">Electronics</a> <span class="subDropdown plus"></span>
                  <ul class="level0_482">
                    <li> <a href="grid.html"> Smartphones </a> <span class="subDropdown plus"></span>
                      <ul class="level1">
                        <li> <a href="grid.html"> Samsung </a> </li>
                        <li> <a href="grid.html"> Apple </a> </li>
                        <li> <a href="grid.html"> Blackberry </a> </li>
                        <li> <a href="grid.html"> Nokia </a> </li>
                        <li> <a href="grid.html"> HTC </a> </li>
                        <!--end for-each -->
                      </ul>
                      <!--level1--> 
                    </li>
                    <!--level1-->
                    <li> <a href="grid.html"> Cameras </a> <span class="subDropdown plus"></span>
                      <ul class="level1">
                        <li> <a href="grid.html"> Digital Cameras </a> </li>
                        <li> <a href="grid.html"> Camcorders </a> </li>
                        <li> <a href="grid.html"> Lenses </a> </li>
                        <li> <a href="grid.html"> Filters </a> </li>
                        <li> <a href="grid.html"> Tripod </a> </li>
                        <!--end for-each -->
                      </ul>
                      <!--level1--> 
                    </li>
                    <!--level1-->
                    <li> <a href="grid.html"> Accesories </a> <span class="subDropdown plus"></span>
                      <ul class="level1">
                        <li> <a href="grid.html"> HeadSets </a> </li>
                        <li> <a href="grid.html"> Batteries </a> </li>
                        <li> <a href="grid.html"> Screen Protectors </a> </li>
                        <li> <a href="grid.html"> Memory Cards </a> </li>
                        <li> <a href="grid.html"> Cases </a> </li>
                        <!--end for-each -->
                      </ul>
                      <!--level1--> 
                    </li>
                    <!--level1-->
                  </ul>
                  <!--level0--> 
                </li>
                <!--level 0-->
                <li> <a href="grid.html">Digital</a> </li>
                <!--level 0-->
                <li class="last"> <a href="grid.html">Fashion</a> </li>
                <!--level 0-->
              </ul>
            </div>
            <!--box-content box-category--> 
          </div>
          <div class="block block-layered-nav">
            <div class="block-title">Shop By</div>
            <div class="block-content">
              <p class="block-subtitle">Shopping Options</p>
              <dl id="narrow-by-list">
                <dt class="odd">Price</dt>
                <dd class="odd">
                  <ol>
                    <li> <a href="#"><span class="price">$0.00</span> - <span class="price">$99.99</span></a> (6) </li>
                    <li> <a href="#"><span class="price">$100.00</span> and above</a> (6) </li>
                  </ol>
                </dd>
                <dt class="even">Manufacturer</dt>
                <dd class="even">
                  <ol>
                    <li> <a href="#">TheBrand</a> (9) </li>
                    <li> <a href="#">Company</a> (4) </li>
                    <li> <a href="#">LogoFashion</a> (1) </li>
                  </ol>
                </dd>
                <dt class="odd">Color</dt>
                <dd class="odd">
                  <ol>
                    <li> <a href="#">Green</a> (1) </li>
                    <li> <a href="#">White</a> (5) </li>
                    <li> <a href="#">Black</a> (5) </li>
                    <li> <a href="#">Gray</a> (4) </li>
                    <li> <a href="#">Dark Gray</a> (3) </li>
                    <li> <a href="#">Blue</a> (1) </li>
                  </ol>
                </dd>
                <dt class="last even">Size</dt>
                <dd class="last even">
                  <ol>
                    <li> <a href="#">S</a> (6) </li>
                    <li> <a href="#">M</a> (6) </li>
                    <li> <a href="#">L</a> (4) </li>
                    <li> <a href="#">XL</a> (4) </li>
                  </ol>
                </dd>
              </dl>
            </div>
          </div>
          <div class="block block-cart">
            <div class="block-title ">My Cart</div>
            <div class="block-content">
              <div class="summary">
                <p class="amount">There are <a href="#">2 items</a> in your cart.</p>
                <p class="subtotal"> <span class="label">Cart Subtotal:</span> <span class="price">$27.99</span> </p>
              </div>
              <div class="ajax-checkout">
                <button type="submit" title="Submit" class="button button-checkout"><span>Checkout</span></button>
              </div>
              <p class="block-subtitle">Recently added item(s) </p>
              <ul>
                <li class="item"> <a class="product-image" title="Fisher-Price Bubble Mower" href="#"><img width="80" alt="Fisher-Price Bubble Mower" src="products-images/product1.jpg"></a>
                  <div class="product-details">
                    <div class="access"> <a class="btn-remove1" title="Remove This Item" href="#"> <span class="icon"></span> Remove </a> </div>
                    <p class="product-name"> <a href="#">Skater Dress In Leaf Print Grouped Product</a> </p>
                    <strong>1</strong> x <span class="price">$19.99</span> </div>
                </li>
                <li class="item last"> <a class="product-image" title="Prince Lionheart Jumbo Toy Hammock" href="#"><img width="80" alt="Prince Lionheart Jumbo Toy Hammock" src="products-images/product1.jpg"></a>
                  <div class="product-details">
                    <div class="access"> <a class="btn-remove1" title="Remove This Item" href="#"> <span class="icon"></span> Remove </a> </div>
                    <p class="product-name"> <a href="#"> Sample Fashion Product Prince Lionheart </a> </p>
                    <strong>1</strong> x <span class="price">$8.00</span> 
                    <!--access clearfix--> 
                  </div>
                </li>
              </ul>
            </div>
          </div>
          <div class="block block-banner"><a href="#"><img src="images/rhs-banner.jpg" alt="block-banner"></a></div>
          <div class="block block-compare">
            <div class="block-title ">Compare Products (2)</div>
            <div class="block-content">
              <ol id="compare-items">
                <li class="item odd">
                  <input type="hidden" class="compare-item-id" value="2173">
                  <a href="#" title="Remove This Item" class="btn-remove1"></a> <a class="product-name" href="#"> Sofa with Box-Edge Polyester Wrapped Cushions</a> </li>
                <li class="item last even">
                  <input type="hidden" class="compare-item-id" value="2174">
                  <a href="#" title="Remove This Item" class="btn-remove1"></a> <a class="product-name" href="#"> Sofa with Box-Edge Down-Blend Wrapped Cushions</a> </li>
              </ol>
              <div class="ajax-checkout">
                <button class="button button-compare" title="Submit" type="submit"><span>Compare</span></button>
                <button class="button button-clear" title="Submit" type="submit"><span>Clear</span></button>
              </div>
            </div>
          </div>
          <div class="block block-list block-viewed">
            <div class="block-title"> Recently Viewed </div>
            <div class="block-content">
              <ol id="recently-viewed-items">
                <li class="item odd">
                  <p class="product-name"><a href="#"> Armchair with Box-Edge Upholstered Arm</a></p>
                </li>
                <li class="item even">
                  <p class="product-name"><a href="#"> Pearce Upholstered Slee pere</a></p>
                </li>
                <li class="item last odd">
                  <p class="product-name"><a href="#"> Sofa with Box-Edge Down-Blend Wrapped Cushions</a></p>
                </li>
              </ol>
            </div>
          </div>
          <div class="block block-poll">
            <div class="block-title">Community Poll </div>
            <form onSubmit="return validatePollAnswerIsSelected();" method="post" action="#" id="pollForm">
              <div class="block-content">
                <p class="block-subtitle">What is your favorite Magento feature?</p>
                <ul id="poll-answers">
                  <li class="odd">
                    <input type="radio" value="5" id="vote_5" class="radio poll_vote" name="vote">
                    <span class="label">
                    <label for="vote_5">Layered Navigation</label>
                    </span> </li>
                  <li class="even">
                    <input type="radio" value="6" id="vote_6" class="radio poll_vote" name="vote">
                    <span class="label">
                    <label for="vote_6">Price Rules</label>
                    </span> </li>
                  <li class="odd">
                    <input type="radio" value="7" id="vote_7" class="radio poll_vote" name="vote">
                    <span class="label">
                    <label for="vote_7">Category Management</label>
                    </span> </li>
                  <li class="last even">
                    <input type="radio" value="8" id="vote_8" class="radio poll_vote" name="vote">
                    <span class="label">
                    <label for="vote_8">Compare Products</label>
                    </span> </li>
                </ul>
                <div class="actions">
                  <button class="button button-vote" title="Vote" type="submit"><span>Vote</span></button>
                </div>
              </div>
            </form>
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