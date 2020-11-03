-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.7.26 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             11.0.0.5919
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for thesis
CREATE DATABASE IF NOT EXISTS `thesis` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `thesis`;

-- Dumping structure for table thesis.account
CREATE TABLE IF NOT EXISTS `account` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `signup_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gender` varchar(1) COLLATE utf8_unicode_ci DEFAULT NULL,
  `age` int(11) NOT NULL DEFAULT '0',
  `grade` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `consent` varchar(1) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'N',
  `parent_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `parent_age` int(11) NOT NULL DEFAULT '0',
  `game1_start` datetime DEFAULT NULL,
  `game1_screenshot` varchar(150) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `game1b_screenshot` varchar(150) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `game1c_screenshot` varchar(150) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `game1_end` datetime DEFAULT NULL,
  `game2_start` datetime DEFAULT NULL,
  `game2_screenshot` varchar(150) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `game2_end` datetime DEFAULT NULL,
  `game3_start` datetime DEFAULT NULL,
  `game3_screenshot` varchar(150) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `game3_end` datetime DEFAULT NULL,
  `game4_start` datetime DEFAULT NULL,
  `game4_screenshot` varchar(150) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `game4_end` datetime DEFAULT NULL,
  `game5_start` datetime DEFAULT NULL,
  `game5_screenshot` varchar(150) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `game5_end` datetime DEFAULT NULL,
  `game6_start` datetime DEFAULT NULL,
  `game6_screenshot` varchar(150) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `game6_end` datetime DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=130 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table thesis.account: ~51 rows (approximately)
/*!40000 ALTER TABLE `account` DISABLE KEYS */;
INSERT INTO `account` (`id`, `signup_date`, `name`, `gender`, `age`, `grade`, `consent`, `parent_name`, `parent_age`, `game1_start`, `game1_screenshot`, `game1b_screenshot`, `game1c_screenshot`, `game1_end`, `game2_start`, `game2_screenshot`, `game2_end`, `game3_start`, `game3_screenshot`, `game3_end`, `game4_start`, `game4_screenshot`, `game4_end`, `game5_start`, `game5_screenshot`, `game5_end`, `game6_start`, `game6_screenshot`, `game6_end`) VALUES
	(77, '2020-10-28 05:27:28', 'Jovita Elysia Gunawan', 'G', 10, 'SD Kelas 4', 'Y', 'Marlin Silviana', 40, '2020-10-28 05:43:08', '', '', '', '2020-10-28 05:49:48', '2020-10-28 05:50:42', '', '2020-10-28 05:54:57', '2020-10-28 05:55:24', '', '2020-10-28 06:01:24', '2020-10-28 06:01:43', '', '2020-10-28 06:06:14', '2020-10-28 06:06:48', '', '2020-10-28 06:11:08', '2020-10-28 06:11:44', '', NULL),
	(78, '2020-10-28 06:59:25', 'Reynaldo Octavius Putra Dilla', 'B', 10, 'SD Kelas 4', 'Y', 'Effendi', 41, '2020-10-28 07:22:49', '', '', '', '2020-10-28 07:26:51', '2020-10-28 07:27:04', '', '2020-10-28 07:31:24', '2020-10-28 07:31:35', '', '2020-10-28 07:37:38', '2020-10-28 07:37:49', '', '2020-10-28 07:42:20', '2020-10-28 07:42:31', '', '2020-10-28 07:47:18', '2020-10-28 16:15:19', '', NULL),
	(79, '2020-10-28 07:22:42', 'radja yoshua doloksaribu', 'B', 9, 'SD Kelas 3', 'Y', ' henri doloksaribu ', 48, '2020-10-28 07:24:47', '', '', '', '2020-10-28 07:51:47', '2020-10-28 07:52:10', '', '2020-10-28 07:56:56', '2020-10-28 13:56:01', '', '2020-10-28 14:03:34', '2020-10-28 13:40:04', '', '2020-10-28 13:47:24', '2020-10-28 08:12:36', '', '2020-10-28 08:19:34', '2020-10-28 13:47:46', '', '2020-10-28 13:55:15'),
	(80, '2020-10-28 07:35:07', 'Ardana', 'B', 9, 'SD Kelas 4', 'Y', 'Brian yuswendra', 40, '2020-10-28 07:42:55', '', '', '', '2020-10-28 07:42:57', '2020-10-28 07:43:11', '', NULL, NULL, '', NULL, NULL, '', NULL, NULL, '', NULL, NULL, '', NULL),
	(81, '2020-10-28 07:58:24', 'Ardana Agra WIstara', 'B', 9, 'SD Kelas 4', 'Y', 'Brian yuswendra', 40, '2020-10-28 08:04:16', '', '', '', '2020-10-28 08:10:41', '2020-10-28 08:12:24', '', '2020-10-28 08:16:37', '2020-10-28 08:21:05', '', '2020-10-28 08:21:33', '2020-10-28 08:21:56', '', '2020-10-28 08:25:25', '2020-10-28 08:25:38', '', '2020-10-28 08:25:52', '2020-10-28 08:26:02', '', '2020-10-28 08:34:21'),
	(82, '2020-10-28 08:17:30', 'frederick given', 'B', 11, 'SD Kelas 5', 'Y', 'ervinasiufung', 43, '2020-10-28 08:19:31', '', '', '', '2020-10-28 08:23:43', '2020-10-28 08:31:01', '', '2020-10-28 08:36:36', '2020-10-28 08:36:55', '', '2020-10-28 08:38:24', '2020-10-28 08:39:06', '', '2020-10-28 08:42:32', '2020-10-28 08:42:46', '', '2020-10-28 08:46:05', '2020-10-28 08:46:20', '', '2020-10-28 08:58:25'),
	(83, '2020-10-28 08:34:08', 'Freshman Eito Hezekiel Tambunan', 'B', 9, 'SD Kelas 4', 'Y', 'Masito M. Sibarani', 38, '2020-10-28 14:12:42', '', '', '', '2020-10-28 14:17:57', '2020-10-28 09:21:19', '', '2020-10-28 09:30:23', '2020-10-28 09:36:53', '', '2020-10-28 09:37:06', '2020-10-28 09:37:18', '', '2020-10-28 09:41:48', '2020-10-28 09:42:03', '', '2020-10-28 09:46:18', '2020-10-28 16:01:42', '', NULL),
	(84, '2020-10-28 08:47:00', 'Lucas Reynardi Santosa', 'B', 10, 'SD Kelas 4', 'Y', 'Ursih Adiawati', 35, NULL, '', '', '', NULL, NULL, '', NULL, NULL, '', NULL, NULL, '', NULL, NULL, '', NULL, NULL, '', NULL),
	(85, '2020-10-28 08:56:15', 'Given Blessing Cristian', 'B', 10, 'SD Kelas 4', 'Y', 'Suratno', 48, '2020-10-28 08:57:50', '', '', '', '2020-10-28 09:11:46', '2020-10-28 13:58:23', '', '2020-10-28 19:59:04', '2020-10-28 20:12:39', '', '2020-10-28 20:31:18', '2020-10-28 20:31:31', '', '2020-10-28 20:38:13', NULL, '', NULL, NULL, '', NULL),
	(86, '2020-10-28 08:58:00', 'Aurelie Chelsea Makino', 'G', 8, 'SD Kelas 3', 'Y', 'Andreas Meiko Makino', 46, '2020-10-28 09:08:13', '', '', '', '2020-10-28 09:11:52', '2020-10-28 09:12:12', '', '2020-10-28 09:15:27', '2020-10-28 09:15:37', '', '2020-10-28 09:21:06', '2020-10-28 09:21:15', '', '2020-10-28 09:26:00', '2020-10-28 09:26:16', '', '2020-10-28 09:31:59', '2020-10-28 09:32:21', '', '2020-10-28 09:43:53'),
	(87, '2020-10-28 09:05:46', 'Given Blessing yang', 'B', 10, 'SD Kelas 4', 'Y', 'Suratno', 48, '2020-10-28 09:06:55', '', '', '', NULL, NULL, '', NULL, NULL, '', NULL, NULL, '', NULL, NULL, '', NULL, NULL, '', NULL),
	(88, '2020-10-28 09:06:02', 'Gerald Viander Cong', 'B', 9, 'SD Kelas 3', 'Y', 'Lie Siu Mie', 53, '2020-10-28 13:45:10', '', '', '', '2020-10-28 13:48:24', '2020-10-28 13:48:34', '', '2020-10-28 13:55:12', '2020-10-28 13:55:22', '', '2020-10-28 13:59:59', '2020-10-28 14:00:13', '', '2020-10-28 14:03:46', '2020-10-28 14:03:55', '', '2020-10-28 14:07:52', '2020-10-28 14:08:02', '', '2020-10-28 14:25:19'),
	(89, '2020-10-28 09:07:14', 'Immanuel Sammy Sianipar', 'B', 9, 'SD Kelas 3', 'Y', 'Sinta Marito', 40, '2020-10-28 14:25:00', '', '', '', '2020-10-28 14:31:48', '2020-10-28 09:48:51', '', '2020-10-28 09:54:21', '2020-10-28 09:54:47', '', '2020-10-28 10:01:58', '2020-10-28 10:02:26', '', '2020-10-28 10:09:21', '2020-10-28 10:10:20', '', '2020-10-28 10:16:09', '2020-10-28 14:32:14', '', '2020-10-28 14:37:31'),
	(90, '2020-10-28 09:10:33', 'tiur ester nathania sihombing', 'G', 9, 'SD Kelas 3', 'Y', 'dewi lesmi', 54, '2020-10-28 19:00:53', '', '', '', '2020-10-28 19:06:11', '2020-10-28 19:06:55', '', '2020-10-28 19:33:12', '2020-10-28 19:33:27', '', '2020-10-28 19:54:01', '2020-10-28 19:54:09', '', '2020-10-28 19:59:05', '2020-10-28 19:59:13', '', '2020-10-28 20:03:28', '2020-10-28 20:03:52', '', NULL),
	(91, '2020-10-28 09:14:52', 'Given Blessing', 'B', 10, 'SD Kelas 4', 'Y', 'Suratno', 48, '2020-10-28 09:17:19', '', '', '', '2020-10-28 09:17:06', '2020-10-28 09:19:57', '', '2020-10-28 09:33:38', '2020-10-28 09:33:56', '', '2020-10-28 09:42:31', '2020-10-28 09:43:18', '', '2020-10-28 09:46:12', '2020-10-28 09:47:18', '', '2020-10-28 09:53:51', '2020-10-28 09:54:13', '', '2020-10-28 10:05:25'),
	(92, '2020-10-28 09:16:02', 'Leonyta Patricia Lim', 'G', 10, 'SD Kelas 4', 'Y', 'Desy Ariany', 41, '2020-10-28 09:18:01', '', '', '', '2020-10-28 09:25:24', '2020-10-28 09:25:39', '', '2020-10-28 09:29:16', '2020-10-28 09:29:37', '', '2020-10-28 09:30:14', '2020-10-28 09:30:45', '', '2020-10-28 09:31:16', '2020-10-28 09:31:35', '', '2020-10-28 09:32:01', '2020-10-28 09:32:24', '', '2020-10-28 09:35:58'),
	(93, '2020-10-28 09:22:39', 'Liora Aufinca', 'G', 10, 'SD Kelas 4', 'Y', 'Ufarah Isioni', 43, '2020-10-28 09:57:43', '', '', '', '2020-10-28 10:02:11', '2020-10-28 10:02:39', '', '2020-10-28 10:05:05', '2020-10-28 10:05:39', '', '2020-10-28 10:15:58', '2020-10-28 10:16:18', '', '2020-10-28 10:19:28', '2020-10-28 10:19:57', '', '2020-10-28 10:23:35', '2020-10-28 10:23:48', '', '2020-10-28 10:41:12'),
	(94, '2020-10-28 09:23:31', 'Kevin Phiong', 'B', 9, 'SD Kelas 3', 'Y', 'Lavenia', 44, '2020-10-28 09:24:36', '', '', '', '2020-10-28 09:28:29', '2020-10-28 09:28:38', '', '2020-10-28 09:32:02', '2020-10-28 09:32:10', '', '2020-10-28 09:36:49', '2020-10-28 09:36:57', '', '2020-10-28 09:39:57', '2020-10-28 09:40:06', '', '2020-10-28 09:44:23', '2020-10-28 09:44:34', '', '2020-10-28 09:52:02'),
	(95, '2020-10-28 09:30:33', 'charlene lie', 'G', 8, 'SD Kelas 3', 'Y', 'engeline tjioe', 35, '2020-10-28 09:40:20', '', '', '', '2020-10-28 09:41:11', '2020-10-28 09:45:47', '', '2020-10-28 09:49:10', '2020-10-28 09:49:25', '', '2020-10-28 09:59:39', '2020-10-28 10:00:02', '', '2020-10-28 10:07:32', '2020-10-28 10:08:37', '', '2020-10-28 10:26:56', '2020-10-28 10:27:27', '', '2020-10-28 10:40:10'),
	(96, '2020-10-28 09:38:11', 'Ruth Angelika ', 'G', 9, 'SD Kelas 3', 'Y', 'Angelika Hartono ', 42, '2020-10-28 09:39:06', '', '', '', NULL, NULL, '', NULL, NULL, '', NULL, NULL, '', NULL, NULL, '', NULL, NULL, '', NULL),
	(97, '2020-10-28 09:47:00', 'Samuel Matthew', 'B', 11, 'SD Kelas 5', 'Y', 'Angelika Hartono', 42, '2020-10-28 10:15:50', '', '', '', '2020-10-28 10:19:39', '2020-10-28 10:19:59', '', '2020-10-28 10:42:00', '2020-10-28 17:05:45', '', '2020-10-28 17:41:43', '2020-10-28 17:41:54', '', '2020-10-28 17:48:50', '2020-10-28 17:49:09', '', '2020-10-28 17:59:46', NULL, '', NULL),
	(98, '2020-10-28 09:49:56', 'Giselle Gunawan', 'G', 10, 'SD Kelas 4', 'Y', 'Yuliana ', 44, '2020-10-28 12:04:13', '', '', '', '2020-10-28 12:28:51', '2020-10-28 12:31:04', '', '2020-10-28 12:41:44', '2020-10-28 12:44:53', '', '2020-10-28 12:52:08', '2020-10-28 12:55:04', '', '2020-10-28 12:59:58', '2020-10-28 13:03:01', '', '2020-10-28 13:09:13', '2020-10-28 13:15:12', '', '2020-10-28 13:50:07'),
	(99, '2020-10-28 09:57:48', 'Ruth', 'G', 9, 'SD Kelas 3', 'Y', 'Halim', 43, '2020-10-28 09:58:19', '', '', '', '2020-10-28 14:55:34', '2020-10-28 14:55:40', '', '2020-10-28 14:55:47', '2020-10-28 14:55:53', '', '2020-10-28 14:55:58', '2020-10-28 14:56:05', '', NULL, NULL, '', NULL, NULL, '', NULL),
	(100, '2020-10-28 10:00:51', 'Ivana Laura Sondang', 'G', 12, 'SD Kelas 5', 'Y', 'natalia sihotang', 41, '2020-10-28 10:13:05', '', '', '', '2020-10-28 10:18:29', '2020-10-28 10:19:04', '', '2020-10-28 10:28:37', '2020-10-28 10:28:50', '', '2020-10-28 10:34:03', '2020-10-28 10:34:23', '', '2020-10-28 10:38:25', '2020-10-28 10:38:36', '', '2020-10-28 10:42:33', '2020-10-28 10:42:43', '', '2020-10-28 10:47:54'),
	(101, '2020-10-28 10:13:09', 'ruth A', 'G', 9, 'SD Kelas 3', 'Y', 'angelika', 42, '2020-10-28 10:13:37', '', '', '', '2020-10-28 10:26:26', '2020-10-28 10:26:33', '', '2020-10-28 10:29:40', '2020-10-28 10:29:48', '', '2020-10-28 10:31:59', '2020-10-28 10:32:05', '', '2020-10-28 10:35:41', '2020-10-28 10:35:49', '', NULL, NULL, '', NULL),
	(102, '2020-10-28 10:14:45', 'Calvin Anderson Lie', 'B', 9, 'SD Kelas 3', 'Y', 'Vera Sunanto', 44, '2020-10-28 10:32:45', '', '', '', '2020-10-28 10:37:34', '2020-10-28 10:38:04', '', '2020-10-28 10:41:46', '2020-10-28 18:55:56', '', '2020-10-28 19:02:02', '2020-10-28 19:02:22', '', NULL, '2020-10-28 10:53:05', '', '2020-10-28 10:58:24', NULL, '', NULL),
	(103, '2020-10-28 10:30:58', 'Leonel Conary Jeconia Sijabat', 'B', 10, 'SD Kelas 4', 'Y', 'Dyah Sekar Dewantari', 48, '2020-10-28 22:30:03', '', '', '', '2020-10-28 22:34:32', '2020-10-28 22:35:02', '', '2020-10-28 22:38:49', NULL, '', NULL, '2020-10-28 13:25:47', '', '2020-10-28 13:33:34', '2020-10-28 13:34:40', '', '2020-10-28 13:45:32', NULL, '', NULL),
	(104, '2020-10-28 10:38:28', 'francesca beatrix', 'G', 9, 'SD Kelas 3', 'Y', 'Nenie', 40, '2020-10-28 10:47:21', '', '', '', '2020-10-28 10:47:29', '2020-10-28 10:55:31', '', '2020-10-28 10:57:08', '2020-10-28 10:58:12', '', NULL, NULL, '', NULL, NULL, '', NULL, NULL, '', NULL),
	(105, '2020-10-28 10:40:38', 'Ruth . A', 'G', 9, 'SD Kelas 3', 'Y', 'angelika', 42, '2020-10-28 10:42:21', '', '', '', '2020-10-28 10:47:09', '2020-10-28 10:47:19', '', '2020-10-28 10:55:32', '2020-10-28 10:55:39', '', '2020-10-28 11:17:23', '2020-10-28 14:19:47', '', '2020-10-28 14:24:06', '2020-10-28 11:26:21', '', '2020-10-28 11:30:27', NULL, '', NULL),
	(106, '2020-10-28 10:57:28', 'adrian romeo miky atmaja', 'B', 10, 'SD Kelas 4', 'Y', 'mira maryani', 36, '2020-10-28 16:16:57', '', '', '', '2020-10-28 16:22:16', '2020-10-28 16:22:35', '', '2020-10-28 16:25:19', '2020-10-28 17:01:48', '', '2020-10-28 17:07:45', '2020-10-28 17:16:20', '', NULL, '2020-10-28 16:35:38', '', '2020-10-28 16:39:17', NULL, '', NULL),
	(107, '2020-10-28 10:59:28', 'Prabu Nathanael Krstiawan ', 'B', 10, 'SD Kelas 4', 'Y', 'Maria Dwi Wijayanti ', 37, '2020-10-28 19:56:56', '', '', '', '2020-10-28 21:18:05', '2020-10-28 11:31:49', '', '2020-10-28 11:35:52', '2020-10-28 11:36:02', '', '2020-10-28 11:42:16', '2020-10-28 11:42:43', '', '2020-10-28 11:46:40', '2020-10-28 11:47:33', '', '2020-10-28 11:52:44', NULL, '', NULL),
	(108, '2020-10-28 11:45:40', 'Constantina Cendekiawan ', 'G', 11, 'SD Kelas 5', 'Y', 'Sari Ragil Sofian', 42, '2020-10-28 15:25:21', '', '', '', '2020-10-28 15:29:56', '2020-10-28 15:30:09', '', '2020-10-28 15:34:57', '2020-10-28 15:49:17', '', '2020-10-28 15:57:41', '2020-10-28 16:00:45', '', '2020-10-28 16:06:30', '2020-10-28 16:07:06', '', '2020-10-28 16:12:35', '2020-10-28 16:12:53', '', NULL),
	(109, '2020-10-28 11:48:47', 'JOSHUA MILANO SUKMA', 'B', 11, 'SD Kelas 5', 'Y', 'LISA KARTIKA', 37, '2020-10-28 11:52:35', '', '', '', '2020-10-28 11:57:02', '2020-10-28 11:57:43', '', '2020-10-28 12:01:11', '2020-10-28 12:02:18', '', '2020-10-28 12:09:38', '2020-10-28 12:09:51', '', '2020-10-28 12:14:50', '2020-10-28 12:15:26', '', '2020-10-28 12:18:34', '2020-10-28 12:19:21', '', '2020-10-28 12:31:36'),
	(110, '2020-10-28 12:18:05', 'Marvin Clementine Suryadi', 'B', 11, 'SD Kelas 5', 'Y', 'Desy', 41, '2020-10-28 13:37:44', '', '', '', '2020-10-28 13:41:13', '2020-10-28 12:26:41', '', '2020-10-28 13:41:50', '2020-10-28 13:41:59', '', '2020-10-28 13:46:38', '2020-10-28 13:46:48', '', '2020-10-28 13:50:18', '2020-10-28 13:50:31', '', '2020-10-28 13:54:03', '2020-10-28 13:54:13', '', NULL),
	(111, '2020-10-28 13:11:43', 'Regan Reinaldo Richard', 'B', 9, 'SD Kelas 3', 'Y', 'lily yany', 41, '2020-10-28 13:22:19', '', '', '', '2020-10-28 13:32:48', '2020-10-28 13:33:35', '', '2020-10-28 13:39:04', '2020-10-28 13:39:51', '', '2020-10-28 13:42:42', '2020-10-28 13:45:23', '', '2020-10-28 14:07:12', '2020-10-28 14:07:41', '', '2020-10-28 14:13:32', '2020-10-28 14:14:00', '', '2020-10-28 14:20:38'),
	(112, '2020-10-28 13:18:22', 'SAMUEL TANTIANA ', 'B', 11, 'SD Kelas 4', 'Y', 'RIANY', 44, '2020-10-28 13:31:33', '', '', '', '2020-10-28 13:36:07', '2020-10-28 13:36:36', '', '2020-10-28 13:40:31', '2020-10-28 13:40:58', '', '2020-10-28 13:47:18', '2020-10-28 13:47:37', '', '2020-10-28 13:52:06', '2020-10-28 13:52:35', '', '2020-10-28 14:06:30', '2020-10-28 14:38:22', '', '2020-10-28 14:42:04'),
	(113, '2020-10-28 13:19:41', 'Enricco Wenata', 'B', 9, 'SD Kelas 3', 'Y', 'Suriati', 45, '2020-10-28 13:20:40', '', '', '', '2020-10-28 13:25:58', '2020-10-28 13:26:05', '', '2020-10-28 13:30:40', '2020-10-28 13:30:46', '', '2020-10-28 13:36:50', '2020-10-28 15:03:06', '', '2020-10-28 15:08:54', '2020-10-28 13:44:57', '', '2020-10-28 13:50:34', NULL, '', NULL),
	(114, '2020-10-28 13:28:18', 'felix effendy', 'B', 9, 'SD Kelas 3', 'Y', 'devie', 40, '2020-10-28 13:34:14', '', '', '', '2020-10-28 13:55:09', '2020-10-28 13:55:17', '', '2020-10-28 14:05:10', NULL, '', '2020-10-28 14:51:02', '2020-10-28 14:34:54', '', '2020-10-28 14:38:36', '2020-10-28 14:08:19', '', '2020-10-28 14:11:55', '2020-10-28 14:52:06', '', NULL),
	(115, '2020-10-28 14:49:32', 'Drexton Tandela', 'B', 11, 'SD Kelas 5', 'Y', 'David Tandela', 42, '2020-10-28 14:57:14', '', '', '', '2020-10-28 15:01:29', '2020-10-28 15:03:49', '', '2020-10-28 15:08:47', '2020-10-28 15:09:02', '', '2020-10-28 15:15:20', '2020-10-28 15:15:38', '', '2020-10-28 15:19:08', '2020-10-28 15:20:09', '', '2020-10-28 15:25:18', '2020-10-28 15:25:26', '', '2020-10-28 15:33:57'),
	(116, '2020-10-28 15:08:27', 'Trusty Pamula', 'G', 10, 'SD Kelas 4', 'Y', 'Aminah', 37, '2020-10-28 17:56:24', '', '', '', '2020-10-28 18:03:51', '2020-10-28 18:04:07', '', '2020-10-28 18:09:50', '2020-10-28 20:40:37', '', '2020-10-28 20:47:04', '2020-10-28 20:50:55', '', '2020-10-28 20:54:39', '2020-10-28 20:58:19', '', '2020-10-28 21:02:18', '2020-10-28 21:02:51', '', '2020-10-28 21:14:08'),
	(117, '2020-10-28 15:12:01', 'Test', 'B', 7, 'SD Kelas 2', 'Y', 'Cek', 41, '2020-10-28 23:11:32', '', '', '', '2020-10-28 23:11:47', '2020-10-28 23:11:57', '', '2020-10-28 23:12:01', '2020-10-28 23:12:07', '', '2020-10-28 23:12:11', '2020-10-28 23:12:18', '', '2020-10-28 23:12:20', '2020-10-28 23:12:26', '', '2020-10-28 23:12:29', '2020-10-28 23:12:34', '', '2020-10-28 23:12:44'),
	(118, '2020-10-28 15:13:52', 'Michelle Samantha Hirawanto', 'G', 9, 'SD Kelas 3', 'Y', 'Jeffri', 42, '2020-10-28 15:19:38', '', '', '', '2020-10-28 15:22:27', '2020-10-28 15:23:16', '', NULL, NULL, '', NULL, NULL, '', NULL, NULL, '', NULL, NULL, '', NULL),
	(119, '2020-10-28 16:28:40', 'Jasmine Dyah Ayuning Tyas', 'G', 10, 'SD Kelas 4', 'Y', 'Mida Sri Lestari', 39, '2020-10-28 19:58:06', '', '', '', '2020-10-28 20:00:53', '2020-10-28 18:22:57', '', '2020-10-28 18:25:32', '2020-10-28 18:25:49', '', '2020-10-28 18:30:42', '2020-10-28 18:31:41', '', '2020-10-28 18:35:37', '2020-10-28 18:35:48', '', '2020-10-28 18:40:26', NULL, '', NULL),
	(120, '2020-10-28 17:15:26', 'Elaine Novreina Muljo', 'G', 11, 'SD Kelas 5', 'Y', 'Jenilia Tjahjadi', 43, '2020-10-28 17:21:00', '', '', '', '2020-10-28 17:21:22', '2020-10-28 17:31:33', '', '2020-10-28 18:37:42', '2020-10-28 18:37:49', '', '2020-10-28 18:41:19', '2020-10-28 18:56:24', '', '2020-10-28 18:56:26', '2020-10-28 18:56:41', '', '2020-10-28 19:00:21', '2020-10-28 20:23:25', '', '2020-10-28 20:33:57'),
	(121, '2020-10-28 17:18:45', 'Joanna Athalia Lie', 'G', 10, 'SD Kelas 4', 'Y', 'Dewi Irawan', 43, '2020-10-28 17:22:00', '', '', '', '2020-10-28 17:25:20', '2020-10-28 17:25:29', '', '2020-10-28 17:30:26', '2020-10-28 17:30:42', '', '2020-10-28 17:35:16', '2020-10-28 17:35:28', '', '2020-10-28 17:38:54', '2020-10-28 17:39:01', '', '2020-10-28 17:42:28', '2020-10-28 17:42:35', '', '2020-10-28 17:45:16'),
	(122, '2020-10-28 18:14:10', 'noelle jehonathan zhang', 'B', 9, 'SD Kelas 3', 'Y', 'helen triana savista', 36, '2020-10-28 18:22:18', '', '', '', '2020-10-28 18:32:47', NULL, '', NULL, NULL, '', NULL, NULL, '', NULL, NULL, '', NULL, NULL, '', NULL),
	(123, '2020-10-28 18:31:37', 'ETthan johanes', 'B', 9, 'SD Kelas 3', 'Y', 'Shaula Mariana Nuraini', 38, '2020-10-28 18:49:15', '', '', '', '2020-10-28 18:50:31', '2020-10-28 18:58:23', '', '2020-10-28 19:03:46', '2020-10-28 19:05:03', '', '2020-10-28 19:06:37', '2020-10-28 19:14:30', '', '2020-10-28 19:22:53', '2020-10-28 19:24:05', '', '2020-10-28 19:26:26', '2020-10-28 19:26:59', '', '2020-10-28 19:36:17'),
	(124, '2020-10-28 19:57:37', 'Kevin Santoso', 'B', 9, 'SD Kelas 4', 'Y', 'Iwan Santoso', 44, '2020-10-28 20:00:31', '', '', '', NULL, NULL, '', NULL, NULL, '', NULL, NULL, '', NULL, NULL, '', NULL, NULL, '', NULL),
	(125, '2020-10-28 20:27:47', 'Giselle Angeline', 'G', 9, 'SD Kelas 3', 'Y', 'Erlina', 41, '2020-10-28 20:39:01', '', '', '', '2020-10-28 20:50:33', '2020-10-28 21:48:22', '', '2020-10-28 21:52:48', '2020-10-28 21:53:49', '', '2020-10-28 21:58:41', '2020-10-28 21:58:55', '', '2020-10-28 22:02:30', '2020-10-28 22:02:42', '', NULL, NULL, '', NULL),
	(126, '2020-10-28 21:26:01', 'Clara Theresa Charissa', 'G', 10, 'SD Kelas 4', 'Y', 'Togar siagian', 41, '2020-10-28 22:02:50', '', '', '', '2020-10-28 22:47:42', '2020-10-28 22:48:22', '', NULL, NULL, '', NULL, NULL, '', NULL, NULL, '', NULL, NULL, '', NULL),
	(128, '2020-10-28 23:06:04', 'JOCELYN CHERISH HALIM', 'G', 10, 'SD Kelas 4', 'Y', 'IMELDA HALIM', 39, NULL, '', '', '', NULL, NULL, '', NULL, NULL, '', NULL, NULL, '', NULL, NULL, '', NULL, NULL, '', NULL),
	(129, '2020-10-28 23:10:56', 'Test', 'B', 9, 'SD Kelas 4', 'N', '', 0, NULL, '', '', '', NULL, NULL, '', NULL, NULL, '', NULL, NULL, '', NULL, NULL, '', NULL, NULL, '', NULL);
/*!40000 ALTER TABLE `account` ENABLE KEYS */;

-- Dumping structure for table thesis.survey
CREATE TABLE IF NOT EXISTS `survey` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `signup_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `grade` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `student_name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `question1` varchar(1) COLLATE utf8_unicode_ci DEFAULT NULL,
  `question2` varchar(1) COLLATE utf8_unicode_ci DEFAULT NULL,
  `question3` varchar(1) COLLATE utf8_unicode_ci DEFAULT NULL,
  `question4` varchar(1) COLLATE utf8_unicode_ci DEFAULT NULL,
  `question5` varchar(1) COLLATE utf8_unicode_ci DEFAULT NULL,
  `question6` varchar(1) COLLATE utf8_unicode_ci DEFAULT NULL,
  `question7` varchar(1) COLLATE utf8_unicode_ci DEFAULT NULL,
  `question8` varchar(1) COLLATE utf8_unicode_ci DEFAULT NULL,
  `question9` varchar(1) COLLATE utf8_unicode_ci DEFAULT NULL,
  `question10` varchar(1) COLLATE utf8_unicode_ci DEFAULT NULL,
  `question11` varchar(1) COLLATE utf8_unicode_ci DEFAULT NULL,
  `question12` varchar(1) COLLATE utf8_unicode_ci DEFAULT NULL,
  `question13` varchar(1) COLLATE utf8_unicode_ci DEFAULT NULL,
  `question14` varchar(1) COLLATE utf8_unicode_ci DEFAULT NULL,
  `question15` varchar(1) COLLATE utf8_unicode_ci DEFAULT NULL,
  `question16` varchar(1) COLLATE utf8_unicode_ci DEFAULT NULL,
  `question17` varchar(1) COLLATE utf8_unicode_ci DEFAULT NULL,
  `question18` varchar(1) COLLATE utf8_unicode_ci DEFAULT NULL,
  `question19` varchar(1) COLLATE utf8_unicode_ci DEFAULT NULL,
  `question20` varchar(1) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table thesis.survey: ~0 rows (approximately)
/*!40000 ALTER TABLE `survey` DISABLE KEYS */;
/*!40000 ALTER TABLE `survey` ENABLE KEYS */;

-- Dumping structure for table thesis.user
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table thesis.user: ~0 rows (approximately)
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` (`id`, `username`, `password`) VALUES
	(1, 'admin', 'asdf');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
