-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 31, 2019 at 02:46 PM
-- Server version: 5.7.23
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
-- Database: `userdatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

DROP TABLE IF EXISTS `event`;
CREATE TABLE IF NOT EXISTS `event` (
  `EventName` varchar(50) NOT NULL,
  `Venue` varchar(50) NOT NULL,
  `Fight` varchar(50) NOT NULL,
  `Date` date NOT NULL,
  `HasTakenPlace` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`EventName`, `Venue`, `Fight`, `Date`, `HasTakenPlace`) VALUES
('UFC Fight Night 162', 'Singapore Indoor Stadium', 'Ben Askren vs. Damian Maia', '2019-10-26', 1),
('UFC Fight Night 165', 'Sajik Arena', 'Ortega vs. Korean Zombie', '2019-12-21', 0);

-- --------------------------------------------------------

--
-- Table structure for table `fightcard`
--

DROP TABLE IF EXISTS `fightcard`;
CREATE TABLE IF NOT EXISTS `fightcard` (
  `EventName` varchar(50) NOT NULL,
  `FighterRed` varchar(50) NOT NULL,
  `FighterBlue` varchar(50) NOT NULL,
  `Result` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fightcard`
--

INSERT INTO `fightcard` (`EventName`, `FighterRed`, `FighterBlue`, `Result`) VALUES
('UFC Fight Night 162', 'Ben Askren', 'Damian Maia', 'Damian def. Ben Askren by RNC'),
('UFC Fight Night 165', 'Brian Ortega', 'Chan Sung Jung', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `fighter`
--

DROP TABLE IF EXISTS `fighter`;
CREATE TABLE IF NOT EXISTS `fighter` (
  `Name` varchar(40) NOT NULL,
  `Weightclass` varchar(20) NOT NULL,
  `WeightclassRank` int(11) NOT NULL,
  `Height` int(11) NOT NULL,
  `P4Prank` int(11) DEFAULT NULL,
  `Nationality` varchar(20) NOT NULL,
  `Record` varchar(10) NOT NULL,
  PRIMARY KEY (`Name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fighter`
--

INSERT INTO `fighter` (`Name`, `Weightclass`, `WeightclassRank`, `Height`, `P4Prank`, `Nationality`, `Record`) VALUES
('Daniel Cormier', 'Heavyweight', 1, 180, 1, 'American', '22-1-1'),
('Francis Ngannou', 'Heavyweight', 3, 193, NULL, 'Cameroonian', '13-3'),
('Jon Jones', 'Light heavyweight', 1, 193, 2, 'American', '24-1-1'),
('Khabib Nurmagomedov', 'Lightweight', 1, 178, 3, 'Russian', '27-0'),
('Max Holloway', 'Featherweight', 1, 180, NULL, 'Polynesian American', '20-4'),
('Stephen Thompson', 'Welterweight', 3, 183, NULL, 'American', '14-3-1'),
('Stipe Miocic', 'Heavyweight', 2, 193, NULL, 'American', '18-3');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `IsAdmin` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`, `IsAdmin`) VALUES
('admin', 'admin', 1),
('regular', 'password', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
