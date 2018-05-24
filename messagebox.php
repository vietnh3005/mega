<?php
session_start();
require 'configs/connect.php';
if(!isset($_SESSION['user'])){
  header('Location: login.php');
} 
$sql = "select * from messages m, message_status ms where m.status_id = ms.status_id and m.is_deleted ='0'";
$query = mysqli_query($conn,$sql);
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
<title>Tài khoản</title>
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

    <div class="main-container col2-right-layout">
      <div class="main container">
        <div class="row">
          <section class="col-main col-sm-9 wow bounceInUp animated">
            <div class="my-account">
              <div class="page-title">
                <h2>TIN NHẮN</h2>
              </div>
              <div class="dashboard">
                <div class="welcome-msg"> <strong>Chào, <?php echo $_SESSION['name']; ?></strong>
                </div>
                <div class="recent-orders">
                  <div class="title-buttons"><strong>Tin nhắn</strong> <a href="#">Xem tất cả</a> </div>
                  <div class="table-responsive">
                    <table class="data-table" id="message_tbl">

                      <thead>
                        <tr class="first last">
                          <th>Người gửi</th>
                          <th>Ngày gửi</th>
                          <th>Tiêu đề</th>
                          <th>&nbsp;</th>
                        </tr>
                      </thead>
                      <tbody>

                        <?php while($row = mysqli_fetch_assoc($query)) 
                        { 
                          ?>
                          <tr class="first odd">
                            <td>Admin</td>
                            <td><?php echo $row['created_date']?></td>
                            <td><?php echo $row['title']?></td>
                            <td class="a-center last"><span class="nobr"> <a href="#" class="open_detail_message"
                              data-title="<?php echo $row['title']?>" data-content="<?php echo $row['content']?>">Chi tiết</a> <span class="separator">|</span> <a href="#">Xóa</a> </span></td>
                          </tr>
                        <?php } ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </section>
            <?php 
            include 'views/assets/account_bar.php';
            ?>
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

  <div class="modal" id="mesdetailsModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modal_title"></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body" id="modal_content">
          <p></p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Thoát</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Hiển thị thông báo -->
  <script>
    <?php
    if(isset($_SESSION['welcome'] )){
      echo "swal('Đăng kí thành công!', 'Chào mừng đến với Mega!', 'success');";
      unset($_SESSION['welcome']);
    }
    ?>
  </script>


<!-- Passing Data to Edits Modal -->
<script type="text/javascript">
  $(function () {
    $(".open_detail_message").click(function () {
      var $title = $(this).data('title');
      var $content = $(this).data('content');

      $("#modal_title").html($title);
      $("#modal_content").html($content);
      
      $("#mesdetailsModal").modal("show");
    })
  });
</script>

  <script type="text/javascript">
    $(document).ready( function () {
      $('#message_tbl').DataTable();
    } );
  </script>
