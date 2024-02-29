<?php
class giohang
{
    function addGioHang($id, $idmau, $size, $soluong)
    {
        // Kiểm tra xem $_SESSION['cart'] đã được khởi tạo hay chưa
        if (!isset($_SESSION['cart'])) {
            $_SESSION['cart'] = array(); // Khởi tạo giỏ hàng nếu chưa tồn tại
        }
        //thiếu hình, thiếu tên sản phẩm, thiếu tên màu, thiếu thành tiền, thiếu đongía
        // từ id truy vấn ra lấy đưược tên, đong giá
        $hh = new hanghoa();
        $sanpham = $hh->getHangHoaId($id);
        $tenhh = $sanpham['tenhh'];
        $dongia = $sanpham['dongia'];
        // lấy ra tên màu, từ idmau lấy ra màu sắc
        $mau = $hh->getHangHoaMauSacId($idmau);
        $tenmau = $mau['mausac'];
        // lấy hình dựa vào idsan sam, idmau, size
        $hinh = $hh->getHangHoaIDMauSizeHinh($id, $idmau, $size);
        $img = $hinh['hinh'];
        $total = $soluong * $dongia;
        $flag = false;
        // trước khi thêm vào giỏ hàng thì cần kiểm tra xem là giỏ hàng đó có hàng hay chưa
        // duyệt qua giỏ hàng
        foreach ($_SESSION['cart'] as $key => $item) {
            if ($item['mahh'] == $id && $item['mau'] == $tenmau && $item['size'] == $size) {
                $flag = true;
                $soluong = $soluong + $item['soluong'];
                $this->updateGioHang($key, $soluong); //giohang::updateGioHang..
            }
        }
        // tạo ra đối tượng
        $item = array(
            'mahh' => $id, // thuộc tính=>giá trị
            'tenhh' => $tenhh,
            'hinh' => $img,
            'mau' => $tenmau,
            'size' => $size,
            'soluong' => $soluong,
            'dongia' => $dongia,
            'thanhtien' => $total
        );
        // đem đối tượng thêm vào giỏ hàng a[]
        $_SESSION['cart'][] = $item;
    }

    // Phương thức update hàng hóa
    function updateGioHang($index, $soluong)
    {
        if ($soluong < 0) {
            unset($_SESSION['cart'][$index]);
        } else {
            // update là phép gán
            $_SESSION['cart'][$index]['soluong'] = $soluong;
            $tiennew = $_SESSION['cart'][$index]['soluong'] * $_SESSION['cart'][$index]['dongia'];
            $_SESSION['cart'][$index]['thanhtien'] = $tiennew;
        }
    }
    function getTotal()
    {
        $subtotal = 0;
        foreach ($_SESSION['cart'] as $item) {
            $subtotal += $item['thanhtien'];
        }
        return number_format($subtotal, 2);
    }
}
