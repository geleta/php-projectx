-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 04, 2018 at 03:17 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `databaseb`
--

-- --------------------------------------------------------

--
-- Table structure for table `chatting`
--

CREATE TABLE IF NOT EXISTS `chatting` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(60) NOT NULL,
  `message` varchar(100) NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ip_address` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `chatting`
--

INSERT INTO `chatting` (`id`, `user`, `message`, `date_time`, `ip_address`) VALUES
(6, 'Janan Ali', 'Hallo is any budy there?', '2014-08-12 19:01:29', '127.0.0.1'),
(7, 'Abdirasaaq', 'Tell  Me The Black Pepsi', '2014-08-12 19:04:15', '127.0.0.1'),
(8, 'Admin', 'Halo Iam Here', '2014-08-12 19:05:04', '127.0.0.1'),
(9, 'Abdirasaaq', 'How The price of b pepsui', '2014-08-12 19:05:29', '127.0.0.1'),
(10, 'Admin', '!0 dollar at lest', '2014-08-12 19:05:50', '127.0.0.1'),
(11, 'Nimco Qadaafi', 'OO Walaal Tuxaaafa Waa Qaalia WWa sidee', '2014-08-14 21:36:58', '127.0.0.1'),
(12, 'Admin', 'It&#39;s Too Fair According Ware House Mannager', '2014-08-14 21:37:34', '127.0.0.1'),
(13, 'Janan', 'Any Budy There????????????????????', '2014-08-14 22:44:33', '127.0.0.1'),
(14, 'mahamed', 'gudoomiye waran bal', '2014-08-17 10:15:15', '::1'),
(15, 'admin', 'wa khayr sxb sare', '2014-08-17 10:15:39', '::1');
