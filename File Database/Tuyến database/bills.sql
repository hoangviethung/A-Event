-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2019 at 11:20 AM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.3.5

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
-- Table structure for table `bills`
--

CREATE TABLE `bills` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_event` int(10) DEFAULT NULL,
  `ten_nguoi_mua` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` int(11) DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl_ve_thuong` int(10) DEFAULT NULL,
  `tong_tien_ve_thuong` float DEFAULT NULL,
  `sl_ve_vip` int(11) DEFAULT NULL,
  `tong_tien_ve_vip` float DEFAULT NULL,
  `tong_tien` double DEFAULT NULL,
  `cho_ngoi` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bills`
--

INSERT INTO `bills` (`id`, `id_event`, `ten_nguoi_mua`, `phone`, `email`, `sl_ve_thuong`, `tong_tien_ve_thuong`, `sl_ve_vip`, `tong_tien_ve_vip`, `tong_tien`, `cho_ngoi`, `created_at`, `updated_at`) VALUES
(1, NULL, 'dasdasd', NULL, 'dasdasdasd', 3, 30000, 4, 0, 30000, NULL, NULL, NULL),
(2, NULL, 'asdasdsad', NULL, 'dasdasdsadad', 2, 0, 2, 0, 0, NULL, NULL, '2019-11-30 18:05:22'),
(3, NULL, 'asdasdsad', NULL, 'dasdasdsadad', 2, 0, 2, 0, 0, NULL, NULL, '2019-11-30 18:07:23'),
(4, NULL, 'dasdsdsadsd', NULL, 'adasdasd', 3, 30000, 2, 0, 30000, NULL, NULL, '2019-11-30 18:07:55'),
(5, NULL, 'dasdasdasd', NULL, 'dasdsadsa', 3, 30000, 3, 0, 30000, NULL, NULL, '2019-11-30 18:08:46'),
(6, NULL, NULL, NULL, NULL, 3, 30000, 3, 0, 30000, NULL, NULL, '2019-11-30 18:14:46'),
(7, NULL, 'dasdasd', 13213123, 'dasdasdas', 3, 30000, 2, 0, 30000, NULL, NULL, '2019-11-30 18:15:59'),
(8, 13, 'sdasdsdasd', 1312312, 'asdasdsadad', 3, 30000, 3, 0, 30000, NULL, NULL, '2019-11-30 18:17:13'),
(9, 13, 'tuyen', 356515615, 'tuyennvps08127@fpt.edu.vn', 3, 30000, 4, 0, 30000, NULL, NULL, '2019-11-30 18:26:46'),
(10, 13, 'tuyen', 15455155, 'tuyennvps08127@fpt.edu.vn', 3, 30000, 3, 0, 30000, NULL, NULL, '2019-11-30 18:31:05'),
(11, 13, 'fdfsdf', 123456788, 'tuyennvps08127@fpt.edu.vn', 3, 30000, 4, 0, 30000, NULL, NULL, '2019-12-01 12:42:50'),
(12, 1, NULL, NULL, NULL, 3, 3, 3, 3000, 3003, NULL, NULL, '2019-12-01 13:30:06'),
(13, 1, NULL, NULL, NULL, 3, 3, 3, 3000, 3003, NULL, NULL, '2019-12-01 13:30:58'),
(14, 1, NULL, NULL, NULL, 3, 3, 3, 3000, 3003, NULL, NULL, '2019-12-01 13:32:40'),
(15, 1, NULL, NULL, NULL, 3, 3, 3, 3000, 3003, NULL, NULL, '2019-12-01 13:36:01'),
(16, 1, NULL, NULL, NULL, 3, 3, 3, 3000, 3003, NULL, NULL, '2019-12-01 13:38:51'),
(17, 1, NULL, NULL, NULL, 3, 3, 3, 3000, 3003, NULL, NULL, '2019-12-01 13:39:08'),
(18, 1, NULL, NULL, NULL, 3, 3, 3, 3000, 3003, NULL, NULL, '2019-12-01 13:39:27'),
(19, 2, NULL, NULL, NULL, 3, 3, 5, 0, 3, NULL, NULL, '2019-12-01 15:51:53'),
(20, 10, 'Nguyễn Tuyến', 356518433, 'tuyennvps08127@fpt.edu.vn', 3, 3000, 4, 0, 3000, NULL, NULL, '2019-12-01 16:23:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bills`
--
ALTER TABLE `bills`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_event` (`id_event`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bills`
--
ALTER TABLE `bills`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
