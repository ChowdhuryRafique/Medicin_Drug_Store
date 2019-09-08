-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 04, 2019 at 11:30 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `drugstore`
--

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `id` int(10) UNSIGNED NOT NULL,
  `companyName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `companyName`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Rafique', '2019-09-03 00:25:08', '2019-09-03 00:10:25', '2019-09-03 00:25:08'),
(2, 'Rafique', '2019-09-03 00:26:24', '2019-09-03 00:25:43', '2019-09-03 00:26:24'),
(3, 'jnjn', NULL, '2019-09-03 00:33:16', '2019-09-03 01:34:12'),
(4, 'Rafique', '2019-09-03 01:30:13', '2019-09-03 01:02:35', '2019-09-03 01:30:13'),
(5, 'Chowdhury', NULL, '2019-09-03 01:04:15', '2019-09-03 01:04:15');

-- --------------------------------------------------------

--
-- Table structure for table `diseases`
--

CREATE TABLE `diseases` (
  `id` int(10) UNSIGNED NOT NULL,
  `disease_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `diseases`
--

INSERT INTO `diseases` (`id`, `disease_name`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'rog', '2019-09-03 01:55:19', '2019-09-03 01:48:43', '2019-09-03 01:55:19'),
(2, 'Rafique', NULL, '2019-09-03 01:55:36', '2019-09-03 02:29:39');

-- --------------------------------------------------------

--
-- Table structure for table `medicin_creates`
--

CREATE TABLE `medicin_creates` (
  `id` int(10) UNSIGNED NOT NULL,
  `medicinName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `medicinQuantity` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `medicinPrice` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `medicinDescription` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `medicinSelect` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `diseaseName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imageupload` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'ImageFolder/medicine.jpg',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `medicin_creates`
--

INSERT INTO `medicin_creates` (`id`, `medicinName`, `medicinQuantity`, `medicinPrice`, `medicinDescription`, `medicinSelect`, `diseaseName`, `imageupload`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Napa', '100', '2', 'Peracitamol', '1', '1', 'ImageFolder/JNyxxwXzpghyGq9A77XlxCwnkAV57zVMF8EBPRji.jpeg', '2019-09-02 04:26:58', '2019-09-02 03:50:12', '2019-09-02 04:26:58'),
(2, 'Rafique', '12', '2', 'Peracitamol', '1', '1', 'ImageFolder/n3uMA2OraMsssJE162g6nvM7skEeb1wk0Yyc1o3J.jpeg', '2019-09-02 04:33:08', '2019-09-02 04:29:25', '2019-09-02 04:33:08'),
(3, 'Rafique chowdhury Khan', '3322222', '22222222222222222', 'Peracitamol Janina', 'Choose One', 'Choose One', 'ImageFolder/g9u7Ucd5Vna53lQC5tghH5d0WXXCNkeS9Nl7QkMK.jpeg', '2019-09-02 06:13:26', '2019-09-02 04:34:13', '2019-09-02 06:13:26'),
(4, 'hkbhw', '17', '5445', 'jhbjhvjhv', '1', '2', 'ImageFolder/72HmmiViB82eTnMVJEZ6yxQAzzZo4YfkLJhLGVR1.jpeg', NULL, '2019-09-02 06:12:48', '2019-09-04 03:26:51');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(7, '2014_10_12_000000_create_users_table', 1),
(8, '2014_10_12_100000_create_password_resets_table', 1),
(9, '2019_09_02_053315_create_medicin_creates_table', 1),
(11, '2019_09_02_124229_create_companies_table', 2),
(12, '2019_09_03_074035_create_diseases_table', 3),
(13, '2019_09_04_053926_create_orders_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `medicine_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `medicine_quantity` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `medicine_id`, `medicine_quantity`, `created_at`, `updated_at`) VALUES
(1, '4', '2', NULL, NULL),
(2, '4', '4', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Rafiq', 'chowdhuryrafiq51@yahoo.com', '$2y$10$/jwv/oMdj1r7a5KvBYpWveLm1EnDBMzpTYyiUSIpN8.Vn0aRCAQee', 'JxzyWvUFleTdsqzdZ8uom0cuFb3bbmTu52TO6N5OTpCHcxvg77tBRMuMbcHU', '2019-09-03 04:40:09', '2019-09-03 04:40:09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `diseases`
--
ALTER TABLE `diseases`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medicin_creates`
--
ALTER TABLE `medicin_creates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

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
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `diseases`
--
ALTER TABLE `diseases`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `medicin_creates`
--
ALTER TABLE `medicin_creates`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
