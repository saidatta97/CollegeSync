-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 28, 2017 at 08:46 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `collegesync`
--

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
  `REG_PWD` varchar(25) NOT NULL,
  `REG_DOB` varchar(10) NOT NULL,
  `dp` varchar(100) NOT NULL,
  PRIMARY KEY (`REG_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `col_registration`
--

INSERT INTO `col_registration` (`REG_ID`, `REG_FIRSTNAME`, `REG_LASTNAME`, `REG_EMAIL`, `REG_CLASS`, `REG_UNIVERSITY`, `REG_ADDRESS`, `REG_MOBILENO`, `REG_GENDER`, `REG_USERNAME`, `REG_PWD`, `REG_DOB`, `dp`) VALUES
(1, 'saidatta', 'sawant', 'saidattasawant@gmail.com', 'TY', '12345', '  ASSONORA  GOA ', 8552954424, '12345', 'sai', '12345', '2017-09-01', 'userdp/28-11-2017-011128_photo.jpg'),
(2, 'pandu', 'naik', 'asasa', 'TY', '1234', 'asa ', 12345, 'male', 'pandu', 'rang', '2017-09-21', ''),
(3, 'akshay', 'chatim', 'akshay@gmail', 'TY', '124', 'aldona ', 1234567, 'male', 'ak', 'ak123', '2017-10-01', ''),
(4, 'laxman', 'sawant', 'laxman@gmail.com', 'TY', '12345', 'dodamarg ', 12345, 'male', 'laxman', 'sawant', '2017-09-13', ''),
(5, 'brejesh', 'lotlikar', 'brejeshlotlikar@gmail.com', 'TY', '12345', 'mapusa ', 12345, 'male', '1234', '12345', '2017-09-13', ''),
(6, 'harshu', 'naik', 'harshu@gmail.com', 'TY', '12345', 'nirul ', 12345, 'female', 'harshu', '12345', '2017-02-20', ''),
(7, 'saiguru', 'yermal', 'saiyermal@gmail.com', 'TY', '123456789', '  dubai  ', 987654, 'male', 'saiyermal', 'qwertysai', '2017-10-01', ''),
(8, 'arjun', 'naik', 'arjun@gmail.com', 'TY', '12345', 'menkurem', 12345, 'male', 'arjun', 'naik', '2017-09-28', ''),
(9, 'prajot', 'malvankar', 'prajot', 'TY', '12345', 'mapusa ', 123456789, 'male', 'prajot', 'malvankar', '2017-09-27', ''),
(11, 'qq', 'qq', 'qq', 'FY', '11', ' qq', 11, 'male', 'sai', '123445', '2017-07-26', ''),
(14, 'sa', 'Mouse', 'saidattasawant.ss@gmail.com', 'TY', '12345', ' ', 40, 'male', 'hh', '', '2017-02-01', ''),
(15, 'sa', 'Mouse', 'saidattasawant.ss@gmail.com', 'TY', '12345', ' ', 40, 'male', 'hh', '', '2017-02-01', ''),
(16, 'sai', 'as', 'saidattasawnt.sai@gmail.com', 'SY', '123', ' aaa', 12, 'male', 'asas', 'asasa', '2017-06-04', ''),
(17, 'z', 'zz', 'zz', 'SY', '12', 'z ', 12, 'male', 'qwertyuio', '123456789', '2017-10-17', ''),
(18, 'asdfg', 'asd', 'g', 'FY', '123456', 'sdfgh ', 2345, 'male', 'df', 'dfg', '2017-11-06', ''),
(19, 'saidat', 'sawant', 'saidattasawant.ss@gmail.com', 'TY', '23456789', '        assonora         ', 234567890, 'male', 'sai', 'qwerty', '1997-11-26', 'userdp/28-11-2017-121119_photo.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE IF NOT EXISTS `comment` (
  `comid` int(10) NOT NULL AUTO_INCREMENT,
  `id` int(10) NOT NULL,
  `comsender` varchar(50) NOT NULL,
  `message` varchar(50) NOT NULL,
  PRIMARY KEY (`comid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=328 ;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`comid`, `id`, `comsender`, `message`) VALUES
(289, 61, 'sai', 'qwerty'),
(290, 61, 'sai', 'qwert'),
(291, 61, 'sai', 'sdfg'),
(292, 61, 'sai', 'zxcvbnm,'),
(293, 0, 'sai', 'asdfghjkl'),
(294, 61, 'sai', 'sdfghj'),
(295, 61, 'sai', 'sai'),
(296, 68, 'sai', '68asdfghjk'),
(297, 67, 'sai', '68asdfghjk'),
(298, 66, 'sai', '68asdfghjk'),
(299, 65, 'sai', '68asdfghjk'),
(300, 64, 'sai', '68asdfghjk'),
(301, 63, 'sai', '68asdfghjk'),
(302, 61, 'sai', '68asdfghjk'),
(303, 61, 'sai', '123\r\n'),
(304, 45, 'sai', '23456789'),
(305, 68, 'sai', 'hiii'),
(306, 68, 'sai', 'hii'),
(307, 0, 'sai', 'cat'),
(308, 0, 'sai', 'dog'),
(309, 0, 'sai', 'hii'),
(310, 0, 'sai', 'zxcvbnm'),
(311, 68, 'sai', 'pra'),
(312, 68, 'saidatta', 'nali'),
(313, 68, 'saidatta', 'qwerty'),
(314, 67, 'saidatta', 'sejal'),
(315, 61, 'saidatta', 'bye gnt'),
(316, 69, 'sai', 'hiiii'),
(317, 68, 'sai', 'asdfghjk'),
(318, 70, 'sai', 'nice pic'),
(319, 70, 'sai', 'asdfghjkl'),
(320, 70, 'sai', 'rrr'),
(321, 69, 'saidatta', 'qwertyuiop'),
(322, 72, 'saidatta', 'hii'),
(323, 73, 'sai', 'hiii bro'),
(324, 69, 'sai', 'qwertyuiojhgfdsasdfghjklkjhgfdssdfghjkjhgfdsdfghjk'),
(325, 74, 'sai', 'hiiii '),
(326, 77, 'saidatta', 'ghjk'),
(327, 78, 'saidatta', 'hiii');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE IF NOT EXISTS `event` (
  `event_id` int(11) NOT NULL AUTO_INCREMENT,
  `sender` varchar(50) NOT NULL,
  `event` varchar(50) NOT NULL,
  `des` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL,
  `time` varchar(50) NOT NULL,
  `add` varchar(50) NOT NULL,
  PRIMARY KEY (`event_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`event_id`, `sender`, `event`, `des`, `date`, `time`, `add`) VALUES
(1, 'saidatta', 'it mestro', 'saraswat bca event', '2017-12-09', '12:10', 'mapusa'),
(2, 'saidatta', 'asdfg', 'asdfghjkl.,mnbv', '2017-10-31', '10:56', '');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `notes`
--

INSERT INTO `notes` (`notes_id`, `sender`, `clas`, `des`, `rating`, `image`, `datetime`) VALUES
(1, 'sai', 'FY', 'time table', '', 'notes/24-11-2017-011123_photo.jpg', '0000-00-00 00:00:00'),
(2, 'sai', 'TY', 'eco last year paper pic', '', 'notes/TY24-11-2017-011125_photo.jpg', '0000-00-00 00:00:00'),
(3, 'sai', 'SY', 'gh', '', 'notes/SY24-11-2017-011111_photo.jpg', '2017-11-24 07:57:11'),
(4, 'sai', 'FY', 'd', '', 'notes/FY24-11-2017-011136_photo.jpg', '2017-11-24 08:04:36'),
(5, 'sai', 'FY', 'f', '', 'notes/FY24-11-2017-011135_photo.jpeg', '2017-11-24 08:11:35'),
(6, 'sai', 'FY', 'asd', '', 'notes/FY24-11-2017-011141_photo.jpg', '2017-11-24 13:46:41'),
(7, 'sai', 'TY', 'hey imp', '', 'notes/TY24-11-2017-011133_photo.jpg', '2017-11-24 13:47:33'),
(8, 'sai', 'SY', 'asdfghjkl;', '', 'notes/SY24-11-2017-031106_photo.jpg', '2017-11-24 15:54:06'),
(9, 'sai', 'TY', 'asdfg', '', 'notes/TY24-11-2017-031143_photo.jpg', '2017-11-24 15:54:43'),
(10, 'saidat', 'SY', 'sai', '', 'notes/SY28-11-2017-121101_photo.', '2017-11-28 12:44:01'),
(11, 'saidat', 'FY', 'saidat', '', 'notes/FY28-11-2017-121126_photo.', '2017-11-28 12:44:26'),
(12, 'saidat', 'FY', 'sdfgh', 'NOT IMP', 'notes/FY28-11-2017-121123_photo.', '2017-11-28 12:51:23'),
(13, 'saidat', 'FY', 'hello', 'IMP', 'notes/FY28-11-2017-121108_photo.', '2017-11-28 12:52:08'),
(14, 'saidat', 'TY', 'very imp', 'IMP', 'notes/TY28-11-2017-011158_photo.', '2017-11-28 13:02:58'),
(15, 'saidat', 'SY', 'urgent', 'IMP', 'notes/SY28-11-2017-011157_photo.', '2017-11-28 13:04:57');

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE IF NOT EXISTS `notice` (
  `notice_id` int(11) NOT NULL AUTO_INCREMENT,
  `sender` varchar(111) NOT NULL,
  `clas` varchar(111) NOT NULL,
  `notice` varchar(111) NOT NULL,
  PRIMARY KEY (`notice_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`notice_id`, `sender`, `clas`, `notice`) VALUES
(1, '', 'TY', 'dfghjk'),
(2, 'saidatta', 'ALL', 'hello ');

-- --------------------------------------------------------

--
-- Table structure for table `qucom`
--

CREATE TABLE IF NOT EXISTS `qucom` (
  `comid` int(11) NOT NULL AUTO_INCREMENT,
  `query_id` int(111) NOT NULL,
  `sender` varchar(111) NOT NULL,
  `comment` varchar(111) NOT NULL,
  PRIMARY KEY (`comid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `qucom`
--

INSERT INTO `qucom` (`comid`, `query_id`, `sender`, `comment`) VALUES
(1, 3, 'sai', 'dfghjk'),
(2, 3, 'sai', 'sdfghjkl'),
(3, 1, 'sai', 'asdfghjkl;lkjhgfdsdfgh'),
(4, 1, 'sai', 'qwertyuikjhgfdert'),
(5, 2, 'sai', 'asdfghjkl'),
(6, 2, 'sai', 'asdfghj'),
(7, 1, 'sai', 'sdfghj'),
(8, 3, 'sai', 'asdfghjbvcxzsdghjk'),
(9, 3, 'saidatta', 'fgh');

-- --------------------------------------------------------

--
-- Table structure for table `query`
--

CREATE TABLE IF NOT EXISTS `query` (
  `query_id` int(11) NOT NULL AUTO_INCREMENT,
  `sender` varchar(30) NOT NULL,
  `query` varchar(100) NOT NULL,
  PRIMARY KEY (`query_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `query`
--

INSERT INTO `query` (`query_id`, `sender`, `query`) VALUES
(1, 'sai', 'help?'),
(2, 'sai', 'what is bootstrap?'),
(3, 'sai', 'bootsrap is mixture of css n javascript');

-- --------------------------------------------------------

--
-- Table structure for table `wallpost`
--

CREATE TABLE IF NOT EXISTS `wallpost` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `post` varchar(100) NOT NULL,
  `sender` varchar(20) NOT NULL,
  `image` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=80 ;

--
-- Dumping data for table `wallpost`
--

INSERT INTO `wallpost` (`id`, `post`, `sender`, `image`) VALUES
(45, 'hello friends', 'sai', 'photo/hello friends06-10-2017-021001_photo.'),
(46, 'hello there i m using whatesap', 'sai', 'photo/hello there i m using whatesap06-10-2017-021055_photo.'),
(47, 'now facebook', 'sai', 'photo/now facebook06-10-2017-021017_photo.'),
(48, 'instagram', 'sai', 'photo/instagram06-10-2017-021045_photo.jpg'),
(49, 'shubham', 'sai', 'photo/shubham06-10-2017-021034_photo.jpg'),
(50, 'hiiii', 'sai', 'photo/hiiii06-10-2017-021027_photo.jpg'),
(51, 'hello chatim how r u', 'sai', 'photo/hello chatim how r u06-10-2017-021021_photo.jpg'),
(52, 'hello', 'saidatta', 'photo/hello06-10-2017-031024_photo.jpg'),
(53, '', 'saidatta', 'photo/06-10-2017-031012_photo.jpg'),
(54, 'hiii', 'sai', 'photo/hiii06-10-2017-081057_photo.jpg'),
(55, 'hii', 'sai', 'photo/hii07-10-2017-071056_photo.'),
(56, 'hiiiii', 'sai', 'photo/hiiiii07-10-2017-011052_photo.jpg'),
(57, 'hhhhh', 'sai', 'photo/hhhhh07-10-2017-021031_photo.jpg'),
(58, 'hiiii', 'sai', 'photo/hiiii08-10-2017-111054_photo.jpg'),
(59, 'hiiii', 'sai', 'photo/hiiii08-10-2017-061017_photo.'),
(60, 'hiii', 'sai', 'photo/hiii08-10-2017-061004_photo.'),
(61, 'bye', 'sai', 'photo/bye08-10-2017-061029_photo.'),
(63, 'hiii', 'saidatta', 'photo/hiii08-10-2017-071029_photo.'),
(64, 'asfsdsasad', 'saidatta', 'photo/asfsdsasad08-10-2017-071005_photo.'),
(65, 'hey friends', 'saidatta', 'photo/hey friends08-10-2017-081032_photo.jpg'),
(66, 'hiiiiiii friends', 'saidatta', 'photo/hiiiiiii friends08-10-2017-101017_photo.jpg'),
(67, 'asd', 'sai', 'photo/asd08-10-2017-111034_photo.jpg'),
(68, 'saidatta', 'sai', 'photo/saidatta09-10-2017-031025_photo.jpg'),
(69, 'celestian', 'sai', 'photo/celestian10-10-2017-121058_photo.jpg'),
(70, 'akshay', 'sai', 'photo/akshay10-10-2017-121033_photo.jpg'),
(71, 'hiiii', 'sai', 'photo/hiiii20-10-2017-041048_photo.jpg'),
(72, 'hiii', 'saidatta', 'photo/hiii04-11-2017-111113_photo.jpg'),
(73, 'hey arjun', 'sai', 'photo/hey arjun23-11-2017-041141_photo.jpg'),
(74, 'sdfghjkl', 'sai', 'wallpost/sdfghjkl24-11-2017-031157_photo.jpg'),
(75, '', 'saidatta', 'wallpost/26-11-2017-031121_photo.'),
(76, '', 'saidatta', 'wallpost/26-11-2017-031124_photo.'),
(77, 'hiii', 'saidatta', 'wallpost/hiii26-11-2017-031129_photo.'),
(78, 'hiiiiii  girls', 'saidatta', 'wallpost/hiiiiii  girls26-11-2017-031119_photo.'),
(79, 'hey bros', 'saidatta', 'wallpost/hey bros26-11-2017-031141_photo.');
