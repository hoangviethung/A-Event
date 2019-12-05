-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2019 at 03:39 PM
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
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_fb` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_gg` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dien_thoai` int(11) DEFAULT NULL,
  `dia_chi` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ngay_sinh` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gioi_tinh` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hinh` text COLLATE utf8mb4_unicode_ci,
  `vip` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `id_fb`, `id_gg`, `email`, `name`, `password`, `dien_thoai`, `dia_chi`, `ngay_sinh`, `gioi_tinh`, `hinh`, `vip`, `type`) VALUES
(1, NULL, NULL, 'nguyentuyen1322@gmail.com', 'Tuyen Nguyen', '$2y$10$50iEPmhhrqPZzSzK3EjQyuy58GHljDipqNHgx7L87f3tIt.jdkXOa', 356518436, 'tp hcm', '2019-11-21', 'Nam', '10710964d7a550c32f92749adcd8d793_cS-6.jpg', 'Normal', '1'),
(2, NULL, NULL, 'admin@gmail.com', 'Admin', '$2y$10$T0J6WF5aNtcOGw.N8wsfwOxWW59LKQmkTxzwaCAKnnbhovYMnt5Mm', 356518436, 'Thành Phố Hồ Chí Minh', '2019-11-01', 'Nam', '54671d405544766eaeb406fb19c20850_cS-7.jpg', 'V.I.P', '2'),
(11, '1385068081652444', NULL, NULL, 'Nguyễn Văn Tuyến', NULL, NULL, NULL, NULL, NULL, 'https://platform-lookaside.fbsbx.com/platform/profilepic/?asid=1385068081652444&height=50&width=50&ext=1577039780&hash=AeTC9iiqXORYVvuJ', NULL, '1'),
(61, NULL, '100224081791743476043', 'nguyentuyen1322@gmail.com', 'tuyen nguyen', NULL, NULL, NULL, NULL, NULL, 'https://lh3.googleusercontent.com/a-/AAuE7mCD0vVOoHqaaQvjBOhb9G_NFEgaLqZpZjRBQkkv', NULL, '1'),
(62, NULL, '110600629830583362931', 'tuyennvps08127@fpt.edu.vn', 'Tuyến Nguyễn', NULL, NULL, NULL, NULL, NULL, 'https://lh3.googleusercontent.com/a-/AAuE7mB9QiE2roqihLy6YKM4zuddCbyuC_IBcIZVP4nc', NULL, '1'),
(63, NULL, NULL, 'nguyenkun1322@gmail.com', 'Thiên An', '$2y$10$RbcSgqZ1MX.vguhvJSY4ru92S3sQQ1S602pbmN.FegDHWNy4tlkNm', 356518433, 'tp hcm', '2019-12-04', 'Nữ', '62ab5cf097533228472a12e3e9178acd_1.jpg', 'V.I.P', '1'),
(64, NULL, NULL, 'mama1322@gmail.com', 'Boss', '$2y$10$coKXPJ9i9lygv0V5UXib7eGsvafHLAIcPIFchSXybqvNtgnxnXq2W', 356518432, 'DăkNông', '2019-12-06', 'Nam', 'ceaa55cbc987d971b2bb8969fef07944_imgpsh_fullsize_anim.jpg', 'V.I.P', '2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
