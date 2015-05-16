-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: May 16, 2015 at 06:26 AM
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `destination`
--

INSERT INTO `destination` (`id`, `from`, `to`, `estimated_cost`) VALUES
(1, 'Toa Payoh', 'Sengkang', 2012),
(2, 'Machperson', 'Tampines', 1600),
(3, 'Potong Pasir', 'Toa Payoh', 888),
(4, 'Tampines', 'Sengkang', 5000);

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
  `id` int(11) DEFAULT NULL,
  `name` varchar(450) NOT NULL,
  `address` varchar(450) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `driver_info`
--

INSERT INTO `driver_info` (`id`, `name`, `address`) VALUES
(NULL, 'lyndon abesmais', 'singapore');

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
  PRIMARY KEY (`job_request_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=49 ;

--
-- Dumping data for table `job_delivery`
--

INSERT INTO `job_delivery` (`job_request_id`, `full_name`, `tel_no`, `email`, `date_request`, `time`, `job_details`, `sender`, `sender_id`, `price`, `status`, `destination`, `destination_id`, `destination_cost`, `weight`, `weight_id`, `weight_cost`, `dimension`, `dimension_id`, `dimension_cost`, `labor`, `labor_id`, `labor_cost`, `address`) VALUES
(46, 'Giselle Chan Kyrie angel', 6756, 'alanng@tangsengservices.com', '0000-00-00', '03:00 PM', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure rem neque quidem vel repellat non, in ducimus nemo cumque quae ut aliquid quas reiciendis nostrum quam esse! Architecto impedit, doloremque!\r\n\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Iure rem neque quidem vel repellat non, in ducimus nemo cumque quae ut aliquid quas reiciendis nostrum quam esse! Architecto impedit, doloremque!\r\n', 'Christian Chan', 1, 0, 1, 'Potong Pasir-Toa Payoh', 3, 888, 'less than 20 kg', 2, 20, '10 ft', 1, 12, 1, 2, 20, 'BLK 20 ANG MO KIO IND. PK. 2A, #04-16, AMK TECHLINK , SINGAPORE 567761'),
(47, 'Giselle Chan Kyrie angel', 6756, 'alanng@tangsengservices.com', '0000-00-00', '03:00 PM', 'samplw', 'Christian Chan', 1, 0, 2, 'Machperson-Tampines', 2, 1600, 'more than 20 ', 1, 12, '10 ft', 1, 12, 2, 1, 50, 'NO. 23 KRANJI WAY ,SINGAPORE 739450'),
(48, 'Lyndon Abesamis', 84301, 'alanng@tangsengservices.com', '0000-00-00', '09:15 AM', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores illo dolor veniam fugiat numquam, nobis maiores sequi cum vel officiis! Impedit cum aliquam at, magni explicabo enim vel dolor illo.', 'Christian Chan', 1, 0, 1, 'Machperson-Tampines', 2, 1600, 'less than 20 kg', 2, 20, '30 ft', 2, 5, 1, 2, 20, 'NO. 23 KRANJI WAY ,SINGAPORE 739450');

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
