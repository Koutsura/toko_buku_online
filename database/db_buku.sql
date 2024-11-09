-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 09, 2024 at 09:42 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_buku`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `id` int(100) NOT NULL,
  `name` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `harga` decimal(10,0) NOT NULL,
  `kategori` varchar(255) NOT NULL,
  `deskripsi` longtext NOT NULL,
  `image` varchar(255) NOT NULL,
  `date` datetime NOT NULL,
  `stok` int(255) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id`, `name`, `title`, `harga`, `kategori`, `deskripsi`, `image`, `date`, `stok`) VALUES
(24, 'koutsura', 'buku', 20000, 'sejarah', 'lorem ipsum', '1730980244.jpg', '2024-11-07 18:49:00', 18),
(25, 'kitty', 'komputer', 20000, 'IT', 'lorem ipsum', '1730985817.jpg', '2024-11-07 20:22:00', 7),
(26, 'efek', 'abjact', 1000000, 'IT', 'lorem ipsum', '1730998354.png', '2024-11-07 23:52:00', 39),
(27, 'meong', 'kucing terbang', 50000, 'sejarah', 'lorem ipsum', '1730998403.png', '2024-11-07 23:53:00', 58),
(31, 'water', 'air mancur', 300000, 'hiburan', 'lorem ipsum', '1731063719.jpg', '2024-11-08 18:01:00', 17),
(32, 'dimas', 'tanah longsor', 40000, 'bencana alam', 'lorem ipsum', '1731074156.jpg', '2024-11-08 20:55:00', 62);

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
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
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1);

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
-- Table structure for table `sale`
--

CREATE TABLE `sale` (
  `sale_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `book_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `total_price` decimal(10,0) NOT NULL,
  `sale_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sale`
--

INSERT INTO `sale` (`sale_id`, `user_id`, `book_id`, `quantity`, `total_price`, `sale_date`) VALUES
(1, 1, 24, 1, 20000, '2024-11-07 20:09:08'),
(2, 1, 24, 2, 40000, '2024-11-07 20:13:58'),
(4, 1, 27, 3, 150000, '2024-11-08 10:24:44'),
(5, 1, 27, 3, 150000, '2024-11-08 10:27:17'),
(6, 1, 24, 5, 100000, '2024-11-08 10:39:37'),
(7, 1, 24, 5, 100000, '2024-11-08 10:39:38'),
(8, 1, 25, 2, 40000, '2024-11-08 10:46:13'),
(9, 1, 27, 1, 50000, '2024-11-08 10:46:21'),
(10, 1, 27, 1, 50000, '2024-11-08 10:47:31'),
(11, 1, 27, 5, 250000, '2024-11-08 10:48:59'),
(12, 1, 27, 5, 250000, '2024-11-08 10:51:32'),
(13, 1, 27, 1, 50000, '2024-11-08 10:51:45'),
(14, 1, 27, 1, 50000, '2024-11-08 10:53:35'),
(15, 1, 27, 1, 50000, '2024-11-08 10:57:00'),
(16, 1, 27, 1, 50000, '2024-11-08 10:57:09'),
(17, 1, 27, 1, 50000, '2024-11-08 10:59:54'),
(18, 1, 27, 1, 50000, '2024-11-08 11:02:14'),
(19, 1, 27, 1, 50000, '2024-11-08 11:04:51'),
(20, 1, 27, 1, 50000, '2024-11-08 11:04:58'),
(21, 1, 27, 1, 50000, '2024-11-08 11:05:31'),
(22, 1, 27, 1, 50000, '2024-11-08 11:05:38'),
(23, 1, 27, 1, 50000, '2024-11-08 11:05:38'),
(24, 1, 27, 1, 50000, '2024-11-08 11:06:16'),
(25, 1, 27, 2, 100000, '2024-11-08 11:07:00'),
(26, 1, 25, 2, 40000, '2024-11-08 11:10:56'),
(27, 1, 24, 1, 20000, '2024-11-08 11:12:57'),
(28, 1, 26, 1, 1000000, '2024-11-08 11:15:04'),
(29, 1, 25, 1, 20000, '2024-11-08 11:20:42'),
(30, 1, 27, 5, 250000, '2024-11-08 13:25:57'),
(31, 1, 25, 3, 60000, '2024-11-08 14:17:09'),
(32, 1, 24, 2, 0, '2024-11-08 14:19:51'),
(33, 1, 24, 2, 40000, '2024-11-08 14:59:10'),
(34, 1, 25, 1, 20000, '2024-11-08 14:59:19'),
(35, 1, 27, 2, 100000, '2024-11-08 15:02:21'),
(36, 4, 31, 3, 900000, '2024-11-08 20:46:29'),
(37, 4, 32, 5, 200000, '2024-11-08 20:58:45'),
(38, 1, 25, 1, 20000, '2024-11-08 21:02:53'),
(39, 1, 27, 2, 100000, '2024-11-09 10:11:25'),
(40, 5, 27, 1, 50000, '2024-11-09 14:36:52'),
(41, 5, 32, 1, 40000, '2024-11-09 15:11:22'),
(42, 5, 32, 1, 40000, '2024-11-09 15:12:24'),
(43, 5, 32, 1, 40000, '2024-11-09 15:15:34');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('0NEyM2oe4qtLJAacJ2AR6zGgGuXyYeTn5cyxi5Ls', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoidjZqQnVzbVpvdU9nTXZrSDh3WVFLazdvakFrbG95RDNDVUtpR1VRTSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1731133841),
('0vRAQD8JzDyDItZJLCehc9P9R1iPs3PqCFYyToJA', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoicGJYOXV2ajNBeUk3QmlzWDh2MlRQd0hLeFZqMnl6MUk3WjdYMjFUaCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1731141538),
('0Yf7Mc8uuyt80kbZjpHP9jDe4qzI8BUqehHVTxwy', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiakttV0RBcVBMOUhndXBGS0JFQ3NxeHlubXQxV2pPVXdRNVRnd0xXSyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1731140723),
('15XBJ6f9vGyakfaTWhFj05ulCLA72VRLxZHflKeQ', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiSVh0b1Y3SHV4QVlpbTZmelJINEtDSmV5dllzWWxLZGR1YXRSNjZ1ZiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1731134774),
('2dmoyAqwvsoEhjNdoH3rJFqHncFxBlWixoqV1M1H', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiczdKWWFwN25FNUJYMTEzS3dxbGVFU2dGbXdHYVVRSWtBTWxwNzZkaSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1731138782),
('3bmiPrS1OCLFG43U6s9eAVwxIXj3wDxVoJsvM2hz', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiNkpXcWVtZTQ0THZjUXB6M0ZjaWc1VjlaUDZQdEV3czFXNkxCdUFFcCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1731134896),
('3KNdPk7Q50gMCmeEZxlsiJqUDhTwoTjdqNqlA7zD', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiNWxMU0hOa3BhVTJTVkFiY2o4WXlNVFNOdlhBdWh6SjRDdmhPUWNZQyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9kYXNoYm9hcmQiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1731139683),
('3nQ3A03fXyYVVCRsmZJtmVji7vJT3LtipP15OkjM', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiSkJWSHM2UFhaS252ZTc0VWhMVlVZTVZTUnZpbVcxcWcyM3NTRzg2ViI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1731134611),
('4mFTVmdEzeJT6eexnxyAfXxH4gsztYdFHy9SKATd', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiSFJqWXM2UFlzYnh3eGZCUkpGMEVCZUpNbkdWNVR4S1JrN0pReWU3QyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1731140522),
('4pLuF08HZ1WbxTTQViEzR6YJ80W0Perv2qoAVyIh', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiUUtoU04xazJhaTFXZmxSaUdsM2tqQUxIQlBBR2Y4cjRVczhUMW1ScCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1731141549),
('62uF89umMqSeZuJ0kMDIlE4uiPGWtzNOZAHLyHy5', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoid29WRFl4WXQzd2VpN0l4OHI1ckxmblBGUWM4dWc5cmJRdUtOY0xGeiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1731140248),
('68zk0HX9PUesQyUiAqH04zavihcgZkLY39Msyiv4', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiTVg3UEhyNXJxSkFDRE13SVIwTjVESDZTaW5FdnQxWWtWaHQzV1MxdiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1731141223),
('69BGPZbhKSPbpoA3dMX6JZOQ4Kw0wKT0rhDKOVQA', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiNGI4VldmdmhFSHE4NUxlT1dEemx3NldzUGtpaG1WQXR2bFZkSnpCTCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1731141333),
('6jOLvE4DUyi47ho6hGgHBXH7EaqXuVe5g7tAWbhS', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiMlBSb0NRMlZiZFVTMWJaTXVNMjA0RUppcThLN1E2enZYbGJwcGZOcyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1731139863),
('8C6kdScJaBXW4gyTBWl22Oh6KJO72vTQRJwXgJrT', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoicjg5QlF4TjJMTXZwbUlqUDAwb1VoT242dlZKOUluTGNUb3o5WUpRYiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1731134199),
('8K6Q0NerRwDFiqLSiPdDVkYny3TU45Dm3WYf5hhF', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiN1NCUEN3RHNLSThOaGg0Y3VTUE1BT0RnaWt6ZmY5WWptS1J4QTlHUyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1731140200),
('91pdE8xnqHQUBp5WM7tPaM4t9GrDMWOIxMvYtc5L', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoib0NKS3h0ZmJLVTlrWWFZRUtHMEtKVWw0SzBqUHR3NHBBTzVyQTlndyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1731141077),
('97BPnfR6lWdtUP9rotXCSEuULfMcxgi1xZUSWniu', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiTFo5ZXlKOTFlZ25Sa3NrcUFJZVdxcTUxWlhYdkt1UjhPQW9JT2ladCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1731139525),
('Aahx0xaB77rkduTSEJlgj7W4udTjHo0cLl0pQpry', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiOWdZTG4zbkV3WERnVFhzeU13RGhlZ1E0aFpLTkJiVFlwMEhNSXJIeSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1731140395),
('AaOZhxIhfE1vaHX1CL7kOVbZE2XE9SLQw11PHHqz', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiaml1eXhZTDhCa1RKNGdSdmtNcjFLSUk4SWlWN2tWSUdTaGRDWkZKZyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1731133357),
('AKazEOuW5Uvb8deANIcqtexcH3bDBvK3gtcpLCHx', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiT2hHbUxDOU96MEsyck0yeThDMlhpdEl3NFhxSWF3WFczTVBIQWo2TSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1731140557),
('atbVm5j1a2MwRv5D1udEafuCP06EsAjGg05T8KIr', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiSTd4VFByYm05YTliY3lVYTRuRUdNYTZieWFoVVRQdzN3Nmhhc3hpRyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1731133818),
('aYuI2efzgOrrAvxU3SsPzUKgi6sEVDsWV0qdA5s4', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiMDZRRm5vMFhwdjRNaVRPQml3ckpZZDREUERER1B2eTFpMW84SkJhRSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1731134352),
('b3iJ3nDeLbUhi9V0ABT9hPNMsa5f0o3nSgTRsYGA', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiVVZYbFhPYkpMbGduU1BlWEdoR1RSTTBaNk02U01WajQyZktxencwRiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1731134762),
('bgSHvLHR6y1u8k5fmRE5mt5VZDQ3I8eezpuUoCcR', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoibmp4VHVaRUhjaXY0WDhmSG5zenlNYUhnSlVuQXdrTHJUV1dFSDIzciI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1731140224),
('bIuiwMBDLYnJK58KKIF7d8qIw64uSoQD0wr6Zz1U', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoicHdOR0hNMVJoTFJESURVMjdhWFFGZ3lySmF2NDJPdXhCWWM5ZjZUdSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1731140891),
('bwqEMR1QxQPRv6tQ9rms4eZuRePnK2JvX64xat2z', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiNG5FY0haa2VLYWhqc1BYQmY4RnBXbjN1RWozTmlRVnY5SEhFQU5XViI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1731141472),
('CN8wlPcNFzukOwdlY7BH9YKPCWtJTr3b0rATpnCe', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoidld2NUNkRzY2dzlCSmFpeFFSdnF4SnlhT3ZPUDEzR09FY1doS00xMSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1731139434),
('d7Xl5GsvUhps4hoYw9v74TzarkC5LligEdo2iR6i', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiOGNEbmprUW5zVWoxcXVQWE90R1dSSVNNZHVZclI5bE5GbFFFSDVxdyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1731133832),
('DCcCEpZDOEW3WXhelOYIN0iKXSOuccxHqrxLqJls', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoicTBKWGZQcW5QT2ZPWTU2eWpJamZWSk5PSE1rRmF6TGRjSHNSbko3aiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1731140388),
('DIQIW6tsRRPdExaYVPsi314MfGCLtCRjwYOTYEg4', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiSkZJbmlKUE1hWUhlZXlXeUFGMFJNMlk3elc4Q29LUFQ2czQySkx2biI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1731139245),
('DS59MNN0JRO69OcfMjUstfB3bi4rctql46VtDuYj', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoibWhzTkdVSEtWc3o2U2VPOTZqRHVaRFBydGxwQ1JxSnE1eFR0d3U3bSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1731140918),
('eQwYMiMRzQXAQX4waWZzV6dVHAzaQOZaYul7idxb', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiWkxOR09wYnl5aTg4OTNYa1E4dmdVa3Y2UlFVbHdwT3VkM3h3TXpzZCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1731134098),
('fFSlfcc3Ny55zEly3FsFjlKHfnxu76un6iOEmai5', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiUnJITWRhSjJ3TmZlMVZKWU1jTWdkQ0ZFMURPdGJadHlVNDZ5ck5SMCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1731133852),
('Fjdiq3wM5U93zGLG6sKs6HT7XuTyaBplhyiQdJ7i', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiRWFudnBhZWl4aXZZOXZPZG1ucjE1NTZuWnVLSG1FTUJkUzhraEd5bSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1731137383),
('Gw2N5z3LVUaqElxUQCOjrOnMl1ZyaRvaDKIZaW8J', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoibWlycHQ1UHBlbW82RlFwM21URlFaelJ5eUNKUnFDVDd2T2JYNkxqMyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1731139626),
('GwoCGyzE0QKtWeE0v9eyZPyCJybc7LAeJDOYQOZP', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiQ1lhUmpkRjRxT3A4WGdOeHFRUXJrbHFNemtENVE2UmMwQVBQR0FRUiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1731139334),
('hC2lAmgUZ8B7SSpkpt4IKBADmPjOw7NYssqSilyr', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiOTVFTmhaVWJRT2ZFcEVVdWZqSDVjbENZbTByZ1h1U2M0U0RYVlFXbyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1731134402),
('hI1YDoFRkTXxSmEkGmpNy8S0zH9mnEXKuqrvoB6U', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiMVA0dWFUUloycHJFRmNTbGRQQnRjamRyakVGVHV4ZDlSM1YybE1yMSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1731134711),
('HUf57ADmm4E6HNxDeq0OUjl1uO8hxTrFBUaR2ViM', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoicUJ5WmJqM0lQNDdOeGk3b2pCMDl6NTY2UU1qNk9YSFVYYlhaRGRxVCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1731137371),
('Hvihe4OX30L9Els6UgtsExqSG9GFCsjp9wjbpLFM', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiWEcwWHBkazJFbzNkaGFvd1kzQW45dHNqb3MzcXRuNmRNVVh4bE1saSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1731139985),
('IM8ub7uZI9cp030piJ0NKY4DkOdXPdH3SC9sBQV0', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiOXpJbGtkM2l1Ym5tbVA2QjdFeVlnNHRmSlZMeWs2QTBWNmxnTnJaMCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1731140568),
('IzfaZnOUvB043rYH52K7IISUgUBKKjhNsridA0cN', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoic29PdkphQUtSQVdvcGJjYzZDdTY1V1VDTHBDZmJQTVNuTFNLaUpCdSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1731134679),
('JD0LKLXMRSrz2wl8oc7nABJh2MFFrOm1rrNlSOgl', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiRUpHMU80TmtxR3E1TkZqSGR0dURnRzFGT0U4UUZ1U2VyU1UyM01ERiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1731141354),
('JmBhtKQMfWOeV50cOViOmQEZ4KlZ8LtyRDMOASBa', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36 Edg/130.0.0.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiMTdLaElLaXRIeWxUZG1qR3JXVkhuRGlxc0h5d1FFRDRKdEZuVXp0WCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hYm91dCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1731141715),
('jQEfgVPqCFIdXJP7dNLhuo2LCHnTa3wDFseIKggt', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiOEJOZ2FieFFYbE01M3pUYndiSTVNcVhVUHVhVDZGZjlwMjE2WG5yQyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1731135563),
('LbLz2wwuOvV5Qb4xNTfV9F0GFZVMlZg0b373yCGa', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiWjFhVXdOdklGODU0bUowRXNHZ1o3WFJVSHNMeEtnZGwzSFN4bUpFViI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1731133329),
('Lo8eeJ8DddBvAw7lSgXnSDjcLScbeR9fPP7hM9By', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiN25TMEtUeFhjeHlXRGVGb1dldjBNWU5ZRHlYV1BvbGQ4anFnM282SSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1731138943),
('loSWeooPs5HKa29mSQrL4WzykGNHkxvcaObwmdql', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiMTZkRW0xdktTTzUyVjVaa0dwZm1KSDJxdjlSMjdWRjNKR0tzTnRzVSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1731141139),
('lwRLmN3Uufffat8nvrLct44cF9ZOfYLVvnMnNCon', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiMDdWUEpiQ1dQRzRKb1VoOFNtdndRUjdwOHMxYmhaZzYyNm51WElaZSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1731141589),
('LYNmlV6hbrESboEp6Pczi5aMzz506VKBNsHDjIIF', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiREh5VWNZakdrbEc0eW9jYzR2bWN3NXNEQjhPTXBuRmozc2tYaTI0cSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1731137905),
('oFi02ZSZbMfspv9PuGBwl4TJ4WUa46su6w6vYsWL', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiNWtaTE5kR1RDRW5qNUY0Y1RjemZmcnhObHVsa2NOMXg5bjhiVHY2NyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1731140707),
('OIXxsUGNJ37qCnJKY1hHVsFwBVBNYLaIZAMEsrGQ', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiRnh2NGc2c0dIWnJrTzBGQXZVQ1hqTzRjelp6ZzZWY1pUMDRVTHV1RiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1731139260),
('OrR22YXsyBpZxqNjFoqiJ4xH9qDtL3vhROQymry6', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiekVIQ3RDNW9zMnRDcUg2VE1kWXBGblBiNkdGMW1MMXhvNmRheTdRNiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1731141203),
('OtQCRi1qHbS5b3LalmkYaG94OMJYalyTkTeeQxIj', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoib2V6eFc1RkQzS2xKd3V6ZlF5WEdOMTBuWVl6SlN0RlB0ZW11aUpINiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1731139940),
('Pp6L3sksaAOdx7iB2PfL9ULCJ5UXH5vM3PBLifqS', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoibkZxdFhSRjFWMFJQRmI4Y2JpanFVbUx4b2xRMHFkVzFYQjV1U0tPVCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1731139419),
('PtorYeI2q58qAIkns4KMb0didU1hb35mnrBMyzzj', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoibk13R3oyamdEcXBuTng4MXdRZ3hBcjVVRVRXT1lZMWZBNEhVOHloUCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1731133573),
('puKH4MW0xniurJvp6U8mMWrtV50pudPCyNRa0Iqx', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiOURwcEhEZmlxVUZmTGh2TllIUTR2clMyU2ZicWhXcmlDV2hrS2lMMyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1731139381),
('q4HaijMhxGeNMpv6MxWZjcrZyWQM3QFIE3ajXuv5', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiNU5Tejl2djNsQ25oQlFGWEpWS0xUZUdCZHR0UTFpMWVMUG5uZVBZdSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1731139441),
('q5c6S0Vy0PVJ3kMf9rV5vNhJDd5qch0y8hkwyNWt', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiMlNyMXRtRUVGM1g0OWJYdHg1UGxjOFpPeWZXWEM2NG90dURyN1NKZSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1731134841),
('qhBsiDnCydq2UC3BbsbV6LSAv5VPwHHU342BvGv4', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiYXpLODZQaW1sOXpVa0Z3dW5IbG5JTlF4U3hXdnNNcGJGYVlScTFtNCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1731139402),
('qqHBgKSOk9aC4rCpzhrqXfzQmM8UmQcezZfvDQvW', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiZjV3bDE0bVFSVGhiejJodTMxR2dPZHRsWWRvVEY2ZVdtb1FveXVidSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1731133827),
('RV91MiBtLxZVOOcH4220OMqYKwSpfqP40hW4lcpr', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiUHIzNXVtb2xvdE5QU1pCR01vbnRwTjR0c1FlZ2JZeUFscGdQMlFFbCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1731140125),
('RwYOh3xhqVQhp7A2sYK5ypiu3a8bdat452tpDl9P', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiakJIa0RvQzh2clBBWlViQWxhb3BZT0V4QmFBN2p1SVFrSFJ1amJFTSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1731133983),
('scj3fypCoiFYd3jR69QWAe0oIWhJEFZeOVGPX5ye', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiWTN2aXNybURkWk4yckx2eDFlcFNsbGMxemRGdHBza3dMazVmRFN5aSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1731139669),
('sRd4vZBLPZI4naoOOXapv5oima3xQo9CPf590f7m', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiNmpVTmRmRG5EajBHNXpTZk1sYXZFOGI2R0Z6NjZmdHJrRlNGZjI1diI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1731138717),
('TgUTe618Ag1V4RGLGn8cNMm0aXu3axv86OXZ7pZQ', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiWEF3b1doajNtM2s0bjA0RURXdnNyVm1QcEFVU0NQSTN3aDl6WVFXcSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1731133349),
('tK5zE6UjYGm9p4qLCTPYMHcNxq5ruhtEu6RUSjwl', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoienNhejRGZjVPNUlVcTRFc0xvZDJ5bHhFWkVqenFUekVaSjNtSjlhTSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1731135682),
('TlYqjSz4mgs5UCVPBfqI2ayr3lXpd252dmObEmAq', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiTzRxY3N6dFpNZmVISFo2TEZSWFJkaGI3QlRZVmlaVlEyQVU5bGU0WSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1731134269),
('TsYgUBSvh2SO3hl3hqqBRzCUuFuKbOfmRLvZ1KeS', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiSUlVTmdYUUNzZFFEbXFVZU1ZcFRYUzhMQUJwZ2kxcWVqOXl6ZHQ1RSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1731139875),
('uzgxU8dS77WgBVMRDNWBfuzcKxxkv3cnaStTaY2f', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoia21pMm13OVdBZmhRRmdsSjM5eEdwZG5hcldndWFnR3V4QlpFTENvSCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1731141661),
('V3wyEkrrmvY8EVnR5k7bSOduFYDgm8R2NvwTH25p', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiZDAzdG5sSjhscXhqQU82VlVXYzBPNTV4TWdvNFlselpiVWlLNzdUeiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1731138962),
('Vao2EkigP3VfYKMPnUhJr1jixnnn31ePM9XythMV', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiM0xqZ3Vyb3BuTUp5cURiUVFJYVZraHZuWmFWSUM4eEFZb0JZdXd5ZyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1731134446),
('vYOY4vZXlNvGTqwsONjUP9ikrmWFRsTq0z8zsGvq', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiUnF5MXJxRmVFWDIxdXpNN3ZBWlJhSUJhRGgzRUFxYmwwWkU3MTBRZyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1731135669),
('We5ozS1zfdqX4GBDoyHB7vlsJcIJsVaXO0EKnjkP', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiNTJydFpYbDBOY3RyQ3BWaVYxVkkwVHpEaEZoTDhCUWxyZ0F4bUJtZyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1731141171),
('WXYolFA68jbIwZJtDq2TACl4BQz1dpfYew0vIYYX', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiMkhlUzRCYk5ENkU4UFpCVEhMV1BXMjI1NnNza01KdzBSdE9IR2pPZCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1731141570),
('XcSuQh5HSFgnW0D5CkwTQd5qcryKYQFB0ZOlljtc', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoieXBQcEpRYzdQYVd0Q3RoVlhEcVFZelVjMWRpb2U0cTB3cjc4aURmUyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1731134018),
('xLpLAWlU84JVYfebY44RBrAeiue7FQ8sewXArGsY', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiVkFOOTdZbm1VakNkNDVTeWVrb09sV2N2bmZ2SEdPaW51WGlFR3E3YSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1731139651),
('Y9tzlthEguhq2r1FrThjN1seZgo5koBp19iFu7Yc', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoieVh0blNqemNYenVDNzBuQld3ZElwd1ZVV041VkM0SkFHeDdzMzVnUCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1731133315),
('YAGMEsaAcnN7iwVKso2hIpEv90AjYaq4v3IDOsAV', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiUTU1U0tnY0hld1hoRnZyV25CRFZjUnY3ZDBPRE9BUll1eVR3MEEydyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1731134481),
('z7ooWm1GSaYjCq50febBj20R4gvydqjxJ26ebyU4', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiRXhxckduWjVtN25HOUxGOEVSQWFsdjhHbmNMZU1aN3FKTXJlNWFFMCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1731134543),
('ZDf1fsd3BZmkdzUe5sLV97ur5eeXME3X4G23EvME', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiUmlNRXdVeUpkQUZiYTlqSmhoVWxBNE54NWhsQjdJSmgxZ2JGUFZ0ciI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1731134160),
('zTAXffI0awoNZ4ifoEjnWhfkUgAXB4gCbYFSyj8n', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiS003SW45Nm5FcUNQemhKTEI0Z0U2cU00cTdwNWxZeGh5UDdtZ3M0QiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1731141450);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'denny', 'denny@gmail.com', NULL, '$2y$12$lMjRCuhki6OJYrpqAqqOdev3z4Wr/uY92uX18P34OFNLEsdzID48K', 'customer', NULL, '2024-11-06 22:13:27', '2024-11-08 07:08:19'),
(3, 'admin', 'admin@gmail.com', NULL, '$2y$12$biCfmGYas3jRwxTYnsmbyet3i6UYqA/KDIH3N7IEAKQWFbzyQ2rki', 'admin', NULL, '2024-11-08 02:19:15', '2024-11-08 02:20:47'),
(4, 'dimas', 'dimas@gmail.com', NULL, '$2y$12$YAwIVVQUgBA7ZqqGkZsfR.smA/9EUPTbUNVvLwr/W2DB/5YcYHiZe', 'customer', NULL, '2024-11-08 06:44:55', '2024-11-08 06:44:55'),
(5, 'koutsura', 'koutsura@gmail.com', NULL, '$2y$12$i3z7yq94AwPO9Qr5KHKA1umUhsNyVYIaTCA4jB20fCacFhc5livSe', 'customer', NULL, '2024-11-09 00:36:30', '2024-11-09 00:36:30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `sale`
--
ALTER TABLE `sale`
  ADD PRIMARY KEY (`sale_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `book_id` (`book_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

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
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sale`
--
ALTER TABLE `sale`
  MODIFY `sale_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `sale`
--
ALTER TABLE `sale`
  ADD CONSTRAINT `sale_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `sale_ibfk_2` FOREIGN KEY (`book_id`) REFERENCES `buku` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
