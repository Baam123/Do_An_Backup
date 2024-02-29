<?php
$act = "dangnhap";
if (isset($_GET["act"])) {
    $act = $_GET['act'];
}

switch ($act) {
    case 'dangnhap':
        include_once "./View/login.php";
        break;

    case 'dangnhap_action':
        echo $act;
        # gửi thông tin đăng nhập về lên
        $user = '';
        $pass = '';
        if (isset($_POST['submit'])) {
            $user = $_POST['txtusername'];
            $pass = $_POST['txtpassword'];
            echo $user;
            $saltF = "G45a#?";
            $saltL = "Td23$%";
            // $passnew=md5($saltF.$pass.$salfL);
            $passnew = md5($pass);
            echo $passnew;
            // controller yêu cầu hiển thị thông tin có hay không? model
            $kh = new user();
            $lgkh = $kh->loginKH($user, $passnew);
            if ($lgkh !== null) {
                echo '<script> alert("Đăng nhập thành công"); </script>';
                // nếu như đăng nhập thành công thì lưu thông tin vào trong session;
                // $khang=$kh->loginKH($user, $passnew);
                $_SESSION['makh'] = $lgkh['makh'];
                $_SESSION['tenkh'] = $lgkh['tenkh'];
                echo '<meta http-equiv="refresh" content="0;url=../index.php?action=home"/>';
            } else {
                echo '<script> alert("Đăng nhập không thành công");</script>';
                echo '<meta http-equiv="refresh" content="0;url=../index.php?action=dangnhap"/>';
            }
        }
        break;
    case "dangxuat":
        unset($_SESSION['makh']);
        unset($_SESSION['tenkh']);
        echo '<script> alert("Bạn có muốn đăng xuất ?");</script>';
        echo '<meta http-equiv="refresh" content="0";url=../index.php?action=home"/>';
        break;
}
