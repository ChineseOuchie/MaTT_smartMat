-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 11, 2018 at 12:38 PM
-- Server version: 5.6.34-log
-- PHP Version: 7.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `matt`
--
DROP DATABASE IF EXISTS `matt`;
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
-- Table structure for table `images`
--

DROP TABLE IF EXISTS `images`;
CREATE TABLE `images` (
  `idimages` int(11) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`idimages`, `image`) VALUES
(1, 'placeholder');

-- --------------------------------------------------------

--
-- Table structure for table `logingebruiker`
--

DROP TABLE IF EXISTS `logingebruiker`;
CREATE TABLE `logingebruiker` (
  `idloginGebruiker` int(11) NOT NULL,
  `password` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `userprofile`
--

DROP TABLE IF EXISTS `userprofile`;
CREATE TABLE `userprofile` (
  `iduserprofile` int(11) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `sirname` varchar(30) NOT NULL,
  `age` int(11) NOT NULL,
  `gender` varchar(15) NOT NULL,
  `weight` int(11) NOT NULL,
  `score` int(30) NOT NULL,
  `achFirstExercise` int(30) NOT NULL,
  `achFirstFinish` int(30) NOT NULL,
  `achTouchZen` int(30) NOT NULL,
  `danBallet` int(30) NOT NULL,
  `danSalsa` int(30) NOT NULL,
  `danStreet` int(30) NOT NULL,
  `yogaEssentials` int(30) NOT NULL,
  `yogaHalfmoon` int(30) NOT NULL,
  `yogaHatha` int(30) NOT NULL,
  `image` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`idimages`);

--
-- Indexes for table `logingebruiker`
--
ALTER TABLE `logingebruiker`
  ADD PRIMARY KEY (`idloginGebruiker`);

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
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `idimages` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `logingebruiker`
--
ALTER TABLE `logingebruiker`
  MODIFY `idloginGebruiker` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `userprofile`
--
ALTER TABLE `userprofile`
  MODIFY `iduserprofile` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `yogaclasses`
--
ALTER TABLE `yogaclasses`
  MODIFY `idyogaclasses` int(11) NOT NULL AUTO_INCREMENT;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
