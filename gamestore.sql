-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2018 at 04:23 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gamestore`
--

-- --------------------------------------------------------

--
-- Table structure for table `abuse_reports`
--

CREATE TABLE `abuse_reports` (
  `USERNAME` varchar(15) NOT NULL,
  `AR_TEXT` varchar(300) NOT NULL,
  `DATE` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `advertisements`
--

CREATE TABLE `advertisements` (
  `AD_ID` int(5) NOT NULL,
  `AD_IMAGE` varchar(30) NOT NULL,
  `USERNAME` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `developers`
--

CREATE TABLE `developers` (
  `USERNAME` varchar(15) NOT NULL,
  `DEV_NAME` varchar(30) NOT NULL,
  `DEV_DESCRIPTION` varchar(100) NOT NULL,
  `DEV_ADDRESS` varchar(100) NOT NULL,
  `DEV_EMAIL` varchar(30) NOT NULL,
  `DEV_WEBSITE` varchar(30) NOT NULL,
  `DEV_CREDIT_CARD` varchar(20) NOT NULL,
  `EDV_LOGO` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `forum_comments`
--

CREATE TABLE `forum_comments` (
  `GAME_ID` int(5) NOT NULL,
  `COMMENT` varchar(300) NOT NULL,
  `USERNAME` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `gamers`
--

CREATE TABLE `gamers` (
  `USERNAME` varchar(15) NOT NULL,
  `G_NAME` varchar(30) NOT NULL,
  `G_EMAIL` varchar(30) NOT NULL,
  `G_COUNTRY` varchar(30) NOT NULL,
  `G_MOBILE` varchar(15) NOT NULL,
  `G_GENDER` varchar(10) NOT NULL,
  `G_DOB` varchar(15) NOT NULL,
  `G_CREDIT_CARD` varchar(20) NOT NULL,
  `G_IMAGE` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `games`
--

CREATE TABLE `games` (
  `GAME_ID` int(5) NOT NULL,
  `GAME_NAME` varchar(30) NOT NULL,
  `GAME_PRICE` int(5) NOT NULL,
  `GAME_DESCRIPTION` varchar(300) NOT NULL,
  `GAME_REQ_OS` varchar(15) NOT NULL,
  `GAME_REQ_CPU` varchar(15) NOT NULL,
  `GAME_REQ_RAM` varchar(15) NOT NULL,
  `GAME_REQ_HDD` varchar(15) NOT NULL,
  `GAME_REQ_GPU` varchar(15) NOT NULL,
  `GAME_REQ_NETWORK` varchar(25) NOT NULL,
  `GAME_LOGO` varchar(30) NOT NULL,
  `GAME_SS` varchar(30) NOT NULL,
  `GAME_STATUS` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `game_review`
--

CREATE TABLE `game_review` (
  `GAME_ID` int(5) NOT NULL,
  `USERNAME` varchar(15) NOT NULL,
  `SCORE` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hotline_messages`
--

CREATE TABLE `hotline_messages` (
  `DEV_USERNAME` varchar(15) NOT NULL,
  `G_USERNAME` varchar(15) NOT NULL,
  `MESSAGE` varchar(150) NOT NULL,
  `TIME` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login_credentials`
--

CREATE TABLE `login_credentials` (
  `USERNAME` varchar(15) NOT NULL,
  `PASSWORD` varchar(15) NOT NULL,
  `USER_TYPE` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `moderators`
--

CREATE TABLE `moderators` (
  `USERNAME` varchar(15) NOT NULL,
  `MOD_NAME` varchar(30) NOT NULL,
  `MOD_ADDRESS` varchar(30) NOT NULL,
  `MOD_EMAIL` varchar(30) NOT NULL,
  `MOD_GENDER` varchar(10) NOT NULL,
  `MOD_DOB` varchar(15) NOT NULL,
  `MOD_IMAGE` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `purchase_history`
--

CREATE TABLE `purchase_history` (
  `USERNAME` varchar(15) NOT NULL,
  `GAME_ID` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `upload_history`
--

CREATE TABLE `upload_history` (
  `USERNAME` varchar(15) NOT NULL,
  `GAME_ID` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `advertisements`
--
ALTER TABLE `advertisements`
  ADD PRIMARY KEY (`AD_ID`);

--
-- Indexes for table `developers`
--
ALTER TABLE `developers`
  ADD UNIQUE KEY `USERNAME` (`USERNAME`);

--
-- Indexes for table `gamers`
--
ALTER TABLE `gamers`
  ADD UNIQUE KEY `USERNAME` (`USERNAME`);

--
-- Indexes for table `games`
--
ALTER TABLE `games`
  ADD PRIMARY KEY (`GAME_ID`);

--
-- Indexes for table `login_credentials`
--
ALTER TABLE `login_credentials`
  ADD PRIMARY KEY (`USERNAME`);

--
-- Indexes for table `moderators`
--
ALTER TABLE `moderators`
  ADD UNIQUE KEY `USERNAME` (`USERNAME`);

--
-- Indexes for table `upload_history`
--
ALTER TABLE `upload_history`
  ADD UNIQUE KEY `GAME_ID` (`GAME_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `advertisements`
--
ALTER TABLE `advertisements`
  MODIFY `AD_ID` int(5) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
