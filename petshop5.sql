-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 04, 2023 at 04:45 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `petshop5`
--

-- --------------------------------------------------------

--
-- Table structure for table `activations`
--

CREATE TABLE `activations` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `code` varchar(255) NOT NULL,
  `completed` tinyint(1) NOT NULL DEFAULT 0,
  `completed_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 1,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `avatar`, `phone`, `active`, `deleted_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', '$2y$10$obfyLAlmlKRqWrmH6nR7v.kwL0t.5z94y4QFDkJwcDYAs99e9tFI6', NULL, NULL, 1, NULL, NULL, NULL, '2023-06-20 19:36:29');

-- --------------------------------------------------------

--
-- Table structure for table `admin_password_resets`
--

CREATE TABLE `admin_password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `adoptions`
--

CREATE TABLE `adoptions` (
  `id` int(11) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `active` int(11) NOT NULL DEFAULT 1,
  `status` varchar(255) NOT NULL DEFAULT 'Proceed',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `adoptions`
--

INSERT INTO `adoptions` (`id`, `user_id`, `name`, `phone`, `email`, `address`, `active`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 86, 'Duy', '0773971865', 'khenchaynguyen@gmail.com', '315 Hai Ba Trung', 1, 'Completed', NULL, '2023-06-15 11:48:22', '2023-06-30 04:52:23'),
(2, 86, 'Hoa Dang', NULL, NULL, 'CMT8', 1, 'Cancelled', NULL, '2023-06-16 11:50:17', '2023-06-30 12:15:40'),
(3, 86, 'Ngoc', NULL, NULL, 'Phu Nhuan', 1, 'Cancelled', NULL, '2023-06-17 11:50:23', '2023-06-30 12:15:44'),
(4, 86, 'Quan', NULL, NULL, 'Binh Thanh', 1, 'Cancelled', NULL, '2023-06-18 11:50:29', '2023-06-30 12:15:43'),
(5, 86, 'Trung Tin', NULL, NULL, 'Binh Tan', 1, 'Cancelled', NULL, '2023-06-19 11:50:33', '2023-06-30 12:15:46'),
(6, 86, 'Mi', NULL, 'mibinhthuong258@yahoo.com', 'Tan Dinh', 1, 'Completed', NULL, '2023-06-20 11:50:37', '2023-06-30 06:20:22'),
(7, 86, 'Na', NULL, 'na1407@yahoo.com', 'Tan Dinh', 1, 'Completed', NULL, '2023-06-21 11:50:40', '2023-06-30 06:20:26'),
(8, 86, 'Tu', NULL, NULL, 'Tan Binh', 1, 'Cancelled', NULL, '2023-06-22 11:50:42', '2023-06-30 12:15:32'),
(9, 86, 'van suong', '0961270723', 'vohugu813@gmail.com', '590 cmt8 q3', 1, 'Cancelled', NULL, '2023-06-29 04:52:08', '2023-06-29 06:42:48'),
(10, 86, 'van suong', '0961270723', 'vohugu813@gmail.com', '590 cmt8 q3', 1, 'Cancelled', NULL, '2023-06-29 06:05:50', '2023-06-29 08:02:44'),
(11, 86, 'van son', '0842051853', 'vohugu813@gmail.com', '590 cmt8 q3', 1, 'Cancelled', NULL, '2023-06-29 06:22:41', '2023-06-30 12:15:34'),
(12, 86, 'van son', '0842051853', 'vohugu813@gmail.com', '590 cmt8 q3', 1, 'Cancelled', NULL, '2023-06-29 06:49:52', '2023-06-30 12:15:35'),
(13, 86, 'van suong', '0961270723', 'vohugu813@gmail.com', '590 cmt8 q3', 1, 'Cancelled', NULL, '2023-06-29 07:16:25', '2023-06-30 12:15:28'),
(14, 86, 'van suong', '0961270723', 'vohugu813@gmail.com', '590 cmt8 q3', 1, 'Cancelled', NULL, '2023-06-29 07:39:35', '2023-06-30 12:15:27'),
(15, 86, 'van son', '0961270723', 'vohugu813@gmail.com', '590 cmt8 q3', 1, 'Cancelled', NULL, '2023-06-29 07:57:33', '2023-06-29 08:14:32'),
(16, 86, 'van suong', '0961270723', 'vohugu813@gmail.com', '590 cmt8 q3', 1, 'Cancelled', NULL, '2023-06-29 08:18:56', '2023-06-30 12:15:29'),
(17, 86, 'van suong', '0961270723', 'vohugu813@gmail.com', '590 cmt8 q3', 1, 'Cancelled', NULL, '2023-06-29 08:20:02', '2023-06-30 12:15:31'),
(18, 86, 'van suong', '0961270723', 'vohugu813@gmail.com', '590 cmt8 q3', 1, 'Cancelled', NULL, '2023-06-29 08:22:34', '2023-06-30 12:15:24'),
(19, 86, 'van suong', '0961270723', 'vohugu813@gmail.com', '590 cmt8 q3', 1, 'Cancelled', NULL, '2023-06-29 08:23:48', '2023-06-30 12:15:23'),
(20, 86, 'van suong', '0961270723', 'vohugu813@gmail.com', '590 cmt8 q3', 1, 'Cancelled', NULL, '2023-06-29 08:38:20', '2023-06-29 08:42:25'),
(21, 86, 'van suong', '0961270723', 'vohugu813@gmail.com', '590 cmt8 q3', 1, 'Cancelled', NULL, '2023-06-29 08:42:46', '2023-06-29 08:43:00'),
(22, 86, 'Hoa Dang Le', '0773971865', 'hoadang0727@gmail.com', 'My Dinh', 1, 'Completed', NULL, '2023-06-30 01:40:32', '2023-06-30 05:16:28'),
(23, 86, 'Hoa Dang Le', '0773971865', 'hoadang0727@gmail.com', 'My Dinh', 1, 'Completed', NULL, '2023-06-30 01:41:14', '2023-06-30 05:16:31'),
(24, 86, 'van suong', '0961270723', 'vohugu813@gmail.com', '590 cmt8 q3', 1, 'Cancelled', NULL, '2023-06-30 01:41:40', '2023-06-30 12:15:16'),
(25, 86, 'van suong', '0961270723', 'vohugu813@gmail.com', '590 cmt8 q3', 1, 'Completed', NULL, '2023-06-30 01:41:42', '2023-06-30 05:16:34'),
(26, 86, 'Tommy Nguyen', '0961270723', 'khenchaynguyen@gmail.com', '315/2 HAI BA TRUNG', 1, 'Cancelled', NULL, '2023-06-30 01:42:14', '2023-06-30 01:44:09'),
(27, 86, 'Tommy Nguyen', '0961270723', 'khenchaynguyen@gmail.com', '315/2 HAI BA TRUNG', 1, 'Cancelled', NULL, '2023-06-30 01:43:14', '2023-06-30 01:46:27'),
(28, 86, 'van suong', '0961270723', 'vohugu813@gmail.com', '590 cmt8 q3', 1, 'Cancelled', NULL, '2023-06-30 01:48:09', '2023-06-30 01:48:23'),
(29, 86, 'van suong', '0961270723', 'vohugu813@gmail.com', '590 cmt8 q3', 1, 'Cancelled', NULL, '2023-06-30 01:48:40', '2023-06-30 01:48:50'),
(30, 86, 'van suong', '0961270723', 'vohugu813@gmail.com', '590 cmt8 q3', 1, 'Cancelled', NULL, '2023-06-30 01:49:04', '2023-06-30 01:49:12'),
(31, 86, 'Hoa Dang Le', '0773971865', 'vohugu813@gmail.com', 'My Tho', 1, 'Cancelled', NULL, '2023-06-30 02:17:17', '2023-06-30 12:27:29'),
(32, 87, 'Tommy Nguyen', '0773971865', 'duynats2208038@fpt.edu.vn', '315/2 HAI BA TRUNG', 1, 'Completed', NULL, '2023-06-30 08:36:29', '2023-06-30 08:38:51'),
(33, 88, 'Dang Le', '0773971865', 'hoadang0727@gmail.com', 'My Dinh', 1, 'Completed', NULL, '2023-07-01 00:52:26', '2023-07-01 00:54:57'),
(34, 88, 'Dang Le', '0773971865', 'khenchaynguyen@gmail.com', 'My Dinh', 1, 'Completed', NULL, '2023-07-01 00:54:35', '2023-07-01 00:54:59'),
(35, 88, 'Dang Le', '0773971865', 'hoadang0727@gmail.com', 'My Dinh', 1, 'Proceed', NULL, '2023-07-01 00:55:52', '2023-07-01 00:55:52');

-- --------------------------------------------------------

--
-- Table structure for table `adoption_histories`
--

CREATE TABLE `adoption_histories` (
  `id` int(11) NOT NULL,
  `adoption_id` bigint(20) NOT NULL,
  `product_id` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `adoption_histories`
--

INSERT INTO `adoption_histories` (`id`, `adoption_id`, `product_id`, `created_at`, `updated_at`) VALUES
(1, 1, 38, '2023-06-29 04:09:13', '2023-06-29 04:09:13'),
(2, 2, 33, '2023-06-29 04:31:27', '2023-06-29 04:31:27'),
(3, 3, 35, '2023-06-29 04:52:08', '2023-06-29 04:52:08'),
(4, 4, 35, '2023-06-29 04:52:08', '2023-06-29 04:52:08'),
(5, 5, 38, '2023-06-29 06:05:52', '2023-06-29 06:05:52'),
(6, 6, 36, '2023-06-29 06:22:41', '2023-06-29 06:22:41'),
(7, 7, 36, '2023-06-29 06:49:52', '2023-06-29 06:49:52'),
(8, 8, 34, '2023-06-29 07:16:25', '2023-06-29 07:16:25'),
(9, 9, 35, '2023-06-29 07:39:35', '2023-06-29 07:39:35'),
(10, 10, 38, '2023-06-29 07:57:34', '2023-06-29 07:57:34'),
(11, 11, 36, '2023-06-29 08:18:57', '2023-06-29 08:18:57'),
(12, 12, 38, '2023-06-29 08:20:02', '2023-06-29 08:20:02'),
(13, 13, 38, '2023-06-29 08:22:34', '2023-06-29 08:22:34'),
(14, 14, 38, '2023-06-29 08:23:48', '2023-06-29 08:23:48'),
(15, 15, 38, '2023-06-29 08:38:20', '2023-06-29 08:38:20'),
(16, 16, 38, '2023-06-29 08:42:46', '2023-06-29 08:42:46'),
(17, 17, 36, '2023-06-30 01:40:32', '2023-06-30 01:40:32'),
(18, 18, 36, '2023-06-30 01:41:14', '2023-06-30 01:41:14'),
(19, 19, 38, '2023-06-30 01:41:40', '2023-06-30 01:41:40'),
(20, 20, 38, '2023-06-30 01:41:42', '2023-06-30 01:41:42'),
(21, 21, 33, '2023-06-30 01:43:14', '2023-06-30 01:43:14'),
(22, 22, 33, '2023-06-30 01:43:14', '2023-06-30 01:43:14'),
(23, 23, 33, '2023-06-30 01:48:09', '2023-06-30 01:48:09'),
(24, 24, 33, '2023-06-30 01:48:40', '2023-06-30 01:48:40'),
(25, 25, 35, '2023-06-30 01:49:04', '2023-06-30 01:49:04'),
(26, 26, 34, '2023-06-30 01:45:17', '2023-06-30 01:46:17'),
(27, 27, 38, '2023-06-30 12:14:34', '2023-06-30 12:14:34'),
(28, 28, 34, NULL, NULL),
(29, 29, 34, '2023-06-30 12:24:23', '2023-06-30 12:24:35'),
(30, 30, 34, '2023-06-30 12:28:05', '2023-06-30 12:28:05'),
(31, 31, 34, '2023-06-30 12:28:26', '2023-06-30 12:28:26'),
(32, 32, 38, '2023-06-30 08:36:29', '2023-06-30 08:36:29'),
(33, 33, 34, '2023-07-01 00:52:26', '2023-07-01 00:52:26'),
(34, 34, 48, '2023-07-01 00:54:35', '2023-07-01 00:54:35'),
(35, 35, 6, '2023-07-01 00:55:52', '2023-07-01 00:55:52');

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `quantity` int(11) DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 1,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cart_products`
--

CREATE TABLE `cart_products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cart_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `parent_id` int(11) NOT NULL DEFAULT 0,
  `active` tinyint(1) NOT NULL DEFAULT 1,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `parent_id`, `active`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Items', 'items', 0, 1, NULL, '2023-06-22 00:32:27', '2023-06-22 00:32:27'),
(2, 'Dog', 'dog', 0, 1, NULL, '2023-06-22 00:32:45', '2023-06-22 00:32:45');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `feedbacks`
--

CREATE TABLE `feedbacks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `description` text DEFAULT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 1,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `parent_id` int(11) NOT NULL DEFAULT 0,
  `active` tinyint(1) NOT NULL DEFAULT 1,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_07_02_230147_migration_cartalyst_sentinel', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_05_29_055352_create_admins_table', 1),
(6, '2023_05_29_060600_create_sliders_table', 1),
(7, '2023_05_29_060836_create_settings_table', 1),
(8, '2023_05_29_060930_create_menus_table', 1),
(9, '2023_05_29_061529_create_categories_table', 1),
(10, '2023_05_29_062128_create_products_table', 1),
(11, '2023_05_29_062530_create_carts_table', 1),
(12, '2023_05_29_062723_add_column_cart_id_to_user', 1),
(13, '2023_05_29_062850_create_feedbacks_table', 1),
(14, '2023_05_29_063737_create_cart_products_table', 1),
(15, '2023_05_29_064305_create_product_images_table', 1),
(16, '2023_05_29_064529_create_orders_table', 1),
(17, '2023_05_29_064816_create_order_products_table', 1),
(18, '2023_05_29_130359_create_types_table', 1),
(19, '2023_05_29_130814_add_column_type_id_to_product_table', 1),
(20, '2023_05_29_155532_create_admin_password_resets_table', 1),
(21, '2023_05_30_145436_create_user_verifies_table', 1),
(22, '2023_06_02_080233_create_promotions_table', 1),
(23, '2023_06_02_080827_create_promotion_history_table', 1),
(24, '2023_06_19_130125_add_expires_at_to_user_verifies', 2);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `payment` tinyint(1) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `total` int(11) DEFAULT NULL,
  `status` varchar(255) DEFAULT 'Proceed',
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 1,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `name`, `phone`, `email`, `address`, `payment`, `quantity`, `total`, `status`, `user_id`, `active`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'van suong', '0961270723', 'vohugu813@gmail.com', '590 cmt8 q3', 1, NULL, 200, 'Cancelled', 86, 1, NULL, '2023-06-26 06:43:02', '2023-06-30 03:31:40'),
(2, 'van suong', '0961270723', 'vohugu813@gmail.com', '590 cmt8 q3', 1, NULL, 1000, 'Cancelled', 86, 1, NULL, '2023-06-26 06:54:22', '2023-06-30 03:31:43'),
(3, 'van suong', '0961270723', 'vohugu813@gmail.com', '590 cmt8 q3', 1, NULL, 700, 'Cancelled', 86, 1, NULL, '2023-06-26 06:56:12', '2023-06-30 03:31:46'),
(4, 'van suong', '0961270723', 'vohugu813@gmail.com', '590 cmt8 q3', 1, NULL, 500, 'Cancelled', 86, 1, NULL, '2023-06-26 06:58:18', '2023-06-30 03:31:48'),
(5, 'van suong', '0961270723', 'vohugu813@gmail.com', '590 cmt8 q3', 1, NULL, 900, 'Cancelled', 86, 1, NULL, '2023-06-26 07:26:29', '2023-06-30 03:31:49'),
(6, 'van suong', '0961270723', 'vohugu813@gmail.com', '590 cmt8 q3', 1, NULL, 200, 'Cancelled', 86, 1, NULL, '2023-06-26 07:29:05', '2023-06-30 03:31:51'),
(7, 'hoa dang', '096127049', 'vohugu813@gmail.com', '590 cmt8 q3', 1, NULL, 200, 'Cancelled', 86, 1, NULL, '2023-06-26 07:30:03', '2023-06-30 03:31:53'),
(8, 'van suong', '0961270723', 'vohugu813@gmail.com', '590 cmt8 q3', 0, NULL, 500, 'Cancelled', 86, 1, NULL, '2023-06-26 07:58:37', '2023-06-30 03:31:55'),
(9, 'van suong', '0343586904', 'vohugu813@gmail.com', '590 cmt8 q3', 1, NULL, 300, 'Completed', 86, 1, NULL, '2023-06-26 08:01:53', '2023-06-29 04:54:47'),
(10, 'van suong', '0961270723', 'vohugu813@gmail.com', '590 cmt8 q3', 1, NULL, 700, 'Completed', 86, 1, NULL, '2023-06-26 08:02:53', '2023-06-29 06:46:20'),
(11, 'van suong', '0961270723', 'vohugu813@gmail.com', '590 cmt8 q3', 1, NULL, 600, 'Cancelled', 86, 1, NULL, '2023-06-26 08:20:21', '2023-06-30 03:31:56'),
(12, 'van suong', '0961270723', 'vohugu813@gmail.com', '590 cmt8 q3', 1, NULL, 500, 'Cancelled', 86, 1, NULL, '2023-06-26 08:21:30', '2023-06-30 03:31:58'),
(13, 'van suong', '0961270723', 'vohugu813@gmail.com', '590 cmt8 q3', 1, NULL, 500, 'Cancelled', 86, 1, NULL, '2023-06-26 08:22:10', '2023-06-30 03:31:59'),
(14, 'van suong', '0961270723', 'vohugu813@gmail.com', '590 cmt8 q3', 1, NULL, 500, 'Completed', 86, 1, NULL, '2023-06-26 16:40:08', '2023-06-27 07:43:10'),
(15, 'van suong', '0961270723', 'vohugu813@gmail.com', 'hcm', 1, NULL, 500, 'Completed', 86, 1, NULL, '2023-06-26 16:47:05', '2023-06-27 07:43:10'),
(16, 'van suong', '0961270723', 'vohugu813@gmail.com', '590 cmt8 q3', 1, NULL, 800, 'Completed', 86, 1, NULL, '2023-06-26 16:48:20', '2023-06-27 07:43:10'),
(17, 'van suong', '0961270723', 'vohugu813@gmail.com', '590 cmt8 q3', 1, NULL, 800, 'Completed', 86, 1, NULL, '2023-06-26 16:49:37', '2023-06-27 07:43:10'),
(18, 'van suong', '0961270723', 'vohugu813@gmail.com', '590 cmt8 q3', 1, NULL, 500, 'Completed', 86, 1, NULL, '2023-06-26 17:40:24', '2023-06-27 07:43:10'),
(19, 'van suong', '0961270723', 'vohugu813@gmail.com', '590 cmt8', 1, NULL, 500, 'Completed', 86, 1, NULL, '2023-06-26 17:43:54', '2023-06-27 07:43:10'),
(20, 'van suong', '0961270723', 'vohugu813@gmail.com', '590 cmt8 q3', 1, NULL, 500, 'Completed', 86, 1, NULL, '2023-06-26 17:44:48', '2023-06-27 07:43:10'),
(21, 'hoa dang', '0343586906', 'vohugu813@gmail.com', '20 ho van long', 1, NULL, 200, 'Completed', 86, 1, NULL, '2023-06-26 19:48:44', '2023-06-27 07:43:10'),
(22, 'van suong', '0961270723', 'vohugu813@gmail.com', '590 cmt8 q3', 1, NULL, 400, 'Completed', 86, 1, NULL, '2023-06-26 20:08:10', '2023-06-27 07:43:10'),
(23, 'van suong', '0961270723', 'vohugu813@gmail.com', '590 cmt8 q3', 1, NULL, 400, 'Shipping', 86, 1, NULL, '2023-06-26 22:31:26', '2023-06-28 23:31:00'),
(24, 'van suong', '0961270723', 'vohugu813@gmail.com', '590 cmt8 q3', 1, NULL, 5500, 'Shipping', 86, 1, NULL, '2023-06-27 01:42:40', '2023-06-28 23:30:58'),
(25, 'van suong', '0961270723', 'vohugu813@gmail.com', '590 cmt8 q3', 1, NULL, 290, 'Shipping', 86, 1, NULL, '2023-06-27 06:24:36', '2023-06-28 23:30:56'),
(26, 'van son', '0343586904', 'vohugu813@gmail.com', '590 cmt8 q3', 1, NULL, 340, 'Shipping', 86, 1, NULL, '2023-06-27 06:26:20', '2023-06-28 23:30:50'),
(27, 'van suong 2', '0961270723', 'vohugu813@gmail.com', '590 cmt8 q3', 1, NULL, 730, 'Cancelled', 86, 1, NULL, '2023-06-28 22:47:39', '2023-06-28 23:31:09'),
(28, 'van suong', '0961270723', 'vohugu813@gmail.com', '590 cmt8 q3', 1, NULL, 150, 'Completed', 86, 1, NULL, '2023-06-28 23:40:43', '2023-06-29 06:35:37'),
(29, 'van suong', '0961270723', 'vohugu813@gmail.com', '590 cmt8 q3', 1, NULL, 150, 'Cancelled', 86, 1, NULL, '2023-06-28 23:43:19', '2023-06-29 06:35:34'),
(30, 'van suong', '0961270723', 'vohugu813@gmail.com', '590 cmt8 q3', 1, NULL, 760, 'Completed', 86, 1, NULL, '2023-06-28 23:48:41', '2023-06-29 06:35:31'),
(31, 'van suong', '0961270723', 'vohugu813@gmail.com', '590 cmt8 q3', 1, NULL, 150, 'Cancelled', 86, 1, NULL, '2023-06-28 23:50:29', '2023-06-29 06:28:47'),
(32, 'van suong', '0961270723', 'vohugu813@gmail.com', '590 cmt8 q3', 0, NULL, NULL, 'Cancelled', 86, 1, NULL, '2023-06-29 02:39:54', '2023-06-29 04:28:28'),
(33, 'van suong', '0961270723', 'vohugu813@gmail.com', '590 cmt8 q3', 1, NULL, 150, 'Cancelled', 86, 1, NULL, '2023-06-29 06:50:53', '2023-06-29 06:56:47'),
(34, 'van suong', '0961270723', 'vohugu813@gmail.com', '590 cmt8 q3', 1, NULL, 190, 'Cancelled', 86, 1, NULL, '2023-06-29 07:06:44', '2023-06-29 07:06:54'),
(35, 'Hoa Dang Le', '0773971865', 'vohugu813@gmail.com', 'My Tho', 1, NULL, 600, 'Cancelled', 86, 1, NULL, '2023-06-30 02:10:52', '2023-06-30 02:14:09'),
(36, 'Hoa Dang Le', '0773971865', 'vohugu813@gmail.com', 'My Tho', 1, NULL, 150, 'Cancelled', 86, 1, NULL, '2023-06-30 02:45:30', '2023-06-30 02:45:42'),
(37, 'Hoa Dang Le', '0773971865', 'vohugu813@gmail.com', 'My Tho', 1, NULL, 150, 'Completed', 86, 1, NULL, '2023-06-30 02:46:09', '2023-06-30 12:28:28'),
(38, 'Tommy Nguyen', '0773971865', 'duynats2208038@fpt.edu.vn', '315/2 HAI BA TRUNG', 1, NULL, 424, 'Completed', 87, 1, NULL, '2023-06-30 08:35:49', '2023-06-30 08:38:48'),
(39, 'Tommy Nguyen', '0773971865', 'duynats2208038@fpt.edu.vn', '315/2 HAI BA TRUNG', 1, NULL, 5, 'Completed', 87, 1, NULL, '2023-06-30 12:43:08', '2023-06-30 12:43:29'),
(40, 'Tommy Nguyen', '0773971865', 'duynats2208038@fpt.edu.vn', '315/2 HAI BA TRUNG', 1, NULL, 92, 'Completed', 87, 1, NULL, '2023-06-30 12:43:59', '2023-06-30 12:45:19'),
(41, 'Tommy Nguyen', '0773971865', 'duynats2208038@fpt.edu.vn', '315/2 HAI BA TRUNG', 1, NULL, 177, 'Cancelled', 87, 1, NULL, '2023-06-30 12:46:59', '2023-06-30 12:47:50'),
(42, 'Tommy Nguyen', '0773971865', 'duynats2208038@fpt.edu.vn', '315/2 HAI BA TRUNG', 1, NULL, 25, 'Cancelled', 87, 1, NULL, '2023-06-30 12:52:23', '2023-06-30 12:57:35'),
(43, 'Tommy Nguyen', '0773971865', 'duynats2208038@fpt.edu.vn', '315/2 HAI BA TRUNG', 1, NULL, 170, 'Completed', 87, 1, NULL, '2023-06-30 22:43:34', '2023-06-30 22:47:59'),
(44, 'Dang Le', '0773971865', 'hoadang0727@gmail.com', 'My Dinh', 1, NULL, 130, 'Cancelled', 88, 1, NULL, '2023-07-01 00:34:41', '2023-07-01 00:49:40'),
(45, 'Dang Le', '0773971865', 'hoadang0727@gmail.com', 'My Dinh', 1, NULL, 208, 'Completed', 88, 1, NULL, '2023-07-01 00:48:08', '2023-07-01 00:51:24');

-- --------------------------------------------------------

--
-- Table structure for table `order_products`
--

CREATE TABLE `order_products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `quantity` int(11) NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_products`
--

INSERT INTO `order_products` (`id`, `quantity`, `order_id`, `product_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 30, '2023-06-26 06:43:05', '2023-06-26 06:43:05'),
(2, 2, 2, 30, '2023-06-26 06:54:22', '2023-06-26 06:54:22'),
(3, 2, 2, 31, '2023-06-26 06:54:22', '2023-06-26 06:54:22'),
(4, 1, 3, 30, '2023-06-26 06:56:12', '2023-06-26 06:56:12'),
(5, 1, 3, 31, '2023-06-26 06:56:12', '2023-06-26 06:56:12'),
(6, 1, 3, 32, '2023-06-26 06:56:13', '2023-06-26 06:56:13'),
(7, 1, 4, 30, '2023-06-26 06:58:18', '2023-06-26 06:58:18'),
(8, 1, 4, 31, '2023-06-26 06:58:18', '2023-06-26 06:58:18'),
(9, 3, 5, 30, '2023-06-26 07:26:29', '2023-06-26 07:26:29'),
(10, 1, 5, 31, '2023-06-26 07:26:29', '2023-06-26 07:26:29'),
(11, 1, 6, 30, '2023-06-26 07:29:05', '2023-06-26 07:29:05'),
(12, 1, 7, 32, '2023-06-26 07:30:03', '2023-06-26 07:30:03'),
(13, 1, 8, 30, '2023-06-26 07:58:37', '2023-06-26 07:58:37'),
(14, 1, 8, 31, '2023-06-26 07:58:37', '2023-06-26 07:58:37'),
(15, 1, 9, 31, '2023-06-26 08:01:53', '2023-06-26 08:01:53'),
(16, 2, 10, 30, '2023-06-26 08:02:54', '2023-06-26 08:02:54'),
(17, 1, 10, 31, '2023-06-26 08:02:54', '2023-06-26 08:02:54'),
(18, 1, 13, 30, '2023-06-26 08:22:10', '2023-06-26 08:22:10'),
(19, 1, 13, 31, '2023-06-26 08:22:10', '2023-06-26 08:22:10'),
(20, 1, 19, 30, '2023-06-26 17:43:54', '2023-06-26 17:43:54'),
(21, 1, 19, 31, '2023-06-26 17:43:54', '2023-06-26 17:43:54'),
(22, 1, 20, 30, '2023-06-26 17:44:48', '2023-06-26 17:44:48'),
(23, 1, 20, 31, '2023-06-26 17:44:48', '2023-06-26 17:44:48'),
(24, 1, 21, 30, '2023-06-26 19:48:44', '2023-06-26 19:48:44'),
(25, 1, 22, 30, '2023-06-26 20:08:12', '2023-06-26 20:08:12'),
(26, 1, 22, 39, '2023-06-26 20:08:12', '2023-06-26 20:08:12'),
(27, 1, 23, 30, '2023-06-26 22:31:29', '2023-06-26 22:31:29'),
(28, 1, 23, 40, '2023-06-26 22:31:29', '2023-06-26 22:31:29'),
(29, 9, 24, 31, '2023-06-27 01:42:40', '2023-06-27 01:42:40'),
(30, 3, 24, 40, '2023-06-27 01:42:40', '2023-06-27 01:42:40'),
(31, 1, 24, 30, '2023-06-27 01:42:40', '2023-06-27 01:42:40'),
(32, 9, 24, 32, '2023-06-27 01:42:40', '2023-06-27 01:42:40'),
(33, 1, 24, 44, '2023-06-27 01:42:40', '2023-06-27 01:42:40'),
(34, 1, 25, 39, '2023-06-27 06:24:37', '2023-06-27 06:24:37'),
(35, 1, 25, 40, '2023-06-27 06:24:37', '2023-06-27 06:24:37'),
(36, 1, 26, 30, '2023-06-27 06:26:21', '2023-06-27 06:26:21'),
(37, 1, 26, 32, '2023-06-27 06:26:21', '2023-06-27 06:26:21'),
(38, 4, 27, 31, '2023-06-28 22:47:41', '2023-06-28 22:47:41'),
(39, 1, 27, 41, '2023-06-28 22:47:41', '2023-06-28 22:47:41'),
(40, 1, 28, 31, '2023-06-28 23:40:43', '2023-06-28 23:40:43'),
(41, 1, 29, 30, '2023-06-28 23:43:19', '2023-06-28 23:43:19'),
(42, 4, 30, 32, '2023-06-28 23:48:41', '2023-06-28 23:48:41'),
(43, 1, 31, 30, '2023-06-28 23:50:29', '2023-06-28 23:50:29'),
(44, -3, 32, 31, '2023-06-29 02:39:57', '2023-06-29 02:39:57'),
(45, 1, 33, 30, '2023-06-29 06:50:53', '2023-06-29 06:50:53'),
(46, 1, 34, 32, '2023-06-29 07:06:44', '2023-06-29 07:06:44'),
(47, 2, 35, 30, '2023-06-30 02:10:52', '2023-06-30 02:10:52'),
(48, 2, 35, 31, '2023-06-30 02:10:52', '2023-06-30 02:10:52'),
(49, 1, 36, 30, '2023-06-30 02:45:30', '2023-06-30 02:45:30'),
(50, 1, 37, 31, '2023-06-30 02:46:09', '2023-06-30 02:46:09'),
(51, 5, 38, 8, '2023-06-30 08:35:49', '2023-06-30 08:35:49'),
(52, 3, 38, 17, '2023-06-30 08:35:49', '2023-06-30 08:35:49'),
(53, 2, 38, 19, '2023-06-30 08:35:49', '2023-06-30 08:35:49'),
(54, 1, 39, 7, '2023-06-30 12:43:09', '2023-06-30 12:43:09'),
(55, 1, 40, 7, '2023-06-30 12:43:59', '2023-06-30 12:43:59'),
(56, 3, 40, 8, '2023-06-30 12:43:59', '2023-06-30 12:43:59'),
(57, 1, 41, 14, '2023-06-30 12:46:59', '2023-06-30 12:46:59'),
(58, 1, 41, 10, '2023-06-30 12:46:59', '2023-06-30 12:46:59'),
(59, 1, 41, 11, '2023-06-30 12:46:59', '2023-06-30 12:46:59'),
(60, 5, 41, 26, '2023-06-30 12:46:59', '2023-06-30 12:46:59'),
(61, 5, 42, 10, '2023-06-30 12:52:23', '2023-06-30 12:52:23'),
(62, 5, 43, 7, '2023-06-30 22:43:35', '2023-06-30 22:43:35'),
(63, 5, 43, 8, '2023-06-30 22:43:35', '2023-06-30 22:43:35'),
(64, 1, 44, 43, '2023-07-01 00:34:41', '2023-07-01 00:34:41'),
(65, 1, 45, 30, '2023-07-01 00:48:09', '2023-07-01 00:48:09'),
(66, 5, 45, 42, '2023-07-01 00:48:09', '2023-07-01 00:48:09'),
(67, 1, 45, 22, '2023-07-01 00:48:09', '2023-07-01 00:48:09'),
(68, 1, 45, 31, '2023-07-01 00:48:09', '2023-07-01 00:48:09');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('vohugu813@gmail.com', 'AhPbukzshK5g69iaZ2QnJPPQMQt8WMWYg95u8mkypxdmNFoM5iJPoJ0VJwv6AzDS', '2023-06-30 05:47:13');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `persistences`
--

CREATE TABLE `persistences` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `code` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
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
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `normal_price` int(11) DEFAULT NULL,
  `promotion_price` int(11) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `active` tinyint(1) DEFAULT 1,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `type_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `slug`, `normal_price`, `promotion_price`, `description`, `image`, `category_id`, `active`, `deleted_at`, `created_at`, `updated_at`, `type_id`) VALUES
(1, 'Norrbottenspets', 'norrbottenspets', 0, 0, 'The Norrbottenspets, also known as the Norrbottenspitz, the Nordic Spitz and the Pohjanpystykorva, is a breed of spitz type dog from Sweden. ', 'adoption_shop_thumb01.jpg', 2, 1, NULL, '2023-06-15 11:36:38', '2023-06-15 12:35:24', 1),
(2, 'Indian pariah dog', 'indian-pariah-dog', 0, 0, 'The Indian pariah dog, also known as the Indian native dog or INDog, South Asian pye dog and Desi Kutta, is a landrace of dog native to the Indian subcontinent. They have erect ears, a wedge-shaped head, and a curved tail. It is easily trainable and often used as a guard dog and police dog. ', 'adoption_shop_thumb02.jpg', 2, 1, NULL, '2023-06-16 11:36:48', '2023-06-16 12:35:30', 1),
(3, 'Labrador Retriever', 'labrador-retriever', 0, 0, 'The Labrador Retriever or simply Labrador, is a British breed of retriever gun dog. It was developed in the United Kingdom from fishing dogs imported from the colony of Newfoundland, and was named after the Labrador region of that colony. ', 'adoption_shop_thumb03.jpg', 2, 1, NULL, '2023-06-17 11:36:50', '2023-06-17 12:35:34', 1),
(4, 'Carolina Dog\n', 'carolina-dog', 0, 0, 'The Carolina dog, also known as a yellow dog, yaller dog, American Dingo, or Dixie Dingo, is a breed of medium-sized dog occasionally found feral in the Southeastern United States, especially in isolated stretches of longleaf pines and cypress swamps.', 'adoption_shop_thumb04.jpg', 2, 1, NULL, '2023-06-18 11:36:52', '2023-06-18 12:35:37', 1),
(5, 'Rat Terrier', 'rat-terrier', 0, 0, 'The Rat Terrier is an American dog breed with a background as a farm dog and hunting companion. They share much ancestry with the small hunting dogs known as feists. Common throughout family farms in the 1920s and 1930s, they are now recognized by the United and American Kennel Clubs and are considered a rare breed.', 'adoption_shop_thumb05.jpg', 2, 1, NULL, '2023-06-19 11:36:57', '2023-06-19 12:35:39', 1),
(6, 'Labrador Retriever', 'labrador-retriever', 0, 0, 'The Labrador Retriever or simply Labrador, is a British breed of retriever gun dog. It was developed in the United Kingdom from fishing dogs imported from the colony of Newfoundland, and was named after the Labrador region of that colony. ', 'adoption_shop_thumb06.jpg', 2, 0, NULL, '2023-06-20 11:38:59', '2023-07-01 00:55:48', 1),
(7, 'Chicken treat', 'chicken-treat', 8, 5, 'Proudly made in the USA, 100% of ingredients are sourced in the USA\nWhole muscle chicken breast is the #1 ingredient, sourced in America; Oven baked\nWhole muscle jerky is chewier like typical jerkies; provide plenty of fresh water and follow treating instructions\nYou may break the jerky into smaller pieces for treating; if it’s your dog’s first time start with half of the suggested treating amount and gradually increase to the full amount\nNo added grain, corn, soy, wheat; No added colors or artificial flavors\nLimited ingredient recipe\nNet wt. 16 oz (1lb) of whole muscle chicken jerky dog treats in a resealable bag to preserve freshness\nSatisfaction Guarantee: We’re proud of our products. If you aren’t satisfied, we’ll refund you for any reason within a year of purchase', 'chicken treat.jpg', 1, 0, NULL, '2023-06-20 12:35:53', '2023-07-01 00:42:54', 4),
(8, 'PEDIGREE', 'pedigree', 38, 29, 'Every dog deserves the best… that’s why PEDIGREE Complete Nutrition Dry Dog Food delivers 100% complete and balanced nutrition for your adult dog. It has the antioxidants, vitamins, and minerals canines need to help maintain a healthy lifestyle, and in the delicious roasted chicken flavor they love. This tasty dry kibble helps support healthy digestion… Plus, it’s enriched with omega-6 fatty acids to help nourish your dog’s skin and promote a healthy coat. Irresistible in every way, this dry dog food provides whole grains and protein, and was made in the USA with the world’s finest ingredients. It has no artificial flavors, no high fructose corn syrup, and no added sugar. Dogs bring out the good in us. PEDIGREE brings out the good in them. Feed the good.', 'PEDIGREE.jpg', 1, 1, NULL, '2023-06-21 02:43:34', '2023-06-21 05:23:08', 2),
(9, 'Royal Canin French', 'royal-canin-french', 29, 24, 'Royal Canin knows what makes your French Bulldog magnificent is in the details. With their pointy bat ears, Frenchies are adorable miniature bulldogs with extremely flat muzzles. They can benefit from a diet that’s easy for them to eat, provides muscle support, and aids with digestion to help cut down on their not-so-adorable gas. Royal Canin French Bulldog Adult dog food is tailor-made nutrition created just for your pure breed French Bulldog. This exclusive breed-specific diet is uniquely formulated for your French Bulldog, with the specific nutrients to help them thrive. The customized curved-shaped kibble is specially designed for your French Bulldog’s short muzzle and underbite, making it easy for them to pick up and chew. Precise protein content and L-carnitine support healthy muscles. Exclusive nutrients reinforce the skin barrier for healthy skin. And a combination of highly digestible proteins, precise fiber content, and high-quality carbohydrate sources supports healthy digestion to help decrease flatulence and unpleasant stool odors. With nearly 50 years of scientific research and observation, Royal Canin continues to deliver targeted nutrition to feed every pet’s magnificence. Not satisfied? Then neither are we. Our breed health formulas are 100% satisfaction guaranteed.', 'Royal Canin French.jpg', 1, 1, NULL, '2023-06-21 02:51:55', '2023-06-21 05:22:56', 2),
(10, 'Air KONG Squeaker Bone Dog Toy', 'air-kong-squeaker-bone-dog-toy', 10, 5, 'Product Description\nKONG AirDog combines two classic dog toys -the tennis ball and the squeaker-to create the perfect fetch toy. The non-abrasive, high-quality material will not wear down dogs\' teeth. Find your dog\'s favorite AirDog shape and let the games begin. Covered by KONG Satisfaction Guarantee. See KONG Satisfaction Guarantee document below for full details.\n\nAmazon.com\nSqueaker toys and tennis balls: two canine favorites, brought together at last. Tailor-made for games of chase and fetch, this bone-shaped toy conceals an irresistible squeaker inside. It even floats, for hours of retrieving fun by land or by sea. The Air Kong squeaker bone is made in the USA from durable, high-quality tennis-ball material. Unlike typical tennis balls, however, the non-toxic felt covering on an Air Kong is specially designed not to wear down dogs\' teeth as they play. The medium bone measures 9 inches long and is ideal for larger breeds, such as German Shepherds, Rottweilers, mastiffs, and some Labs. --Mary Park', 'Air KONG Squeaker Bone Dog Toy.jpg', 1, 1, NULL, '2023-06-22 02:52:53', '2023-06-22 04:50:23', 3),
(11, 'Goose Squeaky Dog', 'Goose-squeaky-dog', 6, 4, 'THE 2-IN-1 DOG TOY THAT LASTS THROUGH ALL THE FUN Keep them Intrigued It squeaks. It’s cute. It’s that one dog toy your pup won’t want to let go! Our soft, non-stuffed dog toys are designed to tease out the playful side of your pup. It comes with one squeaker in the head and another in the tail to make every bite a delight. You can even fit a plastic bottle through the self fastener opening at the bottom to add a crunch that will drive pooch happily wild! Choose between our fun animal designs and treat your dog to a toy that will keep them occupied for ages to come. Designed to Last Does your dog tear apart stuffed plush toys in no time? Well they might have just met their match because these toys have no stuffing to pull out! Our stuffing free toys are perfect for aggressive chewers, and hold up well to countless games of tug & toss. We’ve designed them in multiple sizes to suit just about any breed. Whether you have a husky or pug, Labrador or yorkie, you’ll find the right dog toy to complement their size and energy. Here’s why you’ll love these 2 in 1 dog toys: Made using 100% toxin free materials to keep your pup safe. Natural shape and texture sparks your dog’s natural instincts. Can be safely washed to quickly remove dirt and odor. Well priced to give you great value for money. Treat your pooch to a dog toy that will keep them fascinatingly engaged for extended play time. Click ‘Add to Cart’ now!\n\n', 'Goose Squeaky Dog.jpg', 1, 1, NULL, '2023-06-22 04:31:46', '2023-06-22 04:50:09', 3),
(12, 'Legend Sandy 14 Pack Dog', 'legend-sandy-14-pack-dog', 17, 14, 'Cute smiley plush squeak dog toys, enough to mobilize your pets\' interested, make them indulge in joy and away from anxiety every day.\n\nFeatures:\n\nColor: Shown in the pictures\n\nMaterial: Plush and cotton fabric High quality for safe use Vibrant vegetable and fruit design with pleasant color and soft texture\n\nPackage include:\n\n1 x stuffed yellow duck dog toy, 5.1\"x3.1\"\n\n1 x plush drumstick dog toy, 7.9\"x2.8\"\n\n1 x squeak star dog toy\n\n1 x plush mushroom dog toy, 3.1\"x2.8\"\n\n1 x squeak pumpkin dog toy, 3.9\"\n\n1 x plush eggplant dog toy, 5.1\"x2.4\"\n\n1 x carrot dog toy plush, 6.3\"x2.8\"\n\n1 x pepper dog toy plush, 5.1\"x2.4\"\n\n1 x banana dog toy plush, 6.7\"x2.4\"\n\n1 x watermelon dog toy plush, 5.1\"x2.8\"\n\n1 x squeak pig dog toy\n\n1 x plush Strawberry dog toy\n\n1 x stuffed candy dog toy\n\n1 x squeak orange dog toy', 'legend sandy 14 pack dog.jpg', 1, 1, NULL, '2023-06-22 04:55:16', '2023-06-26 00:22:00', 3),
(13, 'Basics Cooling Elevated Dog Bed with Metal Frame', 'basics-cooling-elevated-dog-bed -with-metal-frame', 36, 28, 'Elevated pet bed helps keep pets cool and comfortable by promoting increased airflow and reducing pressure on joints\nIncludes a Medium pet bed with a durable iron frame, grey breathable mesh fabric, and screws and hex tool for assembly\nElevates pets more than 7 inches off the ground\nRecommended for small and medium sized breeds, like a Beagle, Corgi, Husky, or Poodle\nEasy to clean (using tap water only)\nProduct dimensions: 43 x 26 x 7.7 inches (LxWxH, overall); 36.2 x 26.4 inches (LxW, mesh fabric)', 'Amazon Basics Cooling Elevated Dog Bed with Metal Frame.jpg', 1, 1, NULL, '2023-06-22 05:24:36', '2023-06-26 00:21:49', 5),
(14, 'HomePop Home Decor', 'homepop-home-decor', 219, 73, 'If your special pet needs a special place to sleep, then this luxury pet bed is a must have accent for your home. This pet bed features a stain resistant fabric in a French bulldog print, carved wood legs in a gray washed finish and raised sides to make your pet feel safe and secure. This charming piece of luxury pet furniture will invite conversation and provide an easy way to keep your pet nearby in style. Lightweight and easy to move; easy to assemble and maintain.', 'HomePop Home Decor.webp', 1, 1, NULL, '2023-06-22 05:35:23', '2023-06-26 00:21:55', 5),
(15, 'MidWest Homes for Pet Crate Bed Cinnamon Fur for Pets', 'midwest-homes-for-pet-crate bed-cinnamon-fur-for-pets', 12, 7, 'Ultra-soft synthetic sheepskin bed conceals shedding. Keeps pets cool in summer, warm in winter. Comfortable polyester-filled bolsters, cushioned poly/cotton base. Folds for storage and travel, completely machine washable.', 'MidWest Homes for Pets 277192 Pet Crate Bed Cinnamon Fur for Pets.webp', 1, 1, NULL, '2023-06-22 05:50:39', '2023-06-26 00:21:34', 5),
(16, 'Best Friends by Sheri The Original Calming Donut Cat and Dog Bed in Shag Fur Taupe', 'best-friends-by-sheri-the-original-calming-donut-cat-and-dog-bed-in-shag-fur-taupe', 35, 30, 'Give your pet more than just a dog bed! Best Friend’s by Sheri is the original creator of the most popular dog bed that has surfaced the internet in recent years: The Calming Donut Dog Bed. This innovative cuddler shag design provides better sleep, supports joints, and offers a calming, self-warming effect. The donut cuddler is carefully crafted and filled with CoziLOFT fibers, allowing your pet to be instantly enveloped in premium, soft, luxurious comfort. The poly filling in our calming dog bed keeps its loft for up to 3Xs longer than standard pet beds, meaning it provides longer comfort, support and aesthetic appeal. Encouraging a deeper night’s rest or a refreshing daytime nap, our soothing dog bed is special because it’s been carefully designed to provide optimal neck, joint, and muscle support. For dogs and cats who like to burrow, the bed creates a perfect space for cuddles and top-notch snuggling. With a water and dirt-resistant bottom, our calming pet bed helps prevent messes from reaching your floors. When accidents happen, toss the shell or bed (small 23\"x23\") into the washing machine for easy clean up. Follow the instructions on the label to ensure proper care.', 'The Original Calming Donut Dog Bed.jpg', 1, 1, NULL, '2023-06-22 21:07:13', '2023-06-26 00:21:30', 5),
(17, 'Royal Canin Poodle', 'royal-canin-poodle', 39, 27, 'Royal Canin knows what makes your Poodle magnificent is in the details. With both brains and beauty, Poodles are highly alert and active companions with distinctive curly coats. They can benefit from the right diet that maintains skin and coat health and muscle tone, and stimulates a Poodle\'s finicky appetite. Royal Canin Poodle Adult Wet Dog Food is tailor-made nutrition created just for your Poodle pure breed. This exclusive breed-specific diet is uniquely formulated for your Poodle, with specific nutrients to help mid size breeds thrive. The complete and balanced soft dog food features a smooth paté texture to appeal to your Poodle’s appetite. Omega-3 fatty acids help provide skin support and coat care. And this Poodle dog food contains precise protein content for muscle support. Mix in or complement this wet food with Royal Canin Poodle Adult Dry Dog Food or Poodle Adult 8+ Dry Food for a meal that’s sure to leave your Poodle pleased. With over 50 years of scientific research and observation, Royal Canin continues to deliver targeted nutrition to feed every pet’s magnificence. Not satisfied? Then neither are we. Our breed health formulas are 100% satisfaction guaranteed. (Just contact us for more details.)', 'Royal Canin Poodle.jpg', 1, 1, NULL, '2023-06-25 03:07:13', '2023-06-25 07:57:23', 2),
(18, 'Royal Canin Mini Puppy', 'royal-canin-mini-puppy', 20, 17, 'Mini Puppy\nComplete feed for dogs - For small breed puppies (adult weight up to 10 kg) - Up to 10 months old.\n\nAn exclusive combination of nutrients to support digestive health (L.I.P. proteins) and a balanced intestinal flora (prebiotics) which contributes to good stool quality.', 'Royal Canin Mini Puppy.jpg', 1, 1, NULL, '2023-06-25 03:48:51', '2023-06-26 00:21:25', 2),
(19, 'Nutro Natural Choice Small Breed Adult Dry Dog Food, Chicken & Brown Rice Recipe Dog Kibble', 'nutro-natural-choice-small-breed-adult-dry-dog-food-chicken-and-brown-rice-recipe-dog-kibble', 58, 37, 'Give your pet the wholesome ingredients they love with NUTRO NATURAL CHOICE Dry Dog Food recipes. Made for small breed dogs ages 1 year and older, this dry food’s crunchy texture helps clean your dog’s teeth to help control plaque buildup. It’s formulated to help support healthy immunity with essential antioxidants, and it provides natural fiber for healthy digestion. As part of the NUTRO FEED CLEAN philosophy, this delicious chicken and brown rice recipe starts with a high-quality protein source as the 1st ingredient and is made with real, recognizable ingredients sourced from trusted farmers and suppliers. Plus, it\'s made with non-GMO ingredients* and has no chicken by-product meal, corn, wheat, or soy*. So you can feel good feeding your dog recipes that are rich in nutrients and full of flavor. * Trace amounts may be present due to potential cross-contact during manufacturing.', 'Nutro Natural Choice Small Breed Adult Dry Dog Food.jpg', 1, 1, NULL, '2023-06-25 07:51:17', '2023-06-26 00:21:20', 2),
(20, 'grandma lucy\'s Pumpkin Pouch Digestive', 'grandma-lucys-pumpkin-pouch-digestive', 12, 8, 'We believe that a healthy pet starts with healthy food. Every single ingredient in our foods, treats and support options are chosen with a specific benefit in mind. Our Pumpkin Pouches combine multiple superfoods to create a healthy addition to your pet’s food and are a great whole food addition to any meal - kibble, canned, frozen or freeze-dried. Pumpkin Pouches let your pets eat their way to health with all the benefits of supplements but without the synthetics.', 'grandma lucy\'s Pumpkin Pouch Digestive.jpg', 1, 1, NULL, '2023-06-25 07:58:04', '2023-06-25 08:13:33', 2),
(21, 'Casper Dog Bed, Plush Memory Foam', 'casper-dog-bed-plush-memory-foam', 169, 135, 'Designed by the same engineering team behind all of Casper’s sleep products, the dog mattress is a universally comfortable sleep surface for our four-legged friends. We combined our mattress-making know-how with extensive dog-centered research to create a sleep environment that caters to canines’ natural behaviors. Pups spend more than half their lives sleeping. If any species deserves an outrageously comfortable sleep surface, it’s dogs. So we combined pressure-relieving memory foam and durable support foam to create a bed that loves Fido back. Even the most well-behaved dogs have bad days. But no matter how rough they play, most dogs can’t rip through our durable cover material — it’s made with one of the strongest bonded microfibers available. It’s so tough, similar materials are used in performance footwear designed to withstand years of abuse. This bed will keep its shape, thanks to its fortified construction; It won’t sink, slump, or sag over time. Dogs scratch or dig before laying down. That’s an instinct they inherited from their wild ancestors, who would kick up dirt to find cooler ground and brush away debris before turning in for the night. Our surface features excess material on top to mimic the sensation of pawing at loose earth. So dig in, doggies. There’s a reason pups like to squeeze into tight spaces. They’ve learned to seek refuge from predators, so they feel safest in enclosed areas. The supportive foam bolsters of the mattress create a safe space for dogs to lay their heads — literally and figuratively.Measurement & Dimension:Small(for dogs up to 30 lbs)Full Bed: 26\" x 19\" x 6\"Inner Sleep Area: 19\" x 12\" x 3\".Medium(for dogs up to 60lbs)Full Bed: 33\" x 25\" x 6\"Inner Sleep Area: 25\" x 17\" x 2\".Large(for dogs up to 90lbs)Full Bed: 45\" x 35\" x 7\"Inner Sleep Area: 35\" x 25\" x 2.75\".\n\n', 'Casper Dog Bed.jpg', 1, 1, NULL, '2023-06-25 07:58:55', '2023-06-25 07:59:42', 5),
(22, 'PetFusion Ultimate Dog Bed', 'petfusion-ultimate-dog-bed', 129, 114, 'Tired of cheap pet beds that easily tear, are difficult to clean and don\'t provide your pet the comfort they deserve? The PetFusion Ultimate Dog Lounge was designed with all these features in mind with an attractive, modern touch that blends in seamlessly to your home. Premium materials, quality construction and smart features set the Ultimate Dog Lounge apart from the crowd and provide excellent value for your money.', 'PetFusion Ultimate Dog Bed.jpg', 1, 1, NULL, '2023-06-25 08:14:02', '2023-06-26 00:21:12', 5),
(23, 'Squishmallows 20-Inch Gordon Shark Pet Bed', 'squishmallows-20-inch-gordon-shark-pet-bed', 35, 29, 'This super-soft round Squishmallows Gordon shark bolster pet bed is perfect for cuddly cats and dogs alike. Cushioned bolsters around the edges create a natural headrest and include cute Squishmallows design details. The comfy sleeping area is stuffed with fluffy polyester-fiber filling and a unique squishy fabrication covering the outside. Each pet bed features a cute and colorful Squishmallows style that brings a playful spin to traditional pet beds. Authentic Squishmallows pet beds are easy to maintain, spot clean only. These loveable and snuggable Squishmallows pet beds are the softest and cutest pet beds around. Join the Squad!', 'Squishmallows 20-Inch Gordon Shark Pet Bed.jpg', 1, 1, NULL, '2023-06-26 00:28:47', '2023-06-26 00:29:55', 5),
(24, 'SportPet Designs Waterproof Pet Bed - Fits SportPet Plastic Dog Kennel', 'sportpet-designs-waterproof-pet-bed-fits-sportpet-plastic-dog-kennel', 12, 7, 'You may not let your furry sidekicks on all the furniture in the house, but they deserve to take it easy as well, right? Sportpet waterproof dog beds are snuggly soft and cushioned for all day comfort, with a waterproof base to keep the occasional accident contained. Plus they are perfectly designed to fit inside your SportPet dog kennel (sold separately). Even better? The bed is 100% machine washable just one more way sportpet is looking out for the pet lover’s day. Sizing note: for best fit, measure your pet in his or her favorite sleeping position, measuring from snout to base of tail. Add 6-12” to the number for the minimum length bed you’ll need. Then just consult our handy chart. Warning: do not allow children to play with or near this item. This is not a toy for children. If product becomes damaged please discard immediately. This product is designed for a specific and intended use. Do not use this product for anything other than its intended use.', 'SportPet Designs Waterproof Pet Bed.jpg', 1, 1, NULL, '2023-06-26 00:33:43', '2023-06-26 00:37:33', 5),
(25, 'Canidae PURE Healthy Weight Limited Ingredient Premium Adult Dry Dog Food, Chicken and Pea Recipe, 22 Pounds, Grain Free', 'canidae-pure-healthy-weight-limited-ingredient-premium-adult-dry-dog-food-chicken-and-pea-recipe-22-pounds-grain-free', 35, 29, 'Canidae PURE Healthy Weight Chicken and Pea Recipe Adult Dry Dog Food is formulated to meet the nutritional levels established by the AAFCO Dog Food Nutrient Profiles for maintenance. Canidae PURE Grain-Free Limited Ingredient Formulas offer your dog a well-rounded meal that’s been crafted with their health and well-being in mind. Our Chicken and Pea Recipe is made using a limited number of wholesome ingredients that are easily recognizable, with real chicken as the first ingredient, along with sweet potatoes, garbanzo beans and peas. This grain-free, hypoallergenic dog food is ideal for big boned pups with a sensitive stomach and offers nothing but pure goodness for your best friend. High quality, wholesome ingredients like farm-grown veggies and premium proteins rich in essential amino acids and omega 3 and 6 fatty acids means you\'re giving your pet the goodness they deserve with no corn, wheat, soy or other fillers. Canidae pet foods are nutritionally dense, nourishing your dog in every bite. Canidae was founded in 1996 with the belief that pet food needed to be better. Better for pets and better for us all. That belief lives on today in our mission to create a world of sustainable goodness for pets and our planet. We nourish pets and planet in every bowl, through our use of wholesome, responsibly sourced proteins, and our investment in regenerative farming, sustainable operations, and eco-friendly packaging, setting a new standard for the pet food industry. Everything we do results in a better product. A bowl full of goodness.', 'Canidae PURE Healthy Weight Limited Ingredient Premium Adult Dry Dog Food.jpg', 1, 1, NULL, '2023-06-26 00:42:48', '2023-06-26 02:02:42', 2),
(26, 'Solimo Sweet Potato & Chicken Jerky Dog Treats', 'solimo-sweet-potato-and-chicken-jerky-dog-treats', 30, 19, 'Solimo Sweet Potato & Chicken Jerky Dog Treats have sweet potato & chicken as the first two ingredients and have no added corn, wheat, soy and gluten. If you’re not completely satisfied, we’ll refund the full amount of your purchase. No returns necessary.', 'Solimo Sweet Potato & Chicken Jerky Dog Treats.jpg', 1, 1, NULL, '2023-06-26 00:44:12', '2023-06-26 02:02:38', 4),
(27, 'Blue Buffalo Nudges Jerky Cuts Natural Dog Treats, Chicken, 16oz Bag', 'blue-buffalo-nudges-jerky-cuts-natural-dog-treats-chicken-16oz-bag', 39, 20, 'Slowly oven-dried, easy to tear, and packed with protein, these mouthwatering treats are made with real USA chicken. With no artificial flavors or preservatives, BLUE Nudges Jerky Cuts are a healthy treat your dog will be excited to eat, and you can feel great about giving. BLUE Nudges are brought to you by Blue Buffalo, the leader in natural pet food. Love them like family. Treat them like family.', 'Blue Buffalo Nudges Jerky Cuts Natural Dog Treats, Chicken, 16oz Bag.jpg', 1, 1, NULL, '2023-06-26 00:45:21', '2023-06-26 02:02:31', 4),
(28, 'Merrick Power Bites Natural Grain Free Gluten Free Soft & Chewy Chews Dog Treats', 'merrick-power-bites-natural-grain-free-gluten-free-soft-and-chewy-chews-dog-treats', 42, 23, 'Merrick Power Bites Real Chicken Dog Treats are natural, meaty dog treats that give your dog a big taste and industry-leading levels of protein packed into every bite. These real meat dog treats always start with real deboned chicken to help build and maintain healthy muscle tissue and energy levels. These soft and chewy dog treats are packed with flavor, making them the perfect reward or dog training treats. These chicken treats for dogs include Omega fatty acids, making them ideal dog treats for skin and coat health. These adult dog treats are made with natural ingredients and contain no artificial flavors, colors or preservatives. Merrick Power Bites dog treats contain no corn, soy, or wheat, and the grain free treats are also gluten free. All Merrick recipes are crafted in Merrick\'s Hereford, TX kitchen and cooked in the USA.', 'Merrick Power Bites Natural Grain Free Gluten Free Soft & Chewy Chews Dog Treats.jpg', 1, 1, NULL, '2023-06-26 00:46:22', '2023-06-26 02:02:27', 4),
(29, 'Blue Buffalo BLUE Bits Natural Soft-Moist Training Dog Treats, Chicken Recipe 19-oz Bag', 'blue-buffalo-blue-bits-natural-soft-moist-training-dog-treats-chicken-recipe-19-oz-bag', 34, 28, 'Blue Buffalo BLUE Bits are bite-sized dog training treats that are soft, moist and tasty. They\'re perfect for small, medium and large dogs of all ages. Packed with delicious, high-quality, real chicken as the first ingredient, plus DHA to support cognitive development, BLUE Bits are a healthy, natural and nutritious reward that your furry best friend will love.', 'Blue Buffalo BLUE Bits Natural Soft-Moist Training Dog Treats, Chicken Recipe 19-oz Bag.jpg', 1, 1, NULL, '2023-06-26 01:02:42', '2023-06-26 02:02:22', 4),
(30, 'HORIZON PET NUTRITION Complete Whole Grain, Non GMO', 'horizon-pet-nutrition-complete-whole-grain-non-gmo-meat-dense-all-life-stage-dry-dog-food', 28, 19, 'horizon-pet-nutrition-complete-whole-grain-non-gmo-meat-dense-all-life-stage-dry-dog-food', 'HORIZON PET NUTRITION Complete Whole Grain, Non GMO.jpg', 1, 1, NULL, '2023-06-26 02:02:12', '2023-06-26 02:02:12', 2),
(31, 'Blue Buffalo Nudges Grillers Natural Dog Treats', 'blue-buffalo-nudges-grillers-natural-dog-treats', 38, 25, 'Satisfy your buddy\'s cravings for summer grilling all year long with BLUE Nudges Grillers, featuring a tantalizing taste and texture inspired by perfectly grilled favorites. Made with real meat as the first ingredient, these tender dog treats bring the joy of a warm summer’s day anytime. BLUE Nudges are brought to you by Blue Buffalo, the leader in natural pet food. Love them like family. Treat them like family.™', 'Blue Buffalo Nudges Grillers Natural Dog Treats.jpg', 1, 1, NULL, '2023-06-26 02:03:20', '2023-06-30 07:02:07', 4),
(32, 'Nylabone Healthy Edibles All-Natural Long Lasting Bacon Flavor Chew Treats 1 Count Bacon', 'nylabone-healthy-edibles-all-natural-long-lasting-bacon-flavor-chew-treats-1-count-bacon', 200, 190, 'Bacon makes everything better! Our USA-made Healthy Edibles Bacon Dog Treats are packed with scrumptious flavor that dogs just can\'t resist. Crafted with wellness in mind, these healthy dog treats are made with natural ingredients. The longer-lasting, highly digestible formula satisfies dogs who love to chew and do not contain any added salt, sugar and artificial preservatives. There is a size for every dog, so indulge your dog\'s craving for bacon no matter how big or small. Whether you\'re treating or training, our chew treats will let your pooch know they\'ve been a good dog!', 'Nylabone Healthy Edibles All-Natural Long Lasting Bacon Flavor Chew Treats 1 Count Bacon.jpg', 1, 1, NULL, '2023-06-26 02:04:20', '2023-06-26 02:04:20', 4),
(33, 'Shiba Dog', 'shiba-dog', 0, 0, 'The Shiba Inu is a breed of hunting dog from Japan. A small-to-medium breed, it is the smallest of the six original and distinct spitz breeds of dog native to Japan. Its name literally translates to \"brushwood dog\", as it is used to flush game.', 'shiba dog.jpg', 2, 1, NULL, '2023-06-26 02:23:32', '2023-06-30 01:48:50', NULL),
(34, 'Pug Dog', 'pug-dog', 0, 0, 'The Pug is a breed of dog originally from China, with physically distinctive features of a wrinkly, short-muzzled face, and curled tail. The breed has a fine, glossy coat that comes in a variety of colors, most often fawn or black, and a compact, square body with well developed and thick muscles all over the body.', 'Pug Dog.jpg', 2, 1, NULL, '2023-06-26 02:26:33', '2023-07-01 00:53:41', 2),
(35, 'Husky', 'husky', 0, 0, 'Husky is a general term for a dog used in the polar regions, primarily and specifically for work as sled dogs. It refers to a traditional northern type, notable for its cold-weather tolerance and overall hardiness.', 'husky.jpg', 2, 0, NULL, '2023-06-26 02:27:41', '2023-06-30 22:54:33', 1),
(36, 'Chihuahua', 'chihuahua', 0, 0, 'The Chihuahua or Spanish: Chihuahueño is a Mexican breed of toy dog. It is named for the Mexican state of Chihuahua and is among the smallest of all dog breeds. It is usually kept as a companion animal or for showing.', 'chihuahua.jpg', 2, 1, NULL, '2023-06-26 02:54:11', '2023-06-30 01:40:28', NULL),
(37, 'Rena\'s Recipe Love Dumbbells (18 Count) Chicken & Beef Flavors on a core Infused with Goat Milk', 'renas-recipe-love-dumbbells-18-count-chicken-and-beef-flavors-on-a-core-infused-with-goat-milk', 38, 24, 'Highly digestible, easy to chew, rawhide-free tapioca soft core & no crumbs left behind\nHandmade treats made from 100% cage free chicken\nGreat for small dogs\nChicken & beef flavors on a core infused with goat milk\nGreat protein with low fat', 'Rena\'s Recipe Love Dumbbells.jpg', 1, 1, NULL, '2023-06-26 03:01:38', '2023-06-30 07:47:57', 4),
(38, 'French Bulldog', 'french-bulldog', 0, 0, 'The French Bulldog, French: Bouledogue Français, is a French breed of companion dog or toy dog. It appeared in Paris in the mid-nineteenth century, apparently the result of cross-breeding of Toy Bulldogs imported from England and local Parisian ratters', 'bulldog french.jpg', 2, 0, NULL, '2023-06-26 03:04:25', '2023-06-30 08:36:25', NULL),
(39, 'SCHITEC Squeaky Dog Chew Toy, Tough Durable Natural Rubber Bone with Toothbrush', 'schitec-squeaky-dog-chew-toy-tough-durable-natural-rubber-bone-with-toothbrush', 8, 6, 'Squeaky Chew Toy\nHelps satisfy dogs\' natural urge to chew, reduce anxiety and avoid destructive chewing.\nThe special design of dog toy has applied for appearance patent. EFS ID: 41725377\nProduct Details\nsqueak\n\ntoothbrush\n\neffective teeth clean\n\nInner Squeaker\nFeaturing two built-in squeakers, the chew toy makes a loud squeaky sound to attract dogs’ attention and keeps them engaged for longer.\n\nInteractive Toothbrush\nTeeth cleaning bristles effectively clean teeth and tongue to promote fresh breath. Putting dog toothpaste or peanut butter on it and let dogs brush teeth by themselves.\n\nGranular Cleaner\nDesigned with rubber granules of different sizes to clean different teeth and massage dogs’ gums, which has a great effect on reducing plaque and tartar.\n\ntough rubber\n\nlarge\n\nbeef flavored\n\nExtremely Durable Rubber Toy\nThe dog toys are made from tear-resistant natural rubber, which is safe and tough to destroy, strong enough to withstand aggressive chewers.\n\nSqueaky Chew Toy for Large Breed\nThe best gift for large & medium dogs, it has been tested by Golden retriever, German Shepherd, Labrador and Husky.\n\nAttractive Beef Flavor\nAdded irresistible beef scent that dogs love, which attracts dogs to chew it repeatedly.\n\nreduce boredom\n\noral health\n\ninteractive play\n\nFun Squeaky Toy\nDogs are crazy about squeakers. This squeaky chew toy helps to reduce boredom, release stress and prevent destructive behaviors.\n\n360 Degree Teeth Cleaning\nChewing the toothbrush toy daily effectively cleans teeth and helps promote oral health and control plaque and tartar.\n\nInteractive Play\nThe squeaky toy is perfect for interactive fetch games and training to enhance your relationship with your pets.\n\nHow to Use\nmultifuctional dog toy\nWarm Tips\nThis toy is suitable for large and medium dogs, not for small dogs and puppies.\nToys can be cleaned by hand or dishwasher.\nWe recommend supervised play to ensure no accidental swallowing.', 'SCHITEC Squeaky Dog Chew Toy.jpg', 1, 1, NULL, '2023-06-26 04:57:07', '2023-06-26 04:58:07', 3),
(40, 'UEETEK Squeaky Dog Toys for Small Dogs Fruits and Vegetables Plush Puppy Dog Toys ', 'ueetek-squeaky-dog-toys-for-small-dogs-fruits-and-vegetables-plush-puppy-dog-toys', 12, 9, 'Features\n\n- Color: Shown in the pictures.\n- Material: Plush.\n- Size: Approx. 12-15cm/ 4.7 -6 inch.\n- High quality for durable and safe use.\n- Vibrant vegetable and fruit design with pleasant color and soft texture.\n\n\nPackage Including\n5 * Squeaky Dog Toys for Small Dogs Fruits and Vegetables Plush Puppy Dog Toys (Carrot; Banana; Eggplant; Strawberry and Mushroom)', 'UEETEK Squeaky Dog Toys for Small Dogs Fruits and Vegetables Plush Puppy Dog Toys.jpg', 1, 1, NULL, '2023-06-26 04:58:27', '2023-06-26 05:58:27', 3),
(41, 'Pearhead Plush Squeaky Dog Toys - Mochi, Boba Toys', 'pearhead-plush-squeaky-dog-toys-mochi-boba-toys', 16, 9, 'Pearhead Plush Squeaky Dog Toys - Mochi, Boba Toys\n\nShare your favorite treats with your four-legged friend with this yappy snacks dog toy gift set by Pearhead!  Includes two plush squeaky toys - one boba bubble tea dog toy and one mochi ice cream dog toy. \n\nThis matching dog toy set is the perfect dog birthday gift, pet lover gift, or pet owner gift!  This boba and mochi squeaker dog toys are durable, fun and perfect for large dogs and small dogs of any breed. \n\nApprox. Dimensions: 4\" x 5\" ', 'Pearhead Plush Squeaky Dog Toys.jpg', 1, 1, NULL, '2023-06-26 12:55:33', '2023-06-26 12:58:33', 3),
(42, 'Pets at Home Latex Honking Duck Dog Toy', 'pets-at-home-latex-honking-duck-dog-toy', 20, 10, 'We all have special things we keep going back to, so we think these classic favourite toys will always have a place in your dog\'s heart, dogs love to play and in lots of different ways, this classic toy is tried and tested and guarenteed to provide lots of playtime fun.\n\nThis latex honking duck dog toy by Pets at Home is a fun and exciting toy for your dog, featuring a squeaker this toy can keep your dog entertained for hours.\n\nDogs love to play and interact with their owners; to ensure you get the most amount of fun together always supervise your dog during playtime and remember to remove toys if damage occurs or any parts become detached.\n\nThis dog toy is suitable for dogs.\n\nApproximate Dimensions (Product): 32 x 10 x 9cm', 'Pets at Home Latex Honking Duck Dog Toy.jpg', 1, 1, NULL, '2023-06-26 13:38:46', '2023-06-26 13:40:00', 3),
(43, 'Rubber Bone Dog Toy - Boots & Barkley', 'rubber-bone-dog-toy-boots-and-barkley', 200, 130, 'Perfect for fetching, tugging or simply chewing on, the Rubber Bone Dog Toy from Boots & Barkley™ keeps your pup entertained for hours on end. With a squeeze-and-chew construction, this squeaky dog toy squeaks when squeezed or chewed to keep their attention while they come back for more. The vibrant color, fun sprinkle detailing, and the durable design makes fetch and retrieve games exciting and fun.\n\nLoving your pet from head to tail.™', 'Rubber Bone Dog Toy - Boots & Barkley.jpg', 1, 1, NULL, '2023-06-26 19:09:54', '2023-06-26 19:09:54', 3),
(44, 'hoa cúc trắng', 'hoa-cuc-trang', 200, 130, 'hoa nhà trồng sạch sẽ đẹp đẽ thơm ngon mời bạn ăn nha', 'shop_nav_img02.jpg', 1, 0, NULL, '2023-06-26 19:40:46', '2023-06-30 08:32:59', 3),
(45, 'hello', 'hello', 1, 1, 'test', 'shop_nav_img02.jpg', 1, 0, NULL, '2023-06-26 19:43:14', '2023-06-30 12:03:59', 1),
(46, 'world', 'world', 1, 1, 'test', 'shop_nav_img02.jpg', 1, 0, NULL, '2023-06-29 19:48:36', '2023-06-30 12:04:01', 1),
(47, 'web nhu shit', 'web-nhu-shit', 100, 60, 'nh shit', '2022-10-16.png', 1, 0, NULL, '2023-06-30 02:31:54', '2023-06-30 08:33:04', 3),
(48, 'Poodle', 'poodle', 0, 0, 'The Poodle, called the Pudel in German and the Caniche in French, is a breed of water dog. The breed is divided into four varieties based on size, the Standard Poodle, Medium Poodle, Miniature Poodle and Toy Poodle, although the Medium Poodle is not universally recognised.', 'toy-poodle.jpg', 2, 0, NULL, '2023-06-30 06:22:52', '2023-07-01 00:54:31', 5),
(49, 'Pets at Home Latex Honking Duck Dog Toy', 'pets-at-home-latex-honking-duck-dog-toy', 20, 10, 'We all have special things we keep going back to, so we think these classic favourite toys will always have a place in your dog\'s heart, dogs love to play and in lots of different ways, this classic toy is tried and tested and guarenteed to provide lots of playtime fun.This latex honking duck dog toy by Pets at Home is a fun and exciting toy for your dog, featuring a squeaker this toy can keep your dog entertained for hours.Dogs love to play and interact with their owners; to ensure you get the most amount of fun together always supervise your dog during playtime and remember to remove toys if damage occurs or any parts become detached.This dog toy is suitable for dogs.Approximate Dimensions (Product): 32 x 10 x 9cm', NULL, 1, 0, NULL, '2023-06-30 11:57:44', '2023-06-30 22:44:43', 3),
(50, 'Dog test', 'dog-test', 15, 10, 'test', 'husky.jpg', 2, 1, NULL, '2023-07-01 00:00:21', '2023-07-01 00:00:21', NULL),
(51, 'product test', 'product-test', 20, 18, 'test', 'MidWest Homes for Pets 277192 Pet Crate Bed Cinnamon Fur for Pets.webp', 1, 0, NULL, '2023-07-01 00:03:00', '2023-07-01 00:03:14', 5),
(52, 'dog time', 'dog-time', 250, 200, 'dep', 'adoption_shop_thumb01.jpg', 2, 0, NULL, '2023-07-01 00:38:44', '2023-07-01 00:40:50', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE `product_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image_name` varchar(255) DEFAULT NULL,
  `image_path` varchar(255) DEFAULT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 1,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `promotions`
--

CREATE TABLE `promotions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(255) NOT NULL,
  `discount` int(11) NOT NULL,
  `expiry_date` date NOT NULL,
  `quantity` int(11) NOT NULL,
  `min` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `promotion_history`
--

CREATE TABLE `promotion_history` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `promotion_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reminders`
--

CREATE TABLE `reminders` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `code` varchar(255) NOT NULL,
  `completed` tinyint(1) NOT NULL DEFAULT 0,
  `completed_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `slug` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `permissions` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `slug`, `name`, `permissions`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin', NULL, '2023-06-19 02:30:01', '2023-06-19 02:30:01'),
(2, 'user', 'user', NULL, '2023-06-19 02:30:01', '2023-06-19 02:30:01');

-- --------------------------------------------------------

--
-- Table structure for table `role_users`
--

CREATE TABLE `role_users` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_users`
--

INSERT INTO `role_users` (`user_id`, `role_id`, `created_at`, `updated_at`) VALUES
(69, 2, '2023-06-19 06:45:40', '2023-06-19 06:45:40'),
(70, 2, '2023-06-19 06:52:00', '2023-06-19 06:52:00'),
(71, 2, '2023-06-19 06:53:16', '2023-06-19 06:53:16'),
(72, 1, '2023-06-19 07:13:22', '2023-06-19 07:13:22'),
(73, 2, '2023-06-21 21:10:38', '2023-06-21 21:10:38'),
(74, 2, '2023-06-21 21:14:32', '2023-06-21 21:14:32'),
(75, 2, '2023-06-21 21:19:15', '2023-06-21 21:19:15'),
(76, 2, '2023-06-24 01:46:28', '2023-06-24 01:46:28'),
(77, 2, '2023-06-24 02:56:27', '2023-06-24 02:56:27'),
(78, 2, '2023-06-24 18:39:54', '2023-06-24 18:39:54'),
(79, 2, '2023-06-24 18:48:16', '2023-06-24 18:48:16'),
(80, 2, '2023-06-24 18:49:43', '2023-06-24 18:49:43'),
(81, 2, '2023-06-24 18:50:53', '2023-06-24 18:50:53'),
(82, 2, '2023-06-24 19:09:39', '2023-06-24 19:09:39'),
(83, 2, '2023-06-25 00:48:01', '2023-06-25 00:48:01'),
(84, 2, '2023-06-26 01:06:14', '2023-06-26 01:06:14'),
(85, 2, '2023-06-26 01:12:04', '2023-06-26 01:12:04'),
(86, 2, '2023-06-26 02:56:10', '2023-06-26 02:56:10'),
(87, 2, '2023-06-30 08:34:06', '2023-06-30 08:34:06'),
(88, 2, '2023-07-01 00:26:50', '2023-07-01 00:26:50');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `config_key` varchar(255) DEFAULT NULL,
  `config_value` text DEFAULT NULL,
  `type` text DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 1,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `image_name` varchar(255) DEFAULT NULL,
  `image_path` varchar(255) DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 1,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `throttle`
--

CREATE TABLE `throttle` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `type` varchar(255) NOT NULL,
  `ip` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `throttle`
--

INSERT INTO `throttle` (`id`, `user_id`, `type`, `ip`, `created_at`, `updated_at`) VALUES
(1, NULL, 'global', NULL, '2023-06-20 05:11:22', '2023-06-20 05:11:22'),
(2, NULL, 'ip', '::1', '2023-06-20 05:11:22', '2023-06-20 05:11:22');

-- --------------------------------------------------------

--
-- Table structure for table `types`
--

CREATE TABLE `types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 1,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `types`
--

INSERT INTO `types` (`id`, `name`, `active`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Husky', 0, NULL, '2023-06-20 19:24:47', '2023-06-30 23:31:01'),
(2, 'Food', 1, NULL, '2023-06-25 03:48:01', '2023-06-30 07:32:34'),
(3, 'Toys', 1, NULL, '2023-06-25 07:50:18', '2023-06-30 22:48:28'),
(4, 'Treats', 1, NULL, '2023-06-26 00:25:11', '2023-06-30 07:32:39'),
(5, 'Furniture', 1, NULL, '2023-06-26 03:00:41', '2023-06-30 07:16:05'),
(6, 'test', 0, NULL, '2023-07-01 00:13:56', '2023-07-01 00:15:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `permissions` text DEFAULT NULL,
  `last_login` timestamp NULL DEFAULT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `gender` varchar(20) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `cart_id` bigint(20) UNSIGNED DEFAULT NULL,
  `is_email_verified` tinyint(1) DEFAULT 0,
  `active` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `permissions`, `last_login`, `first_name`, `last_name`, `phone`, `gender`, `address`, `birthday`, `deleted_at`, `remember_token`, `created_at`, `updated_at`, `cart_id`, `is_email_verified`, `active`) VALUES
(86, 'vohugu813@gmail.com', '$2y$10$53M0ueCZC2lG7zPU7zYeT.Wangw9KyorCYiTjxP/wUyVe9v67vRBa', NULL, NULL, 'Van Suong', 'Le', '0773971865', 'female', 'My Tho', '2003-12-12', NULL, NULL, '2023-06-26 02:56:10', '2023-06-30 04:15:07', NULL, 1, 1),
(87, 'duynats2208038@fpt.edu.vn', '$2y$10$T2vKnb8jxb3OPmxtKVmLZucAmadLOsLCD9nQj/5DhjCuQ4L18qkJu', NULL, NULL, 'Tommy', 'Nguyen', '0773971865', 'male', '315/2 HAI BA TRUNG', '2003-11-02', NULL, NULL, '2023-06-30 08:34:05', '2023-06-30 08:34:27', NULL, 1, 1),
(88, 'hoadang0727@gmail.com', '$2y$10$Qnbpis8Fln23eUBYqBW57.CROiMq3u1WbnqVPBO.ILa8ulgI6CVb.', NULL, NULL, 'Dang', 'Le', '0773971865', 'female', 'My Dinh', '2002-02-02', NULL, NULL, '2023-07-01 00:26:50', '2023-07-01 00:28:56', NULL, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_verifies`
--

CREATE TABLE `user_verifies` (
  `user_id` int(11) NOT NULL,
  `token` varchar(255) NOT NULL,
  `expire_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_verifies`
--

INSERT INTO `user_verifies` (`user_id`, `token`, `expire_at`, `deleted_at`, `created_at`, `updated_at`) VALUES
(40, 'IKowVFnCmnubDlR5ByioCQfaoIql2M1VDSza5baJCkW1fHXNwSzqPXFRCMxG8xIk', NULL, NULL, '2023-06-16 00:05:58', '2023-06-16 00:05:58'),
(41, 'NSRzI9xtncRXHfeuQgtUbg8S5Tq5xqjH87LrrGMMJP2C73DklHigiUEjVHFbUTGO', NULL, NULL, '2023-06-16 00:12:53', '2023-06-16 00:12:53'),
(42, 'HzGSXAU0st8IC8CsitNUzWEyTRNsaaVIVepjpEuRCu4gmEMYfofeiUH93FoN4xcm', NULL, NULL, '2023-06-16 00:16:41', '2023-06-16 00:16:41'),
(43, 'oAxWetqS9OTXTdmjFlEv9lbNdNrdTqQPNzZpAGYnR4ZT4YZqGlFHqdLQiHl1ehy4', NULL, NULL, '2023-06-16 00:22:36', '2023-06-16 00:22:36'),
(44, 'MYRGe4vMTPwBAoAquyUI93FZVx1qFih6laFA6XNGBrFfbiXHo9qTg2RulbROAC6j', NULL, NULL, '2023-06-16 00:30:11', '2023-06-16 00:30:11'),
(45, 'vKaHXg7xrA2OTZhsO3kWwfZ406DGp4CpHvStY9iuhwllzgmSFx4Io55Nci7RUbKz', NULL, NULL, '2023-06-16 01:21:35', '2023-06-16 01:21:35'),
(55, 'JjG6KB4uPdhKsn6ZWJTNd1xaKM0nS4KcBwTKeOo1p9iiFlgD4BihuTDCTXH9APGP', NULL, NULL, '2023-06-19 03:06:25', '2023-06-19 03:06:25'),
(58, 'bpiJm9wC4JVdS0zokEQFYpxcpiPAcXvEkDiqbhT5UU0QHpo9IjXLGEojk2z10DTk', NULL, NULL, '2023-06-19 03:14:27', '2023-06-19 03:14:27'),
(60, '0hTzjTyXmoMu3afKAUxjwHUeKHNAHJuvei9M4kmGEa91F0xzbh98xlB9ZWsDoPY6', NULL, NULL, '2023-06-19 03:16:35', '2023-06-19 03:16:35'),
(61, '4NNA25sYirR0Tk1NiH0Pg4QuLZVKnD0NizMlMEJuyyvLVL3JOqRyWyOSEAsWnSQ2', NULL, NULL, '2023-06-19 03:18:15', '2023-06-19 03:18:15'),
(62, 'jTyOERCBngWYwgOmiyAsR0HYEPwINLxfGQ7eCZmRpKY0Z6sqSvxz66v37ENRtzYV', NULL, NULL, '2023-06-19 05:42:21', '2023-06-19 05:42:21'),
(63, 'tpiXA8RBApIxspjNcqohIQYXsu6oht0BFhyBXIKlDBcVZ1Uh1RQgfuyLDHz6AsV0', NULL, NULL, '2023-06-19 05:48:09', '2023-06-19 05:48:09'),
(64, 'PopZrAK1IzJpcuqnXy6XwsWQmqb7FcWZ7i9emttrydPEEbGEcls1NIbnsN9lKHSx', NULL, NULL, '2023-06-19 05:53:08', '2023-06-19 05:53:08'),
(66, 'I0Dek2jr58wvIzYVjgU79ID6crblEa5eecCkwYJMfWV0go8ny5bODdek1ATQpCHE', NULL, NULL, '2023-06-19 06:26:59', '2023-06-19 06:26:59'),
(67, 'DwWbOsQDmzJohCVI1bAiHXmqahyeaUlmKNVAvJ2VnN6hk2Fdbm1MzHf4HHKZYard', NULL, NULL, '2023-06-19 06:35:08', '2023-06-19 06:35:08'),
(68, 'BHFZYVI5DlhbQjhFnGd2ltcuaJxboZmQGaYnfSPp5UHpul3EpJ77jinprlAWyUqS', NULL, NULL, '2023-06-19 06:38:39', '2023-06-19 06:38:39'),
(69, '9FR8cVs1ZuYq0FSiBL6ooaZwtv6A3kEtvrV4FuJaeGbVu7FAGbeSKZQcWJJiUNGE', NULL, NULL, '2023-06-19 06:45:40', '2023-06-19 06:45:40'),
(70, 'EgibFi0gkaDXg1AG7tss3QB9W9WwPcZpn98UPvITHZtIOuxc4nkxRrg8MlAj4p1b', NULL, NULL, '2023-06-19 06:52:00', '2023-06-19 06:52:00'),
(71, 'wLXlNkZSofWPQnuB0TWhloI6hYOPQ55tMrdNvcCHWScRrDAeKYRX0aGIVtS5EhVW', NULL, '2023-06-19 07:12:21', '2023-06-19 06:53:16', '2023-06-19 07:12:21'),
(72, '7QB2YFNvXS4MK0p3FBpjM1LBcn6TKGsvpLUQqm1POZBye3rTUSNYybjTjdpWcUuV', NULL, NULL, '2023-06-19 07:13:22', '2023-06-19 07:13:22'),
(73, 'tVO113oTeMDgTHYIR0hiXzkEfYoDzfomn03oa6TmgRNv5Ig77MaTqADc7xMCRj6y', NULL, NULL, '2023-06-21 21:10:38', '2023-06-21 21:10:38'),
(74, 'zCia2trQOTruHEsuMu8iFH5MNIT3P5Uevpb8pEj4zLI8ig6yQQG5pYt3PxM0EWY0', NULL, '2023-06-21 21:16:56', '2023-06-21 21:14:32', '2023-06-21 21:16:56'),
(75, 'QPJKhp2Cop0KqOWgqVmzAgVZXNhdnkQQnvPqUvnpBeESt6pt03chAA2CcceLkRLM', NULL, NULL, '2023-06-21 21:19:15', '2023-06-21 21:19:15'),
(76, 'T6P4b5gL500Iw17aWA1yZ1bFvwL2km1TbmAqoNLcuFjcvVij9YBNrjGPjoi6uvf3', NULL, NULL, '2023-06-24 01:46:28', '2023-06-24 01:46:28'),
(77, 'MgQoiXAyfphLooQnpP7wAW0yamqo5cdNvc7gZGHBmGzKd3dDH7KwPmUQ98mBJiNr', NULL, NULL, '2023-06-24 02:56:27', '2023-06-24 02:56:27'),
(78, 'GfIBGeKCIZfE2tzMs8rPQ0TYZJ7hQufnf6kLDzM3sruzRZ8SYY4XvnOy8Nop32jX', NULL, NULL, '2023-06-24 18:39:55', '2023-06-24 18:39:55'),
(79, 'TWk0FQDyZgNZ9Lpi0Im1V11wXIJuXIIQ3fDfOPdmeCgi1A8WtMkjbRltfX1Oq8MK', NULL, NULL, '2023-06-24 18:48:16', '2023-06-24 18:48:16'),
(80, 'ujhCv0fn09d3J15Nd34hOShUGNB0FslGKCRUedZpxZn9fb2OVzdnszPuSZPfyAWz', NULL, NULL, '2023-06-24 18:49:43', '2023-06-24 18:49:43'),
(81, 'xTzeHlBJhdPrGY6NDhUsILwn9Y6tLOiTpePcEVKnh344azk5vAUeUCzf6nyaAidR', NULL, NULL, '2023-06-24 18:50:53', '2023-06-24 18:50:53'),
(82, 'zvWEhJM521sfgzEsrq9HKeURjO3ZBaz16DeqUsP2tjVRnaS8VwCyENj4SOxEkE3P', NULL, NULL, '2023-06-24 19:09:39', '2023-06-24 19:09:39'),
(83, 'K8mzDk9woA0qVsmRYr7GDYqRySPLsAthQ3q7PFxntwY2eD2J6ew2auPDGmTKLbYQ', NULL, NULL, '2023-06-25 00:48:01', '2023-06-25 00:48:01'),
(84, '3JbSuVcLZXKufuZlhIeJn04UaTu6Jb7LDWAy5mBnxpNcwi9D8pNElbcwBNId4RLH', NULL, '2023-06-26 01:11:00', '2023-06-26 01:06:14', '2023-06-26 01:11:00'),
(85, 'o9Sb6cwEDrZemXwkST38eJ5BqlwAqCxtpKz5T4535FTOzhX3W8Kd18vrINdsILYj', NULL, NULL, '2023-06-26 01:12:04', '2023-06-26 01:12:04'),
(86, 'UaUlXvgTNanMNXyKYbbBdrAvfRPC6KZHI08RXhIug2WQ6aVOFKpIwTgQTq6aViTZ', NULL, NULL, '2023-06-26 02:56:10', '2023-06-26 02:56:10'),
(40, 'IKowVFnCmnubDlR5ByioCQfaoIql2M1VDSza5baJCkW1fHXNwSzqPXFRCMxG8xIk', NULL, NULL, '2023-06-16 00:05:58', '2023-06-16 00:05:58'),
(41, 'NSRzI9xtncRXHfeuQgtUbg8S5Tq5xqjH87LrrGMMJP2C73DklHigiUEjVHFbUTGO', NULL, NULL, '2023-06-16 00:12:53', '2023-06-16 00:12:53'),
(42, 'HzGSXAU0st8IC8CsitNUzWEyTRNsaaVIVepjpEuRCu4gmEMYfofeiUH93FoN4xcm', NULL, NULL, '2023-06-16 00:16:41', '2023-06-16 00:16:41'),
(43, 'oAxWetqS9OTXTdmjFlEv9lbNdNrdTqQPNzZpAGYnR4ZT4YZqGlFHqdLQiHl1ehy4', NULL, NULL, '2023-06-16 00:22:36', '2023-06-16 00:22:36'),
(44, 'MYRGe4vMTPwBAoAquyUI93FZVx1qFih6laFA6XNGBrFfbiXHo9qTg2RulbROAC6j', NULL, NULL, '2023-06-16 00:30:11', '2023-06-16 00:30:11'),
(45, 'vKaHXg7xrA2OTZhsO3kWwfZ406DGp4CpHvStY9iuhwllzgmSFx4Io55Nci7RUbKz', NULL, NULL, '2023-06-16 01:21:35', '2023-06-16 01:21:35'),
(55, 'JjG6KB4uPdhKsn6ZWJTNd1xaKM0nS4KcBwTKeOo1p9iiFlgD4BihuTDCTXH9APGP', NULL, NULL, '2023-06-19 03:06:25', '2023-06-19 03:06:25'),
(58, 'bpiJm9wC4JVdS0zokEQFYpxcpiPAcXvEkDiqbhT5UU0QHpo9IjXLGEojk2z10DTk', NULL, NULL, '2023-06-19 03:14:27', '2023-06-19 03:14:27'),
(60, '0hTzjTyXmoMu3afKAUxjwHUeKHNAHJuvei9M4kmGEa91F0xzbh98xlB9ZWsDoPY6', NULL, NULL, '2023-06-19 03:16:35', '2023-06-19 03:16:35'),
(61, '4NNA25sYirR0Tk1NiH0Pg4QuLZVKnD0NizMlMEJuyyvLVL3JOqRyWyOSEAsWnSQ2', NULL, NULL, '2023-06-19 03:18:15', '2023-06-19 03:18:15'),
(62, 'jTyOERCBngWYwgOmiyAsR0HYEPwINLxfGQ7eCZmRpKY0Z6sqSvxz66v37ENRtzYV', NULL, NULL, '2023-06-19 05:42:21', '2023-06-19 05:42:21'),
(63, 'tpiXA8RBApIxspjNcqohIQYXsu6oht0BFhyBXIKlDBcVZ1Uh1RQgfuyLDHz6AsV0', NULL, NULL, '2023-06-19 05:48:09', '2023-06-19 05:48:09'),
(64, 'PopZrAK1IzJpcuqnXy6XwsWQmqb7FcWZ7i9emttrydPEEbGEcls1NIbnsN9lKHSx', NULL, NULL, '2023-06-19 05:53:08', '2023-06-19 05:53:08'),
(66, 'I0Dek2jr58wvIzYVjgU79ID6crblEa5eecCkwYJMfWV0go8ny5bODdek1ATQpCHE', NULL, NULL, '2023-06-19 06:26:59', '2023-06-19 06:26:59'),
(67, 'DwWbOsQDmzJohCVI1bAiHXmqahyeaUlmKNVAvJ2VnN6hk2Fdbm1MzHf4HHKZYard', NULL, NULL, '2023-06-19 06:35:08', '2023-06-19 06:35:08'),
(68, 'BHFZYVI5DlhbQjhFnGd2ltcuaJxboZmQGaYnfSPp5UHpul3EpJ77jinprlAWyUqS', NULL, NULL, '2023-06-19 06:38:39', '2023-06-19 06:38:39'),
(69, '9FR8cVs1ZuYq0FSiBL6ooaZwtv6A3kEtvrV4FuJaeGbVu7FAGbeSKZQcWJJiUNGE', NULL, NULL, '2023-06-19 06:45:40', '2023-06-19 06:45:40'),
(70, 'EgibFi0gkaDXg1AG7tss3QB9W9WwPcZpn98UPvITHZtIOuxc4nkxRrg8MlAj4p1b', NULL, NULL, '2023-06-19 06:52:00', '2023-06-19 06:52:00'),
(71, 'wLXlNkZSofWPQnuB0TWhloI6hYOPQ55tMrdNvcCHWScRrDAeKYRX0aGIVtS5EhVW', NULL, '2023-06-19 07:12:21', '2023-06-19 06:53:16', '2023-06-19 07:12:21'),
(72, '7QB2YFNvXS4MK0p3FBpjM1LBcn6TKGsvpLUQqm1POZBye3rTUSNYybjTjdpWcUuV', NULL, NULL, '2023-06-19 07:13:22', '2023-06-19 07:13:22'),
(73, 'tVO113oTeMDgTHYIR0hiXzkEfYoDzfomn03oa6TmgRNv5Ig77MaTqADc7xMCRj6y', NULL, NULL, '2023-06-21 21:10:38', '2023-06-21 21:10:38'),
(74, 'zCia2trQOTruHEsuMu8iFH5MNIT3P5Uevpb8pEj4zLI8ig6yQQG5pYt3PxM0EWY0', NULL, '2023-06-21 21:16:56', '2023-06-21 21:14:32', '2023-06-21 21:16:56'),
(75, 'QPJKhp2Cop0KqOWgqVmzAgVZXNhdnkQQnvPqUvnpBeESt6pt03chAA2CcceLkRLM', NULL, NULL, '2023-06-21 21:19:15', '2023-06-21 21:19:15'),
(76, 'T6P4b5gL500Iw17aWA1yZ1bFvwL2km1TbmAqoNLcuFjcvVij9YBNrjGPjoi6uvf3', NULL, NULL, '2023-06-24 01:46:28', '2023-06-24 01:46:28'),
(77, 'MgQoiXAyfphLooQnpP7wAW0yamqo5cdNvc7gZGHBmGzKd3dDH7KwPmUQ98mBJiNr', NULL, NULL, '2023-06-24 02:56:27', '2023-06-24 02:56:27'),
(78, '0h68dkZJVmMWSJwl1K6Mzrwd88uDPmkpav0Q2ubUZnH5FF2QxbGuNjrySugKVfba', NULL, NULL, '2023-06-26 01:02:28', '2023-06-26 01:02:28'),
(79, 'XtPUhpLUcPgk9l0lsBQjPUAZQbq2xrkd8i0VxXRdUKYBijIxZQZs0H7TW2FKWWyl', NULL, NULL, '2023-06-26 01:28:03', '2023-06-26 01:28:03'),
(87, 'uq7g4lcrtDcEayRKoDYGM7nvWRcZzzhIjTOtiWvOdtOK3DukyaSyJu6HSLZC9nek', NULL, NULL, '2023-06-30 08:34:06', '2023-06-30 08:34:06'),
(88, '83ECxqB6znz7EUObB8ZAxZcMMIySuENGOCucjojVDTOfERuvm3FV8XV9JPlTQyXa', NULL, NULL, '2023-07-01 00:26:50', '2023-07-01 00:26:50');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activations`
--
ALTER TABLE `activations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `admin_password_resets`
--
ALTER TABLE `admin_password_resets`
  ADD KEY `admin_password_resets_email_index` (`email`);

--
-- Indexes for table `adoptions`
--
ALTER TABLE `adoptions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `adoption_histories`
--
ALTER TABLE `adoption_histories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart_products`
--
ALTER TABLE `cart_products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cart_products_cart_id_foreign` (`cart_id`),
  ADD KEY `cart_products_product_id_foreign` (`product_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `feedbacks`
--
ALTER TABLE `feedbacks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `feedbacks_product_id_foreign` (`product_id`),
  ADD KEY `feedbacks_user_id_foreign` (`user_id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
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
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_user_id_foreign` (`user_id`);

--
-- Indexes for table `order_products`
--
ALTER TABLE `order_products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_products_order_id_foreign` (`order_id`),
  ADD KEY `order_products_product_id_foreign` (`product_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `persistences`
--
ALTER TABLE `persistences`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `persistences_code_unique` (`code`);

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
  ADD KEY `products_category_id_foreign` (`category_id`),
  ADD KEY `products_type_id_foreign` (`type_id`);

--
-- Indexes for table `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_images_product_id_foreign` (`product_id`);

--
-- Indexes for table `promotions`
--
ALTER TABLE `promotions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `promotion_history`
--
ALTER TABLE `promotion_history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `promotion_history_promotion_id_foreign` (`promotion_id`),
  ADD KEY `promotion_history_user_id_foreign` (`user_id`);

--
-- Indexes for table `reminders`
--
ALTER TABLE `reminders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_slug_unique` (`slug`);

--
-- Indexes for table `role_users`
--
ALTER TABLE `role_users`
  ADD PRIMARY KEY (`user_id`,`role_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `throttle`
--
ALTER TABLE `throttle`
  ADD PRIMARY KEY (`id`),
  ADD KEY `throttle_user_id_index` (`user_id`);

--
-- Indexes for table `types`
--
ALTER TABLE `types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_cart_id_foreign` (`cart_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activations`
--
ALTER TABLE `activations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `adoptions`
--
ALTER TABLE `adoptions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `adoption_histories`
--
ALTER TABLE `adoption_histories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cart_products`
--
ALTER TABLE `cart_products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feedbacks`
--
ALTER TABLE `feedbacks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `order_products`
--
ALTER TABLE `order_products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `persistences`
--
ALTER TABLE `persistences`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `promotions`
--
ALTER TABLE `promotions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `promotion_history`
--
ALTER TABLE `promotion_history`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reminders`
--
ALTER TABLE `reminders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `throttle`
--
ALTER TABLE `throttle`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `types`
--
ALTER TABLE `types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart_products`
--
ALTER TABLE `cart_products`
  ADD CONSTRAINT `cart_products_cart_id_foreign` FOREIGN KEY (`cart_id`) REFERENCES `carts` (`id`),
  ADD CONSTRAINT `cart_products_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Constraints for table `feedbacks`
--
ALTER TABLE `feedbacks`
  ADD CONSTRAINT `feedbacks_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `feedbacks_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `order_products`
--
ALTER TABLE `order_products`
  ADD CONSTRAINT `order_products_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`),
  ADD CONSTRAINT `order_products_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`),
  ADD CONSTRAINT `products_type_id_foreign` FOREIGN KEY (`type_id`) REFERENCES `types` (`id`);

--
-- Constraints for table `product_images`
--
ALTER TABLE `product_images`
  ADD CONSTRAINT `product_images_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Constraints for table `promotion_history`
--
ALTER TABLE `promotion_history`
  ADD CONSTRAINT `promotion_history_promotion_id_foreign` FOREIGN KEY (`promotion_id`) REFERENCES `promotions` (`id`),
  ADD CONSTRAINT `promotion_history_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_cart_id_foreign` FOREIGN KEY (`cart_id`) REFERENCES `carts` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
