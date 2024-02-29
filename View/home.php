<!--Section: Examples-->
<section id="examples" class="text-center">

    <!-- Heading -->
    <div class="row" style="background-color: black;">
        <div class="col-lg-8 text-right mt-3">
            <h3 class="mb-5 font-weight-bold mt-2" style="color: #F3B664;">SẢN PHẨM ĐANG HOT 2024</h3>
        </div>

        <div class="col-lg-4 text-right mt-3">
            <a href="index.php?action=sanpham">
                <span style="color: gray; ">Xem chi tiết</span>
            </a>

            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Sắp xếp:
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#">Sản phẩm phổ biến nhất</a>
                    <a class="dropdown-item" href="#">Giá từ thấp đến cao</a>
                    <a class="dropdown-item" href="#">Giá từ cao đến thấp</a>
                    <a class="dropdown-item" href="#">Sản phẩm bán chạy nhất</a>
                </div>
            </div>
            
        </div>

    </div>
    <!--Grid row-->
    <div class="row" style="background-color: black;">
        <?php
        // tạo đối tượng mới sài đc getHangHoaNew
        $hh = new hanghoa();
        $result = $hh->getHangHoaNew(); //table 8 sp
        //đõ từng sp lên thiết kế view
        while ($set = $result->fetch()) : // $set=array(mahh=24,tenhh=giày...,hinh=24.jpg)
        ?>

            <!--Grid column-->
            <div class="col-lg-3 col-md-4 mb-3 text-left" style="background-color: black;">

                <!-- Hình ảnh -->
                <div class="view overlay z-depth-1-half">
                    <img src="Content\imagetourdien\<?php echo $set['hinh']; ?>" class="img-fluid" alt="">
                    <div class="mask rgba-white-slight"></div>
                </div>

                <!-- Tên + màu sắc -->
                <a class="mt-3" style="color: yellow;" href="index.php?action=sanpham&act=chitietsanpham&id=<?php echo $set['mahh']; ?>">
                    <span><?php echo $set['tenhh'] . " - " . $set['mausac']; ?></span></br></a>

                <!-- Giá tiền -->
                <h5 class="mt-2 font-weight-bold" style="color: white;"><?php echo number_format($set['dongia']); ?><sup><u>đ</u></sup></br>
                </h5>

                <!-- New -->
                <!-- <button class="btn btn-danger" id="may4" value="lap 4">New</button> -->
                <h5 class="mt-2" style="color: gray;">Số lượt xem:<?php echo $set['soluotxem']; ?></h5>

            </div>
        <?php
        endwhile;
        ?>
    </div>

    <!--Grid row-->

</section>
<!-- end sản phẩm mới nhất -->

<!-- sản phẩm khuyến mãi -->
<section id="examples" class="text-center" style="background-color: black;">

    <!-- Heading -->
    <div class="row" style="background-color: black;">
        <div class="col-lg-8 text-right">
            <h3 class="mb-5 font-weight-bold mt-3" style="color: #F3B664;">SẢN PHẨM KHUYẾN MÃI</h3>
        </div>
        <div class="col-lg-4 text-right mt-3">
            <a href="index.php?action=sanpham&act=sanphamkhuyenmai">
                <span style="color: gray;">Xem chi tiết</span>
            </a>
        </div>
    </div>
    <!--Grid row-->
    <div class="row" style="background-color: black;">
        <?php
        $kq = $hh->getHangHoaAllSale(); //table 8 sp
        while ($set = $kq->fetch()) { // $set=array(mahh=24,tenhh=giày...,hinh=24.jpg)
        ?>

            <!--Grid column-->
            <div class="col-lg-3 col-md-4 mb-3 text-left">
                <!-- Hình ảnh -->
                <div class="view overlay z-depth-1-half">
                    <img src="Content\imagetourdien\<?php echo $set['hinh']; ?>" class="img-fluid" alt="">
                    <div class="mask rgba-white-slight"></div>
                </div>

                <!-- Tên + màu sắc -->
                <a href="index.php?action=sanpham%act=chitietsanpham&id=<?php echo $set['mahh']; ?>" style="color: yellow;">
                    <span><?php echo $set['tenhh'] . " - " . $set['mausac']; ?></span></br></a>

                <!-- Giá tiền -->
                <h5 class="my-2 font-weight-bold">
                    <font style="color: white;"><?php echo number_format($set['giamgia']); ?><sup><u>đ</u></sup></font>
                    <strike style="color: gray;"><?php echo number_format($set['dongia']); ?></strike><sup><u>đ</u></sup>
                </h5>

                <!-- New -->
                <h5 class="mt-2" style="color: gray;">Số lượt xem:<?php echo $set['soluotxem']; ?></h5>
            </div>
        <?php
        }
        ?>
    </div>
    <!--Grid row-->
</section>
<!-- end sản phẩm khuyến mãi -->

<style>
    body {
        background-color: #20262E;
    }
</style>

<!-- jQuery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Popper.js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<!-- Bootstrap JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>