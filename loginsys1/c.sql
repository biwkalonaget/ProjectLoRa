-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2018 at 10:55 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `c`
--

-- --------------------------------------------------------

--
-- Table structure for table `appb`
--

CREATE TABLE `appb` (
  `Appb_id` tinyint(2) NOT NULL,
  `Appb_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `appb`
--

INSERT INTO `appb` (`Appb_id`, `Appb_name`) VALUES
(0, 'ไม่แสดงข้อมูล'),
(1, 'แสดงข้อมูล');

-- --------------------------------------------------------

--
-- Table structure for table `dept`
--

CREATE TABLE `dept` (
  `deptid` tinyint(1) NOT NULL,
  `dept_name` varchar(40) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `dept`
--

INSERT INTO `dept` (`deptid`, `dept_name`) VALUES
(1, 'สินค้าอุปโภค'),
(2, 'สินค้าบริโภค');

-- --------------------------------------------------------

--
-- Table structure for table `deptpro`
--

CREATE TABLE `deptpro` (
  `deptpro_id` tinyint(1) NOT NULL,
  `deptpro_name` varchar(40) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `position`
--

CREATE TABLE `position` (
  `position_id` tinyint(1) NOT NULL,
  `position_name` varchar(40) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `position`
--

INSERT INTO `position` (`position_id`, `position_name`) VALUES
(1, 'ภาคเหนือ'),
(2, 'ภาคกลาง'),
(3, 'ภาคอีสาน'),
(4, 'ภาคใต้');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` tinyint(2) NOT NULL,
  `product_name` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `product_dis` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `product_de` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `deptid` tinyint(1) NOT NULL,
  `position_id` tinyint(1) NOT NULL,
  `image` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Appb_id` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `product_dis`, `product_de`, `deptid`, `position_id`, `image`, `Appb_id`) VALUES
(45, 'พัด', 'จังหวัด เชียงใหม่', 'พัดลายสวยงาม', 1, 1, 'img_5b4bb047ac063.jpg', 1),
(46, 'กล้วยอบ', 'จังหวัด เชียงใหม่', 'กล้วบอบหอมหวาน', 1, 1, 'img_5b4bb072eea93.jpg', 1),
(44, 'จั๊บอุบล', 'ตำบล ศรีไค อำเภอ วารินฯ จังหวัด อุบลฯ', 'ก๋วยจั๊บกึ่งสำเร็จรูป  เติมน้ำร้อน รอ 3 นาทีแล้วกินได้เลย', 1, 3, 'img_5b4bafa0cc077.jpg', 1),
(43, 'เสื่อ', 'ตำบล ศรีไค อำเภอ วารินฯ จังหวัด อุบลฯ', 'เสื่อลายสวยงาม', 1, 3, 'img_5b4baf5d513df.jpg', 1),
(41, 'หมูยอ', 'ตำบล ศรีไค อำเภอ วารินฯ จังหวัด อุบลฯ', 'หมูยอเนิ้อล้วนๆไม่มีแป้ง', 1, 3, 'img_5b4baf06b1a4b.png', 1),
(42, 'ผ้าไหม', 'ตำบล ศรีไค อำเภอ วารินฯ จังหวัด อุบลฯ', 'ผ้าไหมลายอีสานแท้ๆ สวยงามมาก', 1, 3, 'img_5b4baf36bf5ef.jpg', 1),
(47, 'แคบหมู', 'จังหวัด เชียงใหม่', 'แคบหมูอร่อย', 1, 1, 'img_5b4bb09f1bc2a.jpg', 1),
(48, 'ทองม้วนสมุนไพร', 'จังหวัด ตราก', 'อร่อยถูกปาก', 1, 4, 'img_5b4bb13d608fb.jpg', 1),
(49, 'ขั้วกลิ้ง', 'จังหวัด ตราก', 'อร่อยยยยยย', 1, 4, 'img_5b4bb15e4a205.jpg', 1),
(50, 'น้ำพริกแม่แพรว', 'จังหวัด ราชบุรี', 'อร่อยยยยยยย', 1, 2, 'img_5b4bb1cb084b5.jpg', 1),
(51, 'หมี่กรอบ', 'จังหวัด นนธบุรี', 'อร่อยยยยยยยย', 1, 2, 'img_5b4bb1ed5132e.jpg', 1),
(52, 'กล้วยแก้วหลากรส', 'จังหวัด สุพรรณ', 'กล้อยหลากรส อร่อย', 1, 2, 'img_5b4bb29b596dd.jpg', 1),
(53, 'ภาพที่มีเนื้อหาไม่เหมาะสม', 'xxxxxxxxxxxxxxxx', 'xxxxxxxxxxxxxxxxxx', 1, 3, 'img_5b4bb396d422a.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `u_id` tinyint(2) NOT NULL,
  `username` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `f_name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `l_name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `tel` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `usertype` tinyint(1) NOT NULL DEFAULT '0',
  `email` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `position_id` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`u_id`, `username`, `password`, `f_name`, `l_name`, `tel`, `address`, `usertype`, `email`, `position_id`) VALUES
(22, 'admin', '1234', '', '', '', '', 1, 'threerawat2552@hotmail.com', 2),
(24, 'user', '1234', '', '', '', '', 0, 'threerawat2552@hotmail.com', 2),
(29, 'film', '111', 'threerawat', 'panyapo', '0945350214', '302 หมู่ 10 ต. คอแลน อ. บุฑริก จ. อุบลราชธานี', 0, 'threerawat2552@hotmail.com', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appb`
--
ALTER TABLE `appb`
  ADD PRIMARY KEY (`Appb_id`);

--
-- Indexes for table `dept`
--
ALTER TABLE `dept`
  ADD PRIMARY KEY (`deptid`);

--
-- Indexes for table `position`
--
ALTER TABLE `position`
  ADD PRIMARY KEY (`position_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`u_id`),
  ADD KEY `user_ibfk_1` (`position_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dept`
--
ALTER TABLE `dept`
  MODIFY `deptid` tinyint(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` tinyint(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `u_id` tinyint(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`position_id`) REFERENCES `position` (`position_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
