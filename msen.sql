-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 19, 2015 at 05:06 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `msen`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `admin_email` varchar(100) NOT NULL,
  `admin_password` varchar(100) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_email`, `admin_password`) VALUES
(2, 'mehdi@m.com', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE IF NOT EXISTS `events` (
  `event_id` int(11) NOT NULL AUTO_INCREMENT,
  `event_title` varchar(300) NOT NULL,
  `event_date` varchar(30) NOT NULL,
  `event_details` text NOT NULL,
  `event_description` text NOT NULL,
  `event_picture` varchar(200) NOT NULL,
  `event_ann` varchar(200) NOT NULL,
  `event_reg_link` varchar(400) DEFAULT NULL,
  PRIMARY KEY (`event_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`event_id`, `event_title`, `event_date`, `event_details`, `event_description`, `event_picture`, `event_ann`, `event_reg_link`) VALUES
(25, 'Hello', '2015-07-05', 'jkadh;jkdash', 'jkhdkjh', 'uploads/2015-19-071.JPG', 'uploads/2015-19-071.JPG', NULL),
(26, 'gjklfhsdkjh', '2015-07-30', 'kjbgjkbgjk', ',bfjkl', '', 'uploads/2015-19-079.JPG', NULL),
(27, 'Great', '2015-07-25', 'bdfjklasgkdfg', 'jadh;jklasdh', '', 'uploads/2015-19-072.jpg', 'https://mail.google.com/mail/u/0/#inbox');

-- --------------------------------------------------------

--
-- Table structure for table `event_pictures`
--

CREATE TABLE IF NOT EXISTS `event_pictures` (
  `picture_id` int(11) NOT NULL AUTO_INCREMENT,
  `event_id` int(11) NOT NULL,
  `picture_name` varchar(200) NOT NULL,
  PRIMARY KEY (`picture_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=136 ;

--
-- Dumping data for table `event_pictures`
--

INSERT INTO `event_pictures` (`picture_id`, `event_id`, `picture_name`) VALUES
(131, 25, '2015-19-071.JPG'),
(133, 25, '2015-19-079.JPG'),
(134, 25, '2015-19-078.JPG'),
(135, 25, '2015-19-076.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `message_id` int(11) NOT NULL AUTO_INCREMENT,
  `message_month` varchar(18) DEFAULT NULL,
  `message` text NOT NULL,
  `message_by` varchar(100) NOT NULL,
  PRIMARY KEY (`message_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`message_id`, `message_month`, `message`, `message_by`) VALUES
(11, NULL, 'Zain is Kamina', 'Mehdi Raza Jaffri'),
(12, NULL, 'Zain is My Love', 'Mehdi Raza Jaffri');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `news_id` int(11) NOT NULL AUTO_INCREMENT,
  `news` varchar(500) NOT NULL,
  `date` date NOT NULL,
  `link` varchar(200) NOT NULL,
  `event_id` int(11) NOT NULL,
  PRIMARY KEY (`news_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`news_id`, `news`, `date`, `link`, `event_id`) VALUES
(3, 'jhgjhkgvjhvj', '2015-07-19', 'https://mail.google.com/mail/u/0/#inbox', 26),
(4, 'jsdkagjkldhajklsgdjkasghjkdhasklhdjkgasuidgheuigyadjkbanmxcbm,x', '2015-07-19', 'For more Info..', 27);

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE IF NOT EXISTS `slider` (
  `slider_id` int(11) NOT NULL AUTO_INCREMENT,
  `slider_image` varchar(100) NOT NULL,
  `admin_id` int(11) NOT NULL,
  `slider_date` date DEFAULT NULL,
  PRIMARY KEY (`slider_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=36 ;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`slider_id`, `slider_image`, `admin_id`, `slider_date`) VALUES
(33, '1.JPG', 0, '0000-00-00'),
(34, '6.JPG', 0, '0000-00-00'),
(35, '10.JPG', 0, '0000-00-00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
