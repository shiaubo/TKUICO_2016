-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- 主機: localhost
-- 產生時間： 2016 年 06 月 05 日 17:52
-- 伺服器版本: 10.1.13-MariaDB
-- PHP 版本： 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `ico`
--

-- --------------------------------------------------------

--
-- 資料表結構 `course`
--

CREATE TABLE `course` (
  `studentID` int(20) NOT NULL,
  `studentName` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `department` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Grade` int(10) NOT NULL,
  `c` tinyint(1) NOT NULL,
  `java` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `python` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `swift` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `mssql` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `mysql` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `nb` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `pc` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `ios` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `android` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `agree` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;



/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
