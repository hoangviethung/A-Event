-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2019 at 10:03 AM
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
  `id_loai` int(10) DEFAULT NULL,
  `banner` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ngay_dien_ra` datetime DEFAULT NULL,
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

INSERT INTO `events` (`id`, `ten_su_kien`, `logo`, `id_loai`, `banner`, `ngay_dien_ra`, `gia_ve`, `dia_chi`, `ngay_ban`, `tom_tat`, `mo_ta`, `so_luong_ve`, `hien_thi_slider`, `hien_thi_noi_bat`, `duyet`) VALUES
(1, 'Sự kiện test', NULL, 1, '1.jpg', '2019-10-02 00:00:00', 1.00, 'Hà Nội', '0000-00-00 00:00:00', NULL, NULL, 0, 1, 1, 1),
(2, 'Sự kiện giải trí', NULL, 1, '2.jpg', '2019-10-03 00:00:00', 1.00, 'TP HCM', '0000-00-00 00:00:00', NULL, NULL, 100, 1, 1, 1),
(3, 'Sự kiện 1', NULL, 1, '3.jpg', '2019-10-17 00:00:00', 100000.00, 'TP HCM', '0000-00-00 00:00:00', NULL, NULL, 100, 1, 1, 1),
(4, 'Sự kiện kiến thức', '4nWQu7elOj_LeeSin.png', 3, 'S68KvVAcsK_LeeSin.png', '2019-10-10 00:00:00', 10000.00, 'Hà Nội', '2019-10-10 00:00:00', NULL, '<p><u><em><strong>asdkjasgkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkk</strong></em></u></p>', 1000, 1, 0, 1),
(6, 'Test chức năng phê duyệt', 'TuP6vrfm87_LeeSin.png', 2, 'BZTgJxFv1C_LeeSin.png', '2020-02-01 02:00:00', 100000.00, 'HCM', '2019-01-01 02:00:00', '<p>sdasd</p>', '<p>asdasdadasdas</p>', 100, 1, 0, 1);

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
