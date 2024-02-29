<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <style>
        body {
            background-color: #272829;
        }
    </style>
</head>

<body>
    <script type="text/javascript">
        function chonsize(a) {
            document.getElementById("size").value = a;
        }
    </script>

    <section>
        <article class="row">

            <!-- Hình ảnh -->
            <div class="col-md-6">
                <div class="container-fluid">
                    <div class="wrapper row">
                        <form action="index.php?action=giohang&act=giohang_action" method="post">
                            <div class="preview">
                                <div class="tab-content mt-3 ">
                                    <!-- Đoạn mã PHP để hiển thị hình ảnh sản phẩm -->
                                    <?php
                                    if (isset($_GET['id'])) {
                                        $id = $_GET['id'];
                                        $hh = new hanghoa();
                                        $sanpham = $hh->getHangHoaId($id);
                                        $tenhh = $sanpham['tenhh'];
                                        $dongia = $sanpham['dongia'];
                                        $mota = $sanpham['mota'];
                                    }
                                    ?>
                                    <?php
                                    $hinh = $hh->getHangHoaIdHinh($id);
                                    $img = $hinh->fetch(); // lấy ra dòng đầu tiên
                                    ?>

                                    <div class="tab-pane active">
                                        <img src="Content/imagetourdien/<?php echo $img['hinh']; ?>" alt="" width="100%">
                                    </div>
                                </div>
                                <ul class="preview-thumbnail nav nav-tabs">
                                    <?php while ($img = $hinh->fetch()) : ?>
                                        <li class="active">
                                            <a href="#">
                                                <img src="<?php echo 'Content/imagetourdien/' . $img['hinh']; ?>" alt="Học thiết kế web bán hàng Online">
                                            </a>
                                        </li>
                                    <?php endwhile; ?>
                                </ul>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Thông tin -->
            <div class="col-md-6">
                <div class="details">
                    <!-- Phần hiển thị thông tin sản phẩm -->
                    <input type="hidden" name="mahh" value="" />

                    <!-- Tên -->
                    <h3 class="product-title mt-4" style="color: white;">
                        <?php echo $tenhh; ?>
                    </h3>

                    <!-- Giá -->
                    <h3 class="price text-white">Giá bán:
                        <?php echo $dongia; ?>VND
                    </h3>

                    <!-- Đánh giá -->
                    <h3 class="rating">
                        <div class="stars" style="color: white;">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                        </div>
                    </h3>

                    <!-- Mô tả -->
                    <h3 style="color: white; text-align: left;">Mô tả:<br />
                        <?php echo $mota; ?>
                    </h3>

                    <!-- Đoạn mã PHP để hiển thị các màu sắc của sản phẩm -->
                    <h3 class="text-white mt-3">Màu Sắc:
                        <select name="mymausac" class="form-control mt-2" style="width:150px;">
                            <?php
                            $mau = $hh->getHangHoaIdMau($id);
                            while ($set = $mau->fetch()) :
                            ?>
                                <option value="<?php echo $set['Idmau']; ?>">
                                    <?php echo $set['mausac']; ?>
                                </option>
                            <?php endwhile; ?>
                        </select>
                    </h3>

                    <!-- Size -->
                    <input type="hidden" name="size" id="size" value="0" />
                    <h3 class="text-white">Kích Cỡ Đạn: </br>
                        <!-- Đoạn mã PHP để hiển thị các kích thước của sản phẩm -->
                        <?php
                        $sizebullet = $hh->getHangHoaIdSize($id);
                        while ($set = $sizebullet->fetch()) :
                        ?>
                            <button type="button" name="" class="btn btn-default-hong btn-circle text-black mt-2" style="background-color: white;" id="hong" value="<?php echo $set['idsize']; ?>" onclick="chonsize('<?php echo $set['idsize']; ?>')">
                                <?php echo $set['size']; ?>mm
                            </button>
                        <?php endwhile; ?>
                    </h3>

                    <!--  -->
                    <div>
                        <h3 class="text-white mt-3">Số Lượng:</h3>
                        <input class="text-dark" style="height: 30px;" type="number" id="soluong" name="soluong" min="1" max="100" value="1" size="10" />
                        <button class="add-to-cart" style="height: 30px; background-color: orange; color: white;" type="submit" data-toggle="modal" data-target="#myModal">THÊM VÀO GIỎ HÀNG</button>
                    </div>

                </div>
            </div>
        </article>
    </section>

    <!-- Tab -->
    <div>
        <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <button style="background-color: #272829; color: white;" class="nav-link" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">
                    <h4>MÔ TẢ</h4>
                </button>
                <button style="background-color: #272829; color: white;" class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">
                    <h4>BÌNH LUẬN</h4>
                </button>
            </div>
        </nav>

        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active mt-4" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">
                <h3 class="text-white" style="color: white;">hello</h3>
                <h3 class="text-white"><?php echo $mota; ?></h3>
            </div>

            <div class="tab-pane fade mt-4 text-white" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="1">
                <p>Hello</p>
            </div>
        </div>
    </div>


    <!-- <form action="" method="post">
    <div class="row">

        <input type="hidden" name="txtmahh" value="" />
        <img src="Content/imagetourdien/people.png" width="50px" height="50px" ; />
        <textarea class="input-field" type="text" name="comment" rows="2" cols="70" id="comment" placeholder="Thêm bình luận">  </textarea>
        <input type="submit" class="btn btn-primary" id="submitButton" style="float: right;" value="Bình Luận" />

    </div>

</form>
<div class="row">
    <p class="float-left"><b>Các bình luận</b></p>
    <hr>
</div>
<div class="row">
    <br />
</div> -->

</body>

</html>