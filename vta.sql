-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 05, 2024 at 04:00 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vta`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendances`
--

CREATE TABLE `attendances` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` varchar(255) NOT NULL,
  `batch_id` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'Absent',
  `submission_date` date NOT NULL,
  `month_name` varchar(255) NOT NULL,
  `year` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
(24, '2023_11_12_174108_create_student_models_table', 1),
(28, '2014_10_12_000000_create_users_table', 2),
(29, '2014_10_12_100000_create_password_reset_tokens_table', 2),
(30, '2019_08_19_000000_create_failed_jobs_table', 2),
(31, '2019_12_14_000001_create_personal_access_tokens_table', 2),
(32, '2023_11_30_214323_create_slot_models_table', 2),
(33, '2023_12_17_133327_create_students_table', 2),
(34, '2023_12_18_194809_create_attendances_table', 2);

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
-- Table structure for table `slot_models`
--

CREATE TABLE `slot_models` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `batch_name` varchar(255) NOT NULL,
  `total_classes` int(11) NOT NULL,
  `starting_date` date NOT NULL,
  `number_of_students` int(11) NOT NULL,
  `class_time` time NOT NULL,
  `days` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `classes_done` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slot_models`
--

INSERT INTO `slot_models` (`id`, `batch_name`, `total_classes`, `starting_date`, `number_of_students`, `class_time`, `days`, `status`, `classes_done`, `created_at`, `updated_at`) VALUES
(1, 'First', 20, '2023-12-29', 10, '10:00:00', 'Sunday,Tuesday,Thursday', 'active', 0, '2023-12-21 11:30:24', '2023-12-21 11:51:06'),
(2, 'second', 20, '2023-12-29', 10, '17:30:00', 'Saturday,Monday,Wednesday', 'active', 0, '2023-12-21 11:31:00', NULL),
(3, 'test', 20, '2023-12-29', 10, '08:09:00', 'Friday', 'active', 0, '2023-12-21 12:08:08', '2023-12-22 05:56:33');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_name` varchar(255) NOT NULL,
  `father_name` varchar(255) NOT NULL,
  `mother_name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `date_of_birth` date NOT NULL,
  `height` double(8,2) NOT NULL,
  `weight` double(8,2) NOT NULL,
  `mobile_number` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `date_of_joining` date NOT NULL,
  `gender` enum('Male','Female','other') NOT NULL,
  `slot_id` varchar(255) NOT NULL,
  `s_code` varchar(255) NOT NULL,
  `attended_class` int(11) NOT NULL,
  `fees` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `student_name`, `father_name`, `mother_name`, `image`, `address`, `date_of_birth`, `height`, `weight`, `mobile_number`, `email`, `date_of_joining`, `gender`, `slot_id`, `s_code`, `attended_class`, `fees`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Rafi', 'asdas', 'asdf', 'student_image/Rafi.jpg', 'Khilkhet, Dhaka', '2000-05-12', 5.10, 75.00, '13123123', 'rafi@rafi.com', '2023-12-21', 'Male', '1', 'st23446963', 1, 500, 'learning', '2023-12-21 11:40:34', '2023-12-21 11:51:06'),
(2, 'Mithila', 'asdfasdf', 'asdasd', 'student_image/Mithila.jpg', 'mirpur dhaka', '2023-12-22', 5.60, 65.00, '123123', 'mith@mith.com', '2023-12-21', 'Female', '1', 'st23403581', 0, 500, 'dropped', '2023-12-21 11:42:03', '2023-12-21 19:22:44'),
(3, 'Shihab', 'asdfa', 'asdasd', 'student_image/Shihab.jpg', 'uttara, dhaka', '2023-12-01', 5.90, 70.00, '45745745785', 'shihab@shihab.com', '2023-12-21', 'Male', '2', 'st23671833', 0, 500, 'learning', '2023-12-21 11:50:35', NULL),
(4, 'Test1', 'asdfa', 'wqe', 'student_image/Test1.jpg', 'uttara, dhaka', '2023-12-06', 5.70, 75.00, '123123', 'alien@alien.com', '2023-12-21', 'Male', '3', 'st23177934', 19, 800, 'learning', '2023-12-21 12:10:07', '2023-12-22 05:56:33'),
(5, 'Test2', 'qweqwe', 'tyuityui', 'student_image/Test2.jpg', 'Khilkhet, Dhaka', '2023-05-09', 5.90, 75.00, '45745745785', 'alien@alien.com', '2023-12-21', 'Female', '3', 'st23880572', 4, 500, 'learning', '2023-12-21 12:12:09', '2023-12-22 05:56:33');

-- --------------------------------------------------------

--
-- Table structure for table `student_models`
--

CREATE TABLE `student_models` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_name` varchar(255) NOT NULL,
  `father_name` varchar(255) NOT NULL,
  `mother_name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `date_of_birth` date NOT NULL,
  `height` double(8,2) NOT NULL,
  `weight` double(8,2) NOT NULL,
  `mobile_number` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `date_of_joining` date NOT NULL,
  `gender` enum('Male','Female','other') NOT NULL,
  `slot_id` varchar(255) NOT NULL,
  `s_code` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Rafi', 'rafiawes4897@gmail.com', NULL, '$2y$12$suU.SZcW1UXhau7wBNDrkeDB5iUCMHS2Mx/1GKID30AcI/U5zsp5y', NULL, '2023-12-21 10:52:32', '2023-12-21 10:52:32');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendances`
--
ALTER TABLE `attendances`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `slot_models`
--
ALTER TABLE `slot_models`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_models`
--
ALTER TABLE `student_models`
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
-- AUTO_INCREMENT for table `attendances`
--
ALTER TABLE `attendances`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `slot_models`
--
ALTER TABLE `slot_models`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `student_models`
--
ALTER TABLE `student_models`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
