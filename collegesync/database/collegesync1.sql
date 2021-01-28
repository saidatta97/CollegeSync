-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 28, 2018 at 10:45 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `collegesync1`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(111) NOT NULL,
  `pwd` varchar(111) NOT NULL,
  `A_fullname` varchar(30) NOT NULL,
  `A_address` varchar(50) NOT NULL,
  `A_email` varchar(20) NOT NULL,
  `A_phone` int(11) NOT NULL,
  `A_dp` varchar(59) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `username`, `pwd`, `A_fullname`, `A_address`, `A_email`, `A_phone`, `A_dp`) VALUES
(2, 'savio', '123', '', '', '', 0, ''),
(4, 'college', '123456', 'asdf', 'sdf', 'sdfg', 2345, 'admindp/28-11-2017-011128_photo.jpg'),
(11, 'admin', '123', 'saidatta', ' assonora ', 'saigmail.com', 123456789, 'admindp/10-03-2018-120303_photo.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `col_registration`
--

CREATE TABLE IF NOT EXISTS `col_registration` (
  `REG_ID` int(11) NOT NULL AUTO_INCREMENT,
  `REG_FIRSTNAME` varchar(20) NOT NULL,
  `REG_LASTNAME` varchar(20) NOT NULL,
  `REG_EMAIL` varchar(63) NOT NULL,
  `REG_CLASS` varchar(11) NOT NULL,
  `REG_UNIVERSITY` varchar(20) NOT NULL,
  `REG_ADDRESS` varchar(50) NOT NULL,
  `REG_MOBILENO` bigint(10) NOT NULL,
  `REG_GENDER` varchar(10) NOT NULL,
  `REG_USERNAME` varchar(20) NOT NULL,
  `REG_PWD` varchar(35) NOT NULL,
  `REG_DOB` varchar(10) NOT NULL,
  `dp` varchar(100) NOT NULL,
  `status` varchar(111) DEFAULT NULL,
  PRIMARY KEY (`REG_ID`),
  UNIQUE KEY `REG_USERNAME` (`REG_USERNAME`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=46 ;

--
-- Dumping data for table `col_registration`
--

INSERT INTO `col_registration` (`REG_ID`, `REG_FIRSTNAME`, `REG_LASTNAME`, `REG_EMAIL`, `REG_CLASS`, `REG_UNIVERSITY`, `REG_ADDRESS`, `REG_MOBILENO`, `REG_GENDER`, `REG_USERNAME`, `REG_PWD`, `REG_DOB`, `dp`, `status`) VALUES
(1, 'saidatta', 'sawant', 'saidattasawant@gmail.com', 'TY', '12345', '  ASSONORA  GOA ', 8552954424, '12345', 'saidat', 'qwerty', '2017-09-01', 'userdp/28-11-2017-011128_photo.jpg', '1'),
(2, 'pandu', 'naik', 'asasa', 'TY', '1234', 'asa ', 12345, 'male', 'pandu', 'rang', '2017-09-21', '', '1'),
(3, 'akshay', 'chatim', 'akshay@gmail', 'TY', '124', 'aldona ', 1234567, 'male', 'ak', 'ak123', '2017-10-01', '', '1'),
(5, 'brejesh', 'lotlikar', 'brejeshlotlikar@gmail.com', 'TY', '12345', 'mapusa  ', 12345, 'male', '1234', '12345', '2017-09-13', '', '1'),
(9, 'prajot', 'malvankar', 'prajot', 'TY', '12345', 'mapusa ', 123456789, 'male', 'prajot', 'malvankar', '2017-09-27', '', '1'),
(19, 'saidat', 'sawant', 'saidattasawant.ss@gmail.com', 'TY', '23456789', ' Assonora              ', 234567890, 'male', 'sai', 'qwerty', '1997-11-26', 'userdp/28-03-2018-040316_photo.jpg', '1'),
(21, 'arjun', 'naik', 'asdf', 'TY', '12345', ' asdfghjkl;  ', 12345678, 'male', 'arjun', 'naik', '2018-12-31', 'userdp/09-03-2018-040343_photo.jpg', '1'),
(24, 'sai', 'yermal', 'sai.guru.619@gmail.com', 'TY', '23947296592374823', ' khorlim mapusa goa', 8691863466, 'male', 'saiyermal', 'saiyermal', '1997-06-16', 'userdp/20-03-2018-020352_photo.jpg', '1'),
(35, 'qwer', 'qwert', 'saisasdss@xgmail.com', 'FY', '1234567', 'wertg ', 1234567890, 'male', 'zxc', 'asdf', '2018-12-31', 'userdp/20-03-2018-090304_photo.', '0'),
(36, 'qwe', 'qwe', 'saisa@xgmail.com', 'FY', '12345678', 'sdfgh ', 1234567890, 'male', 'aaa', 'aaaaa', '2018-12-31', 'userdp/20-03-2018-100357_photo.', '0'),
(37, 'adarsh', 'Naik', 'adarshnaik@gmail.com', 'FY', '123456789', 'asdfghjkl; ', 1234567890, 'male', 'ada', '1234', '2018-12-31', 'userdp/21-03-2018-100332_photo.', '1'),
(38, 'qwe', 'qwe', 'sai12@gmail.com', 'FY', '23456', ' qwer', 1234567890, 'male', 'qwe123', 'qwerty', '2018-12-31', 'userdp/21-03-2018-010344_photo.', '0'),
(39, 'qwer', 'qwert', 'sai12345@gmail.com', 'FY', '123456789', 'asdfghj ', 1234567890, 'male', 'saiop', 'qwertyui', '2018-12-31', 'userdp/21-03-2018-010327_photo.', '0'),
(40, 'qwe', 'wer', 'sai@gmail.com', 'TY', '1234567', 'ertyui ', 123456789, '', '', '', '', 'userdp/27-03-2018-020309_photo.', '0'),
(41, 'wer', 'qwe', 'qwertyui', 'SY', '1234567', 'asdfghj ', 123456789, 'male', 'a', 'cQ==', '2018-12-31', 'userdp/27-03-2018-020336_photo.', '1'),
(42, 'sasAS', 'qwert', 'asdfghj', 'SY', '12345', ' sdfghj  ', 1234567, 'male', 'z', 'eg==', '2018-12-31', 'userdp/27-03-2018-020314_photo.jpg', '0'),
(43, 'sasAS', 'qwert', 'saier', 'SY', '12345', 'sdfghj ', 1234567, 'male', 'sai12345', 'c2FpMTIzNDU=', '2018-12-31', '../../userdp/27-03-2018-020338_photo.', '1'),
(44, 'savio', 'barreto', 'savio1@gmail.com', 'TY', '1234567890', ' mapusa  ', 12345678, 'male', 'sunny1', 'c3Vubnkx', '2018-12-31', 'userdp/27-03-2018-020317_photo.', '1'),
(45, 'qw', 'qwe', 'sai@12gmail.com', 'FY', '1234567', ' asdfghj', 1234567890, 'male', 's', 'YXNkZg==', '2018-12-31', 'userdp/27-03-2018-030334_photo.', '0');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE IF NOT EXISTS `comment` (
  `commid` int(11) NOT NULL AUTO_INCREMENT,
  `id` int(11) NOT NULL,
  `sender` varchar(20) DEFAULT NULL,
  `message` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`commid`),
  KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`commid`, `id`, `sender`, `message`) VALUES
(1, 15, 'saidat', 'hey'),
(2, 15, 'saidat', 'hey'),
(3, 15, 'saidat', 'hiii'),
(4, 15, 'saidatta', 'hey'),
(5, 15, 'saidatta', 'hey'),
(6, 15, 'saidatta', 'hiiiiii bye ');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE IF NOT EXISTS `event` (
  `event_id` int(11) NOT NULL AUTO_INCREMENT,
  `event` varchar(50) NOT NULL,
  `des` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL,
  `time` varchar(50) NOT NULL,
  `add` varchar(50) NOT NULL,
  `status` varchar(111) NOT NULL,
  `datetime` datetime NOT NULL,
  PRIMARY KEY (`event_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=103 ;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`event_id`, `event`, `des`, `date`, `time`, `add`, `status`, `datetime`) VALUES
(87, 'dfgh', 'fghj', '2019-12-31', '12:59', 'panjim', '0', '0000-00-00 00:00:00'),
(91, 'it maestro', 'it', '2019-02-22', '04:04', 'mapusa', '0', '0000-00-00 00:00:00'),
(92, 'qwe', 'qwert', '2018-12-31', '23:59', 'asdfghj', '0', '2018-03-21 13:45:47'),
(93, 'qwerty', 'asdfghjk', '2018-12-31', '23:59', '1234567', '0', '2018-03-21 13:47:17'),
(94, 'qwerty', 'asdfghjk', '2018-12-31', '23:59', '1234567', '0', '2018-03-21 13:51:04'),
(95, 'qwerty', 'asdfghjk', '2018-12-31', '23:59', '1234567', '0', '2018-03-21 13:51:21'),
(96, 'qwerty', 'asdfghjk', '2018-12-31', '23:59', '1234567', '0', '2018-03-21 13:51:32'),
(97, 'qwerty', 'asdfghjk', '2018-12-31', '23:59', '1234567', '0', '2018-03-21 13:51:55'),
(98, 'IT maestro', 'BCA EVENT', '2018-12-31', '23:59', 'Mapusa', '0', '2018-03-27 11:54:45'),
(99, 'qwe', 'qwert', '2018-12-31', '23:59', 'qwert', '0', '2018-03-27 11:58:39'),
(100, 'IT maestro', 'BCA', '2018-12-31', '23:59', 'MAPUSA', '0', '2018-03-27 12:41:30'),
(101, 'BBA EVENT', 'sdfghjk', '2018-12-31', '23:59', 'asdfdfghj', '0', '2018-03-27 13:17:12');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `fd_id` int(11) NOT NULL AUTO_INCREMENT,
  `F_name` varchar(20) NOT NULL,
  `L_name` varchar(20) NOT NULL,
  `E_mail` varchar(30) NOT NULL,
  `Subject` varchar(100) NOT NULL,
  `Message` text NOT NULL,
  `status` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`fd_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`fd_id`, `F_name`, `L_name`, `E_mail`, `Subject`, `Message`, `status`) VALUES
(1, 'a', 'a', 'a', 'a', 'a', 1),
(2, 'b', 'b', 'b', 'b', 'b', 1),
(3, 'savio', 'barreto', 'savio@gmail.com', 'i cannot login in to my account.', 'i cannot login in to my account help me.', 1),
(4, 'qw', 'qw', 'qw', 'qw', 'qw', 1),
(5, 'sai', 'sawant', 'saidatta@gmail.com', 'feedback', 'GUd website', 1),
(6, 'Saidatta', 'Sawant', 'sai@gmail.com', 'feedback', 'Awsome website. consistant layout ', 1),
(7, 'sai', 'sawant', 'sai@gmail.com', 'feedback', 'website is too gud', 1),
(8, 'saidatta', 'sawant', 'sao@gmail.com', 'feedback', 'website is too gud', 1),
(9, 'saidatta', 'Sawant', 'sai@gmail.com', 'feedback', 'website is very useful ', 1),
(10, 'sai', 'sawant', 'sai@gmail.com', 'Feedback', 'website is very useful', 1);

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `MSG_ID` int(11) NOT NULL AUTO_INCREMENT,
  `MSG_SENDER` varchar(111) NOT NULL,
  `MSG_RECEIVER` varchar(111) NOT NULL,
  `MSG_MESSAGE` text NOT NULL,
  `MSG_TIME` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `MSG_MEDIA` int(200) NOT NULL,
  PRIMARY KEY (`MSG_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=57 ;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`MSG_ID`, `MSG_SENDER`, `MSG_RECEIVER`, `MSG_MESSAGE`, `MSG_TIME`, `MSG_MEDIA`) VALUES
(21, '19', '2', 'hii', '2018-01-26 23:57:38', 0),
(22, '2', '3', 'hii', '2018-01-27 00:01:53', 0),
(23, '2', '1', 'hii', '2018-01-27 00:04:34', 0),
(24, '19', '4', 'hii', '2018-01-27 18:27:24', 0),
(25, '4', '19', 'zxcvbn', '2018-01-27 18:34:05', 0),
(26, '4', '19', 'bye', '2018-01-27 18:35:51', 0),
(27, '19', '4', 'hey', '2018-01-27 18:37:21', 0),
(28, '19', '4', 'dfghjk', '2018-01-27 18:38:18', 0),
(29, '19', '4', 'fghjk', '2018-01-27 18:40:08', 0),
(30, '19', '4', 'bye', '2018-01-27 18:41:02', 0),
(31, '19', '4', 'fghj', '2018-01-27 18:42:45', 0),
(32, '19', '4', 'hii', '2018-01-27 18:42:54', 0),
(33, '19', '4', 'gnt', '2018-01-27 18:43:44', 0),
(34, '4', '19', 'hii', '2018-01-27 20:37:17', 0),
(35, '4', '2', 'hii', '2018-01-27 20:59:27', 0),
(36, '2', '4', 'hiii', '2018-01-27 21:02:34', 0),
(37, '4', '2', 'hii', '2018-01-27 21:18:56', 0),
(38, '4', '2', 'hii', '2018-01-27 21:19:47', 0),
(39, '4', '2', 'qwertyui', '2018-01-27 21:19:56', 0),
(40, '19', '2', 'hii', '2018-01-27 23:50:24', 0),
(41, '19', '2', 'gnt', '2018-01-27 23:50:29', 0),
(42, '19', '2', 'hiii', '2018-01-28 10:45:16', 0),
(43, '19', '3', 'hiii', '2018-01-28 10:45:22', 0),
(44, '3', '19', 'hii', '2018-01-28 10:46:31', 0),
(45, '19', '3', 'hi', '2018-01-28 10:47:05', 0),
(46, '2', '4', 'hiii', '2018-01-28 10:48:45', 0),
(47, '8', '1', 'hii', '2018-02-12 23:42:37', 0),
(48, '1', '8', 'hiii', '2018-02-12 23:44:07', 0),
(49, '21', '1', 'hii', '2018-03-08 18:27:38', 0),
(50, '21', '1', 'heelo', '2018-03-10 12:21:00', 0),
(51, '19', '1', 'hii', '2018-03-15 22:07:12', 0),
(52, '19', '1', 'hii', '2018-03-15 22:08:00', 0),
(53, '19', '1', 'f', '2018-03-15 22:08:42', 0),
(54, '24', '2', 'hi', '2018-03-20 14:46:47', 0),
(55, '24', '22', 'sais', '2018-03-20 14:47:12', 0),
(56, '1', '2', 'hii', '2018-03-28 14:35:14', 0);

-- --------------------------------------------------------

--
-- Table structure for table `message_status`
--

CREATE TABLE IF NOT EXISTS `message_status` (
  `MSG_ID` int(11) NOT NULL AUTO_INCREMENT,
  `SENDER_ID` int(111) NOT NULL,
  `RECEIVER_ID` int(111) NOT NULL,
  PRIMARY KEY (`MSG_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `message_status`
--

INSERT INTO `message_status` (`MSG_ID`, `SENDER_ID`, `RECEIVER_ID`) VALUES
(4, 19, 3),
(6, 1, 8),
(12, 24, 2),
(13, 24, 22);

-- --------------------------------------------------------

--
-- Table structure for table `notes`
--

CREATE TABLE IF NOT EXISTS `notes` (
  `notes_id` int(11) NOT NULL AUTO_INCREMENT,
  `sender` varchar(100) NOT NULL,
  `clas` varchar(50) NOT NULL,
  `des` varchar(100) NOT NULL,
  `rating` varchar(111) NOT NULL,
  `image` varchar(100) NOT NULL,
  `datetime` datetime NOT NULL,
  PRIMARY KEY (`notes_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=97 ;

--
-- Dumping data for table `notes`
--

INSERT INTO `notes` (`notes_id`, `sender`, `clas`, `des`, `rating`, `image`, `datetime`) VALUES
(75, 'saidat', 'TY', 'asd', 'NOT IMP', 'landscape-1445720435-g-blood-donor-85074738.jpg', '2018-01-28 17:24:54'),
(77, 'saidat', 'FY', '', 'NOT IMP', 'Tws ppt by saidatta (714).ppt', '2018-01-28 18:38:16'),
(79, 'saidat', 'SY', 'dfgh', 'NOT IMP', 'Tws ppt by saidatta (714).ppt', '2018-01-28 18:45:12'),
(80, 'saidat', 'TY', 'fgh', 'NOT IMP', 'communication and its process.ppt', '2018-01-28 18:45:57'),
(81, 'saidat', 'FY', 'sdfgh', 'NOT IMP', 'effective communication.pptx', '2018-01-28 18:46:26'),
(82, 'saidat', 'FY', 'dfg', 'NOT IMP', 'save life.jpeg', '2018-01-28 18:47:10'),
(84, 'saidat', 'SY', 'asd', 'NOT IMP', 'Positive Economics.ppt', '2018-01-28 22:10:16'),
(85, 'saidat', 'FY', 'wertyu', 'IMP', '', '2018-02-03 12:37:32'),
(86, 'saidat', 'FY', 'qwertyu', 'NOT IMP', 'Desert.jpg', '2018-02-14 12:58:46'),
(87, 'saidatta', 'TY', 'imp', 'IMP', '', '2018-02-28 00:45:44'),
(88, 'saidatta', 'TY', 'imp notes', 'IMP', 'Desert-5.jpg', '2018-02-28 00:50:04'),
(89, 'saidatta', 'TY', 'asd', 'IMP', 'Hydrangeas.jpg', '2018-02-28 00:52:29'),
(90, 'college', 'FY', 'mp', 'NOT IMP', 'Chrysanthemum.jpg', '2018-03-10 00:41:04'),
(91, 'college', 'FY', 'asdf', 'NOT IMP', 'photo.jpg', '2018-03-17 22:48:41'),
(92, 'college', 'FY', 'imp', 'IMP', 'effective communication.pptx', '2018-03-17 22:50:36'),
(93, 'sai', 'TY', 'study', 'IMP', 'ecrm.pptx', '2018-03-20 14:48:56'),
(94, 'saidat', 'FY', 'imp', 'IMP', 'Definitions of economics.ppt', '2018-03-28 15:40:20'),
(95, 'saidat', 'FY', 'imp cs ppt', 'IMP', 'cs.pptx', '2018-03-28 15:44:20'),
(96, 'saidat', 'TY', 'imp', 'IMP', 'cs.pptx', '2018-03-28 15:45:34');

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE IF NOT EXISTS `notice` (
  `notice_id` int(11) NOT NULL AUTO_INCREMENT,
  `sender` varchar(111) NOT NULL,
  `clas` varchar(111) NOT NULL,
  `notice` varchar(111) NOT NULL,
  `status` int(111) NOT NULL,
  `datetime` datetime NOT NULL,
  PRIMARY KEY (`notice_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=44 ;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`notice_id`, `sender`, `clas`, `notice`, `status`, `datetime`) VALUES
(24, 'saidat', 'FOR', 'hjk', 1, '0000-00-00 00:00:00'),
(25, 'saidat', 'FY', 'hii', 1, '0000-00-00 00:00:00'),
(26, 'saidat', 'FY', 'asdfghjklp', 1, '0000-00-00 00:00:00'),
(27, 'saidatta', 'FY', 'urgnt meeting 2marrow', 1, '0000-00-00 00:00:00'),
(28, 'saidatta', 'SY', 'qwer', 1, '0000-00-00 00:00:00'),
(29, 'saidat', 'SY', 'asd', 1, '0000-00-00 00:00:00'),
(30, 'saidat', 'FOR', 'imp', 1, '0000-00-00 00:00:00'),
(31, 'saidat', 'SY', 'sdfg', 1, '0000-00-00 00:00:00'),
(32, 'saidat', 'ALL', 'hey', 1, '0000-00-00 00:00:00'),
(33, 'arjun', 'FOR', 'zxcvbnm,', 1, '0000-00-00 00:00:00'),
(34, 'arjun', 'FY', 'asd', 1, '0000-00-00 00:00:00'),
(35, 'arjun', 'SY', 'asdfgh', 1, '0000-00-00 00:00:00'),
(36, 'arjun', 'FY', 'sai', 1, '0000-00-00 00:00:00'),
(37, 'arjun', 'FY', 'asd', 1, '0000-00-00 00:00:00'),
(39, 'arjun', 'FOR', 'asdfghjkl', 1, '0000-00-00 00:00:00'),
(40, 'arjun', 'FY', 'asdf', 1, '0000-00-00 00:00:00'),
(42, 'arjun', 'FY', 'hj', 1, '2018-03-09 00:24:45'),
(43, 'arjun', 'FY', 'hj', 1, '2018-03-09 00:26:32');

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE IF NOT EXISTS `notification` (
  `REG_ID` int(11) NOT NULL,
  `event_id` int(11) NOT NULL,
  `status` int(1) DEFAULT '0',
  KEY `notice_id` (`event_id`),
  KEY `REG_ID` (`REG_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`REG_ID`, `event_id`, `status`) VALUES
(36, 92, 0),
(37, 92, 0),
(21, 92, 0),
(9, 92, 0),
(38, 92, 0),
(39, 92, 0),
(24, 92, 0),
(35, 92, 0),
(5, 100, 0),
(36, 100, 0),
(37, 100, 0),
(21, 100, 0),
(9, 100, 0),
(38, 100, 0),
(39, 100, 0),
(24, 100, 0),
(35, 100, 0),
(5, 101, 0),
(36, 101, 0),
(37, 101, 0),
(21, 101, 0),
(9, 101, 0),
(38, 101, 0),
(39, 101, 0),
(24, 101, 0),
(35, 101, 0),
(40, 100, 0),
(5, 100, 0),
(41, 100, 0),
(36, 100, 0),
(37, 100, 0),
(3, 100, 0),
(21, 100, 0),
(9, 100, 0),
(38, 100, 0),
(45, 100, 0),
(43, 100, 0),
(39, 100, 0),
(24, 100, 0),
(44, 100, 0),
(42, 100, 0),
(35, 100, 0);

-- --------------------------------------------------------

--
-- Table structure for table `qucom`
--

CREATE TABLE IF NOT EXISTS `qucom` (
  `comid` int(11) NOT NULL AUTO_INCREMENT,
  `query_id` int(111) NOT NULL,
  `sender` varchar(111) NOT NULL,
  `comment` varchar(111) NOT NULL,
  PRIMARY KEY (`comid`),
  KEY `query_id` (`query_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `qucom`
--

INSERT INTO `qucom` (`comid`, `query_id`, `sender`, `comment`) VALUES
(5, 10, 'saidat', 'hii'),
(6, 10, 'saidat', 'hii'),
(7, 10, 'saidatta', 'hiiiii');

-- --------------------------------------------------------

--
-- Table structure for table `query`
--

CREATE TABLE IF NOT EXISTS `query` (
  `query_id` int(11) NOT NULL AUTO_INCREMENT,
  `sender` varchar(30) NOT NULL,
  `query` varchar(100) NOT NULL,
  `datetime` datetime NOT NULL,
  PRIMARY KEY (`query_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `query`
--

INSERT INTO `query` (`query_id`, `sender`, `query`, `datetime`) VALUES
(8, 'admin', 'what is ajax', '2018-03-19 23:26:33'),
(9, 'admin', 'what is ajax', '2018-03-19 23:27:02'),
(10, 'admin', 'what is ajax', '2018-03-19 23:27:27');

-- --------------------------------------------------------

--
-- Table structure for table `user_secret_quotes`
--

CREATE TABLE IF NOT EXISTS `user_secret_quotes` (
  `REG_ID` int(11) NOT NULL,
  `Question1` varchar(50) NOT NULL,
  `Answer1` varchar(50) NOT NULL,
  `Question2` varchar(50) NOT NULL,
  `Answer2` varchar(50) NOT NULL,
  KEY `user_secret_quotes_ibfk` (`REG_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_secret_quotes`
--

INSERT INTO `user_secret_quotes` (`REG_ID`, `Question1`, `Answer1`, `Question2`, `Answer2`) VALUES
(1, 'where did you meet you spouse?', 'saidatta', 'what was the last name of your first boss?', 'asdfghj'),
(19, 'what is your youngest childs nickname?', 'sdfghjk', 'what was your favorite food as a child?', 'asde'),
(5, 'what is your oldest cousins name?', 'dfge', 'what was your favorite food as a child?', 'fghje'),
(21, 'what is the first name of your favorite uncle?', 'dfghj', 'what was the last name of your first boss?', 'rtyu'),
(3, 'where did you meet you spouse?', 'asdfg', 'what was your favorite food as a child?', 'asde'),
(2, 'where did you meet you spouse?', 'qwer', 'what is the name of your favorite sports team?', 'sdfgh'),
(24, 'what is your oldest cousins name?', 'raju', 'what was your favorite food as a child?', 'tandoori'),
(35, 'where did you meet you spouse?', 'asdfg', 'what was the last name of your first boss?', 'asdf'),
(36, 'what is the first name of your favorite uncle?', 'asdfgh', 'what was the last name of your first boss?', 'asdfg'),
(37, 'what is the first name of your oldest niece?', 'qwert', 'what was your favorite food as a child?', 'qwert'),
(38, 'what is the first name of your favorite uncle?', 'qwee', 'what is the name of your favorite sports team?', 'qwerty'),
(41, 'where did you meet you spouse?', 'aaaa', 'what was your favorite food as a child?', 'aaaa'),
(42, 'what is the first name of your favorite uncle?', 'zzzz', 'what was the last name of your first boss?', 'zzzz'),
(43, 'what is the first name of your favorite uncle?', 'asdfg', 'what was your favorite food as a child?', 'asdfgh'),
(44, 'what is your oldest cousins name?', 'sunny', 'what was your favorite food as a child?', 'sunny');

-- --------------------------------------------------------

--
-- Table structure for table `wallpost`
--

CREATE TABLE IF NOT EXISTS `wallpost` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `REG_ID` int(11) NOT NULL,
  `post` varchar(355) DEFAULT NULL,
  `sender` varchar(20) DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL,
  `liked` varchar(111) DEFAULT NULL,
  `datetime` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `REG_ID` (`REG_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `wallpost`
--

INSERT INTO `wallpost` (`id`, `REG_ID`, `post`, `sender`, `image`, `liked`, `datetime`) VALUES
(15, 19, 'hey ppl', 'saidat', 'wallpost/hey ppl25-02-2018-080250_photo.jpg', '', '2018-02-25 20:29:50');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`id`) REFERENCES `wallpost` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `notification`
--
ALTER TABLE `notification`
  ADD CONSTRAINT `notification_ibfk_2` FOREIGN KEY (`event_id`) REFERENCES `event` (`event_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `notification_ibfk_1` FOREIGN KEY (`REG_ID`) REFERENCES `col_registration` (`REG_ID`) ON DELETE CASCADE;

--
-- Constraints for table `qucom`
--
ALTER TABLE `qucom`
  ADD CONSTRAINT `qucom_ibfk_1` FOREIGN KEY (`query_id`) REFERENCES `query` (`query_id`) ON DELETE CASCADE;

--
-- Constraints for table `user_secret_quotes`
--
ALTER TABLE `user_secret_quotes`
  ADD CONSTRAINT `user_secret_quotes_ibfk_1` FOREIGN KEY (`REG_ID`) REFERENCES `col_registration` (`REG_ID`) ON DELETE CASCADE;

--
-- Constraints for table `wallpost`
--
ALTER TABLE `wallpost`
  ADD CONSTRAINT `wallpost_ibfk_1` FOREIGN KEY (`REG_ID`) REFERENCES `col_registration` (`REG_ID`) ON DELETE CASCADE;
