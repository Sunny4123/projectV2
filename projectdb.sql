-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2023 at 02:38 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projectdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `myorder`
--

CREATE TABLE `myorder` (
  `id` int(255) NOT NULL,
  `shopid` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `price` float(65,2) NOT NULL,
  `num` float(65,2) NOT NULL,
  `img` varchar(255) NOT NULL,
  `proname` varchar(255) NOT NULL,
  `type` varchar(20) NOT NULL,
  `username` varchar(255) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `myorder`
--

INSERT INTO `myorder` (`id`, `shopid`, `fname`, `lname`, `email`, `phone`, `address`, `price`, `num`, `img`, `proname`, `type`, `username`, `status`) VALUES
(111, 'Luna', 'Narongthon', 'Sarueng', 'narongthon771@gmail.com', '0882938323', 'รับเองที่ร้าน', 70.00, 10.00, '107136115_p3_master1200.jpg', 'mix', 'เก็บเงินปลายทาง', 'Luna', 'con'),
(113, 'son1150', 'Narongthon', 'Sarueng', 'narongthon771@gmail.com', '0882938323', 'porn hub', 9035.00, 10.00, '113328705_p0_master1200.jpg', 'Narongthon Sarueng', 'เก็บเงินปลายทาง', 'son1150', ''),
(116, 'Luna', 'Narongthon', 'Sarueng', 'narongthon771@gmail.com', '0882938323', '575/7 samibin rode eieieeieieieie', 245.00, 30.00, '107136115_p3_master1200.jpg', 'mix', 'ชำระเงินออนไลน์', 'p', 'con'),
(125, 'Sunny48267', 'Narongthon', 'Sarueng', 'narongthon771@gmail.com', '0882938323', 'รับเองที่ร้าน', 3000.00, 30.00, '402928089_859012912424462_3046235576597451701_n.jpg', 'Rita', 'เก็บเงินปลายทาง', 'Luna', 'order'),
(127, 'Sunny48267', 'Narongthon', 'Sarueng', 'narongthon771@gmail.com', '0882938323', 'รับเองที่ร้าน', 200.00, 2.00, '402928089_859012912424462_3046235576597451701_n.jpg', 'Rita', 'เก็บเงินปลายทาง', 'Luna', 'order'),
(128, 'Sunny48267', 'Narongthon', 'Sarueng', 'narongthon771@gmail.com', '0882938323', 'รับเองที่ร้าน', 1000.00, 10.00, '402928089_859012912424462_3046235576597451701_n.jpg', 'Rita', 'เก็บเงินปลายทาง', 'Luna', 'order'),
(129, 'Sunny48267', 'Narongthon', 'Sarueng', 'narongthon771@gmail.com', '0882938323', 'รับเองที่ร้าน', 1000.00, 10.00, '402928089_859012912424462_3046235576597451701_n.jpg', 'Rita', 'เก็บเงินปลายทาง', 'Luna', 'order');

-- --------------------------------------------------------

--
-- Table structure for table `myshop2`
--

CREATE TABLE `myshop2` (
  `id` int(255) NOT NULL,
  `username` varchar(100) NOT NULL,
  `productname` varchar(100) NOT NULL,
  `price` float(65,2) NOT NULL,
  `num` float(65,2) NOT NULL,
  `img` varchar(255) NOT NULL,
  `status` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `myshop2`
--

INSERT INTO `myshop2` (`id`, `username`, `productname`, `price`, `num`, `img`, `status`) VALUES
(7, 'Luna', 'mix', 7.00, 24.00, '107136115_p3_master1200.jpg', ''),
(8, 'Luna', 'luna', 150.00, 0.00, '113059889_p0_master1200.jpg', ''),
(9, 'Luna', 'l', 100.00, 0.00, '93724760_p4_master1200.jpg', ''),
(10, 'Luna', 'ufo888', 900.00, 20.00, 'p66060401-S2-gigapixel-art-scale-4_00x.jpg', ''),
(11, 'son1150', 'Narongthon Sarueng', 900.00, 90.00, '113328705_p0_master1200.jpg', ''),
(12, 'Sunny48267', 'Rita', 100.00, 24.00, '402928089_859012912424462_3046235576597451701_n.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID` int(100) NOT NULL,
  `username` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `firstname` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `date` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `sex` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `religion` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ethnicity` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `nationality` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `house_number` varchar(15) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `group_` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Subdistrict` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `District` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `province` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID`, `username`, `password`, `phone`, `firstname`, `lastname`, `email`, `date`, `sex`, `religion`, `ethnicity`, `nationality`, `house_number`, `group_`, `Subdistrict`, `District`, `province`, `type`, `img`) VALUES
(78, 'Luna', '165504', '0882938323', 'Narongthon', 'Sarueng', 'narongthon771@gmail.com', '25/04/2005', 'male', 'Buddhism', 'เทศบาลนครพิษณุโลก', 'thai', '575/7', '-', 'mung', 'mung', 'พิษณุโลก', 'farmer', '113059889_p0_master1200.jpg'),
(79, 'son1150', '165504', '0882938323', 'Narongthon', 'Sarueng', 'narongthon9981@gmail.com', '25/04/2005', 'male', 'Buddhism', 'เทศบาลนครพิษณุโลก', 'thai', '575/7', '-', 'mung', 'mung', 'พิษณุโลก', 'farmer', '107136115_p3_master1200.jpg'),
(80, 'Luna2', '165504', '0882938323', 'Narongthon', 'Sarueng', 'narongthon456@gmail.com', '25/04/2005', 'male', 'Buddhism', 'เทศบาลนครพิษณุโลก', 'thai', '575/7', '-', 'mung', 'mung', 'พิษณุโลก', 'farmer', '113304824_p0_master1200.jpg'),
(81, 'p', '165504', '0882938323', 'Narongthon', 'Sarueng', 'narongthon7777771@gmail.com', '25/04/2005', 'male', 'Buddhism', 'เทศบาลนครพิษณุโลก', 'thai', '575/7', '-', 'mung', 'mung', 'พิษณุโลก', 'farmer', '109333548_p0_master1200.jpg'),
(82, 'Sunny48267', '165504', '0882938323', 'Narongthon', 'Sarueng', 'narongthon971@gmail.com', '25/04/2005', 'male', 'Buddhism', 'เทศบาลนครพิษณุโลก', 'thai', '575/7', '-', 'mung', 'mung', 'พิษณุโลก', 'farmer', '402928089_859012912424462_3046235576597451701_n.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `usercumtomers`
--

CREATE TABLE `usercumtomers` (
  `id` int(50) NOT NULL,
  `username` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `fname` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `lname` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(50) CHARACTER SET utf32 COLLATE utf32_unicode_ci NOT NULL,
  `img` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `myorder`
--
ALTER TABLE `myorder`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `myshop2`
--
ALTER TABLE `myshop2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `usercumtomers`
--
ALTER TABLE `usercumtomers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `myorder`
--
ALTER TABLE `myorder`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=130;

--
-- AUTO_INCREMENT for table `myshop2`
--
ALTER TABLE `myshop2`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT for table `usercumtomers`
--
ALTER TABLE `usercumtomers`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
