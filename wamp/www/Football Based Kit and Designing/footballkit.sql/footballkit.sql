-- phpMyAdmin SQL Dump
-- version 2.11.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 14, 2020 at 08:07 PM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `footballkit`
--

-- --------------------------------------------------------

--
-- Table structure for table `hockeyvideo`
--

CREATE TABLE `hockeyvideo` (
  `ID` int(11) NOT NULL,
  `Category` varchar(20) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `VideoLink` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hockeyvideo`
--


-- --------------------------------------------------------

--
-- Table structure for table `order1`
--

CREATE TABLE `order1` (
  `OrderID` int(10) NOT NULL,
  `Date` varchar(20) NOT NULL,
  `UserName` varchar(20) NOT NULL,
  `KitID` varchar(10) NOT NULL,
  `Type` varchar(20) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Price` varchar(10) NOT NULL,
  `Quantity` varchar(10) NOT NULL,
  `TotalPrice` varchar(10) NOT NULL,
  `CardNo` varchar(20) NOT NULL,
  `Status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order1`
--

INSERT INTO `order1` (`OrderID`, `Date`, `UserName`, `KitID`, `Type`, `Name`, `Price`, `Quantity`, `TotalPrice`, `CardNo`, `Status`) VALUES
(1, '06-Mar-19', 'sathi', '1', ' Football Kit', 'Shoe', '2500', '1', '2500', '4564356345', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `KitID` int(10) NOT NULL,
  `Category` varchar(20) NOT NULL,
  `KitName` varchar(20) NOT NULL,
  `BrandName` varchar(20) NOT NULL,
  `Price` varchar(10) NOT NULL,
  `Description` varchar(200) NOT NULL,
  `Photo` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`KitID`, `Category`, `KitName`, `BrandName`, `Price`, `Description`, `Photo`) VALUES
(1, ' Football Kit', 'Shoe', 'Bata', '2500', 'bata shoe', 'KIT/1.jpg'),
(1, '', 'Murali', '', '', 'test', 'KIT/1.jpg'),
(1, '', 'Murali', '', '', 'test', 'KIT/1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `Name` varchar(20) NOT NULL,
  `UserName` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `ContactNo` varchar(10) NOT NULL,
  `MailID` varchar(20) NOT NULL,
  `Address` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`Name`, `UserName`, `Password`, `Gender`, `ContactNo`, `MailID`, `Address`) VALUES
('sathish', 'sathi', 'sathi', 'Male', '9988771100', 'sathi@gmail.com', 'Trichy'),
('viji', 'viji', 'viji', 'Female', '9876543210', 'viji@gmail.com', 'cbe-12'),
('viji', 'viji', 'viji', 'Male', '789090000', 'viji@gmail.com', 'cbe');

-- --------------------------------------------------------

--
-- Table structure for table `tournament`
--

CREATE TABLE `tournament` (
  `ID` int(10) NOT NULL,
  `Category` varchar(20) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Address` varchar(300) NOT NULL,
  `Date` varchar(20) NOT NULL,
  `Description` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tournament`
--


-- --------------------------------------------------------

--
-- Table structure for table `trainer`
--

CREATE TABLE `trainer` (
  `id` int(11) NOT NULL auto_increment,
  `name` text NOT NULL,
  `age` text NOT NULL,
  `sports` text NOT NULL,
  `phone` text NOT NULL,
  `mail` text NOT NULL,
  `description` text NOT NULL,
  `experience` text NOT NULL,
  `achievements` text NOT NULL,
  `path` text NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `trainer`
--

INSERT INTO `trainer` (`id`, `name`, `age`, `sports`, `phone`, `mail`, `description`, `experience`, `achievements`, `path`) VALUES
(1, 'Murali', '22', 'football', '76576587', 'vino @gmail.com', 'test', '10', 'gold', 'trainer/1.jpg');
