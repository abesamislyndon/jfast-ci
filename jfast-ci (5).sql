-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: May 27, 2015 at 11:39 AM
-- Server version: 5.5.34
-- PHP Version: 5.5.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `jfast-ci`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `from` varchar(390) NOT NULL,
  `to` varchar(390) NOT NULL,
  `estimate_cost` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`id`, `from`, `to`, `estimate_cost`) VALUES
(1, 'toa payoh', 'machperson', 30);

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE `ci_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) DEFAULT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text,
  PRIMARY KEY (`session_id`),
  KEY `last_activity_idx` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('00ebcea84a63eb4e261e780bdc71e084', '192.168.1.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2272.118 Safari/537.3', 1429087646, ''),
('12f4d8e950f4a2f8fbc9c90e89e78e0a', '192.168.1.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/42.0.2311.90 Safari/537.36', 1429587035, 'a:1:{s:9:"user_data";s:0:"";}'),
('163c36612fe2255ffb9d496c0705b357', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/42.0.2311.90 Safari/537.36', 1429663718, ''),
('1e6bd810859ca860f7566bb532b52467', '192.168.1.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2272.118 Safari/537.3', 1429177619, 'a:2:{s:9:"user_data";s:0:"";s:9:"logged_in";a:3:{s:2:"id";s:1:"1";s:8:"username";s:5:"admin";s:9:"role_code";s:1:"1";}}'),
('2cc242c21f7a51bbd9e06fd0d90ea9b1', '192.168.1.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/42.0.2311.90 Safari/537.36', 1429664289, 'a:2:{s:9:"user_data";s:0:"";s:9:"logged_in";a:3:{s:2:"id";s:1:"1";s:8:"username";s:5:"admin";s:9:"role_code";s:1:"1";}}'),
('468bdf05c5dacd51482de963be72fcfa', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/42.0.2311.90 Safari/537.36', 1429587029, ''),
('4caaec353dba212a262d44f325adf368', '192.168.1.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2272.118 Safari/537.3', 1429263921, 'a:2:{s:9:"user_data";s:0:"";s:9:"logged_in";a:3:{s:2:"id";s:1:"1";s:8:"username";s:5:"admin";s:9:"role_code";s:1:"1";}}'),
('6c9a41f74d317d829adadffa42785281', '192.168.1.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2272.118 Safari/537.3', 1429257767, ''),
('75a1ed1e7a38630abdda196c011ace57', '192.168.1.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2272.118 Safari/537.3', 1429090135, 'a:2:{s:9:"user_data";s:0:"";s:9:"logged_in";a:3:{s:2:"id";s:1:"1";s:8:"username";s:5:"admin";s:9:"role_code";s:1:"1";}}'),
('7ade83700b04e161fb8ec84a40d7b25d', '192.168.1.6', 'Mozilla/5.0 (iPad; CPU OS 8_3 like Mac OS X) AppleWebKit/600.1.4 (KHTML, like Gecko) CriOS/40.0.2214.73 Mobile/12F69 Saf', 1429239278, ''),
('88e657bf54f3ef9a559aa96215cc9cc3', '192.168.1.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/42.0.2311.90 Safari/537.36', 1429761366, 'a:2:{s:9:"user_data";s:0:"";s:9:"logged_in";a:3:{s:2:"id";s:1:"1";s:8:"username";s:5:"admin";s:9:"role_code";s:1:"1";}}'),
('a3b0ee8dfb4bf0d814ccd4cee49c2e78', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2272.118 Safari/537.3', 1429144970, ''),
('aeb72c059454908070e751cebce61f82', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2272.118 Safari/537.3', 1429177615, ''),
('b5126e9efe8539816eb8709976a66a06', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/42.0.2311.90 Safari/537.36', 1429759922, ''),
('b7cdbf7f20ecff3779e01d6e6e6476a8', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2272.118 Safari/537.3', 1429250991, ''),
('ba58543d8fdca8de817e283b094abfa1', '192.168.1.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2272.118 Safari/537.3', 1429251488, 'a:1:{s:9:"user_data";s:0:"";}'),
('c44c9948fadfdf7c9a9e327ec0e00b85', '192.168.1.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2272.118 Safari/537.3', 1429147203, ''),
('c770a817d2862d15422d52233bea377a', '192.168.1.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2272.118 Safari/537.3', 1429145019, 'a:2:{s:9:"user_data";s:0:"";s:9:"logged_in";a:3:{s:2:"id";s:1:"1";s:8:"username";s:5:"admin";s:9:"role_code";s:1:"1";}}'),
('d5453dd55e578cb25914e619361cff59', '192.168.1.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2272.118 Safari/537.3', 1429086731, 'a:2:{s:9:"user_data";s:0:"";s:9:"logged_in";a:3:{s:2:"id";s:1:"1";s:8:"username";s:5:"admin";s:9:"role_code";s:1:"1";}}'),
('e57a24de61c18704d11985c4b4fa37d7', '192.168.1.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2272.118 Safari/537.3', 1429145019, 'a:2:{s:9:"user_data";s:0:"";s:9:"logged_in";a:3:{s:2:"id";s:1:"1";s:8:"username";s:5:"admin";s:9:"role_code";s:1:"1";}}'),
('ea8823a75e754b4c0eb7492586a4bbc4', '192.168.1.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2272.118 Safari/537.3', 1429255085, 'a:2:{s:9:"user_data";s:0:"";s:9:"logged_in";a:3:{s:2:"id";s:1:"1";s:8:"username";s:5:"admin";s:9:"role_code";s:1:"1";}}');

-- --------------------------------------------------------

--
-- Table structure for table `destination`
--

CREATE TABLE `destination` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `from` varchar(320) NOT NULL,
  `to` varchar(320) NOT NULL,
  `estimated_cost` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `destination`
--

INSERT INTO `destination` (`id`, `from`, `to`, `estimated_cost`) VALUES
(1, 'China town ', 'sengkang', 90),
(2, 'Toa payoh', 'Changi ', 900),
(4, 'Red hill', 'China Town', 990),
(5, 'Kembangan', 'Toa payoh', 9989),
(6, 'Tampines', 'Sembawang', 456);

-- --------------------------------------------------------

--
-- Table structure for table `dimension`
--

CREATE TABLE `dimension` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dimension` varchar(340) NOT NULL,
  `cost` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `dimension`
--

INSERT INTO `dimension` (`id`, `dimension`, `cost`) VALUES
(1, '10 ft', 12),
(2, '30 ft', 5);

-- --------------------------------------------------------

--
-- Table structure for table `driver_info`
--

CREATE TABLE `driver_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `driver_name` varchar(430) NOT NULL,
  `company` varchar(450) NOT NULL,
  `address` varchar(730) NOT NULL,
  `contact_num` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `driver_info`
--

INSERT INTO `driver_info` (`id`, `driver_name`, `company`, `address`, `contact_num`) VALUES
(1, 'Lyndon Abesamis', 'exhibit media', 'singapore', 12323123),
(2, 'giselle', 'Messa Asia', 'philippines', 111),
(3, 'thazien', 'Sunny Metal', 'myanmar', 84204405);

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `job_bank_id` int(11) NOT NULL,
  `date_invoice` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`id`, `job_bank_id`, `date_invoice`) VALUES
(1, 3, '0000-00-00'),
(2, 1, '0000-00-00'),
(3, 2, '0000-00-00'),
(4, 8, '0000-00-00'),
(5, 6, '0000-00-00'),
(6, 9, '2015-05-23'),
(7, 7, '2015-05-26'),
(8, 11, '2015-05-23'),
(9, 4, '2015-05-27');

-- --------------------------------------------------------

--
-- Table structure for table `job_allocate_info`
--

CREATE TABLE `job_allocate_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `job_bank_id` int(11) NOT NULL,
  `name` varchar(650) NOT NULL,
  `address` varchar(560) NOT NULL,
  `contact_num` varchar(340) NOT NULL,
  `company` varchar(450) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `job_allocate_info`
--

INSERT INTO `job_allocate_info` (`id`, `job_bank_id`, `name`, `address`, `contact_num`, `company`) VALUES
(1, 1, 'Lyndon Abesamis', 'singapore', '12323123', ''),
(2, 2, 'Lyndon Abesamis', 'singapore', '12323123', ''),
(3, 3, 'Lyndon Abesamis', 'singapore', '12323123', ''),
(4, 8, 'Lyndon Abesamis', 'singapore', '12323123', ''),
(5, 4, 'Lyndon Abesamis', 'singapore', '12323123', ''),
(6, 6, 'Lyndon Abesamis', 'singapore', '12323123', ''),
(7, 7, 'Lyndon Abesamis', 'singapore', '12323123', ''),
(8, 9, 'giselle', 'philippines', '111', ''),
(9, 11, 'Lyndon Abesamis', 'singapore', '12323123', ''),
(10, 10, 'thazien', 'myanmar', '84204405', ''),
(11, 12, 'Lyndon Abesamis', 'singapore', '12323123', '');

-- --------------------------------------------------------

--
-- Table structure for table `job_delivery`
--

CREATE TABLE `job_delivery` (
  `job_request_id` int(11) NOT NULL AUTO_INCREMENT,
  `full_name` varchar(230) NOT NULL,
  `tel_no` int(11) NOT NULL,
  `email` varchar(230) NOT NULL,
  `date_request` date NOT NULL,
  `time` varchar(100) NOT NULL,
  `job_details` varchar(600) NOT NULL,
  `sender` varchar(620) NOT NULL,
  `sender_id` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `destination` varchar(340) NOT NULL,
  `destination_id` int(11) NOT NULL,
  `destination_cost` int(11) NOT NULL,
  `weight` varchar(320) NOT NULL,
  `weight_id` int(11) NOT NULL,
  `weight_cost` int(11) NOT NULL,
  `dimension` varchar(320) NOT NULL,
  `dimension_id` int(11) NOT NULL,
  `dimension_cost` int(11) NOT NULL,
  `labor` int(11) NOT NULL,
  `labor_id` int(11) NOT NULL,
  `labor_cost` int(11) NOT NULL,
  `address` varchar(620) NOT NULL,
  `company_client` varchar(450) NOT NULL,
  PRIMARY KEY (`job_request_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `job_delivery`
--

INSERT INTO `job_delivery` (`job_request_id`, `full_name`, `tel_no`, `email`, `date_request`, `time`, `job_details`, `sender`, `sender_id`, `price`, `status`, `destination`, `destination_id`, `destination_cost`, `weight`, `weight_id`, `weight_cost`, `dimension`, `dimension_id`, `dimension_cost`, `labor`, `labor_id`, `labor_cost`, `address`, `company_client`) VALUES
(1, 'sample user', 123, 'kscheong@daiya.com.sg', '2015-05-21', '05:15 PM', 'sdfs', 'Christian Chan', 1, 0, 5, 'Machperson-Tampines', 2, 1600, 'less than 20 kg', 2, 20, '10 ft', 1, 12, 2, 1, 50, 'NO. 23 KRANJI WAY ,SINGAPORE 739450', 'Exhibit Media Pte Ltd sample'),
(2, 'Giselle Chan Kyrie angel', 123, 'kscheong@daiya.com.sg', '2015-05-21', '05:30 PM', 'sample', 'Christian Chan', 1, 0, 5, 'Potong Pasir-Toa Payoh', 3, 888, 'more than 20 kg', 1, 12, '30 ft', 2, 5, 1, 2, 20, 'NO. 23 KRANJI WAY ,SINGAPORE 739450', 'Exhibit Media Pte Ltd'),
(3, 'Giselle Chan Kyrie angel', 6756, 'taametal@singnet.com.sg', '2015-05-21', '02:15 AM', 'sample', 'Christian Chan', 1, 0, 5, 'Machperson-Tampines', 2, 1600, 'less than 20 kg', 2, 20, '30 ft', 2, 5, 1, 2, 20, 'BLK 20 ANG MO KIO IND. PK. 2A, #04-16, AMK TECHLINK , SINGAPORE 567761', 'Exhibit Media Pte Ltd sample'),
(4, 'Giselle Chan Kyrie angel', 6756, 'alanng@tangsengservices.com', '1970-01-01', '10:15 AM', 'sample description ', 'Christian Chan', 1, 0, 5, 'Toa Payoh-Sengkang', 1, 2012, 'more than 20 kg', 1, 12, '10 ft', 1, 12, 2, 1, 50, '', 'Exhibit Media Pte Ltd 1'),
(5, 'Giselle Chan Kyrie angel', 123, 'alanng@tangsengservices.com', '2015-05-22', '10:15 AM', 'sample sample sample', 'Christian Chan', 1, 0, 2, 'Potong Pasir-Toa Payoh', 3, 888, 'more than 20 kg', 1, 12, '30 ft', 2, 5, 3, 3, 20, 'NO 14 TUAS AVENUE 5 SINGAPORE 639339', 'Exhibit Media Pte Ltd sample'),
(6, 'sample user', 6756, 'kscheong@daiya.com.sg', '1970-01-01', '10:15 AM', 'sample description ', 'sample surveyor', 9, 0, 5, 'Machperson-Tampines', 2, 1600, 'more than 20 kg', 1, 12, '10 ft', 1, 12, 2, 1, 50, '', 'Exhibit Media Pte Ltd sample'),
(7, 'Giselle Chan Kyrie angel', 6756, 'kscheong@daiya.com.sg', '2015-05-22', '10:30 AM', 'sample description ', 'Christian Chan', 1, 0, 5, 'Toa Payoh-Sengkang', 1, 2012, 'less than 20 kg', 2, 20, '30 ft', 2, 5, 2, 1, 50, 'NO. 23 KRANJI WAY ,SINGAPORE 739450', 'Exhibit Media Pte Ltd 1'),
(8, 'Lyndon Abesamis', 8420, 'as@gmail.com', '2015-05-22', '09:45 PM', 'sample description', 'Christian Chan', 1, 0, 5, 'Toa Payoh-Sengkang', 1, 2012, 'less than 20 kg', 2, 20, '10 ft', 1, 12, 1, 2, 20, '35 changi south 2', 'exhibit media Pte Ltd'),
(9, 'Lyndon Abesamis', 8420, 'coolshox@gmail.com', '2015-05-22', '11:45 AM', 'sample description', 'sample surveyor', 9, 0, 5, 'Toa Payoh-Sengkang', 1, 2012, 'less than 20 kg', 2, 20, '30 ft', 2, 5, 1, 2, 20, 'NO 14 TUAS AVENUE 5 SINGAPORE 639339', 'exhibit media Pte Ltd'),
(10, 'Lyndon Abesamis', 8420, 'coolshox@gmail.com', '2015-05-23', '12:15 PM', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\r\n\r\nLorem Ipsum is simply ', 'Christian Chan', 1, 0, 4, 'Toa Payoh-Sengkang', 1, 2012, 'more than 20 kg', 1, 12, '10 ft', 1, 12, 2, 1, 50, 'NO 14 TUAS AVENUE 5 SINGAPORE 639339', 'exhibit media Pte Ltd'),
(11, 'Giselle Chan Kyrie angel', 123, 'alanng@tangsengservices.com', '2015-05-25', '11:00 AM', 'sample description ', 'sample surveyor', 9, 0, 5, 'Tampines-Sengkang', 4, 5000, 'less than 20 kg', 2, 20, '30 ft', 2, 5, 1, 2, 20, 'NO. 23 KRANJI WAY ,SINGAPORE 739450', 'Exhibit Media Pte Ltd sample'),
(12, 'Giselle Chan Kyrie angel', 6756, 'kscheong@daiya.com.sg', '2015-05-27', '11:45 AM', 'sample description', 'Christian Chan', 1, 0, 3, 'Potong Pasir-Toa Payoh', 3, 888, 'less than 20 kg', 2, 20, '30 ft', 2, 5, 1, 2, 20, 'NO 20 SUNGEI KADUT STREET 4 SINGAPORE 729047', 'Exhibit Media Pte Ltd sample'),
(13, 'Giselle Chan Kyrie angel', 6756, 'kscheong@daiya.com.sg', '2015-05-27', '11:45 AM', 'sasd', 'Christian Chan', 1, 0, 1, 'Machperson-Tampines', 2, 1600, 'less than 20 kg', 2, 20, '30 ft', 2, 5, 1, 2, 20, 'NO. 23 KRANJI WAY ,SINGAPORE 739450', 'Exhibit Media Pte Ltd 1');

-- --------------------------------------------------------

--
-- Table structure for table `labor`
--

CREATE TABLE `labor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `labor` int(11) NOT NULL,
  `cost` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `labor`
--

INSERT INTO `labor` (`id`, `labor`, `cost`) VALUES
(1, 2, 50),
(2, 1, 20),
(3, 3, 20);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `role_code` int(11) NOT NULL,
  `username` varchar(90) NOT NULL,
  `password` varchar(100) NOT NULL,
  `full_name` varchar(90) NOT NULL,
  `last_activity` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role_code`, `username`, `password`, `full_name`, `last_activity`) VALUES
(1, 1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Christian Chan', '0000-00-00'),
(9, 2, 'sur', 'a587b16e0a2c4a9c61feee6486c3a6c5', 'sample surveyor', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `weight`
--

CREATE TABLE `weight` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `weight` varchar(329) NOT NULL,
  `cost` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `weight`
--

INSERT INTO `weight` (`id`, `weight`, `cost`) VALUES
(1, 'more than 20 kg', 12),
(2, 'less than 20 kg', 20);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;