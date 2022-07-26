-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 14, 2021 lúc 02:08 AM
-- Phiên bản máy phục vụ: 10.4.19-MariaDB
-- Phiên bản PHP: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `duan1_2021`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bill`
--

CREATE TABLE `bill` (
  `id` int(11) NOT NULL,
  `code_bill` varchar(10) NOT NULL,
  `iduser` int(11) DEFAULT 0,
  `bill_name` varchar(255) NOT NULL,
  `bill_address` varchar(255) NOT NULL,
  `bill_phone` varchar(50) NOT NULL,
  `bill_email` varchar(100) NOT NULL,
  `bill_pttt` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1.thanh toán trực tiếp 2.chuyển khoản 3.thanh toán online',
  `ngaydathang` varchar(50) DEFAULT NULL,
  `total` int(11) NOT NULL DEFAULT 0,
  `bill_status` tinyint(1) NOT NULL DEFAULT 0 COMMENT '0.đơn hàng mới 1.đang xử lý 2.đang giao hàng 3.đã giao hàng'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `bill`
--

INSERT INTO `bill` (`id`, `code_bill`, `iduser`, `bill_name`, `bill_address`, `bill_phone`, `bill_email`, `bill_pttt`, `ngaydathang`, `total`, `bill_status`) VALUES
(404, '9273', 36, 'Nguyễn Phú Tài', '23 Vũ Miên', '0704546940', 'nguyenphutai2272000@gmail.com', 0, '12/12/2021', 152000000, 0),
(405, '68', 36, 'Nguyễn Phú Tài', '23 Vũ Miên', '0704546940', 'nguyenphutai2272000@gmail.com', 0, '12/12/2021', 152000000, 1),
(406, '3829', 36, 'Nguyễn Phú Tài', '23 Vũ Miên', '0704546940', 'nguyenphutai2272000@gmail.com', 0, '12/12/2021', 73890000, 1),
(407, '244', 36, 'Nguyễn Phú Tài', '23 Vũ Miên', '0704546940', 'nguyenphutai2272000@gmail.com', 0, '12/12/2021', 73890000, 0),
(408, '3270', 36, 'Nguyễn Phú Tài', '23 Vũ Miên', '0704546940', 'nguyenphutai2272000@gmail.com', 0, '12/12/2021', 73890000, 0),
(409, '1938', 36, 'Nguyễn Phú Tài', '23 Vũ Miên', '0704546940', 'nguyenphutai2272000@gmail.com', 0, '12/12/2021', 73890000, 0),
(410, '740', 36, 'Nguyễn Phú Tài', '23 Vũ Miên', '0704546940', 'nguyenphutai2272000@gmail.com', 0, '12/12/2021', 73890000, 0),
(411, '9489', 36, 'Nguyễn Phú Tài', '23 Vũ Miên', '0704546940', 'nguyenphutai2272000@gmail.com', 0, '12/12/2021', 73890000, 0),
(412, '3423', 36, 'Nguyễn Phú Tài', '23 Vũ Miên', '0704546940', 'nguyenphutai2272000@gmail.com', 0, '12/12/2021', 73890000, 0),
(413, '3801', 36, 'Nguyễn Phú Tài', '23 Vũ Miên', '0704546940', 'nguyenphutai2272000@gmail.com', 0, '12/12/2021', 25980000, 0),
(414, '436', 36, 'Nguyễn Phú Tài', '23 Vũ Miên', '0704546940', 'nguyenphutai2272000@gmail.com', 0, '12/12/2021', 25980000, 0),
(415, '3888', 36, 'Nguyễn Phú Tài', '23 Vũ Miên', '0704546940', 'nguyenphutai2272000@gmail.com', 0, '12/12/2021', 25980000, 0),
(416, '98', 36, 'Nguyễn Phú Tài', '23 Vũ Miên', '0704546940', 'nguyenphutai2272000@gmail.com', 0, '12/12/2021', 25980000, 0),
(417, '4260', 36, 'Nguyễn Phú Tài', '23 Vũ Miên', '0704546940', 'nguyenphutai2272000@gmail.com', 0, '12/12/2021', 25980000, 0),
(418, '4338', 36, 'Nguyễn Phú Tài', '23 Vũ Miên', '0704546940', 'nguyenphutai2272000@gmail.com', 0, '12/12/2021', 25980000, 0),
(419, '4497', 36, 'Nguyễn Phú Tài', '23 Vũ Miên', '0704546940', 'nguyenphutai2272000@gmail.com', 0, '12/12/2021', 25980000, 1),
(420, '5145', 36, 'Nguyễn Phú Tài', '23 Vũ Miên', '0704546940', 'nguyenphutai2272000@gmail.com', 0, '12/12/2021', 25980000, 1),
(421, '7672', 36, 'Nguyễn Phú Tài', '23 Vũ Miên', '0704546940', 'nguyenphutai2272000@gmail.com', 0, '12/12/2021', 25980000, 0),
(422, '3368', 36, 'Nguyễn Phú Tài', '23 Vũ Miên', '0704546940', 'nguyenphutai2272000@gmail.com', 0, '13/12/2021', 96000000, 0),
(423, '1732', 36, 'Nguyễn Phú Tài', '23 Vũ Miên', '0704546940', 'nguyenphutai2272000@gmail.com', 0, '13/12/2021', 116000000, 0),
(424, '7971', 36, 'Nguyễn Phú Tài', '23 Vũ Miên', '0704546940', 'nguyenphutai2272000@gmail.com', 0, '13/12/2021', 116000000, 0),
(425, '5428', 36, 'Nguyễn Phú Tài', '23 Vũ Miên', '0704546940', 'nguyenphutai2272000@gmail.com', 0, '13/12/2021', 116000000, 0),
(426, '7331', 36, 'Nguyễn Phú Tài', '23 Vũ Miên', '0704546940', 'nguyenphutai2272000@gmail.com', 0, '13/12/2021', 116000000, 1),
(427, '3345', 36, 'Nguyễn Phú Tài', '23 Vũ Miên', '0704546940', 'nguyenphutai2272000@gmail.com', 0, '13/12/2021', 85670000, 0),
(428, '89', 36, 'Nguyễn Phú Tài', '23 Vũ Miên', '0704546940', 'nguyenphutai2272000@gmail.com', 0, '13/12/2021', 38970000, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bill_detail`
--

CREATE TABLE `bill_detail` (
  `id` int(11) NOT NULL,
  `id_bill` int(11) NOT NULL,
  `id_sp` int(11) NOT NULL,
  `id_kh` int(11) NOT NULL,
  `code_bill` varchar(10) NOT NULL,
  `soluongmua` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `bill_detail`
--

INSERT INTO `bill_detail` (`id`, `id_bill`, `id_sp`, `id_kh`, `code_bill`, `soluongmua`) VALUES
(389, 405, 11, 36, '68', 2),
(390, 405, 10, 36, '68', 3),
(392, 406, 12, 36, '3829', 1),
(394, 407, 12, 36, '244', 1),
(396, 408, 12, 36, '3270', 1),
(398, 409, 12, 36, '1938', 1),
(400, 410, 12, 36, '740', 1),
(402, 411, 12, 36, '9489', 1),
(404, 412, 12, 36, '3423', 1),
(405, 413, 13, 36, '3801', 2),
(406, 414, 13, 36, '436', 2),
(407, 415, 13, 36, '3888', 2),
(408, 416, 13, 36, '98', 2),
(409, 417, 13, 36, '4260', 2),
(410, 418, 13, 36, '4338', 2),
(411, 419, 13, 36, '4497', 2),
(412, 420, 13, 36, '5145', 2),
(413, 421, 13, 36, '7672', 2),
(414, 422, 10, 36, '3368', 3),
(415, 423, 10, 36, '1732', 1),
(416, 423, 11, 36, '1732', 3),
(417, 424, 10, 36, '7971', 1),
(418, 424, 11, 36, '7971', 3),
(419, 425, 10, 36, '5428', 1),
(420, 425, 11, 36, '5428', 3),
(421, 426, 10, 36, '7331', 1),
(422, 426, 11, 36, '7331', 3),
(423, 427, 12, 36, '3345', 3),
(424, 427, 11, 36, '3345', 2),
(425, 428, 13, 36, '89', 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binhluan`
--

CREATE TABLE `binhluan` (
  `id_bl` int(11) NOT NULL,
  `idpro` int(11) NOT NULL,
  `iduser` int(11) NOT NULL,
  `noidung` varchar(300) NOT NULL,
  `ngaybinhluan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `binhluan`
--

INSERT INTO `binhluan` (`id_bl`, `idpro`, `iduser`, `noidung`, `ngaybinhluan`) VALUES
(34, 13, 26, 'sản phẩm đẹp lắm ạ', '02:58:31pm 03/12/2021'),
(35, 10, 26, 'Xin giá với shop', '03:05:04pm 03/12/2021'),
(36, 10, 26, 'Hàng còn k shop', '03:05:24pm 03/12/2021'),
(45, 10, 26, 'sản phẩm đẹp lắm ạ', '11:42:11pm 03/12/2021'),
(46, 14, 36, 'sản phầm này còn k ạ?', '09:02:39am 09/12/2021');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `danhmuc`
--

INSERT INTO `danhmuc` (`id`, `name`) VALUES
(10, 'iPhone'),
(11, 'Samsung'),
(12, 'OPPO'),
(13, 'Xiaomi'),
(14, 'Vivo'),
(15, 'Sạc dự phòng'),
(16, 'Airpod'),
(19, 'Ốp lưng');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `id_sp` int(11) NOT NULL,
  `tensp` varchar(255) NOT NULL,
  `giasp` int(11) NOT NULL DEFAULT 0,
  `image` varchar(255) DEFAULT NULL,
  `so_luong` int(11) NOT NULL DEFAULT 0,
  `mota` varchar(255) DEFAULT NULL,
  `luotxem` int(11) NOT NULL DEFAULT 0,
  `id_danhmuc` int(11) NOT NULL,
  `tinhtrang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`id_sp`, `tensp`, `giasp`, `image`, `so_luong`, `mota`, `luotxem`, `id_danhmuc`, `tinhtrang`) VALUES
(10, 'iPhone 12 Pro Max 516 GB', 32000000, 'iphone12pro.jpg', 19, 'sản phẩm chất lượng', 53, 10, 0),
(13, 'OPPO Reno6 Z 5G', 9890000, 'opporeno6.jpg', 10, 'sản phẩm mới', 31, 12, 0),
(14, 'Samsung Galaxy S21 5G', 28000000, 'sss21.jpg', 11, 'sản phẩm chất lượng', 47, 11, 0),
(16, 'Xiaomi MI 11 5G', 12990000, 'xiaomimi11.jpg', 15, 'sản phẩm mới', 32, 13, 0),
(19, 'OPPP Reno 5', 8900000, 'opporeno5.jpg', 12, 'eeeeeeeeeeeee', 19, 12, 0),
(24, 'iPhone 11 128GB', 16990000, 'iphone11.jpg', 11, 'sản phẩm của iPhone', 0, 10, 0),
(25, 'Samsung a12', 8900000, 'oppox3.jpg', 15, 'okkkkkkkkkkkkkk', 0, 11, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan`
--

CREATE TABLE `taikhoan` (
  `id` int(11) NOT NULL,
  `user` varchar(50) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `hinh` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `city` varchar(255) NOT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `kich_hoat` int(11) NOT NULL DEFAULT 0,
  `role` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `taikhoan`
--

INSERT INTO `taikhoan` (`id`, `user`, `fullname`, `pass`, `hinh`, `email`, `address`, `city`, `phone`, `kich_hoat`, `role`) VALUES
(26, 'tai', 'Nguyen Tai', 'tai123', 'avatar.jpg', 'phutai@gmail.com', '23 Vũ Miên', 'Da Nang', '0704546940', 0, 0),
(36, 'tainguyen', 'Nguyễn Phú Tài', 'tai123', 'admin_img.jpg', 'nguyenphutai2272000@gmail.com', '23 Vũ Miên', 'Da Nang', '0704546940', 0, 1),
(45, 'Admin', 'Admin_G9shop', 'g9shop123', 'logo.png', 'group9.yshop111@gmail.com', '137 Nguyễn Thị Thập', '', '0704546940', 0, 1),
(46, 'Admin', 'Admin_G9shop', 'g9shop123', 'logo.png', 'group9.yshop111@gmail.com', '137 Nguyễn Thị Thập', '', '0704546940', 0, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thongke`
--

CREATE TABLE `thongke` (
  `id` int(11) NOT NULL,
  `ngaydat` varchar(30) NOT NULL,
  `donhang` int(11) NOT NULL,
  `doanhthu` varchar(100) NOT NULL,
  `soluongban` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `thongke`
--

INSERT INTO `thongke` (`id`, `ngaydat`, `donhang`, `doanhthu`, `soluongban`) VALUES
(8, '2021-11-11', 3, '50000000', 2),
(9, '2021-11-15', 2, '72900000', 4),
(10, '2021-11-16', 1, '63900000', 3),
(12, '2021-11-20', 3, '93900000', 4),
(13, '2021-11-25', 2, '55900000', 2),
(14, '2021-11-28', 4, '102900000', 4),
(15, '2021-12-04', 1, '32900000', 1),
(16, '2021-12-07', 3, '49900000', 4),
(18, '2021-12-14', 1, '9890000', 3);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`id`),
  ADD KEY `code_bill` (`code_bill`);

--
-- Chỉ mục cho bảng `bill_detail`
--
ALTER TABLE `bill_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `code_bill` (`code_bill`),
  ADD KEY `id_bill` (`id_bill`),
  ADD KEY `id_kh` (`id_kh`),
  ADD KEY `id_sp` (`id_sp`),
  ADD KEY `soluongmua` (`soluongmua`);

--
-- Chỉ mục cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`id_bl`),
  ADD KEY `idpro` (`idpro`),
  ADD KEY `iduser` (`iduser`);

--
-- Chỉ mục cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id_sp`),
  ADD KEY `id_danhmuc` (`id_danhmuc`),
  ADD KEY `id_sp` (`id_sp`);

--
-- Chỉ mục cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `image` (`hinh`),
  ADD KEY `user` (`user`),
  ADD KEY `image_2` (`hinh`),
  ADD KEY `avatar` (`hinh`),
  ADD KEY `id` (`id`);

--
-- Chỉ mục cho bảng `thongke`
--
ALTER TABLE `thongke`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `bill`
--
ALTER TABLE `bill`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=429;

--
-- AUTO_INCREMENT cho bảng `bill_detail`
--
ALTER TABLE `bill_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=426;

--
-- AUTO_INCREMENT cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `id_bl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id_sp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT cho bảng `thongke`
--
ALTER TABLE `thongke`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `bill_detail`
--
ALTER TABLE `bill_detail`
  ADD CONSTRAINT `bill_detail_ibfk_1` FOREIGN KEY (`code_bill`) REFERENCES `bill` (`code_bill`);

--
-- Các ràng buộc cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD CONSTRAINT `binhluan_ibfk_1` FOREIGN KEY (`idpro`) REFERENCES `sanpham` (`id_sp`),
  ADD CONSTRAINT `binhluan_ibfk_2` FOREIGN KEY (`iduser`) REFERENCES `taikhoan` (`id`);

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_1` FOREIGN KEY (`id_danhmuc`) REFERENCES `danhmuc` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
