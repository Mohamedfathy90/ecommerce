-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 11, 2023 at 08:32 AM
-- Server version: 8.0.29
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel_ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `username` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT 'storage/profile_images/nophoto.jpg',
  `phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `vendor_info` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `role` enum('admin','user','vendor') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `status` enum('active','inactive') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `name`, `email`, `email_verified_at`, `password`, `image`, `phone`, `address`, `vendor_info`, `role`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Jonathon Lowe MD', 'Prof. Halie Orn', 'bryce24@example.net', '2023-05-06 16:24:15', '$2y$10$6bMktcrNVRxE9tPMYLV/BuEzG08KVNkBrFDGf.Cs2pYK/5BmrJfWC', '/storage/profile_images/img_1683732348.png', '+1 (619) 320-5447', '1487 Kennedi Manor Suite 096South Normaburgh, AZ 78933', 'ddddddddd', 'vendor', 'inactive', 'NjTivDR8R8h91b4vrkZNeYCHYJEL80tQ8O5kO82D5F2WUYYUGPlhMiiXMMPe', '2023-05-06 16:24:15', '2023-05-10 13:59:07'),
(2, 'George Kessler DDS', 'Thad Herzog', 'london80@example.org', '2023-05-06 16:24:15', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'https://via.placeholder.com/60x60.png/0066ee?text=assumenda', '1-928-289-4641', '77903 Javonte Ferry\nStiedemannfort, GA 19522-3724', '', 'user', 'inactive', 'ROkuklFj9S85pHpkFOs2QrBSHUCRrEUhiCyPYiz7KvDumcKM1uoLnd1bH7YC', '2023-05-06 16:24:15', '2023-05-06 16:24:15'),
(3, 'Elvera Mertz', 'Travon Gaylord', 'monahan.leonardo@example.org', '2023-05-06 16:24:15', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'https://via.placeholder.com/60x60.png/009955?text=expedita', '803-264-7275', '85243 West Place Apt. 393\nBiankachester, ND 45962-3522', '', 'vendor', 'active', 'eAJXQ0MVwX', '2023-05-06 16:24:15', '2023-05-06 16:24:15'),
(4, 'Desiree Schiller', 'Ms. Katelin Kuvalis V', 'shanie.stanton@example.com', '2023-05-06 16:24:15', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'https://via.placeholder.com/60x60.png/00ee77?text=autem', '530.798.2703', '7739 Christophe Crescent Suite 292\nNew Jakaylaberg, NJ 64483-9085', '', 'vendor', 'inactive', '6v8TgTaU7j', '2023-05-06 16:24:15', '2023-05-06 16:24:15'),
(5, 'Donnie Murphy', 'Susie Stehr', 'mohamedamin45@yahoo.com', '2023-05-06 16:24:15', '$2y$10$GdxFdwnNUnguvJggYsHkqu7XIN09pK4I0S4hQxtqpP3lrYbUHP/ci', '/storage/profile_images/1765359116157547.JPG', '+17708817559', 'seif street', '', 'admin', 'inactive', 'tTHxsL0tMwqHUGt6b476EdpHSKHWjXfF6GUDHC8VxfcHe5qqN81UeNNyowIm', '2023-05-06 16:24:15', '2023-05-10 13:58:12'),
(6, 'Brenden Halvorson I', 'Retha Dietrich', 'brown.warren@example.com', '2023-05-06 16:24:15', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'https://via.placeholder.com/60x60.png/000099?text=molestiae', '585.395.9666', '39044 Mckenzie Glens\nWest Myra, FL 57399', '', 'admin', 'active', 'ffKn8Xx8rd', '2023-05-06 16:24:15', '2023-05-06 16:24:15'),
(7, 'Ernesto Kovacek', 'Mr. Leif Walker V', 'newton.upton@example.org', '2023-05-06 16:24:15', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'https://via.placeholder.com/60x60.png/00ffdd?text=iste', '+1-769-315-6683', '3145 Green Stream Apt. 891\nLuciuschester, DC 70278', '', 'user', 'active', 'yVZdE8wRYK', '2023-05-06 16:24:15', '2023-05-06 16:24:15'),
(8, 'Bartholome Yundt PhD', 'Nora Abshire', 'mreynolds@example.net', '2023-05-06 16:24:15', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'https://via.placeholder.com/60x60.png/00ff88?text=repudiandae', '(551) 249-9621', '762 Alyce Keys\nEast Alisaview, VA 69759', '', 'vendor', 'active', 'mShvKMhRGr', '2023-05-06 16:24:15', '2023-05-06 16:24:15'),
(9, 'Elvera Abernathy III', 'Dr. Timothy Jaskolski', 'tyree95@example.com', '2023-05-06 16:24:15', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'https://via.placeholder.com/60x60.png/00cc22?text=et', '646-944-6792', '79829 Marshall Route\nLake Myrna, NV 94005', '', 'admin', 'inactive', '5KLwPzhXm8', '2023-05-06 16:24:15', '2023-05-06 16:24:15'),
(10, 'Ottilie Kemmer', 'Mrs. Julie Wisozk', 'cynthia21@example.org', '2023-05-06 16:24:15', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'https://via.placeholder.com/60x60.png/007744?text=quaerat', '+18575516274', '9617 Joanie Manors Apt. 904\nGersonview, NM 59678-9463', '', 'vendor', 'active', 'SdlzLDHkme', '2023-05-06 16:24:15', '2023-05-06 16:24:15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
