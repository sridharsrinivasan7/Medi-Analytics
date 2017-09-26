-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 05, 2017 at 02:52 AM
-- Server version: 5.7.18-0ubuntu0.16.04.1
-- PHP Version: 7.0.15-0ubuntu0.16.04.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ITMD523`
--
CREATE DATABASE IF NOT EXISTS `ITMD523` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `ITMD523`;

-- --------------------------------------------------------

--
-- Table structure for table `Healthdb`
--

CREATE TABLE `Healthdb` (
  `healthID` int(11) NOT NULL,
  `diabetes` varchar(10) DEFAULT NULL,
  `shortsight` varchar(10) DEFAULT NULL,
  `cholesterol` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Healthdb`
--

INSERT INTO `Healthdb` (`healthID`, `diabetes`, `shortsight`, `cholesterol`) VALUES
(1, 'yes', 'no', 'no'),
(2, 'no', 'yes', 'no'),
(3, 'no', 'no', 'yes'),
(4, 'yes', 'yes', 'no'),
(5, 'no', 'yes', 'yes'),
(6, 'yes', 'no', 'yes'),
(7, 'yes', 'yes', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `patientdetails`
--

CREATE TABLE `patientdetails` (
  `patientid` varchar(15) NOT NULL,
  `pname` varchar(20) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `POB` varchar(15) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `healthID` int(11) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patientdetails`
--

INSERT INTO `patientdetails` (`patientid`, `pname`, `age`, `POB`, `gender`, `healthID`, `phone`) VALUES
('PA104', 'TRUMP', 28, 'MEXICO', 'MALE', 2, '2895657651'),
('PA106', 'JAMES', 40, 'RUSSIA', 'MALE', 5, '9916096788'),
('PA107', 'SERENA', 25, 'CANADA', 'FEMALE', 2, '9916094655'),
('PA108', 'BOB', 23, 'USA', 'MALE', 2, '6555436353'),
('PA109', 'CARL', 27, 'USA', 'MALE', 2, '7713425678'),
('PA110', 'CHRISTY', 29, 'CANADA', 'FEMALE', 2, '7789865433'),
('PA111', 'KIM', 28, 'INDIA', 'FEMALE', 4, '3389082345'),
('PA112', 'JOHN', 30, 'SYRIA', 'MALE', 4, '7724567389'),
('PA113', 'STONECOLD', 54, 'USA', 'MALE', 7, '8865467899'),
('PA114', 'STEVE', 23, 'CANADA', 'MALE', 2, '8876545678'),
('PA115', 'ATRIA', 29, 'USA', 'FEMALE', 2, '8765432123'),
('PA116', 'SAPNA', 30, 'INDIA', 'FEMALE', 2, '4489088765'),
('PA117', 'MATHEW', 44, 'ENGLAND', 'MALE', 3, '4678923456'),
('PA118', 'MARIA', 24, 'USA', 'FEMALE', 2, '1123459876'),
('PA119', 'KRITY', 22, 'INDIA', 'FEMALE', 2, '6654788934'),
('PA120', 'DOLLY', 21, 'INDIA', 'FEMALE', 4, '7767897654'),
('PA121', 'SHAWN', 41, 'USA', 'MALE', 5, '3367829723'),
('PA122', 'NATASHA', 21, 'INDIA', 'FEMALE', 2, '4478987653'),
('PA123', 'GANESHA', 22, 'INDIA', 'MALE', 1, '789945612'),
('PA124', 'PIA', 27, 'INDIA', 'FEMALE', 2, '4456777654'),
('PA125', 'PAYAL', 34, 'INDIA', 'FEMALE', 6, '2256756789'),
('PA126', 'CHRIS', 24, 'USA', 'MALE', 1, '9987678988'),
('PA127', 'KOHLI', 28, 'INDIA', 'MALE', 2, '9987654566'),
('PA128', 'WATSON', 33, 'AUSTRALIA', 'MALE', 3, '0098789877'),
('PA129', 'MILLS', 29, 'SOUTH AFRICA', 'MALE', 2, '6678763544'),
('PA130', 'DEVILLERS', 40, 'SOUTH AFRICA', 'MALE', 6, '7789876545'),
('PA131', 'AFRIDI', 38, 'PAKISTAN', 'MALE', 7, '5565456789'),
('PA132', 'SEQUIRA', 22, 'CANADA', 'FEMALE', 2, '2289876543'),
('PA133', 'SEBASTIN', 43, 'USA', 'MALE', 4, '7789847654'),
('PA134', 'JAKE', 23, 'ENGLAND', 'MALE', 2, '5567854345'),
('PA135', 'JACOB', 33, 'MEXICO', 'MALE', 3, '6678765456'),
('PA136', 'BELLA', 56, 'USA', 'FEMALE', 7, '5567689000'),
('PA137', 'ELLA', 34, 'CANADA', 'FEMALE', 1, '8876567890'),
('PA138', 'EMMA', 21, 'USA', 'FEMALE', 2, '8875689876'),
('PA139', 'AARON', 37, 'AUSTRALIA', 'MALE', 6, '5534567880'),
('PA140', 'ALEX', 21, 'CANADA', 'MALE', 2, '9987654345'),
('PA141', 'ALMA', 31, 'USA', 'FEMALE', 4, '9876556678'),
('PA142', 'BAILEY', 40, 'ENGLAND', 'FEMALE', 5, '5336789876'),
('PA143', 'JOSIE', 21, 'USA', 'FEMALE', 2, '5678765456'),
('PA144', 'JESS', 60, 'CANADA', 'MALE', 7, '7784765467'),
('PA145', 'GEORGE', 31, 'RUSSIA', 'MALE', 5, '5653678376'),
('PA146', 'BUSH', 31, 'SYRIA', 'MALE', 7, '7787465364'),
('PA147', 'ZACK', 34, 'USA', 'MALE', 4, '4097655647'),
('PA148', 'EFFRONI', 41, 'CANADA', 'FEMALE', 3, '7768897656'),
('PA149', 'ROCK', 30, 'USA', 'MALE', 2, '8876567890'),
('PA150', 'MILEY', 29, 'USA', 'FEMALE', 2, '6678987654'),
('PA151', 'RICHI', 25, 'CHINA', 'male', 2, '434234242'),
('PA152', 'VIKAS', 25, 'INDIA', 'male', 1, '7889599163');

-- --------------------------------------------------------

--
-- Table structure for table `USER-LOGIN`
--

CREATE TABLE `USER-LOGIN` (
  `USERID` varchar(25) NOT NULL,
  `PASSWORD` varchar(15) DEFAULT NULL,
  `TYPE` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='HOSPITAL-REP DETAILS';

--
-- Dumping data for table `USER-LOGIN`
--

INSERT INTO `USER-LOGIN` (`USERID`, `PASSWORD`, `TYPE`) VALUES
('admin', 'iitchicago', 'admin'),
('david', 'buffer2', 'rep'),
('manager', 'illinois', 'mgt'),
('sridhar', 'buffer1', 'rep');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Healthdb`
--
ALTER TABLE `Healthdb`
  ADD PRIMARY KEY (`healthID`);

--
-- Indexes for table `patientdetails`
--
ALTER TABLE `patientdetails`
  ADD PRIMARY KEY (`patientid`),
  ADD KEY `fk1` (`healthID`);

--
-- Indexes for table `USER-LOGIN`
--
ALTER TABLE `USER-LOGIN`
  ADD PRIMARY KEY (`USERID`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `patientdetails`
--
ALTER TABLE `patientdetails`
  ADD CONSTRAINT `fk1` FOREIGN KEY (`healthID`) REFERENCES `Healthdb` (`healthID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
