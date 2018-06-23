-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 23, 2018 at 06:26 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `foodorderversion1`
--

-- --------------------------------------------------------

--
-- Table structure for table `aboutsections`
--

CREATE TABLE `aboutsections` (
  `id` int(10) UNSIGNED NOT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `aboutsections`
--

INSERT INTO `aboutsections` (`id`, `photo`, `created_at`, `updated_at`) VALUES
(1, 'Bob-Wheaton-Assignment-39A-667x476.jpg', '2018-05-28 11:03:25', '2018-05-28 11:03:25'),
(2, 'how to make fish biriyani recipe prawn biriyani king fish biriyani.jpg', '2018-05-28 11:03:34', '2018-05-28 11:03:34'),
(3, 'chicken-biryani.jpg', '2018-05-28 11:03:41', '2018-05-28 11:03:41'),
(4, 'sesame-ginger-chickpea-stuffed-sweet-potatoes-1705p137.jpg', '2018-05-28 11:04:01', '2018-05-28 11:04:01');

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo_path` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`id`, `name`, `price`, `photo`, `photo_path`, `created_at`, `updated_at`) VALUES
(1, 'Black Bean Soup', '250', 'black-bean-soup-700.jpg', 'C:\\xampp\\tmp\\php26A3.tmp', '2018-05-28 10:56:41', '2018-05-28 10:56:41'),
(2, 'Chingri Curry Soup', '350', 'Low-Calorie-Shrimp-Alfredo-copy-768x769.jpg', 'C:\\xampp\\tmp\\phpD199.tmp', '2018-05-28 10:57:25', '2018-05-28 10:57:25'),
(3, 'Nuduls', '100', 'b164434f80e760ce49885f2cee79ea9d.jpg', 'C:\\xampp\\tmp\\php5B9A.tmp', '2018-05-28 10:58:00', '2018-05-28 10:58:00'),
(4, 'Tomato Rice', '299', 'exps167556_LR153742B08_28_4b-1-696x696.jpg', 'C:\\xampp\\tmp\\phpBA07.tmp', '2018-05-28 10:58:24', '2018-05-28 10:58:24'),
(5, 'Butter Burger2', '80', '6465693_orig.jpg', 'C:\\xampp\\tmp\\phpD8B9.tmp', '2018-05-29 00:42:16', '2018-05-29 00:42:57');

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
(3, '2018_05_04_171123_create_data_table', 1),
(4, '2018_05_06_071742_create_aboutsections_table', 1),
(5, '2018_05_06_125535_create_videosections_table', 1);

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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'tamim', 'sk.tamim56@gmail.com', '$2y$10$GPRwaPXb4FfIANVCd5tYb.C2v/FgqYcUXJZINoG6z5rpPmq/3.bwG', 'v7TWOBC5Oy4wxkhmTREhMcj3MZM3ojCUSnlgsveoX3KgZjucvy6izd0HUuXM', '2018-05-28 10:36:56', '2018-05-28 10:36:56');

-- --------------------------------------------------------

--
-- Table structure for table `videosections`
--

CREATE TABLE `videosections` (
  `id` int(10) UNSIGNED NOT NULL,
  `videolink` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `videosections`
--

INSERT INTO `videosections` (`id`, `videolink`, `photo`, `created_at`, `updated_at`) VALUES
(1, 'https://www.youtube.com/watch?v=SFP0WgLh1eo', 'video.jpg', '2018-05-28 11:06:06', '2018-05-28 11:06:06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aboutsections`
--
ALTER TABLE `aboutsections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `videosections`
--
ALTER TABLE `videosections`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aboutsections`
--
ALTER TABLE `aboutsections`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `videosections`
--
ALTER TABLE `videosections`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
