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

-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 21, 2020 at 01:14 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id14879139_thesis`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `id` int(5) NOT NULL,
  `signup_date` datetime NOT NULL DEFAULT current_timestamp(),
  `name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gender` varchar(1) COLLATE utf8_unicode_ci DEFAULT NULL,
  `age` int(11) NOT NULL DEFAULT 0,
  `grade` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `consent` varchar(1) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'N',
  `parent_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `parent_age` int(11) NOT NULL DEFAULT 0,
  `game1_start` datetime NOT NULL DEFAULT current_timestamp(),
  `game1_screenshot` varchar(150) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `game1b_screenshot` varchar(150) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `game1c_screenshot` varchar(150) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `game1_end` datetime NOT NULL DEFAULT current_timestamp(),
  `game2_start` datetime NOT NULL DEFAULT current_timestamp(),
  `game2_screenshot` varchar(150) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `game2_end` datetime NOT NULL DEFAULT current_timestamp(),
  `game3_start` datetime NOT NULL DEFAULT current_timestamp(),
  `game3_screenshot` varchar(150) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `game3_end` datetime NOT NULL DEFAULT current_timestamp(),
  `game4_start` datetime NOT NULL DEFAULT current_timestamp(),
  `game4_screenshot` varchar(150) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `game4_end` datetime NOT NULL DEFAULT current_timestamp(),
  `game5_start` datetime NOT NULL DEFAULT current_timestamp(),
  `game5_screenshot` varchar(150) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `game5_end` datetime NOT NULL DEFAULT current_timestamp(),
  `game6_start` datetime NOT NULL DEFAULT current_timestamp(),
  `game6_screenshot` varchar(150) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `game6_end` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`id`, `signup_date`, `name`, `gender`, `age`, `grade`, `consent`, `parent_name`, `parent_age`, `game1_start`, `game1_screenshot`, `game1b_screenshot`, `game1c_screenshot`, `game1_end`, `game2_start`, `game2_screenshot`, `game2_end`, `game3_start`, `game3_screenshot`, `game3_end`, `game4_start`, `game4_screenshot`, `game4_end`, `game5_start`, `game5_screenshot`, `game5_end`, `game6_start`, `game6_screenshot`, `game6_end`) VALUES
(1, '2020-09-18 07:41:51', 'anta', 'G', 10, '', 'N', '', 0, '2020-10-01 18:55:08', '', '', '', '2020-09-18 07:41:51', '2020-09-18 09:43:01', '', '2020-09-18 07:41:51', '2020-09-18 07:41:51', '', '2020-09-18 07:41:51', '2020-09-18 07:41:51', '', '2020-09-18 07:41:51', '2020-09-18 07:41:51', '', '2020-09-18 07:41:51', '2020-09-18 07:41:51', '', '2020-09-18 07:41:51'),
(2, '2020-09-18 13:04:42', 'Test Coba', 'B', 9, '', 'N', '', 0, '2020-09-18 13:05:38', 'game1_2.PNG', '', '', '2020-09-18 13:10:24', '2020-09-18 13:14:26', 'game2_2.PNG', '2020-09-18 13:24:55', '2020-09-18 13:25:43', 'game3_2.PNG', '2020-09-18 13:29:22', '2020-09-18 13:21:51', 'game4_2.PNG', '2020-09-18 13:24:46', '2020-09-18 13:32:50', 'game5_2.PNG', '2020-09-18 13:37:32', '2020-09-18 13:37:40', 'game6_2.PNG', '2020-09-18 13:42:36'),
(3, '2020-09-18 14:56:23', 'Cek 123', 'B', 8, '', 'N', '', 0, '2020-09-18 14:59:23', '', '', '', '2020-09-18 14:56:23', '2020-09-18 14:56:23', '', '2020-09-18 14:56:23', '2020-09-18 14:56:23', '', '2020-09-18 14:56:23', '2020-09-18 14:56:23', '', '2020-09-18 14:56:23', '2020-09-18 14:56:23', '', '2020-09-18 14:56:23', '2020-09-18 14:56:23', '', '2020-09-18 14:56:23'),
(4, '2020-09-18 22:02:46', 'Okay', 'B', 6, '', 'N', '', 0, '2020-09-18 15:02:46', '', '', '', '2020-09-18 15:02:46', '2020-09-18 22:23:06', '', '2020-09-18 15:02:46', '2020-09-18 15:02:46', '', '2020-09-18 15:02:46', '2020-09-18 15:02:46', '', '2020-09-18 15:02:46', '2020-09-18 15:02:46', '', '2020-09-18 15:02:46', '2020-09-18 15:02:46', '', '2020-09-18 15:02:46'),
(5, '2020-09-22 23:15:26', 'Nike', 'G', 5, '', 'N', '', 0, '2020-09-22 16:15:26', '', '', '', '2020-09-22 16:15:26', '2020-09-22 16:15:26', '', '2020-09-22 16:15:26', '2020-09-22 16:15:26', '', '2020-09-22 16:15:26', '2020-09-22 16:15:26', '', '2020-09-22 16:15:26', '2020-09-22 16:15:26', '', '2020-09-22 16:15:26', '2020-09-22 16:15:26', '', '2020-09-22 16:15:26'),
(6, '2020-09-26 22:24:12', 'Nathan', 'B', 9, '', 'N', '', 0, '2020-09-26 15:24:12', '', '', '', '2020-09-26 15:24:12', '2020-09-26 15:24:12', '', '2020-09-26 15:24:12', '2020-09-26 15:24:12', '', '2020-09-26 15:24:12', '2020-09-26 15:24:12', '', '2020-09-26 15:24:12', '2020-09-26 15:24:12', '', '2020-09-26 15:24:12', '2020-09-26 15:24:12', '', '2020-09-26 15:24:12'),
(7, '2020-10-01 18:50:41', 'anta', 'G', 11, '', 'N', '', 0, '2020-10-01 11:50:41', '', '', '', '2020-10-01 11:50:41', '2020-10-01 11:50:41', '', '2020-10-01 11:50:41', '2020-10-01 11:50:41', '', '2020-10-01 11:50:41', '2020-10-01 11:50:41', '', '2020-10-01 11:50:41', '2020-10-01 11:50:41', '', '2020-10-01 11:50:41', '2020-10-01 11:50:41', '', '2020-10-01 11:50:41'),
(8, '2020-10-01 19:40:51', 'anta', 'G', 12, '', 'N', '', 0, '2020-10-01 12:40:51', '', '', '', '2020-10-01 12:40:51', '2020-10-01 12:40:51', '', '2020-10-01 12:40:51', '2020-10-01 12:40:51', '', '2020-10-01 12:40:51', '2020-10-01 12:40:51', '', '2020-10-01 12:40:51', '2020-10-01 12:40:51', '', '2020-10-01 12:40:51', '2020-10-01 12:40:51', '', '2020-10-01 12:40:51'),
(9, '2020-10-05 17:12:53', 'antania djuwita', 'G', 11, '', 'Y', 'xxx', 33, '2020-10-13 14:40:51', '', '', '', '2020-10-05 10:12:53', '2020-10-07 14:26:29', '', '2020-10-05 10:12:53', '2020-10-05 10:12:53', '', '2020-10-05 10:12:53', '2020-10-05 10:12:53', '', '2020-10-05 10:12:53', '2020-10-05 10:12:53', '', '2020-10-05 10:12:53', '2020-10-05 17:15:54', 'game6_9.png', '2020-10-05 17:24:59'),
(10, '2020-10-06 19:59:17', 'antania djuwita', 'G', 14, '', 'N', '', 0, '2020-10-06 12:59:17', '', '', '', '2020-10-06 12:59:17', '2020-10-06 12:59:17', '', '2020-10-06 12:59:17', '2020-10-06 12:59:17', '', '2020-10-06 12:59:17', '2020-10-06 12:59:17', '', '2020-10-06 12:59:17', '2020-10-06 12:59:17', '', '2020-10-06 12:59:17', '2020-10-06 12:59:17', '', '2020-10-06 12:59:17'),
(11, '2020-10-06 22:58:56', 'ethan', 'B', 9, '', 'N', '', 0, '2020-10-06 22:59:08', '', '', '', '2020-10-06 15:58:56', '2020-10-06 15:58:56', '', '2020-10-06 15:58:56', '2020-10-06 15:58:56', '', '2020-10-06 15:58:56', '2020-10-06 15:58:56', '', '2020-10-06 15:58:56', '2020-10-06 15:58:56', '', '2020-10-06 15:58:56', '2020-10-06 15:58:56', '', '2020-10-06 15:58:56'),
(12, '2020-10-07 14:15:20', 'antania djuwita', 'G', 10, '', 'N', '', 0, '2020-10-07 07:15:20', '', '', '', '2020-10-07 07:15:20', '2020-10-07 07:15:20', '', '2020-10-07 07:15:20', '2020-10-07 07:15:20', '', '2020-10-07 07:15:20', '2020-10-07 07:15:20', '', '2020-10-07 07:15:20', '2020-10-07 07:15:20', '', '2020-10-07 07:15:20', '2020-10-07 07:15:20', '', '2020-10-07 07:15:20'),
(13, '2020-10-07 17:50:57', 'antania djuwita', 'G', 11, '', 'N', '', 0, '2020-10-07 10:50:57', '', '', '', '2020-10-07 10:50:57', '2020-10-07 10:50:57', '', '2020-10-07 10:50:57', '2020-10-07 10:50:57', '', '2020-10-07 10:50:57', '2020-10-07 10:50:57', '', '2020-10-07 10:50:57', '2020-10-07 10:50:57', '', '2020-10-07 10:50:57', '2020-10-07 10:50:57', '', '2020-10-07 10:50:57'),
(14, '2020-10-09 01:52:09', 'evan', 'B', 10, '', 'N', '', 0, '2020-10-08 18:52:09', '', '', '', '2020-10-08 18:52:09', '2020-10-09 01:52:19', '', '2020-10-08 18:52:09', '2020-10-09 02:09:23', '', '2020-10-08 18:52:09', '2020-10-09 02:26:33', '', '2020-10-08 18:52:09', '2020-10-09 02:31:49', '', '2020-10-08 18:52:09', '2020-10-08 18:52:09', '', '2020-10-08 18:52:09'),
(15, '2020-10-09 16:58:03', 'antania djuwita', 'G', 11, '', 'N', '', 0, '2020-10-09 09:58:03', '', '', '', '2020-10-09 09:58:03', '2020-10-09 09:58:03', '', '2020-10-09 09:58:03', '2020-10-09 09:58:03', '', '2020-10-09 09:58:03', '2020-10-09 09:58:03', '', '2020-10-09 09:58:03', '2020-10-09 09:58:03', '', '2020-10-09 09:58:03', '2020-10-09 09:58:03', '', '2020-10-09 09:58:03'),
(16, '2020-10-10 17:35:11', 'Budi', 'B', 11, 'SD Kelas 5', 'Y', 'Bapak', 51, '2020-10-10 10:35:11', '', '', '', '2020-10-10 10:35:11', '2020-10-10 10:35:11', '', '2020-10-10 10:35:11', '2020-10-10 10:35:11', '', '2020-10-10 10:35:11', '2020-10-10 10:35:11', '', '2020-10-10 10:35:11', '2020-10-10 10:35:11', '', '2020-10-10 10:35:11', '2020-10-10 10:35:11', '', '2020-10-10 10:35:11'),
(17, '2020-10-12 13:27:32', 'antania djuwita', 'G', 10, 'SD Kelas 4', 'N', '', 0, '2020-10-12 06:27:32', '', '', '', '2020-10-12 06:27:32', '2020-10-12 06:27:32', '', '2020-10-12 06:27:32', '2020-10-12 06:27:32', '', '2020-10-12 06:27:32', '2020-10-12 06:27:32', '', '2020-10-12 06:27:32', '2020-10-12 06:27:32', '', '2020-10-12 06:27:32', '2020-10-12 06:27:32', '', '2020-10-12 06:27:32'),
(18, '2020-10-12 18:02:55', 'gio', 'B', 10, 'SD Kelas 4', 'N', '', 0, '2020-10-12 11:02:55', '', '', '', '2020-10-12 11:02:55', '2020-10-12 11:02:55', '', '2020-10-12 11:02:55', '2020-10-12 11:02:55', '', '2020-10-12 11:02:55', '2020-10-12 11:02:55', '', '2020-10-12 11:02:55', '2020-10-12 11:02:55', '', '2020-10-12 11:02:55', '2020-10-12 11:02:55', '', '2020-10-12 11:02:55'),
(19, '2020-10-13 14:39:17', 'antania djuwita', 'G', 10, 'SD Kelas 4', 'N', '', 0, '2020-10-13 07:39:17', '', '', '', '2020-10-13 07:39:17', '2020-10-13 07:39:17', '', '2020-10-13 07:39:17', '2020-10-13 07:39:17', '', '2020-10-13 07:39:17', '2020-10-13 07:39:17', '', '2020-10-13 07:39:17', '2020-10-13 07:39:17', '', '2020-10-13 07:39:17', '2020-10-13 07:39:17', '', '2020-10-13 07:39:17'),
(20, '2020-10-16 11:35:33', 'Evander Asher', 'B', 10, 'SD Kelas 4', 'Y', 'noni', 33, '2020-10-16 12:02:09', 'game1_20.jpg', 'game1b_20.jpg', 'game1c_20.jpg', '2020-10-16 12:08:46', '2020-10-16 12:10:20', 'game2_20.jpg', '2020-10-16 12:15:30', '2020-10-16 12:15:45', 'game3_20.jpg', '2020-10-16 12:20:45', '2020-10-16 12:21:17', 'game4_20.jpg', '2020-10-16 12:29:45', '2020-10-16 12:30:08', 'game5_20.jpg', '2020-10-16 12:35:00', '2020-10-16 12:36:07', 'game6_20.jpg', '2020-10-16 12:41:32'),
(21, '2020-10-17 13:45:25', 's', 'G', 11, 'SD Kelas 4', 'Y', 'asd', 54, '2020-10-17 06:45:25', '', '', '', '2020-10-17 06:45:25', '2020-10-17 13:52:30', '', '2020-10-17 06:45:25', '2020-10-17 06:45:25', '', '2020-10-17 06:45:25', '2020-10-17 06:45:25', '', '2020-10-17 06:45:25', '2020-10-17 06:45:25', '', '2020-10-17 06:45:25', '2020-10-17 06:45:25', '', '2020-10-17 06:45:25'),
(22, '2020-10-17 14:22:10', 'aaa', 'G', 10, 'SD Kelas 3', 'N', '', 0, '2020-10-17 07:22:10', '', '', '', '2020-10-17 07:22:10', '2020-10-17 07:22:10', '', '2020-10-17 07:22:10', '2020-10-17 07:22:10', '', '2020-10-17 07:22:10', '2020-10-17 07:22:10', '', '2020-10-17 07:22:10', '2020-10-17 07:22:10', '', '2020-10-17 07:22:10', '2020-10-17 07:22:10', '', '2020-10-17 07:22:10'),
(23, '2020-10-17 14:26:38', 'Test', 'B', 12, 'SD Kelas 5', 'Y', 'Banu', 51, '2020-10-17 07:26:38', '', '', '', '2020-10-17 07:26:38', '2020-10-17 07:26:38', '', '2020-10-17 07:26:38', '2020-10-17 07:26:38', '', '2020-10-17 07:26:38', '2020-10-17 07:26:38', '', '2020-10-17 07:26:38', '2020-10-17 07:26:38', '', '2020-10-17 07:26:38', '2020-10-17 07:26:38', '', '2020-10-17 07:26:38');

-- --------------------------------------------------------

--
-- Table structure for table `survey`
--

CREATE TABLE `survey` (
  `id` int(5) NOT NULL,
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
  `question20` varchar(1) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `survey`
--

INSERT INTO `survey` (`id`, `signup_date`, `name`, `grade`, `student_name`, `email`, `phone`, `question1`, `question2`, `question3`, `question4`, `question5`, `question6`, `question7`, `question8`, `question9`, `question10`, `question11`, `question12`, `question13`, `question14`, `question15`, `question16`, `question17`, `question18`, `question19`, `question20`) VALUES
(1, '2020-09-26 15:16:59', 'Test', 'SD Kelas 4', 'Siswa', 'test@gmail.com', '0812954512', '1', '1', '1', '2', '2', '2', '3', '3', '3', '4', '4', '4', '4', '4', '4', '4', '4', '4', '4', '4'),
(2, '2020-10-12 10:41:09', 'xx', 'SD Kelas 3', 'Budi', 'a.djuwita@gmail.com', '0811435654', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(5) NOT NULL,
  `username` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'admin', 'asdf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `survey`
--
ALTER TABLE `survey`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `survey`
--
ALTER TABLE `survey`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
