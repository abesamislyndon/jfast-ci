-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: Aug 06, 2015 at 11:24 AM
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
  `id` varchar(40) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) unsigned NOT NULL DEFAULT '0',
  `data` blob NOT NULL,
  PRIMARY KEY (`id`),
  KEY `ci_sessions_timestamp` (`timestamp`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES
('3b52bcd41c36f15a1524751c8bc0d1dbd8e88b87', '192.168.1.3', 1438851568, 0x5f5f63695f6c6173745f726567656e65726174657c693a313433383835313332353b6c6f676765645f696e7c613a343a7b733a323a226964223b733a323a223238223b733a383a22757365726e616d65223b733a343a2273757234223b733a393a22726f6c655f636f6465223b733a313a2232223b733a393a2266756c6c5f6e616d65223b733a343a2273757234223b7d646174655f66726f6d7c733a383a2231352d30382d3031223b646174655f746f7c733a383a2231352d30382d3331223b),
('3f935445c6fb62a628dd1b3fddf383f4ac3ef4a5', '192.168.1.3', 1438852818, 0x5f5f63695f6c6173745f726567656e65726174657c693a313433383835323831373b6c6f676765645f696e7c613a343a7b733a323a226964223b733a313a2231223b733a383a22757365726e616d65223b733a353a2261646d696e223b733a393a22726f6c655f636f6465223b733a313a2231223b733a393a2266756c6c5f6e616d65223b733a32313a2243687269737469616e204368616e20656469746564223b7d),
('685c7d25239fc023ef8fce7e5dd22fa570283c45', '192.168.1.3', 1438851530, 0x5f5f63695f6c6173745f726567656e65726174657c693a313433383835313238383b6c6f676765645f696e7c613a343a7b733a323a226964223b733a323a223237223b733a383a22757365726e616d65223b733a333a22647269223b733a393a22726f6c655f636f6465223b733a313a2233223b733a393a2266756c6c5f6e616d65223b733a32343a22476973656c6c65204368616e204b7972696520616e67656c223b7d),
('7c287e09a2cc041460b5f9a77fd53887c4968265', '192.168.1.3', 1438853013, 0x5f5f63695f6c6173745f726567656e65726174657c693a313433383835323831383b6c6f676765645f696e7c613a343a7b733a323a226964223b733a313a2231223b733a383a22757365726e616d65223b733a353a2261646d696e223b733a393a22726f6c655f636f6465223b733a313a2231223b733a393a2266756c6c5f6e616d65223b733a32313a2243687269737469616e204368616e20656469746564223b7d);

-- --------------------------------------------------------

--
-- Table structure for table `destination`
--

CREATE TABLE `destination` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `from_destination` varchar(320) NOT NULL,
  `to_destination` varchar(320) NOT NULL,
  `estimated_cost` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `destination`
--

INSERT INTO `destination` (`id`, `from_destination`, `to_destination`, `estimated_cost`) VALUES
(1, 'machperson', 'sengkang', 90),
(2, 'Toa payoh', 'Changi ', 900),
(4, 'Red hill', 'China Town', 990),
(5, 'Kembangan', 'Toa payoh', 100),
(6, 'sample sample', 'sample', 0);

-- --------------------------------------------------------

--
-- Table structure for table `dimension`
--

CREATE TABLE `dimension` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dimension` varchar(340) NOT NULL,
  `cost` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `dimension`
--

INSERT INTO `dimension` (`id`, `dimension`, `cost`) VALUES
(1, '10 ft', 12),
(2, '30 ft', 5),
(3, '89 inches', 1234);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `driver_info`
--

INSERT INTO `driver_info` (`id`, `driver_name`, `company`, `address`, `contact_num`) VALUES
(1, 'Felix Chua', 'exhibit media', '35 changi south 2 Singapore', 12),
(2, 'Larry Ong', 'Messa Asia', 'sengkang drive 03', 111),
(5, 'Danny Green', 'Mover company', '35 Changi South Avenue 2 #03-02 Singapore 486134', 64814393);

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `job_bank_id` int(11) NOT NULL,
  `date_invoice` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`id`, `job_bank_id`, `date_invoice`) VALUES
(1, 1, '2015-08-06'),
(2, 2, '2015-08-06'),
(3, 3, '2015-08-06');

-- --------------------------------------------------------

--
-- Table structure for table `item_type`
--

CREATE TABLE `item_type` (
  `item_type_id` int(11) NOT NULL AUTO_INCREMENT,
  `job_request_id` int(11) NOT NULL,
  `item_type` varchar(150) NOT NULL,
  `qty_check` int(11) NOT NULL,
  `dimension_check` varchar(150) NOT NULL,
  `item_type_cost` float NOT NULL,
  PRIMARY KEY (`item_type_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `item_type`
--

INSERT INTO `item_type` (`item_type_id`, `job_request_id`, `item_type`, `qty_check`, `dimension_check`, `item_type_cost`) VALUES
(1, 1, 'parcel', 0, 'none', 12),
(2, 2, 'box', 4, 'more than than 50 x 50 x 50', 12),
(3, 3, 'box', 3, 'none', 12);

-- --------------------------------------------------------

--
-- Table structure for table `job_allocate_info`
--

CREATE TABLE `job_allocate_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `job_bank_id` int(11) NOT NULL,
  `full_name` varchar(650) NOT NULL,
  `address` varchar(560) NOT NULL,
  `contact_no` varchar(340) NOT NULL,
  `company` varchar(450) NOT NULL,
  `driver_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `job_allocate_info`
--

INSERT INTO `job_allocate_info` (`id`, `job_bank_id`, `full_name`, `address`, `contact_no`, `company`, `driver_id`) VALUES
(1, 1, 'Giselle Chan Kyrie angel', 'NO 14 TUAS AVENUE 5 SINGAPORE 639339', '32323232', '', 27),
(2, 2, 'Giselle Chan Kyrie angel', 'NO 14 TUAS AVENUE 5 SINGAPORE 639339', '32323232', '', 27),
(3, 3, 'Giselle Chan Kyrie angel', 'NO 14 TUAS AVENUE 5 SINGAPORE 639339', '32323232', '', 27);

-- --------------------------------------------------------

--
-- Table structure for table `job_delivery`
--

CREATE TABLE `job_delivery` (
  `job_request_id` int(11) NOT NULL AUTO_INCREMENT,
  `full_name` varchar(230) NOT NULL,
  `company_client` varchar(450) NOT NULL,
  `address_pickup` varchar(620) NOT NULL,
  `tel_no` int(11) NOT NULL,
  `email` varchar(230) NOT NULL,
  `full_name_deliver` varchar(450) NOT NULL,
  `company_client_deliver` varchar(650) NOT NULL,
  `address_deliver` varchar(700) NOT NULL,
  `tel_no_deliver` int(11) NOT NULL,
  `email_deliver` varchar(450) NOT NULL,
  `date_request` date NOT NULL,
  `time` varchar(100) NOT NULL,
  `job_details` varchar(600) NOT NULL,
  `sender` varchar(620) NOT NULL,
  `sender_id` int(11) NOT NULL,
  `price` float NOT NULL,
  `status` int(11) NOT NULL,
  `destination` varchar(340) NOT NULL,
  `destination_id` int(11) NOT NULL,
  `destination_cost` float NOT NULL,
  `weight` varchar(320) NOT NULL,
  `weight_id` int(11) NOT NULL,
  `weight_cost` float NOT NULL,
  `dimension` varchar(320) NOT NULL,
  `dimension_id` int(11) NOT NULL,
  `dimension_cost` float NOT NULL,
  `labor` int(11) NOT NULL,
  `labor_id` int(11) NOT NULL,
  `labor_cost` float NOT NULL,
  `remarks` varchar(450) NOT NULL,
  `date_complete` date NOT NULL,
  `vehicle` varchar(120) NOT NULL,
  `vehicle_cost` float NOT NULL,
  `no_trips` int(11) NOT NULL,
  `trip_cost` float NOT NULL,
  PRIMARY KEY (`job_request_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `job_delivery`
--

INSERT INTO `job_delivery` (`job_request_id`, `full_name`, `company_client`, `address_pickup`, `tel_no`, `email`, `full_name_deliver`, `company_client_deliver`, `address_deliver`, `tel_no_deliver`, `email_deliver`, `date_request`, `time`, `job_details`, `sender`, `sender_id`, `price`, `status`, `destination`, `destination_id`, `destination_cost`, `weight`, `weight_id`, `weight_cost`, `dimension`, `dimension_id`, `dimension_cost`, `labor`, `labor_id`, `labor_cost`, `remarks`, `date_complete`, `vehicle`, `vehicle_cost`, `no_trips`, `trip_cost`) VALUES
(1, 'kljaskldj', 'kljkl', 'asdasd', 90890, 'klkj@gmail.com', 'asdasd', 'sdfsdf', 'sdfsdf', 8797, 'asd@gmail.com', '2015-08-06', '04:00 PM', '<p>remarks</p>', 'sur4', 28, 0, 5, 'Kembangan-Toa payoh', 5, 0, 'less than 20 kg', 2, 0, '', 0, 0, 1, 2, 0, 'approved', '2015-08-06', '20 ft Lorry', 0, 6, 0),
(2, 'kjlj', 'jkhkhj', 'sdfsdf', 8098, 'nbh@gmail.com', 'asdasd', 'asdasd', 'sdfsdf', 24234, 'asd@gmail.com', '2015-08-06', '04:30 PM', '<p>asdasd</p>', 'sur4', 28, 0, 5, 'Red hill-China Town', 4, 0, 'less than 20 kg', 2, 0, '', 0, 0, 1, 2, 0, 'approved', '2015-08-06', 'Mini Bus', 0, 3, 0),
(3, 'sdfsdf', 'assada', 'asdasd', 234234, 'asd@gmail.com', 'asdasd', 'asdasd', 'asdasd', 32424, 'asd@gmail.com', '2015-08-06', '04:45 PM', '<p>asdasd</p>', 'sur4', 28, 0, 5, 'Toa payoh-Changi ', 2, 0, 'less than 20 kg', 2, 0, '', 0, 0, 1, 2, 0, 'approved', '2015-08-06', '14 ft Lorry', 0, 3, 0);

-- --------------------------------------------------------

--
-- Table structure for table `labor`
--

CREATE TABLE `labor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `labor` int(11) NOT NULL,
  `cost` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `labor`
--

INSERT INTO `labor` (`id`, `labor`, `cost`) VALUES
(1, 2, 50),
(2, 1, 20);

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
  `company` varchar(340) NOT NULL,
  `address` varchar(500) NOT NULL,
  `contact_no` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role_code`, `username`, `password`, `full_name`, `last_activity`, `company`, `address`, `contact_no`) VALUES
(1, 1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Christian Chan edited', '0000-00-00', 'ExMedia', '35 changi south 2', 1234),
(29, 2, 'sur5', 'fe6da60547ab154bf9072fe3bcb2e41f', 'sur5', '0000-00-00', 'sur4', '35 changi south 2', 32323232),
(23, 3, 'user99', '485ddf8dd90940f69b2f2274af864ad3', 'Giselle Chan', '0000-00-00', 'Sunny Metal', '35 changi south 2', 32323232),
(26, 3, 'user45', '0c1f0b248f8e88889e0ea7cd59f8ae5c', 'user45 new', '0000-00-00', 'user45', 'ds', 232323),
(28, 2, 'sur4', '845adab13745107f48b5463cd00beb48', 'sur4', '0000-00-00', 'sur4', 'sur4', 0),
(25, 2, 'sur', '544b21db146d408791d36d36e9dfc92a', 'Regular Customer 23', '0000-00-00', 'Messa Asia1', 'NO. 23 KRANJI WAY ,SINGAPORE 739450', 232323),
(27, 3, 'dri', '7a2ccce9642fe8539673002dd6660ba2', 'Giselle Chan Kyrie angel', '0000-00-00', 'exhibit media', 'NO 14 TUAS AVENUE 5 SINGAPORE 639339', 32323232);

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
