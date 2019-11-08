-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 08, 2019 at 03:28 AM
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
(6, 'Test chức năng phê duyệt', 'Fh0t1bmmU2_LeeSin.png', 2, 'Mpx9dGHf4O_LeeSin.png', '2020-02-01 02:00:00', 100000.00, 'HCM', '2019-01-01 02:00:00', '<p>sdasd</p>', '<p>asdasdadasdas</p>', 100, 1, 0, 1);

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
(23, '2019_11_02_215354_create_social_accounts_table', 10);

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
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(10) UNSIGNED NOT NULL,
  `ten_su_kien` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `banner` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `loai_su_kien` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thoi_gian` datetime NOT NULL,
  `tom_tat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `dia_diem` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `ten_su_kien`, `banner`, `loai_su_kien`, `thoi_gian`, `tom_tat`, `dia_diem`, `created_at`, `updated_at`) VALUES
(1, 'Sự kiện 1', '1', 'Giải trí', '2019-10-16 04:14:12', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque dolor eligendi vitae culpa velit placeat eius, iusto animi aliquid. Consequuntur dolorum nesciunt quidem eum asperiores ipsa atque quia quae aliquid.', 'TP HCM', NULL, NULL);

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
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dien_thoai` int(11) DEFAULT NULL,
  `dia_chi` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ngay_sinh` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gioi_tinh` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hinh` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vip` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `name`, `password`, `dien_thoai`, `dia_chi`, `ngay_sinh`, `gioi_tinh`, `hinh`, `vip`, `type`) VALUES
(1, 'nguyentuyen1322@gmail.com', 'Tuyen Nguyen', '$2y$10$50iEPmhhrqPZzSzK3EjQyuy58GHljDipqNHgx7L87f3tIt.jdkXOa', 356518436, 'tp hcm', '2019-11-21', 'Nam', '10710964d7a550c32f92749adcd8d793_cS-6.jpg', 'Normal', '1'),
(2, 'admin@gmail.com', 'Admin', '$2y$10$0QFAWdoWtsatLCPJzOm.yeKJ8M.0SupSOIcpRO8Bb7DahWjgfOXu.', 356518436, 'Thành Phố Hồ Chí Minh', '2019-11-01', 'Nam', '54671d405544766eaeb406fb19c20850_cS-7.jpg', 'V.I.P', '2');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dien_thoai` int(11) NOT NULL,
  `hinh` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gioi_tinh` tinyint(1) NOT NULL,
  `ten` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_type_user` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vip` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dia_chi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `dien_thoai`, `hinh`, `gioi_tinh`, `ten`, `id_type_user`, `password`, `vip`, `email`, `dia_chi`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, '', 0, '', 0, '', '', '123456', '', 'nguyentuyen1322@gmail.com', '', NULL, NULL, NULL);

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
-- Indexes for table `short_links`
--
ALTER TABLE `short_links`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `short_links`
--
ALTER TABLE `short_links`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `type_events`
--
ALTER TABLE `type_events`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
