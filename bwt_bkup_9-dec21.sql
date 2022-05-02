-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 09, 2021 at 09:16 AM
-- Server version: 8.0.27-0ubuntu0.20.04.1
-- PHP Version: 7.3.29-1+ubuntu20.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bwt`
--

-- --------------------------------------------------------

--
-- Table structure for table `addresses`
--

CREATE TABLE `addresses` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pincode` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `locality` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `landmark` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `addresses`
--

INSERT INTO `addresses` (`id`, `user_id`, `name`, `mobile`, `pincode`, `locality`, `address`, `city`, `state`, `landmark`, `phone`, `created_at`, `updated_at`) VALUES
(1, 2, 'mukul saini', '08949595984', '301001', 'near bus stand gaytri mandir, road alwar', 'near bus stand gaytri mandir, road alwar', 'ALWAR', 'RAJASTHAN', 'jhdc', '08949595984', '2021-09-04 10:27:35', '2021-09-04 10:27:35');

-- --------------------------------------------------------

--
-- Table structure for table `admission_classes`
--

CREATE TABLE `admission_classes` (
  `id` bigint UNSIGNED NOT NULL,
  `hindi_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `english_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admission_classes`
--

INSERT INTO `admission_classes` (`id`, `hindi_name`, `english_name`, `description`, `active`, `created_at`, `updated_at`) VALUES
(1, 'कक्षा १०', 'Class 10', 'कक्षा १०-Class 10', 1, '2020-08-25 21:31:52', '2020-08-25 22:06:58'),
(2, 'कक्षा 11', 'Class 11', 'कक्षा १०', 1, '2020-08-25 21:46:23', '2020-08-25 22:05:51'),
(3, 'कक्षा १०', 'Class 10', 'Class 10- कक्षा १०', 1, '2020-08-25 21:49:15', '2020-08-25 21:49:15');

-- --------------------------------------------------------

--
-- Table structure for table `advertisers`
--

CREATE TABLE `advertisers` (
  `id` bigint UNSIGNED NOT NULL,
  `company_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_decription` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `advertisers`
--

INSERT INTO `advertisers` (`id`, `company_name`, `company_decription`, `image`, `created_at`, `updated_at`) VALUES
(2, NULL, NULL, '1632215049.jpg', '2021-09-21 09:04:09', '2021-09-21 09:04:09');

-- --------------------------------------------------------

--
-- Table structure for table `auditions`
--

CREATE TABLE `auditions` (
  `id` int NOT NULL,
  `audition_id` varchar(255) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `age` varchar(255) DEFAULT NULL,
  `StreetAddress` varchar(255) DEFAULT NULL,
  `TownCity` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `ZipCode` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `CellPhone` varchar(255) DEFAULT NULL,
  `HomePhone` varchar(255) DEFAULT NULL,
  `cmbActType` varchar(255) DEFAULT NULL,
  `cmbActMembers` varchar(255) DEFAULT NULL,
  `txtProPerformerName` varchar(255) DEFAULT NULL,
  `cmbHoursPerMonth` varchar(255) DEFAULT NULL,
  `txtHoursPerMonthOther` varchar(255) DEFAULT NULL,
  `cmbPerformanceType` varchar(255) DEFAULT NULL,
  `cmbBuskingLength` varchar(255) DEFAULT NULL,
  `txtBuskingLengthOther` varchar(255) DEFAULT NULL,
  `cmbPrivateEvents` varchar(255) DEFAULT NULL,
  `txtPrivateEventsDetails` varchar(255) DEFAULT NULL,
  `Anniversaries` varchar(255) DEFAULT NULL,
  `Birthdays_Parties` varchar(255) DEFAULT NULL,
  `Companies_and_Organizations_Events` varchar(255) DEFAULT NULL,
  `Galleries_and_Restaurants` varchar(255) DEFAULT NULL,
  `Special_Venues` varchar(255) DEFAULT NULL,
  `Sports_Events` varchar(255) DEFAULT NULL,
  `Weddings` varchar(255) DEFAULT NULL,
  `Other_Special_Occasions` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `video` varchar(255) DEFAULT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `position` int UNSIGNED DEFAULT NULL,
  `score` int UNSIGNED DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `auditions`
--

INSERT INTO `auditions` (`id`, `audition_id`, `name`, `age`, `StreetAddress`, `TownCity`, `state`, `ZipCode`, `country`, `Email`, `CellPhone`, `HomePhone`, `cmbActType`, `cmbActMembers`, `txtProPerformerName`, `cmbHoursPerMonth`, `txtHoursPerMonthOther`, `cmbPerformanceType`, `cmbBuskingLength`, `txtBuskingLengthOther`, `cmbPrivateEvents`, `txtPrivateEventsDetails`, `Anniversaries`, `Birthdays_Parties`, `Companies_and_Organizations_Events`, `Galleries_and_Restaurants`, `Special_Venues`, `Sports_Events`, `Weddings`, `Other_Special_Occasions`, `photo`, `video`, `user_id`, `position`, `score`, `status`) VALUES
(11, '97121299-50a6-4102-863a-49c5919da84e', 'Somy kr', '30', 'Malviya Nagar', 'Alwar', 'Arizona', '301001', 'Algeria', 'abhinavkansal001@gmail.com', '123456789', '123456789', '1', NULL, '1', '3', NULL, '80', '10', NULL, 'Yes', '2', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'slider.jpg', 'slider.jpg', 2, NULL, NULL, NULL),
(12, 'fe1e35de-7335-447c-8151-92793386a085', 'Sam', '30', '61/8', 'New York', 'New York', '111111', 'United States', 'shanknagar190@gmail.com', '8285579134', '9458895500', '1', NULL, 'new york', '1', NULL, '80', '10', NULL, 'Yes', 'once a year', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'K. Keller.jpg', 'Artisan_Camera man working.mp4', 13, NULL, 200, NULL),
(13, 'e3b60f7d-eeb6-4684-82f7-a6643f7e672a', 'sam', '32`', '61', 'delhui', 'Utah', '111111', 'United States', 'shashanknagar190@gmail.com', '1111111111', NULL, '1', NULL, 'delhi', '1', NULL, '20', '1', NULL, 'Yes', 'once a year', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 16, NULL, NULL, NULL),
(14, 'fa8c89db-acfe-4d62-80fc-05c9515ea2f9', 'jjjj', '777', 'k777', 'kkk', 'Alabama', '7777', 'Albania', 'k7@b.com', '677777777nn', NULL, '1', NULL, 'GGG', '2', NULL, '20', '3', NULL, 'Yes', 'GG', '1', '1', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 17, NULL, NULL, NULL),
(15, '1e2fa1fc-823f-4009-86b2-c6f85ee06dd1', 'fdf', '44', 'fsf', 'fsdfs', 'Alabama', '5454', 'Albania', 'a11a@jk.com', '656', 'gfgfg', '1', NULL, 'gfg', '2', NULL, '10', '2', NULL, 'No', NULL, '1', NULL, '1', '1', NULL, NULL, NULL, NULL, '360_F_260040900_oO6YW1sHTnKxby4GcjCvtypUCWjnQRg5.jpg', NULL, 19, NULL, NULL, NULL),
(16, '3d777505-0f63-4d22-a969-730e0e0e1cf9', 'bvbvb', '656', 'bbv', 'bff', 'Connecticut', '65656', 'Austria', 'fgg@jj.com', '65', 'fbv', '1', NULL, 'bvbv', '2', NULL, '20', '2', NULL, 'Yes', 'bvbv', '1', '1', NULL, NULL, NULL, NULL, NULL, NULL, '360_F_260040900_oO6YW1sHTnKxby4GcjCvtypUCWjnQRg5.jpg', NULL, 20, NULL, 3000, NULL),
(17, '1c7c849f-247a-4fe2-811a-1ac79f717df4', 'teete', '666', '66yh', 'yyy', 'Alabama', '45555', 'Albania', 'yyy@jj.ll', '66666', 'jjj', '1', NULL, 'jgjgj', '2', NULL, '60', '7', NULL, 'Yes', 'jggj', '1', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 21, NULL, NULL, NULL),
(18, '03e53006-0738-4840-9af8-3c11a57e1c25', 'teete', '666', '66yh', 'yyy', 'Alabama', '45555', 'Albania', 'yyy@jj.llj', '66666', 'jjj', '1', NULL, 'jgjgj', '2', NULL, '60', '7', NULL, 'Yes', 'jggj', '1', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 22, NULL, NULL, NULL),
(19, 'e5633e29-a7a0-4f8a-9bdf-ad5ab6de5190', 'teete', '666', '66yh', 'yyy', 'Alabama', '45555', 'Albania', 'ffyyy@jj.llj', '66666', 'jjj', '1', NULL, 'jgjgj', '2', NULL, '60', '7', NULL, 'Yes', 'jggj', '1', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 23, NULL, NULL, NULL),
(20, 'a18862c0-051f-49cb-9afa-7957f878bb54', 'teete', '666', '66yh', 'yyy', 'Alabama', '45555', 'Albania', 'tffyyy@jj.llj', '66666', 'jjj', '1', NULL, 'jgjgj', '2', NULL, '60', '7', NULL, 'Yes', 'jggj', '1', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 24, NULL, NULL, NULL),
(21, '078614e6-6eb1-4cdf-b342-c8894e209149', 'teete', '666', '66yh', 'yyy', 'Alabama', '45555', 'Albania', 'vtffyyy@jj.llj', '66666', 'jjj', '1', NULL, 'jgjgj', '2', NULL, '60', '7', NULL, 'Yes', 'jggj', '1', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 25, NULL, NULL, NULL),
(22, 'ad866ab9-d7f4-4360-9b79-3447075717f3', 'teete', '666', '66yh', 'yyy', 'Alabama', '45555', 'Albania', 'vtfffyyy@jj.llj', '66666', 'jjj', '1', NULL, 'jgjgj', '2', NULL, '60', '7', NULL, 'Yes', 'jggj', '1', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 26, NULL, NULL, NULL),
(23, 'd971cc49-a36e-4141-85cf-e5ce07033618', 'dsd', '434', 'fsdfs', 'rwerwe', 'Alaska', '546', 'Algeria', 'gty@uu.com', '656', 'fgfg', '1', NULL, 'gdgd', '2', NULL, '20', '3', NULL, 'Yes', 'gdg', '1', NULL, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 27, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `boutiques`
--

CREATE TABLE `boutiques` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `decription` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `boutiques`
--

INSERT INTO `boutiques` (`id`, `user_id`, `name`, `decription`, `image`, `created_at`, `updated_at`) VALUES
(2, 2, 'My Boutique', 'Description', '1630752346.png', '2021-09-04 10:45:46', '2021-09-04 10:45:46');

-- --------------------------------------------------------

--
-- Table structure for table `cart_storage`
--

CREATE TABLE `cart_storage` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cart_data` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cart_storage`
--

INSERT INTO `cart_storage` (`id`, `cart_data`, `created_at`, `updated_at`) VALUES
('2_cart_items', 'a:0:{}', '2021-08-24 16:01:02', '2021-09-11 19:16:02');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `child_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thumbnail` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_order` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `parent_id`, `child_id`, `thumbnail`, `position`, `category_order`, `active`, `created_at`, `updated_at`) VALUES
(1, 'Main Category', 'main_category', '0', '0', 'default.png', '0', NULL, 1, '2021-01-21 12:40:37', '2021-01-21 12:40:37'),
(2, 'Home', 'home', '1', NULL, 'default.png', '1', NULL, NULL, '2021-07-29 17:50:50', '2021-07-29 17:50:50'),
(3, 'Performances', 'performance', '1', NULL, 'default.png', '1', NULL, NULL, '2021-07-29 17:51:16', '2021-07-29 18:25:44'),
(4, 'Weekly Performances', 'weekly-performances', '2', NULL, 'default.png', '2', NULL, NULL, '2021-07-29 17:58:01', '2021-07-29 17:58:01'),
(5, 'State\'s Performances', 'state-s-performances', '2', NULL, 'default.png', '2', NULL, NULL, '2021-07-29 17:58:23', '2021-07-29 17:58:23'),
(6, 'Busking Board Performances', 'busking-board-performances', '2', NULL, 'default.png', '2', NULL, NULL, '2021-07-29 17:58:58', '2021-07-29 17:58:58'),
(7, 'National\'s Performances', 'national-s-performances', '2', NULL, 'default.png', '2', NULL, NULL, '2021-07-29 17:59:11', '2021-07-29 17:59:11'),
(8, 'Recent Performances', 'recent-performances', '3', NULL, 'default.png', '2', NULL, NULL, '2021-07-29 18:00:10', '2021-07-29 18:00:10'),
(9, 'Top-10 Performances', 'top-10-performances', '3', NULL, 'default.png', '2', NULL, NULL, '2021-07-29 18:00:25', '2021-07-29 18:00:25'),
(10, 'Trending Performances', 'trending-performances', '3', NULL, 'default.png', '2', NULL, NULL, '2021-07-29 18:01:56', '2021-07-29 18:01:56'),
(11, 'Busking Board', 'busking-board', '1', NULL, 'default.png', '1', NULL, NULL, '2021-08-01 08:51:28', '2021-08-01 08:51:28'),
(12, 'Performing Artists', 'performing-artists', '11', NULL, 'default.png', '2', NULL, NULL, '2021-08-01 08:51:59', '2021-08-01 08:51:59'),
(13, 'Performers of the Week', 'performers-of-the-week', '12', NULL, 'default.png', '3', NULL, NULL, '2021-08-01 08:52:32', '2021-08-01 08:52:32'),
(14, 'Performers Weekly Winners', 'performers-weekly-winners', '12', NULL, 'default.png', '3', NULL, NULL, '2021-08-01 08:53:07', '2021-08-01 08:53:07'),
(15, 'Top Best Auditions', 'top-best-auditions', '12', NULL, 'default.png', '3', NULL, NULL, '2021-08-01 08:54:53', '2021-08-01 08:54:53'),
(16, 'Top Ranking Performances', 'top-ranking-performances', '12', NULL, 'default.png', '3', NULL, NULL, '2021-08-01 08:55:24', '2021-08-01 08:55:24'),
(17, 'Top Theatrics Performances', 'top-theatrics-performances', '12', NULL, 'default.png', '3', NULL, NULL, '2021-08-01 08:55:47', '2021-08-01 08:55:47'),
(18, 'Top Musicians', 'top-musicians', '12', NULL, 'default.png', '3', NULL, NULL, '2021-08-01 08:56:15', '2021-08-01 08:56:15'),
(19, 'Artisans Performances', 'artisans-performances', '11', NULL, 'default.png', '2', NULL, NULL, '2021-08-01 08:57:34', '2021-08-01 08:57:34'),
(21, 'Artisan of the Week', 'artisan-of-the-week', '19', NULL, 'default.png', '3', NULL, NULL, '2021-08-01 08:59:09', '2021-08-01 08:59:09'),
(22, 'Top Artisan Weekly Winners', 'top-artisan-weekly-winners', '19', NULL, 'default.png', '3', NULL, NULL, '2021-08-01 08:59:38', '2021-08-01 08:59:38'),
(23, 'Top 10 Best Artisan Designs', 'top-10-best-artisan-designs', '19', NULL, 'default.png', '3', NULL, NULL, '2021-08-01 09:00:00', '2021-08-01 09:00:00'),
(24, 'Top 10 Ranking Artisans', 'top-10-ranking-artisans', '19', NULL, 'default.png', '3', NULL, NULL, '2021-08-01 09:00:23', '2021-08-01 09:00:23'),
(25, 'Top Trending Artisans', 'top-trending-artisans', '19', NULL, 'default.png', '3', NULL, NULL, '2021-08-01 09:02:22', '2021-08-01 09:02:22'),
(26, 'Top Artisans Performances', 'top-artisans-performances', '19', NULL, 'default.png', '3', NULL, NULL, '2021-08-01 09:02:49', '2021-08-01 09:02:49'),
(27, 'Trailers', 'trailers', '1', NULL, 'default.png', '1', NULL, NULL, '2021-08-01 09:08:17', '2021-08-01 09:08:17'),
(28, 'Trending Now', 'trending-now', '27', NULL, 'default.png', '2', NULL, NULL, '2021-08-01 09:08:47', '2021-08-01 09:08:47'),
(29, 'New Performances', 'new-performances', '27', NULL, 'default.png', '2', NULL, NULL, '2021-08-01 09:09:33', '2021-08-01 09:09:33'),
(30, 'Popular Videos', 'popular-videos', '27', NULL, 'default.png', '2', NULL, NULL, '2021-08-01 09:09:57', '2021-08-01 09:09:57'),
(31, 'Theatrics', 'theatrics', '27', NULL, 'default.png', '2', NULL, NULL, '2021-08-01 09:10:20', '2021-08-01 09:10:20'),
(32, 'Musicians', 'musicians', '27', NULL, 'default.png', '2', NULL, NULL, '2021-08-01 09:10:47', '2021-08-01 09:10:47'),
(33, 'Infomercials', 'infomercials', '1', NULL, 'default.png', '1', NULL, NULL, '2021-08-01 09:18:57', '2021-08-01 09:18:57'),
(34, 'Boutique Brands', 'boutique-brands', '33', NULL, 'default.png', '2', NULL, NULL, '2021-08-01 09:19:22', '2021-08-01 09:19:22'),
(35, 'Boutique Showcase', 'boutique-showcase', '33', NULL, 'default.png', '2', NULL, NULL, '2021-08-01 09:19:43', '2021-08-01 09:19:43'),
(36, 'Specialty Boutique', 'specialty-boutique', '33', NULL, 'default.png', '2', NULL, NULL, '2021-08-01 09:20:05', '2021-08-01 09:20:05'),
(37, 'Products', 'products', '33', NULL, 'default.png', '2', NULL, NULL, '2021-08-01 09:20:57', '2021-08-01 09:20:57'),
(38, 'Classifieds', 'classifieds', '33', NULL, '1638357658.jpg', '1', NULL, 0, '2021-08-01 09:21:21', '2021-12-01 11:20:58');

-- --------------------------------------------------------

--
-- Table structure for table `category_teacher`
--

CREATE TABLE `category_teacher` (
  `id` bigint UNSIGNED NOT NULL,
  `category_id` int UNSIGNED NOT NULL,
  `teacher_id` int UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category_teacher`
--

INSERT INTO `category_teacher` (`id`, `category_id`, `teacher_id`, `created_at`, `updated_at`) VALUES
(1, 78, 3, NULL, NULL),
(2, 15, 4, NULL, NULL),
(3, 16, 4, NULL, NULL),
(4, 79, 4, NULL, NULL),
(5, 78, 5, NULL, NULL),
(12, 78, 6, NULL, NULL),
(13, 79, 7, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `channel`
--

CREATE TABLE `channel` (
  `id` int NOT NULL,
  `user_id` int NOT NULL,
  `name` varchar(200) NOT NULL,
  `slug` varchar(200) DEFAULT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `channel`
--

INSERT INTO `channel` (`id`, `user_id`, `name`, `slug`, `status`) VALUES
(1, 2, 'Beta Channel', 'beta-channel', 1),
(2, 1, 'Beta Channel', 'beta-channel-1', 1),
(5, 16, 'SAM DIGITAL', 'SAM-DIGITAL', 1),
(6, 17, 'sTAR rED', 'star-red', 1),
(7, 18, 'Babbel76 bb n', 'Babbel76-bb-n', 1),
(8, 19, 'Beta Channel', 'beta-channel-3', 1),
(9, 20, 'Beta Channel', 'beta-channel-4', 1),
(10, 21, 'Bhuj', 'bhuj', 1),
(11, 22, 'Bhuj', 'bhuj-1', 1),
(12, 23, 'Bhuj', 'bhuj-2', 1),
(13, 24, 'Bhuj', 'bhuj-3', 1),
(14, 25, 'Bhuj', 'bhuj-4', 1),
(15, 26, 'Bhuj', 'bhuj-5', 1),
(16, 27, '777', '777', 1),
(17, 16, 'Beta Channel', 'beta-channel-5', 1);

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` bigint UNSIGNED NOT NULL,
  `state_id` int UNSIGNED DEFAULT NULL,
  `hindi_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `english_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `state_id`, `hindi_name`, `english_name`, `description`, `active`, `created_at`, `updated_at`) VALUES
(2, 2, 'नोएडा', 'नोएडा', 'Noida नोएडा', 1, '2020-08-25 20:52:30', '2020-08-25 20:53:19'),
(3, 2, 'मिर्जापुर', 'MIrzapur', 'मिर्जापुर', 1, '2020-08-25 20:52:57', '2020-08-25 20:52:57');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int NOT NULL,
  `comment` varchar(255) DEFAULT NULL,
  `user_id` int DEFAULT NULL,
  `video_id` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `comment`, `user_id`, `video_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'When the comments make you laugh more than the trailer', 2, 1, '2021-07-30 15:47:39', '2021-07-30 15:47:39', NULL),
(2, 'wow', 2, 1, '2021-07-31 06:04:14', '2021-07-31 06:04:14', NULL),
(3, 'wow', 2, 212, '2021-08-03 21:12:44', '2021-08-03 21:12:44', NULL),
(4, 'what a great site', 2, 212, '2021-08-03 21:17:32', '2021-08-03 21:17:32', NULL),
(5, 'oh yes, I like it', 2, 212, '2021-08-03 21:18:06', '2021-08-03 21:18:06', NULL),
(6, 'Anyone out there is having the same issues with this site.', 5, 212, '2021-09-17 23:57:38', '2021-09-17 23:57:38', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `subject`, `created_at`, `updated_at`) VALUES
(1, 'test1', 'test1@gmail.com', 'sfdf', '2021-09-21 08:35:31', '2021-09-21 08:35:31');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` int DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `event_description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `from` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `to` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `venue` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `request_status` smallint NOT NULL DEFAULT '0',
  `request_for` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `user_id`, `name`, `slug`, `event_description`, `from`, `to`, `type`, `venue`, `image`, `request_status`, `request_for`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, NULL, 'Event 2', 'name-events', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean arcu justo, pretium quis viverra non, cursus volutpat dui. Sed venenatis tortor vitae placerat lobortis. Quisque fringilla, sem a sagittis facilisis, erat erat volutpat metus, nec sodales ligula ipsum nec turpis. Nam vestibulum nisl eget quam tristique, finibus placerat odio blandit. Mauris sed augue ac libero scelerisque ultrices vitae in ligula. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Quisque dapibus nulla condimentum, ornare lacus venenatis, condimentum ex. ', '2021-02-01', '2021-02-11', '', '', '1628015571gallery4.jpg', 0, '', '0', '2021-02-21 13:33:11', '2021-02-21 13:45:14', '2021-02-21 13:45:14'),
(2, NULL, 'Event 1', 'name-eventsasdasdas', 'CAPTIVATED PERFORMANCES VIA DIGITAL VIDEOS STREAMING ON TV NETWORK CHANNELS.', '2021-02-01', '2021-02-02', '', '', '1628015571gallery4.jpg', 0, '', '0', '2021-02-21 13:46:12', '2021-02-21 14:13:35', NULL),
(3, NULL, 'Event', 'server-events', 'CAPTIVATED PERFORMANCES VIA DIGITAL VIDEOS STREAMING ON TV NETWORK CHANNELS.', '2021-02-09', '2021-02-05', '', '', '1628015537gallery2.png', 0, '', '0', '2021-02-22 03:02:09', '2021-08-02 16:35:06', NULL),
(5, 2, 'Event', 'event', 'WE ARE ACCEPTING AUDITION VIDEOS FOR OUR STATE & NATIONAL COMPETITIONS.', '2021-08-20', '2021-08-20', 'up_coming', 'Gurugram', '1628015537gallery2.png', 1, '1', '0', '2021-08-03 18:32:17', '2021-08-12 19:01:40', NULL),
(6, 2, 'Event 1', 'event-1', 'CAPTIVATED PERFORMANCES VIA DIGITAL VIDEOS STREAMING ON TV NETWORK CHANNELS.', '2021-08-28', '2021-08-28', 'up_coming', 'Delhi', '1628015571gallery4.jpg', 2, '1', NULL, '2021-08-03 18:32:51', '2021-09-07 06:23:11', '2021-09-07 06:23:11'),
(8, NULL, 'test', 'test', 'test', '2021-09-01', '2021-09-08', 'Up_coming', 'test', NULL, 0, NULL, '1', '2021-09-22 05:05:26', '2021-09-22 05:05:42', '2021-09-22 05:05:42');

-- --------------------------------------------------------

--
-- Table structure for table `event_registrations`
--

CREATE TABLE `event_registrations` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` int NOT NULL,
  `event_id` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `event_registrations`
--

INSERT INTO `event_registrations` (`id`, `user_id`, `event_id`, `created_at`, `updated_at`) VALUES
(1, 2, 5, '2021-08-04 18:00:24', '2021-08-04 18:00:24'),
(2, 2, 6, '2021-08-04 18:02:01', '2021-08-04 18:02:01'),
(3, 6, 3, '2021-09-17 23:31:22', '2021-09-17 23:31:22'),
(4, 13, 2, '2021-10-14 16:20:06', '2021-10-14 16:20:06'),
(5, 13, 3, '2021-10-14 16:20:13', '2021-10-14 16:20:13');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` bigint UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_no` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `first_name`, `last_name`, `subject`, `phone_no`, `email`, `message`, `created_at`, `updated_at`) VALUES
(1, 'test', 'test', 'newtest', '012345678', 'test@gmail.com', 'anykind  of feedback', '2021-09-21 09:57:27', '2021-09-21 09:57:27');

-- --------------------------------------------------------

--
-- Table structure for table `followers`
--

CREATE TABLE `followers` (
  `id` int NOT NULL,
  `user_id` int NOT NULL,
  `follower_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `followers`
--

INSERT INTO `followers` (`id`, `user_id`, `follower_id`) VALUES
(1, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int NOT NULL,
  `user_id` int NOT NULL,
  `image` varchar(200) NOT NULL,
  `sort_order` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `user_id`, `image`, `sort_order`) VALUES
(1, 2, 'download.jpg', NULL),
(2, 2, 'Indy-Headshot-photo.jpg', NULL),
(3, 0, '1630086534.png', 1),
(4, 0, '1630128899.jpg', 2),
(5, 0, '1630128926.jpg', 3),
(6, 0, '1630129236.jpg', 4),
(7, 0, '1630129255.jpg', 5),
(8, 0, '1630129275.jpeg', 6),
(9, 0, '1630129290.jpg', 7),
(10, 0, '1630129302.jpg', 8);

-- --------------------------------------------------------

--
-- Table structure for table `home_banners`
--

CREATE TABLE `home_banners` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thumbnail` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thumbnail_copy` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_banners`
--

INSERT INTO `home_banners` (`id`, `title`, `description`, `thumbnail`, `thumbnail_copy`, `active`, `created_at`, `updated_at`) VALUES
(3, '3', NULL, '2104301709_1612285154_Leading A Company Seminar Facebook Cover.png', '2104301709_1612285154_Leading A Company Seminar Facebook Cover.png', 1, '2021-02-02 16:59:14', '2021-02-03 07:48:19'),
(4, '4', NULL, '1632236195.jpg', '1632236195.jpg', 1, '2021-02-02 16:59:28', '2021-09-21 14:56:35');

-- --------------------------------------------------------

--
-- Table structure for table `internships`
--

CREATE TABLE `internships` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `age` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `skills` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_no` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int DEFAULT NULL,
  `education` varchar(111) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `education_discipline` varchar(1111) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(111) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(111) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zip` varchar(111) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(1111) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int NOT NULL DEFAULT '1' COMMENT '1=pending,2 approved,3=rejected',
  `phone` varchar(111) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dob` varchar(333) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `street_performer` varchar(555) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `talent` varchar(555) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `achievement` varchar(555) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `experience` varchar(555) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `best` varchar(555) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `worse` varchar(555) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `7a` varchar(555) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `7b` varchar(555) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `7c` varchar(555) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `7d` varchar(555) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `7e` varchar(555) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `expectation` varchar(555) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `creative_energy` varchar(555) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `entertainment` varchar(555) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position` varchar(225) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `decription` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `best_street_performer` varchar(222) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `why_include` varchar(555) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `handle_issue` varchar(555) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about_traveling` varchar(555) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `goal` varchar(555) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `experience_details` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `internships`
--

INSERT INTO `internships` (`id`, `name`, `age`, `skills`, `contact_no`, `user_id`, `education`, `education_discipline`, `state`, `city`, `zip`, `address`, `status`, `phone`, `dob`, `street_performer`, `talent`, `achievement`, `experience`, `best`, `worse`, `7a`, `7b`, `7c`, `7d`, `7e`, `expectation`, `creative_energy`, `entertainment`, `position`, `decription`, `best_street_performer`, `why_include`, `handle_issue`, `about_traveling`, `goal`, `experience_details`, `image`, `created_at`, `updated_at`) VALUES
(1, 'test1', NULL, NULL, NULL, 2, 'THE', 'BE', 'UASS', 'TYU', '54545', 'ADDR', 1, '63564364564', '12/04/1991', 'ABO THE ABO THE ABO THE ', 'ABO THE ', 'ABO THE ', '4YR', 'ABO THE ', 'ABO THE ', NULL, NULL, NULL, NULL, NULL, 'ABO THE ', 'ABO THE ', NULL, 'National Judge', 'Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries', 'ABO THE ', 'ABO THE ', 'ABO THE ', 'ABO THE ', 'ABO THE ', 'ABO THE ', '1630751515.jpg', '2021-08-30 12:09:10', '2021-12-08 12:34:34'),
(6, NULL, NULL, 'VBB', NULL, 32, 'Master\'s degree', 'tehe', 'AK', 'ff', '43434', '343', 2, '3434343', '12/04/1991', 'VBB', 'VBB', 'VBB', 'Entertainment, Technology, Social Media', 'VBB', 'VBB', 'yes', 'VBB', 'VBB', NULL, NULL, 'VBB', 'VBB', 'VBB', 'internship', NULL, 'VBB', 'VBB', 'VBB', 'VBB', 'VBB', 'VBBVBBVBBVBB', NULL, '2021-12-04 09:12:57', '2021-12-08 12:51:58');

-- --------------------------------------------------------

--
-- Table structure for table `languages`
--

CREATE TABLE `languages` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '0',
  `thumbnail` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `languages`
--

INSERT INTO `languages` (`id`, `name`, `description`, `active`, `thumbnail`, `created_at`, `updated_at`) VALUES
(1, 'English', NULL, 1, NULL, '2021-01-25 15:12:12', '2021-02-01 11:23:36'),
(2, 'Spanish', NULL, 1, NULL, '2021-01-25 15:12:23', '2021-09-17 23:54:36');

-- --------------------------------------------------------

--
-- Table structure for table `language_teacher`
--

CREATE TABLE `language_teacher` (
  `id` bigint UNSIGNED NOT NULL,
  `language_id` int UNSIGNED NOT NULL,
  `teacher_id` int UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `language_teacher`
--

INSERT INTO `language_teacher` (`id`, `language_id`, `teacher_id`, `created_at`, `updated_at`) VALUES
(1, 1, 3, NULL, NULL),
(2, 2, 3, NULL, NULL),
(3, 1, 4, NULL, NULL),
(4, 1, 5, NULL, NULL),
(11, 1, 6, NULL, NULL),
(12, 1, 7, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `decription` text COLLATE utf8mb4_unicode_ci,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `social_links` text COLLATE utf8mb4_unicode_ci,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `name`, `position`, `image`, `decription`, `type`, `social_links`, `status`, `created_at`, `updated_at`) VALUES
(3, 'Name', 'National Judge', '1628226479.jpg', 'He has won two Academy Awards, for his roles in the mystery drama Mystic River (2003) and the biopic Milk (2008).', 'National’s Judges', '{\"facebook\":\"https:\\/\\/www.youtube.com\\/watch?v=iGZnSZaPj_c\",\"twitter\":\"https:\\/\\/www.youtube.com\\/watch?v=iGZnSZaPj_c\",\"linkedin\":\"https:\\/\\/www.youtube.com\\/watch?v=iGZnSZaPj_c\"}', 1, '2021-08-06 05:07:59', '2021-08-06 05:07:59'),
(4, 'Name', 'National Judge', '1628226554.jpg', 'He has won two Academy Awards, for his roles in the mystery drama Mystic River (2003) and the biopic Milk (2008).', 'National’s Judges', '{\"facebook\":\"https:\\/\\/www.youtube.com\\/watch?v=iGZnSZaPj_c\",\"twitter\":\"https:\\/\\/www.youtube.com\\/watch?v=iGZnSZaPj_c\",\"linkedin\":\"https:\\/\\/www.youtube.com\\/watch?v=iGZnSZaPj_c\"}', 1, '2021-08-06 05:09:14', '2021-08-06 05:09:14'),
(5, 'Name', 'National Judge', '1628226554.jpg', 'He has won two Academy Awards, for his roles in the mystery drama Mystic River (2003) and the biopic Milk (2008).', 'National’s Judges', '{\"facebook\":\"https:\\/\\/www.youtube.com\\/watch?v=iGZnSZaPj_c\",\"twitter\":\"https:\\/\\/www.youtube.com\\/watch?v=iGZnSZaPj_c\",\"linkedin\":\"https:\\/\\/www.youtube.com\\/watch?v=iGZnSZaPj_c\"}', 1, '2021-08-06 05:09:14', '2021-08-06 05:09:14'),
(6, 'Name', 'National Judge', '1628226630.jpg', 'He has won two Academy Awards, for his roles in the mystery drama Mystic River (2003) and the biopic Milk (2008).', 'National’s Judges', '{\"facebook\":\"https:\\/\\/www.youtube.com\\/watch?v=iGZnSZaPj_c\",\"twitter\":\"https:\\/\\/www.youtube.com\\/watch?v=iGZnSZaPj_c\",\"linkedin\":\"https:\\/\\/www.youtube.com\\/watch?v=iGZnSZaPj_c\"}', 1, '2021-08-06 05:10:30', '2021-08-06 05:10:30'),
(7, 'Name', 'National Judge', '1628226685.jpg', 'He has won two Academy Awards, for his roles in the mystery drama Mystic River (2003) and the biopic Milk (2008).', 'National’s Judges', '{\"facebook\":\"https:\\/\\/www.youtube.com\\/watch?v=iGZnSZaPj_c\",\"twitter\":\"https:\\/\\/www.youtube.com\\/watch?v=iGZnSZaPj_c\",\"linkedin\":\"https:\\/\\/www.youtube.com\\/watch?v=iGZnSZaPj_c\"}', 1, '2021-08-06 05:11:25', '2021-08-06 05:11:25'),
(8, 'Name', 'National Judge', '1628226715.jpg', 'He has won two Academy Awards, for his roles in the mystery drama Mystic River (2003) and the biopic Milk (2008).', 'National’s Judges', '{\"facebook\":\"https:\\/\\/www.youtube.com\\/watch?v=iGZnSZaPj_c\",\"twitter\":\"https:\\/\\/www.youtube.com\\/watch?v=iGZnSZaPj_c\",\"linkedin\":\"https:\\/\\/www.youtube.com\\/watch?v=iGZnSZaPj_c\"}', 1, '2021-08-06 05:11:55', '2021-08-06 05:11:55'),
(9, 'Name', 'National Judge', '1628226746.jpg', 'He has won two Academy Awards, for his roles in the mystery drama Mystic River (2003) and the biopic Milk (2008).', 'National’s Judges', '{\"facebook\":\"https:\\/\\/www.youtube.com\\/watch?v=iGZnSZaPj_c\",\"twitter\":\"https:\\/\\/www.youtube.com\\/watch?v=iGZnSZaPj_c\",\"linkedin\":\"https:\\/\\/www.youtube.com\\/watch?v=iGZnSZaPj_c\"}', 1, '2021-08-06 05:12:26', '2021-08-06 05:12:26'),
(10, 'Name', 'National Judge', '1628226791.jpg', 'He has won two Academy Awards, for his roles in the mystery drama Mystic River (2003) and the biopic Milk (2008).', 'National’s Judges', '{\"facebook\":\"https:\\/\\/www.youtube.com\\/watch?v=iGZnSZaPj_c\",\"twitter\":\"https:\\/\\/www.youtube.com\\/watch?v=iGZnSZaPj_c\",\"linkedin\":\"https:\\/\\/www.youtube.com\\/watch?v=iGZnSZaPj_c\"}', 1, '2021-08-06 05:13:11', '2021-08-06 05:13:11'),
(11, 'Name', 'State Judge', '1628227143.jpg', 'He has won two Academy Awards, for his roles in the mystery drama Mystic River (2003) and the biopic Milk (2008).', 'State\'s Judges', '{\"facebook\":\"https:\\/\\/www.youtube.com\\/watch?v=iGZnSZaPj_c\",\"twitter\":\"https:\\/\\/www.youtube.com\\/watch?v=iGZnSZaPj_c\",\"linkedin\":\"https:\\/\\/www.youtube.com\\/watch?v=iGZnSZaPj_c\"}', 1, '2021-08-06 05:19:03', '2021-08-06 05:19:03'),
(12, 'Name', 'State Judge', '1628227173.jpg', 'He has won two Academy Awards, for his roles in the mystery drama Mystic River (2003) and the biopic Milk (2008).', 'State\'s Judges', '{\"facebook\":\"https:\\/\\/www.youtube.com\\/watch?v=iGZnSZaPj_c\",\"twitter\":\"https:\\/\\/www.youtube.com\\/watch?v=iGZnSZaPj_c\",\"linkedin\":\"https:\\/\\/www.youtube.com\\/watch?v=iGZnSZaPj_c\"}', 1, '2021-08-06 05:19:33', '2021-08-06 05:19:33'),
(13, 'Name', 'State Judge', '1628227273.jpg', 'He has won two Academy Awards, for his roles in the mystery drama Mystic River (2003) and the biopic Milk (2008).', 'National’s Judges', '{\"facebook\":\"https:\\/\\/www.youtube.com\\/watch?v=iGZnSZaPj_c\",\"twitter\":\"https:\\/\\/www.youtube.com\\/watch?v=iGZnSZaPj_c\",\"linkedin\":\"https:\\/\\/www.youtube.com\\/watch?v=iGZnSZaPj_c\"}', 1, '2021-08-06 05:21:13', '2021-08-06 05:21:13'),
(14, 'Name', 'State Judge', '1628227308.jpg', 'He has won two Academy Awards, for his roles in the mystery drama Mystic River (2003) and the biopic Milk (2008).', 'State\'s Judges', '{\"facebook\":\"https:\\/\\/www.youtube.com\\/watch?v=iGZnSZaPj_c\",\"twitter\":\"https:\\/\\/www.youtube.com\\/watch?v=iGZnSZaPj_c\",\"linkedin\":\"https:\\/\\/www.youtube.com\\/watch?v=iGZnSZaPj_c\"}', 1, '2021-08-06 05:21:48', '2021-08-06 05:21:48'),
(15, 'Name', 'State Judge', '1628227475.jpg', 'He has won two Academy Awards, for his roles in the mystery drama Mystic River (2003) and the biopic Milk (2008).', 'State\'s Judges', '{\"facebook\":\"https:\\/\\/www.youtube.com\\/watch?v=iGZnSZaPj_c\",\"twitter\":\"https:\\/\\/www.youtube.com\\/watch?v=iGZnSZaPj_c\",\"linkedin\":\"https:\\/\\/www.youtube.com\\/watch?v=iGZnSZaPj_c\"}', 1, '2021-08-06 05:24:35', '2021-08-06 05:24:35'),
(16, 'Name', 'State Judge', '1628227569.jpg', 'He has won two Academy Awards, for his roles in the mystery drama Mystic River (2003) and the biopic Milk (2008).', 'State\'s Judges', '{\"facebook\":\"https:\\/\\/www.youtube.com\\/watch?v=iGZnSZaPj_c\",\"twitter\":\"https:\\/\\/www.youtube.com\\/watch?v=iGZnSZaPj_c\",\"linkedin\":\"https:\\/\\/www.youtube.com\\/watch?v=iGZnSZaPj_c\"}', 1, '2021-08-06 05:26:09', '2021-08-06 05:26:09'),
(17, 'Name', 'State Judge', '1628227594.jpg', 'He has won two Academy Awards, for his roles in the mystery drama Mystic River (2003) and the biopic Milk (2008).', 'State\'s Judges', '{\"facebook\":\"https:\\/\\/www.youtube.com\\/watch?v=iGZnSZaPj_c\",\"twitter\":\"https:\\/\\/www.youtube.com\\/watch?v=iGZnSZaPj_c\",\"linkedin\":\"https:\\/\\/www.youtube.com\\/watch?v=iGZnSZaPj_c\"}', 1, '2021-08-06 05:26:34', '2021-08-06 05:26:34'),
(18, 'Name', 'State Judge', '1628227622.jpg', 'He has won two Academy Awards, for his roles in the mystery drama Mystic River (2003) and the biopic Milk (2008).', 'State\'s Judges', '{\"facebook\":\"https:\\/\\/www.youtube.com\\/watch?v=iGZnSZaPj_c\",\"twitter\":\"https:\\/\\/www.youtube.com\\/watch?v=iGZnSZaPj_c\",\"linkedin\":\"https:\\/\\/www.youtube.com\\/watch?v=iGZnSZaPj_c\"}', 1, '2021-08-06 05:27:02', '2021-08-06 05:27:02'),
(19, 'Name', 'State Judge', '1628227651.jpg', 'He has won two Academy Awards, for his roles in the mystery drama Mystic River (2003) and the biopic Milk (2008).', 'State\'s Judges', '{\"facebook\":\"https:\\/\\/www.youtube.com\\/watch?v=iGZnSZaPj_c\",\"twitter\":\"https:\\/\\/www.youtube.com\\/watch?v=iGZnSZaPj_c\",\"linkedin\":\"https:\\/\\/www.youtube.com\\/watch?v=iGZnSZaPj_c\"}', 1, '2021-08-06 05:27:31', '2021-08-06 05:27:31'),
(20, 'Name', 'National Judge', '1628227677.jpg', 'He has won two Academy Awards, for his roles in the mystery drama Mystic River (2003) and the biopic Milk (2008).', 'State\'s Judges', '{\"facebook\":\"https:\\/\\/www.youtube.com\\/watch?v=iGZnSZaPj_c\",\"twitter\":\"https:\\/\\/www.youtube.com\\/watch?v=iGZnSZaPj_c\",\"linkedin\":\"https:\\/\\/www.youtube.com\\/watch?v=iGZnSZaPj_c\"}', 1, '2021-08-06 05:27:57', '2021-08-06 05:27:57'),
(21, 'Name', 'State Judge', '1628227709.jpg', 'He has won two Academy Awards, for his roles in the mystery drama Mystic River (2003) and the biopic Milk (2008).', 'State\'s Judges', '{\"facebook\":\"https:\\/\\/www.youtube.com\\/watch?v=iGZnSZaPj_c\",\"twitter\":\"https:\\/\\/www.youtube.com\\/watch?v=iGZnSZaPj_c\",\"linkedin\":\"https:\\/\\/www.youtube.com\\/watch?v=iGZnSZaPj_c\"}', 1, '2021-08-06 05:28:29', '2021-08-06 05:28:29'),
(22, 'Name', 'National Judge', '1628228345.jpg', 'He has won two Academy Awards, for his roles in the mystery drama Mystic River (2003) and the biopic Milk (2008).', 'State\'s Judges', '{\"facebook\":\"https:\\/\\/www.youtube.com\\/watch?v=iGZnSZaPj_c\",\"twitter\":\"https:\\/\\/www.youtube.com\\/watch?v=iGZnSZaPj_c\",\"linkedin\":\"https:\\/\\/www.youtube.com\\/watch?v=iGZnSZaPj_c\"}', 1, '2021-08-06 05:39:05', '2021-08-06 05:39:05'),
(23, 'Name', 'Focus Group', '1628228430.jpg', 'He has won two Academy Awards, for his roles in the mystery drama Mystic River (2003) and the biopic Milk (2008).', 'Focus Groups', '{\"facebook\":\"https:\\/\\/www.youtube.com\\/watch?v=iGZnSZaPj_c\",\"twitter\":\"https:\\/\\/www.youtube.com\\/watch?v=iGZnSZaPj_c\",\"linkedin\":\"https:\\/\\/www.youtube.com\\/watch?v=iGZnSZaPj_c\"}', 1, '2021-08-06 05:40:30', '2021-08-06 05:40:30'),
(24, 'Name', 'Focus Group', '1628228474.jpg', 'He has won two Academy Awards, for his roles in the mystery drama Mystic River (2003) and the biopic Milk (2008).', 'Focus Groups', '{\"facebook\":\"https:\\/\\/www.youtube.com\\/watch?v=iGZnSZaPj_c\",\"twitter\":\"https:\\/\\/www.youtube.com\\/watch?v=iGZnSZaPj_c\",\"linkedin\":\"https:\\/\\/www.youtube.com\\/watch?v=iGZnSZaPj_c\"}', 1, '2021-08-06 05:41:14', '2021-08-06 05:41:14'),
(25, 'Name', 'Focus Group', '1628228547.jpg', 'He has won two Academy Awards, for his roles in the mystery drama Mystic River (2003) and the biopic Milk (2008).', 'Focus Groups', '{\"facebook\":\"https:\\/\\/www.youtube.com\\/watch?v=iGZnSZaPj_c\",\"twitter\":\"https:\\/\\/www.youtube.com\\/watch?v=iGZnSZaPj_c\",\"linkedin\":\"https:\\/\\/www.youtube.com\\/watch?v=iGZnSZaPj_c\"}', 1, '2021-08-06 05:42:27', '2021-08-06 05:42:27'),
(26, 'Name', 'Focus Group', '1628228596.jpg', 'He has won two Academy Awards, for his roles in the mystery drama Mystic River (2003) and the biopic Milk (2008).', 'Focus Groups', '{\"facebook\":\"https:\\/\\/www.youtube.com\\/watch?v=iGZnSZaPj_c\",\"twitter\":\"https:\\/\\/www.youtube.com\\/watch?v=iGZnSZaPj_c\",\"linkedin\":\"https:\\/\\/www.youtube.com\\/watch?v=iGZnSZaPj_c\"}', 1, '2021-08-06 05:43:16', '2021-08-06 05:43:16'),
(27, 'Name', 'Focus Group', '1628228640.jpg', 'He has won two Academy Awards, for his roles in the mystery drama Mystic River (2003) and the biopic Milk (2008).', 'Focus Groups', '{\"facebook\":\"https:\\/\\/www.youtube.com\\/watch?v=iGZnSZaPj_c\",\"twitter\":\"https:\\/\\/www.youtube.com\\/watch?v=iGZnSZaPj_c\",\"linkedin\":\"https:\\/\\/www.youtube.com\\/watch?v=iGZnSZaPj_c\"}', 1, '2021-08-06 05:44:00', '2021-08-06 05:44:00'),
(28, 'Name', 'Focus Group', '1628228681.jpg', 'He has won two Academy Awards, for his roles in the mystery drama Mystic River (2003) and the biopic Milk (2008).', 'Focus Groups', '{\"facebook\":\"https:\\/\\/www.youtube.com\\/watch?v=iGZnSZaPj_c\",\"twitter\":\"https:\\/\\/www.youtube.com\\/watch?v=iGZnSZaPj_c\",\"linkedin\":\"https:\\/\\/www.youtube.com\\/watch?v=iGZnSZaPj_c\"}', 1, '2021-08-06 05:44:41', '2021-08-06 05:44:41'),
(29, 'Name', 'Focus Group', '1628228726.jpg', 'He has won two Academy Awards, for his roles in the mystery drama Mystic River (2003) and the biopic Milk (2008).', 'Focus Groups', '{\"facebook\":\"https:\\/\\/www.youtube.com\\/watch?v=iGZnSZaPj_c\",\"twitter\":\"https:\\/\\/www.youtube.com\\/watch?v=iGZnSZaPj_c\",\"linkedin\":\"https:\\/\\/www.youtube.com\\/watch?v=iGZnSZaPj_c\"}', 1, '2021-08-06 05:45:26', '2021-08-06 05:45:26'),
(30, 'Name', 'Focus Group', '1628228757.jpg', 'He has won two Academy Awards, for his roles in the mystery drama Mystic River (2003) and the biopic Milk (2008).', 'Focus Groups', '{\"facebook\":\"https:\\/\\/www.youtube.com\\/watch?v=iGZnSZaPj_c\",\"twitter\":\"https:\\/\\/www.youtube.com\\/watch?v=iGZnSZaPj_c\",\"linkedin\":\"https:\\/\\/www.youtube.com\\/watch?v=iGZnSZaPj_c\"}', 1, '2021-08-06 05:45:57', '2021-08-06 05:45:57'),
(31, 'Name', 'Focus Group', '1628228800.jpg', 'He has won two Academy Awards, for his roles in the mystery drama Mystic River (2003) and the biopic Milk (2008).', 'Focus Groups', '{\"facebook\":\"https:\\/\\/www.youtube.com\\/watch?v=iGZnSZaPj_c\",\"twitter\":\"https:\\/\\/www.youtube.com\\/watch?v=iGZnSZaPj_c\",\"linkedin\":\"https:\\/\\/www.youtube.com\\/watch?v=iGZnSZaPj_c\"}', 1, '2021-08-06 05:46:40', '2021-08-06 05:46:40');

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
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2016_06_01_000001_create_oauth_auth_codes_table', 1),
(4, '2016_06_01_000002_create_oauth_access_tokens_table', 1),
(5, '2016_06_01_000003_create_oauth_refresh_tokens_table', 1),
(6, '2016_06_01_000004_create_oauth_clients_table', 1),
(7, '2016_06_01_000005_create_oauth_personal_access_clients_table', 1),
(8, '2019_08_19_000000_create_failed_jobs_table', 1),
(9, '2020_08_15_112655_create_roles_table', 1),
(10, '2020_08_24_033206_create_admission_classes_table', 1),
(11, '2020_08_24_033252_create_states_table', 1),
(12, '2020_08_24_033314_create_cities_table', 1),
(13, '2020_08_24_033750_create_transaction_histories_table', 1),
(14, '2020_10_31_040515_create_settings_table', 2),
(15, '2021_01_20_154904_create_categories_table', 3),
(16, '2021_01_23_070144_create_teachers_table', 4),
(17, '2021_01_23_071851_create_languages_table', 4),
(19, '2021_01_24_072548_create_home_banners_table', 5),
(20, '2014_10_12_000000_create_users_table', 6),
(21, '2021_02_01_155240_create_language_teacher_table', 7),
(22, '2021_02_01_155518_create_category_teacher_table', 7),
(23, '2021_02_06_050454_add_column_in_categories', 8),
(24, '2021_02_06_061123_create_videos_table', 8),
(25, '2021_02_11_155720_create_topics_table', 9),
(26, '2021_02_12_141914_add_column_in_video_table', 9),
(27, '2021_07_26_150516_create_video_likes_table', 10),
(28, '2021_07_26_150630_create_video_views_table', 10),
(29, '2021_08_04_163852_create_event_registrations_table', 11),
(30, '2021_08_05_065230_create_members_table', 12),
(31, '2021_08_06_063347_create_products_table', 13),
(32, '2021_08_10_065548_create_advertisers_table', 13),
(33, '2021_08_11_061355_create_partners_table', 13),
(34, '2021_08_11_084107_create_sponsors_table', 13),
(35, '2021_08_14_061725_create_boutiques_table', 14),
(36, '2021_08_15_100414_create_internships_table', 14),
(37, '2021_08_16_065902_create_students_table', 14),
(38, '2021_08_17_043848_create_productcategories_table', 15),
(39, '2021_08_18_164129_create_cart_storage_table', 16),
(40, '2021_08_20_092255_create_contacts_table', 17),
(41, '2021_08_20_103114_create_feedback_table', 17),
(42, '2021_08_20_120317_create_reports_table', 17),
(43, '2021_08_25_051746_create_usercategories_table', 17),
(44, '2021_08_25_170848_create_orders_table', 18),
(45, '2021_08_25_171331_create_order_items_table', 18),
(46, '2021_09_04_084900_create_addresses_table', 19);

-- --------------------------------------------------------

--
-- Table structure for table `oauth_access_tokens`
--

CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `client_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scopes` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_access_tokens`
--

INSERT INTO `oauth_access_tokens` (`id`, `user_id`, `client_id`, `name`, `scopes`, `revoked`, `created_at`, `updated_at`, `expires_at`) VALUES
('00a810fb42c36ebebf7e31899f973a90ff9c20925acc81f2357f504ada5664b02aae27b24f8c5572', 2, 1, 'MyApp', '[]', 0, '2021-02-07 14:25:25', '2021-02-07 14:25:25', '2021-03-07 14:25:25'),
('1616f13b4e949051b55f7d191b776ad24ddaa788236a9533633ac8d69447659d196582da53f8a256', 5, 1, 'MyApp', '[]', 0, '2021-01-29 05:57:05', '2021-01-29 05:57:05', '2021-03-01 05:57:04'),
('1b9d8a2cfbdfd028bb4fc661117e2669c32dc0f6eb6be0bb02c88c42646849ba4589ae23ac0ccc4d', 4, 1, 'MyApp', '[]', 0, '2021-01-31 07:45:37', '2021-01-31 07:45:37', '2021-03-03 07:45:36'),
('1cb5e29309fa3ac21f9e0d4f9bfbdbd9f1d2856b0149a6c32485f0b7bba18e22dcf158a18ce1e731', 4, 1, 'MyApp', '[]', 0, '2021-01-30 14:44:11', '2021-01-30 14:44:11', '2021-03-02 14:44:11'),
('2161d1b6899d4101218c17178a34102c572bcb1a119433345e1cc15216dfd8d0f9f2a53f5a38c1ff', 8, 1, 'MyApp', '[]', 0, '2021-02-02 17:14:22', '2021-02-02 17:14:22', '2021-03-02 17:14:22'),
('27b77a29b215652899ac372c2982914a53d8bf57a395e10372ff9150f6ddeee7278348713627c9d2', 6, 1, 'MyApp', '[]', 0, '2021-01-31 17:22:28', '2021-01-31 17:22:28', '2021-03-03 17:22:28'),
('380383bae31ead5c272a14962ee24caf4875d52791aa63c9a5496a0352b08832726a43b6bcfb3541', 7, 1, 'MyApp', '[]', 0, '2021-02-02 17:14:18', '2021-02-02 17:14:18', '2021-03-02 17:14:18'),
('38ed4381aea83628597c3e5021e93f7fb1e8754ef1b96c2615138d10fe0dda8886ed20a238b30342', 1, 1, 'MyApp', '[]', 0, '2021-02-01 16:56:01', '2021-02-01 16:56:01', '2021-03-01 16:56:01'),
('42175cb11581c34af899c02e7b925942d136cb56b36d0e87336641bfcc6a140701fa7d0a58bd36e3', 10, 1, 'MyApp', '[]', 0, '2021-02-02 17:51:31', '2021-02-02 17:51:31', '2021-03-02 17:51:31'),
('48a947633e221d2c2d81260f2273a49c42db815b4538ec3d972c7a7a452d9498465fe4fc7b68d1ca', 4, 1, 'MyApp', '[]', 0, '2021-02-11 06:36:12', '2021-02-11 06:36:12', '2021-03-11 06:36:11'),
('4d61c9ad54433dd52f319ff06732613123e0bf60ecb5143bef851dd1ec339a4a48708a71e1203144', 6, 1, 'MyApp', '[]', 0, '2021-02-02 17:10:51', '2021-02-02 17:10:51', '2021-03-02 17:10:50'),
('4f8df59d279861b6b78a9533812e4a8f7efac55d9c5109e30086e5ac6c0ef81680194c374e430efd', 5, 1, 'MyApp', '[]', 0, '2021-01-30 07:00:17', '2021-01-30 07:00:17', '2021-03-02 07:00:17'),
('5d9ef0c4cb0f74fe5764228e08f9d3f3e29e087c602e738611aa64f6ffa9270090ca2173f16348db', 6, 1, 'MyApp', '[]', 0, '2021-01-30 15:48:02', '2021-01-30 15:48:02', '2021-03-02 15:48:02'),
('619ccb02da911adef87b1191994b99c15977dd2376ce8a04dc1f637cc05d138a4fc631f9d9d2ae0c', 5, 1, 'MyApp', '[]', 0, '2021-01-29 14:14:56', '2021-01-29 14:14:56', '2021-03-01 14:14:56'),
('6262d08577fdd241390073c9d2f72e2bc98bbe955c8b75fdc27e0b9469308127e634c6e6cb5cd131', 10, 1, 'MyApp', '[]', 0, '2021-02-02 17:53:21', '2021-02-02 17:53:21', '2021-03-02 17:53:21'),
('68138687ee226818302e070031b31280efa73aab201b19b6c7f4a116be44c3a210709669e4bf9641', 4, 1, 'MyApp', '[]', 0, '2021-02-12 16:26:56', '2021-02-12 16:26:56', '2021-03-12 16:26:56'),
('719cdaec92bf1c14b06cf95a3923236590f95ae4e8b20d77b886406fae721b2d6ca2a6da9a92d125', 6, 1, 'MyApp', '[]', 0, '2021-02-02 17:14:11', '2021-02-02 17:14:11', '2021-03-02 17:14:11'),
('758819807870ac538cdd99e0cce081e9eaf91708b171dda121592945a38e5f699f1102b3a20a7bd4', 6, 1, 'MyApp', '[]', 0, '2021-02-02 17:39:17', '2021-02-02 17:39:17', '2021-03-02 17:39:17'),
('764c50d9e8c56de1a95e13c3c2f64d61c7cae2ab8d36ac45b0c5e1f2a841b7bfa645cb1b8de57fc4', 11, 1, 'MyApp', '[]', 0, '2021-02-05 17:05:14', '2021-02-05 17:05:14', '2021-03-05 17:05:13'),
('7ad7249c334266f1c83b610969b74eaf56f75d97e06b70552cc4ae9ce4d876a784243d0117420c62', 9, 1, 'MyApp', '[]', 0, '2021-02-02 17:42:41', '2021-02-02 17:42:41', '2021-03-02 17:42:41'),
('7cd89cede87e565b745c52d06ad7f86aa844c0b2a3e9bbdba2cb4321fc7cd30280f077051a17c96f', 5, 1, 'MyApp', '[]', 0, '2021-01-29 06:42:51', '2021-01-29 06:42:51', '2021-03-01 06:42:51'),
('7e01408459f39cd09cd7087f244b8c26bc19aca2b7211dab4c7f121cd9992636a2caeb5de898d36f', 4, 1, 'MyApp', '[]', 0, '2021-01-30 06:58:06', '2021-01-30 06:58:06', '2021-03-02 06:58:06'),
('7ef80a1ee0e4aec9b0e7a76b992bbbbeab65bfbdc9dfdba6daf4273e18bb527762286923f90a57f6', 4, 1, 'MyApp', '[]', 0, '2021-02-02 17:21:34', '2021-02-02 17:21:34', '2021-03-02 17:21:34'),
('821ba70f581e7e6edf0e466e4f59f0601383104a351fe366aed13e5eb04745591ad288197c70a9e7', 1, 1, 'MyApp', '[]', 0, '2021-02-01 16:07:12', '2021-02-01 16:07:12', '2021-03-01 16:07:12'),
('95ed6ea4a9b8c84acf1d959a9ba38071c5cb73dbf06a3b6ce23bb7195cffed99f602e50be4ab443e', 12, 1, 'MyApp', '[]', 0, '2021-02-06 07:12:51', '2021-02-06 07:12:51', '2021-03-06 07:12:51'),
('974ac4f0c2ab1b74577886082308bf6a2070e8af3523d8c806de6106b131bbe1494c11a152790a1b', 9, 1, 'MyApp', '[]', 0, '2021-02-02 17:38:32', '2021-02-02 17:38:32', '2021-03-02 17:38:32'),
('9bf2ef9036eac8ef7eefcc2729f403ba60ec60af1b647c9565877ede4dd48dc64e7b4419f14133a8', 2, 1, 'MyApp', '[]', 0, '2020-08-26 20:34:32', '2020-08-26 20:34:32', '2020-09-27 02:04:30'),
('a093ab8b5feb0b03ee38d449a02f46ab75bcc3b17da767f34c7e10176cd61afdb2f44147fda3ef4b', 5, 1, 'MyApp', '[]', 0, '2021-01-29 14:18:54', '2021-01-29 14:18:54', '2021-03-01 14:18:54'),
('aa1f1aa16cb34b8f34b2df1160e51eeeba1640df42c00f82313c10cf2ff3d6ebbc4abd5cb2d4c3d6', 6, 1, 'MyApp', '[]', 0, '2021-02-01 16:16:36', '2021-02-01 16:16:36', '2021-03-01 16:16:36'),
('ab34dc52ee041b49ff1fc7ea69c1868640bba926b7625bcb2810da7eaef8604c2374b2f4cbaa7d66', 6, 1, 'MyApp', '[]', 0, '2021-02-09 17:49:54', '2021-02-09 17:49:54', '2021-03-09 17:49:53'),
('ba10666a31779acf8caf2c15ec88feb0e5ed81c678c0cdd1b9764b6349b64eb6881b5d32276baad9', 5, 1, 'MyApp', '[]', 0, '2021-01-30 11:08:19', '2021-01-30 11:08:19', '2021-03-02 11:08:19'),
('baf5d83955ee48d9e7ffb670105ba6a31f946f25adc45961b05e09b5faa439d5dd820ea7bad28f92', 4, 1, 'MyApp', '[]', 0, '2021-01-30 06:59:25', '2021-01-30 06:59:25', '2021-03-02 06:59:25'),
('bb682083545975bdf8c4b084f7d5efa4b90ebb0a8f2dd4eee457a75bd5ffac325018f15e7f34191e', 4, 1, 'MyApp', '[]', 0, '2021-01-30 06:10:43', '2021-01-30 06:10:43', '2021-03-02 06:10:43'),
('bba8d553c5b959c0d4ad55b7ce83822c436ebf68c0807066921812ccc0e5b023e888cc1ac0c5eff4', 6, 1, 'MyApp', '[]', 0, '2021-01-30 15:45:40', '2021-01-30 15:45:40', '2021-03-02 15:45:40'),
('c80a87d89b213a9b954ec5e5b05d9e54a78806ed5a7e68c609d21dc59e090b3a498a0979f608875e', 4, 1, 'MyApp', '[]', 0, '2021-02-07 07:32:17', '2021-02-07 07:32:17', '2021-03-07 07:32:17'),
('d4da6d828bcd21818f12b7fa376c96a4ed5d3e4456d4af0c62f22e64fd3b9feed365c1c4f0156714', 4, 1, 'MyApp', '[]', 0, '2021-02-07 07:25:24', '2021-02-07 07:25:24', '2021-03-07 07:25:23'),
('d64d7b1cd14cf28b3a02a458f53e77e6f8650db47fa2266358d8d88601ad6ee6ac540e8a8621a164', 4, 1, 'MyApp', '[]', 0, '2021-01-30 06:57:32', '2021-01-30 06:57:32', '2021-03-02 06:57:32'),
('d7fa2db2a3a259bd60b4d394227e1d005c91211552b4079a7c2820037e9726e90ff23ea9f4696db8', 4, 1, 'MyApp', '[]', 0, '2021-02-06 12:40:16', '2021-02-06 12:40:16', '2021-03-06 12:40:16'),
('d9a1ae42b040e986f5ea7f2508a5980779457c5ae621974690873d1e7a223f23d4e9eaf8cafd3f63', 7, 1, 'MyApp', '[]', 0, '2021-02-02 17:19:15', '2021-02-02 17:19:15', '2021-03-02 17:19:15'),
('e497f628861276760c977991bba22222ded6287ef1de8d20bcd12c00dc52bd740ca18fe455b7b44b', 6, 1, 'MyApp', '[]', 0, '2021-01-31 17:20:33', '2021-01-31 17:20:33', '2021-03-03 17:20:33'),
('e8f5d48d114e13c6c5ff2460405f3153c21198345a30518f09696eb791c75fe8155f33ea64a50d05', 8, 1, 'MyApp', '[]', 0, '2021-02-02 17:18:33', '2021-02-02 17:18:33', '2021-03-02 17:18:33'),
('f21531192eebfc9bda8dff1c5fdf5e706473eb38c0a9bb13dfd7f2de283502ad92b41e3e182c768c', 5, 1, 'MyApp', '[]', 0, '2021-01-29 06:31:00', '2021-01-29 06:31:00', '2021-03-01 06:31:00'),
('f2f51803975e5f0b51792b49d2a784fa28a5c209de9d3f0bfbf3693b903f6395c39a04fef6b3063b', 4, 1, 'MyApp', '[]', 0, '2021-01-30 10:26:38', '2021-01-30 10:26:38', '2021-03-02 10:26:38'),
('f450dcfae297d6afbf273a6605af844ca33581943a4dfbe00659015876bfc983501a308ad0f301f7', 5, 1, 'MyApp', '[]', 0, '2021-01-29 10:41:07', '2021-01-29 10:41:07', '2021-03-01 10:41:07'),
('f56c8ffbf07d0711442f0aea67a6ad2f6d0e4f205c7aa214f348b1451146aa9f547985301bbd1e40', 6, 1, 'MyApp', '[]', 0, '2021-01-30 15:46:26', '2021-01-30 15:46:26', '2021-03-02 15:46:26'),
('f61ed194d7bfcd104913ec70d22aaa590057fb188661023cce0c720dab1769807823c23292f6aed8', 5, 1, 'MyApp', '[]', 0, '2021-01-29 10:56:41', '2021-01-29 10:56:41', '2021-03-01 10:56:41'),
('fd58f0ddcbdb70aa8de172491c54f33c9065354f9f2744ac2f2a29325b7ccaa133d9dbd148d035c4', 5, 1, 'MyApp', '[]', 0, '2021-01-29 06:12:11', '2021-01-29 06:12:11', '2021-03-01 06:12:11');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_auth_codes`
--

CREATE TABLE `oauth_auth_codes` (
  `id` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `client_id` bigint UNSIGNED NOT NULL,
  `scopes` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_clients`
--

CREATE TABLE `oauth_clients` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `redirect` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_clients`
--

INSERT INTO `oauth_clients` (`id`, `user_id`, `name`, `secret`, `provider`, `redirect`, `personal_access_client`, `password_client`, `revoked`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Laravel Personal Access Client', 'KutRiXzxc10OduNtmlWiga87xRkojpfQ5JWhVHyu', NULL, 'http://localhost', 1, 0, 0, '2020-08-25 11:24:28', '2020-08-25 11:24:28'),
(2, NULL, 'Laravel Password Grant Client', 'B1IBVuyKLyXsEAyf3Hto7Xdfx2O40oDLCzoNFnOp', 'users', 'http://localhost', 0, 1, 0, '2020-08-25 11:24:29', '2020-08-25 11:24:29');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_personal_access_clients`
--

CREATE TABLE `oauth_personal_access_clients` (
  `id` bigint UNSIGNED NOT NULL,
  `client_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_personal_access_clients`
--

INSERT INTO `oauth_personal_access_clients` (`id`, `client_id`, `created_at`, `updated_at`) VALUES
(1, 1, '2020-08-25 11:24:29', '2020-08-25 11:24:29');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_refresh_tokens`
--

CREATE TABLE `oauth_refresh_tokens` (
  `id` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_token_id` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint UNSIGNED NOT NULL,
  `orderID` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int DEFAULT NULL,
  `address_id` bigint UNSIGNED DEFAULT NULL,
  `address` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `seller_id` int DEFAULT NULL,
  `seller_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seller_email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seller_phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shipping` decimal(10,2) DEFAULT NULL,
  `sub_total` decimal(10,2) DEFAULT NULL,
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `orderID`, `user_id`, `address_id`, `address`, `name`, `email`, `phone`, `price`, `seller_id`, `seller_name`, `seller_email`, `seller_phone`, `product_name`, `product_image`, `shipping`, `sub_total`, `status`, `created_at`, `updated_at`) VALUES
(1, 'BWT-00001', 2, 1, '{\"id\":1,\"user_id\":2,\"name\":\"mukul saini\",\"mobile\":\"08949595984\",\"pincode\":\"301001\",\"locality\":\"near bus stand gaytri mandir, road alwar\",\"address\":\"near bus stand gaytri mandir, road alwar\",\"city\":\"ALWAR\",\"state\":\"RAJASTHAN\",\"landmark\":\"jhdc\",\"phone\":\"08949595984\",\"created_at\":\"2021-09-04 10:27:35\",\"updated_at\":\"2021-09-04 10:27:35\"}', 'Abhinav Kansal', 'abhinavkansal001@gmail.com', NULL, '389.00', 2, 'Abhinav Kansal', 'abhinavkansal001@gmail.com', NULL, 'PICTAS Laughing Buddha Statue Idel Figrue Showpiece Polyresin Material for Wall Shelf Table Desktop Living Room Home Office Decoration and Gift', '1629533297.jpg', '0.00', '389.00', 'Cancel', '2021-09-06 16:52:26', '2021-09-08 14:45:50'),
(2, 'BWT-00002', 2, 1, '{\"id\":1,\"user_id\":2,\"name\":\"mukul saini\",\"mobile\":\"08949595984\",\"pincode\":\"301001\",\"locality\":\"near bus stand gaytri mandir, road alwar\",\"address\":\"near bus stand gaytri mandir, road alwar\",\"city\":\"ALWAR\",\"state\":\"RAJASTHAN\",\"landmark\":\"jhdc\",\"phone\":\"08949595984\",\"created_at\":\"2021-09-04 10:27:35\",\"updated_at\":\"2021-09-04 10:27:35\"}', 'Abhinav Kansal', 'abhinavkansal001@gmail.com', NULL, '899.00', 2, 'Abhinav Kansal', 'abhinavkansal001@gmail.com', NULL, 'Handcrafted Meditating Little Monk Buddha Smoke Backflow Cone Incense Holder Decorative Showpiece Multi Color Available and with Fragrance Cones Incense (Multi-40pcs Cones)', '1629805539.jpg', '0.00', '899.00', 'Return Complete', '2021-09-06 16:52:26', '2021-09-08 15:12:18'),
(3, 'BWT-00003', 2, 1, '{\"id\":1,\"user_id\":2,\"name\":\"mukul saini\",\"mobile\":\"08949595984\",\"pincode\":\"301001\",\"locality\":\"near bus stand gaytri mandir, road alwar\",\"address\":\"near bus stand gaytri mandir, road alwar\",\"city\":\"ALWAR\",\"state\":\"RAJASTHAN\",\"landmark\":\"jhdc\",\"phone\":\"08949595984\",\"created_at\":\"2021-09-04 10:27:35\",\"updated_at\":\"2021-09-04 10:27:35\"}', 'Abhinav Kansal', 'abhinavkansal001@gmail.com', NULL, '8555.00', 2, 'Abhinav Kansal', 'abhinavkansal001@gmail.com', NULL, 'zart Set of 3 Different Black & Golden Yoga Posture Lady Statue Poly resin Figurine for Home Table Top Living Room Hall Bedroom Shelf Decoration - Yoga Statue in Decor', '1629806144.jpg', '0.00', '8555.00', 'Pending', '2021-09-06 16:52:26', '2021-09-06 16:52:26'),
(4, 'BWT-00004', 2, 1, '{\"id\":1,\"user_id\":2,\"name\":\"mukul saini\",\"mobile\":\"08949595984\",\"pincode\":\"301001\",\"locality\":\"near bus stand gaytri mandir, road alwar\",\"address\":\"near bus stand gaytri mandir, road alwar\",\"city\":\"ALWAR\",\"state\":\"RAJASTHAN\",\"landmark\":\"jhdc\",\"phone\":\"08949595984\",\"created_at\":\"2021-09-04 10:27:35\",\"updated_at\":\"2021-09-04 10:27:35\"}', 'Abhinav Kansal', 'abhinavkansal001@gmail.com', NULL, '389.00', 2, 'Abhinav Kansal', 'abhinavkansal001@gmail.com', NULL, 'PICTAS Laughing Buddha Statue Idel Figrue Showpiece Polyresin Material for Wall Shelf Table Desktop Living Room Home Office Decoration and Gift', '1629533297.jpg', '0.00', '389.00', 'Pending', '2021-09-11 19:16:02', '2021-09-11 19:16:02');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` bigint UNSIGNED NOT NULL,
  `order_id` int NOT NULL,
  `seller_id` int DEFAULT NULL,
  `seller_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seller_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seller_phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shipping` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`id`, `order_id`, `seller_id`, `seller_name`, `seller_email`, `seller_phone`, `name`, `image`, `price`, `shipping`, `created_at`, `updated_at`) VALUES
(1, 2, NULL, NULL, NULL, NULL, 'Handcrafted Meditating Little Monk Buddha Smoke Backflow Cone Incense Holder Decorative Showpiece Multi Color Available and with Fragrance Cones Incense (Multi-40pcs Cones)', '1629805539.jpg', '899', '0', '2021-08-26 12:16:06', '2021-08-26 12:16:06'),
(2, 2, NULL, NULL, NULL, NULL, 'zart Set of 3 Different Black & Golden Yoga Posture Lady Statue Poly resin Figurine for Home Table Top Living Room Hall Bedroom Shelf Decoration - Yoga Statue in Decor', '1629806144.jpg', '8555', '0', '2021-08-26 12:16:06', '2021-08-26 12:16:06'),
(3, 3, NULL, NULL, NULL, NULL, 'PICTAS Laughing Buddha Statue Idel Figrue Showpiece Polyresin Material for Wall Shelf Table Desktop Living Room Home Office Decoration and Gift', '1629533297.jpg', '389', '0', '2021-08-26 12:29:59', '2021-08-26 12:29:59'),
(4, 3, NULL, NULL, NULL, NULL, 'zart Set of 3 Different Black & Golden Yoga Posture Lady Statue Poly resin Figurine for Home Table Top Living Room Hall Bedroom Shelf Decoration - Yoga Statue in Decor', '1629806144.jpg', '8555', '0', '2021-08-26 12:29:59', '2021-08-26 12:29:59'),
(5, 3, NULL, NULL, NULL, NULL, 'Handcrafted Meditating Little Monk Buddha Smoke Backflow Cone Incense Holder Decorative Showpiece Multi Color Available and with Fragrance Cones Incense (Multi-40pcs Cones)', '1629805539.jpg', '899', '0', '2021-08-26 12:29:59', '2021-08-26 12:29:59'),
(6, 4, NULL, NULL, NULL, NULL, 'PICTAS Laughing Buddha Statue Idel Figrue Showpiece Polyresin Material for Wall Shelf Table Desktop Living Room Home Office Decoration and Gift', '1629533297.jpg', '389', '0', '2021-08-26 16:46:53', '2021-08-26 16:46:53'),
(7, 4, NULL, NULL, NULL, NULL, 'Handcrafted Meditating Little Monk Buddha Smoke Backflow Cone Incense Holder Decorative Showpiece Multi Color Available and with Fragrance Cones Incense (Multi-40pcs Cones)', '1629805539.jpg', '899', '0', '2021-08-26 16:46:53', '2021-08-26 16:46:53');

-- --------------------------------------------------------

--
-- Table structure for table `our_community`
--

CREATE TABLE `our_community` (
  `id` int NOT NULL,
  `name` varchar(200) NOT NULL,
  `position` varchar(200) NOT NULL,
  `bio` text NOT NULL,
  `image` varchar(200) NOT NULL,
  `staff_id` int DEFAULT NULL,
  `user_id` int DEFAULT NULL,
  `status` smallint NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `our_community`
--

INSERT INTO `our_community` (`id`, `name`, `position`, `bio`, `image`, `staff_id`, `user_id`, `status`) VALUES
(1, 'Test', '', 'Testing', '', 1, 2, 1),
(4, 'Sunil', '', 'Bio', '162720133916272000861627191828blue jacket headshot.jpg', 1, 2, 1),
(5, 'Test 1', '', 'vvv', '1627201505Alicia Lai Photo.jpg', 3, 2, 1),
(6, 'new test', '', 'It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.\r\n\r\n5\r\n	paragraphs\r\n	words\r\n	bytes\r\n	lists\r\n	Start with \'Lorem\r\nipsum dolor sit amet...\'', '1628495192image2.jpg', 1, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` bigint UNSIGNED NOT NULL,
  `page_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `page_description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `page_name`, `page_description`, `slug`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'pages', '<p>description</p>', 'pages', '0', '2021-02-15 00:08:52', '2021-02-15 18:36:27', NULL),
(2, 'new pageasdas asdasd  asdasd', '<p>new page description</p>', 'new-pageasdas-asdasd-asdasd', '1', '2021-02-15 00:17:16', '2021-02-15 01:19:19', NULL),
(3, 'new pageqwqw', '<p>new page description</p>', 'new-pageqwqw', '1', '2021-02-15 01:11:57', '2021-02-15 01:26:03', '2021-02-15 01:26:03'),
(5, 'page new 123', '<p>page new description123</p>', 'page-new-123', '0', '2021-02-15 01:26:38', '2021-02-17 22:36:16', NULL),
(6, 'page new from  admin1', '<p>page new description&nbsp;</p>', 'page-new-from-admin1', '1', '2021-02-15 18:39:59', '2021-02-15 18:40:25', NULL),
(7, 'test1', 'cddc', 'test1', '0', '2021-09-21 08:10:45', '2021-09-21 08:10:45', NULL),
(8, 'test', 'asd', 'test', '0', '2021-09-22 05:02:37', '2021-09-22 05:02:42', '2021-09-22 05:02:42');

-- --------------------------------------------------------

--
-- Table structure for table `partners`
--

CREATE TABLE `partners` (
  `id` bigint UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `partners`
--

INSERT INTO `partners` (`id`, `image`, `created_at`, `updated_at`) VALUES
(1, '1632239178.png', '2021-09-21 08:34:32', '2021-09-21 15:46:18');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `productcategories`
--

CREATE TABLE `productcategories` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `productcategories`
--

INSERT INTO `productcategories` (`id`, `name`, `slug`, `parent_id`, `thumbnail`, `position`, `active`, `created_at`, `updated_at`) VALUES
(1, 'Boutique Brands', 'boutique-brands', '0', 'gallery4.jpg', '9', NULL, '2021-08-17 16:04:47', '2021-08-17 16:04:47'),
(3, 'Calligraphy', 'calligraphy', '0', '01pregnantpanda_16x9.jpg', '0', NULL, '2021-08-21 07:04:04', '2021-08-21 07:04:04'),
(4, 'Ceramic /Pottery', 'ceramic-pottery', '0', 'focus.jpg', '1', NULL, '2021-08-21 07:05:26', '2021-08-21 07:05:26'),
(5, 'Cartoon', 'cartoon', '0', 'national judge.jpg', '2', NULL, '2021-08-21 07:05:46', '2021-08-21 07:05:46'),
(6, 'Drawing', 'drawing', '0', 'picture for state judge.jpg', '3', NULL, '2021-08-21 07:06:05', '2021-08-21 07:06:05'),
(7, 'Painting', 'painting', '0', 'focus.jpg', '4', NULL, '2021-08-21 07:06:24', '2021-08-21 07:06:24'),
(8, 'Photography', 'photography', '0', '01pregnantpanda_16x9.jpg', '1', NULL, '2021-08-21 07:06:45', '2021-08-21 07:06:45'),
(9, 'Stencil', 'stencil', '0', 'picture for state judge.jpg', '2', NULL, '2021-08-21 07:07:05', '2021-08-21 07:07:05'),
(10, 'Sculpture', 'sculpture', '0', 'picture for state judge.jpg', '3', NULL, '2021-08-21 07:07:34', '2021-08-21 07:07:34'),
(11, 'Woodcrafts & design', 'woodcrafts-design', '0', '01pregnantpanda_16x9.jpg', '2', NULL, '2021-08-21 07:07:57', '2021-08-21 07:07:57'),
(12, 'Architecture', 'architecture', '0', 'picture for state judge.jpg', '2', NULL, '2021-08-21 07:08:23', '2021-08-21 07:08:23'),
(13, 'Fashion Design', 'fashion-design', '0', 'picture for state judge.jpg', '3', NULL, '2021-08-21 07:08:45', '2021-08-21 07:08:45'),
(14, 'Interior Design', 'interior-design', '0', '01pregnantpanda_16x9.jpg', '4', NULL, '2021-08-21 07:09:03', '2021-08-21 07:09:03'),
(15, 'Jewelry Design', 'jewelry-design', '0', 'focus.jpg', '4', NULL, '2021-08-21 07:09:23', '2021-08-21 07:09:23'),
(16, 'Knitting / Burlap', 'knitting-burlap', '0', 'picture for state judge.jpg', '3', NULL, '2021-08-21 07:09:47', '2021-08-21 07:09:47');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint UNSIGNED NOT NULL,
  `seller_id` int DEFAULT NULL,
  `product_name` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `decription` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_slug` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `seller_id`, `product_name`, `decription`, `image`, `product_slug`, `price`, `category_id`, `created_at`, `updated_at`) VALUES
(2, 2, 'PICTAS Laughing Buddha Statue Idel Figrue Showpiece Polyresin Material for Wall Shelf Table Desktop Living Room Home Office Decoration and Gift', 'The Package Contains:- 1 Laughing Buddha showpiece statue.\r\nA Perfect Gift or Home Decoration: It is a best gift for Marriage Anniversary , Parents , Mothers day , Wedding return gift , birthday , House warming , office , Festivel occasions - like Diwali ,Raksha bandhan , Grah pravesh and Corporate gifts.\r\nLaughing Buddha is placed for Prosperity, Abundance and Wealth Luck\r\nYou can place a Laughing Buddha facing door in your home/office.: L X B X H : 10 cm x 9 cm x 14 cm\r\nThe beautiful, super rich color laughing Buddha, beautifully conceived and meticulously crafted. Right from the raw material to the finished product, these products have been handcrafted in India. You can use a dry cloth to wipe the Buddha Showpiece & also wash it if required.', '1629533297.jpg', 'pictas-laughing-buddha-statue-idel-figrue-showpiece-polyresin-material-for-wall-shelf-table-desktop-living-room-home-office-decoration-and-gift', '389.00', 4, '2021-08-21 08:08:17', '2021-08-21 08:08:17'),
(3, 2, 'Handcrafted Meditating Little Monk Buddha Smoke Backflow Cone Incense Holder Decorative Showpiece Multi Color Available and with Fragrance Cones Incense (Multi-40pcs Cones)', '🎇Product Material : Polynesian - 30 Free Scented Backflow Cone Incenses, Available in 3-4 fragrances, Long lasting fragrances\r\n🎇Item Size: 7 cm x 7 cm x 12 cm\r\n🎇Contain: Pack of 1 pieces Buddha, Multi Color Available in stock\r\n🎇Gifts: Exquisite gifts & Beautiful Home Décor, This showpiece has been diligently handcrafted by skilled artisans using various traditional techniques.\r\n🎇Back-flow incense burner creates an illusion of a smokey waterfall. Simply place an incense cone at the top of the waterfall, and with the cone\'s special properties, the smoke starts to flow in reverse direction, that is from top to bottom, and in-turn creates a beautiful Smokey waterfall.', '1629805539.jpg', 'handcrafted-meditating-little-monk-buddha-smoke-backflow-cone-incense-holder-decorative-showpiece-multi-color-available-and-with-fragrance-cones-incense-multi-40pcs-cones', '899', 1, '2021-08-24 11:45:39', '2021-08-24 11:45:39'),
(4, 2, 'zart Set of 3 Different Black & Golden Yoga Posture Lady Statue Poly resin Figurine for Home Table Top Living Room Hall Bedroom Shelf Decoration - Yoga Statue in Decor', 'Material:- Polyresin Figurine used for Showpiece. Ideal for show cases in homes or children room/table décor/car dashboards. Perfect for display on shelf of store.Perfect for gifting to your loved ones\r\nSize of the product:- 8x8 inch.The artistry and elegance of nature is on display with this statue in a warm colour finish. It\'s ideal for bringing a touch of the outdoors to a transitional or modern room. Buy it for yourself or give as a housewarming gift\r\nYoga Crafts - Used as a mean of meditation, this statue ornaments clear the mind of all stress, pressure and mental turmoil\r\nService quality are the basic criteria for Zart. We are always available to help our customers\r\nCare Instruction: Don\'t wash, use dry cotton cloth to remove dirt', '1629806144.jpg', 'zart-set-of-3-different-black-golden-yoga-posture-lady-statue-poly-resin-figurine-for-home-table-top-living-room-hall-bedroom-shelf-decoration-yoga-statue-in-decor', '8555', 7, '2021-08-24 11:55:44', '2021-08-24 11:55:44'),
(5, 2, 'Bharat Haat Brass Tree Candle Stand Large Size', 'A Beautiful Piece of Art Handcrafts Products for your Beautiful Home or Office.Made Of Best Quality Pure Brass. Made In India\r\nEnhance the Decoration of The Temple, House, Office, Hotel etc. It is a Best Gift for Your Loved One.\r\nSize: 2 x 12 x 17 Inch (L x W x H), 5.08 x 30.48 x 43.18 CM (L x W x H). Net Weight: 4.77 Kg.\r\nCare Instructions: Clean By Dry Cloth And Use Pitambari Powder Specially For Brass Material.\r\nProduct Colour, Design & Weight May Vary Marginally Due to The Hand-Made Nature of Production.', '1629806281.jpg', 'bharat-haat-brass-tree-candle-stand-large-size', '15999', 14, '2021-08-24 11:58:01', '2021-08-24 11:58:01'),
(6, 2, 'Gold coin', 'Gold Coin', '1630599941.jpeg', 'gold-coin', '100000', 15, '2021-09-02 16:25:41', '2021-09-02 16:25:41');

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE `reports` (
  `id` bigint UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `slug`, `description`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'student', 'student', 'Student Role', '2020-08-25 11:24:37', '2020-08-25 11:24:37', NULL),
(2, 'admin', 'admin', 'Admin', '2020-08-25 11:24:37', '2020-08-25 11:24:37', NULL),
(3, 'student', 'student', 'Student Role', '2021-01-21 12:27:41', '2021-01-21 12:27:41', NULL),
(4, 'admin', 'admin', 'Admin', '2021-01-21 12:27:41', '2021-01-21 12:27:41', NULL),
(5, 'student', 'student', 'Student Role', '2021-01-30 05:51:12', '2021-01-30 05:51:12', NULL),
(6, 'admin', 'admin', 'Admin', '2021-01-30 05:51:12', '2021-01-30 05:51:12', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint UNSIGNED NOT NULL,
  `type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `details` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `type`, `details`, `active`, `created_at`, `updated_at`) VALUES
(1, 'amazon', '{\"type\":\"amazon\",\"dd_access_key_id\":\"ASDASDASD\",\"dd_amazon_seller_id\":\"ASD234ASD\",\"dd_amazon_authtoken\":\"ASDASDAS2342DASDa\",\"dd_amazon_secret_key\":\"ASDASDASDSAD\"}', 1, '2020-10-31 22:58:28', '2020-10-31 23:12:04'),
(2, 'ebay', '{\"type\":\"ebay\",\"dd_ebay_api_url\":\"https:\\/\\/api.ebay.com\\/ws\\/api.dll\",\"dd_ebay_app_id\":\"customde-mws-PRD-7c8e8a00c-dd00f5b0\",\"dd_ebay_dev_id\":\"ce47180c-6cba-4510-b9b8-517909a95516\",\"dd_ebay_cert_id\":\"PRD-c8e8a00c74ec-0515-42d6-8e43-a6f4\",\"dd_ebay_username\":\"customdesigned\",\"dd_ebay_api_token\":\"AgAAAA**AQAAAA**aAAAAA**IoYWXw**nY+sHZ2PrBmdj6wVnY+sEZ2PrA2dj6AAmYukD5GDoAydj6x9nY+seQ**+V8GAA**AAMAAA**NUbTB7Jid7i\\/YiZxAL5Nhxke2DnKKUt6l2JTLA5uBTEP1Cpi9J+xIUIpshtKy8U2tgeEBq8iEhhSzNTyBF6aQ+y0vrtieMSWOYtfY+hEVA+lN0FOCk6lvcdNYbdp1KGVt4kxRLwd2Sy0XdsSCN0RGDQ62pPlKiVCBGeHHcEILkbbhh7ZCsbw\\/N6y+YNwAX9ty5k4ExIlj105qg3odoTMeTY4ejtzJqdkHC3Iw7Jf1v\\/69V3pL8q8BX4MiFOvWb8EyASGFxywl1naUx4zEeKJdgvV2XaEJPrnNGc+9\\/42Ae7FVJ06GP3+zJ2fJ2vwyXPCinuhs5CoHBYAG07fiGYKZsuVH0Pdovur1LyyT7VI+1SmYaZZBrpv0iRkIIowHU2nvc4eNCHgmMC+zdUweE0amIDZNTj0+bYsqJ4Rd0yKd09+wlTSW50\\/Kq+kiIwdHErFC0cbyNPaW5+eAUmyx1O99FjD9lRAonCoSj4wL9zmsTwOL8nrlGNXpw\\/B7xyZ1zQRKMS0OdQaXCbkF5DVVcrz3XChyy5zNgE1iLcmMaH3p\\/z7PTA5xmBw\\/We0pbPbPoMFD7Ud6ALXxuhowxRUFCjpYTn9uvumJUCxlfZcDtrFOmtTcaYu\\/AuJaNhyV8SoWEDc2kdVgmqpaK9HDqkFXpikrYk3zRQPwPffU82K7AWtSrz9gWhsLzovKuDDDqcK9eJ7yUIskG7DHcLiamdAaGM2kNmGDtsyrZpEAxixjr3MA70KZCeVdcjup1g1OPRBo4ZS\"}', 1, '2020-10-31 23:23:07', '2020-11-01 04:06:04'),
(3, 'logo', '{\"type\":\"logo\",\"company_name\":\"Hey\"}', 1, '2020-11-01 02:28:37', '2021-01-20 05:24:20'),
(4, 'flipkart', '{\"type\":\"flipkart\",\"dd_flipkart_api_url\":\"https:\\/\\/api.ebay.com\\/ws\\/api.dll\",\"dd_flipkart_api_token\":\"ASDASDAAASAASAAAAAASDAASAAAAASDAAASADAABVAAAFGRAASDASDREWGRGDCSAFGWE\",\"dd_flipkart_username\":\"SADSDA\"}', 1, '2020-11-01 04:06:52', '2020-11-01 04:06:52');

-- --------------------------------------------------------

--
-- Table structure for table `sponsors`
--

CREATE TABLE `sponsors` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` int DEFAULT NULL,
  `business_name` varchar(122) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(111) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(111) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zip` varchar(111) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(333) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int NOT NULL DEFAULT '1' COMMENT '1=active,2=deactive',
  `phone` varchar(111) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(555) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position` varchar(222) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type_of_business` varchar(555) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sponsor_type` varchar(555) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `achievement` varchar(555) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `experience` varchar(555) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `experience_details` varchar(556) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `area_of_interest` varchar(111) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `component` varchar(111) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `like_concept` varchar(111) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sponsors`
--

INSERT INTO `sponsors` (`id`, `user_id`, `business_name`, `state`, `city`, `zip`, `address`, `status`, `phone`, `title`, `position`, `type_of_business`, `sponsor_type`, `achievement`, `experience`, `experience_details`, `area_of_interest`, `component`, `like_concept`, `image`, `created_at`, `updated_at`) VALUES
(1, NULL, 'SY78', NULL, NULL, NULL, NULL, 1, 'ghh', 'bnn', 'hdhdf', 'hdh', 'sponsorship', 'sponsorship sponsorship', 'Entertainment, Social Media', 'sponsorship sponsorship sponsorship', 'sponsorship sponsorship sponsorship', 'Weekly Busking Performances', 'sponsorship sponsorship', '1632213239.jpg', '2021-09-21 08:33:59', '2021-12-07 08:51:40'),
(5, 29, 'SY78', 'AL', 'JK', '3232K', 'FSDFSDF', 3, '53636', 'bfgfg', 'fgsg', 'sgsg', 'gsg', 'etetet', 'Entertainment, Social Media', 'tetettetettetettetet', 'tetet', 'Studio Channels: Artisans Performances and Artists Performing', 'tetettetettetet', NULL, '2021-12-04 08:50:48', '2021-12-08 09:13:28'),
(6, 30, NULL, 'AL', 'hello', '245425', '52525', 1, '5252', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-04 09:08:36', '2021-12-04 09:08:36'),
(7, 31, NULL, 'IL', 'gdgd', 'dg454', '54545', 1, '54545', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-04 09:11:36', '2021-12-04 09:11:36'),
(8, 33, 'fewrtw', 'IL', 'twt', 'wtw', 'wtw', 1, 'tw', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-07 09:20:57', '2021-12-07 09:20:57'),
(9, 34, 'gffg', 'ID', 'gfgf', '56565', '12343', 1, '675656', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-07 09:22:26', '2021-12-07 09:22:26'),
(10, 35, 'gggggggg', 'HI', 'gsg', '5454', '45454', 1, '5454', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-07 09:48:36', '2021-12-07 09:48:36'),
(11, 36, 'fsdf', 'IN', 'fsf', '45454', 'fsdf', 1, '5454545', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-07 09:50:11', '2021-12-07 09:50:11'),
(12, 37, 'gfgs', 'HI', 'gsfg', '45454', '5454', 2, '454545', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-07 10:07:19', '2021-12-08 09:16:57'),
(13, 38, 'dad', 'IL', 'da', '4343', 'arasf', 1, '4334', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-07 10:08:33', '2021-12-07 10:08:33'),
(14, 39, 'fhgf', 'CT', 'fhdfh', '646', 'hgdghfgh', 2, '123456', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-07 10:12:09', '2021-12-08 12:36:09'),
(15, 40, 'jfg', 'IL', 'gjfj', '6546565', '656565', 1, '5454', 'fsf', 'fsf', 'fsfs', 'sfsdf', 'fsfsfsd', 'Social Media, Marketing and/or Advertising, Video Live Streaming', 'fsfs', 'fsfsf', 'Weekly Busking Performances', 'fsfsfsd', NULL, '2021-12-07 10:14:08', '2021-12-07 10:46:28'),
(16, 41, 'Globision Technologies', 'IL', 'XYZ', '201301', '61/8', 2, '+918285579134', 'Director', 'Director Business development', 'IT', 'YES', 'ADVERTIZEMENT', 'Entertainment', NULL, 'SPONSORSHIP', 'State & National Competition', 'STORES', NULL, '2021-12-08 18:52:03', '2021-12-08 19:19:17');

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE `states` (
  `id` bigint UNSIGNED NOT NULL,
  `hindi_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `english_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`id`, `hindi_name`, `english_name`, `description`, `active`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Delhi Delhi', 'दिल्ली', 1, '2020-08-25 20:15:08', '2021-04-24 21:03:26'),
(9, NULL, 'Bihar', NULL, 1, '2021-02-07 08:57:01', '2021-02-07 08:57:01'),
(10, NULL, 'Uttar Pradesh', NULL, 1, '2021-02-07 08:57:10', '2021-02-07 08:57:10'),
(11, NULL, 'Gujarat', NULL, 1, '2021-02-07 08:57:17', '2021-02-07 08:57:17'),
(12, NULL, 'Kerala', NULL, 1, '2021-02-07 08:57:22', '2021-02-07 08:57:22');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `decription` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_no` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `position`, `image`, `decription`, `age`, `contact_no`, `address`, `created_at`, `updated_at`) VALUES
(1, '', '', '', '', NULL, NULL, NULL, NULL, NULL),
(2, 'xdfg', 'f', '1632219163.jpg', 'f', NULL, NULL, NULL, '2021-09-21 10:12:43', '2021-09-21 10:12:43'),
(3, 'kjfbdf', 'vdf', '1632219185.jpg', 'dfg', NULL, NULL, NULL, '2021-09-21 10:13:05', '2021-09-21 10:13:05');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `language_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thumbnail` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `full_address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `name`, `email`, `mobile`, `language_id`, `state_id`, `thumbnail`, `full_address`, `status`, `created_at`, `updated_at`) VALUES
(6, 'Shaurya Kaushik', 'officialshauryakaushik@gmail.com', '9999294979', NULL, NULL, '788891853_1612692391_1.jpg', NULL, 1, '2021-02-07 10:06:31', '2021-02-07 10:08:05'),
(7, 'Shreshtha', 'shreshb@gmail.com', '9999898989', NULL, NULL, '1700254460_1612692481_WhatsApp Image 2021-01-24 at 3.08.27 PM.jpeg', NULL, 1, '2021-02-07 10:08:01', '2021-04-24 21:04:23'),
(8, 'Aloks', 'alok@gmail.com', '9898989898', NULL, NULL, '340836896_1612699073_m,m,.jpg', NULL, 1, '2021-02-07 11:57:53', '2021-04-24 21:04:36');

-- --------------------------------------------------------

--
-- Table structure for table `topics`
--

CREATE TABLE `topics` (
  `id` bigint UNSIGNED NOT NULL,
  `teacher_id` int UNSIGNED DEFAULT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `topic_order` int UNSIGNED DEFAULT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` tinyint(1) DEFAULT NULL,
  `thumbnail` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `topics`
--

INSERT INTO `topics` (`id`, `teacher_id`, `title`, `description`, `topic_order`, `slug`, `active`, `thumbnail`, `created_at`, `updated_at`) VALUES
(2, 6, 'Business Studies Chapter 1: Management', NULL, NULL, NULL, 1, 'topic_thumb/1845216380_1613204483_m,m,.jpg', '2021-02-13 08:21:24', '2021-02-13 08:21:30');

-- --------------------------------------------------------

--
-- Table structure for table `transaction_histories`
--

CREATE TABLE `transaction_histories` (
  `id` bigint UNSIGNED NOT NULL,
  `transaction_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `transaction_value` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `usercategories`
--

CREATE TABLE `usercategories` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `child_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thumbnail` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `usercategories`
--

INSERT INTO `usercategories` (`id`, `name`, `slug`, `parent_id`, `child_id`, `thumbnail`, `position`, `active`, `created_at`, `updated_at`) VALUES
(8, 'Artist', 'artist', '0', NULL, '657448837_1629877850_object.jpg', '1', NULL, '2021-08-25 02:20:50', '2021-08-25 02:20:50'),
(9, 'Dancing', 'dancing', '8', NULL, '1804550167_1629878198_national judge.jpg', '2', NULL, '2021-08-25 02:26:38', '2021-08-25 02:26:38'),
(10, 'Singing', 'singing', '8', NULL, '1635660569_1629878465_dance.jpg', '2', NULL, '2021-08-25 02:31:05', '2021-08-25 02:31:05'),
(11, 'Music', 'music', '8', NULL, '1384892319_1629878488_dance.jpg', '2', NULL, '2021-08-25 02:31:28', '2021-08-25 02:31:28'),
(12, 'Theatrics', 'theatrics', '8', NULL, '31788877_1629878507_dance.jpg', '2', NULL, '2021-08-25 02:31:47', '2021-08-25 02:31:47'),
(15, 'Bachata Dancing', 'bachata-dancing', '9', NULL, '233264222_1629878886_dance.jpg', '3', NULL, '2021-08-25 02:38:06', '2021-08-25 02:38:06'),
(16, 'Ballet', 'ballet', '9', NULL, '102360487_1629878903_dance.jpg', '3', NULL, '2021-08-25 02:38:23', '2021-08-25 02:38:23'),
(17, 'Ballroom', 'ballroom', '9', NULL, '657080105_1629878921_dance.jpg', '3', NULL, '2021-08-25 02:38:41', '2021-08-25 02:38:41'),
(18, 'Bell Dancing', 'bell-dancing', '9', NULL, '1066582551_1629879025_dance.jpg', '3', NULL, '2021-08-25 02:40:25', '2021-08-25 02:40:25'),
(19, 'Caribbean Dancing', 'caribbean-dancing', '9', NULL, '42809875_1629879042_dance.jpg', '3', NULL, '2021-08-25 02:40:42', '2021-08-25 02:40:42'),
(20, 'Clone Dancing', 'clone-dancing', '9', NULL, '1958994936_1629879062_dance.jpg', '3', NULL, '2021-08-25 02:41:02', '2021-08-25 02:41:02'),
(21, 'Flamenco Dancing', 'flamenco-dancing', '9', NULL, '1876936320_1629879079_dance.jpg', '3', NULL, '2021-08-25 02:41:19', '2021-08-25 02:41:19'),
(22, 'Hip-Hop Dancing', 'hip-hop-dancing', '9', NULL, '157224055_1629879112_dance.jpg', '3', NULL, '2021-08-25 02:41:52', '2021-08-25 02:41:52'),
(23, 'Line Dancing', 'line-dancing', '9', NULL, '324492432_1629879131_dance.jpg', '3', NULL, '2021-08-25 02:42:11', '2021-08-25 02:42:11'),
(24, 'Latin Dancing', 'latin-dancing', '9', NULL, '89706755_1629879152_dance.jpg', '3', NULL, '2021-08-25 02:42:32', '2021-08-25 02:42:32'),
(25, 'Merengue', 'merengue', '9', NULL, '1650799599_1629879173_dance.jpg', '3', NULL, '2021-08-25 02:42:53', '2021-08-25 02:42:53'),
(26, 'Salsa Dancing', 'salsa-dancing', '9', NULL, '648872656_1629879199_dance.jpg', '3', NULL, '2021-08-25 02:43:19', '2021-08-25 02:43:19'),
(27, 'Salsa Dancing', 'salsa-dancing', '9', NULL, '1935539864_1629879200_dance.jpg', '3', NULL, '2021-08-25 02:43:20', '2021-08-25 02:43:20'),
(28, 'Square Dancing', 'square-dancing', '9', NULL, '1938432847_1629879224_dance.jpg', '3', NULL, '2021-08-25 02:43:44', '2021-08-25 02:43:44'),
(29, 'Stage & Screen', 'stage-screen', '9', NULL, '164473090_1629879242_dance.jpg', '3', NULL, '2021-08-25 02:44:02', '2021-08-25 02:44:02'),
(30, 'Tango Dancing', 'tango-dancing', '9', NULL, '335685053_1629879261_dance.jpg', '3', NULL, '2021-08-25 02:44:21', '2021-08-25 02:44:21'),
(31, 'Tap Dancing', 'tap-dancing', '9', NULL, '370466686_1629879280_dance.jpg', '3', NULL, '2021-08-25 02:44:40', '2021-08-25 02:44:40'),
(32, 'Tropicales Dancing', 'tropicales-dancing', '9', NULL, '1676169044_1629879298_dance.jpg', '3', NULL, '2021-08-25 02:44:58', '2021-08-25 02:44:58'),
(33, 'Urbana', 'urbana', '9', NULL, '965593116_1629879318_dance.jpg', '3', NULL, '2021-08-25 02:45:18', '2021-08-25 02:45:18'),
(34, 'Waltz', 'waltz', '9', NULL, '1762785157_1629879338_dance.jpg', '3', NULL, '2021-08-25 02:45:38', '2021-08-25 02:45:38'),
(35, 'Western Dancing', 'western-dancing', '9', NULL, '1862691435_1629879360_dance.jpg', '3', NULL, '2021-08-25 02:46:00', '2021-08-25 02:46:00'),
(36, 'Blues', 'blues', '10', NULL, '2002557202_1629879664_dance.jpg', '3', NULL, '2021-08-25 02:51:04', '2021-08-25 02:51:04'),
(37, 'Chorus / Choir', 'chorus-choir', '10', NULL, '1881475508_1629879687_dance.jpg', '3', NULL, '2021-08-25 02:51:27', '2021-08-25 02:51:27'),
(38, 'Contemporary', 'contemporary', '10', NULL, '663274893_1629879712_dance.jpg', '3', NULL, '2021-08-25 02:51:52', '2021-08-25 02:51:52'),
(39, 'Country', 'country', '10', NULL, '723937103_1629880122_dance.jpg', '3', NULL, '2021-08-25 02:58:42', '2021-08-25 02:58:42'),
(40, 'Christian', 'christian', '10', NULL, '1830923430_1629880147_dance.jpg', '3', NULL, '2021-08-25 02:59:07', '2021-08-25 02:59:07'),
(41, 'Gospel', 'gospel', '10', NULL, '1751251166_1629880368_dance.jpg', '3', NULL, '2021-08-25 03:02:48', '2021-08-25 03:02:48'),
(42, 'Indie', 'indie', '10', NULL, '2059461877_1629880391_dance.jpg', '3', NULL, '2021-08-25 03:03:11', '2021-08-25 03:03:11'),
(43, 'Modern', 'modern', '10', NULL, '604041122_1629880408_dance.jpg', '3', NULL, '2021-08-25 03:03:28', '2021-08-25 03:03:28'),
(44, 'Opera', 'opera', '10', NULL, '1449085717_1629880425_dance.jpg', '3', NULL, '2021-08-25 03:03:45', '2021-08-25 03:03:45'),
(45, 'Pop', 'pop', '10', NULL, '1021045389_1629880446_dance.jpg', '3', NULL, '2021-08-25 03:04:06', '2021-08-25 03:04:06'),
(46, 'Reggae', 'reggae', '10', NULL, '1432660929_1629880464_dance.jpg', '3', NULL, '2021-08-25 03:04:24', '2021-08-25 03:04:24'),
(47, 'Rap', 'rap', '10', NULL, '1993344149_1629880486_dance.jpg', '3', NULL, '2021-08-25 03:04:46', '2021-08-25 03:04:46'),
(48, 'Soul', 'soul', '10', NULL, '801782032_1629880505_dance.jpg', '3', NULL, '2021-08-25 03:05:05', '2021-08-25 03:05:05'),
(49, 'Urbana', 'urbana', '10', NULL, '1300628305_1629880526_dance.jpg', '3', NULL, '2021-08-25 03:05:26', '2021-08-25 03:05:26'),
(50, 'Alternative /EDM', 'alternative-edm', '11', NULL, '259939337_1629880554_dance.jpg', '3', NULL, '2021-08-25 03:05:54', '2021-08-25 03:05:54'),
(51, 'Blues', 'blues', '11', NULL, '1374435604_1629880573_dance.jpg', '3', NULL, '2021-08-25 03:06:13', '2021-08-25 03:06:13'),
(52, 'Classicals', 'classicals', '11', NULL, '697267782_1629880589_dance.jpg', '3', NULL, '2021-08-25 03:06:29', '2021-08-25 03:06:29'),
(53, 'Country', 'country', '11', NULL, '1380495249_1629880611_dance.jpg', '3', NULL, '2021-08-25 03:06:51', '2021-08-25 03:06:51'),
(54, 'Contemporary Christian', 'contemporary-christian', '11', NULL, '356741765_1629880633_dance.jpg', '3', NULL, '2021-08-25 03:07:13', '2021-08-25 03:07:13'),
(55, 'Gospel', 'gospel', '11', NULL, '25740223_1629880651_dance.jpg', '3', NULL, '2021-08-25 03:07:31', '2021-08-25 03:07:31'),
(56, 'Easy Listening', 'easy-listening', '11', NULL, '1834592569_1629880670_dance.jpg', '3', NULL, '2021-08-25 03:07:50', '2021-08-25 03:07:50'),
(57, 'Hard Rock', 'hard-rock', '11', NULL, '2146720575_1629880689_dance.jpg', '3', NULL, '2021-08-25 03:08:09', '2021-08-25 03:08:09'),
(58, 'Hip-Hop', 'hip-hop', '11', NULL, '1244382958_1629880709_dance.jpg', '3', NULL, '2021-08-25 03:08:29', '2021-08-25 03:08:29'),
(60, 'Indie', 'indie', '11', NULL, '1299550289_1629880795_dance.jpg', '3', NULL, '2021-08-25 03:09:55', '2021-08-25 03:09:55'),
(61, 'Jazz', 'jazz', '11', NULL, '1673960151_1629880819_dance.jpg', '3', NULL, '2021-08-25 03:10:19', '2021-08-25 03:10:19'),
(62, 'Metal', 'metal', '11', NULL, '485271379_1629880843_dance.jpg', '3', NULL, '2021-08-25 03:10:43', '2021-08-25 03:10:43'),
(63, 'Modern', 'modern', '11', NULL, '1022753297_1629880863_dance.jpg', '3', NULL, '2021-08-25 03:11:03', '2021-08-25 03:11:03'),
(64, 'New Age', 'new-age', '11', NULL, '335089017_1629880882_dance.jpg', '3', NULL, '2021-08-25 03:11:22', '2021-08-25 03:11:22'),
(65, 'Opera', 'opera', '11', NULL, '900131423_1629880898_dance.jpg', '3', NULL, '2021-08-25 03:11:38', '2021-08-25 03:11:38'),
(66, 'Pop', 'pop', '11', NULL, '18476747_1629880914_dance.jpg', '3', NULL, '2021-08-25 03:11:54', '2021-08-25 03:11:54'),
(67, 'R & B', 'r-b', '11', NULL, '1662673232_1629880932_dance.jpg', '3', NULL, '2021-08-25 03:12:12', '2021-08-25 03:12:12'),
(68, 'Rap', 'rap', '11', NULL, '1165902748_1629880966_dance.jpg', '3', NULL, '2021-08-25 03:12:46', '2021-08-25 03:12:46'),
(69, 'Reggae', 'reggae', '11', NULL, '1152610052_1629881034_dance.jpg', '3', NULL, '2021-08-25 03:13:54', '2021-08-25 03:13:54'),
(70, 'Rock', 'rock', '11', NULL, '1388067258_1629881329_dance.jpg', '3', NULL, '2021-08-25 03:18:49', '2021-08-25 03:18:49'),
(71, 'Spanish', 'spanish', '11', NULL, '503963283_1629881372_dance.jpg', '3', NULL, '2021-08-25 03:19:32', '2021-08-25 03:19:32'),
(72, 'Soul', 'soul', '11', NULL, '667810229_1629881394_dance.jpg', '3', NULL, '2021-08-25 03:19:54', '2021-08-25 03:19:54'),
(73, 'Stage & Screen', 'stage-screen', '11', NULL, '1385574666_1629881431_dance.jpg', '3', NULL, '2021-08-25 03:20:31', '2021-08-25 03:20:31'),
(74, 'Symphony Orchestra', 'symphony-orchestra', '11', NULL, '1366997569_1629881464_dance.jpg', '3', NULL, '2021-08-25 03:21:04', '2021-08-25 03:21:04'),
(75, 'Urbana', 'urbana', '11', NULL, '113092369_1629881498_dance.jpg', '3', NULL, '2021-08-25 03:21:38', '2021-08-25 03:21:38'),
(76, 'Acrobatic', 'acrobatic', '12', NULL, '1116545845_1629881535_dance.jpg', '3', NULL, '2021-08-25 03:22:15', '2021-08-25 03:22:15'),
(77, 'African Movement', 'african-movement', '12', NULL, '2122666402_1629881594_dance.jpg', '3', NULL, '2021-08-25 03:23:14', '2021-08-25 03:23:14'),
(78, 'Bands', 'bands', '12', NULL, '553587003_1629881684_dance.jpg', '3', NULL, '2021-08-25 03:24:44', '2021-08-25 03:24:44'),
(79, 'Carnivals & Festivals', 'carnivals-festivals', '12', NULL, '1617969787_1629881703_dance.jpg', '3', NULL, '2021-08-25 03:25:03', '2021-08-25 03:25:03'),
(80, 'Circus', 'circus', '12', NULL, '136966577_1629881726_dance.jpg', '3', NULL, '2021-08-25 03:25:26', '2021-08-25 03:25:26'),
(81, 'Comedians', 'comedians', '12', NULL, '1187310920_1629881756_dance.jpg', '3', NULL, '2021-08-25 03:25:56', '2021-08-25 03:25:56'),
(82, 'Concerts', 'concerts', '12', NULL, '1612045302_1629881780_dance.jpg', '3', NULL, '2021-08-25 03:26:20', '2021-08-25 03:26:20'),
(83, 'Magicians / Magic Shows', 'magicians-magic-shows', '12', NULL, '2123458477_1629881888_dance.jpg', '3', NULL, '2021-08-25 03:28:08', '2021-08-25 03:28:08'),
(84, 'Opera', 'opera', '12', NULL, '949637956_1629881917_dance.jpg', '3', NULL, '2021-08-25 03:28:37', '2021-08-25 03:28:37'),
(85, 'Poetry', 'poetry', '12', NULL, '1186224754_1629881941_dance.jpg', '3', NULL, '2021-08-25 03:29:01', '2021-08-25 03:29:01'),
(86, 'Puppeteers', 'puppeteers', '12', NULL, '44440456_1629881973_dance.jpg', '3', NULL, '2021-08-25 03:29:33', '2021-08-25 03:29:33'),
(87, 'Stage & Screen', 'stage-screen', '12', NULL, '463005823_1629882012_dance.jpg', '3', NULL, '2021-08-25 03:30:12', '2021-08-25 03:30:12'),
(88, 'Ventriloquist', 'ventriloquist', '12', NULL, '1519780894_1629882039_dance.jpg', '3', NULL, '2021-08-25 03:30:39', '2021-08-25 03:30:39'),
(89, 'Artisans', 'artisans', '0', NULL, '1502007460_1629883045_dance.jpg', '1', NULL, '2021-08-25 03:47:25', '2021-08-25 03:47:25'),
(90, 'Calligraphy', 'calligraphy', '89', NULL, '161307066_1629883092_dance.jpg', '2', NULL, '2021-08-25 03:48:12', '2021-08-25 03:48:12'),
(91, 'Ceramic /Pottery', 'ceramic-pottery', '89', NULL, '1456688108_1629883115_dance.jpg', '2', NULL, '2021-08-25 03:48:35', '2021-08-25 03:48:35'),
(92, 'Cartoon', 'cartoon', '89', NULL, '1647469206_1629883138_dance.jpg', '2', NULL, '2021-08-25 03:48:58', '2021-08-25 03:48:58'),
(93, 'Drawing', 'drawing', '89', NULL, '594066109_1629883160_dance.jpg', '2', NULL, '2021-08-25 03:49:20', '2021-08-25 03:49:20'),
(94, 'Painting', 'painting', '89', NULL, '945470948_1629883179_dance.jpg', '2', NULL, '2021-08-25 03:49:39', '2021-08-25 03:49:39'),
(95, 'Photography', 'photography', '89', NULL, '322801458_1629883202_dance.jpg', '2', NULL, '2021-08-25 03:50:02', '2021-08-25 03:50:02'),
(96, 'Stencil', 'stencil', '89', NULL, '222635704_1629883220_dance.jpg', '2', NULL, '2021-08-25 03:50:20', '2021-08-25 03:50:20'),
(97, 'Sculpture', 'sculpture', '89', NULL, '1925818056_1629883236_dance.jpg', '2', NULL, '2021-08-25 03:50:36', '2021-08-25 03:50:36'),
(98, 'Woodcrafts & design', 'woodcrafts-design', '89', NULL, '930600030_1629883254_dance.jpg', '2', NULL, '2021-08-25 03:50:54', '2021-08-25 03:50:54'),
(99, 'Architecture', 'architecture', '89', NULL, '906291116_1629883271_dance.jpg', '2', NULL, '2021-08-25 03:51:11', '2021-08-25 03:51:11'),
(100, 'Fashion Design', 'fashion-design', '89', NULL, '952620138_1629883289_dance.jpg', '2', NULL, '2021-08-25 03:51:29', '2021-08-25 03:51:29'),
(101, 'Interior Design', 'interior-design', '89', NULL, '1899684650_1629883306_dance.jpg', '2', NULL, '2021-08-25 03:51:46', '2021-08-25 03:51:46'),
(102, 'Jewelry Design', 'jewelry-design', '89', NULL, '1036571292_1629883323_dance.jpg', '2', NULL, '2021-08-25 03:52:03', '2021-08-25 03:52:03'),
(103, 'Knitting / Burlap', 'knitting-burlap', '23', NULL, '1638357442.jpg', '1', NULL, '2021-08-25 03:52:21', '2021-12-01 11:17:22');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `otp` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dob` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thumbnail` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `basic_details` tinyint(1) NOT NULL DEFAULT '0',
  `total_coin_amount` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ip_address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `device_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `class_id` int UNSIGNED DEFAULT NULL,
  `state_id` int UNSIGNED DEFAULT NULL,
  `city_id` int UNSIGNED DEFAULT NULL,
  `social_media_link` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `deafult_language` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `term_and_condition` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content_permission` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `adult_checkbox` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `us_citizen` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `legal_permanent` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `proof_of_residence` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `authorization_card` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo_and_video` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `apply_competition` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `apply_busker_performance` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `role_id`, `mobile`, `otp`, `email`, `dob`, `gender`, `user_type`, `thumbnail`, `active`, `basic_details`, `total_coin_amount`, `ip_address`, `device_id`, `address`, `class_id`, `state_id`, `city_id`, `social_media_link`, `deafult_language`, `email_verified_at`, `password`, `remember_token`, `term_and_condition`, `content_permission`, `adult_checkbox`, `us_citizen`, `legal_permanent`, `proof_of_residence`, `authorization_card`, `photo_and_video`, `apply_competition`, `apply_busker_performance`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'abhinav kansal', '1', '7983183218', '213689', 'abhinavkansal001@gmail.com', NULL, NULL, NULL, NULL, 1, 0, NULL, '47.30.222.11', NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, '$2y$10$o00JRrkEekSUPH6NiVWUw.hPpIgeOT/aDcS5wuRSji5WgF/AqqXQ6', 'LPXvJUoTz7PJr4rHWnc4upVqLzqapUvxH1X6PF3PZvdLsk33MZrrbyiEkgmX', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-01-29 17:17:20', '2021-02-01 16:58:51', NULL),
(3, 'Admin', '6', '123456789', NULL, 'admin@admin.com', NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$o00JRrkEekSUPH6NiVWUw.hPpIgeOT/aDcS5wuRSji5WgF/AqqXQ6', '1Fj6HZB8xSGgCSVJwtvDJL04ckOKYWuhZlXFrF1UlicoXk8WzGKEHNSj9pUn', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-01-30 05:51:12', '2021-01-30 05:51:12', NULL),
(4, 'Alok kumar', '1', '9773870257', '117297', 'kumaralok092@gmail.com', NULL, NULL, NULL, NULL, 1, 0, NULL, '106.207.2.8', NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-01-30 06:10:25', '2021-02-12 16:26:03', NULL),
(5, 'Ak', '1', '6204742993', '128155', 'kumaralok092@gmail.com', NULL, NULL, NULL, NULL, 1, 0, NULL, '106.207.2.8', NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-01-30 07:00:02', '2021-01-30 11:08:08', NULL),
(6, 'Shaurya', '1', '9999294979', '659573', 'officialshauryakaushik@gmail.com', NULL, NULL, NULL, NULL, 1, 0, NULL, '103.95.82.108', NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-01-30 15:45:36', '2021-02-09 17:49:45', NULL),
(7, 'Shreshtha Bhattacharya', '1', '7701970317', '125087', 'shreshb1112v@gmail.com', NULL, NULL, NULL, NULL, 1, 0, NULL, '103.118.118.58', NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-02-02 17:14:13', '2021-02-02 17:19:10', NULL),
(8, 'Neha', '1', '9643038661', '683086', 'nehagrag21@gmail.com', NULL, NULL, NULL, NULL, 1, 0, NULL, '103.127.226.187', NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-02-02 17:14:19', '2021-02-02 17:18:31', NULL),
(9, 'Poonam Sharma', '1', '9315124509', '537416', 'poonamsharmaofficial40@gmail.com', NULL, NULL, NULL, NULL, 1, 0, NULL, '103.95.83.223', NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-02-02 17:38:03', '2021-02-02 17:42:14', NULL),
(10, 'pankaj sharma', '1', '8368163168', '865085', 'pankajsharmaphysics1@gmail.com', NULL, NULL, NULL, NULL, 1, 0, NULL, '103.95.83.223', NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-02-02 17:51:27', '2021-02-02 17:53:15', NULL),
(11, NULL, '1', '9155735787', '467601', NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-02-05 17:04:01', '2021-02-05 17:04:01', NULL),
(12, 'Lakshay Yadav', '1', '9310366792', '837036', 'lakshayyadav9050@gmail.com', NULL, NULL, NULL, NULL, 1, 0, NULL, '43.231.57.155', NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-02-06 07:12:45', '2021-02-06 07:13:20', NULL),
(19, 'Ashish Tiwari', NULL, '12-21-1231', NULL, 'Ashish@gmail.com', NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$18xjM5zgVcKhrVa5C9lS5OcgGSDIc1NUlQ6.3fgJnoi/JtLM74Pvy', 'YMUJH1fV4vSvFrbR9qKDV1DgkeMCZ2d4ODtW2R7soI6JoWny8Jq94nM5dreK', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '2021-02-15 21:48:05', '2021-02-15 21:48:05', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` int NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_id` int DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `thumbnail` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prefrence` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `user_id`, `name`, `video`, `remark`, `category_id`, `status`, `thumbnail`, `type`, `prefrence`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'Performances', '1627142072mp4', 'k', 6, 0, '1627142072jpg', 'performance', 'home', '2021-07-24 15:54:32', '2021-08-02 17:33:21', '2021-08-02 17:33:21'),
(2, 1, 'Performances', '1627188337mp4', 'j', 5, 0, '1627188337jpg', 'performance', 'home', '2021-07-25 04:45:37', '2021-08-02 17:07:58', '2021-08-02 17:07:58'),
(3, 2, 'Performances', '1627189560mp4', 'h', 9, 1, '1627189560jpg', 'performance', 'performance', '2021-07-25 05:06:00', '2021-08-02 16:17:20', '2021-08-02 16:17:20'),
(4, 2, 'BWT', '1627581941mp4', 'j', 7, 1, '1627581941jpg', 'performance', 'home', '2021-07-29 18:05:41', '2021-08-02 16:17:32', '2021-08-02 16:17:32'),
(5, 2, 'Doreen', '1627711796mp4', 'h', 8, 1, NULL, 'performance', 'home', '2021-07-31 06:09:56', '2021-08-03 06:51:28', '2021-08-03 06:51:28'),
(6, 2, 'video', '1627711873mp4', 'g', 4, 1, NULL, 'performance', 'home', '2021-07-31 06:11:13', '2021-08-03 04:38:28', '2021-08-03 04:38:28'),
(7, 2, 'draft', '1627712174mp4', 'k', 6, 0, NULL, 'performance', 'performance', '2021-07-31 06:16:14', '2021-08-03 06:41:31', '2021-08-03 06:41:31'),
(8, 2, 'Y2MATE.COM', '1627712325mp4', 'l', 4, 1, NULL, 'performance', 'home', '2021-07-31 06:18:45', '2021-08-03 04:48:58', '2021-08-03 04:48:58'),
(9, 2, 'WHATS', '1627712357mp4', 'h', 6, 0, NULL, 'performance', 'home', '2021-07-31 06:19:17', '2021-08-03 06:41:38', '2021-08-03 06:41:38'),
(10, 2, 'MOV', '1627712378mp4', 'k', 7, 1, NULL, 'performance', 'home', '2021-07-31 06:19:38', '2021-08-03 07:28:48', '2021-08-03 07:28:48'),
(11, 2, 'PROMOTION', '1627713246mp4', NULL, NULL, NULL, NULL, 'performance', NULL, '2021-07-31 06:34:06', '2021-07-31 06:34:06', NULL),
(12, 2, 'Performers', '1627809985mp4', 'a', 13, 1, NULL, 'performance', 'performance', '2021-08-01 09:26:25', '2021-08-12 18:52:59', NULL),
(13, 2, 'Performers', '1627810078mp4', 'ab', 13, 1, NULL, 'performance', 'performance', '2021-08-01 09:27:58', '2021-08-01 09:37:29', NULL),
(14, 2, 'Performers', '1627810126mp4', 'abc', 13, 1, NULL, 'performance', 'performance', '2021-08-01 09:28:46', '2021-08-01 09:37:53', NULL),
(15, 2, 'Performers', '1627810184mp4', 'bAS', 13, 1, NULL, 'performance', 'performance', '2021-08-01 09:29:44', '2021-08-01 09:38:47', NULL),
(16, 2, 'Performers', '1627810273mp4', 'vndbj', 13, 1, NULL, 'performance', 'performance', '2021-08-01 09:31:14', '2021-08-01 09:39:26', NULL),
(17, 2, 'Performers', '1627810828mp4', 'frrg', 13, 1, NULL, 'performance', 'performance', '2021-08-01 09:40:28', '2021-08-01 09:41:08', NULL),
(18, 2, 'Performers', '1627811045mp4', 'ndv d', 14, 1, NULL, 'performance', 'performance', '2021-08-01 09:44:05', '2021-08-01 09:54:08', NULL),
(19, 2, 'Performers', '1627811093mp4', 'Performers Weekly Winners', 14, 1, NULL, 'performance', 'performance', '2021-08-01 09:44:53', '2021-08-01 09:48:51', NULL),
(20, 2, 'Performers', '1627811308mp4', 'Performers Weekly Winners', 14, 1, NULL, 'performance', 'performance', '2021-08-01 09:48:29', '2021-08-01 09:49:40', NULL),
(21, 2, 'Performers', '1627811417mp4', 'Performers Weekly Winners', 14, 1, NULL, 'performance', 'performance', '2021-08-01 09:50:17', '2021-08-01 09:52:10', NULL),
(22, 2, 'Performers', '1627811458mp4', 'Performers Weekly Winners', 14, 1, NULL, 'performance', 'performance', '2021-08-01 09:50:58', '2021-08-01 09:52:48', NULL),
(23, 2, 'Performers', '1627811577mp4', 'ff,mdm', 14, 1, NULL, 'performance', 'performance', '2021-08-01 09:52:57', '2021-08-01 10:01:24', '2021-08-01 10:01:24'),
(24, 2, 'Performers', '1627811740mp4', 'sdm', 14, 1, NULL, 'performance', 'performance', '2021-08-01 09:55:40', '2021-08-01 10:00:14', NULL),
(25, 2, 'Top', '1627812147mp4', 'seef', 15, 1, NULL, 'performance', 'performance', '2021-08-01 10:02:27', '2021-08-01 10:09:16', NULL),
(26, 2, 'Top', '1627812165mp4', 'nc', 15, 1, NULL, 'performance', 'performance', '2021-08-01 10:02:45', '2021-08-01 10:10:16', NULL),
(27, 2, 'Top', '1627812189mp4', 'nd', 15, 1, NULL, 'performance', 'performance', '2021-08-01 10:03:09', '2021-08-01 10:10:55', NULL),
(28, 2, 'Top', '1627812220mp4', 'mv', 15, 1, NULL, 'performance', 'performance', '2021-08-01 10:03:40', '2021-08-01 10:11:49', NULL),
(29, 2, 'Top', '1627812450mp4', 'dfdg', 15, 1, NULL, 'performance', 'performance', '2021-08-01 10:07:30', '2021-08-01 10:12:11', NULL),
(30, 2, 'Top', '1627812468mp4', 'cb', 15, 1, NULL, 'performance', 'performance', '2021-08-01 10:07:48', '2021-08-01 10:12:34', NULL),
(31, 2, 'Top', '1627812960mp4', 'mfd', 16, 1, NULL, 'performance', 'performance', '2021-08-01 10:16:00', '2021-08-01 10:28:45', NULL),
(32, 2, 'Top', '1627813068mp4', 'mef', 16, 1, NULL, 'performance', 'performance', '2021-08-01 10:17:48', '2021-08-01 10:29:13', NULL),
(33, 2, 'Top', '1627813836mp4', 'mdf', 17, 1, NULL, 'performance', 'performance', '2021-08-01 10:30:36', '2021-08-01 10:33:25', NULL),
(34, 2, 'Top', '1627813856mp4', 'md', 17, 1, NULL, 'performance', 'performance', '2021-08-01 10:30:56', '2021-08-01 10:33:52', NULL),
(35, 2, 'Top', '1627813882mp4', 'ned', 17, 1, NULL, 'performance', 'performance', '2021-08-01 10:31:22', '2021-08-01 10:45:51', NULL),
(36, 2, 'Top', '1627813898mp4', 'md', 17, 1, NULL, 'performance', 'performance', '2021-08-01 10:31:38', '2021-08-01 10:47:04', NULL),
(37, 2, 'Top', '1627813921mp4', 'mdc', 17, 1, NULL, 'performance', 'performance', '2021-08-01 10:32:01', '2021-08-01 10:47:33', NULL),
(38, 2, 'Top', '1627813942mp4', 'ndm', 17, 1, NULL, 'performance', 'performance', '2021-08-01 10:32:22', '2021-08-01 10:48:04', NULL),
(39, 2, 'Top', '1627815420mp4', 'ikdf', 18, 1, NULL, 'performance', 'performance', '2021-08-01 10:57:00', '2021-08-01 11:01:24', NULL),
(40, 2, 'Top', '1627815480mp4', 'bxfmg', 18, 1, NULL, 'performance', 'performance', '2021-08-01 10:58:00', '2021-08-01 11:01:56', NULL),
(41, 2, 'Top', '1627815498mp4', 'msv', 18, 1, NULL, 'performance', 'performance', '2021-08-01 10:58:18', '2021-08-01 11:02:21', NULL),
(42, 2, 'Top', '1627815514mp4', 'jkbcvc', 18, 1, NULL, 'performance', 'performance', '2021-08-01 10:58:34', '2021-08-01 10:59:54', NULL),
(43, 2, 'Top', '1627815531mp4', 'mcv', 18, 1, NULL, 'performance', 'performance', '2021-08-01 10:58:51', '2021-08-01 11:00:27', NULL),
(44, 2, 'Top', '1627815548mp4', 'mc', 18, 1, NULL, 'performance', 'performance', '2021-08-01 10:59:08', '2021-08-01 11:00:54', NULL),
(45, 2, 'Top', '1627816504mp4', 'mg', 22, 1, NULL, 'performance', 'performance', '2021-08-01 11:15:04', '2021-08-01 11:22:34', NULL),
(46, 2, 'Top', '1627816542mp4', 'vxc', 22, 1, NULL, 'performance', 'performance', '2021-08-01 11:15:42', '2021-08-01 11:23:10', NULL),
(47, 2, 'Top', '1627816718mp4', 'sdfsd', 22, 1, NULL, 'performance', 'performance', '2021-08-01 11:18:38', '2021-08-01 11:24:19', NULL),
(48, 2, 'Top', '1627816769mp4', 'xgvd', 22, 1, NULL, 'performance', 'performance', '2021-08-01 11:19:29', '2021-08-01 11:24:54', NULL),
(49, 2, 'Top', '1627816821mp4', 'xxv', 22, 1, NULL, 'performance', 'performance', '2021-08-01 11:20:21', '2021-08-01 11:25:26', NULL),
(50, 2, 'Top', '1627816887mp4', 'cv', 22, 1, NULL, 'performance', 'performance', '2021-08-01 11:21:27', '2021-08-01 11:26:01', NULL),
(51, 2, 'Top', '1627817795mp4', 'vz', 23, 1, NULL, 'performance', 'performance', '2021-08-01 11:36:35', '2021-08-01 11:39:30', NULL),
(52, 2, 'Top', '1627882249mp4', 'kvl', 25, 1, NULL, 'performance', 'performance', '2021-08-02 05:30:49', '2021-08-02 05:43:24', NULL),
(53, 2, 'Top', '1627882302mp4', 'gd', 25, 1, NULL, 'performance', 'performance', '2021-08-02 05:31:42', '2021-08-02 05:43:54', NULL),
(54, 2, 'Top', '1627882399mp4', 'dfd', 25, 1, NULL, 'performance', 'performance', '2021-08-02 05:33:19', '2021-08-02 05:44:19', NULL),
(55, 2, 'Top', '1627883136mp4', 'vds', 25, 1, NULL, 'performance', 'performance', '2021-08-02 05:45:36', '2021-08-02 05:48:41', NULL),
(56, 2, 'Top', '1627883152mp4', 'df', 25, 1, NULL, 'performance', 'performance', '2021-08-02 05:45:52', '2021-08-02 05:49:05', NULL),
(57, 2, 'Top', '1627883169mp4', 'dz', 25, 1, NULL, 'performance', 'performance', '2021-08-02 05:46:09', '2021-08-02 05:49:27', NULL),
(58, 2, 'Top Trending Artisans', '1627883256mp4', NULL, NULL, NULL, NULL, 'performance', NULL, '2021-08-02 05:47:36', '2021-08-02 05:48:12', '2021-08-02 05:48:12'),
(59, 2, 'Artisan', '1627883547mp4', 'd', 21, 1, NULL, 'performance', 'performance', '2021-08-02 05:52:27', '2021-08-02 05:55:44', NULL),
(60, 2, 'Artisan', '1627883574mp4', 'fd', 21, 1, NULL, 'performance', 'performance', '2021-08-02 05:52:54', '2021-08-02 05:56:17', NULL),
(61, 2, 'Artisan', '1627883600mp4', 'vd', 21, 1, NULL, 'performance', 'performance', '2021-08-02 05:53:20', '2021-08-02 05:56:43', NULL),
(62, 2, 'Artisan', '1627883621mp4', 'cxz', 21, 1, NULL, 'performance', 'performance', '2021-08-02 05:53:41', '2021-08-02 05:57:07', NULL),
(63, 2, 'Artisan', '1627883694mp4', 'vcd', 21, 1, NULL, 'performance', 'performance', '2021-08-02 05:54:54', '2021-08-02 05:57:35', NULL),
(64, 2, 'Top', '1627883976mp4', 'dfd', 23, 1, NULL, 'performance', 'performance', '2021-08-02 05:59:36', '2021-08-02 06:02:06', NULL),
(65, 2, 'Top', '1627884002mp4', 'hjk', 23, 1, NULL, 'performance', 'performance', '2021-08-02 06:00:02', '2021-08-02 06:02:31', NULL),
(66, 2, 'Top', '1627884030mp4', 'hjk', 23, 1, NULL, 'performance', 'performance', '2021-08-02 06:00:30', '2021-08-02 06:03:02', NULL),
(67, 2, 'Top', '1627884347mp4', 'fds', 23, 1, NULL, 'performance', 'performance', '2021-08-02 06:05:47', '2021-08-02 06:09:24', NULL),
(68, 2, 'Top', '1627884403mp4', 'fd', 23, 1, NULL, 'performance', 'performance', '2021-08-02 06:06:43', '2021-08-02 06:09:55', NULL),
(69, 2, 'Top', '1627884703mp4', 'gfd', 24, 1, NULL, 'performance', 'performance', '2021-08-02 06:11:43', '2021-08-02 06:16:19', NULL),
(70, 2, 'Top', '1627884891mp4', 'res', 24, 1, NULL, 'performance', 'performance', '2021-08-02 06:14:51', '2021-08-02 06:16:49', NULL),
(71, 2, 'Artisan', '1627885276mp4', 'gfdsa', 21, 1, NULL, 'performance', 'performance', '2021-08-02 06:21:16', '2021-08-02 06:23:42', NULL),
(72, 2, 'Boutique Brands', '1627921137mp4', NULL, NULL, NULL, NULL, 'performance', NULL, '2021-08-02 16:18:57', '2021-08-02 16:18:57', NULL),
(73, 2, 'State\'s', '1627923940mp4', 'sfd', 4, 1, NULL, 'performance', 'performance', '2021-08-02 17:05:40', '2021-08-03 04:41:46', NULL),
(74, 2, 'State\'s', '1627924128mp4', 'd', 4, 1, NULL, 'performance', 'performance', '2021-08-02 17:08:48', '2021-08-03 04:42:36', NULL),
(75, 2, 'State\'s', '1627924262mp4', ',d', 4, 1, NULL, 'performance', 'performance', '2021-08-02 17:11:02', '2021-08-03 04:43:01', NULL),
(76, 2, 'State\'s', '1627924437mp4', 'redw', 4, 1, NULL, 'performance', 'performance', '2021-08-02 17:13:57', '2021-08-03 04:43:18', NULL),
(77, 2, 'State\'s', '1627924571mp4', 'dfd', 4, 1, NULL, 'performance', 'performance', '2021-08-02 17:16:11', '2021-08-03 04:43:36', NULL),
(78, 2, 'State\'s', '1627924694mp4', 'gfd', 4, 1, NULL, 'performance', 'performance', '2021-08-02 17:18:14', '2021-08-03 04:46:15', NULL),
(79, 2, 'State\'s Performances', '1627924829mp4', NULL, NULL, NULL, NULL, 'performance', NULL, '2021-08-02 17:20:30', '2021-08-02 17:23:42', '2021-08-02 17:23:42'),
(80, 2, 'Busking', '1627925114mp4', 'fd', 6, 1, NULL, 'performance', 'performance', '2021-08-02 17:25:14', '2021-08-03 06:42:17', '2021-08-03 06:42:17'),
(81, 2, 'Busking', '1627925232mp4', 'fds', 6, 1, NULL, 'performance', 'performance', '2021-08-02 17:27:12', '2021-08-03 06:42:48', '2021-08-03 06:42:48'),
(82, 2, 'Busking', '1627925316mp4', 'fdsaa', 6, 0, NULL, 'performance', 'performance', '2021-08-02 17:28:36', '2021-08-03 06:43:37', '2021-08-03 06:43:37'),
(83, 2, 'Busking', '1627925422mp4', 'fsd', 6, 1, NULL, 'performance', 'performance', '2021-08-02 17:30:22', '2021-08-03 06:42:58', '2021-08-03 06:42:58'),
(84, 2, 'Busking', '1627925445mp4', 'dfs', 6, 0, NULL, 'performance', 'performance', '2021-08-02 17:30:45', '2021-08-03 06:43:45', '2021-08-03 06:43:45'),
(85, 2, 'Busking', '1627925548mp4', 'gdfds', 6, 1, NULL, 'performance', 'performance', '2021-08-02 17:32:29', '2021-08-03 06:43:24', '2021-08-03 06:43:24'),
(86, 2, 'National\'s', '1627925676mp4', 'fd', 7, 1, NULL, 'performance', 'performance', '2021-08-02 17:34:36', '2021-08-03 07:29:05', '2021-08-03 07:29:05'),
(87, 2, 'National\'s', '1627925696mp4', 'ds', 7, 1, NULL, 'performance', 'performance', '2021-08-02 17:34:56', '2021-08-03 07:29:12', '2021-08-03 07:29:12'),
(88, 2, 'National\'s', '1627925717mp4', 'cxz', 7, 1, NULL, 'performance', 'performance', '2021-08-02 17:35:17', '2021-08-03 07:29:22', '2021-08-03 07:29:22'),
(89, 2, 'National\'s', '1627925737mp4', 'xza', 7, 1, NULL, 'performance', 'performance', '2021-08-02 17:35:37', '2021-08-03 07:28:36', '2021-08-03 07:28:36'),
(90, 2, 'National\'s', '1627925758mp4', 'fds', 7, 1, NULL, 'performance', 'performance', '2021-08-02 17:35:58', '2021-08-03 07:28:42', '2021-08-03 07:28:42'),
(91, 2, 'National\'s', '1627925801mp4', 'dfd', 7, 1, NULL, 'performance', 'performance', '2021-08-02 17:36:41', '2021-08-03 07:29:33', '2021-08-03 07:29:33'),
(92, 2, 'Top', '1627926394mp4', 'frd', 16, 1, NULL, 'performance', 'performance', '2021-08-02 17:46:34', '2021-08-02 17:58:26', NULL),
(93, 2, 'Top', '1627926610mp4', 'dsa', 16, 1, NULL, 'performance', 'performance', '2021-08-02 17:50:10', '2021-08-02 17:59:12', NULL),
(94, 2, 'Top', '1627926740mp4', 'fd', 16, 1, NULL, 'performance', 'performance', '2021-08-02 17:52:20', '2021-08-02 17:59:53', NULL),
(95, 2, 'Top', '1627926845mp4', 'f', 16, 1, NULL, 'performance', 'performance', '2021-08-02 17:54:05', '2021-08-02 18:00:20', NULL),
(96, 2, 'Top', '1627927379mp4', 'gdf', 24, 0, NULL, 'performance', 'performance', '2021-08-02 18:02:59', '2021-08-03 05:16:22', '2021-08-03 05:16:22'),
(97, 2, 'Top', '1627927530mp4', 'fds', 24, 0, NULL, 'performance', 'performance', '2021-08-02 18:05:30', '2021-08-03 05:08:00', '2021-08-03 05:08:00'),
(98, 2, 'Top', '1627927657mp4', 'fds', 24, 1, NULL, 'performance', 'performance', '2021-08-02 18:07:38', '2021-08-02 18:08:32', NULL),
(99, 2, 'Top', '1627927936mp4', 'd', 26, 1, NULL, 'performance', 'performance', '2021-08-02 18:12:17', '2021-08-02 18:14:10', NULL),
(100, 2, 'Top', '1627928005mp4', 'd', 26, 1, NULL, 'performance', 'performance', '2021-08-02 18:13:25', '2021-08-02 18:14:32', NULL),
(101, 2, 'Top', '1627928115mp4', 'fd', 26, 1, NULL, 'performance', 'performance', '2021-08-02 18:15:15', '2021-08-02 18:18:14', NULL),
(102, 2, 'Top', '1627928216mp4', 'dfd', 26, 1, NULL, 'performance', 'performance', '2021-08-02 18:16:56', '2021-08-02 18:18:34', NULL),
(103, 2, 'Top', '1627928306mp4', 'j', 26, 1, NULL, 'performance', 'performance', '2021-08-02 18:18:26', '2021-08-02 18:19:18', NULL),
(104, 2, 'Top', '1627928428mp4', 'g', 26, 1, NULL, 'performance', 'performance', '2021-08-02 18:20:28', '2021-08-02 18:21:04', NULL),
(105, 2, 'abhinavkansal001@gmail.com', '1627965673mp4', NULL, NULL, NULL, NULL, 'performance', NULL, '2021-08-03 04:41:14', '2021-08-03 04:54:18', '2021-08-03 04:54:18'),
(106, 2, 'abhinavkansal001@gmail.com', '1627965674mp4', NULL, NULL, NULL, NULL, 'performance', NULL, '2021-08-03 04:41:14', '2021-08-03 04:54:33', '2021-08-03 04:54:33'),
(107, 2, 'State\'s', '1627966264mp4', 'vgzfd', 5, 1, NULL, 'performance', 'performance', '2021-08-03 04:51:04', '2021-08-03 04:55:05', NULL),
(108, 2, 'State\'s', '1627966298mp4', 'x', 5, 1, NULL, 'performance', 'performance', '2021-08-03 04:51:38', '2021-08-03 04:55:20', NULL),
(109, 2, 'State\'s', '1627966355mp4', 'cx', 5, 1, NULL, 'performance', 'performance', '2021-08-03 04:52:35', '2021-08-03 04:55:36', NULL),
(110, 2, 'State\'s', '1627966387mp4', 'vc', 5, 1, NULL, 'performance', 'performance', '2021-08-03 04:53:07', '2021-08-03 04:55:55', NULL),
(111, 2, 'State\'s', '1627966435mp4', 'x', 5, 1, NULL, 'performance', 'performance', '2021-08-03 04:53:55', '2021-08-03 04:56:10', NULL),
(112, 2, 'State\'s', '1627966654mp4', 'f', 5, 1, NULL, 'performance', 'performance', '2021-08-03 04:57:34', '2021-08-03 04:57:59', NULL),
(113, 2, 'Top', '1627967457mp4', 'vfd', 24, 1, NULL, 'performance', 'performance', '2021-08-03 05:10:57', '2021-08-03 05:14:46', NULL),
(114, 2, 'Top', '1627967941mp4', 're', 24, 1, NULL, 'performance', 'performance', '2021-08-03 05:19:01', '2021-08-03 05:20:08', NULL),
(115, 2, 'Top 10 Ranking Artisans', '1627968070mp4', NULL, NULL, 1, NULL, 'performance', NULL, '2021-08-03 05:21:10', '2021-08-03 05:24:02', '2021-08-03 05:24:02'),
(116, 2, 'Top', '1627968071mp4', 'df', 24, 1, NULL, 'performance', 'performance', '2021-08-03 05:21:11', '2021-08-03 05:21:58', NULL),
(117, 2, 'New', '1627968509mp4', 're', 29, 1, NULL, 'performance', 'performance', '2021-08-03 05:28:29', '2021-08-03 05:29:16', NULL),
(118, 2, 'New', '1627968542mp4', 'ef', 29, 1, NULL, 'performance', 'performance', '2021-08-03 05:29:02', '2021-08-03 05:29:55', NULL),
(119, 2, 'New', '1627968586mp4', 'f', 29, 1, NULL, 'performance', 'performance', '2021-08-03 05:29:46', '2021-08-03 05:30:16', NULL),
(120, 2, 'New', '1627968662mp4', 'mn', 29, 1, NULL, 'performance', 'performance', '2021-08-03 05:31:02', '2021-08-03 05:33:20', NULL),
(121, 2, 'New', '1627968698mp4', 'm', 29, 1, NULL, 'performance', 'performance', '2021-08-03 05:31:38', '2021-08-03 05:33:45', NULL),
(122, 2, 'New', '1627968890mp4', 'fds', 29, 1, NULL, 'performance', 'performance', '2021-08-03 05:34:50', '2021-08-03 05:35:40', NULL),
(123, 2, 'Popular', '1627969054mp4', 'vfds', 30, 1, NULL, 'performance', 'performance', '2021-08-03 05:37:34', '2021-08-03 05:43:03', NULL),
(124, 2, 'Popular', '1627969055mp4', 'fdsa', 30, 1, NULL, 'performance', 'performance', '2021-08-03 05:37:35', '2021-08-03 05:43:28', NULL),
(125, 2, 'Popular', '1627969106mp4', 'd', 30, 1, NULL, 'performance', 'performance', '2021-08-03 05:38:26', '2021-08-03 05:43:54', NULL),
(126, 2, 'Popular', '1627969155mp4', 'ds', 30, 1, NULL, 'performance', 'performance', '2021-08-03 05:39:16', '2021-08-03 05:44:21', NULL),
(127, 2, 'Popular', '1627969194mp4', 'fdew', 30, 1, NULL, 'performance', 'performance', '2021-08-03 05:39:54', '2021-08-03 05:44:57', NULL),
(128, 2, 'Popular', '1627969274mp4', 'dsa', 30, 1, NULL, 'performance', 'performance', '2021-08-03 05:41:14', '2021-08-03 05:45:22', NULL),
(129, 2, 'Theatrics', '1627969712mp4', 'dfr', 31, 1, NULL, 'performance', 'performance', '2021-08-03 05:48:32', '2021-08-03 05:55:25', NULL),
(130, 2, 'Theatrics', '1627969831mp4', 'bfd', 31, 1, NULL, 'performance', 'performance', '2021-08-03 05:50:31', '2021-08-03 05:55:51', NULL),
(131, 2, 'Theatrics', '1627969893mp4', 'd', 31, 1, NULL, 'performance', 'performance', '2021-08-03 05:51:33', '2021-08-03 05:56:20', NULL),
(132, 2, 'Theatrics', '1627969984mp4', 'fd', 31, 1, NULL, 'performance', 'performance', '2021-08-03 05:53:04', '2021-08-03 05:56:41', NULL),
(133, 2, 'Theatrics', '1627970048mp4', 'cd', 31, 1, NULL, 'performance', 'performance', '2021-08-03 05:54:09', '2021-08-03 05:57:04', NULL),
(134, 2, 'Theatrics', '1627970049mp4', 'fd', 31, 1, NULL, 'performance', 'performance', '2021-08-03 05:54:09', '2021-08-03 05:57:26', NULL),
(135, 2, 'Musicians', '1627970365mp4', 'ds', 32, 1, NULL, 'performance', 'performance', '2021-08-03 05:59:26', '2021-08-03 06:23:16', NULL),
(136, 2, 'Musicians', '1627970516mp4', 'd', 32, 1, NULL, 'performance', 'performance', '2021-08-03 06:01:57', '2021-08-03 06:23:37', NULL),
(137, 2, 'Theatrics', '1627971375mp4', NULL, NULL, NULL, NULL, 'performance', NULL, '2021-08-03 06:16:15', '2021-08-03 06:21:41', '2021-08-03 06:21:41'),
(138, 2, 'Theatrics', '1627971452mp4', NULL, NULL, NULL, NULL, 'performance', NULL, '2021-08-03 06:17:32', '2021-08-03 06:21:54', '2021-08-03 06:21:54'),
(139, 2, 'Musicians', '1627971505mp4', 'f', 32, 1, NULL, 'performance', 'performance', '2021-08-03 06:18:25', '2021-08-03 06:22:56', NULL),
(140, 2, 'Musicians', '1627971562mp4', 'd', 32, 1, NULL, 'performance', 'performance', '2021-08-03 06:19:23', '2021-08-03 06:24:12', NULL),
(141, 2, 'Musicians', '1627971668mp4', 'ss', 32, 1, NULL, 'performance', 'performance', '2021-08-03 06:21:08', '2021-08-03 06:24:35', NULL),
(142, 2, 'Musicians', '1627971950mp4', 'fd', 32, 1, NULL, 'performance', 'performance', '2021-08-03 06:25:50', '2021-08-03 06:26:18', NULL),
(143, 2, 'Trending', '1627972243mp4', 'vgfds', 28, 1, NULL, 'performance', 'performance', '2021-08-03 06:30:43', '2021-08-03 06:37:11', NULL),
(144, 2, 'Trending', '1627972272mp4', 'fs', 28, 1, NULL, 'performance', 'performance', '2021-08-03 06:31:12', '2021-08-03 06:37:30', NULL),
(145, 2, 'Trending', '1627972298mp4', 'xdc', 28, 1, NULL, 'performance', 'performance', '2021-08-03 06:31:38', '2021-08-03 06:37:51', NULL),
(146, 2, 'Trending', '1627972318mp4', 'c', 28, 1, NULL, 'performance', 'performance', '2021-08-03 06:31:58', '2021-08-03 06:38:15', NULL),
(147, 2, 'Trending', '1627972365mp4', 'xc', 28, 1, NULL, 'performance', 'performance', '2021-08-03 06:32:45', '2021-08-03 06:38:43', NULL),
(148, 2, 'Trending', '1627972387mp4', 'c', 28, 1, NULL, 'performance', 'performance', '2021-08-03 06:33:07', '2021-08-03 06:39:01', NULL),
(149, 2, 'Busking Board Performances', '1627972407mp4', 'vg', 6, 1, NULL, 'performance', 'performance', '2021-08-03 06:33:27', '2021-08-03 06:40:27', NULL),
(150, 2, 'Busking Board Performances', '1627972448mp4', 'dgb', 6, 1, NULL, 'performance', 'performance', '2021-08-03 06:34:08', '2021-08-03 06:40:53', NULL),
(151, 2, 'Busking Board Performances', '1627972482mp4', 'v', 6, 1, NULL, 'performance', 'performance', '2021-08-03 06:34:42', '2021-08-03 06:41:16', NULL),
(152, 2, 'Busking', '1627973057mp4', 'bx', 6, 1, NULL, 'performance', 'performance', '2021-08-03 06:44:17', '2021-08-03 06:46:32', NULL),
(153, 2, 'Busking', '1627973077mp4', 'g', 6, 1, NULL, 'performance', 'performance', '2021-08-03 06:44:37', '2021-08-03 06:46:54', NULL),
(154, 2, 'Busking', '1627973107mp4', 'dg', 6, 1, NULL, 'performance', 'performance', '2021-08-03 06:45:07', '2021-08-03 06:47:15', NULL),
(155, 2, 'Busking Board Performances', '1627973163mp4', NULL, NULL, NULL, NULL, 'performance', NULL, '2021-08-03 06:46:03', '2021-08-03 06:47:22', '2021-08-03 06:47:22'),
(156, 2, 'Recent', '1627973537mp4', 'SFC', 8, 1, NULL, 'performance', 'performance', '2021-08-03 06:52:17', '2021-08-03 06:58:44', NULL),
(157, 2, 'Recent', '1627973714mp4', 'df', 8, 1, NULL, 'performance', 'performance', '2021-08-03 06:55:14', '2021-08-03 06:59:19', NULL),
(158, 2, 'Recent', '1627973761mp4', 'd', 8, 1, NULL, 'performance', 'performance', '2021-08-03 06:56:01', '2021-08-03 06:59:41', NULL),
(159, 2, 'Recent', '1627973808mp4', 'dfc', 8, 1, NULL, 'performance', 'performance', '2021-08-03 06:56:48', '2021-08-03 06:59:59', NULL),
(160, 2, 'Recent', '1627973855mp4', 'd', 8, 1, NULL, 'performance', 'performance', '2021-08-03 06:57:35', '2021-08-03 07:00:14', NULL),
(161, 2, 'Recent', '1627973884mp4', 'df', 8, 1, NULL, 'performance', 'performance', '2021-08-03 06:58:04', '2021-08-03 07:00:30', NULL),
(162, 2, 'Top-10', '1627974105mp4', 'f', 9, 1, NULL, 'performance', 'performance', '2021-08-03 07:01:45', '2021-08-03 07:07:40', NULL),
(163, 2, 'Top-10', '1627974139mp4', 'f', 9, 1, NULL, 'performance', 'performance', '2021-08-03 07:02:19', '2021-08-03 07:07:58', NULL),
(164, 2, 'Top-10', '1627974181mp4', 'f', 9, 1, NULL, 'performance', 'performance', '2021-08-03 07:03:01', '2021-08-03 07:08:18', NULL),
(165, 2, 'Top-10', '1627974243mp4', 'cc', 9, 1, NULL, 'performance', 'performance', '2021-08-03 07:04:03', '2021-08-03 07:08:39', NULL),
(166, 2, 'Top-10', '1627974367mp4', 'v', 9, 1, NULL, 'performance', 'performance', '2021-08-03 07:06:07', '2021-08-03 07:08:56', NULL),
(167, 2, 'Top-10', '1627974410mp4', 'df', 9, 1, NULL, 'performance', 'performance', '2021-08-03 07:06:50', '2021-08-03 07:09:30', NULL),
(168, 2, 'Trending', '1627974693mp4', 'f', 10, 1, NULL, 'performance', 'performance', '2021-08-03 07:11:33', '2021-08-03 07:17:38', NULL),
(169, 2, 'Trending', '1627974730mp4', 'd', 10, 1, NULL, 'performance', 'performance', '2021-08-03 07:12:10', '2021-08-03 07:17:59', NULL),
(170, 2, 'Trending', '1627974839mp4', 'f', 10, 1, NULL, 'performance', 'performance', '2021-08-03 07:13:59', '2021-08-03 07:18:18', NULL),
(171, 2, 'Trending', '1627974904mp4', 'dds', 10, 1, NULL, 'performance', 'performance', '2021-08-03 07:15:04', '2021-08-03 07:18:40', NULL),
(172, 2, 'Trending', '1627974947mp4', 'ds', 10, 1, NULL, 'performance', 'performance', '2021-08-03 07:15:47', '2021-08-03 07:19:04', NULL),
(173, 2, 'Trending', '1627975001mp4', 'fd', 10, 1, NULL, 'performance', 'performance', '2021-08-03 07:16:41', '2021-08-03 07:19:33', NULL),
(174, 2, 'National\'s', '1627975836mp4', 'df', 7, 1, NULL, 'performance', 'performance', '2021-08-03 07:30:36', '2021-08-03 07:57:47', NULL),
(175, 2, 'National\'s', '1627975896mp4', 'd', 7, 1, NULL, 'performance', 'performance', '2021-08-03 07:31:36', '2021-08-03 07:58:06', NULL),
(176, 2, 'National\'s', '1627975983mp4', 'd', 7, 1, NULL, 'performance', 'performance', '2021-08-03 07:33:03', '2021-08-03 07:58:21', NULL),
(177, 2, 'National\'s', '1627976377mp4', 'ds', 7, 1, NULL, 'performance', 'performance', '2021-08-03 07:39:37', '2021-08-03 07:58:35', NULL),
(178, 2, 'National\'s', '1627977270mp4', 'd', 7, 1, NULL, 'performance', 'performance', '2021-08-03 07:54:30', '2021-08-03 07:58:48', NULL),
(179, 2, 'National\'s', '1627977342mp4', 'sd', 7, 1, NULL, 'performance', 'performance', '2021-08-03 07:55:42', '2021-08-03 07:59:07', NULL),
(180, 2, 'Boutique', '1627978396mp4', 'dd', 34, 1, NULL, 'performance', 'performance', '2021-08-03 08:13:16', '2021-08-03 08:18:45', NULL),
(181, 2, 'Boutique', '1627978466mp4', 'fd', 34, 1, NULL, 'performance', 'performance', '2021-08-03 08:14:26', '2021-08-03 08:19:10', NULL),
(182, 2, 'Boutique', '1627978512mp4', 'd', 34, 1, NULL, 'performance', 'performance', '2021-08-03 08:15:12', '2021-08-03 08:19:32', NULL),
(183, 2, 'Boutique', '1627978535mp4', 'ds', 34, 1, NULL, 'performance', 'performance', '2021-08-03 08:15:35', '2021-08-03 08:20:00', NULL),
(184, 2, 'Boutique', '1627978561mp4', 'df', 34, 1, NULL, 'performance', 'performance', '2021-08-03 08:16:01', '2021-08-03 08:20:34', NULL),
(185, 2, 'Boutique', '1627978601mp4', 'd', 34, 1, NULL, 'performance', 'performance', '2021-08-03 08:16:41', '2021-08-03 08:20:58', NULL),
(186, 2, 'Boutique', '1627979204mp4', 'fd', 35, 1, NULL, 'performance', 'performance', '2021-08-03 08:26:44', '2021-08-03 08:35:51', NULL),
(187, 2, 'Boutique', '1627979528mp4', 'f', 35, 1, NULL, 'performance', 'performance', '2021-08-03 08:32:08', '2021-08-03 08:36:28', NULL),
(188, 2, 'Boutique', '1627979570mp4', 'ds', 35, 1, NULL, 'performance', 'performance', '2021-08-03 08:32:50', '2021-08-03 08:36:53', NULL),
(189, 2, 'Boutique', '1627979604mp4', 'gfd', 35, 1, NULL, 'performance', 'performance', '2021-08-03 08:33:24', '2021-08-03 08:37:15', NULL),
(190, 2, 'Boutique', '1627979625mp4', 'gfd', 35, 1, NULL, 'performance', 'performance', '2021-08-03 08:33:45', '2021-08-03 08:37:39', NULL),
(191, 2, 'Boutique', '1627979654mp4', 'fd', 35, 1, NULL, 'performance', 'performance', '2021-08-03 08:34:14', '2021-08-03 08:38:17', NULL),
(192, 2, 'Boutique Showcase', '1627979708mp4', NULL, NULL, NULL, NULL, 'performance', NULL, '2021-08-03 08:35:08', '2021-08-03 08:38:26', '2021-08-03 08:38:26'),
(193, 2, 'Specialty', '1627980026mp4', 'fd', 36, 1, NULL, 'performance', 'performance', '2021-08-03 08:40:26', '2021-08-03 08:55:54', NULL),
(194, 2, 'Specialty', '1627980520mp4', 'v', 36, 1, NULL, 'performance', 'performance', '2021-08-03 08:48:40', '2021-08-03 08:56:17', NULL),
(195, 2, 'Specialty', '1627980689mp4', 'df', 36, 1, NULL, 'performance', 'performance', '2021-08-03 08:51:29', '2021-08-03 08:56:45', NULL),
(196, 2, 'Specialty', '1627980726mp4', 'ff', 36, 1, NULL, 'performance', 'performance', '2021-08-03 08:52:06', '2021-08-03 08:57:01', NULL),
(197, 2, 'Specialty', '1627980866mp4', 'cv', 36, 1, NULL, 'performance', 'performance', '2021-08-03 08:54:26', '2021-08-03 08:57:20', NULL),
(198, 2, 'Specialty', '1627980896mp4', 'sf', 36, 1, NULL, 'performance', 'performance', '2021-08-03 08:54:56', '2021-08-03 08:57:38', NULL),
(199, 2, 'Products', '1627981252mp4', 'df', 37, 1, NULL, 'performance', 'performance', '2021-08-03 09:00:52', '2021-08-03 09:09:23', NULL),
(200, 2, 'Products', '1627981325mp4', 'fd', 37, 1, NULL, 'performance', 'performance', '2021-08-03 09:02:05', '2021-08-03 09:09:47', NULL),
(201, 2, 'Products', '1627981436mp4', 'f', 37, 1, NULL, 'performance', 'performance', '2021-08-03 09:03:56', '2021-08-03 09:10:09', NULL),
(202, 2, 'Products', '1627981506mp4', 'd', 37, 1, NULL, 'performance', 'performance', '2021-08-03 09:05:06', '2021-08-03 09:10:27', NULL),
(203, 2, 'Products', '1627981632mp4', 'd', 37, 1, NULL, 'performance', 'performance', '2021-08-03 09:07:12', '2021-08-03 09:10:51', NULL),
(204, 2, 'Products', '1627981682mp4', 'dd', 37, 1, NULL, 'performance', 'performance', '2021-08-03 09:08:02', '2021-08-03 09:11:17', NULL),
(205, 2, 'Classifieds', '1627981979mp4', 'rf', 38, 1, NULL, 'performance', 'performance', '2021-08-03 09:12:59', '2021-08-03 09:18:10', NULL),
(206, 2, 'Classifieds', '1627982015mp4', 'fd', 38, 1, NULL, 'performance', 'performance', '2021-08-03 09:13:35', '2021-08-03 09:18:30', NULL),
(207, 2, 'Classifieds', '1627982052mp4', 'fhx', 38, 1, NULL, 'performance', 'performance', '2021-08-03 09:14:12', '2021-08-03 09:19:33', NULL),
(208, 2, 'Classifieds', '1627982102mp4', 'dd', 38, 1, NULL, 'performance', 'performance', '2021-08-03 09:15:02', '2021-08-03 09:19:56', NULL),
(209, 2, 'Classifieds', '1627982150mp4', 'fx', 38, 1, NULL, 'performance', 'performance', '2021-08-03 09:15:50', '2021-08-03 09:20:20', NULL),
(210, 2, 'Classifieds', '1627982201mp4', 'dd', 38, 1, NULL, 'performance', 'performance', '2021-08-03 09:16:41', '2021-08-03 09:20:37', NULL),
(211, 2, 'Classifieds', '1627982235mp4', 'ffh', 38, 1, NULL, 'performance', 'performance', '2021-08-03 09:17:15', '2021-08-03 09:20:59', NULL),
(212, 0, 'Home', 'WHO WE ARE.mp4', 'h', 1, 1, NULL, 'performance', 'home', '2021-08-03 16:46:01', '2021-08-03 16:46:01', NULL),
(213, 0, 'Judges', 'Promotion-Weekly Buskers Performances-2020 Revised (2).mp4', 'g', 1, 1, NULL, 'performance', 'judge', '2021-08-16 15:58:30', '2021-08-16 16:22:27', NULL),
(214, 0, 'test', 'file_example_MP4_640_3MG.mp4', 'd', 11, 1, 'slider.jpg', 'performance', 'home', '2021-09-21 08:14:07', '2021-09-21 08:16:21', '2021-09-21 08:16:21'),
(215, 0, 'test', 'file_example_MP4_640_3MG.mp4', 'test', 2, 1, 'slider.jpg', 'performance', 'home', '2021-09-22 05:03:41', '2021-09-22 05:03:47', '2021-09-22 05:03:47'),
(216, 0, 'hhh', 'file_example_MP4_480_1_5MG.mp4', 'hgh', 11, 1, '360_F_260040900_oO6YW1sHTnKxby4GcjCvtypUCWjnQRg5.jpg', 'performance', 'home', '2021-12-01 11:04:53', '2021-12-01 11:04:53', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `videos_backup`
--

CREATE TABLE `videos_backup` (
  `id` bigint UNSIGNED NOT NULL,
  `teacher_id` int UNSIGNED DEFAULT NULL,
  `category_id` int UNSIGNED DEFAULT NULL,
  `topic_id` int UNSIGNED DEFAULT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video_path` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thumbnail` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video_order` int UNSIGNED DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `videos_backup`
--

INSERT INTO `videos_backup` (`id`, `teacher_id`, `category_id`, `topic_id`, `title`, `slug`, `description`, `video_type`, `video_path`, `thumbnail`, `video_order`, `active`, `created_at`, `updated_at`) VALUES
(1, 8, NULL, NULL, 'Sample 1', NULL, NULL, NULL, '664145097_1612692542_Sample 2.mp4', '321181563_1612692542_2.jpg', NULL, 1, '2021-02-07 10:09:15', '2021-02-07 10:09:18'),
(2, 8, NULL, NULL, 'Sample 2', NULL, NULL, NULL, '542119522_1612692582_Sample 4.mp4', '1604551977_1612692582_9.jpg', NULL, 1, '2021-02-07 10:09:50', '2021-02-07 10:09:55');

-- --------------------------------------------------------

--
-- Table structure for table `video_likes`
--

CREATE TABLE `video_likes` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` int NOT NULL,
  `video_id` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `video_likes`
--

INSERT INTO `video_likes` (`id`, `user_id`, `video_id`, `created_at`, `updated_at`) VALUES
(1, 2, 3, '2021-07-26 16:10:33', '2021-07-26 16:10:33'),
(3, 2, 2, '2021-07-26 19:04:24', '2021-07-26 19:04:24'),
(4, 2, 1, '2021-07-26 19:04:27', '2021-07-26 19:04:27'),
(40, 2, 156, '2021-08-04 18:15:02', '2021-08-04 18:15:02'),
(41, 2, 157, '2021-08-04 18:15:10', '2021-08-04 18:15:10'),
(42, 2, 158, '2021-08-04 18:15:13', '2021-08-04 18:15:13'),
(45, 2, 11, '2021-08-18 16:10:52', '2021-08-18 16:10:52'),
(53, 2, 73, '2021-08-26 08:17:00', '2021-08-26 08:17:00'),
(54, 2, 74, '2021-08-26 08:17:01', '2021-08-26 08:17:01'),
(55, 2, 12, '2021-09-04 12:04:27', '2021-09-04 12:04:27'),
(56, 13, 73, '2021-11-11 17:20:12', '2021-11-11 17:20:12'),
(57, 13, 74, '2021-11-11 17:20:15', '2021-11-11 17:20:15'),
(58, 13, 75, '2021-11-11 17:20:16', '2021-11-11 17:20:16');

-- --------------------------------------------------------

--
-- Table structure for table `video_views`
--

CREATE TABLE `video_views` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` int NOT NULL,
  `video_id` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `web_users`
--

CREATE TABLE `web_users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` int DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci,
  `occupation` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dob` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profile_image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_id` int DEFAULT NULL,
  `apply_busker_performance` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `term_and_condition` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content_permission` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `adult_checkbox` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `us_citizen` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `legal_permanent` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `proof_of_residence` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `authorization_card` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo_and_video` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `apply_competition` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `web_users`
--

INSERT INTO `web_users` (`id`, `name`, `email`, `gender`, `address`, `occupation`, `dob`, `mobile`, `password`, `profile_image`, `category_id`, `apply_busker_performance`, `term_and_condition`, `content_permission`, `adult_checkbox`, `us_citizen`, `legal_permanent`, `proof_of_residence`, `authorization_card`, `photo_and_video`, `apply_competition`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Ashish Tripathi', 'ashish.tripathi.543@gmail.com', NULL, NULL, NULL, NULL, '0123456789', '$2y$10$/1Ew3YSwWlvpU/vBrCBQJOxG3NpMTLi3XuFfEV.Ljp4Lrq.EMRwhi', '', NULL, '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', NULL, '2021-02-17 02:19:43', '2021-02-18 00:47:48', NULL),
(2, 'Sumit kr', 'abhinavkansal001@gmail.com', 1, 'Delhi', 'Er', '1990-01-01', '123456789', '$2y$10$4XdhzSR.b.FRxT9Diq5KFeTDscuE5mMRTz6OfImFzzsi635LPAw2S', '20210824162543.png', NULL, '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', NULL, '2021-03-04 01:02:01', '2021-08-27 16:19:35', NULL),
(3, 'john mark', 'john@gmail.com', NULL, NULL, NULL, '12-11-2021', '0123456789', '$2y$10$bFPF/EPNoAUfv9MjLKZY5ODau/kX8e9I2y1uXjrJme.HM3hZb6O6u', NULL, NULL, '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1QrLF0SfvNMfOIq2NqfgXPX5aqjPmbLH7PsdDQzXCaTSLHROlzdjaf5nU26M', '2021-03-04 01:13:03', '2021-03-04 01:13:03', NULL),
(4, 'vikash rai', 'vikash27hbk@gmail.com', NULL, NULL, NULL, '01-03-1991', '6202063545', '$2y$10$ULaL3MiUJT4pVRF1skgzrOMMDzdQCyl5kzKQdjT7PsLkeJbXQOPpC', NULL, NULL, '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', 'gyQ0JMJEzDeAYW2XDe7jiUmC4txhfawNbrF67qFQFrHuqbkOWj1dUc1H9zVo', '2021-03-20 01:41:39', '2021-03-20 01:41:39', NULL),
(5, 'Vicki Coup', 'juced21@yahoo.com', 2, 'P.O.BOX 72\r\nLaporte PA 18626', 'WoodCraft DESIGNER', '1970-01-01', '5704904091', '$2y$10$NAYIx/wsDoZMcpXNXz0xyumEBCi.LDxVFPYTk/rcOyT3LuhsqwzSG', '20210917235205.jpg', 98, NULL, '1', '1', NULL, '1', '1', '1', '1', '1', '2', NULL, '2021-09-17 23:02:01', '2021-09-17 23:52:05', NULL),
(6, 'Janice Bouldin', 'jan@communitycic.org', 2, 'P.O. BOX 11127\r\nOakland, CA 94612', 'Jewlery Designer', '1975-11-03', '4159717471', '$2y$10$C9KWDT0CsQ1J0MBVSCXxl.QkVKcCb.4vsdP9FT0.ck6H6WISvG4aK', NULL, 81, NULL, '1', '1', NULL, '1', '1', '1', '1', '1', '2', NULL, '2021-09-17 23:14:13', '2021-09-18 00:15:47', NULL),
(7, 'test test', 'cbg@gmail.com', NULL, NULL, NULL, '8-8-8888', '64563546453456', '$2y$10$NaGdmRhl7Ws5GE3IP32KpOkWMy8xXvQ6V3fus.FOiCCTZ1VvX4H6q', NULL, 16, NULL, '1', '1', NULL, '1', '1', '1', '1', '1', '2', NULL, '2021-09-21 06:41:41', '2021-09-21 06:41:41', NULL),
(8, 'test newtest', 'newtest@gmail.com', NULL, NULL, NULL, '6-6-6666', '2525252525', '$2y$10$LR6eLVdDh9rkKOzFCBUlWuSTBJAxqbPwB/9KsPbhWDemgJeFrQDSW', NULL, 19, NULL, '1', '1', NULL, '1', '1', '1', '1', '1', '2', NULL, '2021-09-21 10:26:42', '2021-09-21 10:26:42', NULL),
(13, 'Sam', 'shanknagar190@gmail.com', NULL, NULL, NULL, NULL, '8285579134', '$2y$10$VMmG4eejhzWDFPvGBuUHD.0pYMAJKU3jagaQJAUVsP9O5/d8lAso.', NULL, NULL, NULL, NULL, NULL, NULL, '1', '1', '1', '1', '1', NULL, NULL, '2021-10-14 16:05:45', '2021-10-14 16:05:45', NULL),
(14, 'fhhfh', 'j@j.com', NULL, NULL, NULL, NULL, '4545454', '$2y$10$dJ0U9HyNWr6E4adYF3dpve2CQ2RC5pjJjyrnURvORY6IUDveVQ0fu', NULL, NULL, NULL, NULL, NULL, NULL, '1', '1', '1', '1', '1', NULL, NULL, '2021-11-09 10:49:57', '2021-11-09 10:49:57', NULL),
(15, 'fdfdfs', 'bh@rt.ll', NULL, NULL, NULL, NULL, '6777777', '$2y$10$bc73ZBY4X/xfguHMvnTprerF2ciYXDdDBoHqnBz1rjk6uRFyLewZW', NULL, NULL, NULL, NULL, NULL, NULL, '1', '1', '1', '1', '1', NULL, NULL, '2021-11-10 09:55:11', '2021-11-10 09:55:11', NULL),
(16, 'Shashank Nagar', 'shashanknagar190@gmail.com', 1, 'D4 1103 Nirala Aspire', 'na', '1970-01-01', '1111111111', '$2y$10$c50zkRUuYU.h3wBM9htqF.ZY1M3Z6p7BQSHvniCop9pakm9st1kXe', '20211110165841.png', 98, NULL, NULL, NULL, NULL, '1', '1', '1', '1', '1', NULL, NULL, '2021-11-10 16:36:45', '2021-11-11 15:44:52', NULL),
(17, 'jjjj', 'k7@b.com', NULL, NULL, NULL, NULL, '677777777nn', '$2y$10$bYpp8YQ.3COQbERJr2H6Z.dcx7Fqi8hEmXPrRNCUjIgLx6BI7uHca', NULL, NULL, NULL, NULL, NULL, NULL, '1', '1', '1', '1', '1', NULL, NULL, '2021-11-11 07:55:09', '2021-11-11 07:55:09', NULL),
(18, 'gdfg gdg', 'aa@jk.com', NULL, NULL, NULL, '34-25-1990', '565656', '$2y$10$M8snIKqPf08C.zAjYTNBx.u68ciwOIRgVqk1hFYmPrtW1ryXUbtZO', NULL, NULL, NULL, '1', '1', NULL, '1', '1', '1', '1', '1', NULL, 'uEDBLr9nVGqsNJDDdptiNnWyr0v6YpVaa54EN0YmYKymyBd8eIOYl1UjVIJJ', '2021-11-11 08:04:15', '2021-11-11 08:04:15', NULL),
(19, 'fdf', 'a11a@jk.com', NULL, NULL, NULL, NULL, '656', '$2y$10$qfZBYJrfTqmhhB/Km.2a0ebFx69HhC2bcfPgZhZDpKx5CSLQa8wFu', NULL, NULL, NULL, NULL, NULL, NULL, '1', '1', '1', '1', '1', NULL, NULL, '2021-11-11 09:22:13', '2021-11-11 09:22:13', NULL),
(20, 'bvbvb', 'fgg@jj.com', NULL, NULL, NULL, NULL, '65', '$2y$10$CsgSG5hZ4YZn0Z3bGLfR6.plMGan/aB49hQ9fporfeRu8/oXaTsfi', '360_F_260040900_oO6YW1sHTnKxby4GcjCvtypUCWjnQRg5.jpg', NULL, NULL, NULL, NULL, NULL, '1', '1', '1', '1', '1', NULL, NULL, '2021-11-11 09:37:44', '2021-11-11 09:37:44', NULL),
(21, 'teete', 'yyy@jj.ll', NULL, NULL, NULL, NULL, '66666', '$2y$10$SS09qyxwe6gEb00I37UfeOnA7dY4.vYhxZkBf0qkHjscppfPAFzzW', NULL, NULL, NULL, NULL, NULL, NULL, '1', '1', '1', '1', '1', NULL, NULL, '2021-11-12 08:45:33', '2021-11-12 08:45:33', NULL),
(22, 'teete', 'yyy@jj.llj', NULL, NULL, NULL, NULL, '66666', '$2y$10$d.7OAX0Lzxt9DG40WPn8F.l7MJn73DNafkv64f8M/48nxAF4DHsku', NULL, NULL, NULL, NULL, NULL, NULL, '1', '1', '1', '1', '1', NULL, NULL, '2021-11-12 08:45:57', '2021-11-12 08:45:57', NULL),
(23, 'teete', 'ffyyy@jj.llj', NULL, NULL, NULL, NULL, '66666', '$2y$10$c3YoU3ME.JyTVsnyuNyzSeZtXzdaNBVoBq/nE/PZL4pM56qaxcUl6', NULL, NULL, NULL, NULL, NULL, NULL, '1', '1', '1', '1', '1', NULL, NULL, '2021-11-12 08:47:34', '2021-11-12 08:47:34', NULL),
(24, 'teete', 'tffyyy@jj.llj', NULL, NULL, NULL, NULL, '66666', '$2y$10$RmxQMTiMFQwXokqGGmdetucxmI5ztfESjEZP5slZfCQ6IE6I3owGi', NULL, NULL, NULL, NULL, NULL, NULL, '1', '1', '1', '1', '1', NULL, NULL, '2021-11-12 08:48:36', '2021-11-12 08:48:36', NULL),
(25, 'teete', 'vtffyyy@jj.llj', NULL, NULL, NULL, NULL, '66666', '$2y$10$Z6Tx4D2nUQGUO48ICII.zuA4RhEevmaep/Ox5tWMBCstebRSu2.XC', NULL, NULL, NULL, NULL, NULL, NULL, '1', '1', '1', '1', '1', NULL, NULL, '2021-11-12 08:49:53', '2021-11-12 08:49:53', NULL),
(26, 'teete', 'vtfffyyy@jj.llj', NULL, NULL, NULL, NULL, '66666', '$2y$10$0eDdb7XzDC.JzYiwQabVjOiyns1KQ8jVdXSe7bcxIHcwLAx9fk8He', NULL, NULL, NULL, NULL, NULL, NULL, '1', '1', '1', '1', '1', NULL, NULL, '2021-11-12 08:50:51', '2021-11-12 08:50:51', NULL),
(27, 'dsd', 'gty@uu.com', NULL, NULL, NULL, NULL, '656', '$2y$10$zcOzkvsQZWtQ9euVhUG9yugclpIdBPF.d/xh6QYghNmhzTbqI7POW', NULL, 102, NULL, NULL, NULL, NULL, '1', '1', '1', '1', '1', NULL, NULL, '2021-11-12 13:00:10', '2021-11-12 13:00:10', NULL),
(29, ' gfgf mm', 'test@gmail.com', NULL, NULL, NULL, NULL, '4245265', '$2y$10$.4BixXujc2ekhaUcWt2J..BZj7xUh3mDCFapF9rfUdXoWOAvsLQp2', NULL, NULL, NULL, NULL, NULL, NULL, '1', '1', '1', '1', '1', NULL, NULL, '2021-12-04 08:50:48', '2021-12-04 08:50:48', NULL),
(31, ' gfg', 'test1@gmail.com', NULL, NULL, NULL, NULL, '54545', '$2y$10$d0s1OT2unXHCsjwaG98rjOQ/c2tk9MGmDZpoENSspgLAN3rUsTkY2', NULL, NULL, NULL, NULL, NULL, NULL, '1', '1', '1', '1', '1', NULL, NULL, '2021-12-04 09:11:36', '2021-12-04 09:11:36', NULL),
(32, ' gfgfgf', 'test2@gmail.com', NULL, NULL, NULL, NULL, '3434343', '$2y$10$IoCTLgo7gPLH.km8DMbqzOwE1KsKcr2y1vZ9NW3.CYqDocN8Ck4qe', NULL, NULL, NULL, NULL, NULL, NULL, '1', '1', '1', '1', '1', NULL, NULL, '2021-12-04 09:12:57', '2021-12-04 09:12:57', NULL),
(33, 'ff ff', 'test5@gmailc.com', NULL, NULL, NULL, NULL, 'tw', '$2y$10$ZzpB1IOCaR7JhXuixmi0muyAIOrWkPOLcJ4jiyR0Klu5eGjsg3kky', NULL, NULL, NULL, NULL, NULL, NULL, '1', '1', '1', '1', '1', NULL, NULL, '2021-12-07 09:20:57', '2021-12-07 09:20:57', NULL),
(34, 'bvb bvb', 'testoo@gmm.cc', NULL, NULL, NULL, NULL, '675656', '$2y$10$Sds1BusTN1eUlEMri08ctOlHT.pjN6TlOb3yH2pFcN1Q1.m4M3K5e', NULL, NULL, NULL, NULL, NULL, NULL, '1', '1', '1', '1', '1', NULL, NULL, '2021-12-07 09:22:26', '2021-12-07 09:22:26', NULL),
(35, 'gfg gsgs', 'gsbbg@gh.ll', NULL, NULL, NULL, NULL, '5454', '$2y$10$VZxBSxYyE3TtL2fLxk3Za.gqBnRX6/LdHmDGp55AMovjh1G0pemoS', NULL, NULL, NULL, NULL, NULL, NULL, '1', '1', '1', '1', '1', NULL, NULL, '2021-12-07 09:48:36', '2021-12-07 09:48:36', NULL),
(36, 'fsdfs fsf', 'mfsfsfm@mm.com', NULL, NULL, NULL, NULL, '5454545', '$2y$10$8i4lQMcqusA.y2S4i.tOcu8H4cruD3gZOgTgNNKt5HVN2TxI0gBuu', NULL, NULL, NULL, NULL, NULL, NULL, '1', '1', '1', '1', '1', NULL, NULL, '2021-12-07 09:50:11', '2021-12-07 09:50:11', NULL),
(37, 'fdf fdf', 'yui@gmail.com', NULL, NULL, NULL, NULL, '454545', '$2y$10$C10wdYU7Z29skNBozWwok.m63BEaTaGqsWJ5M9Td.yBV3pMJqLfjm', NULL, NULL, NULL, NULL, NULL, NULL, '1', '1', '1', '1', '1', NULL, NULL, '2021-12-07 10:07:19', '2021-12-07 10:07:19', NULL),
(38, 'dad dada', 'test1sss@gmail.com', NULL, NULL, NULL, NULL, '4334', '$2y$10$TIf7ElyXAXXyhg9hDrIynOr.q/dtIJ/1I.BXWSk31KTjbIvqXLxrC', NULL, NULL, NULL, NULL, NULL, NULL, '1', '1', '1', '1', '1', NULL, NULL, '2021-12-07 10:08:33', '2021-12-07 10:08:33', NULL),
(39, 'gffg gfg', 'tt@hh.com', NULL, NULL, NULL, NULL, '123456', '$2y$10$Vt.GqHG1XRliaVCIbOD7sudt3VtZw52cBtGmLEgY/in1qJrxGDnf2', NULL, NULL, NULL, NULL, NULL, NULL, '1', '1', '1', '1', '1', NULL, NULL, '2021-12-07 10:12:09', '2021-12-07 10:12:09', NULL),
(40, 'fdf fdf', 'fdffd@jj.ll', NULL, NULL, NULL, NULL, '65656', '$2y$10$.SGbE93bS970sIx.fRcmEeQozZhn.JZKU9u5xZogSx2ZvWg25sXQa', NULL, NULL, NULL, NULL, NULL, NULL, '1', '1', '1', '1', '1', NULL, NULL, '2021-12-07 10:14:08', '2021-12-07 10:14:08', NULL),
(41, 'Sam Nagar', 'bitturaze@gmail.com', NULL, NULL, NULL, NULL, '+918285579134', '$2y$10$lLbu7JyvWfFg4FLeoO11Guagd3Jzce30PFUSFnrPY52CpG.lEWvD2', NULL, NULL, NULL, NULL, NULL, NULL, '1', '1', '1', '1', '1', NULL, NULL, '2021-12-08 18:52:03', '2021-12-08 18:52:03', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addresses`
--
ALTER TABLE `addresses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admission_classes`
--
ALTER TABLE `admission_classes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `advertisers`
--
ALTER TABLE `advertisers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auditions`
--
ALTER TABLE `auditions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `state` (`state`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `boutiques`
--
ALTER TABLE `boutiques`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `cart_storage`
--
ALTER TABLE `cart_storage`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cart_storage_id_index` (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category_teacher`
--
ALTER TABLE `category_teacher`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `channel`
--
ALTER TABLE `channel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event_registrations`
--
ALTER TABLE `event_registrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `followers`
--
ALTER TABLE `followers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_banners`
--
ALTER TABLE `home_banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `internships`
--
ALTER TABLE `internships`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `languages`
--
ALTER TABLE `languages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `language_teacher`
--
ALTER TABLE `language_teacher`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_access_tokens`
--
ALTER TABLE `oauth_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_access_tokens_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_auth_codes`
--
ALTER TABLE `oauth_auth_codes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_auth_codes_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_clients_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_refresh_tokens`
--
ALTER TABLE `oauth_refresh_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_refresh_tokens_access_token_id_index` (`access_token_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `address_id` (`address_id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `our_community`
--
ALTER TABLE `our_community`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partners`
--
ALTER TABLE `partners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`(191));

--
-- Indexes for table `productcategories`
--
ALTER TABLE `productcategories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sponsors`
--
ALTER TABLE `sponsors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `states`
--
ALTER TABLE `states`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `topics`
--
ALTER TABLE `topics`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaction_histories`
--
ALTER TABLE `transaction_histories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usercategories`
--
ALTER TABLE `usercategories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `videos_backup`
--
ALTER TABLE `videos_backup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `video_likes`
--
ALTER TABLE `video_likes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `video_views`
--
ALTER TABLE `video_views`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `web_users`
--
ALTER TABLE `web_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addresses`
--
ALTER TABLE `addresses`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `advertisers`
--
ALTER TABLE `advertisers`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `auditions`
--
ALTER TABLE `auditions`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `boutiques`
--
ALTER TABLE `boutiques`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `channel`
--
ALTER TABLE `channel`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `event_registrations`
--
ALTER TABLE `event_registrations`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `followers`
--
ALTER TABLE `followers`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `home_banners`
--
ALTER TABLE `home_banners`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `internships`
--
ALTER TABLE `internships`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `our_community`
--
ALTER TABLE `our_community`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `partners`
--
ALTER TABLE `partners`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `productcategories`
--
ALTER TABLE `productcategories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sponsors`
--
ALTER TABLE `sponsors`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `usercategories`
--
ALTER TABLE `usercategories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=217;

--
-- AUTO_INCREMENT for table `video_likes`
--
ALTER TABLE `video_likes`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `video_views`
--
ALTER TABLE `video_views`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `web_users`
--
ALTER TABLE `web_users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `auditions`
--
ALTER TABLE `auditions`
  ADD CONSTRAINT `auditions_ibfk_3` FOREIGN KEY (`user_id`) REFERENCES `web_users` (`id`) ON DELETE SET NULL ON UPDATE RESTRICT;

--
-- Constraints for table `boutiques`
--
ALTER TABLE `boutiques`
  ADD CONSTRAINT `boutiques_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `web_users` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`address_id`) REFERENCES `addresses` (`id`) ON DELETE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
