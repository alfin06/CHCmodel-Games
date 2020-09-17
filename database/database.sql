-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.18 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             11.0.0.5919
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for thesis
CREATE DATABASE IF NOT EXISTS `thesis` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `thesis`;

-- Dumping structure for table thesis.account
CREATE TABLE IF NOT EXISTS `account` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `signup_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `name` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `gender` varchar(1) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `age` int(11) NOT NULL DEFAULT '0',
  `game1_start` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `game1_screenshot` varchar(15) COLLATE utf8mb4_general_ci NOT NULL DEFAULT '',
  `game1_end` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `game2_start` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `game2_screenshot` varchar(15) COLLATE utf8mb4_general_ci NOT NULL DEFAULT '',
  `game2_end` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `game3_start` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `game3_screenshot` varchar(15) COLLATE utf8mb4_general_ci NOT NULL DEFAULT '',
  `game3_end` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `game4_start` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `game4_screenshot` varchar(15) COLLATE utf8mb4_general_ci NOT NULL DEFAULT '',
  `game4_end` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `game5_start` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `game5_screenshot` varchar(15) COLLATE utf8mb4_general_ci NOT NULL DEFAULT '',
  `game5_end` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `game6_start` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `game6_screenshot` varchar(15) COLLATE utf8mb4_general_ci NOT NULL DEFAULT '',
  `game6_end` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table thesis.account: 0 rows
/*!40000 ALTER TABLE `account` DISABLE KEYS */;
INSERT INTO `account` (`id`, `signup_date`, `name`, `gender`, `age`, `game1_start`, `game1_screenshot`, `game1_end`, `game2_start`, `game2_screenshot`, `game2_end`, `game3_start`, `game3_screenshot`, `game3_end`, `game4_start`, `game4_screenshot`, `game4_end`, `game5_start`, `game5_screenshot`, `game5_end`, `game6_start`, `game6_screenshot`, `game6_end`) VALUES
	(1, '2020-09-17 19:56:01', 'Test', 'B', 7, '2020-09-17 20:59:13', '', '2020-09-17 19:56:01', '2020-09-17 21:00:06', '', '2020-09-17 19:56:01', '2020-09-17 21:00:17', '', '2020-09-17 19:56:01', '2020-09-17 21:00:28', '', '2020-09-17 19:56:01', '2020-09-17 21:00:57', '', '2020-09-17 19:56:01', '2020-09-17 21:01:06', '', '2020-09-17 19:56:01');
/*!40000 ALTER TABLE `account` ENABLE KEYS */;

-- Dumping structure for table thesis.user
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `password` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table thesis.user: 1 rows
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` (`id`, `username`, `password`) VALUES
	(1, 'admin', 'asdf');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
