<?php
$act = "dangky";
if (isset($_GET['act'])) {
    $act = $_GET['act'];
}
switch ($act) {
    case 'dangky':
        include_once "./View/registration.php";
        break;

    case 'dangky_action':
        // Gửi dữ liệu thông tin người dùng vừa nhập qua dangky_action 
        // nhận
        $tenkh = '';
        $dc = '';
        $sodt = '';
        $user = '';
        $email = '';
        $pass = '';
        if (isset($_POST['submit'])) {
            $tenkh = $_POST['txttenkh']; //minhanh
            $dc = $_POST['txtdiachi']; //hcm
            $sodt = $_POST['txtsodt']; //12345
            $user = $_POST['txtusername']; //anhanh
            $email = $_POST['txtemail']; //anh1@itc.edu.vn
            $pass = $_POST['txtpass']; //123
            $saltF = "G45a#?";
            $saltL = "Td23$%";
            // $passnew = md5($saltF . $pass . $saltL); //đã đc mã hóa
            $passnew = md5($pass);
            // controller yêu cầu phải đem thông tin này insert vào database?Model
            // trước khi insert cần kiểm tra xem user và email đã tồn tại chưa?
            $kh = new user();
            $check = $kh->checkUser($user, $email)->rowCount();
            if ($check >= 1) {
                echo '<script> alert("Username hoặc email đã tồn tại"); </script>';
                echo '<meta http-equiv="refresh" content="0;url=../index.php?action=dangky"/>';
                // include_once "./View/registration.php";
            } else {
               // echo '<script> alert("Đăng ký thành công"); </script>';
                $inskh = $kh->insertKH($tenkh, $user, $passnew, $email, $dc, $sodt);
                if ($inskh !== false) {
                    echo '<script> alert("Đăng ký thành công"); </script>';
                   // echo '<meta http-equiv="refresh" content="0;url=../index.php"/>';
                    // include_once "./View/home.php";
                } else {
                    echo '<script> alert("Đăng ký không thành công"); </script>';
                    // include_once "./View/registration.php";
                  //  echo '<meta http-equiv="refresh" content="0;url=../index.php?action=dangky"/>';
                }
            }
        }
        break;
}
