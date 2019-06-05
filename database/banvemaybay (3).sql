-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2019 at 01:13 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `banvemaybay`
--

-- --------------------------------------------------------

--
-- Table structure for table `chuyenbay`
--

CREATE TABLE `chuyenbay` (
  `macb` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `malb` varchar(4) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tencb` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `madatcho` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `thoigianquacanh` time NOT NULL,
  `ngaydi` date NOT NULL,
  `thoigiandi` time DEFAULT NULL,
  `thoigianden` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `chuyenbay`
--

INSERT INTO `chuyenbay` (`macb`, `malb`, `tencb`, `madatcho`, `thoigianquacanh`, `ngaydi`, `thoigiandi`, `thoigianden`) VALUES
('1', '1', 'VietJet', '1', '00:06:00', '2019-06-12', '05:12:00', '07:01:00'),
('2', '2', 'VietnamAirlines', '2', '00:06:00', '2019-04-19', '03:00:00', '10:00:00'),
('3', '2', 'VietnamAirlines', '2', '00:06:00', '2019-05-05', '13:00:00', '17:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `hanghk`
--

CREATE TABLE `hanghk` (
  `mahanghk` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `tenhanghk` varchar(21) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `hanghk`
--

INSERT INTO `hanghk` (`mahanghk`, `tenhanghk`) VALUES
('JS', 'Jetstar'),
('VJ', 'VietJet');

-- --------------------------------------------------------

--
-- Table structure for table `hangve`
--

CREATE TABLE `hangve` (
  `mahangve` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `tenhangve` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `hangve`
--

INSERT INTO `hangve` (`mahangve`, `tenhangve`) VALUES
('1', 'VietJet'),
('2', 'Vietnamairlines');

-- --------------------------------------------------------

--
-- Table structure for table `khachhang`
--

CREATE TABLE `khachhang` (
  `makh` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `hotenkh` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `ngaysinh` date NOT NULL,
  `cmnd` int(11) DEFAULT NULL,
  `email` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gioitinh` varchar(1) COLLATE utf8_unicode_ci DEFAULT NULL,
  `diachi` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `pass` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `sdt` varchar(12) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `khachhang`
--

INSERT INTO `khachhang` (`makh`, `hotenkh`, `ngaysinh`, `cmnd`, `email`, `gioitinh`, `diachi`, `pass`, `sdt`) VALUES
('1', 'Nguyễn Văn A', '2019-04-02', 187741899, '1hityoudie98@gmail.com', 'M', 'Nam Thành', '123456', '0964991296');

-- --------------------------------------------------------

--
-- Table structure for table `lichbay`
--

CREATE TABLE `lichbay` (
  `malb` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  `matbhk` varchar(4) COLLATE utf8_unicode_ci DEFAULT NULL,
  `giocatcanh` time NOT NULL,
  `giohacanh` time NOT NULL,
  `thulichbay` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `lichbay`
--

INSERT INTO `lichbay` (`malb`, `matbhk`, `giocatcanh`, `giohacanh`, `thulichbay`) VALUES
('1', '1', '03:16:17', '11:00:00', 'T3'),
('2', '1', '03:16:17', '12:00:00', 'T4');

-- --------------------------------------------------------

--
-- Table structure for table `maybay`
--

CREATE TABLE `maybay` (
  `mamb` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `soghe` int(11) DEFAULT NULL,
  `loaimb` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `soluongve` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `maybay`
--

INSERT INTO `maybay` (`mamb`, `soghe`, `loaimb`, `soluongve`) VALUES
('1', 150, 'VJ', 150),
('2', 145, 'VS', 145);

-- --------------------------------------------------------

--
-- Table structure for table `nhanvien`
--

CREATE TABLE `nhanvien` (
  `manv` int(5) NOT NULL,
  `hotennv` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `ngaysinh` date NOT NULL,
  `cmnd` int(9) NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `gioitinh` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `diachi` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `pass` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `sdt` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `nhanvien`
--

INSERT INTO `nhanvien` (`manv`, `hotennv`, `ngaysinh`, `cmnd`, `email`, `gioitinh`, `diachi`, `pass`, `sdt`) VALUES
(1, 'ADMIN', '2019-04-03', 187741798, '1hityoudie98@gmail.com', 'Nam', 'Nam Thành', '123', '0964991298'),
(2, 'Thưởng Master', '2019-04-06', 123456789, '1hityoudiessd@gmail.com', 'Nam', 'NT - YT- NA', '123', '0964991297'),
(12, 'ádsadasd', '0000-00-00', 18774179, '1hityoudie98@gmail.com', 'Nam', 'BF', '', '9999999999'),
(13, 'ádsadasd', '0000-00-00', 18774179, '1hityoudie98@gmail.com', 'Nam', 'BF', '', '9999999999'),
(14, 'ádsadasd', '0000-00-00', 18774179, '1hityoudie98@gmail.com', 'Nam', 'BF', '', '9999999999'),
(15, 'sadasd', '0000-00-00', 1111111111, '1hityoudie98@gmail.com', 'Nữ', 'ádsad', '123', '9999999999'),
(16, 'sadasd', '1998-04-09', 1111111111, '1hityoudie98@gmail.com', 'Nữ', 'ádsad', '123', '9999999999'),
(17, 'sadasd', '1998-04-09', 1111111111, '1hityoudie98@gmail.com', 'Nữ', 'ádsad', '123', '9999999999'),
(18, 'DUOC ', '1998-04-09', 1111111111, '1hityoudie98@gmail.com', 'Nữ', 'đá', '123', '9999999999'),
(19, 'xxxxxxxxx', '1998-04-09', 1111111111, '1hityoudie98@gmail.com', 'Nm', 'sadasd', '123', '9999999999'),
(21, '113', '0000-00-00', 1111111111, '1hityoudie98@gmail.com', 'Nam', 'âsdasd', '123', '9999999999'),
(22, '112', '0000-00-00', 1111111111, '1hityoudie98@gmail.com', 'Nam', '123', '123', '9999999999'),
(23, '112', '0000-00-00', 1111111111, '1hityoudie98@gmail.com', 'Nam', '123', '123', '9999999999'),
(24, '124', '1998-04-09', 1111111111, '1hityoudie98@gmail.com', 'Nữ', '123', '123', '9999999999'),
(25, '124', '1998-04-09', 1111111111, '1hityoudie98@gmail.com', 'Nữ', '123', '123', '9999999999'),
(26, '1c', '0000-00-00', 1111111111, '1hityoudie98@gmail.com', 'Nam', '11', '123', '9999999999'),
(27, '1c', '0000-00-00', 1111111111, '1hityoudie98@gmail.com', 'Nam', '11', '123', '9999999999'),
(31, 'sad1', '0000-00-00', 1111111111, '1hityoudie98@gmail.com', 'Cit', '1', '123', '9999999999');

-- --------------------------------------------------------

--
-- Table structure for table `phanboghe`
--

CREATE TABLE `phanboghe` (
  `macb` varchar(6) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mahangve` varchar(3) COLLATE utf8_unicode_ci DEFAULT NULL,
  `soghedat` int(11) NOT NULL,
  `sogheconlai` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `phanboghe`
--

INSERT INTO `phanboghe` (`macb`, `mahangve`, `soghedat`, `sogheconlai`) VALUES
('1', '1', 5, 145),
('2', '2', 5, 145);

-- --------------------------------------------------------

--
-- Table structure for table `sanbay`
--

CREATE TABLE `sanbay` (
  `masb` int COLLATE utf8_unicode_ci NOT NULL AUTO_INCREMENT,
  `tensb` varchar(40) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sanbay`
--

INSERT INTO `sanbay` (`masb`, `tensb`) VALUES
('1', 'Hà Nội (HAN)'),
('10', 'Thanh Hóa (THD)'),
('11', 'Vinh (VII)'),
('12', 'Đồng Hới (VDH)'),
('13', 'Tam kỳ (VCL)'),
('14', 'Quy Nhơn (UIH)'),
('15', 'Tuy Hòa (TBB)'),
('16', 'Cần Thơ (VCA)'),
('17', 'Rạch Giá (VKG)'),
('18', 'Côn Đảo (VCS)'),
('19', 'Cà Mau (CAH)'),
('2', 'Huế (HUI)'),
('20', 'Pleiku (PXU)'),
('21', 'Ban Mê Thuột (BMV)'),
('3', 'Đà Nẵng (DAD)'),
('4', 'Nha Trang (CXR)'),
('5', 'Phú Quốc (PQC)'),
('6', 'Đà Lạt (DLI)'),
('7', 'Điện Biên (DIN)'),
('8', 'Hải Phòng (HPH)'),
('9', 'Vân Đồn (VDO)');

-- --------------------------------------------------------

--
-- Table structure for table `tuyenbay`
--

CREATE TABLE `tuyenbay` (
  `matb` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `masbdi` int COLLATE utf8_unicode_ci NOT NULL AUTO_INCREMENT,
  `masbden` int COLLATE utf8_unicode_ci NOT NULL AUTO_INCREMENT
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tuyenbay`
--

INSERT INTO `tuyenbay` (`matb`, `masbdi`, `masbden`) VALUES
('1', '1', '2'),
('2', '1', '10'),
('3', '4', '13');

-- --------------------------------------------------------

--
-- Table structure for table `tuyenbayhk`
--

CREATE TABLE `tuyenbayhk` (
  `matbhk` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  `matb` varchar(3) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mahanghk` varchar(3) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tuyenbayhk`
--

INSERT INTO `tuyenbayhk` (`matbhk`, `matb`, `mahanghk`) VALUES
('1', '1', 'JS');

-- --------------------------------------------------------

--
-- Table structure for table `vechitiet`
--

CREATE TABLE `vechitiet` (
  `macb` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `mave` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `soghedat` int(11) NOT NULL,
  `loaighedat` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `vechitiet`
--

INSERT INTO `vechitiet` (`macb`, `mave`, `soghedat`, `loaighedat`) VALUES
('1', '1', 3, 'VIP'),
('2', '2', 5, 'VIP');

-- --------------------------------------------------------

--
-- Table structure for table `vemaybay`
--

CREATE TABLE `vemaybay` (
  `mave` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `makh` varchar(5) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ngaydat` date NOT NULL,
  `ngayhieuluc` date NOT NULL,
  `soghe` int(11) NOT NULL,
  `hanhly` float NOT NULL,
  `vat` float NOT NULL,
  `giave` float NOT NULL,
  `macb` varchar(6) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `vemaybay`
--

INSERT INTO `vemaybay` (`mave`, `makh`, `ngaydat`, `ngayhieuluc`, `soghe`, `hanhly`, `vat`, `giave`, `macb`) VALUES
('1', '1', '2019-04-17', '2019-04-25', 150, 500, 360000, 1800000, '1'),
('2', '1', '2019-04-11', '2019-04-27', 150, 500, 122222, 1900000, '2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chuyenbay`
--
ALTER TABLE `chuyenbay`
  ADD PRIMARY KEY (`macb`),
  ADD KEY `malb` (`malb`);

--
-- Indexes for table `hanghk`
--
ALTER TABLE `hanghk`
  ADD PRIMARY KEY (`mahanghk`);

--
-- Indexes for table `hangve`
--
ALTER TABLE `hangve`
  ADD PRIMARY KEY (`mahangve`);

--
-- Indexes for table `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`makh`),
  ADD UNIQUE KEY `cmnd` (`cmnd`);

--
-- Indexes for table `lichbay`
--
ALTER TABLE `lichbay`
  ADD PRIMARY KEY (`malb`),
  ADD KEY `matbhk` (`matbhk`);

--
-- Indexes for table `maybay`
--
ALTER TABLE `maybay`
  ADD PRIMARY KEY (`mamb`);

--
-- Indexes for table `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`manv`);

--
-- Indexes for table `phanboghe`
--
ALTER TABLE `phanboghe`
  ADD KEY `macb` (`macb`),
  ADD KEY `mahangve` (`mahangve`);

--
-- Indexes for table `sanbay`
--
ALTER TABLE `sanbay`
  ADD PRIMARY KEY (`masb`),
  ADD KEY `masb` (`masb`),
  ADD KEY `masb_2` (`masb`);

--
-- Indexes for table `tuyenbay`
--
ALTER TABLE `tuyenbay`
  ADD PRIMARY KEY (`matb`),
  ADD KEY `fk_masb` (`masbden`),
  ADD KEY `matb` (`matb`),
  ADD KEY `masbdi` (`masbdi`);

--
-- Indexes for table `tuyenbayhk`
--
ALTER TABLE `tuyenbayhk`
  ADD PRIMARY KEY (`matbhk`),
  ADD KEY `matb` (`matb`),
  ADD KEY `mahanghk` (`mahanghk`);

--
-- Indexes for table `vechitiet`
--
ALTER TABLE `vechitiet`
  ADD PRIMARY KEY (`macb`,`mave`),
  ADD KEY `mave` (`mave`);

--
-- Indexes for table `vemaybay`
--
ALTER TABLE `vemaybay`
  ADD PRIMARY KEY (`mave`),
  ADD KEY `makh` (`makh`),
  ADD KEY `macb` (`macb`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `nhanvien`
--
ALTER TABLE `nhanvien`
  MODIFY `manv` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chuyenbay`
--
ALTER TABLE `chuyenbay`
  ADD CONSTRAINT `chuyenbay_ibfk_1` FOREIGN KEY (`malb`) REFERENCES `lichbay` (`malb`);

--
-- Constraints for table `lichbay`
--
ALTER TABLE `lichbay`
  ADD CONSTRAINT `lichbay_ibfk_1` FOREIGN KEY (`matbhk`) REFERENCES `tuyenbayhk` (`matbhk`);

--
-- Constraints for table `phanboghe`
--
ALTER TABLE `phanboghe`
  ADD CONSTRAINT `phanboghe_ibfk_1` FOREIGN KEY (`macb`) REFERENCES `chuyenbay` (`macb`),
  ADD CONSTRAINT `phanboghe_ibfk_2` FOREIGN KEY (`mahangve`) REFERENCES `hangve` (`mahangve`);

--
-- Constraints for table `tuyenbay`
--
ALTER TABLE `tuyenbay`
  ADD CONSTRAINT `fk_masb` FOREIGN KEY (`masbden`) REFERENCES `sanbay` (`masb`),
  ADD CONSTRAINT `fk_masbden` FOREIGN KEY (`masbdi`) REFERENCES `sanbay` (`masb`);

--
-- Constraints for table `tuyenbayhk`
--
ALTER TABLE `tuyenbayhk`
  ADD CONSTRAINT `tuyenbayhk_ibfk_1` FOREIGN KEY (`matb`) REFERENCES `tuyenbay` (`matb`),
  ADD CONSTRAINT `tuyenbayhk_ibfk_2` FOREIGN KEY (`mahanghk`) REFERENCES `hanghk` (`mahanghk`);

--
-- Constraints for table `vechitiet`
--
ALTER TABLE `vechitiet`
  ADD CONSTRAINT `vechitiet_ibfk_1` FOREIGN KEY (`macb`) REFERENCES `chuyenbay` (`macb`),
  ADD CONSTRAINT `vechitiet_ibfk_2` FOREIGN KEY (`mave`) REFERENCES `vemaybay` (`mave`);

--
-- Constraints for table `vemaybay`
--
ALTER TABLE `vemaybay`
  ADD CONSTRAINT `vemaybay_ibfk_1` FOREIGN KEY (`makh`) REFERENCES `khachhang` (`makh`),
  ADD CONSTRAINT `vemaybay_ibfk_2` FOREIGN KEY (`macb`) REFERENCES `chuyenbay` (`macb`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
