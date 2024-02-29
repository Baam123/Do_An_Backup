<header style="background-color: black; color: white; height: 100px; position: relative;">
    <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);">
        <a href="index.php?action=home" style="margin: 0; font-size: 30px; font-weight: bold; color: white; text-decoration: none">GUN STORE</a>
    </div>
    <div style="position: absolute; top: 50%; transform: translateY(-50%); left: 10px; color: white;">
        <div style="display: flex;">

            <!-- Menu -->
            <?php
            $hh = new hanghoa();
            $kq = $hh->getMenuId();
            while ($set = $kq->fetch()) {
            ?>
                <a href="<?php echo $set['href'] ?>" class="nav-link text-white" style="margin-left: 10px; font-size: 17px; font-weight: bold;"><?php echo $set['ten_menu'] ?></a>&nbsp;&nbsp;&nbsp;&nbsp;
            <?php } ?>
            <!-- End Menu -->

            <a href="index.php?action=dangky" href="#" class="nav-link text-white" style="margin-left: 10px; font-size: 17px; font-weight: bold;">Đăng Ký</a>&nbsp;&nbsp;&nbsp;&nbsp;

            <?php
            if (!isset($_SESSION['makh']) && !isset($_SESSION['tenkh'])) {
                echo '<a href="index.php?action=dangnhap" class="nav-link text-white" style="font-size: 17px; font-weight: bold;">Đăng Nhập</a>&nbsp;&nbsp;&nbsp;&nbsp;</a>';
            }
            ?>
            <?php
            if (isset($_SESSION['makh']) && isset($_SESSION['tenkh'])) {
                echo '<a class="nav-link text-white" style="font-size: 17px; font-weight: bold;">' . $_SESSION['tenkh'] . '</a>';
            } else {
                echo '<a class="nav-link text-white" style="font-size: 17px; font-weight: bold;">User</a>';
            }
            ?>
            <?php
            if (isset($_SESSION['makh']) && isset($_SESSION['tenkh'])) {
                echo '<a href="index.php?action=dangnhap&act=dangxuat" class="nav-link text-white" style="font-size: 17px; font-weight: bold;">Đăng Xuất</a>&nbsp;&nbsp;&nbsp;&nbsp;</a>';
            }
            ?>
        </div>
    </div>
    <div style="position: absolute; top: 50%; transform: translateY(-50%); right: 10px;">
        <div style="display: flex;">
            <!-- Tìm kiếm -->
            <!-- <a href="index.php?action=sanpham&act=timkiem" method="post" class="nav-link" style="margin-right: 10px;"><img src="Content/imagetourdien/search.png" width="30px" height="30px" alt=""></a> -->
            <!-- <form role="search" style="margin-right: 10px;" class="form-inline my-2 my-lg-0" method="post" action="index.php?action=sanpham&act=timkiem">
                <div class="input-group">
                    <input class="form-control mr-sm-2 ml-sm-0" type="text" name="txtsearch" placeholder="Tìm kiếm" aria-label="Search">
                    <div class="input-group-append">
                        <button class="btn btn-outline-success my-2 my-sm-0" id="btsearch" type="submit">Search</button>
                    </div>
                </div>
            </form> -->
            

            <!-- Giỏ hàng -->
            <a href="index.php?action=giohang" class="nav-link"><img src="Content/imagetourdien/card.png" width="30px" height="30px" alt=""></a>
        </div>
    </div><br>
</header>

<!-- Carosel -->
<div class="row">
    <div class="col-12">
        <div class="row">
            <div class="col-12">
                <div id="carousel-example-1z" class="carousel slide carousel-fade carousel-fade" data-ride="carousel">
                    <!--  -->
                    <div class="carousel-inner z-depth-1-half" role="listbox">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="Content/imagetourdien/Slide1.png" style="height: 450px;" alt=" First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="Content/imagetourdien/Slide2.png" style="height: 450px;" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="Content/imagetourdien/Slide3.png" style="height: 450px;" alt="Third slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
