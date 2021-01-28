-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 14, 2017 at 09:21 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `emp_mngt_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `emp_reg`
--

CREATE TABLE IF NOT EXISTS `emp_reg` (
  `EMP_ID` int(10) NOT NULL AUTO_INCREMENT,
  `EMP_NAME` varchar(30) NOT NULL,
  `EMP_PHONE_NO` int(10) NOT NULL,
  `EMP_EMAIL_ID` varchar(30) NOT NULL,
  `EMP_ADD` varchar(50) NOT NULL,
  `EMP_DOJ` varchar(20) NOT NULL,
  `DEPT` varchar(20) NOT NULL,
  `SALARY` varchar(200) NOT NULL,
  PRIMARY KEY (`EMP_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `emp_reg`
--

INSERT INTO `emp_reg` (`EMP_ID`, `EMP_NAME`, `EMP_PHONE_NO`, `EMP_EMAIL_ID`, `EMP_ADD`, `EMP_DOJ`, `DEPT`, `SALARY`) VALUES
(15, 'ak', 12345, 'akshay@gmail', ' aldona ', '2017-10-03', 'IT', '30000'),
(17, 'sai', 12345, 'saidattasawant@gmail.com', ' assonora  ', '2017-10-01', 'IT', '50000'),
(18, 'pandu', 1234567, 'pandu@gmail.com', 'aldona   ', '2017-10-04', 'IT', '45000'),
(20, 'Adarsh', 112345678, 'adarsh@gmail.com', 'karaswada    ', '2017-10-02', 'hr', '25000');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `EMP_ID` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`EMP_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`EMP_ID`, `name`, `password`) VALUES
(1, 'sai', '12345'),
(2, 'ak', '12345');
