-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 20, 2018 at 09:45 PM
-- Server version: 5.6.36-82.1-log
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `juliusa7_amusementparks`
--
CREATE DATABASE IF NOT EXISTS `juliusa7_amusementparks` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `juliusa7_amusementparks`;

-- --------------------------------------------------------

--
-- Stand-in structure for view `AvgRatings`
-- (See below for the actual view)
--
CREATE TABLE `AvgRatings` (
`park` varchar(255)
,`average` decimal(14,4)
);

-- --------------------------------------------------------

--
-- Table structure for table `Manufacturer`
--

CREATE TABLE `Manufacturer` (
  `name` varchar(255) NOT NULL DEFAULT '',
  `country` varchar(255) DEFAULT NULL,
  `year` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Manufacturer`
--

INSERT INTO `Manufacturer` (`name`, `country`, `year`) VALUES
('Chance Rides', 'USA', 1961),
('Philadelphia Toboggan Coasters', 'USA', 1904),
('Bolliger and Mabillard', 'Switzerland', 1988);

-- --------------------------------------------------------

--
-- Table structure for table `mscores`
--

CREATE TABLE `mscores` (
  `team` varchar(255) DEFAULT NULL,
  `day` varchar(255) DEFAULT NULL,
  `opp` varchar(255) DEFAULT NULL,
  `runs` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mscores`
--

INSERT INTO `mscores` (`team`, `day`, `opp`, `runs`) VALUES
('tigers', 'sunday', 'bay stars', 9),
('tigers', 'monday', NULL, NULL),
('tigers', 'sunday', 'bay stars', 9),
('tigers', 'monday', NULL, NULL),
('carp', 'sunday', NULL, NULL),
('carp', 'sunday', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `Owner`
--

CREATE TABLE `Owner` (
  `name` varchar(255) NOT NULL DEFAULT '',
  `year` int(4) DEFAULT NULL,
  `state` char(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Owner`
--

INSERT INTO `Owner` (`name`, `year`, `state`) VALUES
('Cedar Fair', 1983, 'OH'),
('Disney', 1923, 'CA'),
('Herschend Family Entertainment', 1950, 'GA'),
('Six Flags', 1961, 'TX'),
('Universal Parks and Resorts', 1964, 'FL');

-- --------------------------------------------------------

--
-- Table structure for table `Parks`
--

CREATE TABLE `Parks` (
  `name` varchar(255) NOT NULL DEFAULT '',
  `state` char(2) NOT NULL DEFAULT '',
  `price` varchar(255) DEFAULT NULL,
  `attendance` varchar(255) DEFAULT NULL,
  `owner` varchar(255) DEFAULT NULL,
  `built` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Parks`
--

INSERT INTO `Parks` (`name`, `state`, `price`, `attendance`, `owner`, `built`) VALUES
('Disneyland', 'CA', '99', '17,943,000', 'Disney', 1955),
('Carowinds', 'NC', '60', '2,130,000', 'Cedar Fair', 1973),
('Six Flags Great America', 'IL', '69', '2,950,000', 'Six Flags', 1976),
('Dollywood', 'TN', '69', '2,410,000', 'Herschend Family Entertainment', 1961),
('Cedar Point', 'OH', '62', '3,604,000', 'Cedar Fair', 1870);

-- --------------------------------------------------------

--
-- Table structure for table `pscores`
--

CREATE TABLE `pscores` (
  `team` varchar(255) DEFAULT NULL,
  `day` varchar(255) DEFAULT NULL,
  `opp` varchar(255) DEFAULT NULL,
  `runs` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pscores`
--

INSERT INTO `pscores` (`team`, `day`, `opp`, `runs`) VALUES
('dragons', 'sunday', 'swallows', 4),
('tigers', 'sunday', 'bay stars', 9),
('carp', 'sunday', NULL, NULL),
('swallows', 'sunday', 'dragons', 7),
('bay stars', 'sunday', 'tigers', 2),
('giants', 'sunday', NULL, NULL),
('dragons', 'monday', 'carp', NULL),
('tigers', 'monday', NULL, NULL),
('carp', 'monday', 'dragons', NULL),
('swallows', 'monday', 'giants', 0),
('bay stars', 'monday', NULL, NULL),
('giants', 'monday', 'swallows', 5);

-- --------------------------------------------------------

--
-- Table structure for table `Ratings`
--

CREATE TABLE `Ratings` (
  `id` int(4) DEFAULT NULL,
  `park` varchar(255) DEFAULT NULL,
  `rating` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Ratings`
--

INSERT INTO `Ratings` (`id`, `park`, `rating`) VALUES
(14, 'Disneyland', 5),
(16, 'Carowinds', 5),
(15, 'Dollywood', 3),
(18, 'Carowinds', 2),
(18, 'Cedar Point', 3);

-- --------------------------------------------------------

--
-- Table structure for table `Riders`
--

CREATE TABLE `Riders` (
  `id` int(4) NOT NULL,
  `firstName` varchar(255) DEFAULT NULL,
  `lastName` varchar(255) DEFAULT NULL,
  `sex` char(1) DEFAULT NULL,
  `age` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Riders`
--

INSERT INTO `Riders` (`id`, `firstName`, `lastName`, `sex`, `age`) VALUES
(14, 'John', 'Doe', 'M', 44),
(15, 'Doug', 'D', 'M', 36),
(16, 'Peter', 'P', 'M', 23),
(18, 'Jane', 'Doe', 'F', 22);

--
-- Triggers `Riders`
--
DELIMITER $$
CREATE TRIGGER `before_deleting_rider` BEFORE DELETE ON `Riders` FOR EACH ROW BEGIN
DELETE FROM Ratings
WHERE Ratings.id=old.id;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `Rides`
--

CREATE TABLE `Rides` (
  `name` varchar(255) NOT NULL DEFAULT '',
  `opened` int(4) NOT NULL DEFAULT '0',
  `park` varchar(255) DEFAULT NULL,
  `manufacturer` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Rides`
--

INSERT INTO `Rides` (`name`, `opened`, `park`, `manufacturer`, `type`) VALUES
('Afterburn', 1999, 'Carowinds', 'Bolliger and Mabillard', 'roller coaster'),
('Blue Streak', 1964, 'Cedar Point', 'Philadelphia Toboggan Coasters', 'roller coaster'),
('Cedar Creek Mine Ride', 1969, 'Cedar Point', 'Arrow Dynamics', 'roller coaster'),
('Columbia Carousel', 1976, 'Six Flags Great America', 'Chance Rides', 'carousel'),
('Lightning Rod', 2016, 'Dollywood', 'Rocky Mountain Construction', 'roller coaster'),
('Space Mountain', 2005, 'Disneyland', 'Dynamic Structures', 'roller coaster');

-- --------------------------------------------------------

--
-- Table structure for table `scores`
--

CREATE TABLE `scores` (
  `team` varchar(255) DEFAULT NULL,
  `opp` varchar(255) DEFAULT NULL,
  `runsfor` int(11) DEFAULT NULL,
  `runsagainst` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `scores`
--

INSERT INTO `scores` (`team`, `opp`, `runsfor`, `runsagainst`) VALUES
('dragons', 'tigers', 5, 3),
('carp', 'swallows', 4, 6),
('dragons', 'tigers', 5, 3),
('carp', 'swallows', 4, 6),
('bay stars', 'giants', 2, 1),
('marines', 'hawks', 5, 3),
('bay stars', 'giants', 2, 1),
('marines', 'hawks', 5, 3);

-- --------------------------------------------------------

--
-- Structure for view `AvgRatings`
--
DROP TABLE IF EXISTS `AvgRatings`;

CREATE ALGORITHM=UNDEFINED DEFINER=`juliusa7`@`localhost` SQL SECURITY DEFINER VIEW `AvgRatings`  AS  select `Ratings`.`park` AS `park`,avg(`Ratings`.`rating`) AS `average` from `Ratings` group by `Ratings`.`park` ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Owner`
--
ALTER TABLE `Owner`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `Ratings`
--
ALTER TABLE `Ratings`
  ADD KEY `id` (`id`);

--
-- Indexes for table `Riders`
--
ALTER TABLE `Riders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Rides`
--
ALTER TABLE `Rides`
  ADD PRIMARY KEY (`name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Riders`
--
ALTER TABLE `Riders`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `Ratings`
--
ALTER TABLE `Ratings`
  ADD CONSTRAINT `Ratings_ibfk_1` FOREIGN KEY (`id`) REFERENCES `Riders` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
