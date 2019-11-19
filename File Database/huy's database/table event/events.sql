-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 18, 2019 at 04:23 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `event`
--

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(10) UNSIGNED NOT NULL,
  `ten_su_kien` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_loai` int(10) NOT NULL,
  `banner` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ngay_dien_ra` date DEFAULT NULL,
  `thoi_gian` time DEFAULT NULL,
  `gia_ve` double(8,2) DEFAULT NULL,
  `dia_chi` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ngay_ban` datetime DEFAULT NULL,
  `tom_tat` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mo_ta` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `so_luong_ve` int(11) DEFAULT NULL,
  `hien_thi_slider` tinyint(1) DEFAULT NULL,
  `hien_thi_noi_bat` tinyint(1) DEFAULT NULL,
  `duyet` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `ten_su_kien`, `logo`, `id_loai`, `banner`, `ngay_dien_ra`, `thoi_gian`, `gia_ve`, `dia_chi`, `ngay_ban`, `tom_tat`, `mo_ta`, `so_luong_ve`, `hien_thi_slider`, `hien_thi_noi_bat`, `duyet`) VALUES
(1, 'Sự kiện test', NULL, 1, '1.jpg', '2019-10-02', NULL, 1.00, 'Hà Nội', '0000-00-00 00:00:00', NULL, NULL, 0, 1, 1, 1),
(2, 'Sự kiện giải trí', NULL, 1, '2.jpg', '2019-10-03', NULL, 1.00, 'TP HCM', '0000-00-00 00:00:00', NULL, NULL, 100, 1, 1, 1),
(3, 'Sự kiện 1', NULL, 1, '3.jpg', '2019-10-17', NULL, 100000.00, 'TP HCM', '0000-00-00 00:00:00', NULL, NULL, 100, 1, 1, 1),
(4, 'Sự kiện kiến thức', '4nWQu7elOj_LeeSin.png', 3, 'S68KvVAcsK_LeeSin.png', '2019-10-10', NULL, 10000.00, 'Hà Nội', '2019-10-10 00:00:00', NULL, '<p><u><em><strong>asdkjasgkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkk</strong></em></u></p>', 1000, 1, 0, 1),
(6, 'Test chức năng phê duyệt', 'edS95pp9QC_LeeSin.png', 2, 'QpVi8wdhDA_LeeSin.png', '2020-02-01', '14:02:00', 100000.00, 'HCM', '2019-01-01 02:00:00', '<p>sdasd</p>', '<h1>asdasdadasdas</h1>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"\" src=\"http://localhost/A-Event/event/public/images/product/images/Capture.PNG\" style=\"width: 352px; height: 360px;\" /></p>', 100, 1, 0, 1),
(9, 'sadasdfasdfgashdfghasf', '2yoRbqqs8r_LeeSin.png', 1, 'ZogfvqXlyy_LeeSin.png', '2019-11-08', '15:00:00', 100000.00, 'sdasdasd', '2020-01-01 01:00:00', '<p>asd</p>', '<p>d</p>', 1000, 0, 0, 1),
(10, 'Test nha dsasd', '42HFLmc5FU_LeeSin.png', 2, 'aeesIXC15T_LeeSin.png', '2020-02-02', '02:01:00', 1000.00, 'Ho Chi Minh City', NULL, NULL, '<p>sd</p>', 10000, 0, 0, 1),
(11, 'Test Add Event', NULL, 3, 'iSXMo5M7da_521EC9.jpg', '2020-02-02', '02:01:00', 1000.00, 'Ho Chi Minh City', '2019-10-10 00:00:00', NULL, '<p>sds</p>', 10000, 0, 0, 1),
(12, 'sadasdsad', 'LS73yPQyX2_521EC9.jpg', 1, '9MFzUQZyt1_521EC9.jpg', '2020-02-02', '01:01:00', 10000.00, 'asdasdas', '2019-02-02 14:01:00', '<p>sadasdas</p>', '<p>sadasd</p>', 10000, 0, 0, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_loai` (`id_loai`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `events`
--
ALTER TABLE `events`
  ADD CONSTRAINT `events_ibfk_1` FOREIGN KEY (`id_loai`) REFERENCES `type_events` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
