-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 01, 2019 at 07:19 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `game_store`
--

-- --------------------------------------------------------

--
-- Table structure for table `abuse_reports`
--

CREATE TABLE `abuse_reports` (
  `AR_ID` int(20) NOT NULL,
  `USERNAME` varchar(50) NOT NULL,
  `AR_TEXT` varchar(500) NOT NULL,
  `DATE` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `advertisements`
--

CREATE TABLE `advertisements` (
  `AD_ID` int(20) NOT NULL,
  `AD_IMAGE` varchar(200) NOT NULL,
  `USERNAME` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `developers`
--

CREATE TABLE `developers` (
  `USERNAME` varchar(50) NOT NULL,
  `DEV_NAME` varchar(100) NOT NULL,
  `DEV_DESCRIPTION` varchar(500) NOT NULL,
  `DEV_ADDRESS` varchar(100) NOT NULL,
  `DEV_EMAIL` varchar(50) NOT NULL,
  `DEV_WEBSITE` varchar(50) NOT NULL,
  `DEV_CREDIT_CARD` varchar(100) NOT NULL,
  `DEV_LOGO` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `forum_comments`
--

CREATE TABLE `forum_comments` (
  `C_ID` int(20) NOT NULL,
  `GAME-ID` int(20) NOT NULL,
  `COMMENT` varchar(200) NOT NULL,
  `C_TIME` date NOT NULL,
  `USERNAME` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `gamers`
--

CREATE TABLE `gamers` (
  `USERNAME` varchar(50) NOT NULL,
  `G_NAME` varchar(100) NOT NULL,
  `G_EMAIL` varchar(100) NOT NULL,
  `G_COUNTRY` varchar(50) NOT NULL,
  `G_MOBILE` varchar(50) NOT NULL,
  `G_GENDER` varchar(20) NOT NULL,
  `G_DOB` varchar(50) NOT NULL,
  `G_CREDIT_CARD` varchar(100) NOT NULL,
  `G_IMAGE` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `games`
--

CREATE TABLE `games` (
  `GAME_ID` int(50) NOT NULL,
  `GAME_NAME` varchar(200) NOT NULL,
  `GAME_PRICE` varchar(50) NOT NULL,
  `GAME_DESCRIPTION` varchar(500) NOT NULL,
  `GAME_REQ_OS` varchar(100) NOT NULL,
  `GAME_REQ_CPU` varchar(100) NOT NULL,
  `GAME_REQ_RAM` varchar(100) NOT NULL,
  `GAME_REQ_HDD` varchar(100) NOT NULL,
  `GAME_REQ_GPU` varchar(100) NOT NULL,
  `GAME_REW_NETWORK` varchar(100) NOT NULL,
  `GAME_LOGO` varchar(200) NOT NULL,
  `GAME_SS` varchar(200) NOT NULL,
  `GAME_STATUS` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `game_review`
--

CREATE TABLE `game_review` (
  `GR_ID` int(20) NOT NULL,
  `GAME_ID` int(20) NOT NULL,
  `USERNAME` varchar(50) NOT NULL,
  `SCORE` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hotline_messages`
--

CREATE TABLE `hotline_messages` (
  `DEV_USERNAME` varchar(50) NOT NULL,
  `G_USERNAME` varchar(50) NOT NULL,
  `MESSAGE` varchar(500) NOT NULL,
  `DATE` varchar(100) NOT NULL,
  `TIME` time(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login_credentials`
--

CREATE TABLE `login_credentials` (
  `USERNAME` varchar(100) NOT NULL,
  `PASSWORD` varchar(200) NOT NULL,
  `USER_TYPE` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `moderators`
--

CREATE TABLE `moderators` (
  `USERNAME` varchar(50) NOT NULL,
  `MOD_NAME` varchar(100) NOT NULL,
  `MOD_ADDRESS` varchar(100) NOT NULL,
  `MOD_EMAIL` varchar(50) NOT NULL,
  `MOD_GENDER` varchar(20) NOT NULL,
  `MOD_DOB` varchar(50) NOT NULL,
  `MOD_IMAGE` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `purchase_history`
--

CREATE TABLE `purchase_history` (
  `P_ID` int(20) NOT NULL,
  `USERNAME` varchar(50) NOT NULL,
  `GAME_ID` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `upload_history`
--

CREATE TABLE `upload_history` (
  `USERNAME` varchar(50) NOT NULL,
  `GAME_ID` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abuse_reports`
--
ALTER TABLE `abuse_reports`
  ADD PRIMARY KEY (`AR_ID`);

--
-- Indexes for table `advertisements`
--
ALTER TABLE `advertisements`
  ADD PRIMARY KEY (`AD_ID`);

--
-- Indexes for table `developers`
--
ALTER TABLE `developers`
  ADD PRIMARY KEY (`USERNAME`);

--
-- Indexes for table `forum_comments`
--
ALTER TABLE `forum_comments`
  ADD PRIMARY KEY (`C_ID`);

--
-- Indexes for table `gamers`
--
ALTER TABLE `gamers`
  ADD PRIMARY KEY (`USERNAME`);

--
-- Indexes for table `games`
--
ALTER TABLE `games`
  ADD PRIMARY KEY (`GAME_ID`);

--
-- Indexes for table `game_review`
--
ALTER TABLE `game_review`
  ADD PRIMARY KEY (`GR_ID`);

--
-- Indexes for table `login_credentials`
--
ALTER TABLE `login_credentials`
  ADD PRIMARY KEY (`USERNAME`);

--
-- Indexes for table `moderators`
--
ALTER TABLE `moderators`
  ADD PRIMARY KEY (`USERNAME`);

--
-- Indexes for table `purchase_history`
--
ALTER TABLE `purchase_history`
  ADD PRIMARY KEY (`P_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abuse_reports`
--
ALTER TABLE `abuse_reports`
  MODIFY `AR_ID` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `advertisements`
--
ALTER TABLE `advertisements`
  MODIFY `AD_ID` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `forum_comments`
--
ALTER TABLE `forum_comments`
  MODIFY `C_ID` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `games`
--
ALTER TABLE `games`
  MODIFY `GAME_ID` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `game_review`
--
ALTER TABLE `game_review`
  MODIFY `GR_ID` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `purchase_history`
--
ALTER TABLE `purchase_history`
  MODIFY `P_ID` int(20) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
