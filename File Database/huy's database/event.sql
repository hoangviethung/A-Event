-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2019 at 04:16 PM
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
-- Table structure for table `bills`
--

CREATE TABLE `bills` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_event` int(10) NOT NULL,
  `ten_nguoi_mua` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` int(11) DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngay_mua` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `sl_ve_thuong` int(10) DEFAULT NULL,
  `tong_tien_ve_thuong` float DEFAULT NULL,
  `sl_ve_vip` int(11) DEFAULT NULL,
  `tong_tien_ve_vip` float DEFAULT NULL,
  `tong_tien` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(10) NOT NULL,
  `ten_su_kien` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nha_tai_tro` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_loai` int(10) NOT NULL,
  `banner` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ngay_dien_ra` date DEFAULT NULL,
  `thoi_gian` time DEFAULT NULL,
  `vi_tri_ve_thuong` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gia_ve` double(8,2) DEFAULT NULL,
  `qua_tang_thuong` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vi_tri_ve_vip` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gia_ve_vip` double DEFAULT NULL,
  `qua_tang_vip` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dia_chi` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ngay_ban` datetime DEFAULT NULL,
  `tom_tat` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mo_ta` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `so_luong_ve_thuong` int(11) DEFAULT NULL,
  `so_luong_ve_vip` int(11) NOT NULL,
  `hien_thi_slider` tinyint(1) DEFAULT NULL,
  `hien_thi_noi_bat` tinyint(1) DEFAULT NULL,
  `duyet` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `ten_su_kien`, `nha_tai_tro`, `logo`, `id_loai`, `banner`, `ngay_dien_ra`, `thoi_gian`, `vi_tri_ve_thuong`, `gia_ve`, `qua_tang_thuong`, `vi_tri_ve_vip`, `gia_ve_vip`, `qua_tang_vip`, `dia_chi`, `ngay_ban`, `tom_tat`, `mo_ta`, `so_luong_ve_thuong`, `so_luong_ve_vip`, `hien_thi_slider`, `hien_thi_noi_bat`, `duyet`) VALUES
(1, 'Sự kiện test', NULL, NULL, 1, '1.jpg', '2019-10-02', NULL, NULL, 1.00, NULL, NULL, NULL, NULL, 'Hà Nội', '0000-00-00 00:00:00', NULL, NULL, 0, 0, 1, 1, 1),
(2, 'Sự kiện giải trí', NULL, NULL, 1, '2.jpg', '2019-10-03', NULL, NULL, 1.00, NULL, NULL, NULL, NULL, 'TP HCM', '0000-00-00 00:00:00', NULL, NULL, 100, 0, 1, 1, 1),
(3, 'Sự kiện 1', NULL, NULL, 1, '3.jpg', '2019-10-17', NULL, NULL, 100000.00, NULL, NULL, NULL, NULL, 'TP HCM', '0000-00-00 00:00:00', NULL, NULL, 100, 0, 1, 1, 1),
(10, 'Test nha dsasd', NULL, '42HFLmc5FU_LeeSin.png', 2, 'aeesIXC15T_LeeSin.png', '2020-02-02', '02:01:00', NULL, 1000.00, NULL, NULL, NULL, NULL, 'Ho Chi Minh City', NULL, NULL, '<p>sd</p>', 10000, 0, 0, 0, 1),
(12, 'sadasdsad', NULL, 'LS73yPQyX2_521EC9.jpg', 1, '9MFzUQZyt1_521EC9.jpg', '2020-02-02', '01:01:00', NULL, 10000.00, NULL, NULL, NULL, NULL, 'asdasdas', '2019-02-02 14:01:00', '<p>sadasdas</p>', '<p>sadasd</p>', 10000, 0, 0, 0, 1),
(13, 'Test nha', 'sadsad', 'hEg9dob1cS_521EC9.jpg', 1, '2Rkyz1JCbM_521EC9.jpg', '2019-02-04', '01:00:00', NULL, 10000.00, NULL, NULL, NULL, NULL, 'dsadas', '2019-01-01 00:00:00', '<p>sadsadsadsa</p>', '<p>sadasd</p>', 10000, 0, 0, 0, 1),
(15, 'Test nha sadasdas dasdsad', 'sadsadasd', '0Fm3PR34e0_521EC9.jpg', 1, 'yNJeZ68eZ1_521EC9.jpg', '2019-02-04', '01:00:00', 'sadsadsadsad', 10000.00, 'asdsadsadsadasdas', 'dsadsadasdsa', 10000, 'dsadsadsadsadas', '350 Lê đức thọ, phường 6 , quận gò vấp', '2019-01-01 00:00:00', '<p>sadsadsadsa</p>', '<p>sadasd</p>', 10000, 0, 0, 0, 1),
(16, 'Test nha sadsadasdas', 'sadsad', 'LIUhalxsdS_521EC9.jpg', 2, 'nswvwwxpOB_521EC9.jpg', '2020-02-02', '15:03:00', 'TESTTSDASsadasdasdsa', 1000.00, 'sadsadsadsadsadsadsadsadsad', 'asdsaassadasdsadas', 1000, 'sadasdsaasdasdsadsa', '100 Nguyễn Trải , Quận 5', '2020-02-02 00:00:00', '<p>sadsadasdsad</p>', '<p>sadasdsad</p>', 100, 100, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `images_event`
--

CREATE TABLE `images_event` (
  `id` int(10) UNSIGNED NOT NULL,
  `duong_dan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(4, '2014_10_12_000000_create_users_table', 1),
(5, '2014_10_12_100000_create_password_resets_table', 1),
(6, '2019_08_19_000000_create_failed_jobs_table', 1),
(7, '2019_10_19_135957_slider', 2),
(8, '2019_10_20_235835_user', 3),
(9, '2019_10_21_213909_events', 3),
(10, '2019_10_21_214921_type_events', 4),
(13, '2019_10_23_232741_shortlink', 7),
(14, '2019_10_24_234232_admin', 8),
(21, '2019_10_21_215139_images_event', 9),
(22, '2019_10_21_215741_news', 9),
(23, '2019_11_02_215354_create_social_accounts_table', 10),
(24, '2019_11_17_145525_create_seenmail', 11),
(25, '2019_11_26_205701_bills', 11);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(10) UNSIGNED NOT NULL,
  `tieu_de` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `noi_dung` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `hinh_anh` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hinh_anh_hien_thi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `video` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngay_dang` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `seenmail`
--

CREATE TABLE `seenmail` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ten_su_kien` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ten_khach_hang` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `so_ve` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cho_ngoi` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dia_chi` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mo_ta` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `short_links`
--

CREATE TABLE `short_links` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `social_accounts`
--

CREATE TABLE `social_accounts` (
  `user_id` int(11) NOT NULL,
  `provider_user_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `provider` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `type_events`
--

CREATE TABLE `type_events` (
  `id` int(10) NOT NULL,
  `ten_loai` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `type_events`
--

INSERT INTO `type_events` (`id`, `ten_loai`, `created_at`, `updated_at`) VALUES
(1, 'Giải trí', NULL, NULL),
(2, 'Kiến thức', NULL, NULL),
(3, 'Sự kiện khác', '2019-10-28 15:19:00', '2019-10-28 15:19:00');

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
  `hinh` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
(60, NULL, NULL, 'nguyenkun1322@gmail.com', 'Ba Bự', '$2y$10$GQnj7Mu3fIxHiaO0XoO69uBY5A9A.BEi96Nq7i1vGrm2ssiFbdz2K', 356518433, 'tp hcm', '2019-11-07', 'Nam', '405d7840de09f515b2dba8fc47d90434_2.jpg', 'V.I.P', '1'),
(61, NULL, '100224081791743476043', 'nguyentuyen1322@gmail.com', 'tuyen nguyen', NULL, NULL, NULL, NULL, NULL, 'https://lh3.googleusercontent.com/a-/AAuE7mCD0vVOoHqaaQvjBOhb9G_NFEgaLqZpZjRBQkkv', NULL, '1');

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
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_loai` (`id_loai`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images_event`
--
ALTER TABLE `images_event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `seenmail`
--
ALTER TABLE `seenmail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `short_links`
--
ALTER TABLE `short_links`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `type_events`
--
ALTER TABLE `type_events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bills`
--
ALTER TABLE `bills`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `images_event`
--
ALTER TABLE `images_event`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `seenmail`
--
ALTER TABLE `seenmail`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `short_links`
--
ALTER TABLE `short_links`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `type_events`
--
ALTER TABLE `type_events`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bills`
--
ALTER TABLE `bills`
  ADD CONSTRAINT `bills_ibfk_1` FOREIGN KEY (`id_event`) REFERENCES `events` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `events`
--
ALTER TABLE `events`
  ADD CONSTRAINT `events_ibfk_1` FOREIGN KEY (`id_loai`) REFERENCES `type_events` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
