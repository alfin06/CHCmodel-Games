-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.14-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             11.1.0.6116
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for thesis
CREATE DATABASE IF NOT EXISTS `thesis` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci */;
USE `thesis`;

-- Dumping structure for table thesis.account
CREATE TABLE IF NOT EXISTS `account` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `signup_date` datetime NOT NULL DEFAULT current_timestamp(),
  `name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gender` varchar(1) COLLATE utf8_unicode_ci DEFAULT NULL,
  `age` int(11) NOT NULL DEFAULT 0,
  `grade` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `consent` varchar(1) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'N',
  `parent_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `parent_age` int(11) NOT NULL DEFAULT 0,
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
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table thesis.account: ~0 rows (approximately)
/*!40000 ALTER TABLE `account` DISABLE KEYS */;
INSERT INTO `account` (`id`, `signup_date`, `name`, `gender`, `age`, `grade`, `consent`, `parent_name`, `parent_age`, `game1_start`, `game1_screenshot`, `game1b_screenshot`, `game1c_screenshot`, `game1_end`, `game2_start`, `game2_screenshot`, `game2_end`, `game3_start`, `game3_screenshot`, `game3_end`, `game4_start`, `game4_screenshot`, `game4_end`, `game5_start`, `game5_screenshot`, `game5_end`, `game6_start`, `game6_screenshot`, `game6_end`) VALUES
	(31, '2020-10-22 21:24:32', 'Cek 123', 'B', 10, 'SD Kelas 5', 'Y', 'asd', 45, NULL, '', '', '', NULL, NULL, '', NULL, NULL, '', NULL, NULL, '', NULL, NULL, '', NULL, NULL, '', NULL);
/*!40000 ALTER TABLE `account` ENABLE KEYS */;

-- Dumping structure for table thesis.survey
CREATE TABLE IF NOT EXISTS `survey` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `signup_date` datetime NOT NULL DEFAULT current_timestamp(),
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
  `question21` varchar(1) COLLATE utf8_unicode_ci DEFAULT NULL,
  `question22` varchar(1) COLLATE utf8_unicode_ci DEFAULT NULL,
  `question23` varchar(1) COLLATE utf8_unicode_ci DEFAULT NULL,
  `question24` varchar(1) COLLATE utf8_unicode_ci DEFAULT NULL,
  `question25` varchar(1) COLLATE utf8_unicode_ci DEFAULT NULL,
  `question26` varchar(1) COLLATE utf8_unicode_ci DEFAULT NULL,
  `question27` varchar(1) COLLATE utf8_unicode_ci DEFAULT NULL,
  `question28` varchar(1) COLLATE utf8_unicode_ci DEFAULT NULL,
  `question29` varchar(1) COLLATE utf8_unicode_ci DEFAULT NULL,
  `question30` varchar(1) COLLATE utf8_unicode_ci DEFAULT NULL,
  `question31` varchar(1) COLLATE utf8_unicode_ci DEFAULT NULL,
  `question32` varchar(1) COLLATE utf8_unicode_ci DEFAULT NULL,
  `question33` varchar(1) COLLATE utf8_unicode_ci DEFAULT NULL,
  `question34` varchar(1) COLLATE utf8_unicode_ci DEFAULT NULL,
  `question35` varchar(1) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table thesis.survey: ~2 rows (approximately)
/*!40000 ALTER TABLE `survey` DISABLE KEYS */;
INSERT INTO `survey` (`id`, `signup_date`, `name`, `grade`, `student_name`, `email`, `phone`, `question1`, `question2`, `question3`, `question4`, `question5`, `question6`, `question7`, `question8`, `question9`, `question10`, `question11`, `question12`, `question13`, `question14`, `question15`, `question16`, `question17`, `question18`, `question19`, `question20`, `question21`, `question22`, `question23`, `question24`, `question25`, `question26`, `question27`, `question28`, `question29`, `question30`, `question31`, `question32`, `question33`, `question34`, `question35`) VALUES
	(1, '2020-09-26 15:16:59', 'Test', 'SD Kelas 4', 'Siswa', 'test@gmail.com', '0812954512', '1', '1', '1', '2', '2', '2', '3', '3', '3', '4', '4', '4', '4', '4', '4', '4', '4', '4', '4', '4', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(2, '2020-10-12 10:41:09', 'xx', 'SD Kelas 3', 'Budi', 'a.djuwita@gmail.com', '0811435654', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
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
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
