-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 25, 2019 at 07:16 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel_elibrary`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `details` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `user_id`, `details`, `created_at`, `updated_at`) VALUES
(1, 1, 'sdss', NULL, NULL),
(2, 1, 'ewew', '2019-09-17 05:35:06', '2019-09-17 05:35:06'),
(3, 1, 'dsdsda', '2019-09-17 07:04:57', '2019-09-17 07:04:57'),
(4, 6, 'my request', '2019-09-17 07:42:18', '2019-09-17 07:42:18'),
(5, 1, 'I want to get book on PHP', '2019-09-18 06:17:51', '2019-09-18 06:17:51'),
(6, 4, 'fgdgdfgfgfdg', '2019-12-06 11:10:47', '2019-12-06 11:10:47');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_09_17_012834_create_resources_table', 1),
(4, '2019_09_17_064142_create_comments_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('z@gmail.com', '$2y$10$eiMb/op01bBzTVv0RxwI2.I5e4XWnuHTJr7BV90ThacdWIv/REcvu', '2019-09-17 07:45:23');

-- --------------------------------------------------------

--
-- Table structure for table `resources`
--

CREATE TABLE `resources` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `book_catagory` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `book_sub_catagory` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `book_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `book_des` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `book_author` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `book_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_size` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_view` int(11) NOT NULL DEFAULT '0',
  `total_download` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `resources`
--

INSERT INTO `resources` (`id`, `book_catagory`, `book_sub_catagory`, `book_name`, `book_des`, `book_author`, `book_image`, `file_name`, `file_size`, `total_view`, `total_download`, `created_at`, `updated_at`) VALUES
(1, 'ug', 'it', 'Demo Test', 'zahid', 'ss', '1568725189_download.jpg', '1568725189_approval_sheet_final.pdf', '0.09', 5, 0, '2019-09-17 01:04:26', '2019-09-17 06:59:49'),
(2, 'pg', 'cp', 'Blood Donor Paper', 'blood donation', 'BIt', '1568725371_download.jpg', '1568725371_approval_sheet_final.pdf', '0.09', 7, 0, '2019-09-17 03:03:19', '2019-09-17 07:02:51'),
(3, 'ug', 'eng', 'C++', 'c++', 'Bell', '1568711563_png.png', '1568711563_Course_Details.pdf', '0.81', 7, 0, '2019-09-17 03:12:43', '2019-09-17 03:12:43'),
(4, 'ug', 'eng', 'Java', 'java', 'java', '1568711887_download.jpg', '1568711887_approval_sheet_final.pdf', '0.09', 7, 0, '2019-09-17 03:18:07', '2019-09-17 03:18:07'),
(5, 'ug', 'eng', 'Book 2 ', 'Book 2 ', 'Book 2 ', '1568711986_download.jpg', '1568711986_test.zip', '0.00', 4, 0, '2019-09-17 03:19:46', '2019-09-17 03:19:46'),
(7, 'ug', 'it', 'PHP', 'PHP', 'test', '1568809716_png.png', '1568809716_approval_sheet_final.pdf', '0.09', 1, 0, '2019-09-18 06:28:36', '2019-09-18 06:28:36'),
(8, 'ug', 'bba', 'Demo Test', 'sssss', 'sdsdsd', '1569287153_book-8.jpg', '1569287153_1568703866_approval_sheet_final.pdf', '0.09', 2, 0, '2019-09-23 19:05:53', '2019-09-23 19:05:53');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` int(11) NOT NULL DEFAULT '0',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `role`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin 1', 'admin@gmail.com', '01714123456', 1, NULL, '$2y$10$21FmW24/5In9VMbCOqlcvOCAqnXzwKLYX.x32j4f7v14faYgdWR5y', NULL, '2019-09-17 00:42:07', '2019-09-17 07:06:07'),
(2, 'Admin 2', 'admin2@gmail.com', '01714123456', 1, NULL, '$2y$10$oKUWAlmox/ev9IuhxxqqDu4enKYO6MTrKTHPSLSDDUuKtbc.NA1Wq', NULL, '2019-09-17 00:42:07', '2019-09-17 00:42:07'),
(3, 'Admin 3', 'admin3@gmail.com', '01714123456', 1, NULL, '$2y$10$FrPUnyaUONA6pHdUT4cwxeHq43B.2uX2SBNPr7.3Lqpa.9EXlDBY6', NULL, '2019-09-17 00:42:07', '2019-09-17 00:42:07'),
(4, 'Zahidur Rahman Shimul', 'z@gmail.com', '01743602392', 0, NULL, '$2y$10$86CH3rXgP2rK0yPONzqOUemyDUljKCnal7sTzfKmPWF5wGygYzcu6', NULL, '2019-09-17 05:35:55', '2019-09-17 05:35:55'),
(5, 'user 1', 'user1@gmail.com', '01114303349', 0, NULL, '$2y$10$wAjDcNvpc0iL8ATQtVT.7u8jZplrGKQV/T5wvzLtKRhbBANikfz9i', NULL, '2019-09-17 07:40:39', '2019-09-17 07:40:39'),
(6, 'user2', 'user2@gmail.com', '01114303349', 0, NULL, '$2y$10$XVg4osMa1EsFyTCN7wmwv.SQvJTuZdP3A8qmp1ohfj9AM9vyLUSx2', NULL, '2019-09-17 07:41:49', '2019-09-17 07:41:49'),
(7, 'Zahid', 'v@gmail.com', '01743602392', 0, NULL, '$2y$10$6KAfkHY2oCybVwm7rcszCeW/LFIvuUfOMzgAuahuhI8KTHRPUZRP6', NULL, '2019-09-18 06:23:53', '2019-09-18 06:24:09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_user_id_foreign` (`user_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `resources`
--
ALTER TABLE `resources`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `resources`
--
ALTER TABLE `resources`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
