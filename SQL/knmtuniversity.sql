-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 30, 2017 at 07:55 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `knmtuniversity`
--

-- --------------------------------------------------------

--
-- Table structure for table `com_ideas`
--
CREATE DATABASE knmtuniversity;
USE knmtuniversity;

CREATE TABLE `com_ideas` (
  `about` varchar(20) NOT NULL,
  `idea` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `com_ideas`
--

INSERT INTO `com_ideas` (`about`, `idea`) VALUES
('uni', 'There are not enough study areas.\r\n'),
('uni', 'There are not enough study areas.\r\n'),
('cf', 'There are not enough computers.\r\n'),
('ef', 'Please repair the elevators.\r\n'),
('mf', 'Please supply more medicines.\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(20) NOT NULL,
  `password` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`) VALUES
('Nirosh', '12345'),
('Thisarani', '23456'),
('Melani', '34567'),
('Kusal', '45678'),
('Chaminda', '11111');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
