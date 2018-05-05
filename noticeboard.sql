-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2017 at 08:54 AM
-- Server version: 5.7.14
-- PHP Version: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `noticeboard`
--

-- --------------------------------------------------------

--
-- Table structure for table `attachments`
--

CREATE TABLE `attachments` (
  `id` mediumint(8) UNSIGNED NOT NULL,
  `name` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` int(10) UNSIGNED NOT NULL,
  `user_id` smallint(5) UNSIGNED NOT NULL,
  `context` tinyint(1) UNSIGNED NOT NULL,
  `content_id` mediumint(8) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `attachments`
--

INSERT INTO `attachments` (`id`, `name`, `size`, `user_id`, `context`, `content_id`, `created_at`, `updated_at`) VALUES
(1, '149639191429.jpg', 146607, 29, 1, 126, '2017-06-02 08:25:14', '2017-06-02 08:25:14'),
(3, '149639197429.jpg', 60139, 29, 1, 127, '2017-06-02 08:26:14', '2017-06-02 08:26:14'),
(5, '1496392227a57jpg.jpg', 60139, 29, 1, 128, '2017-06-02 08:30:27', '2017-06-02 08:30:27'),
(6, '1496392227cats-lion-predator-cat-photos-of-and-kittens-1366x768jpg.jpg', 146607, 29, 1, 128, '2017-06-02 08:30:27', '2017-06-02 08:30:27'),
(7, '1496392227doogee-y6-piano-black-nigeriajpg.jpg', 26211, 29, 1, 128, '2017-06-02 08:30:27', '2017-06-02 08:30:27'),
(8, '1496392227dualjpg.jpg', 51453, 29, 1, 128, '2017-06-02 08:30:27', '2017-06-02 08:30:27'),
(9, '1496393562hci-assignmentdocx.docx', 180312, 29, 1, 129, '2017-06-02 08:52:42', '2017-06-02 08:52:42'),
(10, '1496393562software-assignmentdocx.docx', 835093, 29, 1, 129, '2017-06-02 08:52:42', '2017-06-02 08:52:42'),
(11, '1496396428analysis-of-recommendation-algorithms-for-ecommercedocx.docx', 123634, 35, 1, 130, '2017-06-02 09:40:28', '2017-06-02 09:40:28');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` smallint(5) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `title`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Assignments', 5, '2017-05-04 03:08:19', '2017-05-04 03:08:19'),
(2, 'Projects', 4, '2017-05-04 03:18:57', '2017-05-04 03:18:57'),
(3, 'CSS 311', 4, '2017-05-04 03:19:08', '2017-05-04 03:19:08'),
(4, 'CCS 313', 4, '2017-05-04 03:21:09', '2017-05-04 03:21:09'),
(5, 'CCS 101', 4, '2017-05-04 03:30:17', '2017-05-04 03:30:17'),
(6, 'CCS 315', 4, '2017-05-04 15:53:22', '2017-05-04 15:53:22'),
(7, 'Projects', 20, '2017-05-08 06:34:31', '2017-05-08 06:34:31'),
(8, 'CCS 419', 4, '2017-05-08 18:50:53', '2017-05-08 18:50:53');

-- --------------------------------------------------------

--
-- Table structure for table `category_notice`
--

CREATE TABLE `category_notice` (
  `id` mediumint(8) UNSIGNED NOT NULL,
  `category_id` mediumint(8) UNSIGNED NOT NULL,
  `notice_id` mediumint(8) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category_notice`
--

INSERT INTO `category_notice` (`id`, `category_id`, `notice_id`, `created_at`, `updated_at`) VALUES
(1, 3, 24, NULL, NULL),
(2, 4, 24, NULL, NULL),
(3, 5, 24, NULL, NULL),
(4, 6, 25, NULL, NULL),
(5, 4, 26, NULL, NULL),
(6, 4, 27, NULL, NULL),
(7, 3, 28, NULL, NULL),
(8, 3, 29, NULL, NULL),
(9, 4, 29, NULL, NULL),
(10, 5, 29, NULL, NULL),
(11, 3, 30, NULL, NULL),
(12, 4, 30, NULL, NULL),
(13, 5, 30, NULL, NULL),
(14, 2, 101, NULL, NULL),
(15, 3, 101, NULL, NULL),
(16, 2, 102, NULL, NULL),
(17, 3, 102, NULL, NULL),
(19, 2, 99, NULL, NULL),
(20, 3, 99, NULL, NULL),
(21, 4, 98, NULL, NULL),
(22, 4, 99, NULL, NULL),
(23, 3, 106, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` mediumint(8) UNSIGNED NOT NULL,
  `user_id` smallint(5) UNSIGNED NOT NULL,
  `notice_id` mediumint(8) UNSIGNED NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) UNSIGNED NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `user_id`, `notice_id`, `text`, `status`, `created_at`, `updated_at`) VALUES
(1, 4, 18, 'test m,ess', 1, '2017-05-06 20:15:30', '2017-05-06 20:15:30'),
(2, 4, 18, 'test m,ess', 1, '2017-05-06 20:16:23', '2017-05-06 20:16:23'),
(3, 4, 18, 'test m,ess', 1, '2017-05-06 20:16:39', '2017-05-06 20:16:39'),
(4, 4, 18, 'test m,ess', 1, '2017-05-06 20:18:55', '2017-05-06 20:18:55'),
(5, 4, 18, 'test m,ess', 1, '2017-05-06 20:19:25', '2017-05-06 20:19:25'),
(6, 4, 18, 'test m,ess', 1, '2017-05-06 20:22:01', '2017-05-06 20:22:01'),
(7, 4, 18, 'Yet another one', 1, '2017-05-06 20:22:25', '2017-05-06 20:22:25'),
(8, 4, 18, '7 comments!', 1, '2017-05-06 20:22:46', '2017-05-06 20:22:46'),
(9, 21, 18, 'haha', 1, '2017-05-06 20:36:53', '2017-05-06 20:36:53'),
(10, 21, 16, 'test message', 1, '2017-05-06 20:49:35', '2017-05-06 20:49:35'),
(11, 4, 19, 'good', 1, '2017-05-06 21:54:14', '2017-05-06 21:54:14'),
(12, 18, 19, 'Got to make my mark', 1, '2017-05-06 21:57:48', '2017-05-06 21:57:48'),
(13, 18, 19, 'Is this research still going on? I have a paper yet to be presented under this topic but not sure how to make the decisions  to...', 1, '2017-05-06 22:33:08', '2017-05-06 22:33:08'),
(14, 4, 19, 'Another test comment', 1, '2017-05-07 04:38:15', '2017-05-07 04:38:15'),
(15, 4, 19, 'Cool', 1, '2017-05-07 04:42:39', '2017-05-07 04:42:39'),
(16, 4, 19, 'Which is very effective but as you can see lacks deniability.', 1, '2017-05-07 06:01:04', '2017-05-07 06:01:04'),
(17, 4, 20, 'test comment', 1, '2017-05-07 11:53:46', '2017-05-07 11:53:46'),
(18, 14, 21, 'Blah blah', 1, '2017-05-08 06:28:05', '2017-05-08 06:28:05'),
(19, 27, 22, 'Thanks for the heads up, meanwhile lets prepare.', 1, '2017-05-08 14:19:10', '2017-05-08 14:19:10'),
(20, 4, 24, 'First  COMMENT', 1, '2017-05-10 00:55:54', '2017-05-10 00:55:54'),
(21, 4, 100, 'first comment', 1, '2017-05-10 15:33:38', '2017-05-10 15:33:38'),
(22, 4, 99, 'random', 1, '2017-05-10 15:52:59', '2017-05-10 15:52:59'),
(23, 33, 113, 'ddddddffffd', 1, '2017-05-18 13:25:02', '2017-05-18 13:25:02'),
(24, 29, 107, 'This is a test comment', 1, '2017-05-19 04:55:27', '2017-05-19 04:55:27'),
(25, 34, 116, 'Got it...', 1, '2017-05-19 12:10:23', '2017-05-19 12:10:23'),
(26, 28, 114, 'this is a test comment', 1, '2017-05-20 14:23:37', '2017-05-20 14:23:37'),
(27, 28, 114, 'this is another text comment', 1, '2017-05-20 14:24:03', '2017-05-20 14:24:03');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` smallint(5) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `faculty_id` tinyint(3) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `name`, `faculty_id`, `created_at`, `updated_at`) VALUES
(1, 'Computer Science', 1, NULL, NULL),
(2, 'Computer Technology', 1, NULL, NULL),
(3, 'Information Technology', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `faculties`
--

CREATE TABLE `faculties` (
  `id` smallint(5) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faculties`
--

INSERT INTO `faculties` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Computer Science', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `follows`
--

CREATE TABLE `follows` (
  `id` mediumint(8) UNSIGNED NOT NULL,
  `user_id` mediumint(8) UNSIGNED NOT NULL,
  `follower` mediumint(8) UNSIGNED NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `follows`
--

INSERT INTO `follows` (`id`, `user_id`, `follower`, `status`, `created_at`, `updated_at`) VALUES
(14, 18, 4, 1, '2017-05-12 12:14:18', '2017-05-12 12:47:38'),
(23, 29, 18, 1, '2017-05-18 09:35:52', '2017-05-18 09:35:52'),
(27, 29, 28, 1, '2017-05-19 06:13:18', '2017-05-19 06:13:18'),
(28, 1, 34, 1, '2017-05-19 11:36:56', '2017-05-19 11:36:56'),
(29, 2, 34, 1, '2017-05-19 11:37:04', '2017-05-19 11:37:04'),
(31, 35, 36, 1, '2017-05-19 11:54:32', '2017-05-19 11:54:32'),
(32, 35, 34, 1, '2017-05-19 12:09:35', '2017-05-19 12:09:35'),
(33, 35, 28, 1, '2017-06-01 14:46:01', '2017-06-01 14:46:01');

-- --------------------------------------------------------

--
-- Table structure for table `hostels`
--

CREATE TABLE `hostels` (
  `id` smallint(5) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hostels`
--

INSERT INTO `hostels` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Kilimanjaro', NULL, NULL),
(2, 'Tsunami', NULL, NULL),
(3, 'Caroline Herine Hall', NULL, NULL),
(4, 'Runda', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `like_shares`
--

CREATE TABLE `like_shares` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` smallint(5) UNSIGNED NOT NULL,
  `content_id` mediumint(8) UNSIGNED NOT NULL,
  `cid` mediumint(8) DEFAULT NULL,
  `content_type` tinyint(1) UNSIGNED NOT NULL,
  `action` tinyint(1) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `like_shares`
--

INSERT INTO `like_shares` (`id`, `user_id`, `content_id`, `cid`, `content_type`, `action`, `created_at`, `updated_at`) VALUES
(1, 12, 20, 0, 1, 1, NULL, NULL),
(7, 4, 19, 0, 1, 2, '2017-05-09 17:44:39', '2017-05-09 17:44:39'),
(8, 4, 19, 0, 1, 2, '2017-05-09 17:52:32', '2017-05-09 17:52:32'),
(31, 4, 13, NULL, 2, 2, '2017-05-09 21:06:59', '2017-05-09 21:06:59'),
(32, 4, 13, NULL, 2, 2, '2017-05-09 21:08:30', '2017-05-09 21:08:30'),
(35, 4, 11, NULL, 2, 2, '2017-05-09 21:15:03', '2017-05-09 21:15:03'),
(36, 4, 12, NULL, 2, 2, '2017-05-09 21:15:37', '2017-05-09 21:15:37'),
(42, 4, 9, NULL, 1, 1, '2017-05-11 04:22:18', '2017-05-11 04:22:18'),
(49, 4, 99, NULL, 1, 2, '2017-05-11 09:33:13', '2017-05-11 09:33:13'),
(52, 4, 22, NULL, 2, 2, '2017-05-12 08:42:56', '2017-05-12 08:42:56'),
(53, 33, 113, NULL, 1, 1, '2017-05-18 13:24:51', '2017-05-18 13:24:51'),
(56, 37, 130, NULL, 1, 1, '2017-06-02 09:45:20', '2017-06-02 09:45:20');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(8, '2017_04_30_020804_create_departments_table', 2),
(9, '2017_04_30_020856_create_roles_table', 2),
(10, '2017_04_30_020909_create_hostels_table', 2),
(11, '2017_04_30_020928_create_faculties_table', 2),
(12, '2017_04_30_020946_create_salutations_table', 2),
(13, '2017_05_03_102039_create_notices_table', 3),
(15, '2017_05_03_132555_create_categories_table', 4),
(16, '2017_05_04_054849_create_category_notice_table', 5),
(17, '2017_05_04_071506_create_follows_table', 6),
(18, '2017_05_06_222034_create_comments_table', 7),
(21, '2017_05_07_130914_create_like_shares_table', 8),
(26, '2017_05_10_163425_create_target_departments_table', 9),
(27, '2017_05_10_163436_create_target_years_table', 9),
(28, '2017_05_10_164802_create_table_notice_target_years', 10),
(29, '2017_05_10_164816_create_table_notice_target_departments', 10),
(33, '2017_06_02_073107_create_attachments_table', 11);

-- --------------------------------------------------------

--
-- Table structure for table `notices`
--

CREATE TABLE `notices` (
  `id` mediumint(8) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) UNSIGNED NOT NULL,
  `deadline` timestamp NULL DEFAULT NULL,
  `user_id` smallint(5) UNSIGNED NOT NULL,
  `views` smallint(5) UNSIGNED NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notices`
--

INSERT INTO `notices` (`id`, `title`, `slug`, `body`, `status`, `deadline`, `user_id`, `views`, `created_at`, `updated_at`) VALUES
(1, 'Maiden notice', '', '<p>This is the maide notice. This is the maide notice.&nbsp;<span style="font-size: 0.9375rem;">This is the maide notice.&nbsp;</span><span style="font-size: 0.9375rem;">This is the maide notice.&nbsp;</span><span style="font-size: 0.9375rem;">This is the maide notice.&nbsp;</span><span style="font-size: 0.9375rem;">This is the maide notice.&nbsp;</span><span style="font-size: 0.9375rem;">This is the maide notice.&nbsp;</span><span style="font-size: 0.9375rem;">This is the maide notice.&nbsp;</span><span style="font-size: 0.9375rem;">This is the maide notice.&nbsp;</span><span style="font-size: 0.9375rem;">This is the maide notice.&nbsp;</span><span style="font-size: 0.9375rem;">This is the maide notice.&nbsp;</span><span style="font-size: 0.9375rem;">This is the maide notice.&nbsp;</span><span style="font-size: 0.9375rem;">This is the maide notice.&nbsp;</span><span style="font-size: 0.9375rem;">This is the maide notice.&nbsp;</span><span style="font-size: 0.9375rem;">This is the maide notice.&nbsp;</span><span style="font-size: 0.9375rem;">This is the maide notice.&nbsp;</span><span style="font-size: 0.9375rem;">This is the maide notice.&nbsp;</span><span style="font-size: 0.9375rem;">This is the maide notice.&nbsp;</span><span style="font-size: 0.9375rem;">This is the maide notice.&nbsp;</span><span style="font-size: 0.9375rem;">This is the maide notice.&nbsp;</span><span style="font-size: 0.9375rem;">This is the maide notice.&nbsp;</span><span style="font-size: 0.9375rem;">This is the maide notice.&nbsp;</span><span style="font-size: 0.9375rem;">This is the maide notice.&nbsp;</span><span style="font-size: 0.9375rem;">This is the maide notice.&nbsp;</span><span style="font-size: 0.9375rem;">This is the maide notice.&nbsp;</span><span style="font-size: 0.9375rem;">This is the maide notice.&nbsp;</span><span style="font-size: 0.9375rem;">This is the maide notice.&nbsp;</span><span style="font-size: 0.9375rem;">This is the maide notice.&nbsp;</span><span style="font-size: 0.9375rem;">This is the maide notice.&nbsp;</span><span style="font-size: 0.9375rem;">This is the maide notice.&nbsp;</span><span style="font-size: 0.9375rem;">This is the maide notice.&nbsp;</span><span style="font-size: 0.9375rem;">This is the maide notice.&nbsp;</span><span style="font-size: 0.9375rem;">This is the maide notice.&nbsp;</span><span style="font-size: 0.9375rem;">This is the maide notice.&nbsp;</span><span style="font-size: 0.9375rem;">This is the maide notice.&nbsp;</span><span style="font-size: 0.9375rem;">This is the maide notice.&nbsp;</span></p>', 3, '2017-05-24 16:17:00', 4, 0, '2017-05-03 16:21:16', '2017-05-03 16:21:16'),
(2, 'Second maiden notice', '', 'This is the second item on the list', 2, '2017-05-18 01:55:00', 4, 0, '2017-05-04 01:56:29', '2017-05-04 01:56:29'),
(3, 'Third maiden notice', '', 'As if there is anything like third maiden', 1, NULL, 4, 0, '2017-05-04 01:57:38', '2017-05-04 01:57:38'),
(4, 'Test notice one', '', '<p>Test notice oneTest notice oneTest notice oneTest notice oneTest notice oneTest notice oneTest notice oneTest notice oneTest notice oneTest notice oneTest notice oneTest notice oneTest notice one</p>', 1, NULL, 14, 0, '2017-05-06 06:44:03', '2017-05-06 06:44:03'),
(5, 'Test notice two', '', '<p>Test notice twoTest notice twoTest notice twoTest notice twoTest notice twoTest notice twoTest notice two</p>', 1, NULL, 14, 0, '2017-05-06 06:44:23', '2017-05-06 06:44:23'),
(6, 'Third maiden notice', '', 'Still going strong!', 1, '2017-05-24 15:23:00', 4, 0, '2017-05-06 15:23:49', '2017-05-06 15:23:49'),
(7, 'Third maiden notice', '', 'Still going strong!', 1, '2017-05-24 15:23:00', 4, 0, '2017-05-06 15:27:49', '2017-05-06 15:27:49'),
(8, 'Third maiden notice', '', 'Still going strong!', 1, '2017-05-24 15:23:00', 4, 0, '2017-05-06 15:28:14', '2017-05-06 15:28:14'),
(9, 'Fourth maiden notice', '', 'Thrice is a charm, four times?', 1, NULL, 4, 0, '2017-05-06 15:30:32', '2017-05-06 15:30:32'),
(10, 'Fifth maiden notice', '', 'Just kidding about maiden', 1, '2017-05-23 15:32:00', 4, 0, '2017-05-06 15:33:11', '2017-05-06 15:33:11'),
(11, 'Konyino notice experiment', '', 'This is not my first notice', 1, NULL, 20, 0, '2017-05-06 15:39:13', '2017-05-06 15:39:13'),
(12, 'Another experimentation', '', 'This is another simple experimentation', 1, NULL, 20, 0, '2017-05-06 15:53:00', '2017-05-06 15:53:00'),
(13, 'Yet another notice.', '', 'What more can I say', 1, NULL, 20, 0, '2017-05-06 15:54:19', '2017-05-06 15:54:19'),
(14, 'This is another one of those things', 'this-is-another-one-of-those-things', '<p>This is another one of those things</p>', 1, NULL, 20, 1, '2017-05-06 16:46:55', '2017-05-06 17:32:24'),
(15, 'This is full of drama et all', 'this-is-full-of-drama-et-all', '<p style="text-align: right; ">This is full of <strong>drama et allThis is full of drama et allThis is full of drama et allThis is full of drama et allThis is full of drama et allThis </strong>is full of drama et allThis is full of drama et allThis is full of drama et allThis is full of drama et allThis is full of drama et allThis is full of drama et allThis is full of drama et allThis is full of drama et allThis is full of drama et allThis is full of drama et allThis is full of drama et all</p>', 1, NULL, 20, 8, '2017-05-06 17:16:36', '2017-05-06 18:10:09'),
(16, 'deadline notice which should not be ignored', 'deadline-notice-which-should-not-be-ignored', '<p>deadline notice which should not be ignored</p><p>deadline notice which should not be ignored<br></p>', 1, '2017-05-17 17:34:00', 20, 20, '2017-05-06 17:34:31', '2017-05-07 09:23:02'),
(17, 'What the duck', 'what-the-duck', 'Where is the duck!', 1, '2017-05-23 17:49:00', 4, 15, '2017-05-06 17:49:38', '2017-05-06 21:33:23'),
(18, 'just testing the time', 'just-testing-the-time', 'Testing the time men.', 1, NULL, 4, 75, '2017-05-06 18:48:10', '2017-05-10 17:02:23'),
(19, 'Delphi Study Research', 'delphi-study-research', 'Seek opinions of experts of a particular field.<p>Generate questionnaires and give back to those experts to arrive at a solution to the research problem.</p><p>Is a method of research according to Busha and Hartes (1980).</p><p>A systematic approach to generation of some consesus of opinion among a group of carefully selected and anonymous respondents. This is according to Busha and Hartes. Data is subjected to critical analysis.</p>', 2, NULL, 4, 341, '2017-05-06 21:52:32', '2017-05-12 09:16:38'),
(20, 'This is a picture experiment. No fuss', 'this-is-a-picture-experiment-no-fuss', '<p>This is a picture experiment. No fuss<img src="https://scotch.io/wp-content/uploads/2017/04/300x300.png" style="font-size: 0.9375rem;" alt=""></p>', 1, NULL, 4, 9, '2017-05-07 08:44:02', '2017-05-09 05:34:41'),
(21, 'Another experimentation', 'another-experimentation', 'aasasasasasf', 2, '2017-07-04 06:25:00', 14, 2, '2017-05-08 06:27:10', '2017-05-08 06:28:06'),
(22, 'Continuous assessment coming soon', 'continuous-assessment-coming-soon', '<p>Hello comrades,</p>On 18th day of May there will be a sit in cat as from 2 pm, venue will be in TB 2. Remember to update your notes and keep time.<p>Regards,</p><p>Engineer Korir.</p>', 1, '2017-05-10 14:10:00', 27, 2, '2017-05-08 14:15:40', '2017-05-08 14:19:10'),
(23, 'ffgggggggg', 'ffgggggggg', 'gggg', 1, NULL, 4, 0, '2017-05-10 00:54:42', '2017-05-10 00:54:42'),
(24, 'ffgggggggg', 'ffgggggggg', 'gggg', 1, NULL, 4, 4, '2017-05-10 00:55:00', '2017-05-10 00:55:54'),
(25, 'test one', 'test-one', 'test one', 1, NULL, 4, 1, '2017-05-10 05:34:54', '2017-05-10 05:40:53'),
(26, 'ggggghhhh', 'ggggghhhh', 'jjhgghh', 1, NULL, 4, 0, '2017-05-10 05:38:18', '2017-05-10 05:38:18'),
(27, 'gggghhhh', 'gggghhhh', 'hhhhhhh', 1, NULL, 4, 0, '2017-05-10 05:59:32', '2017-05-10 05:59:32'),
(28, 'sdsd', 'sdsd', 'dsdsds', 1, NULL, 4, 0, '2017-05-10 08:24:21', '2017-05-10 08:24:21'),
(29, 'sdsddsdsd', 'sdsddsdsd', 'dsdsds', 1, NULL, 4, 0, '2017-05-10 09:29:42', '2017-05-10 09:29:42'),
(30, 'sdsddsdsd', 'sdsddsdsd', 'dsdsds', 1, NULL, 4, 0, '2017-05-10 09:30:40', '2017-05-10 09:30:40'),
(31, 'sdsddsdsd', 'sdsddsdsd', 'dsdsds', 1, NULL, 4, 0, '2017-05-10 09:30:56', '2017-05-10 09:30:56'),
(32, 'sdsddsdsd', 'sdsddsdsd', 'dsdsds', 1, NULL, 4, 0, '2017-05-10 09:31:21', '2017-05-10 09:31:21'),
(33, 'sdsddsdsd', 'sdsddsdsd', 'dsdsds', 1, NULL, 4, 0, '2017-05-10 09:31:40', '2017-05-10 09:31:40'),
(34, 'sdsddsdsd', 'sdsddsdsd', 'dsdsds', 1, NULL, 4, 0, '2017-05-10 09:31:50', '2017-05-10 09:31:50'),
(35, 'sdsddsdsd', 'sdsddsdsd', 'dsdsds', 1, NULL, 4, 0, '2017-05-10 09:32:16', '2017-05-10 09:32:16'),
(36, 'sdsddsdsd', 'sdsddsdsd', 'dsdsds', 1, NULL, 4, 0, '2017-05-10 09:32:41', '2017-05-10 09:32:41'),
(37, 'sdsddsdsd', 'sdsddsdsd', 'dsdsds', 1, NULL, 4, 0, '2017-05-10 09:32:56', '2017-05-10 09:32:56'),
(38, 'sdsddsdsd', 'sdsddsdsd', 'dsdsds', 1, NULL, 4, 0, '2017-05-10 09:33:17', '2017-05-10 09:33:17'),
(39, 'sdsddsdsd', 'sdsddsdsd', 'dsdsds', 1, NULL, 4, 0, '2017-05-10 09:34:06', '2017-05-10 09:34:06'),
(40, 'hhhhh', 'hhhhh', 'jjjjj', 1, NULL, 4, 0, '2017-05-10 09:34:30', '2017-05-10 09:34:30'),
(41, 'hhhhh', 'hhhhh', 'jjjjj', 1, NULL, 4, 0, '2017-05-10 09:34:57', '2017-05-10 09:34:57'),
(42, 'hhhhh', 'hhhhh', 'jjjjj', 1, NULL, 4, 0, '2017-05-10 09:35:32', '2017-05-10 09:35:32'),
(43, 'hhhhh', 'hhhhh', 'jjjjj', 1, NULL, 4, 0, '2017-05-10 09:36:13', '2017-05-10 09:36:13'),
(44, 'hhhhh', 'hhhhh', 'jjjjj', 1, NULL, 4, 0, '2017-05-10 11:05:04', '2017-05-10 11:05:04'),
(45, 'hhhhh', 'hhhhh', 'jjjjj', 1, NULL, 4, 0, '2017-05-10 11:05:21', '2017-05-10 11:05:21'),
(46, 'hhhhh', 'hhhhh', 'jjjjj', 1, NULL, 4, 0, '2017-05-10 11:05:35', '2017-05-10 11:05:35'),
(47, 'hhhhh', 'hhhhh', 'jjjjj', 1, NULL, 4, 0, '2017-05-10 11:06:22', '2017-05-10 11:06:22'),
(48, 'hhhhh', 'hhhhh', 'jjjjj', 1, NULL, 4, 0, '2017-05-10 11:08:04', '2017-05-10 11:08:04'),
(49, 'hhhhh', 'hhhhh', 'jjjjj', 1, NULL, 4, 0, '2017-05-10 11:09:58', '2017-05-10 11:09:58'),
(50, 'hhhhh', 'hhhhh', 'jjjjj', 1, NULL, 4, 0, '2017-05-10 11:10:48', '2017-05-10 11:10:48'),
(51, 'ddd', 'ddd', 'dddddd', 1, NULL, 4, 0, '2017-05-10 11:11:11', '2017-05-10 11:11:11'),
(52, 'ddd', 'ddd', 'dddddd', 1, NULL, 4, 0, '2017-05-10 11:14:22', '2017-05-10 11:14:22'),
(53, 'ddd', 'ddd', 'dddddd', 1, NULL, 4, 0, '2017-05-10 11:16:10', '2017-05-10 11:16:10'),
(54, 'ddd', 'ddd', 'dddddd', 1, NULL, 4, 0, '2017-05-10 11:16:39', '2017-05-10 11:16:39'),
(55, 'ddd', 'ddd', 'dddddd', 1, NULL, 4, 0, '2017-05-10 11:18:49', '2017-05-10 11:18:49'),
(56, 'ddd', 'ddd', 'dddddd', 1, NULL, 4, 0, '2017-05-10 11:21:11', '2017-05-10 11:21:11'),
(57, 'ddd', 'ddd', 'dddddd', 1, NULL, 4, 0, '2017-05-10 11:21:26', '2017-05-10 11:21:26'),
(58, 'ddd', 'ddd', 'dddddd', 1, NULL, 4, 0, '2017-05-10 11:23:11', '2017-05-10 11:23:11'),
(59, 'ddd', 'ddd', 'dddddd', 1, NULL, 4, 0, '2017-05-10 11:23:48', '2017-05-10 11:23:48'),
(60, 'ddd', 'ddd', 'dddddd', 1, NULL, 4, 0, '2017-05-10 11:24:05', '2017-05-10 11:24:05'),
(61, 'ddd', 'ddd', 'dddddd', 1, NULL, 4, 0, '2017-05-10 11:25:21', '2017-05-10 11:25:21'),
(62, 'ddd', 'ddd', 'dddddd', 1, NULL, 4, 0, '2017-05-10 11:25:32', '2017-05-10 11:25:32'),
(63, 'ddd', 'ddd', 'dddddd', 1, NULL, 4, 0, '2017-05-10 11:25:59', '2017-05-10 11:25:59'),
(64, 'ddd', 'ddd', 'dddddd', 1, NULL, 4, 0, '2017-05-10 11:26:48', '2017-05-10 11:26:48'),
(65, 'ddd', 'ddd', 'dddddd', 1, NULL, 4, 0, '2017-05-10 11:27:02', '2017-05-10 11:27:02'),
(66, 'ddd', 'ddd', 'dddddd', 1, NULL, 4, 0, '2017-05-10 11:27:55', '2017-05-10 11:27:55'),
(67, 'ddd', 'ddd', 'dddddd', 1, NULL, 4, 0, '2017-05-10 11:28:06', '2017-05-10 11:28:06'),
(68, 'ddd', 'ddd', 'dddddd', 1, NULL, 4, 0, '2017-05-10 11:28:57', '2017-05-10 11:28:57'),
(69, 'ddd', 'ddd', 'dddddd', 1, NULL, 4, 0, '2017-05-10 11:29:11', '2017-05-10 11:29:11'),
(70, 'ddd', 'ddd', 'dddddd', 1, NULL, 4, 0, '2017-05-10 11:30:18', '2017-05-10 11:30:18'),
(71, 'ddd', 'ddd', 'dddddd', 1, NULL, 4, 0, '2017-05-10 11:31:52', '2017-05-10 11:31:52'),
(72, 'ddd', 'ddd', 'dddddd', 1, NULL, 4, 0, '2017-05-10 11:32:13', '2017-05-10 11:32:13'),
(73, 'ddd', 'ddd', 'dddddd', 1, NULL, 4, 0, '2017-05-10 11:40:53', '2017-05-10 11:40:53'),
(74, 'ddd', 'ddd', 'dddddd', 1, NULL, 4, 0, '2017-05-10 11:41:12', '2017-05-10 11:41:12'),
(75, 'ddd', 'ddd', 'dddddd', 1, NULL, 4, 0, '2017-05-10 11:42:05', '2017-05-10 11:42:05'),
(76, 'ddd', 'ddd', 'dddddd', 1, NULL, 4, 0, '2017-05-10 11:45:57', '2017-05-10 11:45:57'),
(77, 'ddd', 'ddd', 'dddddd', 1, NULL, 4, 0, '2017-05-10 11:47:08', '2017-05-10 11:47:08'),
(78, 'ddd', 'ddd', 'dddddd', 1, NULL, 4, 0, '2017-05-10 11:47:52', '2017-05-10 11:47:52'),
(79, 'ddd', 'ddd', 'dddddd', 1, NULL, 4, 0, '2017-05-10 11:52:43', '2017-05-10 11:52:43'),
(80, 'ddd', 'ddd', 'dddddd', 1, NULL, 4, 0, '2017-05-10 11:52:59', '2017-05-10 11:52:59'),
(81, 'ddd', 'ddd', 'dddddd', 1, NULL, 4, 0, '2017-05-10 11:53:59', '2017-05-10 11:53:59'),
(82, 'ddd', 'ddd', 'dddddd', 1, NULL, 4, 0, '2017-05-10 11:54:21', '2017-05-10 11:54:21'),
(83, 'ddd', 'ddd', 'dddddd', 1, NULL, 4, 0, '2017-05-10 11:56:01', '2017-05-10 11:56:01'),
(84, 'ddd', 'ddd', 'dddddd', 1, NULL, 4, 0, '2017-05-10 11:57:27', '2017-05-10 11:57:27'),
(85, 'dddddd', 'dddddd', 'dddd', 1, NULL, 4, 0, '2017-05-10 11:58:54', '2017-05-10 11:58:54'),
(86, 'sdsd', 'sdsd', 'dsdsdsdsd', 1, NULL, 4, 0, '2017-05-10 12:03:10', '2017-05-10 12:03:10'),
(87, 'sdsd', 'sdsd', 'dsdsdsdsd', 1, NULL, 4, 0, '2017-05-10 12:06:04', '2017-05-10 12:06:04'),
(88, 'sdsd', 'sdsd', 'dsdsdsdsd', 1, NULL, 4, 0, '2017-05-10 12:07:32', '2017-05-10 12:07:32'),
(89, 'sdsd', 'sdsd', 'dsdsdsdsd', 1, NULL, 4, 0, '2017-05-10 12:08:43', '2017-05-10 12:08:43'),
(90, 'sdsd', 'sdsd', 'dsdsdsdsd', 1, NULL, 4, 0, '2017-05-10 12:09:34', '2017-05-10 12:09:34'),
(91, 'ssssss', 'ssssss', '343443434', 1, NULL, 4, 0, '2017-05-10 12:10:10', '2017-05-10 12:10:10'),
(92, 'sdsdd', 'sdsdd', 'ddsdsdsd', 1, NULL, 4, 0, '2017-05-10 12:13:16', '2017-05-10 12:13:16'),
(93, 'sdsdd', 'sdsdd', 'ddsdsdsd', 1, NULL, 4, 0, '2017-05-10 12:13:38', '2017-05-10 12:13:38'),
(94, 'sdsdd', 'sdsdd', 'ddsdsdsd', 1, NULL, 4, 0, '2017-05-10 12:14:49', '2017-05-10 12:14:49'),
(95, 'sdsdd', 'sdsdd', 'ddsdsdsd', 1, NULL, 4, 0, '2017-05-10 12:44:23', '2017-05-10 12:44:23'),
(96, 'sdsdd', 'sdsdd', 'ddsdsdsd', 1, NULL, 4, 0, '2017-05-10 13:17:34', '2017-05-10 13:17:34'),
(97, 'sdsddsd', 'sdsddsd', 'sdsdsdsd', 1, NULL, 4, 0, '2017-05-10 13:18:05', '2017-05-10 13:18:05'),
(98, 'asdasasas', 'asdasasas', 'saaswewewewewe', 1, '2017-05-11 03:39:00', 4, 0, '2017-05-10 13:19:00', '2017-05-11 03:41:47'),
(99, 'asadadad', 'asadadad', 'adadddddddddddddddddddddd', 1, '2017-05-11 03:31:00', 4, 13, '2017-05-10 14:03:30', '2017-05-12 08:49:00'),
(103, 'Course outline', 'course-outline', 'Find the course outline attached below.', 1, NULL, 4, 1, '2017-05-12 14:25:26', '2017-05-12 14:26:08'),
(106, 'Computer Science Year 1', 'computer-science-year-1', '<p>Computer Science Year 1</p>', 1, '2017-05-17 19:44:08', 4, 0, '2017-05-12 15:23:26', '2017-05-17 19:44:19'),
(112, 'Fero Aura A5002', 'fero-aura-a5002', '<p>Fero Aura A5002Fero Aura A5002Fero Aura A5002Fero Aura A5002Fero Aura A5002Fero Aura A5002Fero Aura A5002Fero Aura A5002Fero Aura A5002Fero Aura A5002Fero Aura A5002Fero Aura A5002Fero Aura A5002Fero Aura A5002Fero Aura A5002Fero Aura A5002Fero Aura A5002Fero Aura A5002Fero Aura A5002</p>', 1, '2017-05-24 13:20:00', 33, 0, '2017-05-18 13:21:48', '2017-05-18 13:21:48'),
(113, 'Fero Aura A5002', 'fero-aura-a5002', '<p>Fero Aura A5002Fero Aura A5002Fero Aura A5002Fero Aura A5002Fero Aura A5002Fero Aura A5002Fero Aura A5002Fero Aura A5002Fero Aura A5002Fero Aura A5002Fero Aura A5002Fero Aura A5002Fero Aura A5002Fero Aura A5002Fero Aura A5002Fero Aura A5002Fero Aura A5002Fero Aura A5002Fero Aura A5002</p>', 1, '2017-05-24 13:20:00', 33, 4, '2017-05-18 13:24:20', '2017-05-18 13:30:44'),
(114, 'Lorem Ipsum', 'lorem-ipsum', '<p style="margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px;" open="" sans",="" arial,="" sans-serif;="" font-size:="" 14px;"="">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vel ante ut ex tristique feugiat. Ut rutrum venenatis nisl ut tempor. Nunc sit amet dapibus mauris. Nam tempor mauris sit amet placerat lacinia. In hac habitasse platea dictumst. Quisque lacinia congue nulla, nec tempor orci posuere sit amet. Pellentesque gravida lorem et sapien imperdiet tempus. Aliquam lacinia, orci ut tempor molestie, odio purus imperdiet erat, id ultrices nibh tortor rutrum ex. Quisque eu felis felis.</p><p style="margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px;" open="" sans",="" arial,="" sans-serif;="" font-size:="" 14px;"="">Maecenas auctor elit ac lacus tristique scelerisque. Sed elementum urna vitae molestie bibendum. Aenean tincidunt ligula in nunc eleifend iaculis. Morbi vulputate condimentum neque, vitae maximus arcu pretium ut. Nunc gravida et felis non pharetra. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ut efficitur est, a lobortis erat. In vehicula dapibus ultrices. Nam mollis libero at lorem fermentum suscipit. Quisque ut finibus dui. Nullam vitae mi id augue ultrices finibus. Praesent laoreet eleifend nulla id pretium. Nulla maximus urna metus, non scelerisque diam rhoncus sit amet. Mauris auctor massa mauris, et cursus neque congue eget. Quisque nec mauris in est pulvinar rhoncus. Nullam ac aliquam dolor, eu efficitur justo.</p>', 1, '2017-05-19 06:16:00', 29, 25, '2017-05-19 06:17:15', '2017-06-22 05:30:04'),
(115, 'CCS 302', 'ccs-302', 'Kindly collect your assignments', 1, '2017-06-02 11:41:00', 35, 0, '2017-05-19 11:42:28', '2017-05-19 11:42:28'),
(116, 'CCS 302', 'ccs-302', '<img src="data:image/jpeg;base64,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" alt=""><p>Kindly collect your assignments.</p>', 1, '2017-05-26 11:44:00', 35, 3, '2017-05-19 11:47:39', '2017-05-19 12:11:31');
INSERT INTO `notices` (`id`, `title`, `slug`, `body`, `status`, `deadline`, `user_id`, `views`, `created_at`, `updated_at`) VALUES
(117, 'CCS 302', 'ccs-302', '<img src="data:image/jpeg;base64,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" alt=""><p>Kindly collect your assignments.</p>', 1, NULL, 35, 3, '2017-05-19 11:48:13', '2017-06-14 05:17:31'),
(118, 'Pascal', 'pascal', 'There will be a cat tomorrow.', 1, '2017-05-26 11:57:00', 35, 0, '2017-05-19 12:02:52', '2017-05-19 12:02:52'),
(128, 'Notice with attachment', 'notice-with-attachment', '<p>Notice with attachment</p>', 1, NULL, 29, 20, '2017-06-02 08:30:27', '2017-06-22 05:34:55'),
(129, 'Word document upload', 'word-document-upload', '<p>Word document upload</p>', 1, NULL, 29, 4, '2017-06-02 08:52:42', '2017-06-13 14:44:59'),
(130, 'ccs 304', 'ccs-304', 'Group &nbsp;project', 1, NULL, 35, 6, '2017-06-02 09:40:28', '2017-06-22 05:51:23');

-- --------------------------------------------------------

--
-- Table structure for table `notice_target_department`
--

CREATE TABLE `notice_target_department` (
  `id` mediumint(8) UNSIGNED NOT NULL,
  `notice_id` mediumint(8) UNSIGNED NOT NULL,
  `department_id` smallint(5) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notice_target_department`
--

INSERT INTO `notice_target_department` (`id`, `notice_id`, `department_id`, `created_at`, `updated_at`) VALUES
(1, 100, 1, '2017-05-10 14:07:05', '2017-05-10 14:07:05'),
(2, 100, 2, '2017-05-10 14:07:05', '2017-05-10 14:07:05'),
(3, 100, 3, '2017-05-10 14:07:05', '2017-05-10 14:07:05'),
(4, 101, 1, '2017-05-11 01:34:27', '2017-05-11 01:34:27'),
(6, 102, 1, '2017-05-11 01:45:40', '2017-05-11 01:45:40'),
(7, 102, 2, '2017-05-11 01:45:40', '2017-05-11 01:45:40'),
(9, 99, 1, '2017-05-11 03:36:50', '2017-05-11 03:36:50'),
(10, 99, 2, '2017-05-11 03:36:50', '2017-05-11 03:36:50'),
(11, 98, 4, '2017-05-11 03:39:51', '2017-05-11 03:39:51'),
(12, 98, 1, '2017-05-11 03:41:47', '2017-05-11 03:41:47'),
(13, 98, 2, '2017-05-11 03:41:47', '2017-05-11 03:41:47'),
(14, 98, 3, '2017-05-11 03:41:47', '2017-05-11 03:41:47'),
(15, 99, 3, '2017-05-12 14:22:35', '2017-05-12 14:22:35'),
(16, 103, 2, '2017-05-12 14:25:26', '2017-05-12 14:25:26'),
(17, 106, 1, '2017-05-12 15:23:26', '2017-05-12 15:23:26'),
(18, 107, 1, '2017-05-18 09:38:45', '2017-05-18 09:38:45'),
(19, 107, 2, '2017-05-18 09:38:45', '2017-05-18 09:38:45'),
(20, 108, 1, '2017-05-18 09:40:52', '2017-05-18 09:40:52'),
(21, 108, 2, '2017-05-18 09:40:52', '2017-05-18 09:40:52'),
(22, 109, 1, '2017-05-18 09:42:14', '2017-05-18 09:42:14'),
(23, 109, 2, '2017-05-18 09:42:14', '2017-05-18 09:42:14'),
(24, 110, 1, '2017-05-18 09:43:11', '2017-05-18 09:43:11'),
(25, 110, 2, '2017-05-18 09:43:11', '2017-05-18 09:43:11'),
(26, 111, 1, '2017-05-18 09:45:40', '2017-05-18 09:45:40'),
(27, 112, 2, '2017-05-18 13:21:49', '2017-05-18 13:21:49'),
(28, 113, 2, '2017-05-18 13:24:20', '2017-05-18 13:24:20'),
(29, 114, 1, '2017-05-19 06:17:15', '2017-05-19 06:17:15'),
(30, 114, 2, '2017-05-19 06:17:15', '2017-05-19 06:17:15'),
(31, 115, 1, '2017-05-19 11:42:28', '2017-05-19 11:42:28'),
(32, 116, 1, '2017-05-19 11:47:39', '2017-05-19 11:47:39'),
(33, 117, 1, '2017-05-19 11:48:13', '2017-05-19 11:48:13'),
(34, 118, 1, '2017-05-19 12:02:52', '2017-05-19 12:02:52'),
(35, 1, 114, '2017-06-01 14:28:32', '2017-06-01 14:28:32'),
(36, 119, 1, '2017-06-02 04:22:11', '2017-06-02 04:22:11'),
(37, 120, 3, '2017-06-02 06:04:30', '2017-06-02 06:04:30'),
(38, 121, 3, '2017-06-02 06:04:55', '2017-06-02 06:04:55'),
(39, 122, 2, '2017-06-02 06:08:01', '2017-06-02 06:08:01'),
(40, 123, 2, '2017-06-02 06:09:53', '2017-06-02 06:09:53'),
(41, 124, 2, '2017-06-02 06:10:17', '2017-06-02 06:10:17'),
(42, 125, 2, '2017-06-02 08:23:24', '2017-06-02 08:23:24'),
(43, 126, 2, '2017-06-02 08:25:14', '2017-06-02 08:25:14'),
(44, 127, 1, '2017-06-02 08:26:14', '2017-06-02 08:26:14'),
(45, 128, 1, '2017-06-02 08:30:27', '2017-06-02 08:30:27'),
(46, 129, 2, '2017-06-02 08:52:42', '2017-06-02 08:52:42'),
(47, 130, 1, '2017-06-02 09:40:28', '2017-06-02 09:40:28');

-- --------------------------------------------------------

--
-- Table structure for table `notice_target_year`
--

CREATE TABLE `notice_target_year` (
  `id` mediumint(8) UNSIGNED NOT NULL,
  `notice_id` mediumint(8) UNSIGNED NOT NULL,
  `year_id` tinyint(3) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notice_target_year`
--

INSERT INTO `notice_target_year` (`id`, `notice_id`, `year_id`, `created_at`, `updated_at`) VALUES
(1, 100, 1, '2017-05-10 14:07:05', '2017-05-10 14:07:05'),
(2, 100, 2, '2017-05-10 14:07:05', '2017-05-10 14:07:05'),
(3, 100, 3, '2017-05-10 14:07:05', '2017-05-10 14:07:05'),
(4, 101, 1, '2017-05-11 01:34:27', '2017-05-11 01:34:27'),
(5, 101, 2, '2017-05-11 01:34:27', '2017-05-11 01:34:27'),
(6, 102, 1, '2017-05-11 01:45:40', '2017-05-11 01:45:40'),
(7, 102, 2, '2017-05-11 01:45:40', '2017-05-11 01:45:40'),
(8, 99, 1, '2017-05-11 03:36:50', '2017-05-11 03:36:50'),
(9, 99, 2, '2017-05-11 03:36:50', '2017-05-11 03:36:50'),
(10, 98, 4, '2017-05-11 03:39:51', '2017-05-11 03:39:51'),
(11, 99, 3, '2017-05-12 14:22:35', '2017-05-12 14:22:35'),
(12, 103, 4, '2017-05-12 14:25:26', '2017-05-12 14:25:26'),
(13, 105, 1, '2017-05-12 15:23:18', '2017-05-12 15:23:18'),
(14, 106, 1, '2017-05-12 15:23:26', '2017-05-12 15:23:26'),
(15, 107, 3, '2017-05-18 09:38:45', '2017-05-18 09:38:45'),
(16, 108, 2, '2017-05-18 09:40:52', '2017-05-18 09:40:52'),
(17, 108, 3, '2017-05-18 09:40:52', '2017-05-18 09:40:52'),
(18, 109, 2, '2017-05-18 09:42:14', '2017-05-18 09:42:14'),
(19, 109, 3, '2017-05-18 09:42:14', '2017-05-18 09:42:14'),
(20, 110, 2, '2017-05-18 09:43:11', '2017-05-18 09:43:11'),
(21, 110, 3, '2017-05-18 09:43:11', '2017-05-18 09:43:11'),
(22, 111, 4, '2017-05-18 09:45:40', '2017-05-18 09:45:40'),
(23, 112, 3, '2017-05-18 13:21:48', '2017-05-18 13:21:48'),
(24, 112, 4, '2017-05-18 13:21:48', '2017-05-18 13:21:48'),
(25, 113, 3, '2017-05-18 13:24:20', '2017-05-18 13:24:20'),
(26, 113, 4, '2017-05-18 13:24:20', '2017-05-18 13:24:20'),
(27, 114, 2, '2017-05-19 06:17:15', '2017-05-19 06:17:15'),
(28, 115, 3, '2017-05-19 11:42:28', '2017-05-19 11:42:28'),
(29, 116, 3, '2017-05-19 11:47:39', '2017-05-19 11:47:39'),
(30, 117, 1, '2017-05-19 11:48:13', '2017-05-19 11:48:13'),
(31, 118, 1, '2017-05-19 12:02:52', '2017-05-19 12:02:52'),
(32, 119, 6, '2017-06-02 04:22:11', '2017-06-02 04:22:11'),
(33, 120, 3, '2017-06-02 06:04:30', '2017-06-02 06:04:30'),
(34, 120, 4, '2017-06-02 06:04:30', '2017-06-02 06:04:30'),
(35, 121, 3, '2017-06-02 06:04:55', '2017-06-02 06:04:55'),
(36, 121, 4, '2017-06-02 06:04:55', '2017-06-02 06:04:55'),
(37, 122, 4, '2017-06-02 06:08:01', '2017-06-02 06:08:01'),
(38, 123, 3, '2017-06-02 06:09:53', '2017-06-02 06:09:53'),
(39, 123, 4, '2017-06-02 06:09:53', '2017-06-02 06:09:53'),
(40, 124, 3, '2017-06-02 06:10:17', '2017-06-02 06:10:17'),
(41, 124, 4, '2017-06-02 06:10:17', '2017-06-02 06:10:17'),
(42, 125, 4, '2017-06-02 08:23:24', '2017-06-02 08:23:24'),
(43, 126, 4, '2017-06-02 08:25:14', '2017-06-02 08:25:14'),
(44, 127, 4, '2017-06-02 08:26:14', '2017-06-02 08:26:14'),
(45, 128, 4, '2017-06-02 08:30:27', '2017-06-02 08:30:27'),
(46, 129, 3, '2017-06-02 08:52:42', '2017-06-02 08:52:42'),
(47, 130, 3, '2017-06-02 09:40:28', '2017-06-02 09:40:28');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('victor@gmail.com', '$2y$10$EizMVNwEBI2GzFbCogJPTOaiV0N3mSjO7d07cjA3g7eops.e6Jn36', '2017-05-01 12:57:16'),
('dennismayeku@gmail.com', '$2y$10$ReNW6GbfhPrulyItVc0EN.8yDwTyZxoP8rm4PKbfjtTMO1t23qqLS', '2017-05-01 13:17:02'),
('aumamary86@gmail.com', '$2y$10$nz6TAakPbKsKk0z5/zXSwOG5FW0BWQe1eNBz6ol52SLl64Uo9TpjG', '2017-05-18 11:29:56');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` smallint(5) UNSIGNED NOT NULL,
  `name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `salutations`
--

CREATE TABLE `salutations` (
  `id` smallint(5) UNSIGNED NOT NULL,
  `name` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `salutations`
--

INSERT INTO `salutations` (`id`, `name`) VALUES
(1, 'Mr'),
(2, 'Mrs'),
(3, 'Ms'),
(4, 'Dr'),
(5, 'Prof');

-- --------------------------------------------------------

--
-- Table structure for table `target_departments`
--

CREATE TABLE `target_departments` (
  `id` smallint(5) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `target_departments`
--

INSERT INTO `target_departments` (`id`, `name`) VALUES
(1, 'Computer Science'),
(2, 'Computer Technology'),
(3, 'Information Technology'),
(4, 'Music');

-- --------------------------------------------------------

--
-- Table structure for table `target_years`
--

CREATE TABLE `target_years` (
  `id` tinyint(3) UNSIGNED NOT NULL,
  `name` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `target_years`
--

INSERT INTO `target_years` (`id`, `name`) VALUES
(1, 'One'),
(2, 'Two'),
(3, 'Three'),
(4, 'Four'),
(5, 'Five'),
(6, 'Six');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` smallint(5) UNSIGNED NOT NULL,
  `username` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` tinyint(1) UNSIGNED NOT NULL DEFAULT '1',
  `gender` tinyint(1) UNSIGNED DEFAULT NULL,
  `bio` text COLLATE utf8mb4_unicode_ci,
  `role_id` tinyint(3) UNSIGNED NOT NULL,
  `hostel_id` tinyint(3) UNSIGNED DEFAULT NULL,
  `faculty_id` tinyint(3) UNSIGNED DEFAULT NULL,
  `department_id` tinyint(3) UNSIGNED DEFAULT NULL,
  `salutation_id` tinyint(3) UNSIGNED DEFAULT '0',
  `dob` date DEFAULT NULL,
  `photo` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `year` tinyint(3) UNSIGNED DEFAULT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `phone`, `is_active`, `gender`, `bio`, `role_id`, `hostel_id`, `faculty_id`, `department_id`, `salutation_id`, `dob`, `photo`, `year`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Ov8H', 'mary@gmail.com', '0720000000', 1, NULL, NULL, 2, NULL, NULL, 1, 0, NULL, '', NULL, '$2y$10$F8/OzVDk7o8rltt1Bhl2A.nvaqpPAUHpuPVoL9V2FzHXVUyrWhQjy', 'aS1jOvtufWtFvaalwuqWcgNcKPwLQkzTwAVuqCHURbS5OPCvlxpD9Bg9i84s', '2017-04-28 16:30:49', '2017-04-28 16:30:49'),
(2, 'SFiq', 'mary@gmail.come', '0720000003', 1, NULL, 'Department description', 2, NULL, NULL, 1, 0, NULL, '', NULL, '$2y$10$Pim.vYzFvU8RC6OWfMGc6uRQyBiLrdJMB.PgkuZpDaXYOzRLgRMEK', NULL, '2017-04-29 02:29:23', '2017-04-29 02:29:23'),
(3, 'organization name', 'org@gmail.com', '0720000000', 1, NULL, 'organization description', 3, NULL, NULL, NULL, 0, NULL, '', NULL, '$2y$10$fj89/6OVTgqyVBTViD81LOK9CehotuRztA3nb.UrkOd6eQurtH3pW', NULL, '2017-04-29 02:35:36', '2017-04-29 02:35:36'),
(6, 'Dennis Mayekug', 'dennismayeku@gmail.comff', '0720000000', 1, 1, NULL, 5, NULL, NULL, 1, 0, NULL, '', 3, '$2y$10$2pLK6Mi7g1P5lFyoG3HNa.ZJrU7Z.rE7WhCfFhwZcMQMhPShKZWoW', '4unBmng6L68LJzDWb7ZFolXxZAXT3laQa38CeHB7OIq0xIBKBUtfIdIulR7j', '2017-04-29 03:10:36', '2017-04-29 03:10:36'),
(7, 'aad6', 'lucid@gmail.com', '0720000000', 1, NULL, 'Computer technology rocks!', 2, NULL, NULL, 2, 0, NULL, '', NULL, '$2y$10$DLaj9RDsXDXkuFqjm6toK.CZqS0o6KselXVtOmIVwU.05iXHOKx9u', NULL, '2017-04-29 10:22:52', '2017-04-29 10:22:52'),
(8, 'pXJp', 'lucid@gmail.comg', '0720000000', 1, NULL, 'Computer technology rocks!', 2, NULL, NULL, 2, 0, NULL, '', NULL, '$2y$10$0vfkSBz.M9vgMap0Ity6SuNcpMYduW0le3KYlz/F5F6QJ/fl3p9gC', NULL, '2017-04-29 10:23:28', '2017-04-29 10:23:28'),
(9, 'Victor', 'victor@gmail.com', '0720000003', 1, 1, NULL, 1, 1, NULL, 2, 0, NULL, '9.jpg', 6, '$2y$10$iZapQqrSpBMWkXXqjM4.yuBp4Yw8.iNtI0b3h43nobuXKilpFo0o6', 'JQGfqNP7sR3wiYd3AvT8Cp3OzHarbef2ocFY4dE9OBjyqBkfX9hYvdD3Xerw', '2017-04-29 19:07:42', '2017-05-06 05:58:57'),
(10, 'Dennis Victor', 'dennismayeku33@gmail.com', '0720000000', 1, 1, NULL, 1, 2, NULL, 1, 0, NULL, '', 2, '$2y$10$1A86U2Ud0nMnzNLA/IWhaOLOSNqFiT.rXvPgS4PFDJcJzB8yv902G', 'uTSJstRdlPDk3FoPeBEqyrpWb0wFyPdP9iDzw1HflMYbzJMnl8GYoHPwYiVZ', '2017-04-30 08:06:36', '2017-05-06 06:12:57'),
(11, 'HVdc', 'lucid4@gmail.com', '12345678', 1, NULL, 'Description for lucid', 2, NULL, NULL, 1, 0, NULL, '', NULL, '$2y$10$O.kGzdz60R191UBEhyGP9uNheTCKC0rdF58PW1OYVqf9Knd3EfaaK', 'MFRdZ2xSMWll2hkvkjaKXSTCT2H9nMZRxVE7SzIHg3bM1DP7Ki5AixE9HUEU', '2017-04-30 09:54:32', '2017-04-30 09:54:32'),
(12, 'UJFs', 'ict@gmail.com', '0720000000', 1, NULL, 'Computer Technology department', 2, NULL, NULL, 2, 0, NULL, '', NULL, '$2y$10$v5wQRM36.X2PtveaosjAZetGJIIfvKzJe4vc8VYCtgEMKVjiBk.oa', 'K4I6DmDI5KkAOhViyvvQUZDZ22wBmREhj7nBZjZBrB5mnwdI0j9foBEUTnVu', '2017-05-01 01:16:23', '2017-05-01 01:16:23'),
(13, 'Jonathan', 'mason@gmail.com', '0720333999', 1, NULL, 'Welcome brethren to the brotherhood.', 3, NULL, NULL, NULL, 0, NULL, '', NULL, '$2y$10$IwsujHF.HDm2Ba01r0r4B.olNnDkgVa3Ogus7dm0AmeO9ylw0.X82', 'lsmkCKWRuq7VZ4rJJFEMq2OufobiHpyEKo3aIShbwrqKWJlxUdnU3xPjuYfy', '2017-05-01 05:11:03', '2017-05-01 05:11:03'),
(14, 'Mugoye Kevin', 'lucid77@gmail.com', '0720000000', 1, 1, NULL, 4, NULL, 1, NULL, 1, NULL, '', NULL, '$2y$10$o68amVNwBYkpCfWXamORKucNbNbWf1wbq3PCcjLIA5L8YrlrV0fkG', 'yVvQr5FG9Gy1QLa3gjAYS5Wv7QeSWW6AVGsMLjJfxhox9XDqCWWdE6u6cXGq', '2017-05-01 06:52:04', '2017-05-01 06:52:04'),
(16, 'Vincent', 'vincent@gmail.com', '0720000002', 1, 1, NULL, 1, 1, NULL, 1, 0, NULL, '', 3, '$2y$10$AoV8LgWXPNhKyadLVTFeVuMFOYgwoEXMomLOFZ3lGt1gJgpKD/qtW', 'EqKyXK0MlDrsbGuT1pf41MecIpaQA7QnA2fzSeKRqD7SorOMvUtCwbjP4vaH', '2017-05-03 12:00:11', '2017-05-03 12:00:11'),
(17, 'Millie', 'millie@gmail.com', '0720000002', 1, 2, NULL, 1, 2, NULL, 1, 0, NULL, '17.jpg', 3, '$2y$10$Vtgi7GOYxG8oz/KaaI6XRO0TOp9i8RJXMjvWkjGEJufaOEsI7hNGW', '7hzJ16L01Q7j4Kggi9NawlphQvFiba1JaYAWUAquH9O3G1s7EyF2kZgyaPA4', '2017-05-03 15:03:09', '2017-05-06 13:19:23'),
(19, 'James', 'james@gmail.com', '0720000000', 1, 1, NULL, 1, 2, NULL, 1, 0, NULL, '19.jpg', 1, '$2y$10$On4Ivz8A71PjKYsHQrva5Og1SH4v67aCQzoYo4a30NkLVS3M6uV3W', 'MMp8tAoyYcLjTLXiY0yDPF1U7PgJnsLxU0xZ3SUVlXv9jxC9UxIBpdL0oiS4', '2017-05-06 06:16:07', '2017-05-06 06:19:09'),
(20, 'Amos', 'konyino@gmail.com', '0720000000', 1, 1, NULL, 4, NULL, 1, NULL, 4, NULL, NULL, NULL, '$2y$10$XHbBQdkABI.0ZmjvMmToz.E8eWA7M.XSnAsjjaBFsQ0lD7VW/AWYe', 'C1IolZldQEOgKgxcfJUVepy2unZlR9ZC1gBYrcNWOEuPshJj0j1IDR7ayhGM', '2017-05-06 15:38:37', '2017-05-06 15:38:37'),
(21, 'Lilian', 'lilian@gmail.com', '0720000000', 1, 2, NULL, 1, 1, NULL, 1, 0, NULL, '21.jpg', 2, '$2y$10$RBHVAitPMbpzFks7W6pRCe6oitNT.fJ7YFdm7U6w8FBI1frvlH.ZG', 'U1hDlparNgEDMosbUsgNZrPuHpM2OxgMkMfi4023LUna4uN6hjSpLINcfV6P', '2017-05-06 20:36:26', '2017-05-06 20:38:08'),
(22, 'Mary2', 'mary2@gmail.com', '0720000000', 1, 2, NULL, 1, 2, NULL, 1, 0, NULL, '22.jpg', 2, '$2y$10$7ZYwjxAbWg0Bjmg5TyPRIeuuHOQEZ2BOu4BElwCdoepaQ.oNSe6eS', 'J7ttX419qbnPjnTwhDFoH9FGH8dOEf1NltBLrQq86PBvqwZFtGZx6ZKCpqcf', '2017-05-08 06:20:21', '2017-05-08 06:24:22'),
(23, 'Engineer', 'kenkorir26@gmail.com', '0717287999', 1, NULL, 'One stop shop engineering campany when it comes to tech fields.', 3, NULL, NULL, NULL, 0, NULL, NULL, NULL, '$2y$10$5Ns6t4wxpVzyxkr0Y.S/o.hDaObyeiFhXR3BIoxPl07xjwr3NWHMC', 'FpIhMLyspTkPFfkC9Rm8yOmCeiRTNRJ5i8Zy6mU1WoZOg7xjOkbZOJ9uUD3P', '2017-05-08 13:38:29', '2017-05-08 13:38:29'),
(25, 'Kenneth', 'kenkorir27@gmail.com', '0717287999', 1, 1, NULL, 1, 4, NULL, 1, 0, NULL, '25.jpg', 3, '$2y$10$XVaIaadF3oIA5SAyLkcW2e2SWDdF/fASHMtz10GsUTVI95WIRI25S', 'eQbVFeLkL85u1PuP8DaRO2Q1CQ5ufPzyieZKQ1aAV2HbaldmaTQueLnae6oq', '2017-05-08 13:52:56', '2017-05-08 13:56:46'),
(27, 'Mugo Kevin', 'mugoyekevo@gmail.com', '0717287998', 1, 1, NULL, 4, NULL, 1, NULL, 4, NULL, NULL, NULL, '$2y$10$N95x2sZt6DAnewj0xyQEROrxwt91E7xKL4UCWlMJKhws58WolSO4i', NULL, '2017-05-08 14:10:22', '2017-05-08 14:10:22'),
(28, 'Test 123', 'test@gmail.com', '0720000000', 1, 1, NULL, 1, 2, NULL, 2, 0, NULL, NULL, 2, '$2y$10$RvESH6sjaR926u.5/Ey9tuN7PMIClFWWPDagNtplOM8GfdZzXtL3W', 'iWiXdyFdy5jkmbn6eDeLOedLAOb7vev6GyVzoBY3FDqemLdX8aisYHBWxPjI', '2017-05-18 09:32:42', '2017-06-02 09:01:50'),
(29, 'Jane', 'jane@gmail.com', '0720000000', 1, 2, NULL, 4, NULL, 1, NULL, 3, NULL, NULL, NULL, '$2y$10$VqnvXoDZk1DGq6mwEOi1V.rrhtgTaNZFQeaotnOQEflLuQb3BKhMm', 'vzcvW0PIdMsThq7nE80j9JJ8WsptCpCKFiT3q4LoNzWf2ElZTeckEX6mpKfk', '2017-05-18 09:34:10', '2017-05-18 09:34:10'),
(30, 'Wendy', 'wendygaelle428@gmail.com', '0790564534', 1, 2, NULL, 1, 3, NULL, 1, 0, NULL, '30.jpg', 3, '$2y$10$sRYz7U9dM90UT985.NjQ4eY/cnhKrQKBBlGaHlk2N4ErgUZFyAw0a', 'pmmRRdAh8r01C7TZtPTgwGfv5WuZ0pQhcaJ2ugZpE1DY8MNkEGQG1sgBt20C', '2017-05-18 10:22:02', '2017-05-18 10:25:03'),
(31, 'Mary Auma Okoyo', 'aumamary86@gmail.com', '0720300364', 1, 2, NULL, 1, 2, NULL, 1, 0, NULL, '31.jpg', 1, '$2y$10$c9dcylwEc8b5ibvHIw71fOxqCLJiwykmFYTZ7By0V4IZT6w99s7hW', 'kFf328DtmAPhXIOM8pLhiO4n9uf2ghv4QHY52RdM8GWCfOUSievqqTEbWhTp', '2017-05-18 11:18:09', '2017-05-18 11:20:19'),
(32, 'eTOT', 'admin1995@admin.com', '0799999999', 1, NULL, 'Located in TB.', 2, NULL, NULL, 1, 0, NULL, NULL, NULL, '$2y$10$o19IJ5yORu8luW9v2ygiYeYboHbpwWwKhgdJ1/y9J84wadQ9ZpJzK', 'dx8KfKz4nQMGHH2O7dtxb8OsPKm5E4qoA53ADaHII4nC6eKmEIzQ0KPIo9Mj', '2017-05-18 11:24:48', '2017-05-18 11:24:48'),
(33, 'Abc', 'abc@gmail.com', '0720000000', 1, 2, NULL, 4, NULL, 3, NULL, 2, NULL, NULL, NULL, '$2y$10$t8ELuPTvng1Dv9Qa6sbjyefz6GUgaiBKrichCRvM3AOI9AOMoWYwi', 'jVZF9gEpYwCGPDA7ZpjqeBMXoLDpaZwkRKouvjgan5lIf5sjgPQ5KD9GNHoL', '2017-05-18 13:19:10', '2017-05-18 13:19:10'),
(34, 'Joy Catherine', 'joycathy@gmail.com', '0720202020', 1, 2, NULL, 1, 1, NULL, 3, 0, NULL, NULL, 1, '$2y$10$J1gaHz3/teOQzO/9WTDU4ONrgjF8czkZMcqRhm3Jx6L4EJ/hI9rL2', 'XBOwhRNUf0aM25UFDooEkp4PGjelVM1AfyTP7dZRzlLz2U308XmVOLCgOiSZ', '2017-05-19 11:33:35', '2017-05-19 11:33:35'),
(35, 'Michael Adongo', 'michael@gmail.com', '0730303030', 1, 1, NULL, 4, NULL, 1, NULL, 1, NULL, NULL, NULL, '$2y$10$BL0qbiBtqZViEPno9zYhT.lYLYTpzzoInWXCycasVrhB70YBbHRuW', 'Q29r3M5YVkGl5UixvA9NnfD3cQTyaMm0Rw666hKWUG68y7MC0XcYfyHlFhOi', '2017-05-19 11:41:23', '2017-05-19 11:41:23'),
(37, 'Dennis', 'dennismayeku@gmail.com', '0720000000', 1, 1, NULL, 1, 3, NULL, 1, 0, NULL, NULL, 3, '$2y$10$cqJWFWTi9yZHhwKS4yDkZudPg7XCmFsrk76GsTxwqujsW0bW4Ycu2', 'WhFTThnVP7lCmYBzliPONpMQ5CLNJ62dRif3nVEasr9c1y3C65vWvxeG2S30', '2017-06-02 09:09:29', '2017-06-02 09:44:07'),
(38, 'Dee', 'denise@gmail.com', '0708365748', 1, 2, NULL, 1, 2, NULL, 3, 0, NULL, NULL, 3, '$2y$10$MyQAFHQzznIRICzN1u6pfuhR9lv8PQc.GBB2pZlMA4xQOfum5qrLm', 'clZfP7Ij1Lq8fbDVpGyVBCcW3rRBGxPnQ6NylDZEVhL4U2GJ9bfDpC2W3THN', '2017-06-16 13:04:33', '2017-06-16 13:04:33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attachments`
--
ALTER TABLE `attachments`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `attachments_name_unique` (`name`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category_notice`
--
ALTER TABLE `category_notice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `departments_name_unique` (`name`);

--
-- Indexes for table `faculties`
--
ALTER TABLE `faculties`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `faculties_name_unique` (`name`);

--
-- Indexes for table `follows`
--
ALTER TABLE `follows`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hostels`
--
ALTER TABLE `hostels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `like_shares`
--
ALTER TABLE `like_shares`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notices`
--
ALTER TABLE `notices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notice_target_department`
--
ALTER TABLE `notice_target_department`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notice_target_year`
--
ALTER TABLE `notice_target_year`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indexes for table `salutations`
--
ALTER TABLE `salutations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `target_departments`
--
ALTER TABLE `target_departments`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `target_departments_name_unique` (`name`);

--
-- Indexes for table `target_years`
--
ALTER TABLE `target_years`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `attachments`
--
ALTER TABLE `attachments`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `category_notice`
--
ALTER TABLE `category_notice`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `faculties`
--
ALTER TABLE `faculties`
  MODIFY `id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `follows`
--
ALTER TABLE `follows`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `hostels`
--
ALTER TABLE `hostels`
  MODIFY `id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `like_shares`
--
ALTER TABLE `like_shares`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `notices`
--
ALTER TABLE `notices`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=131;
--
-- AUTO_INCREMENT for table `notice_target_department`
--
ALTER TABLE `notice_target_department`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
--
-- AUTO_INCREMENT for table `notice_target_year`
--
ALTER TABLE `notice_target_year`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `salutations`
--
ALTER TABLE `salutations`
  MODIFY `id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `target_departments`
--
ALTER TABLE `target_departments`
  MODIFY `id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `target_years`
--
ALTER TABLE `target_years`
  MODIFY `id` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
