-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th2 29, 2024 lúc 04:38 AM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `gunstore`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binhluan1`
--

CREATE TABLE `binhluan1` (
  `mabl` int(11) NOT NULL,
  `mahh` int(11) NOT NULL,
  `makh` int(11) NOT NULL,
  `ngaybl` date NOT NULL,
  `noidung` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comment`
--

CREATE TABLE `comment` (
  `idcomment` int(11) NOT NULL,
  `idkh` int(11) NOT NULL,
  `idhanghoa` int(11) NOT NULL,
  `content` text NOT NULL,
  `luotthich` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `comment`
--

INSERT INTO `comment` (`idcomment`, `idkh`, `idhanghoa`, `content`, `luotthich`) VALUES
(1, 3, 24, 'Đẹp', 0),
(2, 3, 22, 'Lực bắn mạnh', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cthanghoa`
--

CREATE TABLE `cthanghoa` (
  `idhanghoa` int(11) NOT NULL,
  `idmau` int(11) NOT NULL,
  `idsize` int(11) NOT NULL,
  `dongia` float NOT NULL,
  `soluongton` int(11) NOT NULL,
  `hinh` varchar(100) NOT NULL,
  `giamgia` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `cthanghoa`
--

INSERT INTO `cthanghoa` (`idhanghoa`, `idmau`, `idsize`, `dongia`, `soluongton`, `hinh`, `giamgia`) VALUES
(1, 1, 1, 5000000, 10, '1.jpg', 4500000),
(2, 2, 1, 5000000, 12, '2.jpg', 5000000),
(3, 2, 1, 5000000, 12, '3.jpg', 0),
(4, 2, 1, 5000000, 12, '4.jpg', 0),
(5, 2, 2, 5000000, 12, '5.jpg', 3000000),
(6, 2, 2, 5000000, 12, '6.jpg', 3000000),
(7, 2, 2, 5000000, 12, '7.jpg', 0),
(8, 2, 2, 5000000, 12, '8.jpg', 0),
(9, 2, 2, 5000000, 12, '9.jpg', 0),
(10, 2, 2, 5000000, 12, '10.jpg', 0),
(11, 2, 2, 5000000, 12, '11.jpg', 3500000),
(12, 2, 2, 5000000, 12, '12.jpg', 0),
(13, 2, 2, 5000000, 12, '13.jpg', 4000000),
(14, 2, 2, 5000000, 12, '14.jpg', 0),
(15, 2, 2, 5000000, 12, '15.jpg', 0),
(16, 2, 2, 5000000, 12, '16.jpg', 0),
(17, 2, 3, 5000000, 12, '17.jpg', 2500000),
(18, 1, 3, 5000000, 12, '18.jpg', 0),
(19, 2, 3, 5000000, 4, '19.jpg', 0),
(20, 2, 3, 5000000, 4, '20.jpg', 0),
(21, 2, 4, 5000000, 12, '21.jpg', 0),
(22, 2, 4, 5000000, 5, '22.jpg', 3500000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cthoadon`
--

CREATE TABLE `cthoadon` (
  `masohd` int(11) NOT NULL,
  `mahh` int(11) NOT NULL,
  `soluongmua` int(11) NOT NULL,
  `mausac` varchar(20) NOT NULL,
  `size` int(3) NOT NULL,
  `thanhtien` int(11) NOT NULL,
  `tinhtrang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `cthoadon`
--

INSERT INTO `cthoadon` (`masohd`, `mahh`, `soluongmua`, `mausac`, `size`, `thanhtien`, `tinhtrang`) VALUES
(1, 22, 1, 'Màu Xanh Army', 36, 5000000, 0),
(1, 24, 2, ' Màu Đen', 35, 10000000, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hanghoa`
--

CREATE TABLE `hanghoa` (
  `mahh` int(11) NOT NULL,
  `tenhh` varchar(60) NOT NULL,
  `maloai` int(11) NOT NULL,
  `dacbiet` bit(1) NOT NULL,
  `soluotxem` int(11) NOT NULL,
  `ngaylap` date NOT NULL,
  `mota` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `hanghoa`
--

INSERT INTO `hanghoa` (`mahh`, `tenhh`, `maloai`, `dacbiet`, `soluotxem`, `ngaylap`, `mota`) VALUES
(1, 'Walther P99', 1, b'1', 5, '2020-08-08', 'Vũ khí cầm tay mạnh mẽ, nhỏ gọn nhưng đầy uy lực'),
(2, 'Desert Eagle', 1, b'1', 3, '2020-08-08', 'Vũ khí cầm tay mạnh mẽ, nhỏ gọn nhưng đầy uy lực'),
(3, 'Colt M1911', 1, b'0', 4, '2020-08-08', 'Vũ khí cầm tay mạnh mẽ, nhỏ gọn nhưng đầy uy lực'),
(4, 'Glock', 1, b'0', 1, '2020-08-08', 'Vũ khí cầm tay mạnh mẽ, nhỏ gọn nhưng đầy uy lực'),
(5, 'AK-47', 2, b'1', 0, '2020-08-08', 'Vũ khí hạng nặng, tầm bắn xa, sức mạnh đáng kinh ngạc'),
(6, 'AK-103', 2, b'0', 0, '2020-08-08', 'Vũ khí hạng nặng, tầm bắn xa, sức mạnh đáng kinh ngạc'),
(7, 'M16A1', 2, b'1', 1, '2020-08-08', 'Vũ khí hạng nặng, tầm bắn xa, sức mạnh đáng kinh ngạc'),
(8, 'Barrett REC7', 2, b'1', 1, '2020-08-08', 'Vũ khí hạng nặng, tầm bắn xa, sức mạnh đáng kinh ngạc'),
(9, 'FAMAS', 2, b'0', 1, '2020-08-08', 'Vũ khí hạng nặng, tầm bắn xa, sức mạnh đáng kinh ngạc'),
(10, 'FN F2000', 2, b'0', 2, '2020-08-08', 'Vũ khí hạng nặng, tầm bắn xa, sức mạnh đáng kinh ngạc'),
(11, 'QBZ 95', 2, b'0', 1, '2020-08-08', 'Vũ khí hạng nặng, tầm bắn xa, sức mạnh đáng kinh ngạc'),
(12, 'XM8', 2, b'0', 2, '2020-08-08', 'Vũ khí hạng nặng, tầm bắn xa, sức mạnh đáng kinh ngạc'),
(13, 'MP-5', 3, b'1', 2, '2020-08-08', 'Đa năng, bắn liên tục, trọng lượng nhẹ'),
(14, 'UZI', 3, b'0', 1, '2020-08-08', 'Đa năng, bắn liên tục, trọng lượng nhẹ'),
(15, 'FN P90', 3, b'1', 1, '2020-08-08', 'Đa năng, bắn liên tục, trọng lượng nhẹ'),
(16, 'UMP', 3, b'0', 1, '2020-08-08', 'Đa năng, bắn liên tục, trọng lượng nhẹ'),
(17, 'Dragunov SVD', 4, b'0', 1, '2020-08-15', 'Vũ khí có độ chính xác tuyệt vời, bắn xa, sức sát thương khủng'),
(18, 'AWM', 4, b'0', 1, '2020-08-04', 'Vũ khí có độ chính xác tuyệt vời, bắn xa, sức sát thương khủng'),
(19, 'Kar 98', 4, b'1', 1, '2020-07-04', 'Vũ khí có độ chính xác tuyệt vời, bắn xa, sức sát thương khủng'),
(20, 'Barrett M82', 4, b'0', 4, '2023-10-30', 'Vũ khí có độ chính xác tuyệt vời, bắn xa, sức sát thương khủng'),
(21, 'Benelli M4', 5, b'0', 4, '2023-10-30', 'Độ chính xác cao, sức sát thương khủng ở cự ly gần'),
(22, 'Remington 870 TAC-14', 5, b'0', 4, '2023-10-30', 'Độ chính xác cao, sức sát thương khủng ở cự ly gần'),
(23, 'Hand Grenade M67 (America)', 6, b'0', 4, '2023-10-30', 'Vũ khí nổ mạnh, tiêu diệt đa mục tiêu một cách nhanh chóng trên phạm vi rộng'),
(24, 'Hand Grenade F1 (Russia)', 6, b'0', 5, '2023-10-30', 'Vũ khí nổ mạnh, tiêu diệt đa mục tiêu một cách nhanh chóng trên phạm vi rộng'),
(33, 'giày thể thao', 4, b'0', 0, '2023-10-30', 'đẹp'),
(34, 'giày thể thao', 1, b'0', 3, '2023-10-30', 'đẹp'),
(35, 'giày thể thao', 4, b'0', 5, '2023-10-09', 'đẹp'),
(36, 'giày lười dáng thể thao', 4, b'0', 2, '2023-10-30', 'đẹp'),
(37, 'giày lười dáng thể thao', 3, b'0', 0, '2023-10-30', 'đẹp'),
(39, 'giày lười dáng thể thao', 5, b'0', 0, '2023-10-30', 'đẹp'),
(40, 'giày thể thao', 1, b'0', 0, '2023-10-23', 'đẹp'),
(41, 'giày thể thao', 1, b'0', 0, '2023-10-30', 'đẹp'),
(42, 'giày công sở', 1, b'0', 14, '2023-10-30', 'đẹp, phong cách, thời trang'),
(43, 'giày thể thao', 5, b'0', 1, '2023-10-03', 'đẹp,hhhh'),
(44, 'giày thể thao', 5, b'0', 15, '2023-10-03', 'đẹp, thời trang, công sở');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadon`
--

CREATE TABLE `hoadon` (
  `masohd` int(11) NOT NULL,
  `makh` int(11) NOT NULL,
  `ngaydat` date NOT NULL,
  `tongtien` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `hoadon`
--

INSERT INTO `hoadon` (`masohd`, `makh`, `ngaydat`, `tongtien`) VALUES
(1, 3, '2023-10-16', 15000000),
(2, 3, '2023-10-16', 15000000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `makh` int(11) NOT NULL,
  `tenkh` varchar(50) NOT NULL,
  `username` varchar(25) NOT NULL,
  `matkhau` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `diachi` text DEFAULT NULL,
  `sodienthoai` varchar(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`makh`, `tenkh`, `username`, `matkhau`, `email`, `diachi`, `sodienthoai`) VALUES
(1, 'tú trần', 'tutran', '8f8e2909a8f683c31159ee51d593a642', 'tu@gmail.com', 'hcm', '9090789678'),
(2, 'minh minh', 'minhminh', '8f8e2909a8f683c31159ee51d593a642', 'minh@gmail.com', 'bình định', '90907896789'),
(3, 'teo', 'teoteo', '3ff19fad9f5844248f601ab23381cc88', 'teo123@gmail.com', 'hcm', '9090789698'),
(4, 'ý nhi', 'nhinhi', '87f038af05196e3dfa958a521f6f400e', 'ngvynhi.itc@gmail.com', 'thoại ngọc hầu', '9090789699');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loai`
--

CREATE TABLE `loai` (
  `maloai` int(11) NOT NULL,
  `tenloai` varchar(50) NOT NULL,
  `idmenu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `loai`
--

INSERT INTO `loai` (`maloai`, `tenloai`, `idmenu`) VALUES
(1, 'Súng lục', 1),
(2, 'Súng trường', 2),
(3, 'Súng tiểu liên', 3),
(4, 'Súng bắn tỉa', 4),
(5, 'Súng shotgun', 5),
(6, 'Lựu đạn cầm tay', 6);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `mausac`
--

CREATE TABLE `mausac` (
  `Idmau` int(11) NOT NULL,
  `mausac` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `mausac`
--

INSERT INTO `mausac` (`Idmau`, `mausac`) VALUES
(1, 'Màu Xanh Army'),
(2, ' Màu Đen');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `ten_menu` varchar(255) NOT NULL,
  `href` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `menu`
--

INSERT INTO `menu` (`id`, `ten_menu`, `href`) VALUES
(1, 'Liên hệ', '#footer');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhanvien`
--

CREATE TABLE `nhanvien` (
  `idnv` int(11) NOT NULL,
  `hoten` varchar(250) NOT NULL,
  `dia` text NOT NULL,
  `username` varchar(250) NOT NULL,
  `matkhau` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `nhanvien`
--

INSERT INTO `nhanvien` (`idnv`, `hoten`, `dia`, `username`, `matkhau`) VALUES
(1, 'nguyễn hạo vy', 'hcm', 'admin', '123456');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sizebullet`
--

CREATE TABLE `sizebullet` (
  `Idsize` int(11) NOT NULL,
  `size` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `sizebullet`
--

INSERT INTO `sizebullet` (`Idsize`, `size`) VALUES
(1, 19),
(2, 39),
(3, 51),
(4, 8);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `binhluan1`
--
ALTER TABLE `binhluan1`
  ADD PRIMARY KEY (`mabl`);

--
-- Chỉ mục cho bảng `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`idcomment`);

--
-- Chỉ mục cho bảng `cthanghoa`
--
ALTER TABLE `cthanghoa`
  ADD PRIMARY KEY (`idhanghoa`,`idmau`,`idsize`);

--
-- Chỉ mục cho bảng `cthoadon`
--
ALTER TABLE `cthoadon`
  ADD PRIMARY KEY (`masohd`,`mahh`);

--
-- Chỉ mục cho bảng `hanghoa`
--
ALTER TABLE `hanghoa`
  ADD PRIMARY KEY (`mahh`);

--
-- Chỉ mục cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`masohd`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`makh`);

--
-- Chỉ mục cho bảng `loai`
--
ALTER TABLE `loai`
  ADD PRIMARY KEY (`maloai`);

--
-- Chỉ mục cho bảng `mausac`
--
ALTER TABLE `mausac`
  ADD PRIMARY KEY (`Idmau`);

--
-- Chỉ mục cho bảng `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`idnv`);

--
-- Chỉ mục cho bảng `sizebullet`
--
ALTER TABLE `sizebullet`
  ADD PRIMARY KEY (`Idsize`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `binhluan1`
--
ALTER TABLE `binhluan1`
  MODIFY `mabl` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `comment`
--
ALTER TABLE `comment`
  MODIFY `idcomment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `hanghoa`
--
ALTER TABLE `hanghoa`
  MODIFY `mahh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=222;

--
-- AUTO_INCREMENT cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `masohd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `makh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `loai`
--
ALTER TABLE `loai`
  MODIFY `maloai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT cho bảng `mausac`
--
ALTER TABLE `mausac`
  MODIFY `Idmau` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  MODIFY `idnv` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `sizebullet`
--
ALTER TABLE `sizebullet`
  MODIFY `Idsize` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
