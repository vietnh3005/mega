<form class="cmxform form-horizontal tasi-form" method="post" action='../business/userBusiness.php'>
  <div class="form-group ">
    <label for="firstname" class="control-label col-lg-3">Tên</label>
    <div class="col-sm-9">
      <input class=" form-control" placeholder="Tên đầy đủ" id="name" name="name" type="text" />
    </div>
  </div>
  <div class="form-group ">
    <label for="lastname" class="control-label col-lg-3">Tên đăng nhập</label>
    <div class="col-lg-9">
      <input class=" form-control" placeholder="Tên đăng nhập" id="username" name="username" type="text" />
    </div>
  </div>
  <div class="form-group ">
    <label for="username" class="control-label col-lg-3">Email</label>
    <div class="col-lg-9">
      <input class="form-control " placeholder="Email" id="email" name="email" type="email" />
    </div>
  </div>
  <div class="form-group ">
    <label for="password" class="control-label col-lg-3">Password</label>
    <div class="col-lg-9">
      <input class="form-control " placeholder="password" id="password" name="password" type="password" />
    </div>
  </div>
  <div class="form-group ">
    <label for="confirm_password" class="control-label col-lg-3">Số điện thoại</label>
    <div class="col-lg-9">
      <input class="form-control " placeholder="Số điện thoại" id="phone" name="phone" type="text" />
    </div>
  </div>
  <div class="form-group ">
    <label for="email" class="control-label col-lg-3">Địa chỉ</label>
    <div class="col-lg-9">
      <input class="form-control " placeholder="Địa chỉ" id="address" name="address" type="text" />
    </div>
  </div>
  <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
      <button class="btn btn-danger pull-right" type="submit" name="admin_create_user" value="admin_create_user" >Lưu</button>
      <button class="btn btn-default pull-right" data-dismiss="modal" type="button">Hủy</button>
    </div>
  </div>
</form>