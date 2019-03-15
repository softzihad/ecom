-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 15, 2019 at 06:18 PM
-- Server version: 5.7.19
-- PHP Version: 7.1.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `billing_addresses`
--

CREATE TABLE `billing_addresses` (
  `id` int(10) UNSIGNED NOT NULL,
  `customerID` int(11) DEFAULT NULL,
  `f_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total` int(11) NOT NULL,
  `payment` int(11) NOT NULL DEFAULT '0',
  `delivery` int(11) NOT NULL DEFAULT '0',
  `company` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `notes` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `billing_addresses`
--

INSERT INTO `billing_addresses` (`id`, `customerID`, `f_name`, `l_name`, `phone`, `address`, `post_code`, `city`, `country`, `total`, `payment`, `delivery`, `company`, `notes`, `created_at`, `updated_at`) VALUES
(62, 127001, 'Md.', 'Shovon', '1744132123', 'shibrampur, Pabna-Sadar, Pabna', '6600', 'Pabna', 'Bangladesh', 198, 1, 1, NULL, NULL, '2019-01-15 00:54:46', '2019-01-15 01:33:34'),
(63, 127001, 'Md.', 'Zihad', '1744132123', 'shibrampur, Pabna-Sadar, Pabna', '6600', 'Pabna', 'Bangladesh', 5, 0, 0, NULL, NULL, '2019-01-15 06:07:11', '2019-01-15 06:07:11'),
(64, 127001, 'Md.', 'Zihad', '1744132123', 'shibrampur, Pabna-Sadar, Pabna', '6600', 'Pabna', 'Bangladesh', 5, 0, 0, NULL, NULL, '2019-01-16 09:37:49', '2019-01-16 09:37:50'),
(65, 127001, 'Md.', 'Zihad', '1744132123', 'shibrampur, Pabna-Sadar, Pabna', '6600', 'Pabna', 'Bangladesh', 5, 0, 0, NULL, NULL, '2019-01-16 09:43:19', '2019-01-16 09:43:19'),
(66, 127001, 'Md.', 'Zihad', '1744132123', 'shibrampur, Pabna-Sadar, Pabna', '6600', 'Pabna', 'Bangladesh', 5, 0, 0, NULL, NULL, '2019-01-16 09:44:46', '2019-01-16 09:44:46'),
(67, 127001, 'Md.', 'Zihad', '1744132123', 'shibrampur, Pabna-Sadar, Pabna', '6600', 'Pabna', 'Bangladesh', 5, 0, 0, NULL, NULL, '2019-01-16 09:45:25', '2019-01-16 09:45:25'),
(68, 127001, 'Md.', 'Zihad', '1744132123', 'shibrampur, Pabna-Sadar, Pabna', '6600', 'Pabna', 'Bangladesh', 5, 0, 0, NULL, NULL, '2019-01-16 09:46:14', '2019-01-16 09:46:14'),
(69, 127001, 'Md.', 'Zihad', '1744132123', 'shibrampur, Pabna-Sadar, Pabna', '6600', 'Pabna', 'Bangladesh', 5, 0, 0, NULL, NULL, '2019-01-16 09:52:12', '2019-01-16 09:52:12'),
(70, 127001, 'Md.', 'Zihad', '1744132123', 'shibrampur, Pabna-Sadar, Pabna', '6600', 'Pabna', 'Bangladesh', 5, 0, 0, NULL, NULL, '2019-01-16 09:56:00', '2019-01-16 09:56:00'),
(71, 127001, 'Md.', 'Zihad', '1744132123', 'shibrampur, Pabna-Sadar, Pabna', '6600', 'Pabna', 'Bangladesh', 5, 0, 0, NULL, NULL, '2019-01-16 09:56:51', '2019-01-16 09:56:51'),
(72, 127001, 'Md.', 'Zihad', '1744132123', 'shibrampur, Pabna-Sadar, Pabna', '6600', 'Pabna', 'Bangladesh', 5, 0, 0, NULL, NULL, '2019-01-16 09:57:09', '2019-01-16 09:57:10'),
(73, 127001, 'Md.', 'roton', '1744132123', 'shibrampur, Pabna-Sadar, Pabna', '6600', 'Pabna', 'Bangladesh', 5, 0, 0, NULL, NULL, '2019-01-16 09:57:55', '2019-01-16 09:57:55'),
(74, 127001, 'Md.', 'Raihan', '1744132123', 'Shibgonmj, Nator-Sadar, Nator', '6600', 'Nator', 'Bangladesh', 10, 0, 0, NULL, NULL, '2019-01-16 11:20:52', '2019-01-16 11:20:52'),
(75, 127001, 'Md.', 'Zihad', '1744132123', 'shibrampur, Pabna-Sadar, Pabna', '6600', 'Pabna', 'Bangladesh', 5, 0, 0, NULL, NULL, '2019-01-17 07:11:43', '2019-01-17 07:11:44'),
(76, 127001, 'Md.', 'llihad', '1744132123', 'shibrampur, Pabna-Sadar, Pabna', '6600', 'Pabna', 'Bangladesh', 20, 0, 0, NULL, NULL, '2019-01-17 10:27:52', '2019-01-17 10:27:52'),
(77, 127001, 'Md.', 'shovon2', '1744132123', 'shibrampur, Pabna-Sadar, Pabna', '6600', 'Pabna', 'Bangladesh', 17, 0, 0, NULL, NULL, '2019-01-18 00:20:01', '2019-01-18 00:20:01'),
(78, 127001, 'Md.', 'Zihad', '1744132123', 'shibrampur, Pabna-Sadar, Pabna', '6600', 'Pabna', 'Bangladesh', 30, 0, 0, NULL, NULL, '2019-01-18 01:06:38', '2019-01-18 01:06:38'),
(79, 127001, 'Md.', 'Zihad', '1744132123', 'shibrampur, Pabna-Sadar, Pabna', '6600', 'Pabna', 'Bangladesh', 30, 0, 0, NULL, NULL, '2019-01-18 01:07:02', '2019-01-18 01:07:02'),
(80, 127001, 'Md.', 'aa', '1744132123', 'shibrampur, Pabna-Sadar, Pabna', '6600', 'Pabna', 'Bangladesh', 0, 0, 0, NULL, NULL, '2019-01-18 06:00:51', '2019-01-18 06:00:51'),
(81, 127001, 'Mahmudul', 'Khan', '01744132123', 'Mirpur-2, Mirpur, Dhaka', '6600', 'Pabna', 'Bangladesh', 5, 0, 0, 'PabnaIT', NULL, '2019-01-18 06:02:55', '2019-01-18 06:02:55'),
(82, 127001, 'Mahmudul', 'Khan', '01744132123', 'Mirpur-2, Mirpur, Dhaka', '6600', 'Pabna', 'Bangladesh', 5, 0, 0, 'PabnaIT', NULL, '2019-01-18 06:03:13', '2019-01-18 06:03:13'),
(83, 127001, 'Mahmudul', 'Khan', '01744132123', 'Mirpur-2, Mirpur, Dhaka', '6600', 'Pabna', 'Bangladesh', 5, 0, 0, 'PabnaIT', NULL, '2019-01-18 06:06:00', '2019-01-18 06:06:00'),
(84, 127001, 'Mahmudul', 'Khan', '01744132123', 'Mirpur-2, Mirpur, Dhaka', '6600', 'Pabna', 'Bangladesh', 20, 0, 0, 'PabnaIT', NULL, '2019-01-18 06:30:29', '2019-01-18 06:30:29'),
(85, 127001, 'Md.', 'Zihad', '1744132123', 'shibrampur, Pabna-Sadar, Pabna', '6600', 'Pabna', 'Bangladesh', 85, 0, 0, NULL, NULL, '2019-01-18 07:04:25', '2019-01-18 07:04:26'),
(86, 127001, 'Md.', 'Zihad', '1744132123', 'shibrampur, Pabna-Sadar, Pabna', '6600', 'Pabna', 'Bangladesh', 85, 0, 0, NULL, NULL, '2019-01-18 07:07:52', '2019-01-18 07:07:52'),
(87, 127001, 'Md.', 'Zihad', '1744132123', 'shibrampur, Pabna-Sadar, Pabna', '6600', 'Pabna', 'Bangladesh', 85, 0, 0, NULL, NULL, '2019-01-18 07:08:51', '2019-01-18 07:08:51'),
(88, 127001, 'Md.', 'Zihad', '1744132123', 'shibrampur, Pabna-Sadar, Pabna', '6600', 'Pabna', 'Bangladesh', 85, 0, 0, NULL, NULL, '2019-01-18 07:09:57', '2019-01-18 07:09:57'),
(89, 127001, 'Md.', 'Zihad', '1744132123', 'shibrampur, Pabna-Sadar, Pabna', '6600', 'Pabna', 'Bangladesh', 85, 0, 0, NULL, NULL, '2019-01-18 07:11:12', '2019-01-18 07:11:12'),
(90, 127001, 'Md.', 'Zihad', '1744132123', 'shibrampur, Pabna-Sadar, Pabna', '6600', 'Pabna', 'Bangladesh', 85, 0, 0, NULL, NULL, '2019-01-18 07:12:12', '2019-01-18 07:12:12'),
(91, 127001, 'Md.', 'Zihad', '1744132123', 'shibrampur, Pabna-Sadar, Pabna', '6600', 'Pabna', 'Bangladesh', 85, 0, 0, NULL, NULL, '2019-01-18 07:14:18', '2019-01-18 07:14:18'),
(92, 127001, 'Md.', 'Zihad', '1744132123', 'shibrampur, Pabna-Sadar, Pabna', '6600', 'Pabna', 'Bangladesh', 85, 0, 0, NULL, NULL, '2019-01-18 07:15:22', '2019-01-18 07:15:22'),
(93, 127001, 'Md.', 'Zihad', '1744132123', 'shibrampur, Pabna-Sadar, Pabna', '6600', 'Pabna', 'Bangladesh', 85, 0, 0, NULL, NULL, '2019-01-18 07:16:01', '2019-01-18 07:16:01'),
(94, 127001, 'Md.', 'Zihad', '1744132123', 'shibrampur, Pabna-Sadar, Pabna', '6600', 'Pabna', 'Bangladesh', 85, 0, 0, NULL, NULL, '2019-01-18 07:16:42', '2019-01-18 07:16:42'),
(95, 127001, 'Md.', 'Zihad', '1744132123', 'shibrampur, Pabna-Sadar, Pabna', '6600', 'Pabna', 'Bangladesh', 85, 0, 0, NULL, NULL, '2019-01-18 07:19:39', '2019-01-18 07:19:39'),
(96, 127001, 'Md.', 'Zihad', '1744132123', 'shibrampur, Pabna-Sadar, Pabna', '6600', 'Pabna', 'Bangladesh', 85, 0, 0, NULL, NULL, '2019-01-18 07:22:16', '2019-01-18 07:22:16'),
(97, 127001, 'Md.', 'Zihad', '1744132123', 'shibrampur, Pabna-Sadar, Pabna', '6600', 'Pabna', 'Bangladesh', 5, 0, 0, NULL, NULL, '2019-01-18 07:26:24', '2019-01-18 07:26:24'),
(98, 127001, 'Md.', 'Zihad', '1744132123', 'shibrampur, Pabna-Sadar, Pabna', '6600', 'Pabna', 'Bangladesh', 5, 0, 0, NULL, NULL, '2019-01-18 07:28:08', '2019-01-18 07:28:09'),
(99, 127001, 'Md.', 'Zihad', '1744132123', 'shibrampur, Pabna-Sadar, Pabna', '6600', 'Pabna', 'Bangladesh', 5, 0, 0, NULL, NULL, '2019-01-18 07:35:51', '2019-01-18 07:35:51'),
(100, 127001, 'Md.', 'Zihad', '1744132123', 'shibrampur, Pabna-Sadar, Pabna', '6600', 'Pabna', 'Bangladesh', 5, 0, 0, NULL, NULL, '2019-01-18 07:38:59', '2019-01-18 07:38:59'),
(101, 127001, 'Md.', 'Zihad', '1744132123', 'shibrampur, Pabna-Sadar, Pabna', '6600', 'Pabna', 'Bangladesh', 5, 0, 0, NULL, NULL, '2019-01-18 07:40:53', '2019-01-18 07:40:53'),
(102, 127001, 'Md.', 'Zihad', '1744132123', 'shibrampur, Pabna-Sadar, Pabna', '6600', 'Pabna', 'Bangladesh', 5, 0, 0, NULL, NULL, '2019-01-18 07:42:16', '2019-01-18 07:42:16'),
(103, 127001, 'Md.', 'Zihad', '1744132123', 'shibrampur, Pabna-Sadar, Pabna', '6600', 'Pabna', 'Bangladesh', 5, 0, 0, NULL, NULL, '2019-01-18 07:52:27', '2019-01-18 07:52:27'),
(104, 127001, 'Mahmudul', 'Khan', '01744132123', 'Mirpur-2, Mirpur, Dhaka', '6600', 'Pabna', 'Bangladesh', 20, 0, 0, 'PabnaIT', NULL, '2019-02-02 14:48:14', '2019-02-02 14:48:14'),
(105, 127001, 'Md.', 'kasem', '1744132123', 'shibrampur, Pabna-Sadar, Pabna', '6600', 'Pabna', 'Bangladesh', 5, 1, 1, NULL, NULL, '2019-03-15 06:48:57', '2019-03-15 06:50:55'),
(106, 127001, 'Md.', 'test', '1744132123', 'shibrampur, Pabna-Sadar, Pabna', '6600', 'admin@gmail.com', 'Bangladesh', 13, 0, 0, NULL, NULL, '2019-03-15 07:18:58', '2019-03-15 07:18:58');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Clothes', 'Clothes', '2018-03-25 09:47:39', '2018-03-25 09:47:39'),
(2, 'Laptop', 'Laptop', '2018-03-25 10:10:57', '2018-03-25 10:10:57'),
(3, 'Mobile', 'Mobile', '2018-03-25 10:11:06', '2018-03-25 10:11:06'),
(4, 'Electronics', 'Electronics', '2018-10-20 06:10:53', '2018-10-20 06:10:53'),
(7, 'Graphics', 'Graphics', '2018-09-18 00:44:24', '2018-09-18 00:44:24');

-- --------------------------------------------------------

--
-- Table structure for table `curencies`
--

CREATE TABLE `curencies` (
  `id` int(10) UNSIGNED NOT NULL,
  `taka` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `curencies`
--

INSERT INTO `curencies` (`id`, `taka`, `created_at`, `updated_at`) VALUES
(1, 80, NULL, '2019-02-13 03:29:15');

-- --------------------------------------------------------

--
-- Table structure for table `customers_registrations`
--

CREATE TABLE `customers_registrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `terms` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `validate_form` date DEFAULT NULL,
  `validate_to` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers_registrations`
--

INSERT INTO `customers_registrations` (`id`, `name`, `email`, `password`, `terms`, `status`, `validate_form`, `validate_to`, `created_at`, `updated_at`) VALUES
(2, 'Kudds Mollah', 'abcd@gmail.com', 'pass123', 0, 0, NULL, NULL, '2018-11-26 04:25:27', '2018-11-26 04:25:27'),
(5, 'Mahmudul Khan', 'user1@gmail.com', '123', 1, 0, NULL, NULL, '2018-11-28 06:50:23', '2019-01-14 09:04:40'),
(6, 'Md. Zihad', 'www.cmtzihad@gmail.com', '12345', 1, 0, NULL, NULL, '2018-11-28 06:53:02', '2018-11-28 06:53:02'),
(7, 'Md. Zihad', 'qeqwq@gmail.com', '123', 1, 0, NULL, NULL, '2019-01-16 09:52:12', '2019-01-16 09:52:12'),
(8, 'Md. Zihad', 'aassd@gmail.com', 'aassd', 1, 0, NULL, NULL, '2019-01-16 09:56:51', '2019-01-16 09:56:51'),
(10, 'Md. roton', 'aa1234@gmail.com', '1234', 1, 0, NULL, NULL, '2019-01-16 09:57:55', '2019-01-16 09:57:55'),
(11, 'Md. Raihan', 'raihan@gmail.com', '123', 1, 0, NULL, NULL, '2019-01-16 11:20:52', '2019-01-16 11:20:52'),
(12, 'Md. Zihad', 'rasel@gmail.com', 'pass123', 1, 0, NULL, NULL, '2019-01-17 07:11:44', '2019-01-17 07:11:44'),
(13, 'Md. llihad', 'lkjlk@gmail.com', '123', 1, 0, NULL, NULL, '2019-01-17 10:27:53', '2019-01-17 10:27:53'),
(14, 'Md. shovon2', 'shovon2l@gmail.com', '123', 1, 0, NULL, NULL, '2019-01-18 00:20:01', '2019-01-18 00:20:01'),
(16, 'Md. Zihad', 'rashel@gmail.com', 'pass123', 1, 0, NULL, NULL, '2019-01-18 01:07:02', '2019-01-18 01:07:02'),
(20, 'Md. Zihad', 'user1669@gmail.com', '123', 1, 0, NULL, NULL, '2019-01-18 07:35:51', '2019-01-18 07:35:51'),
(21, 'Md. Zihad', 'user234@gmail.com', '123', 1, 0, NULL, NULL, '2019-01-18 07:52:26', '2019-01-18 07:52:26'),
(22, 'Md. Alam', 'customer@gmail.com', 'secret', 1, 0, NULL, NULL, '2019-03-15 06:48:57', '2019-03-15 07:16:17');

-- --------------------------------------------------------

--
-- Table structure for table `customer_profiles`
--

CREATE TABLE `customer_profiles` (
  `id` int(10) UNSIGNED NOT NULL,
  `customers_registration_id` int(11) NOT NULL,
  `f_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `post_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customer_profiles`
--

INSERT INTO `customer_profiles` (`id`, `customers_registration_id`, `f_name`, `l_name`, `phone`, `address`, `post_code`, `city`, `country`, `company`, `created_at`, `updated_at`) VALUES
(1, 5, 'Mahmudul', 'Khan', '01744132123', 'Mirpur-2, Mirpur, Dhaka', '6600', 'Pabna', 'Bangladesh', 'PabnaIT', '2018-11-26 02:20:55', '2019-01-15 02:24:51'),
(2, 2, 'dgdg', 'gdffd', '2352352', 'ewtwet', '523', 'dgdg', 'Bangladesh', 'gdgd', '2018-11-26 03:11:18', '2018-11-26 03:11:18'),
(3, 6, 'sdgsdg', 'fdgdf', '55235', 'fgdfgd', 'dfgd', 'gdfg', 'Bangladesh', 'dfgdg', '2018-11-26 04:27:08', '2018-11-26 04:27:08'),
(4, 10, 'Md.', 'roton', NULL, NULL, NULL, NULL, NULL, NULL, '2019-01-16 09:57:55', '2019-01-16 09:57:55'),
(5, 11, 'Md.', 'Raihan', 'Raihan', 'Raihan', 'Raihan', 'Raihan', 'Raihan', NULL, '2019-01-16 11:20:53', '2019-01-16 11:20:53'),
(6, 12, 'Md.', 'Zihad', 'Zihad', 'Zihad', 'Zihad', 'Zihad', 'Zihad', NULL, '2019-01-17 07:11:44', '2019-01-17 07:11:44'),
(7, 13, 'Md.', 'llihad', 'llihad', 'llihad', 'llihad', 'llihad', 'llihad', NULL, '2019-01-17 10:27:53', '2019-01-17 10:27:53'),
(8, 14, 'Md.', 'shovon2', 'shovon2', 'shovon2', 'shovon2', 'shovon2', 'shovon2', NULL, '2019-01-18 00:20:01', '2019-01-18 00:20:01'),
(9, 16, 'Md.', 'Zihad', 'Zihad', 'Zihad', 'Zihad', 'Zihad', 'Zihad', NULL, '2019-01-18 01:07:02', '2019-01-18 01:07:02'),
(10, 20, 'Md.', 'Zihad', 'Zihad', 'Zihad', 'Zihad', 'Zihad', 'Zihad', NULL, '2019-01-18 07:35:51', '2019-01-18 07:35:51'),
(11, 21, 'Md.', 'Zihad', 'Zihad', 'Zihad', 'Zihad', 'Zihad', 'Zihad', NULL, '2019-01-18 07:52:26', '2019-01-18 07:52:26'),
(12, 22, 'Md.', 'Alam', '1744132123', 'shibrampur, Pabna-Sadar, Pabna', '6600', 'Pabna', 'kasem', NULL, '2019-03-15 06:48:57', '2019-03-15 07:16:17');

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
(34, '2018_03_12_181051_create_product_tag_table', 2),
(36, '2018_03_13_115646_create_settings_table', 4),
(58, '2014_10_12_000000_create_users_table', 5),
(59, '2014_10_12_100000_create_password_resets_table', 5),
(60, '2018_02_17_155808_create_categories_table', 5),
(61, '2018_02_17_172402_create_products_table', 5),
(62, '2018_02_27_102100_create_profiles_table', 5),
(63, '2018_03_12_171111_create_tags_table', 5),
(64, '2018_03_12_181843_create_product_tag_table', 5),
(65, '2018_03_17_200422_create_shoppingcart_table', 6),
(66, '2018_03_25_122323_create_customers_table', 6),
(67, '2018_10_08_092402_create_sub_categories_table', 7),
(68, '2018_11_21_134538_email', 8),
(69, '2018_11_21_140643_create_customer_profiles_table', 8),
(70, '2018_11_26_083407_create_customers_registrations_table', 9),
(71, '2018_12_05_102711_create_billing_addresses_table', 10),
(72, '2018_12_13_060430_create_orders_table', 11),
(73, '2018_12_13_111120_create_order_products_table', 12),
(74, '2019_02_02_174554_create_curencies_table', 13),
(75, '2019_02_02_175613_create_curencies_table', 14),
(76, '2019_02_02_182812_create_curencies_table', 15);

-- --------------------------------------------------------

--
-- Table structure for table `order_products`
--

CREATE TABLE `order_products` (
  `id` int(10) UNSIGNED NOT NULL,
  `productID` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `customerID` int(11) DEFAULT NULL,
  `customerIP` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `billing_address_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_products`
--

INSERT INTO `order_products` (`id`, `productID`, `name`, `price`, `quantity`, `customerID`, `customerIP`, `billing_address_id`, `created_at`, `updated_at`) VALUES
(129, 1, 'Blue Polo T-Shirt', 13, 5, 127001, '127.0.0.1', 62, '2019-01-15 00:54:46', '2019-01-15 00:54:46'),
(130, 3, 'Black Polo T-Shirt', 17, 8, 127001, '127.0.0.1', 62, '2019-01-15 00:54:46', '2019-01-15 00:54:46'),
(131, 5, 'Pink Polo T-Shirt', 5, 1, 127001, '127.0.0.1', 63, '2019-01-15 06:07:11', '2019-01-15 06:07:11'),
(132, 5, 'Pink Polo T-Shirt', 5, 1, 127001, '127.0.0.1', 64, '2019-01-16 09:37:50', '2019-01-16 09:37:50'),
(133, 5, 'Pink Polo T-Shirt', 5, 1, 127001, '127.0.0.1', 65, '2019-01-16 09:43:19', '2019-01-16 09:43:19'),
(134, 5, 'Pink Polo T-Shirt', 5, 1, 127001, '127.0.0.1', 66, '2019-01-16 09:44:46', '2019-01-16 09:44:46'),
(135, 5, 'Pink Polo T-Shirt', 5, 1, 127001, '127.0.0.1', 67, '2019-01-16 09:45:25', '2019-01-16 09:45:25'),
(136, 5, 'Pink Polo T-Shirt', 5, 1, 127001, '127.0.0.1', 68, '2019-01-16 09:46:14', '2019-01-16 09:46:14'),
(137, 5, 'Pink Polo T-Shirt', 5, 1, 127001, '127.0.0.1', 69, '2019-01-16 09:52:12', '2019-01-16 09:52:12'),
(138, 5, 'Pink Polo T-Shirt', 5, 1, 127001, '127.0.0.1', 70, '2019-01-16 09:56:00', '2019-01-16 09:56:00'),
(139, 5, 'Pink Polo T-Shirt', 5, 1, 127001, '127.0.0.1', 71, '2019-01-16 09:56:51', '2019-01-16 09:56:51'),
(140, 5, 'Pink Polo T-Shirt', 5, 1, 127001, '127.0.0.1', 72, '2019-01-16 09:57:10', '2019-01-16 09:57:10'),
(141, 5, 'Pink Polo T-Shirt', 5, 1, 127001, '127.0.0.1', 73, '2019-01-16 09:57:55', '2019-01-16 09:57:55'),
(142, 5, 'Pink Polo T-Shirt', 5, 2, 127001, '127.0.0.1', 74, '2019-01-16 11:20:52', '2019-01-16 11:20:52'),
(143, 5, 'Pink Polo T-Shirt', 5, 1, 127001, '127.0.0.1', 75, '2019-01-17 07:11:44', '2019-01-17 07:11:44'),
(144, 4, 'Orange Polo T-Shirt', 20, 1, 127001, '127.0.0.1', 76, '2019-01-17 10:27:53', '2019-01-17 10:27:53'),
(145, 3, 'Black Polo T-Shirt', 17, 1, 127001, '127.0.0.1', 77, '2019-01-18 00:20:01', '2019-01-18 00:20:01'),
(146, 4, 'Orange Polo T-Shirt', 20, 1, 127001, '127.0.0.1', 78, '2019-01-18 01:06:38', '2019-01-18 01:06:38'),
(147, 5, 'Pink Polo T-Shirt', 5, 2, 127001, '127.0.0.1', 78, '2019-01-18 01:06:38', '2019-01-18 01:06:38'),
(148, 4, 'Orange Polo T-Shirt', 20, 1, 127001, '127.0.0.1', 79, '2019-01-18 01:07:02', '2019-01-18 01:07:02'),
(149, 5, 'Pink Polo T-Shirt', 5, 2, 127001, '127.0.0.1', 79, '2019-01-18 01:07:02', '2019-01-18 01:07:02'),
(150, 5, 'Pink Polo T-Shirt', 5, 1, 5, NULL, 82, '2019-01-18 06:03:13', '2019-01-18 06:03:13'),
(151, 5, 'Pink Polo T-Shirt', 5, 1, 5, NULL, 83, '2019-01-18 06:06:01', '2019-01-18 06:06:01'),
(152, 5, 'Pink Polo T-Shirt', 5, 4, 5, NULL, 84, '2019-01-18 06:30:29', '2019-01-18 06:30:29'),
(153, 2, 'Green Polo T-Shirt', 85, 1, 127001, '127.0.0.1', 85, '2019-01-18 07:04:26', '2019-01-18 07:04:26'),
(154, 2, 'Green Polo T-Shirt', 85, 1, 127001, '127.0.0.1', 86, '2019-01-18 07:07:52', '2019-01-18 07:07:52'),
(155, 2, 'Green Polo T-Shirt', 85, 1, 127001, '127.0.0.1', 87, '2019-01-18 07:08:51', '2019-01-18 07:08:51'),
(156, 2, 'Green Polo T-Shirt', 85, 1, 127001, '127.0.0.1', 88, '2019-01-18 07:09:57', '2019-01-18 07:09:57'),
(157, 2, 'Green Polo T-Shirt', 85, 1, 127001, '127.0.0.1', 89, '2019-01-18 07:11:13', '2019-01-18 07:11:13'),
(158, 2, 'Green Polo T-Shirt', 85, 1, 127001, '127.0.0.1', 90, '2019-01-18 07:12:12', '2019-01-18 07:12:12'),
(159, 2, 'Green Polo T-Shirt', 85, 1, 127001, '127.0.0.1', 91, '2019-01-18 07:14:18', '2019-01-18 07:14:18'),
(160, 2, 'Green Polo T-Shirt', 85, 1, 127001, '127.0.0.1', 92, '2019-01-18 07:15:22', '2019-01-18 07:15:22'),
(161, 2, 'Green Polo T-Shirt', 85, 1, 127001, '127.0.0.1', 93, '2019-01-18 07:16:02', '2019-01-18 07:16:02'),
(162, 2, 'Green Polo T-Shirt', 85, 1, 127001, '127.0.0.1', 94, '2019-01-18 07:16:42', '2019-01-18 07:16:42'),
(163, 2, 'Green Polo T-Shirt', 85, 1, 127001, '127.0.0.1', 95, '2019-01-18 07:19:39', '2019-01-18 07:19:39'),
(164, 2, 'Green Polo T-Shirt', 85, 1, 127001, '127.0.0.1', 96, '2019-01-18 07:22:16', '2019-01-18 07:22:16'),
(165, 5, 'Pink Polo T-Shirt', 5, 1, 127001, '127.0.0.1', 97, '2019-01-18 07:26:24', '2019-01-18 07:26:24'),
(166, 5, 'Pink Polo T-Shirt', 5, 1, 127001, '127.0.0.1', 98, '2019-01-18 07:28:09', '2019-01-18 07:28:09'),
(167, 5, 'Pink Polo T-Shirt', 5, 1, 127001, '127.0.0.1', 99, '2019-01-18 07:35:51', '2019-01-18 07:35:51'),
(168, 5, 'Pink Polo T-Shirt', 5, 1, 127001, '127.0.0.1', 100, '2019-01-18 07:38:59', '2019-01-18 07:38:59'),
(169, 5, 'Pink Polo T-Shirt', 5, 1, 127001, '127.0.0.1', 101, '2019-01-18 07:40:53', '2019-01-18 07:40:53'),
(170, 5, 'Pink Polo T-Shirt', 5, 1, 127001, '127.0.0.1', 102, '2019-01-18 07:42:16', '2019-01-18 07:42:16'),
(171, 5, 'Pink Polo T-Shirt', 5, 1, 127001, '127.0.0.1', 103, '2019-01-18 07:52:27', '2019-01-18 07:52:27'),
(172, 4, 'Orange Polo T-Shirt', 20, 1, 5, NULL, 104, '2019-02-02 14:48:14', '2019-02-02 14:48:14'),
(173, 5, 'Pink Polo T-Shirt', 5, 1, 127001, '127.0.0.1', 105, '2019-03-15 06:48:57', '2019-03-15 06:48:57'),
(174, 1, 'Blue Polo T-Shirt', 13, 1, 127001, '127.0.0.1', 106, '2019-03-15 07:18:58', '2019-03-15 07:18:58');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('zihad@gmail.com', '$2y$10$Wxk4JFUnVk/LltHLVcSdwO9dD/y.3Lg0.b3lNbgUS0WXlL8Wfa2aO', '2018-10-28 09:07:04'),
('www.cmtzihad@gmail.com', '$2y$10$Z2tA.2syhF3lGHUhNwFKv.GNDZ5Mp3Rmm4TT81bPaL5d9o0ftc1EC', '2018-11-18 09:36:09');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` bigint(20) NOT NULL,
  `discount` int(11) NOT NULL DEFAULT '0',
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(11) NOT NULL,
  `sub_category_id` int(11) NOT NULL,
  `views` int(255) NOT NULL DEFAULT '1',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `slug`, `image`, `price`, `discount`, `description`, `category_id`, `sub_category_id`, `views`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Blue Polo T-Shirt', 'Blue-Polo-T-Shirt', 'uploads/products/1521994829shirt5.jpg', 20, 36, '<p><span style=\"color: rgb(66, 66, 66); font-family: Raleway, Arial, Helvetica, sans-serif; font-size: 16px;\">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia.</span><br></p>', 1, 2, 13, NULL, '2018-03-25 10:20:29', '2019-01-15 00:52:09'),
(2, 'Green Polo T-Shirt', 'Green Polo T-Shirt', 'uploads/products/1522261586shirt2.jpg', 100, 15, '<p><span style=\"color: rgb(66, 66, 66); font-family: Raleway, Arial, Helvetica, sans-serif; font-size: 16px;\">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia.</span><br></p>', 1, 5, 15, NULL, '2018-03-28 12:26:26', '2019-01-18 06:35:52'),
(3, 'Black Polo T-Shirt', 'Black-Polo-T-Shirt', 'uploads/products/1522261643shirt4.jpg', 25, 33, '<p><span style=\"color: rgb(66, 66, 66); font-family: Raleway, Arial, Helvetica, sans-serif; font-size: 16px;\">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia.</span><br></p>', 1, 0, 6, NULL, '2018-03-28 12:27:23', '2019-01-18 06:24:49'),
(4, 'Orange Polo T-Shirt', 'Orange-Polo-T-Shirt', 'uploads/products/1522261748shirt6.jpg', 25, 22, '<p><span style=\"color: rgb(66, 66, 66); font-family: Raleway, Arial, Helvetica, sans-serif; font-size: 16px;\">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia.</span><br></p>', 1, 0, 20, NULL, '2018-03-28 12:29:08', '2019-01-18 06:25:08'),
(5, 'Pink Polo T-Shirt', 'Pink-Polo-T-Shirt', 'uploads/products/1522261830shirt7.jpg', 5, 0, '<p><span style=\"color: rgb(66, 66, 66); font-family: Raleway, Arial, Helvetica, sans-serif; font-size: 16px;\">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia.</span><br></p>', 1, 5, 95, NULL, '2018-03-28 12:30:30', '2019-03-15 06:43:10'),
(7, 'test product', 'test-product', 'uploads/products/1540028337wwe hell in a cell.jpg', 100, 0, '<p>&nbsp;gdjg egojeriiiiiiiiiiiiii jdogjerogdjg egojeriiiiiiiiiiiiii jdogjerogdjg egojeriiiiiiiiiiiiii jdogjerogdjg egojeriiiiiiiiiiiiii jdogjerogdjg egojeriiiiiiiiiiiiii jdogjerogdjg egojeriiiiiiiiiiiiii jdogjerogdjg egojeriiiiiiiiiiiiii jdogjero</p>', 2, 3, 1, NULL, '2018-10-20 03:38:57', '2018-10-20 03:51:55'),
(8, 'Men Fashion One', 'Men-Fashion-One', 'uploads/products/1540714926img3.jpg', 100, 0, '<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia.<br></p>', 1, 15, 1, '2018-11-25 03:10:22', '2018-10-28 02:22:06', '2018-11-25 03:10:22'),
(9, 'Women Fashion One', 'Women-Fashion-One', 'uploads/products/1540715200img1.jpg', 150, 0, '<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia.</p><p><br></p><p><br></p><p><br></p>', 1, 16, 1, '2018-11-25 03:10:30', '2018-10-28 02:26:40', '2018-11-25 03:10:30'),
(10, 'ter', 'ter', 'uploads/products/154072413744442305_300486407224459_5070482173107109888_n.png', 342, 0, '<p>gjhgjggy</p>', 1, 5, 1, '2018-10-30 03:51:39', '2018-10-28 04:55:37', '2018-10-30 03:51:39'),
(11, 'Man Full Shirt', 'Man-Full-Shirt', 'uploads/products/1543137601img3.jpg', 45, 0, '<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia.<br></p>', 1, 19, 1, '2019-03-15 07:27:23', '2018-11-25 03:20:01', '2019-03-15 07:27:23'),
(12, 'sfs', 'sfs', 'uploads/products/1544084960frog.png', 232, 0, 'fsfwefwe', 1, 5, 1, '2018-12-06 02:30:04', '2018-12-06 02:29:20', '2018-12-06 02:30:04');

-- --------------------------------------------------------

--
-- Table structure for table `product_tag`
--

CREATE TABLE `product_tag` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `tag_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_tag`
--

INSERT INTO `product_tag` (`id`, `product_id`, `tag_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL),
(2, 2, 1, NULL, NULL),
(3, 2, 2, NULL, NULL),
(5, 3, 1, NULL, NULL),
(6, 3, 2, NULL, NULL),
(7, 3, 3, NULL, NULL),
(8, 4, 1, NULL, NULL),
(9, 4, 2, NULL, NULL),
(10, 5, 1, NULL, NULL),
(11, 5, 2, NULL, NULL),
(13, 6, 1, NULL, NULL),
(14, 6, 2, NULL, NULL),
(15, 7, 2, NULL, NULL),
(16, 7, 3, NULL, NULL),
(17, 8, 1, NULL, NULL),
(18, 8, 2, NULL, NULL),
(19, 9, 1, NULL, NULL),
(20, 9, 2, NULL, NULL),
(21, 12, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE `profiles` (
  `id` int(10) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `about` text COLLATE utf8mb4_unicode_ci,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`id`, `image`, `user_id`, `about`, `facebook`, `youtube`, `created_at`, `updated_at`) VALUES
(1, 'uploads/user/1541430021avatar3.png', 1, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. In iure est nesciunt dolorem doloremque, fugit, temporibus aperiam soluta reiciendis necessitatibus? Dolores, qui, odio. Impedit tempora rem molestias, tenetur omnis iusto.', 'https://www.facebook.com/', 'https://www.youtube.com', '2018-03-25 09:39:35', '2018-11-05 09:00:21'),
(11, 'uploads/user/1541867395avatar.png', 11, NULL, NULL, NULL, '2018-10-28 04:35:16', '2018-11-10 10:29:55'),
(13, 'uploads/user/user_avatar.png', 15, NULL, NULL, NULL, '2018-11-10 10:26:18', '2018-11-10 10:26:18'),
(14, 'uploads/user/1543138388avatar.png', 16, 'myself', 'https://www.facebook.com/', 'https://www.youtube.com/', '2018-11-25 03:31:15', '2018-11-25 03:33:56');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `site_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `favicon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `site_name`, `contact_number`, `contact_email`, `address`, `logo`, `favicon`, `created_at`, `updated_at`) VALUES
(5, 'E-Commerce', '01744-1322123', 'www.cmtziad@gmail.com', 'Dhaka,Bangladesh', 'uploads/settings/1542535826logo11.jpg', 'uploads/settings/1542535826favicon 3.png', '2018-03-25 09:39:35', '2018-11-25 03:39:32');

-- --------------------------------------------------------

--
-- Table structure for table `shoppingcart`
--

CREATE TABLE `shoppingcart` (
  `identifier` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `instance` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`id`, `name`, `slug`, `category_id`, `created_at`, `updated_at`) VALUES
(5, 'Shirt', 'Shirt', 1, '2018-10-22 01:47:02', '2018-10-22 01:47:02'),
(6, 'Pants', 'Pants', 1, '2018-10-22 01:47:10', '2018-10-22 01:47:10'),
(7, 'Tops', 'Tops', 1, '2018-10-22 01:47:16', '2018-10-22 01:47:16'),
(8, 'Frezz', 'Frezz', 1, '2018-10-22 01:47:23', '2018-10-22 01:47:23'),
(9, 'Fan', 'Fan', 4, '2018-10-22 01:47:33', '2018-10-22 01:47:33'),
(10, 'Television', 'Television', 1, '2018-10-22 01:47:43', '2018-10-22 01:47:43');

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` int(10) UNSIGNED NOT NULL,
  `tag` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `tag`, `created_at`, `updated_at`) VALUES
(1, 't-shirt', '2018-03-25 10:16:24', '2018-10-22 02:06:56'),
(2, 'pant', '2018-03-25 10:16:46', '2018-03-25 10:16:46'),
(3, 'hp-laptop', '2018-03-25 10:17:19', '2018-03-25 10:17:19'),
(5, 'Test Tag', '2018-09-18 00:45:10', '2018-09-18 00:45:24');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin` tinyint(1) NOT NULL DEFAULT '0',
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `admin`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'zihad', 'zihad@gmail.com', 1, '$2y$10$rZ.6geqz8003Kl1e00KCVuzdFgpDzbCHdiBgrqFPZX./EHDGXI6/a', 'WqZ7cNBaRZCWoUZh8OyTgUQv9OTZewP9FilMdVHfuU7IFXztK972I3YJBBxF', '2018-03-25 09:39:35', '2018-11-05 09:00:21'),
(11, 'Belal', 'admin@gmail.com', 1, '$2y$10$.PSUFFY5DyEHUrHDdKoUweYpW.rRaiMuxwqQlj27ateUMPcHYSd22', '0Bx6QKVCv1AWnjGf3GyAhHNoee0aEeYJ4LsfT7yuVlIAzY8fLBxS2hyc64Ah', '2018-10-28 04:35:16', '2018-11-10 10:29:55'),
(15, 'Rasel', 'rasel@gmail.com', 0, '$2y$10$rZ.6geqz8003Kl1e00KCVuzdFgpDzbCHdiBgrqFPZX./EHDGXI6/a', 'I9SEpW0IICTd9Dj6kD9BPnhtM4WnnnuW1En7gQvuAezJ9I50NKGBKl44rh8d', '2018-11-10 10:26:18', '2018-11-10 10:26:18'),
(16, 'User', 'user@gmail.com', 0, '$2y$10$.PSUFFY5DyEHUrHDdKoUweYpW.rRaiMuxwqQlj27ateUMPcHYSd22', 'YiHb8b4pPEmXp2iU4GRjp59SzmolnvYFpp1A8giZYNJx7TF9g8hxTcwKSR8X', '2018-11-25 03:31:14', '2019-02-13 03:28:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `billing_addresses`
--
ALTER TABLE `billing_addresses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `curencies`
--
ALTER TABLE `curencies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers_registrations`
--
ALTER TABLE `customers_registrations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `customers_registrations_email_unique` (`email`);

--
-- Indexes for table `customer_profiles`
--
ALTER TABLE `customer_profiles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_products`
--
ALTER TABLE `order_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_tag`
--
ALTER TABLE `product_tag`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shoppingcart`
--
ALTER TABLE `shoppingcart`
  ADD PRIMARY KEY (`identifier`,`instance`);

--
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
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
-- AUTO_INCREMENT for table `billing_addresses`
--
ALTER TABLE `billing_addresses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `curencies`
--
ALTER TABLE `curencies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customers_registrations`
--
ALTER TABLE `customers_registrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `customer_profiles`
--
ALTER TABLE `customer_profiles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `order_products`
--
ALTER TABLE `order_products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=175;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `product_tag`
--
ALTER TABLE `product_tag`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
