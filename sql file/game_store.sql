-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2019 at 05:21 PM
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
  `USERNAME` varchar(50) NOT NULL,
  `STATUS` varchar(100) NOT NULL,
  `updated_at` varchar(50) NOT NULL,
  `created_at` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `advertisements`
--

INSERT INTO `advertisements` (`AD_ID`, `AD_IMAGE`, `USERNAME`, `STATUS`, `updated_at`, `created_at`) VALUES
(4, 'AD_IMAGE/AD_5cbf40792c9f2.jpg', 'dd', 'PENDING', '2019-04-23 16:42:33', '2019-04-23 16:42:33'),
(5, 'AD_IMAGE/AD_5cbf41b381da5.png', 'dd', 'PENDING', '2019-04-23 16:47:47', '2019-04-23 16:47:47'),
(6, 'AD_IMAGE/AD_5cbf41dd25d12.jpg', 'dd', 'PENDING', '2019-04-23 16:48:29', '2019-04-23 16:48:29');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` int(50) NOT NULL,
  `country_code` varchar(100) NOT NULL,
  `country_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `country_code`, `country_name`) VALUES
(1, 'AF', 'Afghanistan'),
(2, 'AL', 'Albania'),
(3, 'DZ', 'Algeria'),
(4, 'DS', 'American Samoa'),
(5, 'AD', 'Andorra'),
(6, 'AO', 'Angola'),
(7, 'AI', 'Anguilla'),
(8, 'AQ', 'Antarctica'),
(9, 'AG', 'Antigua and Barbuda'),
(10, 'AR', 'Argentina'),
(11, 'AM', 'Armenia'),
(12, 'AW', 'Aruba'),
(13, 'AU', 'Australia'),
(14, 'AT', 'Austria'),
(15, 'AZ', 'Azerbaijan'),
(16, 'BS', 'Bahamas'),
(17, 'BH', 'Bahrain'),
(18, 'BD', 'Bangladesh'),
(19, 'BB', 'Barbados'),
(20, 'BY', 'Belarus'),
(21, 'BE', 'Belgium'),
(22, 'BZ', 'Belize'),
(23, 'BJ', 'Benin'),
(24, 'BM', 'Bermuda'),
(25, 'BT', 'Bhutan'),
(26, 'BO', 'Bolivia'),
(27, 'BA', 'Bosnia and Herzegovina'),
(28, 'BW', 'Botswana'),
(29, 'BV', 'Bouvet Island'),
(30, 'BR', 'Brazil'),
(31, 'IO', 'British Indian Ocean Territory'),
(32, 'BN', 'Brunei Darussalam'),
(33, 'BG', 'Bulgaria'),
(34, 'BF', 'Burkina Faso'),
(35, 'BI', 'Burundi'),
(36, 'KH', 'Cambodia'),
(37, 'CM', 'Cameroon'),
(38, 'CA', 'Canada'),
(39, 'CV', 'Cape Verde'),
(40, 'KY', 'Cayman Islands'),
(41, 'CF', 'Central African Republic'),
(42, 'TD', 'Chad'),
(43, 'CL', 'Chile'),
(44, 'CN', 'China'),
(45, 'CX', 'Christmas Island'),
(46, 'CC', 'Cocos (Keeling) Islands'),
(47, 'CO', 'Colombia'),
(48, 'KM', 'Comoros'),
(49, 'CG', 'Congo'),
(50, 'CK', 'Cook Islands'),
(51, 'CR', 'Costa Rica'),
(52, 'HR', 'Croatia (Hrvatska)'),
(53, 'CU', 'Cuba'),
(54, 'CY', 'Cyprus'),
(55, 'CZ', 'Czech Republic'),
(56, 'DK', 'Denmark'),
(57, 'DJ', 'Djibouti'),
(58, 'DM', 'Dominica'),
(59, 'DO', 'Dominican Republic'),
(60, 'TP', 'East Timor'),
(61, 'EC', 'Ecuador'),
(62, 'EG', 'Egypt'),
(63, 'SV', 'El Salvador'),
(64, 'GQ', 'Equatorial Guinea'),
(65, 'ER', 'Eritrea'),
(66, 'EE', 'Estonia'),
(67, 'ET', 'Ethiopia'),
(68, 'FK', 'Falkland Islands (Malvinas)'),
(69, 'FO', 'Faroe Islands'),
(70, 'FJ', 'Fiji'),
(71, 'FI', 'Finland'),
(72, 'FR', 'France'),
(73, 'FX', 'France, Metropolitan'),
(74, 'GF', 'French Guiana'),
(75, 'PF', 'French Polynesia'),
(76, 'TF', 'French Southern Territories'),
(77, 'GA', 'Gabon'),
(78, 'GM', 'Gambia'),
(79, 'GE', 'Georgia'),
(80, 'DE', 'Germany'),
(81, 'GH', 'Ghana'),
(82, 'GI', 'Gibraltar'),
(83, 'GK', 'Guernsey'),
(84, 'GR', 'Greece'),
(85, 'GL', 'Greenland'),
(86, 'GD', 'Grenada'),
(87, 'GP', 'Guadeloupe'),
(88, 'GU', 'Guam'),
(89, 'GT', 'Guatemala'),
(90, 'GN', 'Guinea'),
(91, 'GW', 'Guinea-Bissau'),
(92, 'GY', 'Guyana'),
(93, 'HT', 'Haiti'),
(94, 'HM', 'Heard and Mc Donald Islands'),
(95, 'HN', 'Honduras'),
(96, 'HK', 'Hong Kong'),
(97, 'HU', 'Hungary'),
(98, 'IS', 'Iceland'),
(99, 'IN', 'India'),
(100, 'IM', 'Isle of Man'),
(101, 'ID', 'Indonesia'),
(102, 'IR', 'Iran (Islamic Republic of)'),
(103, 'IQ', 'Iraq'),
(104, 'IE', 'Ireland'),
(105, 'IL', 'Israel'),
(106, 'IT', 'Italy'),
(107, 'CI', 'Ivory Coast'),
(108, 'JE', 'Jersey'),
(109, 'JM', 'Jamaica'),
(110, 'JP', 'Japan'),
(111, 'JO', 'Jordan'),
(112, 'KZ', 'Kazakhstan'),
(113, 'KE', 'Kenya'),
(114, 'KI', 'Kiribati'),
(115, 'KP', 'Korea, Democratic People\'s Republic of'),
(116, 'KR', 'Korea, Republic of'),
(117, 'XK', 'Kosovo'),
(118, 'KW', 'Kuwait'),
(119, 'KG', 'Kyrgyzstan'),
(120, 'LA', 'Lao People\'s Democratic Republic'),
(121, 'LV', 'Latvia'),
(122, 'LB', 'Lebanon'),
(123, 'LS', 'Lesotho'),
(124, 'LR', 'Liberia'),
(125, 'LY', 'Libyan Arab Jamahiriya'),
(126, 'LI', 'Liechtenstein'),
(127, 'LT', 'Lithuania'),
(128, 'LU', 'Luxembourg'),
(129, 'MO', 'Macau'),
(130, 'MK', 'Macedonia'),
(131, 'MG', 'Madagascar'),
(132, 'MW', 'Malawi'),
(133, 'MY', 'Malaysia'),
(134, 'MV', 'Maldives'),
(135, 'ML', 'Mali'),
(136, 'MT', 'Malta'),
(137, 'MH', 'Marshall Islands'),
(138, 'MQ', 'Martinique'),
(139, 'MR', 'Mauritania'),
(140, 'MU', 'Mauritius'),
(141, 'TY', 'Mayotte'),
(142, 'MX', 'Mexico'),
(143, 'FM', 'Micronesia, Federated States of'),
(144, 'MD', 'Moldova, Republic of'),
(145, 'MC', 'Monaco'),
(146, 'MN', 'Mongolia'),
(147, 'ME', 'Montenegro'),
(148, 'MS', 'Montserrat'),
(149, 'MA', 'Morocco'),
(150, 'MZ', 'Mozambique'),
(151, 'MM', 'Myanmar'),
(152, 'NA', 'Namibia'),
(153, 'NR', 'Nauru'),
(154, 'NP', 'Nepal'),
(155, 'NL', 'Netherlands'),
(156, 'AN', 'Netherlands Antilles'),
(157, 'NC', 'New Caledonia'),
(158, 'NZ', 'New Zealand'),
(159, 'NI', 'Nicaragua'),
(160, 'NE', 'Niger'),
(161, 'NG', 'Nigeria'),
(162, 'NU', 'Niue'),
(163, 'NF', 'Norfolk Island'),
(164, 'MP', 'Northern Mariana Islands'),
(165, 'NO', 'Norway'),
(166, 'OM', 'Oman'),
(167, 'PK', 'Pakistan'),
(168, 'PW', 'Palau'),
(169, 'PS', 'Palestine'),
(170, 'PA', 'Panama'),
(171, 'PG', 'Papua New Guinea'),
(172, 'PY', 'Paraguay'),
(173, 'PE', 'Peru'),
(174, 'PH', 'Philippines'),
(175, 'PN', 'Pitcairn'),
(176, 'PL', 'Poland'),
(177, 'PT', 'Portugal'),
(178, 'PR', 'Puerto Rico'),
(179, 'QA', 'Qatar'),
(180, 'RE', 'Reunion'),
(181, 'RO', 'Romania'),
(182, 'RU', 'Russian Federation'),
(183, 'RW', 'Rwanda'),
(184, 'KN', 'Saint Kitts and Nevis'),
(185, 'LC', 'Saint Lucia'),
(186, 'VC', 'Saint Vincent and the Grenadines'),
(187, 'WS', 'Samoa'),
(188, 'SM', 'San Marino'),
(189, 'ST', 'Sao Tome and Principe'),
(190, 'SA', 'Saudi Arabia'),
(191, 'SN', 'Senegal'),
(192, 'RS', 'Serbia'),
(193, 'SC', 'Seychelles'),
(194, 'SL', 'Sierra Leone'),
(195, 'SG', 'Singapore'),
(196, 'SK', 'Slovakia'),
(197, 'SI', 'Slovenia'),
(198, 'SB', 'Solomon Islands'),
(199, 'SO', 'Somalia'),
(200, 'ZA', 'South Africa'),
(201, 'GS', 'South Georgia South Sandwich Islands'),
(202, 'SS', 'South Sudan'),
(203, 'ES', 'Spain'),
(204, 'LK', 'Sri Lanka'),
(205, 'SH', 'St. Helena'),
(206, 'PM', 'St. Pierre and Miquelon'),
(207, 'SD', 'Sudan'),
(208, 'SR', 'Suriname'),
(209, 'SJ', 'Svalbard and Jan Mayen Islands'),
(210, 'SZ', 'Swaziland'),
(211, 'SE', 'Sweden'),
(212, 'CH', 'Switzerland'),
(213, 'SY', 'Syrian Arab Republic'),
(214, 'TW', 'Taiwan'),
(215, 'TJ', 'Tajikistan'),
(216, 'TZ', 'Tanzania, United Republic of'),
(217, 'TH', 'Thailand'),
(218, 'TG', 'Togo'),
(219, 'TK', 'Tokelau'),
(220, 'TO', 'Tonga'),
(221, 'TT', 'Trinidad and Tobago'),
(222, 'TN', 'Tunisia'),
(223, 'TR', 'Turkey'),
(224, 'TM', 'Turkmenistan'),
(225, 'TC', 'Turks and Caicos Islands'),
(226, 'TV', 'Tuvalu'),
(227, 'UG', 'Uganda'),
(228, 'UA', 'Ukraine'),
(229, 'AE', 'United Arab Emirates'),
(230, 'GB', 'United Kingdom'),
(231, 'US', 'United States'),
(232, 'UM', 'United States minor outlying islands'),
(233, 'UY', 'Uruguay'),
(234, 'UZ', 'Uzbekistan'),
(235, 'VU', 'Vanuatu'),
(236, 'VA', 'Vatican City State'),
(237, 'VE', 'Venezuela'),
(238, 'VN', 'Vietnam'),
(239, 'VG', 'Virgin Islands (British)'),
(240, 'VI', 'Virgin Islands (U.S.)'),
(241, 'WF', 'Wallis and Futuna Islands'),
(242, 'EH', 'Western Sahara'),
(243, 'YE', 'Yemen'),
(244, 'ZR', 'Zaire'),
(245, 'ZM', 'Zambia'),
(246, 'ZW', 'Zimbabwe');

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
  `G_MOBILE` varchar(50) NOT NULL,
  `G_DOB` varchar(50) NOT NULL,
  `G_CREDIT_CARD` varchar(100) NOT NULL,
  `G_IMAGE` varchar(200) NOT NULL,
  `updated_at` varchar(50) NOT NULL,
  `created_at` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gamers`
--

INSERT INTO `gamers` (`USERNAME`, `G_NAME`, `G_EMAIL`, `G_MOBILE`, `G_DOB`, `G_CREDIT_CARD`, `G_IMAGE`, `updated_at`, `created_at`) VALUES
('gg', 'Gamer One', 'Gamer01@gmail.com', '01689605510', '2019-04-30', '987654321', 'Image_Folder/profilePicture_5cbf4841eddb1.png', '2019-04-23 17:15:45', '2019-04-23 17:15:45'),
('gg2', 'Gamer Two', 'Gamer02@gmail.com', '01965610956', '2019-04-30', '', 'Image_Folder/profilePicture_5cc31aafe1d68.jpg', '2019-04-26 14:50:23', '2019-04-26 14:50:23');

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
('dd_Clash of Clans', 'Clash of Clans', 2, '5', 'Clash of Clans is a freemium mobile strategy video game developed and published by Finnish game developer Supercell.', 'game_files/Clash of Clans/Clash of Clans_FILE_5cbed6389226a.apk', '64-bit Windows 8 or later', 'Intel i5 6300 @ 3.8GHz or AMD FX 8150 @ 3.6GH', '4GB', '20GB', 'NVIDIA GeForce® GTX 1080Ti', '1024 KBPS or faster Internet connection', 'game_files/Clash of Clans/Clash of Clans_LOGO_5cbed704d7aab.jpg', 'game_files/Clash of Clans/Clash of Clans_SS_5cbed5c994da1.jpg', 'PENDING', '2019-04-23 09:12:36', '2019-04-22 20:04:20'),
('dd_Clash Royale', 'Clash Royale', 2, '40', 'Clash Royale is a video game developed and published by Supercell. The game combines elements from collectible card games, tower defense, and multiplayer online battle arena.', 'game_files/Clash Royale/Clash Royale_FILE_5cbe1ea243dec.apk', '64-bit Windows 7 or later', 'Intel i3 6300 @ 3.8GHz or AMD FX 8150 @ 3.6GH', '6GB', '30GB', 'NVIDIA GeForce® GTX 750 Ti', '512 KBPS or faster Internet connection', 'game_files/Clash Royale/Clash Royale_LOGO_5cbe1ea243dec.jpg', 'game_files/Clash Royale/Clash Royale_SS_5cbe1ea243dec.jpg', 'PENDING', '2019-04-22 20:05:54', '2019-04-22 20:05:54'),
('dd_Deep Fall', 'Deep Fall', 3, '45', 'Avoid crushing walls and any obstacles and the crushing walls in this quick-witted game of reflexes, as you try to keep your ball on the screen and help control its fall so it can reach as deep down as possible!', 'game_files/Deep Fall/Deep Fall_FILE_5cbcc43fde829.apk', '64-bit Windows 7 or later', 'Intel i7 6300 @ 3.8GHz or AMD FX 8150 @ 3.6GH', '6GB', '30GB', 'NVIDIA GeForce® GTX 720Ti', '512 KBPS or faster Internet connection', 'game_files/Deep Fall/Deep Fall_LOGO_5cbcc43fde829.jpg', 'game_files/Deep Fall/Deep Fall_SS_5cbcc43fde829.jpg', 'PENDING', '2019-04-23 09:16:08', '2019-04-21 19:27:59'),
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
  `CHAT_ID` varchar(50) NOT NULL,
  `SENDER_ID` varchar(50) NOT NULL,
  `RECEIVER_ID` varchar(50) NOT NULL,
  `MESSAGE` varchar(200) NOT NULL,
  `DATE` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hotline_messages`
--

INSERT INTO `hotline_messages` (`CHAT_ID`, `SENDER_ID`, `RECEIVER_ID`, `MESSAGE`, `DATE`) VALUES
('gg_dd', 'gg', 'dd', 'Hello !! Are you there', '2019-04-01 10:41:00.000000'),
('gg_dd', 'dd', 'gg', 'Yes. How can I help you ?', '2019-04-02 14:46:00.000000'),
('gg_dd', 'gg', 'dd', 'I am facing problem installing a game', '2019-04-03 09:00:00.000000'),
('gg_dd', 'dd', 'gg', 'Which game you are trying to install ?', '2019-04-05 07:00:00.000000'),
('gg2_dd', 'gg2', 'dd', 'Hi', '2019-04-06 18:00:00.000000'),
('gg2_dd', 'dd', 'gg2', 'Hello, Sir', '2019-04-07 11:44:00.000000'),
('gg2_dd', 'gg2', 'dd', 'what is the price of Need for speed Payback?', '2019-04-10 09:00:00.000000'),
('gg2_dd', 'dd', 'gg2', 'It\'s only 40$ sir', '2019-04-11 11:17:00.000000');

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
('dd', 'dd', 'DEVELOPER', 'ACTIVE', '2019-04-20 19:48:15', '2019-04-20 18:04:09'),
('gg', 'gg', 'GAMER', 'ACTIVE', '2019-04-23 17:15:46', '2019-04-23 17:15:46'),
('gg2', 'gg2', 'GAMER', 'ACTIVE', '2019-04-26 14:50:24', '2019-04-26 14:50:24');

-- --------------------------------------------------------

--
-- Table structure for table `moderators`
--

CREATE TABLE `moderators` (
  `USERNAME` varchar(50) NOT NULL,
  `MOD_NAME` varchar(100) NOT NULL,
  `MOD_ADDRESS` varchar(100) NOT NULL,
  `MOD_EMAIL` varchar(50) NOT NULL,
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
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `AD_ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=247;

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
