-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 16, 2023 at 11:37 PM
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
-- Database: `barangay`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `account_id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`account_id`, `first_name`, `last_name`, `username`, `email`, `password`, `type`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'Privileges', 'administrator', 'admin@gmail.com', '$2y$10$nAPseYdDosvATuhFL7C2buMQYClEjYenx1A1S.b2Bv5ndXRsiPIJy', 'Encoder', NULL, NULL, '2023-10-10 08:07:08'),
(2, 'Max', 'Izrah', 'rojhon', 'rojhon@gmail.com', '$2y$10$/BvB4t4M/hyxrMRuvHJatOhK5o/pieCSVqf.lGjb8fAD8EE5zDikC', 'Admin', NULL, NULL, NULL),
(3, 'Myla', '', '', 'von@gmail.com', '$2y$10$/eJzbvpKPDSHH9vk5JT7K.YbDem0iwc1LFxPKci/M1ftUifS3Hx3S', 'Admin', NULL, NULL, NULL),
(4, 'salen', 'salen', 'salen', 'salen@gmail.com', '$2y$10$TINd3gXSE8ZftXXcI3Y9TutbmV2S.8EFzt1q53M1mFZTAhg.rE/n2', 'Admin', NULL, NULL, NULL),
(5, 'Encoder', 'Encoder', 'Encoder', 'encoder@gmail.com', '$2y$10$4lrz1VU31km5SUU0U65fnuHZKhCg7eq.DC7Rrp8.L2uEgYUgZZu6S', 'Encoder', NULL, NULL, NULL),
(6, 'giann', 'giann', 'giann', 'giann@gmail.com', '$2y$10$Za..mZxQ3xu5s32k1OsYZOhBV5XLk8ryo/duTyvM7y57hYasPTKq2', 'Admin', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `area_settings`
--

CREATE TABLE `area_settings` (
  `area_id` bigint(20) UNSIGNED NOT NULL,
  `area` varchar(255) DEFAULT NULL,
  `population` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `barangayimages`
--

CREATE TABLE `barangayimages` (
  `barangay_id` bigint(20) UNSIGNED NOT NULL,
  `barangay_name` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `city` text DEFAULT NULL,
  `province` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `blotters`
--

CREATE TABLE `blotters` (
  `blotter_id` bigint(20) UNSIGNED NOT NULL,
  `incident_type` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `schedule` varchar(255) DEFAULT NULL,
  `schedule_date` date DEFAULT NULL,
  `date_reported` date DEFAULT NULL,
  `time_reported` time DEFAULT NULL,
  `date_incident` date DEFAULT NULL,
  `time_incident` time DEFAULT NULL,
  `incident_location` varchar(255) DEFAULT NULL,
  `incident_narrative` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blotters`
--

INSERT INTO `blotters` (`blotter_id`, `incident_type`, `status`, `schedule`, `schedule_date`, `date_reported`, `time_reported`, `date_incident`, `time_incident`, `incident_location`, `incident_narrative`, `created_at`, `updated_at`) VALUES
(7, 'Theft', 'Settled', 'Settled', '2023-03-01', '2023-10-12', '01:05:00', '2023-10-09', '03:02:00', 'Gensan', 'adasdasdasdasdasdasda', '2023-10-11 10:08:20', '2023-10-13 08:33:18'),
(8, 'Theft', 'Ongoing', 'Schedule', '2023-03-01', '2023-10-07', '01:05:00', '2023-10-09', '03:02:00', 'asdas', 'adasdasdasdasdasdasda', '2023-10-11 10:08:20', '2023-10-11 10:08:20'),
(9, 'Family Quarrel', 'Ongoing', 'Schedule', '2023-03-03', '2023-10-01', '01:05:00', '2023-10-09', '03:02:00', 'Malakas', 'Nag cheat ang asawa kay nag binugo ang yawa', '2023-10-11 10:08:20', '2023-10-13 08:33:41'),
(10, 'theft', 'Ongoing', 'Schedule', '2023-12-22', '0199-09-22', '12:03:00', '2013-02-03', '00:34:00', 'holy', 'dasfafadsf', '2023-10-11 18:40:39', '2023-10-11 18:40:39');

-- --------------------------------------------------------

--
-- Table structure for table `brgy_officials`
--

CREATE TABLE `brgy_officials` (
  `official_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `position` varchar(255) DEFAULT NULL,
  `official_committe` varchar(255) DEFAULT NULL,
  `year_of_service` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brgy_officials`
--

INSERT INTO `brgy_officials` (`official_id`, `name`, `position`, `official_committe`, `year_of_service`) VALUES
(2, 'Luciano Sardido, Sr.', 'Member', 'Members', 5),
(3, 'Rajah Maulana', 'Member', 'Members', 5),
(4, 'Rodney Munar', 'Member', 'Members', 5),
(5, 'Analecto Bagarinao', 'Member', 'Members', 5),
(6, 'Virgilio C. Yway, Sr.', 'Member', 'Members', 5),
(7, 'Fernando Albino', 'Member', 'Members', 5),
(8, 'Deliad Sardido', 'Member', 'Members', 5),
(9, 'Basir Abdullah', 'Member', 'Members', 5),
(10, 'Hamsi Bisaya', 'Member', 'Members', 5),
(11, 'Rajah Maulana', 'Member', 'Members', 5),
(12, 'Rodney Munar', 'Member', 'Members', 5),
(13, 'Analecto Bagarinao', 'Member', 'Members', 5),
(14, 'Virgilio C. Yway, Sr.', 'Member', 'Members', 5),
(15, 'Fernando Albino', 'Member', 'Members', 5),
(16, 'Deliad Sardido', 'Member', 'Members', 5),
(17, 'Basir Abdullah', 'Member', 'Members', 5),
(18, 'Hamsi Bisaya', 'Member', 'Members', 5),
(19, 'Mario Pontuan', 'Member', 'Members', 5),
(20, 'Carmelo Hapulas', 'Member', 'Members', 5);

-- --------------------------------------------------------

--
-- Table structure for table `certificates`
--

CREATE TABLE `certificates` (
  `certificate_id` bigint(20) UNSIGNED NOT NULL,
  `certification_type` varchar(255) DEFAULT NULL,
  `certificate_type` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `certificate_layouts`
--

CREATE TABLE `certificate_layouts` (
  `layout_id` bigint(20) UNSIGNED NOT NULL,
  `logo_1` varchar(255) DEFAULT NULL,
  `logo_2` varchar(255) DEFAULT NULL,
  `punongbarangay` varchar(255) DEFAULT NULL,
  `municipality` varchar(255) DEFAULT NULL,
  `province` varchar(255) DEFAULT NULL,
  `barangay` varchar(255) DEFAULT NULL,
  `office` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `certificate_lists`
--

CREATE TABLE `certificate_lists` (
  `certificate_list_id` bigint(20) UNSIGNED NOT NULL,
  `content_1` varchar(255) DEFAULT NULL,
  `content_2` varchar(255) DEFAULT NULL,
  `content_3` varchar(255) DEFAULT NULL,
  `certificate_name` varchar(255) DEFAULT NULL,
  `price` bigint(20) UNSIGNED DEFAULT NULL,
  `certificate_type` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `certificate_requests`
--

CREATE TABLE `certificate_requests` (
  `request_id` bigint(20) UNSIGNED NOT NULL,
  `resident_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `age` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `paid` varchar(255) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `cert_id` bigint(20) UNSIGNED NOT NULL,
  `request_type` varchar(255) DEFAULT NULL,
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
(1, '2021_02_17_231936_create_resident_infos_table', 1),
(2, '2021_02_17_232321_create_brgy_officials_table', 1),
(3, '2021_02_18_112628_create_accounts_table', 1),
(4, '2021_02_18_112643_create_sessions_table', 1),
(5, '2021_02_19_054942_create_blotters_table', 1),
(6, '2021_02_19_055700_create_person_involves_table', 1),
(7, '2021_02_19_065424_create_area_settings_table', 1),
(8, '2021_02_23_024826_create_books_table', 1),
(9, '2021_03_07_085729_create_barangayimages_table', 1),
(10, '2021_03_13_003912_create_certificates_table', 1),
(11, '2021_03_13_003938_create_certificate_lists_table', 1),
(12, '2021_03_13_005054_create_resident_accounts_table', 1),
(13, '2021_03_13_024110_create_certificate_layouts_table', 1),
(14, '2021_03_14_010425_create_certificate_requests_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `person_involves`
--

CREATE TABLE `person_involves` (
  `person_id` bigint(20) UNSIGNED NOT NULL,
  `blotter_id` bigint(20) UNSIGNED NOT NULL,
  `resident_id` bigint(20) UNSIGNED NOT NULL,
  `person_involve` varchar(255) DEFAULT NULL,
  `involvement_type` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `person_involves`
--

INSERT INTO `person_involves` (`person_id`, `blotter_id`, `resident_id`, `person_involve`, `involvement_type`, `created_at`, `updated_at`) VALUES
(48, 10, 9, 'Arafat', 'Complainant', '2023-10-11 18:40:39', '2023-10-11 18:40:39'),
(50, 10, 9, 'Jonas', 'Respondent', '2023-10-11 18:40:39', '2023-10-11 18:40:39');

-- --------------------------------------------------------

--
-- Table structure for table `resident_accounts`
--

CREATE TABLE `resident_accounts` (
  `resident_account_id` bigint(20) UNSIGNED NOT NULL,
  `resident_id` bigint(20) UNSIGNED DEFAULT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `resident_infos`
--

CREATE TABLE `resident_infos` (
  `resident_id` bigint(20) UNSIGNED NOT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `firstname` varchar(255) DEFAULT NULL,
  `middlename` varchar(255) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `age` bigint(20) UNSIGNED DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `civilstatus` varchar(255) DEFAULT NULL,
  `voterstatus` varchar(255) DEFAULT NULL,
  `birth_of_place` varchar(255) DEFAULT NULL,
  `citizenship` varchar(255) DEFAULT NULL,
  `telephone_no` varchar(255) DEFAULT NULL,
  `mobile_no` varchar(255) DEFAULT NULL,
  `height` varchar(255) DEFAULT NULL,
  `weight` varchar(255) DEFAULT NULL,
  `PAG_IBIG` varchar(255) DEFAULT NULL,
  `PHILHEALTH` varchar(255) DEFAULT NULL,
  `SSS` varchar(255) DEFAULT NULL,
  `TIN` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `spouse` varchar(255) DEFAULT NULL,
  `father` varchar(255) DEFAULT NULL,
  `mother` varchar(255) DEFAULT NULL,
  `area` varchar(255) DEFAULT NULL,
  `address_1` varchar(255) DEFAULT NULL,
  `address_2` varchar(255) DEFAULT NULL,
  `date_registered` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `resident_infos`
--

INSERT INTO `resident_infos` (`resident_id`, `lastname`, `firstname`, `middlename`, `alias`, `birthday`, `age`, `gender`, `civilstatus`, `voterstatus`, `birth_of_place`, `citizenship`, `telephone_no`, `mobile_no`, `height`, `weight`, `PAG_IBIG`, `PHILHEALTH`, `SSS`, `TIN`, `email`, `spouse`, `father`, `mother`, `area`, `address_1`, `address_2`, `date_registered`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'admin@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9, 'choy', 'arafat', NULL, NULL, NULL, NULL, 'Male', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'arafat@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-09-20 18:38:09', '2023-09-20 18:38:09');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `session_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) NOT NULL,
  `login_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`session_id`, `user_id`, `username`, `login_at`) VALUES
(1, 1, 'administrator', '2023-10-10 16:07:08'),
(2, 1, 'administrator', '2023-10-10 16:07:08'),
(3, 1, 'administrator', '2023-10-10 16:07:08'),
(4, 1, 'administrator', '2023-10-10 16:07:08'),
(5, 1, 'administrator', '2023-10-10 16:07:08'),
(6, 1, 'administrator', '2023-10-10 16:07:08'),
(7, 1, 'administrator', '2023-10-10 16:07:08'),
(8, 1, 'administrator', '2023-10-10 16:07:08'),
(9, 1, 'administrator', '2023-10-10 16:07:08'),
(10, 1, 'administrator', '2023-10-10 16:07:08'),
(11, 1, 'administrator', '2023-10-10 16:07:08'),
(12, 1, 'administrator', '2023-10-10 16:07:08'),
(13, 1, 'administrator', '2023-10-10 16:07:08'),
(14, 1, 'administrator', '2023-10-10 16:07:08'),
(15, 1, 'administrator', '2023-10-10 16:07:08'),
(16, 1, 'administrator', '2023-10-10 16:07:08'),
(17, 1, 'administrator', '2023-10-10 16:07:08'),
(18, 1, 'administrator', '2023-10-10 16:07:08'),
(19, 1, 'administrator', '2023-10-10 16:07:08'),
(20, 1, 'administrator', '2023-10-10 16:07:08'),
(21, 1, 'administrator', '2023-10-10 16:07:08'),
(22, 1, 'administrator', '2023-10-10 16:07:08'),
(23, 1, 'administrator', '2023-10-10 16:07:08'),
(24, 1, 'administrator', '2023-10-10 16:07:08'),
(25, 1, 'administrator', '2023-10-10 16:07:08'),
(26, 1, 'administrator', '2023-10-10 16:07:08'),
(27, 1, 'administrator', '2023-10-10 16:07:08'),
(28, 1, 'administrator', '2023-10-10 08:09:54'),
(29, 1, 'administrator', '2023-10-10 11:00:44'),
(30, 1, 'administrator', '2023-10-10 13:02:42'),
(31, 1, 'administrator', '2023-10-10 18:41:27'),
(32, 1, 'administrator', '2023-10-10 18:52:39'),
(33, 1, 'administrator', '2023-10-10 18:58:55'),
(34, 1, 'administrator', '2023-10-10 19:14:42'),
(35, 1, 'administrator', '2023-10-11 07:14:24'),
(36, 1, 'administrator', '2023-10-11 07:36:52'),
(37, 1, 'administrator', '2023-10-11 10:03:31'),
(38, 1, 'administrator', '2023-10-11 10:07:28'),
(39, 1, 'administrator', '2023-10-11 11:03:56'),
(40, 1, 'administrator', '2023-10-11 18:37:38'),
(41, 1, 'administrator', '2023-10-11 18:43:05'),
(42, 1, 'administrator', '2023-10-11 18:47:22'),
(43, 1, 'administrator', '2023-10-11 19:44:54'),
(44, 1, 'administrator', '2023-10-13 05:17:49'),
(45, 1, 'administrator', '2023-10-13 08:18:28'),
(46, 1, 'administrator', '2023-10-15 19:07:04'),
(47, 1, 'administrator', '2023-10-16 05:27:04'),
(48, 1, 'administrator', '2023-10-16 06:07:45');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`account_id`),
  ADD UNIQUE KEY `accounts_username_unique` (`username`),
  ADD UNIQUE KEY `accounts_email_unique` (`email`);

--
-- Indexes for table `area_settings`
--
ALTER TABLE `area_settings`
  ADD PRIMARY KEY (`area_id`);

--
-- Indexes for table `barangayimages`
--
ALTER TABLE `barangayimages`
  ADD PRIMARY KEY (`barangay_id`);

--
-- Indexes for table `blotters`
--
ALTER TABLE `blotters`
  ADD PRIMARY KEY (`blotter_id`);

--
-- Indexes for table `brgy_officials`
--
ALTER TABLE `brgy_officials`
  ADD PRIMARY KEY (`official_id`);

--
-- Indexes for table `certificates`
--
ALTER TABLE `certificates`
  ADD PRIMARY KEY (`certificate_id`);

--
-- Indexes for table `certificate_layouts`
--
ALTER TABLE `certificate_layouts`
  ADD PRIMARY KEY (`layout_id`);

--
-- Indexes for table `certificate_lists`
--
ALTER TABLE `certificate_lists`
  ADD PRIMARY KEY (`certificate_list_id`);

--
-- Indexes for table `certificate_requests`
--
ALTER TABLE `certificate_requests`
  ADD PRIMARY KEY (`request_id`),
  ADD KEY `certificate_requests_resident_id_foreign` (`resident_id`),
  ADD KEY `certificate_requests_cert_id_foreign` (`cert_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `person_involves`
--
ALTER TABLE `person_involves`
  ADD PRIMARY KEY (`person_id`),
  ADD KEY `person_involves_resident_id_foreign` (`resident_id`),
  ADD KEY `person_involves_blotter_id_foreign` (`blotter_id`);

--
-- Indexes for table `resident_accounts`
--
ALTER TABLE `resident_accounts`
  ADD PRIMARY KEY (`resident_account_id`),
  ADD UNIQUE KEY `resident_accounts_resident_id_unique` (`resident_id`),
  ADD UNIQUE KEY `resident_accounts_username_unique` (`username`),
  ADD UNIQUE KEY `resident_accounts_email_unique` (`email`);

--
-- Indexes for table `resident_infos`
--
ALTER TABLE `resident_infos`
  ADD PRIMARY KEY (`resident_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`session_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `account_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `area_settings`
--
ALTER TABLE `area_settings`
  MODIFY `area_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `barangayimages`
--
ALTER TABLE `barangayimages`
  MODIFY `barangay_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `blotters`
--
ALTER TABLE `blotters`
  MODIFY `blotter_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `brgy_officials`
--
ALTER TABLE `brgy_officials`
  MODIFY `official_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `certificates`
--
ALTER TABLE `certificates`
  MODIFY `certificate_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `certificate_layouts`
--
ALTER TABLE `certificate_layouts`
  MODIFY `layout_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `certificate_lists`
--
ALTER TABLE `certificate_lists`
  MODIFY `certificate_list_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `certificate_requests`
--
ALTER TABLE `certificate_requests`
  MODIFY `request_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100000;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `person_involves`
--
ALTER TABLE `person_involves`
  MODIFY `person_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `resident_accounts`
--
ALTER TABLE `resident_accounts`
  MODIFY `resident_account_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `resident_infos`
--
ALTER TABLE `resident_infos`
  MODIFY `resident_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `sessions`
--
ALTER TABLE `sessions`
  MODIFY `session_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `certificate_requests`
--
ALTER TABLE `certificate_requests`
  ADD CONSTRAINT `certificate_requests_cert_id_foreign` FOREIGN KEY (`cert_id`) REFERENCES `certificate_lists` (`certificate_list_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `certificate_requests_resident_id_foreign` FOREIGN KEY (`resident_id`) REFERENCES `resident_accounts` (`resident_account_id`) ON DELETE CASCADE;

--
-- Constraints for table `person_involves`
--
ALTER TABLE `person_involves`
  ADD CONSTRAINT `person_involves_blotter_id_foreign` FOREIGN KEY (`blotter_id`) REFERENCES `blotters` (`blotter_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `person_involves_resident_id_foreign` FOREIGN KEY (`resident_id`) REFERENCES `resident_infos` (`resident_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
