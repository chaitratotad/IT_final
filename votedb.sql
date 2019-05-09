-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 03, 2019 at 11:52 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `votedb`
--

-- --------------------------------------------------------

--
-- Table structure for table `candidaate`
--

USE votedb;

CREATE TABLE `candidate` (
  `indexx` varchar(10) DEFAULT NULL,
  `cid` varchar(20) DEFAULT NULL,
  `cname` text,
  `vcount` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `candidaate`
--

INSERT INTO `candidate` (`cid`, `cname`, `vcount`) VALUES
('shreyas', 'shreyas', '0'),
('sapna', 'sapna', '0');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `profile` int(1) DEFAULT NULL,
  `UID` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `voted` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`profile`, `UID`, `password`, `voted`) VALUES
(0, 'shreyas', 'shre', 0),
(0, 'sapna', 'sapna', 0),
(2, '2016cse181', '2016181', 0),
(2, '2016cse182', '2016182', 0),
(2, '2016cse188', '2016188', 0),
(2, '2016cse190', '2016190', 0),
(2, '2016cse195', '2016195', 0),
(2, '2016cse145', '2016145', 0),
(1, 'admin', 'admin', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`UID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
