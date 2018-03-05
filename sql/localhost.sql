-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Mar 05, 2018 at 04:20 PM
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
-- Table structure for table `loginGebruiker`
--

DROP TABLE IF EXISTS `loginGebruiker`;
CREATE TABLE `loginGebruiker` (
  `idloginGebruiker` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `loginGebruiker`
--

INSERT INTO `loginGebruiker` (`idloginGebruiker`, `username`, `password`, `email`) VALUES
(4, 'Yoga', 'KAAS', 'yoga@matt.nl'),
(5, 'kaas', 'yoga', 'kaas@yoga.com'),
(7, 'adn', 'kaasjes123', 'adn@crossbowjoey.nl'),
(8, 'adn', 'kaasjes123', 'adn@crossbowjoey.nl'),
(9, 'yogamatt420', 'kipjes123', 'yoga@matt.nl');

-- --------------------------------------------------------

--
-- Table structure for table `userprofile`
--

DROP TABLE IF EXISTS `userprofile`;
CREATE TABLE `userprofile` (
  `iduserprofile` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `infix` varchar(15) DEFAULT NULL,
  `sirname` varchar(30) NOT NULL,
  `age` int(11) NOT NULL,
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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userprofile`
--

INSERT INTO `userprofile` (`iduserprofile`, `username`, `firstname`, `infix`, `sirname`, `age`, `weight`, `score`, `achFirstExercise`, `achFirstFinish`, `achTouchZen`, `danBallet`, `danSalsa`, `danStreet`, `yogaEssentials`, `yogaHalfmoon`, `yogaHatha`, `image`) VALUES
(6, 'yogamatt420', 'Yoga', '', 'Matt', 26, 79, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `loginGebruiker`
--
ALTER TABLE `loginGebruiker`
  ADD PRIMARY KEY (`idloginGebruiker`);

--
-- Indexes for table `userprofile`
--
ALTER TABLE `userprofile`
  ADD PRIMARY KEY (`iduserprofile`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `loginGebruiker`
--
ALTER TABLE `loginGebruiker`
  MODIFY `idloginGebruiker` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `userprofile`
--
ALTER TABLE `userprofile`
  MODIFY `iduserprofile` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
