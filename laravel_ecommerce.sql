-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2023 at 08:37 AM
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
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `name`, `slug`, `image`, `created_at`, `updated_at`) VALUES
(3, 'Philips', 'Philips', '/storage/Brands_images/img_1684575819.png', '2023-05-18 10:37:06', '2023-05-20 07:43:40'),
(4, 'HP', 'HP', '/storage/Brands_images/img_1684575842.png', '2023-05-18 10:37:06', '2023-05-20 07:44:02'),
(5, 'Toshiba', 'Toshiba', '/storage/Brands_images/img_1684575859.png', '2023-05-18 10:37:06', '2023-05-20 07:44:19'),
(6, 'Samsung', 'Samsung', '/storage/Brands_images/img_1684575561.png', '2023-05-18 10:37:06', '2023-05-20 10:35:09'),
(36, 'unionaire', 'unionaire', '/storage/Brands_images/nophoto.jpg', '2023-05-26 17:57:05', '2023-05-26 17:57:05');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Food', 'food', '/storage/Categories_images/img_1685133751.png', '2023-05-26 18:42:32', '2023-05-26 18:42:32'),
(2, 'Electronics', 'electronics', '/storage/Categories_images/img_1685134151.jpg', '2023-05-26 18:49:12', '2023-05-26 18:49:12'),
(3, 'Fashion', 'fashion', '/storage/Categories_images/img_1685134263.jpg', '2023-05-26 18:51:03', '2023-05-26 18:51:03');

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
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_05_18_120737_create_brands_table', 2),
(7, '2023_05_25_160758_create_categories_table', 3),
(8, '2023_05_26_200318_create_subcategories_table', 3),
(10, '2023_05_31_234154_create_product_images_table', 4),
(11, '2014_01_07_073615_create_tagged_table', 5),
(12, '2014_01_07_073615_create_tags_table', 5),
(13, '2016_06_29_073615_create_tag_groups_table', 5),
(14, '2016_06_29_073615_update_tags_table', 5),
(15, '2020_03_13_083515_add_description_to_tags_table', 5),
(16, '2023_05_31_232339_create_products_table', 6),
(17, '2023_06_03_111837_create_product_sizes_table', 7),
(18, '2023_06_03_111846_create_product_colors_table', 7),
(21, '2023_06_03_112333_product_product_color', 8),
(22, '2023_06_03_112324_product_product_size', 9);

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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` int DEFAULT NULL,
  `price` decimal(8,2) DEFAULT NULL,
  `discount` int DEFAULT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `size` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_description` text COLLATE utf8mb4_unicode_ci,
  `long_description` text COLLATE utf8mb4_unicode_ci,
  `user_id` bigint UNSIGNED NOT NULL DEFAULT '1',
  `category_id` bigint UNSIGNED NOT NULL DEFAULT '1',
  `subcategory_id` bigint UNSIGNED NOT NULL DEFAULT '1',
  `brand_id` bigint UNSIGNED NOT NULL DEFAULT '3',
  `hot deals` tinyint(1) NOT NULL DEFAULT '0',
  `featured` tinyint(1) NOT NULL DEFAULT '0',
  `special offers` tinyint(1) NOT NULL DEFAULT '0',
  `special deals` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `slug`, `code`, `quantity`, `price`, `discount`, `color`, `size`, `thumbnail`, `short_description`, `long_description`, `user_id`, `category_id`, `subcategory_id`, `brand_id`, `hot deals`, `featured`, `special offers`, `special deals`, `created_at`, `updated_at`) VALUES
(1, 'new product', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, 3, 0, 0, 0, 0, '2023-06-01 18:39:12', '2023-06-01 18:39:12'),
(2, 'ggggg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, 3, 0, 0, 0, 0, '2023-06-02 03:56:34', '2023-06-02 03:56:34'),
(3, 'try', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, 3, 0, 0, 0, 0, '2023-06-03 10:13:20', '2023-06-03 10:13:20'),
(4, 'try', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, 3, 0, 0, 0, 0, '2023-06-03 10:16:00', '2023-06-03 10:16:00'),
(5, 'try', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, 3, 0, 0, 0, 0, '2023-06-03 10:16:33', '2023-06-03 10:16:33'),
(6, 'try', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, 3, 0, 0, 0, 0, '2023-06-03 10:18:21', '2023-06-03 10:18:21'),
(7, 'try', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, 3, 0, 0, 0, 0, '2023-06-03 10:19:02', '2023-06-03 10:19:02'),
(8, 'try', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, 3, 0, 0, 0, 0, '2023-06-03 10:23:44', '2023-06-03 10:23:44'),
(9, 'new', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, 3, 0, 0, 0, 0, '2023-06-03 10:26:14', '2023-06-03 10:26:14'),
(10, 'new', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, 3, 0, 0, 0, 0, '2023-06-03 10:32:00', '2023-06-03 10:32:00'),
(11, 'new', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, 3, 0, 0, 0, 0, '2023-06-03 10:33:04', '2023-06-03 10:33:04'),
(12, 'yyeyeyyeye', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, 3, 0, 0, 0, 0, '2023-06-03 10:35:46', '2023-06-03 10:35:46');

-- --------------------------------------------------------

--
-- Table structure for table `product_colors`
--

CREATE TABLE `product_colors` (
  `id` bigint UNSIGNED NOT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_colors`
--

INSERT INTO `product_colors` (`id`, `color`, `created_at`, `updated_at`) VALUES
(1, 'Red', '2023-06-03 10:35:46', '2023-06-03 10:35:46'),
(2, 'Blue', '2023-06-03 10:35:46', '2023-06-03 10:35:46'),
(3, 'Black', '2023-06-03 10:35:46', '2023-06-03 10:35:46');

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE `product_images` (
  `id` bigint UNSIGNED NOT NULL,
  `product_id` bigint UNSIGNED NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product_productcolor`
--

CREATE TABLE `product_productcolor` (
  `id` bigint UNSIGNED NOT NULL,
  `product_id` bigint UNSIGNED NOT NULL,
  `product_color_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_productcolor`
--

INSERT INTO `product_productcolor` (`id`, `product_id`, `product_color_id`, `created_at`, `updated_at`) VALUES
(1, 12, 1, NULL, NULL),
(2, 12, 2, NULL, NULL),
(3, 12, 3, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product_productsize`
--

CREATE TABLE `product_productsize` (
  `id` bigint UNSIGNED NOT NULL,
  `product_id` bigint UNSIGNED NOT NULL,
  `product_size_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_productsize`
--

INSERT INTO `product_productsize` (`id`, `product_id`, `product_size_id`, `created_at`, `updated_at`) VALUES
(1, 12, 1, NULL, NULL),
(2, 12, 2, NULL, NULL),
(3, 12, 3, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product_sizes`
--

CREATE TABLE `product_sizes` (
  `id` bigint UNSIGNED NOT NULL,
  `size` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_sizes`
--

INSERT INTO `product_sizes` (`id`, `size`, `created_at`, `updated_at`) VALUES
(1, 'Small', '2023-06-03 10:35:46', '2023-06-03 10:35:46'),
(2, 'medium', '2023-06-03 10:35:46', '2023-06-03 10:35:46'),
(3, 'Large', '2023-06-03 10:35:46', '2023-06-03 10:35:46');

-- --------------------------------------------------------

--
-- Table structure for table `subcategories`
--

CREATE TABLE `subcategories` (
  `id` bigint UNSIGNED NOT NULL,
  `category_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subcategories`
--

INSERT INTO `subcategories` (`id`, `category_id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 1, 'Fruits', 'Fruits', NULL, NULL),
(2, 2, 'Computers', 'Computers', NULL, NULL),
(3, 1, 'Vegetables', 'Vegetables', NULL, NULL),
(4, 2, 'Mobiles', 'Mobiles', NULL, NULL),
(6, 3, 'Women\'s Shirts', 'womens-shirts', '2023-05-26 19:14:40', '2023-06-01 14:05:19'),
(7, 3, 'Men\'s Wear', 'mens-wear', '2023-05-28 07:36:40', '2023-05-28 07:36:40');

-- --------------------------------------------------------

--
-- Table structure for table `tagging_tagged`
--

CREATE TABLE `tagging_tagged` (
  `id` int UNSIGNED NOT NULL,
  `taggable_id` int UNSIGNED NOT NULL,
  `taggable_type` varchar(125) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tag_name` varchar(125) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tag_slug` varchar(125) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tagging_tagged`
--

INSERT INTO `tagging_tagged` (`id`, `taggable_id`, `taggable_type`, `tag_name`, `tag_slug`) VALUES
(1, 1, 'App\\Models\\Product', 'New Product', 'new-product'),
(2, 1, 'App\\Models\\Product', 'Top Product', 'top-product'),
(3, 2, 'App\\Models\\Product', 'New Product', 'new-product'),
(4, 2, 'App\\Models\\Product', 'Top Product', 'top-product'),
(5, 3, 'App\\Models\\Product', 'New Product', 'new-product'),
(6, 3, 'App\\Models\\Product', 'Top Product', 'top-product'),
(7, 4, 'App\\Models\\Product', 'New Product', 'new-product'),
(8, 4, 'App\\Models\\Product', 'Top Product', 'top-product'),
(9, 5, 'App\\Models\\Product', 'New Product', 'new-product'),
(10, 5, 'App\\Models\\Product', 'Top Product', 'top-product'),
(11, 6, 'App\\Models\\Product', 'New Product', 'new-product'),
(12, 6, 'App\\Models\\Product', 'Top Product', 'top-product'),
(13, 7, 'App\\Models\\Product', 'New Product', 'new-product'),
(14, 7, 'App\\Models\\Product', 'Top Product', 'top-product'),
(15, 8, 'App\\Models\\Product', 'New Product', 'new-product'),
(16, 8, 'App\\Models\\Product', 'Top Product', 'top-product'),
(17, 9, 'App\\Models\\Product', 'New Product', 'new-product'),
(18, 9, 'App\\Models\\Product', 'Top Product', 'top-product'),
(19, 10, 'App\\Models\\Product', 'New Product', 'new-product'),
(20, 10, 'App\\Models\\Product', 'Top Product', 'top-product'),
(21, 11, 'App\\Models\\Product', 'New Product', 'new-product'),
(22, 11, 'App\\Models\\Product', 'Top Product', 'top-product'),
(23, 12, 'App\\Models\\Product', 'New Product', 'new-product'),
(24, 12, 'App\\Models\\Product', 'Top Product', 'top-product');

-- --------------------------------------------------------

--
-- Table structure for table `tagging_tags`
--

CREATE TABLE `tagging_tags` (
  `id` int UNSIGNED NOT NULL,
  `slug` varchar(125) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(125) COLLATE utf8mb4_unicode_ci NOT NULL,
  `suggest` tinyint(1) NOT NULL DEFAULT '0',
  `count` int UNSIGNED NOT NULL DEFAULT '0',
  `tag_group_id` int UNSIGNED DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tagging_tags`
--

INSERT INTO `tagging_tags` (`id`, `slug`, `name`, `suggest`, `count`, `tag_group_id`, `description`) VALUES
(1, 'new-product', 'New Product', 0, 12, NULL, NULL),
(2, 'top-product', 'Top Product', 0, 12, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tagging_tag_groups`
--

CREATE TABLE `tagging_tag_groups` (
  `id` int UNSIGNED NOT NULL,
  `slug` varchar(125) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(125) COLLATE utf8mb4_unicode_ci NOT NULL
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
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `vendor_info` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `role` enum('admin','user','vendor') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `status` enum('active','inactive') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'inactive',
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `name`, `email`, `email_verified_at`, `password`, `image`, `phone`, `address`, `vendor_info`, `role`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Jonathon Lowe MD', 'Prof. Halie Orn', 'bryce24@example.net', '2023-05-06 16:24:15', '$2y$10$6bMktcrNVRxE9tPMYLV/BuEzG08KVNkBrFDGf.Cs2pYK/5BmrJfWC', '/storage/profile_images/img_1683732348.png', '+1 (619) 320-5447', '1487 Kennedi Manor Suite 096South Normaburgh, AZ 78933', 'ddddddddd', 'vendor', 'inactive', 'x3GmImNWvpOa4t8Gs8LVpLquaPtSPsRWV2YPeYwZFJXRNkePwP53i3MX8C4A', '2023-05-06 16:24:15', '2023-05-10 13:59:07'),
(2, 'George Kessler DDS', 'Thad Herzog', 'london80@example.org', '2023-05-06 16:24:15', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'https://via.placeholder.com/60x60.png/0066ee?text=assumenda', '1-928-289-4641', '77903 Javonte Ferry\nStiedemannfort, GA 19522-3724', '', 'user', 'inactive', 'DjVZH3S3idO8405r8icTl8K2voXQQk7wJ69zPIZuWDrSsJDGGvIxcHfNc6cA', '2023-05-06 16:24:15', '2023-05-06 16:24:15'),
(3, 'Elvera Mertz', 'Travon Gaylord', 'monahan.leonardo@example.org', '2023-05-06 16:24:15', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'https://via.placeholder.com/60x60.png/009955?text=expedita', '803-264-7275', '85243 West Place Apt. 393\nBiankachester, ND 45962-3522', '', 'vendor', 'active', 'FkVQKm02kXw191IhCCXpZ1m3blOS4ISSvHtKOljonndw3vLyvrikeoBjFp7P', '2023-05-06 16:24:15', '2023-05-06 16:24:15'),
(4, 'Desiree Schiller', 'Ms. Katelin Kuvalis V', 'shanie.stanton@example.com', '2023-05-06 16:24:15', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'https://via.placeholder.com/60x60.png/00ee77?text=autem', '530.798.2703', '7739 Christophe Crescent Suite 292\nNew Jakaylaberg, NJ 64483-9085', '', 'vendor', 'inactive', '6v8TgTaU7j', '2023-05-06 16:24:15', '2023-05-06 16:24:15'),
(5, 'Donnie Murphy', 'Susie Stehr', 'mohamedamin45@yahoo.com', '2023-05-06 16:24:15', '$2y$10$GdxFdwnNUnguvJggYsHkqu7XIN09pK4I0S4hQxtqpP3lrYbUHP/ci', '/storage/profile_images/img_1685040111.JPG', '+17708817559', 'seif street', '', 'admin', 'inactive', '34lo7XSRRCaD3TnLbxNjhvmoLbbp3WmVcAusnO552Rwc0xKktrqAaerxmaDN', '2023-05-06 16:24:15', '2023-05-25 16:41:52'),
(6, 'Brenden Halvorson I', 'Retha Dietrich', 'brown.warren@example.com', '2023-05-06 16:24:15', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'https://via.placeholder.com/60x60.png/000099?text=molestiae', '585.395.9666', '39044 Mckenzie Glens\nWest Myra, FL 57399', '', 'admin', 'active', 'ffKn8Xx8rd', '2023-05-06 16:24:15', '2023-05-06 16:24:15'),
(7, 'Ernesto Kovacek', 'Mr. Leif Walker V', 'newton.upton@example.org', '2023-05-06 16:24:15', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'https://via.placeholder.com/60x60.png/00ffdd?text=iste', '+1-769-315-6683', '3145 Green Stream Apt. 891\nLuciuschester, DC 70278', '', 'user', 'active', 'yVZdE8wRYK', '2023-05-06 16:24:15', '2023-05-06 16:24:15'),
(8, 'Bartholome Yundt PhD', 'Nora Abshire', 'mreynolds@example.net', '2023-05-06 16:24:15', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'https://via.placeholder.com/60x60.png/00ff88?text=repudiandae', '(551) 249-9621', '762 Alyce Keys\nEast Alisaview, VA 69759', '', 'vendor', 'active', 'mShvKMhRGr', '2023-05-06 16:24:15', '2023-05-06 16:24:15'),
(9, 'Elvera Abernathy III', 'Dr. Timothy Jaskolski', 'tyree95@example.com', '2023-05-06 16:24:15', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'https://via.placeholder.com/60x60.png/00cc22?text=et', '646-944-6792', '79829 Marshall Route\nLake Myrna, NV 94005', '', 'admin', 'inactive', '5KLwPzhXm8', '2023-05-06 16:24:15', '2023-05-06 16:24:15'),
(10, 'Ottilie Kemmer', 'Mrs. Julie Wisozk', 'cynthia21@example.org', '2023-05-06 16:24:15', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'https://via.placeholder.com/60x60.png/007744?text=quaerat', '+18575516274', '9617 Joanie Manors Apt. 904\nGersonview, NM 59678-9463', '', 'vendor', 'inactive', 'SdlzLDHkme', '2023-05-06 16:24:15', '2023-05-28 10:39:41'),
(11, 'Ahmed', 'Ahmed Fathy', 'ahmedamin98@yahoo.com', NULL, '$2y$10$9qJnACaSCCVNaTt/KR8BV.4Qgho9uUDlcBjNzDDCoN7c4rY2SM5Iq', '/storage/profile_images/img_1684401701.jpg', NULL, '74 elessewy street', NULL, 'user', 'active', NULL, '2023-05-13 10:41:58', '2023-05-18 08:53:25'),
(12, 'sony', 'sony', 'sony@yahoo.com', NULL, '$2y$10$vfUzYQJ2uPgolUO9y34rN..p4choUbJBZ7SYY7UwetkvmLH8qgnNW', NULL, '5246821', NULL, NULL, 'vendor', 'inactive', NULL, '2023-05-28 09:02:03', '2023-05-28 09:02:03'),
(13, 'samsung', 'samsung', 'samsung@yahoo.com', NULL, '$2y$10$T5z7rSCRJNG1Z21zyL3Wp.mxw8SsJPuRAJreynWAdS6ODnU6HFQvu', NULL, '5403891', NULL, NULL, 'vendor', 'active', NULL, '2023-05-28 09:12:24', '2023-05-28 10:43:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`),
  ADD UNIQUE KEY `slug` (`slug`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_name_unique` (`name`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`);

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
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_user_id_foreign` (`user_id`),
  ADD KEY `products_category_id_foreign` (`category_id`),
  ADD KEY `products_subcategory_id_foreign` (`subcategory_id`),
  ADD KEY `products_brand_id_foreign` (`brand_id`);

--
-- Indexes for table `product_colors`
--
ALTER TABLE `product_colors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_images_product_id_foreign` (`product_id`);

--
-- Indexes for table `product_productcolor`
--
ALTER TABLE `product_productcolor`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_productcolor_product_id_foreign` (`product_id`),
  ADD KEY `product_productcolor_product_color_id_foreign` (`product_color_id`);

--
-- Indexes for table `product_productsize`
--
ALTER TABLE `product_productsize`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_productsize_product_id_foreign` (`product_id`),
  ADD KEY `product_productsize_product_size_id_foreign` (`product_size_id`);

--
-- Indexes for table `product_sizes`
--
ALTER TABLE `product_sizes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subcategories`
--
ALTER TABLE `subcategories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subcategories_category_id_foreign` (`category_id`);

--
-- Indexes for table `tagging_tagged`
--
ALTER TABLE `tagging_tagged`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tagging_tagged_taggable_id_index` (`taggable_id`),
  ADD KEY `tagging_tagged_taggable_type_index` (`taggable_type`),
  ADD KEY `tagging_tagged_tag_slug_index` (`tag_slug`);

--
-- Indexes for table `tagging_tags`
--
ALTER TABLE `tagging_tags`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tagging_tags_slug_index` (`slug`),
  ADD KEY `tagging_tags_tag_group_id_foreign` (`tag_group_id`);

--
-- Indexes for table `tagging_tag_groups`
--
ALTER TABLE `tagging_tag_groups`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tagging_tag_groups_slug_index` (`slug`);

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
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `product_colors`
--
ALTER TABLE `product_colors`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_productcolor`
--
ALTER TABLE `product_productcolor`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `product_productsize`
--
ALTER TABLE `product_productsize`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `product_sizes`
--
ALTER TABLE `product_sizes`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `subcategories`
--
ALTER TABLE `subcategories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tagging_tagged`
--
ALTER TABLE `tagging_tagged`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `tagging_tags`
--
ALTER TABLE `tagging_tags`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tagging_tag_groups`
--
ALTER TABLE `tagging_tag_groups`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_brand_id_foreign` FOREIGN KEY (`brand_id`) REFERENCES `brands` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `products_subcategory_id_foreign` FOREIGN KEY (`subcategory_id`) REFERENCES `subcategories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `products_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `product_images`
--
ALTER TABLE `product_images`
  ADD CONSTRAINT `product_images_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `product_productcolor`
--
ALTER TABLE `product_productcolor`
  ADD CONSTRAINT `product_productcolor_product_color_id_foreign` FOREIGN KEY (`product_color_id`) REFERENCES `product_colors` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `product_productcolor_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `product_productsize`
--
ALTER TABLE `product_productsize`
  ADD CONSTRAINT `product_productsize_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `product_productsize_product_size_id_foreign` FOREIGN KEY (`product_size_id`) REFERENCES `product_sizes` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `subcategories`
--
ALTER TABLE `subcategories`
  ADD CONSTRAINT `subcategories_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `tagging_tags`
--
ALTER TABLE `tagging_tags`
  ADD CONSTRAINT `tagging_tags_tag_group_id_foreign` FOREIGN KEY (`tag_group_id`) REFERENCES `tagging_tag_groups` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
