<!-- <section class="login-block"> -->
<div class="container form-dk w-50 mt-5">
  <div class="row">
    <div class=" login-sec mx-auto">
      <h2 style="color: white; text-align: center;"><b>Đăng Nhập</b></h2>
      <form action="index.php?action=dangnhap&act=dangnhap_action" class="login-form" method="post">

        <div class="form-group">
          <span style="text-align: start;" for="txtusername">Tên Đăng Nhập:</span>
          <input type="text" class="form-control" name="txtusername" placeholder="">
        </div>

        <div class="form-group">
          <span style="text-align: start;" for="txtpassword">Mật Khẩu:</span>
          <input type="password" class="form-control" name="txtpassword" placeholder="">
        </div>
        
        <div class="form-check">
          <button class="btn btn-lg btn-primary float-right" type="submit"> Đăng Nhập</button>
        </div>

      </form>

      <h3 class="copy-text"><i class="fa-solid fa-gun"></i> Gun Store</h3>
      <a href="index.php?action=forget" class="text-white" style="text-align: start;">Quên mật khẩu</a>

    </div>
  </div>
</div>
<!-- </section> -->
<style>
  body {
    background-color: #272829;
  }

  .form-dk {
    width: 100%;
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
  .form-dk input[type=password] {
    font-family: Poppins-Regular;
    font-size: 16px;
    color: #fff;
    line-height: 1.2;
    display: block;
    width: 500px;
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

  .form-dk a:hover {
    color: black;
  }
</style>