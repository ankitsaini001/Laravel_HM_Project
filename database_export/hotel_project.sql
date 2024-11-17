-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 16, 2024 at 03:13 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `phone` varchar(255) NOT NULL,
  `guest` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `phone`, `guest`, `date`, `time`, `created_at`, `updated_at`) VALUES
(1, '06239550397', '5', '2024-10-25', '10:30', '2024-10-23 11:26:47', '2024-10-23 11:26:47'),
(2, '06239550397', '3', '2024-10-31', '17:16', '2024-10-26 02:12:40', '2024-10-26 02:12:40'),
(3, '06239550397', '5', '2024-11-17', '20:02', '2024-11-16 06:02:09', '2024-11-16 06:02:09');

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `details` longtext DEFAULT NULL,
  `quantity` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `userid` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `title`, `details`, `quantity`, `image`, `price`, `userid`, `created_at`, `updated_at`) VALUES
(12, 'Reiciendis Laborum', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa provident illum officiis fugit laudantium voluptatem sit iste delectus qui ex.', '1', '1728716190.jpg', '5', '2', '2024-11-16 07:08:21', '2024-11-16 07:08:21'),
(13, 'Adipisci Totam', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa provident illum officiis fugit laudantium voluptatem sit iste delectus qui ex.', '1', '1728716264.jpg', '12', '2', '2024-11-16 07:08:27', '2024-11-16 07:08:27'),
(14, 'Adipisci Totam', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa provident illum officiis fugit laudantium voluptatem sit iste delectus qui ex.', '4', '1728716264.jpg', '48', '4', '2024-11-16 07:10:09', '2024-11-16 07:10:09'),
(16, 'Dicta Deserunt', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa provident illum officiis fugit laudantium voluptatem sit iste delectus qui ex.', '10', '1728716286.jpg', '70', '2', '2024-11-16 07:40:17', '2024-11-16 07:40:17'),
(17, 'Adipisci Totam', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa provident illum officiis fugit laudantium voluptatem sit iste delectus qui ex.', '1', '1728716264.jpg', '12', '2', '2024-11-16 07:49:40', '2024-11-16 07:49:40');

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
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `details` longtext DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`id`, `title`, `details`, `price`, `image`, `created_at`, `updated_at`) VALUES
(6, 'Reiciendis Laborum', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa provident illum officiis fugit laudantium voluptatem sit iste delectus qui ex.', '$5', '1728716190.jpg', '2024-10-12 01:26:30', '2024-10-12 01:26:30'),
(7, 'Adipisci Totam', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa provident illum officiis fugit laudantium voluptatem sit iste delectus qui ex.', '$12', '1728716264.jpg', '2024-10-12 01:27:44', '2024-10-12 01:27:44'),
(8, 'Dicta Deserunt', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa provident illum officiis fugit laudantium voluptatem sit iste delectus qui ex.', '$7', '1728716286.jpg', '2024-10-12 01:28:06', '2024-10-12 01:50:40');

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
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2024_09_28_063522_create_sessions_table', 1),
(7, '2024_10_05_182957_create_food_table', 2),
(8, '2024_10_13_163440_create_carts_table', 3),
(9, '2024_10_14_121155_add_userid_field_to_carts', 4),
(10, '2024_10_19_184359_create_orders_table', 5),
(11, '2024_10_23_161826_create_books_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `quantity` varchar(255) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `delivery_status` varchar(255) NOT NULL DEFAULT 'In Progress',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `name`, `email`, `address`, `phone`, `title`, `quantity`, `price`, `image`, `delivery_status`, `created_at`, `updated_at`) VALUES
(4, 'user', 'user@gmail.com', 'loreum Ipsum', '09874102356', 'Dicta Deserunt', '1', '7', '1728716286.jpg', 'Delivered', '2024-10-19 14:20:52', '2024-10-20 03:55:20'),
(5, 'user', 'user@gmail.com', 'loreum Ipsum', '09874102356', 'Adipisci Totam', '4', '48', '1728716264.jpg', 'Delivered', '2024-11-16 06:04:48', '2024-11-16 06:05:06'),
(6, 'loreum', 'user@gmail.com', 'loreum Ipsum', '09874102356', 'Dicta Deserunt', '2', '14', '1728716286.jpg', 'On the way!', '2024-11-16 06:10:39', '2024-11-16 06:10:53');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_reset_tokens`
--

INSERT INTO `password_reset_tokens` (`email`, `token`, `created_at`) VALUES
('admin@gmail.com', '$2y$12$zHzNfyg1oqb8cgs7dWIZgOAIf3NwqgGQdhY6vuvgScaan0Y5BDgdC', '2024-11-16 07:58:59');

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
('wjk1y4TVFVEqKdj9xDFm4olYTNK7xmJIyOHlXsMR', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36 Edg/130.0.0.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiMkpwNE5qb0ZmQnpCSTZ4N1BtVmZDNG9JR0ZSSDNhQ0FrMW9HcU1QciI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fX0=', 1731763753);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `usertype` varchar(255) NOT NULL DEFAULT 'user',
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `two_factor_secret` text DEFAULT NULL,
  `two_factor_recovery_codes` text DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `usertype`, `email`, `phone`, `address`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(2, 'user', 'user', 'user@gmail.com', '09874102356', 'loreum Ipsum', NULL, '$2y$12$9zfYnHYiNbbldO6elkOCMe54.LkxkjpiE.SHxRTHcLXWD2j5a15ku', NULL, NULL, NULL, NULL, NULL, NULL, '2024-09-28 01:24:02', '2024-09-28 01:24:02'),
(3, 'admin', 'admin', 'admin@gmail.com', '09874023563', 'Loreum Ipsum', NULL, '$2y$12$Ohn4zsYzwQwkOIfbGs4DseFzvK9n0qXFRdTXMakfmL/DPcnfbO7rq', NULL, NULL, NULL, NULL, NULL, NULL, '2024-09-28 01:24:36', '2024-09-28 01:24:36'),
(4, 'getafix', 'user', 'ankitsaini594@gmail.com', '06239550397', 'Loreum Ipsum', NULL, '$2y$12$Vu0abkZIULXvcVJzfdVVdeQGjUj2P18oXoeo2e4AfdlozEK8q4xzu', NULL, NULL, NULL, NULL, NULL, NULL, '2024-11-16 05:57:25', '2024-11-16 05:57:25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `food`
--
ALTER TABLE `food`
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
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `food`
--
ALTER TABLE `food`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
