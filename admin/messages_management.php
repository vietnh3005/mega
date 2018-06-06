<?php session_start();
include '../business/messageBusiness.php';
  require '../configs/connect.php';
  if(!isset($_SESSION['admin'])){
    header('Location: login.php');
  } 
?>  
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Siegfried">
    <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Quản lí tin nhắn</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

  <section id="container" class="">
     <!--header start-->
      <?php  include'components/topbar.php'; ?>
      <!--header end-->
      <!--sidebar start-->
      <?php  include'components/sidebar.php'; ?>
      <!--sidebar end-->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
              <!--mail inbox start-->
              <div class="mail-box">
                  <aside class="sm-side">
                      <div class="user-head">
                          <a href="javascript:;" class="inbox-avatar">
                              <img src="<?php echo $_SESSION['admin_avatar']; ?>" alt="" width="60" height="60">
                          </a>
                          <div class="user-name">
                              <h5><a href="#"><?php echo $_SESSION['admin_name']; ?></a></h5>
                          </div>
                          <a href="javascript:;" class="mail-dropdown pull-right">
                              <i class="icon-chevron-down"></i>
                          </a>
                      </div>
                      <div class="inbox-body">
                          <a class="btn btn-compose" data-toggle="modal" href="#myModal">
                              Soạn tin nhắn
                          </a>
                          <!-- Modal -->
                          <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                              <div class="modal-dialog">
                                  <div class="modal-content">
                                      <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                          <h4 class="modal-title">Soạn tin nhắn</h4>
                                      </div>
                                      <div class="modal-body">
                                          <form class="form-horizontal" role="form">
                                              <div class="form-group">
                                                  <label  class="col-lg-2 control-label">To</label>
                                                  <div class="col-lg-10">
                                                      <input type="text" class="form-control" id="inputEmail1" placeholder="">
                                                  </div>
                                              </div>
                                              <div class="form-group">
                                                  <label  class="col-lg-2 control-label">Cc / Bcc</label>
                                                  <div class="col-lg-10">
                                                      <input type="text" class="form-control" id="cc" placeholder="">
                                                  </div>
                                              </div>
                                              <div class="form-group">
                                                  <label class="col-lg-2 control-label">Subject</label>
                                                  <div class="col-lg-10">
                                                      <input type="text" class="form-control" id="inputPassword1" placeholder="">
                                                  </div>
                                              </div>
                                              <div class="form-group">
                                                  <label class="col-lg-2 control-label">Message</label>
                                                  <div class="col-lg-10">
                                                      <textarea name="" id="" class="form-control" cols="30" rows="10"></textarea>
                                                  </div>
                                              </div>

                                              <div class="form-group">
                                                  <div class="col-lg-offset-2 col-lg-10">
                                                      <span class="btn green fileinput-button">
                                                        <i class="icon-plus icon-white"></i>
                                                        <span>Attachment</span>
                                                        <input type="file" multiple=""  name="files[]">
                                                      </span>
                                                      <button type="submit" class="btn btn-send">Send</button>
                                                  </div>
                                              </div>
                                          </form>
                                      </div>
                                  </div><!-- /.modal-content -->
                              </div><!-- /.modal-dialog -->
                          </div><!-- /.modal -->
                      </div>
                      <ul class="inbox-nav inbox-divider">
                          <li class="">
                              <a href="#"><i class="icon-inbox"></i> Tin đến <span class="label label-danger pull-right">2</span></a>

                          </li>
                          <li>
                              <a href="#"><i class="icon-envelope-alt"></i> Tin đã gửi</a>
                          </li>
                          <li>
                              <a href="#"><i class="icon-bookmark-empty"></i> Tin quan trọng</a>
                          </li>
                          <li>
                              <a href="#"><i class=" icon-external-link"></i> Tin nháp <span class="label label-info pull-right">30</span></a>
                          </li>
                          <li>
                              <a href="#"><i class=" icon-trash"></i> Tin đã xóa</a>
                          </li>
                      </ul>
                      <ul class="nav nav-pills nav-stacked labels-info inbox-divider">
                          <li> <h4>Labels</h4> </li>
                          <li> <a href="#"> <i class=" icon-sign-blank text-danger"></i> Work </a> </li>
                          <li> <a href="#"> <i class=" icon-sign-blank text-success"></i> Design </a> </li>
                          <li> <a href="#"> <i class=" icon-sign-blank text-info "></i> Family </a>
                          <li> <a href="#"> <i class=" icon-sign-blank text-warning "></i> Friends </a>
                          <li> <a href="#"> <i class=" icon-sign-blank text-primary "></i> Office </a>
                          </li>
                      </ul>

                      <div class="inbox-body text-center">
                          <div class="btn-group">
                              <a href="javascript:;" class="btn mini btn-primary">
                                  <i class="icon-plus"></i>
                              </a>
                          </div>
                          <div class="btn-group">
                              <a href="javascript:;" class="btn mini btn-success">
                                  <i class="icon-phone"></i>
                              </a>
                          </div>
                          <div class="btn-group">
                              <a href="javascript:;" class="btn mini btn-info">
                                  <i class="icon-cog"></i>
                              </a>
                          </div>
                      </div>

                  </aside>
                  <aside class="lg-side">
                      <div class="inbox-head">
                          <h3>Tin đến</h3>
                          <form class="pull-right position" action="#">
                              <div class="input-append">
                                  <input type="text"  placeholder="Tìm kiếm" class="sr-input">
                                  <button type="button" class="btn sr-btn"><i class="icon-search"></i></button>
                              </div>
                          </form>
                      </div>
                      <div class="inbox-body">
                         <div class="mail-option">
                             <div class="chk-all">
                                 <input type="checkbox" class="mail-checkbox mail-group-checkbox">
                                 <div class="btn-group" >
                                     <a class="btn mini all" href="#" data-toggle="dropdown">
                                         All
                                         <i class="icon-angle-down "></i>
                                     </a>
                                     <ul class="dropdown-menu">
                                         <li><a href="#"> None</a></li>
                                         <li><a href="#"> Read</a></li>
                                         <li><a href="#"> Unread</a></li>
                                     </ul>
                                 </div>
                             </div>

                             <div class="btn-group">
                                 <a class="btn mini tooltips" href="#" data-toggle="dropdown" data-placement="top" data-original-title="Refresh">
                                     <i class=" icon-refresh"></i>
                                 </a>
                             </div>
                             <div class="btn-group hidden-phone">
                                 <a class="btn mini blue" href="#" data-toggle="dropdown">
                                     More
                                     <i class="icon-angle-down "></i>
                                 </a>
                                 <ul class="dropdown-menu">
                                     <li><a href="#"><i class="icon-pencil"></i> Mark as Read</a></li>
                                     <li><a href="#"><i class="icon-ban-circle"></i> Spam</a></li>
                                     <li class="divider"></li>
                                     <li><a href="#"><i class="icon-trash"></i> Delete</a></li>
                                 </ul>
                             </div>
                             <div class="btn-group">
                                 <a class="btn mini blue" href="#" data-toggle="dropdown">
                                     Move to
                                     <i class="icon-angle-down "></i>
                                 </a>
                                 <ul class="dropdown-menu">
                                     <li><a href="#"><i class="icon-pencil"></i> Mark as Read</a></li>
                                     <li><a href="#"><i class="icon-ban-circle"></i> Spam</a></li>
                                     <li class="divider"></li>
                                     <li><a href="#"><i class="icon-trash"></i> Delete</a></li>
                                 </ul>
                             </div>

                             <ul class="unstyled inbox-pagination">
                                 <li><span>1-50 of 234</span></li>
                                 <li>
                                     <a href="#" class="np-btn"><i class="icon-angle-left  pagination-left"></i></a>
                                 </li>
                                 <li>
                                     <a href="#" class="np-btn"><i class="icon-angle-right pagination-right"></i></a>
                                 </li>
                             </ul>
                         </div>
                          <table class="table table-inbox table-hover">
                            <tbody>
                            	<?php load_message(); ?>
                              <!-- <tr class="unread">
                                  <td class="inbox-small-cells">
                                      <input type="checkbox" class="mail-checkbox">
                                  </td>
                                  <td class="inbox-small-cells"><i class="icon-star"></i></td>
                                  <td class="view-message  dont-show">Vector Lab</td>
                                  <td class="view-message ">Lorem ipsum dolor imit set.</td>
                                  <td class="view-message  inbox-small-cells"><i class="icon-paper-clip"></i></td>
                                  <td class="view-message  text-right">9:27 AM</td>
                              </tr>
                              <tr class="unread">
                                  <td class="inbox-small-cells">
                                      <input type="checkbox" class="mail-checkbox">
                                  </td>
                                  <td class="inbox-small-cells"><i class="icon-star"></i></td>
                                  <td class="view-message dont-show">Mosaddek Hossain</td>
                                  <td class="view-message">Hi Bro, How are you?</td>
                                  <td class="view-message inbox-small-cells"></td>
                                  <td class="view-message text-right">March 15</td>
                              </tr>
                              <tr class="">
                                  <td class="inbox-small-cells">
                                      <input type="checkbox" class="mail-checkbox">
                                  </td>
                                  <td class="inbox-small-cells"><i class="icon-star"></i></td>
                                  <td class="view-message dont-show">Dulal khan</td>
                                  <td class="view-message">Lorem ipsum dolor sit amet</td>
                                  <td class="view-message inbox-small-cells"></td>
                                  <td class="view-message text-right">June 15</td>
                              </tr>
                              <tr class="">
                                  <td class="inbox-small-cells">
                                      <input type="checkbox" class="mail-checkbox">
                                  </td>
                                  <td class="inbox-small-cells"><i class="icon-star inbox-started"></i></td>
                                  <td class="view-message dont-show">Mosaddek <span class="label label-danger pull-right">urgent</span></td>
                                  <td class="view-message">Lorem ipsum dolor sit amet</td>
                                  <td class="view-message inbox-small-cells"></td>
                                  <td class="view-message text-right">May 23</td>
                              </tr>
                              <tr class="">
                                  <td class="inbox-small-cells">
                                      <input type="checkbox" class="mail-checkbox">
                                  </td>
                                  <td class="inbox-small-cells"><i class="icon-star"></i></td>
                                  <td class="view-message dont-show">Facebook <span class="label label-success pull-right">megazine</span></td>
                                  <td class="view-message view-message">Dolor sit amet, consectetuer adipiscing</td>
                                  <td class="view-message inbox-small-cells"></td>
                                  <td class="view-message text-right">March 04</td>
                              </tr>
                              <tr class="">
                                  <td class="inbox-small-cells">
                                      <input type="checkbox" class="mail-checkbox">
                                  </td>
                                  <td class="inbox-small-cells"><i class="icon-star"></i></td>
                                  <td class="view-message dont-show">Facebook <span class="label label-info pull-right">family</span></td>
                                  <td class="view-message view-message">Dolor sit amet, consectetuer adipiscing</td>
                                  <td class="view-message inbox-small-cells"></td>
                                  <td class="view-message text-right">March 24</td>
                              </tr> -->
                          </tbody>
                          </table>
                      </div>
                  </aside>
              </div>
              <!--mail inbox end-->
          </section>
      </section>
      <!--main content end-->
      <!--footer start-->
      <footer class="site-footer">
          <div class="text-center">
              2018 Admega Management Page
              <a href="#" class="go-top">
                  <i class="icon-angle-up"></i>
              </a>
          </div>
      </footer>
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="js/respond.min.js" ></script>

    <!--common script for all pages-->
    <script src="js/common-scripts.js"></script>


  </body>
</html>
