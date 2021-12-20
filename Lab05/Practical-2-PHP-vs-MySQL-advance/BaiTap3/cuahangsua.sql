-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 20, 2021 at 11:48 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cuahangsua`
--

-- --------------------------------------------------------

--
-- Table structure for table `hangsua`
--

CREATE TABLE `hangsua` (
  `MaHS` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `TenHS` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `DiaChi` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `DienThoai` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `hangsua`
--

INSERT INTO `hangsua` (`MaHS`, `TenHS`, `DiaChi`, `DienThoai`, `Email`) VALUES
('AB', 'Abot', 'Công ty nhập khẩu Việt Nam', 'AB', 'abot@gmail.com'),
('DL', 'Dutch Lady', 'Khu công nghiệp Biên Hòa Đồng Nai', 'DL', '7826451'),
('DM', 'Mumex', 'Khu công nghiệp Sóng Thần Bình Dương', 'DM', '6528943'),
('DS', 'Daisy', 'Khu công nghiệp Sóng Thần Bình Dương', 'DS', '5789321'),
('MJ', 'Mead Johnson', 'Công ty nhập khẩu Việt Nam', 'MJ', '8741258'),
('NTF', 'NUtifood', 'Khu công nghiệp Sóng Thần Bình Dương', '7895632', 'nutifood@ntf.com'),
('VNM', 'Vinamilk', '123 Nguyễn Du - Quận 1 - TP.HCM', '8794561', 'vinamilk@vnm.com');

-- --------------------------------------------------------

--
-- Table structure for table `khachhang`
--

CREATE TABLE `khachhang` (
  `MaKH` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `TenKH` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `GioiTinh` tinyint(50) NOT NULL,
  `DiaChi` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `SoDT` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `khachhang`
--

INSERT INTO `khachhang` (`MaKH`, `TenKH`, `GioiTinh`, `DiaChi`, `SoDT`) VALUES
('KH01', 'Nguyễn Khánh Linh', 0, '24B, Nguyễn Du, P9, Đà Lạt', '0776598805'),
('KH02', 'Khuất Thùy Phương', 1, 'A21 Nguyễn Oanh quận Gò Vấp', '09874125'),
('KH03', 'Đỗ Lâm Thiên', 0, '357 Lê Hồng Phong Q10', '8351056'),
('KH04', 'Nguyễn Khắc Thiện', 0, '12bis Đường 3-2 quận 10', '1234567'),
('KH05', 'Nguyen Van AA', 1, '14B, nguyen du p99', '07765988011');

-- --------------------------------------------------------

--
-- Table structure for table `sua`
--

CREATE TABLE `sua` (
  `ID` int(20) NOT NULL,
  `TenSua` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `HangSua` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `LoaiSua` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `TrongLuong` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `DonGia` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `image_path` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sua`
--

INSERT INTO `sua` (`ID`, `TenSua`, `HangSua`, `LoaiSua`, `TrongLuong`, `DonGia`, `image_path`) VALUES
(49, 'Fristi', 'DL', 'Sữa tươi', '180', '3600', '../upload/fristi.jpg'),
(50, 'Sữa chua Plus', 'VNM', 'Sữa chua', '120', '4000', '../upload/suachuavinamilk.jpg'),
(51, 'Sữa chua cô gái Hà Lan', 'DL', 'Sữa chua', '100', '3000', '../upload/suachuadutchlady.jpg'),
(52, 'Dielac Sure', 'VNM', 'Sữa bột', '400', '90000', '../upload/dielacsure.jpg'),
(53, 'TH Truemilk', 'VNM', 'Sữa tươi', '200', '15000', '../upload/thtruemilk.png'),
(54, 'Sữa chua Kun', 'DM', 'Sữa chua', '50', '7000', '../upload/suakun.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hangsua`
--
ALTER TABLE `hangsua`
  ADD PRIMARY KEY (`MaHS`);

--
-- Indexes for table `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`MaKH`);

--
-- Indexes for table `sua`
--
ALTER TABLE `sua`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `fk_sua_hangsua` (`HangSua`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sua`
--
ALTER TABLE `sua`
  MODIFY `ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `sua`
--
ALTER TABLE `sua`
  ADD CONSTRAINT `fk_sua_hangsua` FOREIGN KEY (`HangSua`) REFERENCES `hangsua` (`MaHS`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
