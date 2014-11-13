-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 13, 2014 at 02:47 PM
-- Server version: 5.5.40
-- PHP Version: 5.3.10-1ubuntu3.15

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sms`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrator`
--

CREATE TABLE IF NOT EXISTS `administrator` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

--
-- Dumping data for table `administrator`
--

INSERT INTO `administrator` (`id`, `name`, `password`, `create_date`) VALUES
(1, 'test', '1234568', '2014-11-13 03:49:35'),
(2, 'kom.huy@gmail.com', '123123', '2014-11-13 04:27:54'),
(3, 'asdfasdc', 'asdfaw', '2014-11-13 04:28:04'),
(4, 'asdfasdc', 'asdfaw', '2014-11-13 04:28:14'),
(5, 'asdfasdc', 'asdfaw', '2014-11-13 04:30:03'),
(6, 'asdfasdc', 'asdfaw', '2014-11-13 04:30:17'),
(7, 'asdfasdc', 'asdfaw', '2014-11-13 04:30:19'),
(8, 'asdfasdc', 'asdfaw', '2014-11-13 04:30:21'),
(9, 'asdfasdc', 'asdfaw', '2014-11-13 04:30:23'),
(10, 'asdfasdc', 'asdfaw', '2014-11-13 04:30:26'),
(11, 'kom.huy@gmail.com', '123123', '2014-11-13 04:36:55'),
(12, 'kom.huy@gmail.com', '123123', '2014-11-13 04:36:57'),
(13, 'kom.huy@gmail.com', '123123', '2014-11-13 04:37:04'),
(14, 'kom.huy@gmail.com', '123123', '2014-11-13 04:37:08');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE IF NOT EXISTS `students` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(100) CHARACTER SET utf8 NOT NULL,
  `last_name` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `gender` varchar(50) NOT NULL,
  `dob` datetime NOT NULL,
  `address` varchar(100) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `create` datetime NOT NULL,
  `modify` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `first_name`, `last_name`, `gender`, `dob`, `address`, `phone`, `create`, `modify`) VALUES
(1, 'HUY', 'SOKHOM', 'male', '2004-02-25 00:00:00', 'phnom penh', '012 12 12 12', '2014-11-13 00:00:00', '2014-11-13 03:33:25');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
