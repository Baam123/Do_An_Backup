<?php
// để controller đều phối nhũng view khác nhau thì ta dùng 1 biến tiếp theo phía
// sau biến action, act
$act = "sanpham";
if (isset($_GET['act'])) {
    $act = $_GET['act']; //sanphamkhuyenmai
}
switch ($act) {
    case 'sanpham':
        include_once "./View/sanpham.php";
        break;

    case 'sanphamkhuyenmai':
        include_once "./View/sanpham.php";
        break;

    case 'chitietsanpham':
        include_once "./View/sanphamchitiet.php";
        break;
    case 'timkiem':
        // tìm kiếm trên trang sản phẩm 
        include_once "./View/sanpham.php"; 
        break;
}
// cùng do về 1 view nên dùng cách dưới là được
// include_once "./View/sanpham.php";
