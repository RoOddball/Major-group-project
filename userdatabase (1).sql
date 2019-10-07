-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 27, 2019 at 04:00 PM
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
  `EventName` varchar(40) NOT NULL,
  `Fight` varchar(40) NOT NULL,
  `Date` date NOT NULL,
  `HasTakenPlace` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`EventName`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`EventName`, `Fight`, `Date`, `HasTakenPlace`) VALUES
('UFC 236', 'Holloway vs. Poirier', '2019-04-13', 1),
('UFC Fight Night 148', 'Thompson vs.Pettis', '2019-03-20', 1),
('UFC on ESPN 5', 'Darren Till vs. Jorge Masvidal', '2019-03-16', 1),
('UFC on ESPN 9', 'Cowboy vs. Iaquinta', '2019-05-04', 0);

-- --------------------------------------------------------

--
-- Table structure for table `fightcard`
--

DROP TABLE IF EXISTS `fightcard`;
CREATE TABLE IF NOT EXISTS `fightcard` (
  `EventName` varchar(40) NOT NULL,
  `Venue` varchar(20) NOT NULL,
  `Date` date NOT NULL,
  `FighterRed` varchar(30) NOT NULL,
  `FighterBlue` varchar(30) NOT NULL,
  `OddsRed` int(11) NOT NULL,
  `OddsBlue` int(11) NOT NULL,
  `Result` varchar(80) DEFAULT NULL,
  KEY `EventName` (`EventName`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fightcard`
--

INSERT INTO `fightcard` (`EventName`, `Venue`, `Date`, `FighterRed`, `FighterBlue`, `OddsRed`, `OddsBlue`, `Result`) VALUES
('UFC on ESPN 5', 'O2 Arena', '2019-03-16', 'Darren Till', 'Jorge Masvidal', -225, 187, 'Jorge Masival def. Darren Till by KO'),
('UFC Fight Night 148', 'Bridgestone Arena', '2019-03-23', 'Stephen Thompson', 'Anthony Pettis', -450, 350, 'Anthony Pettis def. Stephen Thomspon by KO'),
('UFC on ESPN 5', 'O2 Arena', '2019-03-16', 'Leon Edwards', 'Gunnar Nelson', 0, 0, 'Leon def. Gunnar by split decision'),
('UFC on ESPN 5', 'O2 Arena', '2019-03-16', 'Dominick Reyes', 'Volkan Oezdemir', 0, 0, 'Dominick def. Oezdemir by split decision'),
('UFC Fight Night 148', 'Bridgestone Arena', '2019-03-23', 'Curtis Blaydes', 'Justin Willis', 0, 0, 'Curtis def. Justin by unanimous decision'),
('UFC Fight Night 148', 'Bridgestone Arena', '2019-03-23', 'John Makdessi', 'Jesus Pinedo', 0, 0, 'John def. Jesus by unanimous decision'),
('UFC 236', 'State Farm Arena', '2019-04-13', 'Dustin Poirier', 'Max Holloway', 0, 0, 'Dustin def. Max by unanimous decision'),
('UFC 236', 'State Farm Arena', '2019-04-13', 'Israel Adesanya', 'Kelvin Gastelum', 0, 0, 'Israel def. Kelvin by unanimous decision'),
('UFC 236', 'State Farm Arena', '2019-04-13', 'Khalil Rountree', 'Eryk Anders', 0, 0, 'Khalil def. Eryk by unanimous decision'),
('UFC on ESPN 9', 'Canadian Tire Centre', '2019-05-03', 'Donald Cerrone', 'Al Iaquinta', 125, -155, NULL),
('UFC on ESPN 9', 'Canadian Tire Centre', '2019-05-03', 'Elias Theodoru', 'Derek Brunson', 100, -130, NULL),
('UFC on ESPN 9', 'Canadian Tire Centre', '2019-05-03', 'Shane Burgos', 'Cub Swanson', -165, 135, NULL);

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
-- Table structure for table `test`
--

DROP TABLE IF EXISTS `test`;
CREATE TABLE IF NOT EXISTS `test` (
  `gg` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
('ab', 'cd', 0),
('admin', 'admin', 1),
('test', 'test', 0);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `fightcard`
--
ALTER TABLE `fightcard`
  ADD CONSTRAINT `fightcard_ibfk_1` FOREIGN KEY (`EventName`) REFERENCES `event` (`EventName`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
