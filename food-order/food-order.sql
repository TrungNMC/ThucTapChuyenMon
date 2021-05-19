-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 19, 2021 lúc 05:50 AM
-- Phiên bản máy phục vụ: 10.4.17-MariaDB
-- Phiên bản PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `food-order`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id` int(10) UNSIGNED NOT NULL,
  `hoten` varchar(100) NOT NULL,
  `taikhoan` varchar(100) NOT NULL,
  `matkhau` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `hoten`, `taikhoan`, `matkhau`) VALUES
(16, 'dsadada', 'đasadad', '6087ee52e82912726c784cdb2f565d03'),
(17, 'Administrator', 'Admin', '21232f297a57a5a743894a0e4a801fc3'),
(19, 'trung', 'trung', 'c2d8730c4cdd662573b0214a0183bf98'),
(21, 'dádsadsa', 'dada', '262bce5d580341c262ae88b24efeab1f'),
(22, 'đáđá', 'đá', '8bca6e3f27eb82ec660e1aee492e45dd');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_category`
--

CREATE TABLE `tbl_category`(
  `id` int(10) UNSIGNED NOT NULL,
  `tieude` varchar(100) NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `noibat` varchar(10) NOT NULL,
  `hoatdong` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_category`
--

INSERT INTO `tbl_category` (`id`, `tieude`, `image_name`, `noibat`, `hoatdong`) VALUES
(10, 'Pizza1', 'Food_Category_374.jpg', 'No', 'Yes'),
(17, 'Burger', 'Food_Category_766.jpg', 'Yes', 'Yes'),
(18, 'Momo', 'Food_Category_228.jpg', 'Yes', 'Yes'),
(19, 'test6', 'Food_Category_913.jpg', 'Yes', 'Yes'),
(20, 'test9', 'Food_Category_85.jpg', 'Yes', 'Yes'),
(21, 'Trà sữa', 'Food_Category_204.png', 'Yes', 'Yes'),
(22, 'Trà sữa', 'Food_Category_148.jpg', 'Yes', 'Yes'),
(23, 'werwr', 'Food_Category_174.jpg', 'Yes', 'Yes'),
(24, 'fere', 'Food_Category_414.jpg', 'Yes', 'Yes'),
(27, 'Trà sữa', 'Food_Category_23.png', 'Yes', 'Yes'),
(29, 'Trà sữa', 'Food_Category_119.png', 'Yes', 'Yes');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_food`
--

CREATE TABLE `tbl_food` (
  `id` int(10) UNSIGNED NOT NULL,
  `tieude` varchar(100) NOT NULL,
  `mieuta` text NOT NULL,
  `gia` float NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `noibat` varchar(10) NOT NULL,
  `hoatdong` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_food`
--

INSERT INTO `tbl_food` (`id`, `tieude`, `mieuta`, `gia`, `image_name`, `category_id`, `noibat`, `hoatdong`) VALUES
(45, 'Trà sữafas111', 'fsdffs', 41000, 'Food_Name_600.jpg', 18, 'Yes', 'Yes'),
(46, 'vuong', 'vuong', 20000, 'Food_Name_604.jpg', 10, 'Yes', 'Yes'),
(47, 'Trà sữa', '1', 11, 'Food_Name_608.png', 10, 'Yes', 'No'),
(48, 'test1', '1', 1, 'Food_Name_984.jpg', 10, 'Yes', 'Yes'),
(49, 'Trà sữa', '2', 2, 'Food_Name_785.jpg', 10, 'Yes', 'Yes'),
(63, 'Trà sữa', '11', 1, 'Food_Name_313.png', 10, 'Yes', 'Yes'),
(64, 'Trà sữa', '11', 1, 'Food_Name_832.png', 10, 'Yes', 'Yes'),
(65, 'Trà sữa', '11', 1, 'Food_Name_27.png', 10, 'Yes', 'Yes'),
(66, 'Trà sữa', '11', 1, 'Food_Name_757.png', 10, 'Yes', 'Yes'),
(75, 'Trà sữa', '1', 0, 'Food-Name-332.jpg', 17, 'Yes', 'Yes'),
(76, 'Trà sữa', '1', 1, 'Food-Name-267.png', 10, 'Yes', 'Yes'),
(77, 'Trà sữa', '1', 1, 'Food-Name-7426.png', 10, 'Yes', 'Yes'),
(78, 'Trà sữa', '', 0, '', 10, 'No', 'No'),
(79, 'Trà sữa', '1', 0, 'Food-Name-6681.jpg', 10, 'Yes', 'Yes'),
(80, 'vuong', '1111', 1, '', 10, 'Yes', 'No'),
(82, 'Trà sữa', '111111111', 1, 'Food-Name-4831.jpg', 10, 'Yes', 'No'),
(83, 'Trà sữa', '111111111', 1, 'Food_Name_233.jpg', 10, 'Yes', 'No'),
(84, 'Trà sữa', '1', 1, 'Food_Name_570.jpg', 10, 'Yes', 'Yes'),
(85, 'Trà sữa', '1', 1, 'Food_Name_48.jpg', 10, 'Yes', 'Yes');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_order`
--

CREATE TABLE `tbl_order` (
  `id` int(10) UNSIGNED NOT NULL,
  `food` varchar(150) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `qty` int(11) NOT NULL,
  `total` decimal(10,2) NOT NULL,
  `order_day` datetime NOT NULL,
  `status` varchar(50) NOT NULL,
  `cusomer_name` varchar(150) NOT NULL,
  `cusomer_contact` varchar(20) NOT NULL,
  `cusomer_email` varchar(150) NOT NULL,
  `cusomer_address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_food`
--
ALTER TABLE `tbl_food`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT cho bảng `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT cho bảng `tbl_food`
--
ALTER TABLE `tbl_food`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT cho bảng `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
