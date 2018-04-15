-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2018 at 11:38 AM
-- Server version: 10.1.24-MariaDB
-- PHP Version: 7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nepalifilm`
--

-- --------------------------------------------------------

--
-- Table structure for table `cmodels`
--

CREATE TABLE `cmodels` (
  `id` int(10) UNSIGNED NOT NULL,
  `category` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cmodels`
--

INSERT INTO `cmodels` (`id`, `category`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Featured', 'publish', '2016-09-10 23:16:22', '2016-09-10 23:37:07'),
(2, 'Up Comming', 'publish', '2016-09-10 23:17:52', '2016-09-10 23:17:52'),
(3, 'Timeline', 'publish', '2016-09-13 02:15:13', '2016-09-13 02:15:13');

-- --------------------------------------------------------

--
-- Table structure for table `commentmodels`
--

CREATE TABLE `commentmodels` (
  `id` int(10) UNSIGNED NOT NULL,
  `articleid` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone_no` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `message` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `commentmodels`
--

INSERT INTO `commentmodels` (`id`, `articleid`, `name`, `email`, `phone_no`, `message`, `created_at`, `updated_at`) VALUES
(1, 29, 'karan', 'karan', 'karan', 'karan', '2016-09-18 22:37:59', '2016-09-18 22:37:59'),
(2, 29, 'shrestha', 'shrestha', 'shrestha', 'shrestha', '2016-09-18 23:38:39', '2016-09-18 23:38:39'),
(3, 29, 'shrestha', 'shrestha', 'shrestha', 'shrestha', '2016-09-18 23:39:45', '2016-09-18 23:39:45'),
(4, 29, 'nepal', ' public function postComment(Request $request,$id)     {         $obj=new commentmodel();         $obj->name=$request->get(\'name\');         $obj->email=$request->get(\'email\');         $obj->phone_no=$request->get(\'phone_no\');         $obj->message=$reques', ' public function postComment(Request $request,$id)     {         $obj=new commentmodel();         $obj->name=$request->get(\'name\');         $obj->email=$request->get(\'email\');         $obj->phone_no=$request->get(\'phone_no\');         $obj->message=$reques', ' public function postComment(Request $request,$id)\r\n    {\r\n        $obj=new commentmodel();\r\n        $obj->name=$request->get(\'name\');\r\n        $obj->email=$request->get(\'email\');\r\n        $obj->phone_no=$request->get(\'phone_no\');\r\n        $obj->message=$', '2016-09-19 00:50:39', '2016-09-19 00:50:39'),
(5, 29, 'ufjhg', 'hgjyj', 'kyuk', 'ftiuyuyg iyt ', '2016-09-19 00:57:10', '2016-09-19 00:57:10'),
(6, 29, 'rgjgjh', 'bsfjdgj', 'dfjghjeh', 'dfjgdfhg', '2016-09-19 01:58:12', '2016-09-19 01:58:12'),
(7, 29, 'gguguy', 'guyguyg', 'vyfyfyv y', 'yfyfyfyt fyfyt', '2016-09-19 02:36:04', '2016-09-19 02:36:04'),
(8, 29, 'abbc', 'hifhgih', 'hidfghih', 'idufhgidfhg', '2016-09-19 02:41:55', '2016-09-19 02:41:55'),
(9, 2, 'hjgfhdg', 'jhdsgfj', 'jdsgfjg', 'dfgjdgfj', '2016-09-20 05:59:11', '2016-09-20 05:59:11'),
(10, 2, 'djfgjdg', 'djsgjgshj', 'djgjdfghj', 'dfjghjdshgj', '2016-09-20 06:00:26', '2016-09-20 06:00:26'),
(11, 2, 'ddsh', 'kghj', 'sdkfghkjh', 'khgkdhgk', '2016-09-20 06:03:52', '2016-09-20 06:03:52'),
(12, 28, 'gf', 'dfjhgjh', 'hgdfhgi', 'jfdhgfhgi', '2016-09-20 06:07:03', '2016-09-20 06:07:03'),
(13, 28, 'nishan', 'nishanstha@live.com', '9841875437', 'nice movie....', '2016-09-20 11:28:36', '2016-09-20 11:28:36');

-- --------------------------------------------------------

--
-- Table structure for table `countermodels`
--

CREATE TABLE `countermodels` (
  `id` int(10) UNSIGNED NOT NULL,
  `articleid` int(11) NOT NULL,
  `hits` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `countermodels`
--

INSERT INTO `countermodels` (`id`, `articleid`, `hits`, `created_at`, `updated_at`) VALUES
(1, 11, 6, '2016-09-13 02:22:48', '2016-09-13 02:22:48'),
(2, 12, 0, '2016-09-13 02:23:44', '2016-09-13 02:23:44'),
(3, 13, 0, '2016-09-13 02:24:17', '2016-09-13 02:24:17'),
(4, 14, 0, '2016-09-13 02:24:50', '2016-09-13 02:24:50'),
(5, 15, 5, '2016-09-15 05:42:50', '2016-09-20 11:40:32'),
(6, 16, 0, '2016-09-15 05:45:34', '2016-09-15 05:45:34'),
(7, 17, 0, '2016-09-15 05:45:58', '2016-09-15 05:45:58'),
(8, 18, 0, '2016-09-15 05:46:46', '2016-09-15 05:46:46'),
(9, 19, 0, '2016-09-15 05:48:38', '2016-09-15 05:48:38'),
(10, 20, 0, '2016-09-15 05:49:41', '2016-09-15 05:49:41'),
(11, 27, 0, '2016-09-16 05:52:02', '2016-09-16 05:52:02'),
(12, 28, 44, '2016-09-16 05:52:48', '2016-09-28 11:35:11'),
(13, 29, 70, '2016-09-18 06:12:00', '2018-04-03 22:22:20'),
(14, 6, 4, '2016-09-19 11:43:35', '2016-09-20 11:39:38'),
(15, 9, 19, '2016-09-19 21:52:09', '2016-09-20 11:43:35'),
(16, 30, 0, '2016-09-20 11:38:12', '2016-09-20 11:38:12');

-- --------------------------------------------------------

--
-- Table structure for table `gmodels`
--

CREATE TABLE `gmodels` (
  `id` int(10) UNSIGNED NOT NULL,
  `genres` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `gmodels`
--

INSERT INTO `gmodels` (`id`, `genres`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Action', 'publish', '2016-09-11 07:30:36', '2016-09-11 07:30:36'),
(2, 'Biography', 'publish', '2016-09-11 07:30:46', '2016-09-11 07:30:46'),
(3, 'Adventure', 'publish', '2016-09-11 07:31:00', '2016-09-11 07:31:00'),
(4, 'Animation', 'publish', '2016-09-11 07:31:10', '2016-09-11 07:31:10'),
(5, 'Comedy', 'publish', '2016-09-11 07:31:24', '2016-09-11 07:31:24'),
(6, 'Horror', 'publish', '2016-09-11 07:31:41', '2016-09-11 07:31:41'),
(7, 'Documentry', 'publish', '2016-09-11 07:31:50', '2016-09-11 07:31:50'),
(8, 'Family', 'publish', '2016-09-11 07:32:08', '2016-09-11 07:32:08'),
(9, 'Drama', 'publish', '2016-09-11 07:32:16', '2016-09-11 07:32:16');

-- --------------------------------------------------------

--
-- Table structure for table `hitmodels`
--

CREATE TABLE `hitmodels` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2016_09_11_044824_create_cmodels_table', 2),
('2016_09_11_045815_create_cmodels_table', 3),
('2016_09_11_051938_create_mmodels_table', 4),
('2016_09_11_130440_create_gmodels_table', 5),
('2016_09_13_030519_create_countermodels_table', 6),
('2016_09_13_072403_create_ratemodels_table', 6),
('2016_09_13_083038_create_submodels_table', 7),
('2016_09_18_102816_create_hitmodels_table', 8),
('2016_09_19_024351_create_commentmodels_table', 8);

-- --------------------------------------------------------

--
-- Table structure for table `mmodels`
--

CREATE TABLE `mmodels` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `category` int(11) NOT NULL,
  `genres` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `hits` int(11) NOT NULL DEFAULT '0',
  `posted_by` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `mmodels`
--

INSERT INTO `mmodels` (`id`, `title`, `category`, `genres`, `image`, `link`, `description`, `hits`, `posted_by`, `status`, `created_at`, `updated_at`) VALUES
(5, 'Kabaddi Kabaddi', 1, '9', 'lib/image/p1.jpg', '', 'Kabaddi Kabaddi Kabaddi Kabaddi Kabaddi KabaddiKabaddi Kabaddi KabaddiKabaddi Kabaddi KabaddiKabaddi Kabaddi Kabaddi', 0, 'Caran', 'publish', '2016-09-12 06:11:36', '2016-09-12 06:11:36'),
(6, 'Manjari', 1, '9', 'lib/image/manjari-poster.jpg', '', 'manjari manjari manjari manjari manjari manjari manjari manjari manjari manjari manjari manjari ', 4, 'Caran', 'publish', '2016-09-12 06:12:23', '2016-09-20 11:39:38'),
(7, 'Utsav', 1, '5', 'lib/image/p2.png', '', 'Utsav Utsav Utsav Utsav Utsav Utsav Utsav Utsav Utsav Utsav Utsav Utsav Utsav Utsav Utsav Utsav Utsav Utsav Utsav Utsav Utsav Utsav Utsav Utsav Utsav Utsav Utsav Utsav Utsav Utsav Utsav Utsav Utsav Utsav Utsav Utsav ', 0, 'Caran', 'publish', '2016-09-12 06:16:08', '2016-09-12 06:16:08'),
(8, 'Classic', 1, '1', 'lib/image/nepali-movie-classic.jpg', '', 'Classic Classic Classic Classic Classic Classic Classic Classic Classic Classic Classic Classic Classic ', 0, 'Caran', 'publish', '2016-09-12 06:19:07', '2016-09-17 07:48:49'),
(9, 'fffhfh', 1, '2', 'lib/image/manjari-poster.jpg', 'https://www.youtube.com/watch?v=-EmcLMeOZSs', ' bbbjbjhj', 19, 'bhjgjghj', 'publish', '2016-09-12 21:15:12', '2016-09-20 11:43:34'),
(10, 'rhgfjghjhgkhkhj', 3, '1', 'lib/image/hhg.jpg', 'd', ' chgjhdaagfege', 0, 'caran', 'publish', '2016-09-13 02:21:54', '2016-09-13 02:21:54'),
(11, 'dhdjd dhdjd dhdjd dhdjd dhdjd dhdjd dhdjd dhdjd dhdjd dhdjd ', 3, '1', 'lib/image/hhg.jpg', 'gfhrhg', ' gdjdhgjdjd  gdjdhgjdjd  gdjdhgjdjd  gdjdhgjdjd  gdjdhgjdjd  gdjdhgjdjd  gdjdhgjdjd  gdjdhgjdjd  gdjdhgjdjd  gdjdhgjdjd ', 0, 'gdfh', 'publish', '2016-09-13 02:22:48', '2016-09-13 02:22:48'),
(12, 'ghgfgjghjgh', 3, '1', 'lib/image/DSC04044.jpg', '  gdjdhgjdjd ', '    gdjdhgjdsdfdsfsfsdfjd   gdjdhgjdjd fgdfhghgfjfgj     gdjdhgjdjd   gdjdhgjdjd fgdfhghgfjfgj     gdjdhgjdjd   gdjdhgjdjd fgdfhghgfjfgj     gdjdhgjdjd   gdjdhgjdjd fgdfhghgfjfgj     gdjdhgjdjd   gdjdhgjdjd fgdfhghgfjfgj     gdjdhgjdjd   gdjdhgjdjd fgdfhg', 0, 'dgdfgf', 'publish', '2016-09-13 02:23:44', '2018-04-14 19:18:26'),
(13, 'hdhgfdjhgjh', 3, '8', 'lib/image/IMG_4728.jpg', 'fdhfdhgjdh', ' jkfhjkjklkj  jkfhjkjklkj  jkfhjkjklkj  jkfhjkjklkj  jkfhjkjklkj  jkfhjkjklkj  jkfhjkjklkj  jkfhjkjklkj  jkfhjkjklkj  jkfhjkjklkj  jkfhjkjklkj  jkfhjkjklkj ', 0, 'hytyy', 'publish', '2016-09-13 02:24:17', '2016-09-13 02:24:17'),
(14, 'dsbfsgujnn', 3, '1', 'lib/image/IMG_1835.jpg', 'dfhj\';lkjhgfdsa', ' dsjhgkhjl  dsjhgkhjl  dsjhgkhjl  dsjhgkhjl  dsjhgkhjl  dsjhgkhjl  dsjhgkhjl  dsjhgkhjl  dsjhgkhjl  dsjhgkhjl  dsjhgkhjl  dsjhgkhjl  dsjhgkhjl  dsjhgkhjl  dsjhgkhjl  dsjhgkhjl  dsjhgkhjl  dsjhgkhjl  dsjhgkhjl  dsjhgkhjl  dsjhgkhjl  dsjhgkhjl  dsjhgkhjl  d', 0, 'cdfdf', 'publish', '2016-09-13 02:24:50', '2016-09-13 02:24:50'),
(15, 'Classic', 1, '9', 'lib/image/nepali-movie-classic.jpg', 'dgdfjgh', ' fgjegfdfsdhhfddgdfh', 5, 'fgghgdjg', 'publish', '2016-09-15 05:42:50', '2016-09-20 11:40:32'),
(20, 'Nai Nabhannu La -4', 1, '1', 'lib/image/61227nai-nabhannu-la-4.jpg', 'dgsshfgdjhgj', ' dfhgdjhkhlj', 0, 'djhgj', 'publish', '2016-09-15 05:49:41', '2016-09-15 05:49:41'),
(27, 'Raghav', 1, '1', 'lib/image/RAGHAV-Film-Poster.jpg', 'gffgjfdgffvbj', 'fdjjhvdghjg ghfdhbgjdfgurdvb gfdsgjh ', 0, 'fsjfdhfh', 'publish', '2016-09-16 05:52:02', '2016-09-16 05:52:02'),
(28, 'Ritu', 1, '1', 'lib/image/Ritu-Nepali-Movie-Poster.jpg', 'https://www.youtube.com/watch?v=PRnZQB4Wt4U', 'gsugs gdfhgrghuru   ', 44, 'fjsgfq', 'publish', '2016-09-16 05:52:48', '2016-09-28 11:35:11'),
(29, 'Lutera', 2, '2', 'lib/image/8ca4a1d94bf3b8fcd0f76852bb68fe19.jpg', 'https://www.youtube.com/watch?v=I8xtpZ-ZYVc', 'jsgj fsgj  ', 70, 'jhjhgjh', 'publish', '2016-09-18 06:12:00', '2018-04-03 22:22:20'),
(30, 'fghjfghjh', 3, '1', 'lib/image/IMG_20160902_135950.jpg', 'kjg', ' bjgjbfj', 0, 'bjkjk', 'publish', '2016-09-20 11:38:12', '2018-03-03 21:49:08');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ratemodels`
--

CREATE TABLE `ratemodels` (
  `id` int(10) UNSIGNED NOT NULL,
  `articleid` int(11) NOT NULL,
  `rate` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ratemodels`
--

INSERT INTO `ratemodels` (`id`, `articleid`, `rate`, `created_at`, `updated_at`) VALUES
(1, 9, 4, '2016-09-15 01:59:40', '2016-09-15 01:59:40'),
(2, 9, 4, '2016-09-15 02:00:46', '2016-09-15 02:00:46'),
(3, 8, 4, NULL, NULL),
(4, 7, 3, '2016-09-15 02:00:46', '2016-09-15 02:00:46'),
(5, 6, 0, '2016-09-15 02:00:46', '2016-09-15 02:00:46'),
(10, 7, 4, '2016-09-15 05:20:07', '2016-09-15 05:20:07'),
(11, 6, 3, '2016-09-15 05:20:37', '2016-09-15 05:20:37'),
(12, 9, 5, '2016-09-15 05:29:49', '2016-09-15 05:29:49'),
(13, 9, 5, '2016-09-15 05:29:59', '2016-09-15 05:29:59'),
(14, 9, 5, '2016-09-15 05:30:07', '2016-09-15 05:30:07'),
(15, 9, 5, '2016-09-15 05:33:40', '2016-09-15 05:33:40'),
(16, 9, 5, '2016-09-15 05:33:49', '2016-09-15 05:33:49'),
(17, 9, 5, '2016-09-15 05:36:19', '2016-09-15 05:36:19'),
(18, 9, 5, '2016-09-15 05:37:02', '2016-09-15 05:37:02'),
(19, 9, 5, '2016-09-15 05:37:11', '2016-09-15 05:37:11'),
(20, 9, 5, '2016-09-15 05:37:15', '2016-09-15 05:37:15'),
(21, 9, 5, '2016-09-15 05:37:21', '2016-09-15 05:37:21'),
(22, 9, 5, '2016-09-15 05:37:27', '2016-09-15 05:37:27'),
(23, 9, 5, '2016-09-15 05:37:34', '2016-09-15 05:37:34'),
(24, 9, 5, '2016-09-15 05:37:43', '2016-09-15 05:37:43'),
(25, 9, 5, '2016-09-15 05:37:50', '2016-09-15 05:37:50'),
(26, 9, 5, '2016-09-15 05:37:58', '2016-09-15 05:37:58'),
(27, 15, 0, '2016-09-15 05:33:49', '2016-09-15 05:33:49'),
(28, 20, 0, '2016-09-15 05:49:41', '2016-09-15 05:49:41'),
(29, 20, 2, '2016-09-15 19:27:08', '2016-09-15 19:27:08'),
(30, 15, 2, '2016-09-16 01:55:00', '2016-09-16 01:55:00'),
(31, 15, 2, '2016-09-16 01:55:20', '2016-09-16 01:55:20'),
(32, 27, 0, '2016-09-16 05:52:03', '2016-09-16 05:52:03'),
(33, 28, 0, '2016-09-16 05:52:49', '2016-09-16 05:52:49'),
(34, 29, 0, '2016-09-18 06:12:00', '2016-09-18 06:12:00'),
(35, 30, 0, '2016-09-20 11:38:12', '2016-09-20 11:38:12');

-- --------------------------------------------------------

--
-- Table structure for table `submodels`
--

CREATE TABLE `submodels` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `submodels`
--

INSERT INTO `submodels` (`id`, `email`, `created_at`, `updated_at`) VALUES
(1, 'caranofficial@gmail.com', '2016-09-17 20:19:34', '2016-09-17 20:19:34'),
(2, 'caranofficial@gmail.com', '2016-09-17 20:27:29', '2016-09-17 20:27:29'),
(3, 'karansam24@gmail.com', '2016-09-19 11:36:24', '2016-09-19 11:36:24'),
(4, 'karansam24@gmail.com', '2016-09-20 01:25:45', '2016-09-20 01:25:45'),
(5, 'tamangbkt@gmail.com', '2016-09-20 01:26:43', '2016-09-20 01:26:43'),
(6, 'caran@gmail.com', '2016-09-20 01:31:11', '2016-09-20 01:31:11'),
(7, 'caran@gmail.com', '2016-09-20 01:32:17', '2016-09-20 01:32:17'),
(8, 'karansam24@gmail.com', '2016-09-20 01:35:14', '2016-09-20 01:35:14'),
(9, 'karansam24@gmail.com', '2016-09-20 01:41:21', '2016-09-20 01:41:21'),
(10, 'caranofficial@gmail.com', '2016-09-20 01:47:09', '2016-09-20 01:47:09'),
(11, 'tamangbkt@gmail.com', '2016-09-20 02:13:31', '2016-09-20 02:13:31'),
(12, 'caranofficial@gmail.com', '2016-09-20 02:31:20', '2016-09-20 02:31:20'),
(13, 'caranofficial@gmail.com', '2016-09-20 02:31:23', '2016-09-20 02:31:23'),
(14, 'caranofficial@gmail.com', '2016-09-20 02:31:24', '2016-09-20 02:31:24'),
(15, 'caranofficial@gmail.com', '2016-09-20 02:31:24', '2016-09-20 02:31:24'),
(16, 'caranofficial@gmail.com', '2016-09-20 02:31:24', '2016-09-20 02:31:24'),
(17, 'caranofficial@gmail.com', '2016-09-20 02:31:25', '2016-09-20 02:31:25'),
(18, 'caranofficial@gmail.com', '2016-09-20 02:31:26', '2016-09-20 02:31:26'),
(19, 'caranofficial@gmail.com', '2016-09-20 02:31:28', '2016-09-20 02:31:28'),
(20, 'caranofficial@gmail.com', '2016-09-20 02:31:30', '2016-09-20 02:31:30'),
(21, 'caranofficial@gmail.com', '2016-09-20 02:31:30', '2016-09-20 02:31:30'),
(22, 'caranofficial@gmail.com', '2016-09-20 02:31:30', '2016-09-20 02:31:30'),
(23, 'caranofficial@gmail.com', '2016-09-20 03:04:35', '2016-09-20 03:04:35'),
(24, 'caranofficial@gmail.com', '2016-09-20 03:04:40', '2016-09-20 03:04:40'),
(25, 'caran@gmail.com', '2016-09-20 03:39:11', '2016-09-20 03:39:11'),
(26, 'caran@gmail.com', '2016-09-20 03:39:15', '2016-09-20 03:39:15'),
(27, 'fjgfjd', '2016-09-20 06:30:47', '2016-09-20 06:30:47'),
(28, 'fjgfjd', '2016-09-20 06:30:51', '2016-09-20 06:30:51'),
(29, 'fjgfjd', '2016-09-20 06:30:53', '2016-09-20 06:30:53'),
(30, 'nishanshrestha@tcmnepal.com', '2016-09-20 11:31:38', '2016-09-20 11:31:38'),
(31, 'nishanshrestha@tcmnepal.com', '2016-09-20 11:31:44', '2016-09-20 11:31:44'),
(32, 'nishanshrestha@tcmnepal.com', '2016-09-20 11:31:47', '2016-09-20 11:31:47'),
(33, 'nishanshrestha@tcmnepal.com', '2016-09-20 11:31:50', '2016-09-20 11:31:50'),
(34, 'caranofficial@gmail.com', '2018-04-14 19:13:59', '2018-04-14 19:13:59'),
(35, 'caranofficial@gmail.com', '2018-04-14 19:14:05', '2018-04-14 19:14:05'),
(36, 'caranofficial@gmail.com', '2018-04-14 19:14:06', '2018-04-14 19:14:06'),
(37, 'caranofficial@gmail.com', '2018-04-14 19:14:09', '2018-04-14 19:14:09'),
(38, 'caranofficial@gmail.com', '2018-04-14 19:14:10', '2018-04-14 19:14:10'),
(39, 'caranofficial@gmail.com', '2018-04-14 19:14:11', '2018-04-14 19:14:11'),
(40, 'caranofficial@gmail.com', '2018-04-14 19:14:11', '2018-04-14 19:14:11'),
(41, 'caranofficial@gmail.com', '2018-04-14 19:14:12', '2018-04-14 19:14:12'),
(42, 'caranofficial@gmail.com', '2018-04-14 19:14:22', '2018-04-14 19:14:22');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'ram', 'caran@gmail.com', '$2y$10$iBnIj6GYj16Sci8IiNZMdeRLAi1OiVB.HZmtvZkXYPFjHZw0qVtcW', 'MEYIFhjzJ6yuDNtHEyGiNSJ1dfmkl87o0ccfHOCEfZsRoAcSibmGvIbSflL3', NULL, '2016-09-13 22:04:05'),
(2, 'Caran', 'abc@gmail.com', '$2y$10$epoeUQLWvHhLKrDm04Ftl.hmQQ0BVOW6TKOoZRj1TGmQDl5mqJGxW', NULL, '2016-09-13 03:38:52', '2016-09-13 03:38:52');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cmodels`
--
ALTER TABLE `cmodels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `commentmodels`
--
ALTER TABLE `commentmodels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countermodels`
--
ALTER TABLE `countermodels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gmodels`
--
ALTER TABLE `gmodels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hitmodels`
--
ALTER TABLE `hitmodels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mmodels`
--
ALTER TABLE `mmodels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `ratemodels`
--
ALTER TABLE `ratemodels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `submodels`
--
ALTER TABLE `submodels`
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
-- AUTO_INCREMENT for table `cmodels`
--
ALTER TABLE `cmodels`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `commentmodels`
--
ALTER TABLE `commentmodels`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `countermodels`
--
ALTER TABLE `countermodels`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `gmodels`
--
ALTER TABLE `gmodels`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `hitmodels`
--
ALTER TABLE `hitmodels`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mmodels`
--
ALTER TABLE `mmodels`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `ratemodels`
--
ALTER TABLE `ratemodels`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `submodels`
--
ALTER TABLE `submodels`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
