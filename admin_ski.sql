-- phpMyAdmin SQL Dump
-- version 4.0.10.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 14, 2017 at 12:05 PM
-- Server version: 5.5.52-MariaDB
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `admin_ski`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` mediumint(9) NOT NULL AUTO_INCREMENT,
  `username` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(70) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=8 ;


-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE IF NOT EXISTS `chat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `msg` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=72 ;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`id`, `name`, `msg`, `date`) VALUES
(48, '', ' :)', '2017-03-11 16:16:36'),
(54, 'Covek', 'Ski, sjajan ti je sajt! ', '2017-03-12 11:42:15'),
(57, '', ' Dobaar!', '2017-03-13 00:10:03'),
(58, 'Kum', ' Odlican sajt kume!', '2017-03-13 12:56:30'),
(62, 'Ivan', 'Bravo ti ga bate ', '2017-03-15 21:52:16'),
(63, '', ' ', '2017-03-15 21:53:57'),
(64, 'proba', ' proba proba', '2017-03-16 10:04:50'),
(65, '', ' ', '2017-03-20 21:14:24'),
(66, '', ' ', '2017-03-20 23:12:09'),
(67, '', ' ', '2017-03-20 23:13:45'),
(68, '', ' ', '2017-03-21 15:33:27'),
(69, 'vuk', ' caree', '2017-03-31 14:14:23'),
(70, '', ' Dobaaaaar!', '2017-04-02 19:57:25'),
(71, '', ' ', '2017-09-08 14:16:25');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE IF NOT EXISTS `items` (
  `item_id` int(4) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `price` int(10) NOT NULL,
  `category` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`item_id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=43 ;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`item_id`, `name`, `price`, `category`) VALUES
(23, 'Whey 2kg', 4000, 'protein'),
(24, 'Whey 3kg', 7000, 'protein'),
(25, 'Whey fuel recovery', 3500, 'protein'),
(26, 'Whey 920g', 2300, 'protein'),
(27, 'Whey isolate', 4000, 'protein'),
(28, 'Whey vanila 60g', 300, 'protein'),
(29, 'Assault', 2300, 'noreactor'),
(30, 'Horse power', 2100, 'noreactor'),
(31, 'Iron pump NO', 4100, 'noreactor'),
(32, 'NO fury', 1000, 'noreactor'),
(34, 'Creatine 100g', 300, 'creatine'),
(35, 'Mega creatine 150 capsules', 2000, 'creatine'),
(36, 'BCAA 150g', 450, 'BCAA'),
(37, 'BCAA 200 caps', 3500, 'BCAA'),
(38, 'BCAA 450g', 2350, 'BCAA'),
(39, 'BCAA Xpress', 4800, 'BCAA'),
(40, 'L-glutamine', 3400, 'BCAA'),
(41, 'Scivation 396g', 2400, 'BCAA');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
  `id` mediumint(9) NOT NULL AUTO_INCREMENT,
  `title` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `keywords` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `views` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=17 ;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `title`, `description`, `keywords`, `name`, `status`, `views`) VALUES
(1, 'MyShop', 'MyShop is a place where you can read about nurition and better life', '', 'HOME', 'user', 'app/views/slider.php'),
(2, 'PRODUCTS', 'Here you can search our products', ', products, whey, bcaa', 'PRODUCTS', 'user', 'app/views/itemi.php'),
(3, 'CONTACT ME ', 'Here you can contact me, and ask about better life and nutrition', ', contact, mail', 'CONTACT', 'user', 'app/views/contact.php'),
(4, 'ABOUT ME', 'I made this site for school project Web programming php! I do not own any of pictures', ', about me,  jovansomborski', 'AUTHOR', 'user', 'app/views/author.php'),
(5, 'Log In', 'Log In', ', Log In', 'Log In', 'user', 'app/views/login.php'),
(12, 'ADD PRODUCT', NULL, NULL, 'ADD PRODUCT', 'admin', 'admin/uploadproducts.php'),
(13, 'UPDATE PRODUCT', NULL, NULL, 'UPDATE PRODUCT', 'admin', 'admin/updateproduct.php'),
(14, 'DELETE PRODUCT', NULL, NULL, 'DELETE PRODUCT', 'admin', 'admin/deleteproducts.php'),
(15, 'LOG OUT', NULL, NULL, 'LOG OUT', 'admin', 'app/views/logout.php'),
(16, 'error', 'error', 'error', 'error', '0', 'app/views/error.php');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
