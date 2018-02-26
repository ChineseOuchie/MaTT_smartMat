-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Feb 26, 2018 at 02:38 PM
-- Server version: 5.5.42
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `matt`
--
CREATE DATABASE IF NOT EXISTS `matt` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `matt`;

-- --------------------------------------------------------

--
-- Table structure for table `achievements`
--

DROP TABLE IF EXISTS `achievements`;
CREATE TABLE `achievements` (
  `idachievements` int(11) NOT NULL,
  `firstExercise` varchar(30) NOT NULL,
  `firstFinish` varchar(30) NOT NULL,
  `touchZen` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `danceclasses`
--

DROP TABLE IF EXISTS `danceclasses`;
CREATE TABLE `danceclasses` (
  `iddanceclasses` int(11) NOT NULL,
  `streetDance` varchar(30) NOT NULL,
  `balletDance` varchar(30) NOT NULL,
  `salsaDance` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `userprofile`
--

DROP TABLE IF EXISTS `userprofile`;
CREATE TABLE `userprofile` (
  `iduserprofile` int(11) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `infix` varchar(15) DEFAULT NULL,
  `sirname` varchar(30) NOT NULL,
  `age` int(11) NOT NULL,
  `weight` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userprofile`
--

INSERT INTO `userprofile` (`iduserprofile`, `firstname`, `infix`, `sirname`, `age`, `weight`) VALUES
(1, 'test', NULL, 'account', 69, 69);

-- --------------------------------------------------------

--
-- Table structure for table `yogaclasses`
--

DROP TABLE IF EXISTS `yogaclasses`;
CREATE TABLE `yogaclasses` (
  `idyogaclasses` int(11) NOT NULL,
  `essentialsYoga` varchar(30) NOT NULL,
  `hathaYoga` varchar(30) NOT NULL,
  `halfmoonYoga` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `achievements`
--
ALTER TABLE `achievements`
  ADD PRIMARY KEY (`idachievements`);

--
-- Indexes for table `danceclasses`
--
ALTER TABLE `danceclasses`
  ADD PRIMARY KEY (`iddanceclasses`);

--
-- Indexes for table `userprofile`
--
ALTER TABLE `userprofile`
  ADD PRIMARY KEY (`iduserprofile`);

--
-- Indexes for table `yogaclasses`
--
ALTER TABLE `yogaclasses`
  ADD PRIMARY KEY (`idyogaclasses`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `achievements`
--
ALTER TABLE `achievements`
  MODIFY `idachievements` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `danceclasses`
--
ALTER TABLE `danceclasses`
  MODIFY `iddanceclasses` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `userprofile`
--
ALTER TABLE `userprofile`
  MODIFY `iduserprofile` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `yogaclasses`
--
ALTER TABLE `yogaclasses`
  MODIFY `idyogaclasses` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
