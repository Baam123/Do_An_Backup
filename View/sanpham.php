<!-- quảng cáo -->
<?php
include "quangcao.php";
?>
<!-- end quảng cáo -->
<?php
//b1: xđ sđịnh được tổng số sản phẩm trên trang cần phân trang
$hh = new hanghoa();
//$count=$hh->getHangHoaAllNew(); //lấy ra đc số 14
$count = $hh->getHangHoaAllNew()->rowCount();
// echo $count;
//b2: cho giới hạn 1 trang bao nhiêu sản phẩm tự do
$limit = 8;
//cần tính số trang và strart
$trang = new page();
//b3: lấy ra số trang
$page = $trang->findPage($count, $limit); // 2 trang
// echo $page;
// lấy start
$start = $trang->findStart($limit); //8
// echo $start;
?>

<!-- end số lượt xem san phẩm -->
<!-- sản phẩm-->
<!-- nếu cùng 1 view mà đổ nhiều dữ liệu khác nhau thì thực hiện chức năng gắn cờ-->

<?php
$ac = 1;
if (isset($_GET['action'])) {
    if (isset($_GET['act']) && $_GET['act'] == 'sanphamkhuyenmai') {
        $ac = 2;
    } elseif (isset($_GET['act']) && $_GET['act'] == 'timkiem') {
        $ac = 3;
    } else {
        $ac = 1;
    }
}
?>

<!--Section: Examples-->
<section id="sanpham" class="text-center" style="background-color: black;">

    <!-- Heading -->
    <div class="row">
        <div class="mx-auto">
            <?php
            if ($ac == 1) {
                echo '<h3 class="mb-3 font-weight-bold" style="color: #F3B664;">TẤT CẢ SẢN PHẨM</h3>';
            }
            if ($ac == 2) {
                echo '<h3 class="mb-3 font-weight-bold mt-3" style="color: #F3B664;">TẤT CẢ SẢN PHẨM SALE</h3>';
            }
            if ($ac == 2) {
                echo '<h3 class="mb-3 font-weight-bold mt-3" style="color: #F3B664;">TẤT CẢ SẢN PHẨM TÌM KIẾM</h3>';
            }
            ?>
        </div>

    </div>
    <!--Grid row-->
    <div class="row">
        <?php
        $hh = new hanghoa();
        if ($ac == 1) { 
           // $result = $hh->getHangHoaAllNew(); // trả về tất cả sản phẩm
            $result = $hh->getHangHoaAllNewPage($start, $limit); //8,8
        }

        if ($ac == 2) {
            $result = $hh->getHangHoaAllSale(); // trả về tất cả sản phẩm khuyến mãi
        }

        if ($ac == 3) {
            // nhận giá trị tìm kiếm
            if ($_POST['txtsearch']) {
                $tk = $_POST['txtsearch']; // gót $result=$hh->timKiemTenSP($tk);
            }
        }

        while ($set = $result->fetch()) { // $set=array(mahh=24,tenhh=giày...,hinh=24.jpg)
        ?>
            <!--Grid column-->
            <div class="col-lg-3 col-md-4 mb-3 text-left">

                <div class="view overlay z-depth-1-half">
                    <img src="Content\imagetourdien\<?php echo $set['hinh']; ?>" class="img-fluid" alt="">
                    <div class="mask rgba-white-slight"></div>
                </div>
                <a href="">
                    <span style="color: yellow;"><?php echo $set['tenhh'] . " - " . $set['mausac']; ?></span></br></a>
                <?php
                if ($ac == 1) {
                    echo '<h5 class="my-2 font-weight-bold" style="color: white;">' . number_format($set['dongia']) . '<sup><u>đ</u></sup></br></h5>';
                }
                if ($ac == 2) {
                    echo '<h5 class="my-2 font-weight-bold" style="color: white;">' . number_format($set['giamgia']) . '<sup><u>đ &ensp;</u></sup></font><strike>' . number_format($set['dongia']) . '</strike><sup><u>đ</u></sup></h5>';
                }
                ?>

                <h5 style="color: gray;">Số lượt xem:<?php echo $set['soluotxem']; ?></h5>

            </div>
        <?php
        }
        ?>
    </div>
    <!--Grid row-->

</section>

<!-- end sản phẩm mới nhất -->
<!-- Hiển thị số trang -->
<?php
if ($ac == 1) :
?>
    <div class="col-md-6 div col-md-offset-3">
        <ul class="pagination">
            <?php
            // lấy được trang hiện tại
            $current_page = isset($_GET['page']) ? $_GET['page'] : 1;
            if ($current_page > 1 && $page > 1) {
                echo '<li ><a href="index.php?action=sanpham&page=' . ($current_page - 1) . '">Prev</a></li>';
            }
            for ($i = 1; $i <= $page; $i++) {
            ?>
                <li><a href="index.php?action=sanpham&page=<?php echo $i; ?>">
                        <?php echo $i; ?>
                    </a></li>
            <?php
            }
            // nút next
            if ($current_page < $page && $page > 1) {
                echo '<li ><a href="index.php?action=sanpham&page=' . ($current_page + 1) . '">Next</a></li>';
            }
            ?>
        </ul>
    </div>
<?php
endif;
?>

<style>
    body {
        background-color: black;
    }
</style>