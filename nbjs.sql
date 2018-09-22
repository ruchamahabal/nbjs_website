-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 22, 2018 at 07:24 PM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nbjs`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_event_image`
--

DROP TABLE IF EXISTS `add_event_image`;
CREATE TABLE IF NOT EXISTS `add_event_image` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `year` int(4) NOT NULL,
  `image` blob NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `add_member_list`
--

DROP TABLE IF EXISTS `add_member_list`;
CREATE TABLE IF NOT EXISTS `add_member_list` (
  `member_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(254) NOT NULL,
  `village` varchar(254) NOT NULL,
  `Designation` varchar(254) NOT NULL,
  `Year_from` int(4) DEFAULT NULL,
  `Year_to` int(4) DEFAULT NULL,
  PRIMARY KEY (`member_id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_member_list`
--

INSERT INTO `add_member_list` (`member_id`, `name`, `village`, `Designation`, `Year_from`, `Year_to`) VALUES
(13, 'bgdn', 'gn', 'grngn', NULL, NULL),
(14, 'hdvbkajv', 'dvn v', 'adnv', NULL, NULL),
(15, 'djvnj', 'kjdvn', 'jdsvn', NULL, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
