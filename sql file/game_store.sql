-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2019 at 10:07 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

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
  `USERNAME` varchar(50) NOT NULL,
  `updated_at` varchar(50) NOT NULL,
  `created_at` varchar(50) NOT NULL
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
  `DEV_LOGO` varchar(200) NOT NULL,
  `updated_at` varchar(50) NOT NULL,
  `created_at` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `developers`
--

INSERT INTO `developers` (`USERNAME`, `DEV_NAME`, `DEV_DESCRIPTION`, `DEV_ADDRESS`, `DEV_EMAIL`, `DEV_WEBSITE`, `DEV_CREDIT_CARD`, `DEV_LOGO`, `updated_at`, `created_at`) VALUES
('dd', 'Developer one', 'We are the craziest developer company in BD', 'Comilla', 'DeveloperOne@gmail.com', 'DeveloperOne.com.bd', '9876543210', 'Image_Folder/developerLogo_5cbb7154b5b72.png', '2019-04-20 19:21:56', '2019-04-20 18:04:09');

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
  `G_IMAGE` varchar(200) NOT NULL,
  `updated_at` varchar(50) NOT NULL,
  `created_at` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `games`
--

CREATE TABLE `games` (
  `GAME_ID` varchar(100) NOT NULL,
  `GAME_NAME` varchar(200) NOT NULL,
  `TYPE_ID` int(20) NOT NULL,
  `GAME_PRICE` varchar(50) NOT NULL,
  `GAME_DESCRIPTION` varchar(500) NOT NULL,
  `GAME_FILES` varchar(200) NOT NULL,
  `GAME_REQ_OS` varchar(100) NOT NULL,
  `GAME_REQ_CPU` varchar(100) NOT NULL,
  `GAME_REQ_RAM` varchar(100) NOT NULL,
  `GAME_REQ_HDD` varchar(100) NOT NULL,
  `GAME_REQ_GPU` varchar(100) NOT NULL,
  `GAME_REQ_NETWORK` varchar(100) NOT NULL,
  `GAME_LOGO` varchar(200) NOT NULL,
  `GAME_SS` varchar(200) NOT NULL,
  `GAME_STATUS` varchar(100) NOT NULL,
  `updated_at` varchar(50) NOT NULL,
  `created_at` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `games`
--

INSERT INTO `games` (`GAME_ID`, `GAME_NAME`, `TYPE_ID`, `GAME_PRICE`, `GAME_DESCRIPTION`, `GAME_FILES`, `GAME_REQ_OS`, `GAME_REQ_CPU`, `GAME_REQ_RAM`, `GAME_REQ_HDD`, `GAME_REQ_GPU`, `GAME_REQ_NETWORK`, `GAME_LOGO`, `GAME_SS`, `GAME_STATUS`, `updated_at`, `created_at`) VALUES
('dd_Clash of Clans', 'Clash of Clans', 2, '50', 'Clash of Clans is a freemium mobile strategy video game developed and published by Finnish game developer Supercell.', 'game_files/Clash of Clans/Clash of Clans_FILE_5cbe1e44671ea.apk', '64-bit Windows 7 or later', 'Intel i3 6300 @ 3.8GHz or AMD FX 8150 @ 3.6GH', '6GB', '30GB', 'NVIDIA GeForce® GTX 750 Ti', '512 KBPS or faster Internet connection', 'game_files/Clash of Clans/Clash of Clans_LOGO_5cbe1e44671ea.jpg', 'game_files/Clash of Clans/Clash of Clans_SS_5cbe1e44671ea.jpg', 'PENDING', '2019-04-22 20:04:20', '2019-04-22 20:04:20'),
('dd_Clash Royale', 'Clash Royale', 2, '40', 'Clash Royale is a video game developed and published by Supercell. The game combines elements from collectible card games, tower defense, and multiplayer online battle arena.', 'game_files/Clash Royale/Clash Royale_FILE_5cbe1ea243dec.apk', '64-bit Windows 7 or later', 'Intel i3 6300 @ 3.8GHz or AMD FX 8150 @ 3.6GH', '6GB', '30GB', 'NVIDIA GeForce® GTX 750 Ti', '512 KBPS or faster Internet connection', 'game_files/Clash Royale/Clash Royale_LOGO_5cbe1ea243dec.jpg', 'game_files/Clash Royale/Clash Royale_SS_5cbe1ea243dec.jpg', 'PENDING', '2019-04-22 20:05:54', '2019-04-22 20:05:54'),
('dd_Deep Fall', 'Deep Fall', 3, '10', 'Avoid crushing walls and any obstacles and the crushing walls in this quick-witted game of reflexes, as you try to keep your ball on the screen and help control its fall so it can reach as deep down as possible!', 'game_files/Deep Fall/Deep Fall_FILE_5cbcc43fde829.apk', '64-bit Windows 7 or later', 'Intel i3 6300 @ 3.8GHz or AMD FX 8150 @ 3.6GH', '6GB', '30GB', 'NVIDIA GeForce® GTX 750 Ti', '512 KBPS or faster Internet connection', 'game_files/Deep Fall/Deep Fall_LOGO_5cbcc43fde829.jpg', 'game_files/Deep Fall/Deep Fall_SS_5cbcc43fde829.jpg', 'PENDING', '2019-04-21 19:27:59', '2019-04-21 19:27:59'),
('dd_Temple Run 2', 'Temple Run 2', 2, '50', 'Avoid crushing walls and any obstacles and the crushing walls in this quick-witted game of reflexes, as you try to keep your ball on the screen and help control its fall so it can reach as deep down as possible!', 'game_files/Temple Run 2/Temple Run 2_FILE_5cbdd394dfe48.apk', '64-bit Windows 7 or later', 'Intel i3 6300 @ 3.8GHz or AMD FX 8150 @ 3.6GH', '6GB', '30GB', 'NVIDIA GeForce® GTX 750 Ti', '512 KBPS or faster Internet connection', 'game_files/Temple Run 2/Temple Run 2_LOGO_5cbdd394dfe48.jpg', 'game_files/Temple Run 2/Temple Run 2_SS_5cbdd394dfe48.jpg', 'PENDING', '2019-04-22 14:45:40', '2019-04-22 14:45:40');

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
-- Table structure for table `game_type`
--

CREATE TABLE `game_type` (
  `TYPE_ID` int(20) NOT NULL,
  `TYPE_NAME` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `game_type`
--

INSERT INTO `game_type` (`TYPE_ID`, `TYPE_NAME`) VALUES
(1, 'Action'),
(2, 'Adventure'),
(3, 'Acrade'),
(4, 'Board'),
(5, 'Card'),
(6, 'Casino'),
(7, 'Casual'),
(8, 'Educational'),
(9, 'Music'),
(10, 'Puzzle'),
(11, 'Racing'),
(12, 'Role Playing'),
(13, 'Simulation'),
(14, 'Sports'),
(15, 'Strategy'),
(16, 'Trivia'),
(17, 'Word'),
(18, 'Family');

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
  `USERNAME` varchar(50) NOT NULL,
  `PASSWORD` varchar(100) NOT NULL,
  `USER_TYPE` varchar(50) NOT NULL,
  `STATUS` varchar(50) NOT NULL,
  `updated_at` varchar(50) NOT NULL,
  `created_at` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_credentials`
--

INSERT INTO `login_credentials` (`USERNAME`, `PASSWORD`, `USER_TYPE`, `STATUS`, `updated_at`, `created_at`) VALUES
('dd', 'dd', 'DEVELOPER', 'ACTIVE', '2019-04-20 19:48:15', '2019-04-20 18:04:09');

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
  `MOD_IMAGE` varchar(200) NOT NULL,
  `updated_at` varchar(50) NOT NULL,
  `created_at` varchar(50) NOT NULL
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
  `GAME_ID` varchar(50) NOT NULL,
  `USERNAME` varchar(50) NOT NULL,
  `updated_at` varchar(100) NOT NULL,
  `created_at` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `upload_history`
--

INSERT INTO `upload_history` (`GAME_ID`, `USERNAME`, `updated_at`, `created_at`) VALUES
('dd_Clash of Clans', 'dd', '2019-04-22 20:04:20', '2019-04-22 20:04:20'),
('dd_Clash Royale', 'dd', '2019-04-22 20:05:54', '2019-04-22 20:05:54'),
('dd_Deep Fall', 'dd', '2019-04-21 19:27:59', '2019-04-21 19:27:59'),
('dd_Temple Run 2', 'dd', '2019-04-22 14:45:41', '2019-04-22 14:45:41');

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
-- Indexes for table `game_type`
--
ALTER TABLE `game_type`
  ADD PRIMARY KEY (`TYPE_ID`);

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
-- Indexes for table `upload_history`
--
ALTER TABLE `upload_history`
  ADD PRIMARY KEY (`GAME_ID`);

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
-- AUTO_INCREMENT for table `game_review`
--
ALTER TABLE `game_review`
  MODIFY `GR_ID` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `game_type`
--
ALTER TABLE `game_type`
  MODIFY `TYPE_ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `purchase_history`
--
ALTER TABLE `purchase_history`
  MODIFY `P_ID` int(20) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
