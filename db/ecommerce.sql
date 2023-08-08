-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 08, 2023 at 04:54 PM
-- Server version: 8.0.31
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

DROP TABLE IF EXISTS `booking`;
CREATE TABLE IF NOT EXISTS `booking` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `number` varchar(191) NOT NULL,
  `package` int NOT NULL,
  `adult` int NOT NULL,
  `child` int NOT NULL,
  `date` date NOT NULL,
  `message` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `name`, `email`, `number`, `package`, `adult`, `child`, `date`, `message`, `created_at`, `updated_at`) VALUES
(4, 'Chamod Dushyantha Randeni', 'chamoddushantha2014@gmail.com', '0769816111', 1, 11, 8, '2023-05-23', 'scscscscscscscscscsc dcsdcsc', '2023-05-03 13:52:54', '2023-05-03 13:52:54'),
(5, 'Chamod Dushyantha Randeni', 'chamoddushantha2014@gmail.com', '0769816111', 4, 14, 10, '2023-05-02', 'fefefefefwffewfrferfrf', '2023-05-08 02:28:49', '2023-05-08 02:28:49');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) NOT NULL,
  `slug` varchar(191) NOT NULL,
  `description` longtext NOT NULL,
  `status` tinyint NOT NULL DEFAULT '0',
  `populer` tinyint NOT NULL DEFAULT '0',
  `image` varchar(191) DEFAULT NULL,
  `meta_title` varchar(191) NOT NULL,
  `meta_descrip` varchar(191) NOT NULL,
  `meta_keywords` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `description`, `status`, `populer`, `image`, `meta_title`, `meta_descrip`, `meta_keywords`, `created_at`, `updated_at`) VALUES
(12, 'cake', 'icing cake', 'loemsja n ixj nx', 1, 0, '1680247269.jpg', 'text,text', 'dcsdcdsc', 'scdcdc', '2023-03-31 01:51:11', '2023-03-31 01:51:11'),
(14, 'cake', 'this is best', 'wefewf rfe eeee', 1, 0, '1680259453.jpg', 'text,text', 'text,text', 'text,text', '2023-03-31 05:14:13', '2023-03-31 05:14:13'),
(15, 'chamod', 'this is best', 'dscscdc', 1, 0, NULL, 'sdcscsc', 'scscsc', 'dcsc', '2023-04-06 05:53:39', '2023-04-06 05:53:39');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(191) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `gallary`
--

DROP TABLE IF EXISTS `gallary`;
CREATE TABLE IF NOT EXISTS `gallary` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(191) NOT NULL,
  `category` int NOT NULL,
  `description` longtext NOT NULL,
  `gallary_image` varchar(191) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `meta_keywords` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `gallary`
--

INSERT INTO `gallary` (`id`, `title`, `category`, `description`, `gallary_image`, `meta_keywords`, `created_at`, `updated_at`) VALUES
(23, 'sigiriya garden', 10, 'cecececec', '1684216456.jpg', 'cecc', '2023-05-16 00:24:16', '2023-05-16 00:24:16'),
(24, 'Temple Of Thooth', 11, 'cweec', '1684216727.jpg', 'cdfvdfv dcdcsf', '2023-05-16 00:28:50', '2023-05-16 00:28:50'),
(17, 'ddfdv', 1, 'dvd', '1682204584.jpg', 'vdv', '2023-04-07 02:43:45', '2023-04-22 17:33:04'),
(22, 'sigiriya rock', 10, 'ccdc', '1684187976.jpg', 'ddcdc', '2023-05-15 16:29:37', '2023-05-15 16:29:37');

-- --------------------------------------------------------

--
-- Table structure for table `image_category`
--

DROP TABLE IF EXISTS `image_category`;
CREATE TABLE IF NOT EXISTS `image_category` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `img_name` varchar(191) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `description` longtext NOT NULL,
  `tile` int DEFAULT NULL,
  `image` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `image_category`
--

INSERT INTO `image_category` (`id`, `img_name`, `description`, `tile`, `image`, `created_at`, `updated_at`) VALUES
(10, 'Sigiriya', 'xsxsasxa', 1, '1683923356.jpg', '2023-05-12 14:59:17', '2023-05-15 15:54:46'),
(11, 'Kandy', 'wedwd', 2, '1683925968.jpg', '2023-05-12 15:42:48', '2023-05-15 02:30:04'),
(13, 'Nuwara Eliya', 'cwdwdw', 4, '1683927653.jpg', '2023-05-12 16:10:53', '2023-05-12 16:10:53'),
(12, 'Yala', 'ewdwedwd', 3, '1683926070.jpg', '2023-05-12 15:44:30', '2023-05-12 15:44:30'),
(14, 'Jaffna', 'edwdw', 5, '1683927839.jpg', '2023-05-12 16:13:59', '2023-05-12 16:13:59'),
(15, 'Ella', 'wdwd', 6, '1683928060.jpg', '2023-05-12 16:17:41', '2023-05-15 01:13:18'),
(17, 'kendy 2', 'this is kandy', NULL, '1684136821.png', '2023-05-15 02:17:01', '2023-05-15 02:30:04');

-- --------------------------------------------------------

--
-- Table structure for table `inquiry`
--

DROP TABLE IF EXISTS `inquiry`;
CREATE TABLE IF NOT EXISTS `inquiry` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `message` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `inquiry`
--

INSERT INTO `inquiry` (`id`, `name`, `email`, `message`, `created_at`, `updated_at`) VALUES
(3, 'Chamod Dushyantha Randeni', 'chamoddushantha2014@gmail.com', 'bbfbfbfbf fg', '2023-04-21 14:36:42', '2023-04-21 14:36:42');

-- --------------------------------------------------------

--
-- Table structure for table `inquiry_reply`
--

DROP TABLE IF EXISTS `inquiry_reply`;
CREATE TABLE IF NOT EXISTS `inquiry_reply` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `inquiry_id` int NOT NULL,
  `reply_message` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `inquiry_reply`
--

INSERT INTO `inquiry_reply` (`id`, `inquiry_id`, `reply_message`, `created_at`, `updated_at`) VALUES
(1, 5, 'svcuv udiub uibdiub ubdub', '2023-04-26 07:13:38', '2023-04-26 07:13:38'),
(2, 5, 'fefwe wewed wec njdjw bdh hbwbdh hwbjdhioqwi.', '2023-04-27 02:24:17', '2023-04-27 02:24:17'),
(3, 5, 'fefwe wewed wec njdjw bdh hbwbdh hwbjdhioqwi.', '2023-04-27 02:27:43', '2023-04-27 02:27:43'),
(4, 5, 'scscscsc', '2023-05-03 16:08:24', '2023-05-03 16:08:24'),
(5, 2, 'hi i am chamod', '2023-05-03 16:47:16', '2023-05-03 16:47:16');

-- --------------------------------------------------------

--
-- Table structure for table `mail`
--

DROP TABLE IF EXISTS `mail`;
CREATE TABLE IF NOT EXISTS `mail` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `message` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `mail`
--

INSERT INTO `mail` (`id`, `name`, `email`, `message`, `created_at`, `updated_at`) VALUES
(11, 'Chamod Dushyantha Randeni', 'chamoddushantha2014@gmail.com', 'vtvvuybbh', '2023-04-26 01:53:05', '2023-04-26 01:53:05'),
(10, 'Chamod Dushyantha Randeni', 'chamoddushantha2014@gmail.com', 'dscdcdc', '2023-04-26 01:46:28', '2023-04-26 01:46:28'),
(9, 'jnanjx', 'chamoddushantha2014@gmail.com', 'cccddsdcsdcs', '2023-04-26 01:44:37', '2023-04-26 01:44:37'),
(8, 'Chamod Dushyantha Randeni', 'chamoddushantha2014@gmail.com', 'duwbdub iuwbdiub ibduibj hqinod 0kpiowihh dijoid', '2023-04-21 07:30:28', '2023-04-21 07:30:28'),
(7, 'naween jayamanna', 'naween@gmail.com', 'how much your price', '2023-04-01 00:43:30', '2023-04-01 00:43:30'),
(12, 'Chamod Dushyantha Randeni', 'chamoddushantha2014@gmail.com', 'cfg', '2023-04-26 02:02:12', '2023-04-26 02:02:12'),
(13, 'Chamod Dushyantha Randeni', 'chamoddushantha2014@gmail.com', 'scscsdcsd', '2023-04-26 02:04:34', '2023-04-26 02:04:34'),
(14, 'Chamod Dushyantha Randeni', 'chamoddushantha2014@gmail.com', 'cecece', '2023-04-26 02:38:19', '2023-04-26 02:38:19'),
(15, 'Chamod Dushyantha Randeni', 'chamoddushantha2014@gmail.com', 'xsxsx', '2023-04-26 02:41:31', '2023-04-26 02:41:31'),
(16, 'Chamod Dushyantha Randeni', 'chamoddushantha2014@gmail.com', 'vfvd', '2023-04-26 03:04:14', '2023-04-26 03:04:14'),
(17, 'Chamod Dushyantha Randeni', 'chamoddushantha2014@gmail.com', 'dwdwd', '2023-04-26 03:05:52', '2023-04-26 03:05:52'),
(19, 'Chamod Dushyantha Randeni', 'chamoddushantha2014@gmail.com', 'defefef', '2023-04-28 01:58:51', '2023-04-28 01:58:51');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_03_22_195821_create_categories_table', 2),
(6, '2023_04_01_041710_create_mail', 3),
(7, '2023_04_01_125556_create_packages_table', 4),
(8, '2023_04_03_070854_create_inquiry_table', 5),
(9, '2023_04_03_171922_create_image_category_table', 6),
(10, '2023_04_03_183356_create_gallary_table', 7),
(11, '2023_04_04_052546_create_gallary_table', 8),
(12, '2023_04_07_140937_create_testimonial_table', 9),
(13, '2023_04_26_104458_create_inquiry_reply_table', 10),
(14, '2023_04_27_130213_create_setting_table', 11),
(15, '2023_04_27_205632_create_tourtype_table', 12),
(16, '2023_04_28_171239_create_booking_table', 13),
(17, '2023_05_03_153503_create_packages_table', 14),
(18, '2023_07_04_092328_create_tour_plan_table', 15),
(19, '2023_07_04_152346_create_tourplan_table', 16),
(20, '2023_07_04_161749_create_tourplan_table', 17),
(21, '2023_07_04_181000_create_travelplan_table', 18),
(22, '2023_07_04_182240_create_tourplan_table', 19),
(23, '2023_07_05_071915_create_tourplan_image_table', 20);

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

DROP TABLE IF EXISTS `packages`;
CREATE TABLE IF NOT EXISTS `packages` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `packname` varchar(191) NOT NULL,
  `description` longtext NOT NULL,
  `image` varchar(191) NOT NULL,
  `tourtype` bigint UNSIGNED NOT NULL,
  `duration` varchar(191) NOT NULL,
  `status` tinyint NOT NULL,
  `feature` tinyint NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `packages_tourtype_foreign` (`tourtype`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`id`, `packname`, `description`, `image`, `tourtype`, `duration`, `status`, `feature`, `created_at`, `updated_at`) VALUES
(1, 'Hoonymoon', 'Travel in Sri Lanka with us to exceed your expectations and enjoy an exciting adventure under our care!Review our guest comments from your trusted networks and enjoy travel package tailored to your personal interests', '1683129995.jpg', 4, '6 Day\'s', 1, 1, '2023-05-03 10:23:39', '2023-05-07 23:34:21');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) NOT NULL,
  `token` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(191) NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

DROP TABLE IF EXISTS `setting`;
CREATE TABLE IF NOT EXISTS `setting` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) NOT NULL,
  `address` longtext NOT NULL,
  `email` varchar(191) NOT NULL,
  `number` varchar(191) NOT NULL,
  `maplink` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `facebook` varchar(191) NOT NULL,
  `twitter` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `setting`
--

INSERT INTO `setting` (`id`, `name`, `address`, `email`, `number`, `maplink`, `facebook`, `twitter`, `created_at`, `updated_at`) VALUES
(2, 'efef', 'info@travelsrilanka.com', '', '0312259790', 'https://goo.gl/maps/xffWY1GfWdqD6e2u7', 'www.facebook.com', 'www.twitter.com', '2023-04-27 14:27:38', '2023-05-11 23:32:00');

-- --------------------------------------------------------

--
-- Table structure for table `testimonial`
--

DROP TABLE IF EXISTS `testimonial`;
CREATE TABLE IF NOT EXISTS `testimonial` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) NOT NULL,
  `message` varchar(191) NOT NULL,
  `aveter` longtext NOT NULL,
  `status` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `tourplan`
--

DROP TABLE IF EXISTS `tourplan`;
CREATE TABLE IF NOT EXISTS `tourplan` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(191) NOT NULL,
  `packages_id` bigint UNSIGNED NOT NULL,
  `description` longtext NOT NULL,
  `status` tinyint NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `tourplan_packages_foreign` (`packages_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `tourplan`
--

INSERT INTO `tourplan` (`id`, `title`, `packages_id`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Day 01 ( sigiriya , trinco )', 1, 'wdwdwdwd', 1, '2023-07-04 13:53:41', '2023-07-04 13:53:41'),
(3, 'Day 02 jaffna', 1, 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', 1, '2023-07-04 14:55:06', '2023-07-04 14:55:06');

-- --------------------------------------------------------

--
-- Table structure for table `tourplan_image`
--

DROP TABLE IF EXISTS `tourplan_image`;
CREATE TABLE IF NOT EXISTS `tourplan_image` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `tourplan_id` bigint UNSIGNED NOT NULL,
  `image` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `tourplan_image_tourplan_foreign` (`tourplan_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `tourplan_image`
--

INSERT INTO `tourplan_image` (`id`, `tourplan_id`, `image`, `created_at`, `updated_at`) VALUES
(2, 1, '1688555735.jpg', '2023-07-05 05:45:35', '2023-07-05 05:45:35'),
(3, 1, '1688555792.jpg', '2023-07-05 05:46:33', '2023-07-05 05:46:33'),
(4, 3, '1689079118.jpg', '2023-07-11 07:08:41', '2023-07-11 07:08:41');

-- --------------------------------------------------------

--
-- Table structure for table `tourtype`
--

DROP TABLE IF EXISTS `tourtype`;
CREATE TABLE IF NOT EXISTS `tourtype` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) NOT NULL,
  `grouptype` int NOT NULL,
  `guidetype` int NOT NULL,
  `imagecategory` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `tourtype`
--

INSERT INTO `tourtype` (`id`, `name`, `grouptype`, `guidetype`, `imagecategory`, `created_at`, `updated_at`) VALUES
(5, 'type 2', 13, 2, 3, '2023-05-03 06:14:22', '2023-05-03 06:14:22'),
(4, 'type 1', 14, 3, 3, '2023-05-03 06:08:28', '2023-05-03 06:08:28');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) NOT NULL,
  `role_as` tinyint NOT NULL DEFAULT '0',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role_as`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'chamod', 'chamod@gmail.com', NULL, '$2y$10$VcSAdVq/9Fjra.jVrBbry.TgiutPMPdHQehno/nLvat1ZJUMBpH8a', 1, NULL, '2023-03-22 09:36:38', '2023-03-22 09:36:38'),
(2, 'dushyantha', 'dush@gmail.com', NULL, '$2y$10$4Hif7trUzH5TR6o7mbjjxOhHYSCT.66GOdHVU3vqmiAZADAxVZlkS', 0, NULL, '2023-03-22 10:44:25', '2023-03-22 10:44:25'),
(3, 'danuka', 'danuka@gmail.com', NULL, '$2y$10$3A0Ng9T53aEXLZ/5Zq3ZgeFzb9cpsWsfWXASAES420ylF3ReYcBTe', 0, NULL, '2023-04-25 01:35:50', '2023-04-25 01:35:50'),
(4, 'danushka', 'danushka@gmail.com', NULL, '$2y$10$nARqqJnvDDutGn1doE2TKO.VWPwzPeJsc3adSiXppyYyUCTvJ.pse', 0, NULL, '2023-04-25 05:58:23', '2023-04-25 05:58:23'),
(5, 'lakshitha', 'lakshitha@gmail.com', NULL, '$2y$10$i8XohwVM3sYIT5pQIL8QgenfSSy5FVLTETrMI7zToLOhITpUD0rdS', 0, NULL, '2023-04-25 10:08:50', '2023-04-25 10:08:50');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
