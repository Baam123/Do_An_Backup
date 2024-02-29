<?php
// kiểm tra người dùng có giỏ hàng hay chưa
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
}
$act = "giohang";
if (isset($_GET['act'])) {
    $act = $_GET['act'];
}
switch ($act) {
    case 'giohang':
        include_once "./View/cart.php";
        break;
    case 'giohang_action':
        // nhận đc idhang, mã màu, size, soluong
        $id = 0;
        $idmau = 0;
        $size = 0;
        $soluong = 0;
        if (isset($_POST['mahh'])) {
            $id = $_POST['mahh'];
            $idmau = $_POST['mymausac'];
            $size = $_POST['size'];
            $soluong = $_POST['soluong'];
            //controller yêu cầu add những thông tin vào trong giohang
            $gh = new giohang();
            $gh->addGioHang($id, $idmau, $size, $soluong);
            echo '<meta http-quiv="refresh" content="0;url:../index.php?action=cart"/>';
        }
        break;
    case 'delete_giohang':
        // truyền qua đây là newqty vì nó là thẻ input 
        if (isset($_POST['newqty'])) {
            $news1 = $_POST['newqty']; //$newsl=array(0:2, 1:4,2:1);
            var_dump($news1);
            // duyệt qua giỏ hàng, đối tượng nào có s1 khác với slcuar newsl thì tiến hành update 
            foreach ($newsl as $key => $value) {
                if ($_SESSION['cart'][$key]['soluong'] != $value) {
                    $gh = new giohang();
                    $gh->updateGioHang($key, $value);
                }
            }
        }
        echo '<meta http-equiv="refresh" content="0;url=../index1.php?action=giohang"/>';
        break;
}
