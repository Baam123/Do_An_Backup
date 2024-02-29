<div class="form-dk mt-5">
  <h2 style="color: white;"><b>Đăng ký thành viên</b></h2>
  <form action="index.php?action=dangky&act=dangky_action" method="post" class="form" role="form">

    <div class="row">
      <div class="col-xs-4 col-md-4 mt-3">
        <span style="text-align: start;" for="txttenkh">Tên Khách Hàng:</span>
      </div>

      <div class="col-xs-8 col-md-8">
        <input class="form-control" id="txttenkh" name="txttenkh" placeholder="Tên khách hàng" required="" autofocus="" type="text">
      </div>

      <div class="col-xs-4 col-md-4 mt-3">
        <span style="text-align: start;" for="txtdiachi">Địa chỉ:</span>
      </div>

      <div class="col-xs-8 col-md-8">
        <input class="form-control" id="txtdiachi" name="txtdiachi" placeholder="Địa chỉ khách hàng" required="" autofocus="" type="text">
      </div>

      <div class="col-xs-4 col-md-4 mt-3">
        <span style="text-align: start;" for="txtsodt">Số Điện Thoại:</span>
      </div>

      <div class="col-xs-8 col-md-8">
        <input class="form-control" id="txtsodt" name="txtsodt" placeholder="Số điện thoại khách hàng" required="" autofocus="" type="text">
      </div>

      <div class="col-xs-4 col-md-4 mt-3">
        <span style="text-align: start;" for="txtusername">Tên Đăng Nhập:</span>
      </div>

      <div class="col-xs-8 col-md-8">
        <input class="form-control" id="txtusername" name="txtusername" placeholder="Tên đăng nhập" required="" type="text">
      </div>

      <div class="col-xs-4 col-md-4 mt-3">
        <span style="text-align: start;" for="txtemail">Email:</span><br>
      </div>
      <!-- <span style="text-align: start; width: 10%;" for="txtemail">Email:</span> -->
      <div class="col-xs-8 col-md-8">
        <input class="form-control" id="txtemail" name="txtemail" placeholder="Email" type="email">
        <input class="form-control" id="txtpass" name="txtpass" placeholder="Mật khẩu" type="password">
        <input class="form-control" id="retypepassword" name="retypepassword" placeholder="Nhập lại mật khẩu" type="password">
      </div>
      <button class="btn btn-lg btn-light w-100 mx-auto rounded-pill" type="submit" name="submit">Đăng ký</button>

  </form>
</div>
<style>
  body {
    background-color: #272829;
  }

  .form-dk {
    width: 50%;
    border-radius: 10px;
    overflow: hidden;
    padding: 55px 55px 37px;
    background: #6B728E;
    background: -webkit-linear-gradient(top, #6B728E, #50577A);
    background: -o-linear-gradient(top, #6B728E, #50577A);
    background: -moz-linear-gradient(top, #6B728E, #50577A);
    background: linear-gradient(top, #6B728E, #50577A);
    text-align: center;
    margin: auto;
    color: #fff;
  }

  .form-dk h2 {
    font-size: 30px;
    line-height: 1.2;
    text-align: center;
    text-transform: uppercase;
    display: block;
    margin-bottom: 30px;
    color: #474E68;
  }

  .form-dk span {
    display: block;
    margin-bottom: 20px;
    color: #fff;
  }

  .form-dk input[type=text],
  .form-dk input[type=password],
  .form-dk input[type=email] {
    font-family: Poppins-Regular;
    font-size: 16px;
    color: #fff;
    line-height: 1.2;
    display: block;
    width: calc(100% - 10px);
    height: 45px;
    background: 0 0;
    padding: 10px 0;
    border-bottom: 2px solid rgba(255, 255, 255, .24) !important;
    border: 0;
    outline: 0;
  }

  .form-dk input[type=text]:focus,
  .form-dk input[type=password]:focus {
    color: #fff;
  }

  .form-dk input[type=password] {
    margin-bottom: 20px;
  }

  .form-dk input::placeholder {
    color: #fff;
  }

  .form-dk input[type=submit] {
    font-size: 16px;
    color: #fff;
    line-height: 1.2;
    padding: 0 20px;
    min-width: 120px;
    height: 50px;
    border-radius: 25px;
    background: #474E68;
    position: relative;
    z-index: 1;
    border: 0;
    outline: 0;
    display: block;
    margin: 30px auto;
  }

  .form-dk img {
    width: 50px;
    /* Đặt kích thước mong muốn */
    float: left;
    /* Nằm ở phía bên trái */
    margin-right: 10px;
    /* Khoảng cách giữa ảnh và nội dung khác */
  }
</style>