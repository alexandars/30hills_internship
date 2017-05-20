-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2017 at 09:51 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `social_network`
--

-- --------------------------------------------------------

--
-- Table structure for table `people`
--

CREATE TABLE IF NOT EXISTS `people` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `surname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `age` int(150) NOT NULL,
  `gender` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `friends` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=41 ;

--
-- Dumping data for table `people`
--

INSERT INTO `people` (`id`, `firstname`, `surname`, `age`, `gender`, `friends`) VALUES
(1, 'Paul', 'Crowe', 28, 'male', '2'),
(2, 'Rob', 'Fitz', 23, 'male', '1,3'),
(3, 'Ben', 'O''Carolan', 0, 'male', '2,4,5,7'),
(4, 'Victor', '', 28, 'male', '3'),
(5, 'Peter', 'Mac', 29, 'male', '3,6,11,10,7'),
(6, 'John', 'Barry', 18, 'male', '5'),
(7, 'Sarah', 'Lane', 30, 'female', '3,5,20,12,8'),
(8, 'Susan', 'Downe', 28, 'female', '7'),
(9, 'Jack', 'Stam', 28, 'male', '12'),
(10, 'Amy', 'Lane', 24, 'female', '5,11'),
(11, 'Sandra', 'Phelan', 28, 'female', '5,10,19,20'),
(12, 'Laura', 'Murphy', 33, 'female', '7,9,13,20'),
(13, 'Lisa', 'Daly', 28, 'female', '12,14,20'),
(14, 'Mark', 'Johnson', 28, 'male', '13,15'),
(15, 'Seamus', 'Crowe', 24, 'male', '14'),
(16, 'Daren', 'Slater', 28, 'male', '18,20'),
(17, 'Dara', 'Zoltan', 48, 'male', '18,20'),
(18, 'Marie', 'D', 28, 'female', '17'),
(19, 'Catriona', 'Long', 28, 'female', '11,20'),
(20, 'Katy', 'Couch', 28, 'female', '7,11,12,13,16,17,19');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
