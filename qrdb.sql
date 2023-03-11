-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 10, 2023 at 07:16 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `qrdb`
--

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_01_15_172329_create_qrcodes_table', 1),
(6, '2023_02_01_170949_create_site_visitor', 2),
(14, '2023_02_12_162129_create_q_r_codes_table', 3),
(15, '2023_02_18_124121_create_q_r_hits_table', 4),
(16, '2023_03_08_110607_add_deactivate_in_users_table', 5),
(17, '2023_03_10_173301_add_column_in_q_r_hits_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
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
-- Table structure for table `q_r_codes`
--

CREATE TABLE `q_r_codes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `input_text` varchar(255) DEFAULT NULL,
  `dot_color` varchar(255) DEFAULT NULL,
  `eye_color` varchar(255) DEFAULT NULL,
  `dot_style` varchar(255) DEFAULT NULL,
  `eye_style` varchar(255) DEFAULT NULL,
  `random_code` varchar(255) DEFAULT NULL,
  `dynamic_link` varchar(255) DEFAULT NULL,
  `qr_type` varchar(255) DEFAULT NULL,
  `logo_directory` varchar(255) DEFAULT NULL,
  `logo_name` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `q_r_codes`
--

INSERT INTO `q_r_codes` (`id`, `user_id`, `input_text`, `dot_color`, `eye_color`, `dot_style`, `eye_style`, `random_code`, `dynamic_link`, `qr_type`, `logo_directory`, `logo_name`, `created_at`, `updated_at`) VALUES
(1, NULL, 'aurko.me', '#740606', '#e80202', 'extra-rounded', 'rounded', 'ymy1KE', 'www.thiswebsite.com/ymy1KE', NULL, NULL, NULL, '2023-02-12 10:30:36', '2023-02-12 10:30:36'),
(2, NULL, 'abc.com', '#832525', '#9b1212', 'rounded', 'rounded', 'Qtc0VZ', 'www.thiswebsite.com/Qtc0VZ', NULL, NULL, NULL, '2023-02-12 10:39:31', '2023-02-12 10:39:31'),
(3, NULL, 'abcd.net', '#982525', '#df4807', 'dots', 'rounded', '0bBwuV', 'www.thiswebsite.com/0bBwuV', NULL, NULL, NULL, '2023-02-12 10:40:27', '2023-02-12 10:40:27'),
(4, NULL, 'qqq.com', '#843e3e', '#000000', 'dots', 'rounded', 'Xtup7c', 'www.thiswebsite.com/Xtup7c', NULL, NULL, NULL, '2023-02-12 10:42:01', '2023-02-12 10:42:01'),
(5, NULL, 'fff', '#000000', '#000000', 'classy-rounded', 'rounded', 'C8AXqJ', 'www.thiswebsite.com/C8AXqJ', NULL, NULL, NULL, '2023-02-12 10:45:48', '2023-02-12 10:45:48'),
(6, 5, 'ddsd', '#000000', '#000000', 'dots', 'extra-rounded', '924ys3', 'www.thiswebsite.com/924ys3', NULL, NULL, NULL, '2023-02-12 10:47:38', '2023-02-12 10:47:38'),
(7, 5, 'ddsd', '#000000', '#000000', 'dots', 'extra-rounded', 'KAI7UQ', 'www.thiswebsite.com/KAI7UQ', NULL, NULL, NULL, '2023-02-12 10:54:46', '2023-02-12 10:54:46'),
(8, 5, 'ddsd', '#000000', '#000000', 'dots', 'extra-rounded', 'KIExWC', 'www.thiswebsite.com/KIExWC', NULL, NULL, NULL, '2023-02-12 10:54:59', '2023-02-12 10:54:59'),
(9, 5, 'ddsd', '#000000', '#000000', 'dots', 'extra-rounded', 'hf8tGE', 'www.thiswebsite.com/hf8tGE', NULL, NULL, NULL, '2023-02-12 10:55:06', '2023-02-12 10:55:06'),
(10, 5, 'ddsd', '#000000', '#000000', 'dots', 'extra-rounded', 'LKCOhm', 'www.thiswebsite.com/LKCOhm', NULL, NULL, NULL, '2023-02-12 10:55:26', '2023-02-12 10:55:26'),
(11, 5, 'ddsd', '#000000', '#000000', 'dots', 'extra-rounded', '88K5b2', 'www.thiswebsite.com/88K5b2', NULL, NULL, NULL, '2023-02-12 10:55:51', '2023-02-12 10:55:51'),
(12, 5, 'ddsd', '#000000', '#000000', 'dots', 'extra-rounded', 'dbbpqV', 'www.thiswebsite.com/dbbpqV', NULL, NULL, NULL, '2023-02-12 10:55:55', '2023-02-12 10:55:55'),
(13, 5, 'facebook.com', '#6b2424', '#ff0000', 'classy-rounded', 'rounded', 'byKe9R', 'www.thiswebsite.com/byKe9R', NULL, NULL, NULL, '2023-02-13 11:43:19', '2023-02-13 11:43:19'),
(14, 5, 'fb.com', '#a03737', '#671919', 'dots', 'extra-rounded', 'OyKsMD', 'www.thiswebsite.com/OyKsMD', NULL, NULL, 'Mim- 300 x 300.jpg', '2023-02-14 20:54:33', '2023-02-14 20:54:33'),
(15, 5, 'faw', '#000000', '#000000', NULL, NULL, 'AsdHMU', 'www.thiswebsite.com/AsdHMU', NULL, NULL, NULL, '2023-02-14 21:04:16', '2023-02-14 21:04:16'),
(16, 5, 'jjjj', '#000000', '#000000', NULL, NULL, '2wlte3', 'www.thiswebsite.com/2wlte3', NULL, NULL, NULL, '2023-02-14 21:06:20', '2023-02-14 21:06:20'),
(17, 5, 'ssas', '#000000', '#000000', NULL, NULL, '1Y84FF', 'www.thiswebsite.com/1Y84FF', NULL, NULL, NULL, '2023-02-14 21:10:48', '2023-02-14 21:10:48'),
(18, 5, 'ssas', '#000000', '#000000', NULL, NULL, '4HqhHs', 'www.thiswebsite.com/4HqhHs', NULL, NULL, NULL, '2023-02-14 21:11:12', '2023-02-14 21:11:12'),
(19, 5, 'awdwad', '#000000', '#000000', NULL, NULL, 'qVA6CY', 'www.thiswebsite.com/qVA6CY', NULL, NULL, NULL, '2023-02-14 21:11:27', '2023-02-14 21:11:27'),
(20, 5, 'awdwad', '#000000', '#000000', NULL, NULL, '05Zn1M', 'www.thiswebsite.com/05Zn1M', NULL, NULL, NULL, '2023-02-14 21:13:39', '2023-02-14 21:13:39'),
(21, 5, 'awdwad', '#000000', '#000000', NULL, NULL, 'FzbF3Q', 'www.thiswebsite.com/FzbF3Q', NULL, NULL, NULL, '2023-02-14 21:14:42', '2023-02-14 21:14:42'),
(22, 5, 'awdad', '#000000', '#000000', NULL, NULL, 'k7fu2A', 'www.thiswebsite.com/k7fu2A', NULL, NULL, NULL, '2023-02-14 21:32:31', '2023-02-14 21:32:31'),
(23, 5, 'ddd', '#000000', '#000000', NULL, NULL, 'D38SNR', 'www.thiswebsite.com/D38SNR', NULL, NULL, NULL, '2023-02-14 21:58:17', '2023-02-14 21:58:17'),
(24, 5, 'ddd', '#000000', '#000000', NULL, NULL, 'GtR0h2', 'www.thiswebsite.com/GtR0h2', NULL, NULL, NULL, '2023-02-14 22:00:06', '2023-02-14 22:00:06'),
(25, 5, 'ddd', '#000000', '#000000', NULL, NULL, 'EcrfVD', 'www.thiswebsite.com/EcrfVD', NULL, NULL, NULL, '2023-02-14 22:00:24', '2023-02-14 22:00:24'),
(26, 5, 'face', '#000000', '#000000', NULL, NULL, 'VdDTr0', 'www.thiswebsite.com/VdDTr0', NULL, NULL, NULL, '2023-02-15 08:56:35', '2023-02-15 08:56:35'),
(27, 5, 'face', '#000000', '#000000', NULL, NULL, 'rV7VaL', 'www.thiswebsite.com/rV7VaL', NULL, NULL, NULL, '2023-02-15 08:58:35', '2023-02-15 08:58:35'),
(28, 5, 'face', '#000000', '#000000', NULL, NULL, '87UneR', 'www.thiswebsite.com/87UneR', NULL, NULL, NULL, '2023-02-15 08:58:52', '2023-02-15 08:58:52'),
(29, 5, 'aurko.me', '#481414', '#a61111', 'rounded', 'extra-rounded', '6qs4Be', 'www.thiswebsite.com/6qs4Be', NULL, NULL, NULL, '2023-02-15 09:05:44', '2023-02-15 09:05:44'),
(30, 5, 'facebook.com', '#b91818', '#07da2a', 'rounded', 'rounded', 'WHoCMB', 'www.thiswebsite.com/WHoCMB', NULL, NULL, NULL, '2023-02-17 00:39:31', '2023-02-17 00:39:31'),
(31, 5, 'aurko.me', '#830c0c', '#a90f0f', 'rounded', 'extra-rounded', '8CJF0a', 'www.thiswebsite.com/8CJF0a', NULL, 'C:\\xampp\\htdocs\\Dynamic-QR-Code-Generator\\public\\qr_icon/5/31', '300-x-80.jpg', '2023-02-17 00:43:14', '2023-02-17 00:43:14'),
(32, 5, 'tinypng.com', '#9c1616', '#1bda3b', 'rounded', 'rounded', 'KV8Hqm', 'www.thiswebsite.com/KV8Hqm', NULL, NULL, NULL, '2023-02-18 00:44:59', '2023-02-18 06:27:20'),
(33, 5, 'www.facebook.com', '#992424', '#1b0909', 'rounded', 'rounded', 'JralDQ', 'www.thiswebsite.com/JralDQ', NULL, NULL, '222.png', '2023-02-18 00:45:56', '2023-02-18 02:07:02'),
(34, 5, 'www.google.com', '#000000', '#000000', NULL, NULL, 'rP2CXr', '127.0.0.1:8000/view/rP2CXr', NULL, NULL, NULL, '2023-02-18 07:37:16', '2023-02-18 07:56:51'),
(35, 5, 'yahoo.com', '#000000', '#000000', NULL, NULL, 'JyhD0V', 'http://127.0.0.1:8000/view/JyhD0V', NULL, NULL, NULL, '2023-02-18 12:28:03', '2023-02-18 12:28:03'),
(36, 5, 'https://google.com', '#2fb24a', '#107b3d', 'dots', 'extra-rounded', 'u4nEl9', 'http://127.0.0.1:8000/view/u4nEl9', NULL, NULL, 'tr3.png', '2023-02-23 06:53:04', '2023-02-23 06:53:04'),
(37, 5, 'https://appnap.io', '#ee2f2f', '#560101', 'extra-rounded', 'rounded', 'RlsUs3', 'http://127.0.0.1:8000/view/RlsUs3', NULL, NULL, 'WhatsApp Image 2022-08-21 at 11.52.25 AM.jpeg', '2023-02-23 06:57:01', '2023-02-23 06:57:01'),
(38, 5, 'appnap.io', '#952d2d', '#d00606', 'rounded', 'rounded', '5OhN7x', 'http://127.0.0.1:8000/view/5OhN7x', NULL, NULL, 'WhatsApp Image 2022-08-21 at 11.52.25 AM.jpeg', '2023-02-23 07:00:09', '2023-02-23 07:00:09'),
(39, 5, 'robodocbd.com', '#962c2c', '#4e0404', 'rounded', 'rounded', '92DMm7', 'http://127.0.0.1:8000/qr/92DMm7', NULL, NULL, 'My project.png', '2023-02-23 07:01:22', '2023-02-23 07:01:22'),
(40, 5, 'yahoo.com', '#0c18c6', '#ea4335', 'dots', 'extra-rounded', 'A3GOsE', 'http://127.0.0.1:8000/qr/A3GOsE', NULL, NULL, 'google-logo-icon-png-transparent-background-osteopathy-16.png', '2023-02-24 07:47:37', '2023-02-24 07:54:38'),
(41, 5, 'google.com', '#b35151', '#550202', 'rounded', 'rounded', '2KnvBR', 'http://127.0.0.1:8000/qr/2KnvBR', NULL, NULL, NULL, '2023-03-02 23:38:50', '2023-03-02 23:38:50'),
(42, 5, 'aurko.me', '#000000', '#000000', NULL, NULL, 'LKhK3O', 'http://127.0.0.1:8000/qr/LKhK3O', NULL, NULL, NULL, '2023-03-02 23:41:03', '2023-03-02 23:41:03'),
(43, 5, 'googlees.com', '#000000', '#000000', 'extra-rounded', 'rounded', 'sMzbal', 'http://127.0.0.1:8000/qr/sMzbal', NULL, NULL, 'google-logo-icon-png-transparent-background-osteopathy-16.png', '2023-03-02 23:41:36', '2023-03-02 23:41:36');

-- --------------------------------------------------------

--
-- Table structure for table `q_r_hits`
--

CREATE TABLE `q_r_hits` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `qr_id` int(11) DEFAULT NULL,
  `user_ip` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `qr_hit_on` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `q_r_hits`
--

INSERT INTO `q_r_hits` (`id`, `qr_id`, `user_ip`, `created_at`, `updated_at`, `qr_hit_on`) VALUES
(1, 32, '127.0.0.1', '2023-02-18 07:35:00', '2023-02-18 07:35:00', NULL),
(2, 32, '127.0.0.1', '2023-02-18 07:35:20', '2023-02-18 07:35:20', NULL),
(3, 34, '127.0.0.1', '2023-02-18 07:37:28', '2023-02-18 07:37:28', NULL),
(4, 34, '127.0.0.1', '2023-02-18 07:43:50', '2023-02-18 07:43:50', NULL),
(5, 34, '127.0.0.1', '2023-02-18 07:57:01', '2023-02-18 07:57:01', NULL),
(6, 35, '127.0.0.1', '2023-02-18 12:28:32', '2023-02-18 12:28:32', NULL),
(7, 36, '127.0.0.1', '2023-02-23 06:54:36', '2023-02-23 06:54:36', NULL),
(8, 36, '127.0.0.1', '2023-02-23 06:54:58', '2023-02-23 06:54:58', NULL),
(9, 36, '127.0.0.1', '2023-02-23 06:55:40', '2023-02-23 06:55:40', NULL),
(10, 36, '127.0.0.1', '2023-02-23 06:55:58', '2023-02-23 06:55:58', NULL),
(11, 35, '127.0.0.1', '2023-02-23 06:56:16', '2023-02-23 06:56:16', NULL),
(12, 37, '127.0.0.1', '2023-02-23 06:57:08', '2023-02-23 06:57:08', NULL),
(13, 38, '127.0.0.1', '2023-02-23 07:00:16', '2023-02-23 07:00:16', NULL),
(14, 39, '127.0.0.1', '2023-02-23 07:01:34', '2023-02-23 07:01:34', NULL),
(15, 40, '127.0.0.1', '2023-02-24 07:49:55', '2023-02-24 07:49:55', NULL),
(16, 40, '127.0.0.1', '2023-02-24 07:52:53', '2023-02-24 07:52:53', NULL),
(17, 40, '127.0.0.1', '2023-02-24 07:52:59', '2023-02-24 07:52:59', NULL),
(18, 40, '127.0.0.1', '2023-03-05 18:00:00', '2023-02-24 07:53:50', NULL),
(19, 40, '127.0.0.1', '2023-03-06 07:54:52', '2023-02-24 07:54:52', NULL),
(20, 35, '127.0.0.1', '2023-03-07 00:55:51', '2023-03-07 00:55:51', NULL),
(21, 35, '127.0.0.1', '2023-03-07 01:15:48', '2023-03-07 01:15:48', NULL),
(22, 35, '127.0.0.1', '2023-03-07 02:13:32', '2023-03-07 02:13:32', NULL),
(23, 41, '127.0.0.1', '2023-03-10 03:37:56', '2023-03-10 03:37:56', NULL),
(24, 41, '127.0.0.1', '2023-03-10 03:57:46', '2023-03-10 03:57:46', NULL),
(25, 41, '127.0.0.1', '2023-03-10 03:58:44', '2023-03-10 03:58:44', NULL),
(26, 41, '127.0.0.1', '2023-03-10 03:59:43', '2023-03-10 03:59:43', NULL),
(27, 41, '127.0.0.1', '2023-03-10 11:30:28', '2023-03-10 11:30:28', NULL),
(28, 41, '127.0.0.1', '2023-03-10 11:31:18', '2023-03-10 11:31:18', NULL),
(29, 41, '127.0.0.1', '2023-03-10 11:32:01', '2023-03-10 11:32:01', NULL),
(30, 41, '127.0.0.1', '2023-03-10 11:34:36', '2023-03-10 11:34:36', NULL),
(31, 41, '127.0.0.1', '2023-03-10 11:35:14', '2023-03-10 11:35:14', NULL),
(32, 41, '127.0.0.1', '2023-03-10 11:36:02', '2023-03-10 11:36:02', '2023-03-10 17:36:02'),
(33, 41, '127.0.0.1', '2023-03-10 11:42:19', '2023-03-10 11:42:19', NULL),
(34, 41, '127.0.0.1', '2023-03-10 13:00:35', '2023-03-10 13:00:35', NULL),
(35, 41, '127.0.0.1', '2023-03-10 13:02:17', '2023-03-10 13:02:17', NULL),
(36, 41, '127.0.0.1', '2023-03-10 14:29:34', '2023-03-10 14:29:34', NULL),
(37, 41, '127.0.0.1', '2023-03-10 14:33:09', '2023-03-10 14:33:09', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `site_visitor`
--

CREATE TABLE `site_visitor` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_ip` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `site_visitor`
--

INSERT INTO `site_visitor` (`id`, `user_ip`, `created_at`, `updated_at`) VALUES
(1, '127.0.0.1', '2023-03-04 18:00:00', NULL),
(2, '127.0.0.1', '2023-03-04 18:00:00', NULL),
(3, '127.0.0.1', '2023-03-05 11:16:35', NULL),
(4, '127.0.0.1', '2023-02-05 10:33:07', NULL),
(5, '127.0.0.1', '2023-03-05 09:30:28', NULL),
(6, '127.0.0.1', '2023-03-07 09:29:16', NULL),
(7, '127.0.0.1', '2023-03-07 09:29:34', NULL),
(8, '127.0.0.1', '2023-03-07 09:32:30', NULL),
(9, '127.0.0.1', '2023-03-07 10:11:02', NULL),
(10, '127.0.0.1', '2023-03-07 10:21:07', NULL),
(11, '127.0.0.1', '2023-03-07 10:21:17', NULL),
(12, '127.0.0.1', '2023-03-07 10:21:42', NULL),
(13, '127.0.0.1', '2023-03-06 16:24:07', NULL),
(14, '127.0.0.1', '2023-03-06 16:24:07', NULL),
(15, '127.0.0.1', '2023-03-06 16:25:57', NULL),
(16, '127.0.0.1', '2023-03-07 10:32:24', NULL),
(17, '127.0.0.1', '2023-03-07 23:51:20', NULL),
(18, '127.0.0.1', '2023-03-07 23:53:56', NULL),
(19, '127.0.0.1', '2023-03-07 23:55:26', NULL),
(20, '127.0.0.1', '2023-03-08 00:04:36', NULL),
(21, '127.0.0.1', '2023-03-08 00:37:22', NULL),
(22, '127.0.0.1', '2023-03-08 02:04:30', NULL),
(23, '127.0.0.1', '2023-03-08 02:04:34', NULL),
(24, '127.0.0.1', '2023-03-08 02:05:30', NULL),
(25, '127.0.0.1', '2023-03-08 02:06:32', NULL),
(26, '127.0.0.1', '2023-03-08 02:10:22', NULL),
(27, '127.0.0.1', '2023-03-08 02:15:18', NULL),
(28, '127.0.0.1', '2023-03-08 02:15:50', NULL),
(29, '127.0.0.1', '2023-03-08 02:15:58', NULL),
(30, '127.0.0.1', '2023-03-08 02:16:04', NULL),
(31, '127.0.0.1', '2023-03-08 02:16:08', NULL),
(32, '127.0.0.1', '2023-03-08 02:16:13', NULL),
(33, '127.0.0.1', '2023-03-08 02:21:47', NULL),
(34, '127.0.0.1', '2023-03-08 02:23:20', NULL),
(35, '127.0.0.1', '2023-03-08 02:23:27', NULL),
(36, '127.0.0.1', '2023-03-08 02:23:34', NULL),
(37, '127.0.0.1', '2023-03-08 02:24:01', NULL),
(38, '127.0.0.1', '2023-03-08 02:24:09', NULL),
(39, '127.0.0.1', '2023-03-08 02:24:16', NULL),
(40, '127.0.0.1', '2023-03-08 02:24:19', NULL),
(41, '127.0.0.1', '2023-03-08 02:24:43', NULL),
(42, '127.0.0.1', '2023-03-08 02:24:57', NULL),
(43, '127.0.0.1', '2023-03-08 03:28:42', NULL),
(44, '127.0.0.1', '2023-03-08 03:41:50', NULL),
(45, '127.0.0.1', '2023-03-08 03:42:05', NULL),
(46, '127.0.0.1', '2023-03-08 03:42:39', NULL),
(47, '127.0.0.1', '2023-03-08 03:42:54', NULL),
(48, '127.0.0.1', '2023-03-08 03:44:14', NULL),
(49, '127.0.0.1', '2023-03-08 03:44:22', NULL),
(50, '127.0.0.1', '2023-03-08 03:44:31', NULL),
(51, '127.0.0.1', '2023-03-08 06:02:36', NULL),
(52, '127.0.0.1', '2023-03-08 06:06:21', NULL),
(53, '127.0.0.1', '2023-03-08 06:07:10', NULL),
(54, '127.0.0.1', '2023-03-08 06:07:42', NULL),
(55, '127.0.0.1', '2023-03-08 06:07:54', NULL),
(56, '127.0.0.1', '2023-03-08 06:08:02', NULL),
(57, '127.0.0.1', '2023-03-08 06:08:31', NULL),
(58, '127.0.0.1', '2023-03-08 07:47:59', NULL),
(59, '127.0.0.1', '2023-03-08 08:10:55', NULL),
(60, '127.0.0.1', '2023-03-08 08:12:51', NULL),
(61, '127.0.0.1', '2023-03-08 08:14:02', NULL),
(62, '127.0.0.1', '2023-03-08 08:15:02', NULL),
(63, '127.0.0.1', '2023-03-08 08:16:30', NULL),
(64, '127.0.0.1', '2023-03-08 08:55:51', NULL),
(65, '127.0.0.1', '2023-03-08 09:19:12', NULL),
(66, '127.0.0.1', '2023-03-08 09:28:27', NULL),
(67, '127.0.0.1', '2023-03-08 10:25:47', NULL),
(68, '127.0.0.1', '2023-03-08 10:29:16', NULL),
(69, '127.0.0.1', '2023-03-08 10:31:44', NULL),
(70, '127.0.0.1', '2023-03-08 10:33:54', NULL),
(71, '127.0.0.1', '2023-03-08 10:34:10', NULL),
(72, '127.0.0.1', '2023-03-08 10:34:32', NULL),
(73, '127.0.0.1', '2023-03-08 10:35:20', NULL),
(74, '127.0.0.1', '2023-03-08 10:35:45', NULL),
(75, '127.0.0.1', '2023-03-08 10:36:17', NULL),
(76, '127.0.0.1', '2023-03-08 10:36:28', NULL),
(77, '127.0.0.1', '2023-03-08 10:37:04', NULL),
(78, '127.0.0.1', '2023-03-08 10:37:38', NULL),
(79, '127.0.0.1', '2023-03-08 10:37:44', NULL),
(80, '127.0.0.1', '2023-03-08 10:37:50', NULL),
(81, '127.0.0.1', '2023-03-08 10:38:24', NULL),
(82, '127.0.0.1', '2023-03-08 10:41:38', NULL),
(83, '127.0.0.1', '2023-03-08 11:56:21', NULL),
(84, '127.0.0.1', '2023-03-08 11:56:42', NULL),
(85, '127.0.0.1', '2023-03-09 11:43:20', NULL),
(86, '127.0.0.1', '2023-03-09 11:51:12', NULL),
(87, '127.0.0.1', '2023-03-09 11:52:10', NULL),
(88, '127.0.0.1', '2023-03-09 11:58:30', NULL),
(89, '127.0.0.1', '2023-03-09 11:59:11', NULL),
(90, '127.0.0.1', '2023-03-09 11:59:19', NULL),
(91, '127.0.0.1', '2023-03-09 12:03:00', NULL),
(92, '127.0.0.1', '2023-03-09 12:03:26', NULL),
(93, '127.0.0.1', '2023-03-09 12:04:17', NULL),
(94, '127.0.0.1', '2023-03-09 12:04:36', NULL),
(95, '127.0.0.1', '2023-03-09 12:04:43', NULL),
(96, '127.0.0.1', '2023-03-09 12:04:56', NULL),
(97, '127.0.0.1', '2023-03-09 12:05:02', NULL),
(98, '127.0.0.1', '2023-03-09 12:05:12', NULL),
(99, '127.0.0.1', '2023-03-09 12:05:34', NULL),
(100, '127.0.0.1', '2023-03-09 12:05:48', NULL),
(101, '127.0.0.1', '2023-03-09 12:06:37', NULL),
(102, '127.0.0.1', '2023-03-09 12:06:42', NULL),
(103, '127.0.0.1', '2023-03-09 12:07:03', NULL),
(104, '127.0.0.1', '2023-03-09 12:09:51', NULL),
(105, '127.0.0.1', '2023-03-09 12:10:02', NULL),
(106, '127.0.0.1', '2023-03-09 12:20:22', NULL),
(107, '127.0.0.1', '2023-03-09 12:23:09', NULL),
(108, '127.0.0.1', '2023-03-09 12:23:21', NULL),
(109, '127.0.0.1', '2023-03-09 12:23:34', NULL),
(110, '127.0.0.1', '2023-03-09 12:23:41', NULL),
(111, '127.0.0.1', '2023-03-09 12:24:21', NULL),
(112, '127.0.0.1', '2023-03-09 12:25:05', NULL),
(113, '127.0.0.1', '2023-03-09 12:27:13', NULL),
(114, '127.0.0.1', '2023-03-09 12:27:54', NULL),
(115, '127.0.0.1', '2023-03-09 12:28:32', NULL),
(116, '127.0.0.1', '2023-03-09 12:29:43', NULL),
(117, '127.0.0.1', '2023-03-09 12:29:56', NULL),
(118, '127.0.0.1', '2023-03-09 12:30:04', NULL),
(119, '127.0.0.1', '2023-03-09 12:30:12', NULL),
(120, '127.0.0.1', '2023-03-09 12:30:17', NULL),
(121, '127.0.0.1', '2023-03-09 12:30:24', NULL),
(122, '127.0.0.1', '2023-03-09 12:31:12', NULL),
(123, '127.0.0.1', '2023-03-09 12:32:05', NULL),
(124, '127.0.0.1', '2023-03-09 12:32:22', NULL),
(125, '127.0.0.1', '2023-03-09 12:32:27', NULL),
(126, '127.0.0.1', '2023-03-09 12:32:39', NULL),
(127, '127.0.0.1', '2023-03-09 12:32:44', NULL),
(128, '127.0.0.1', '2023-03-09 12:32:57', NULL),
(129, '127.0.0.1', '2023-03-09 12:33:07', NULL),
(130, '127.0.0.1', '2023-03-09 12:33:20', NULL),
(131, '127.0.0.1', '2023-03-09 13:37:16', NULL),
(132, '127.0.0.1', '2023-03-09 13:38:27', NULL),
(133, '127.0.0.1', '2023-03-09 13:39:47', NULL),
(134, '127.0.0.1', '2023-03-09 12:40:40', NULL),
(135, '127.0.0.1', '2023-03-09 13:46:09', NULL),
(136, '127.0.0.1', '2023-03-09 13:46:29', NULL),
(137, '127.0.0.1', '2023-03-09 13:46:35', NULL),
(138, '127.0.0.1', '2023-03-09 13:46:53', NULL),
(139, '127.0.0.1', '2023-03-09 13:47:24', NULL),
(140, '127.0.0.1', '2023-03-09 13:47:29', NULL),
(141, '127.0.0.1', '2023-03-09 13:52:07', NULL),
(142, '127.0.0.1', '2023-03-09 13:52:28', NULL),
(143, '127.0.0.1', '2023-03-09 13:52:50', NULL),
(144, '127.0.0.1', '2023-03-09 13:53:36', NULL),
(145, '127.0.0.1', '2023-03-09 14:17:43', NULL),
(146, '127.0.0.1', '2023-03-09 14:20:16', NULL),
(147, '127.0.0.1', '2023-03-09 14:23:37', NULL),
(148, '127.0.0.1', '2023-03-10 01:20:59', NULL),
(149, '127.0.0.1', '2023-03-10 01:22:20', NULL),
(150, '127.0.0.1', '2023-03-10 01:22:42', NULL),
(151, '127.0.0.1', '2023-03-10 00:23:07', NULL),
(152, '127.0.0.1', '2023-03-10 02:30:29', NULL),
(153, '127.0.0.1', '2023-03-10 03:32:29', NULL),
(154, '127.0.0.1', '2023-03-10 03:33:25', NULL),
(155, '127.0.0.1', '2023-03-10 07:10:17', NULL),
(156, '127.0.0.1', '2023-03-10 07:11:20', NULL),
(157, '127.0.0.1', '2023-03-10 07:11:38', NULL),
(158, '127.0.0.1', '2023-03-10 07:11:55', NULL),
(159, '127.0.0.1', '2023-03-10 07:12:01', NULL),
(160, '127.0.0.1', '2023-03-10 07:15:23', NULL),
(161, '127.0.0.1', '2023-03-10 07:15:31', NULL),
(162, '127.0.0.1', '2023-03-10 07:31:34', NULL),
(163, '127.0.0.1', '2023-03-10 07:32:15', NULL),
(164, '127.0.0.1', '2023-03-10 07:34:50', NULL),
(165, '127.0.0.1', '2023-03-10 07:35:17', NULL),
(166, '127.0.0.1', '2023-03-10 07:36:42', NULL),
(167, '127.0.0.1', '2023-03-10 11:27:46', NULL),
(168, '127.0.0.1', '2023-03-10 11:28:15', NULL),
(169, '127.0.0.1', '2023-03-10 11:36:38', NULL),
(170, '127.0.0.1', '2023-03-10 11:39:29', NULL),
(171, '127.0.0.1', '2023-03-10 11:45:53', NULL),
(172, '127.0.0.1', '2023-03-10 11:45:56', NULL),
(173, '127.0.0.1', '2023-03-10 13:10:34', NULL),
(174, '127.0.0.1', '2023-03-10 13:32:11', NULL),
(175, '127.0.0.1', '2023-03-10 13:32:35', NULL),
(176, '127.0.0.1', '2023-03-10 13:32:42', NULL),
(177, '127.0.0.1', '2023-03-10 13:33:03', NULL),
(178, '127.0.0.1', '2023-03-10 13:33:22', NULL),
(179, '127.0.0.1', '2023-03-10 13:34:01', NULL),
(180, '127.0.0.1', '2023-03-10 13:34:41', NULL),
(181, '127.0.0.1', '2023-03-10 13:42:35', NULL),
(182, '127.0.0.1', '2023-03-10 13:46:14', NULL),
(183, '127.0.0.1', '2023-03-10 13:46:34', NULL),
(184, '127.0.0.1', '2023-03-10 13:52:52', NULL),
(185, '127.0.0.1', '2023-03-10 14:00:34', NULL),
(186, '127.0.0.1', '2023-03-10 14:01:06', NULL),
(187, '127.0.0.1', '2023-03-10 12:04:46', NULL),
(188, '127.0.0.1', '2023-03-10 14:10:34', NULL),
(189, '127.0.0.1', '2023-03-10 14:12:22', NULL),
(190, '127.0.0.1', '2023-03-10 14:28:55', NULL),
(191, '127.0.0.1', '2023-03-10 14:30:54', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `email_verified_at` date DEFAULT NULL,
  `email_verification_token` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `organization` varchar(255) DEFAULT NULL,
  `designation` varchar(255) DEFAULT NULL,
  `registered_on` date DEFAULT NULL,
  `is_active` tinyint(1) DEFAULT NULL,
  `is_verified` tinyint(1) DEFAULT NULL,
  `is_admin` tinyint(1) DEFAULT NULL,
  `password_recovery_token` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_deactive` int(11) DEFAULT NULL,
  `deactivated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `email_verification_token`, `phone`, `password`, `organization`, `designation`, `registered_on`, `is_active`, `is_verified`, `is_admin`, `password_recovery_token`, `created_at`, `updated_at`, `is_deactive`, `deactivated_at`) VALUES
(2, NULL, 'mahmudur.rashid@northsouth.edu', NULL, NULL, '01750106286', '$2y$10$JkwnfMap7aBg6IwS1mTvBelp16BGl6NPOoDYpz4AD2SwqWFsRcVma', NULL, NULL, NULL, 1, NULL, NULL, NULL, '2023-01-25 11:38:03', '2023-02-08 10:43:57', NULL, NULL),
(3, NULL, 'fyrobikimi@mailinator.com', NULL, NULL, '+1 (315) 794-4086', '$2y$10$omiw3ahrnt/lvZtYpkCumuxXjrMP02cpnE8ZByiimL1bvw0XllvHi', NULL, NULL, NULL, 0, NULL, NULL, NULL, '2023-01-25 11:43:18', '2023-02-07 11:43:24', NULL, NULL),
(4, NULL, 'qijy@mailinator.com', NULL, 'c39eag', '+1 (247) 613-7268', '$2y$10$wIgigNucqbKUVOwO.eOs..9EqmOEFdrYEP7zsq/z3Qcd.xk.bw/za', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-25 11:44:08', '2023-02-07 11:38:18', NULL, NULL),
(5, 'Md Aurko', 'aurko.nsu.bd@gmail.com', NULL, 'JRLA5M', '01750106286', '$2y$10$n9WFpMkJdmBkMLaTU88Hv.BhQsfFXdc2gTPx/s.NT8fKvGYOwX.3K', NULL, NULL, NULL, 1, 1, NULL, NULL, '2023-01-27 07:27:48', '2023-02-18 01:46:48', NULL, NULL),
(6, 'Tech World', 'techworld@gmail.com', NULL, 'o5rVvq', '01710000000', '$2y$10$3RlOEg3zvS9rt2eJTeYEaO1ig2Mi55OjdSP0CH4U4baKDh2bFmT9G', NULL, NULL, NULL, 1, 1, 1, NULL, '2023-01-27 21:04:11', '2023-02-11 11:35:14', NULL, NULL),
(7, NULL, 'kajaxo@mailinator.com', NULL, 'tBqsLR', '+1 (549) 281-6226', '$2y$10$kSIGNw0XLGzHDhrrf7HWj.DWTt2TsCexa9wD2vKKXDkz/IkIrGhNq', NULL, NULL, NULL, 1, 1, NULL, NULL, '2023-02-09 12:45:18', '2023-03-08 05:40:58', 1, '2023-03-08 11:40:58'),
(14, NULL, 'mahmudur.rashid26@gmail.com', NULL, 'Atrnjr', '01750106286', '$2y$10$eG0fESZrlIGci0wi7k2gdedxzL7nkVDQL81tRx718g5WCY6uznToq', NULL, NULL, NULL, 1, 1, NULL, 'fZGdg9Hz', '2023-02-24 07:42:08', '2023-03-08 09:18:33', NULL, NULL),
(15, NULL, 'nuwap@mailinator.com', NULL, 'vFbY79', '+1 (103) 225-7611', '$2y$10$m9hgGyrFY5niMxN7dV8wveZSE.4cvWwTVNKJsoNrcQ0UWwF0ACYae', NULL, NULL, '2023-03-08', NULL, NULL, NULL, NULL, '2023-03-08 08:49:36', '2023-03-08 08:49:36', NULL, NULL);

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
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `q_r_codes`
--
ALTER TABLE `q_r_codes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `q_r_hits`
--
ALTER TABLE `q_r_hits`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `site_visitor`
--
ALTER TABLE `site_visitor`
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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `q_r_codes`
--
ALTER TABLE `q_r_codes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `q_r_hits`
--
ALTER TABLE `q_r_hits`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `site_visitor`
--
ALTER TABLE `site_visitor`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=192;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
