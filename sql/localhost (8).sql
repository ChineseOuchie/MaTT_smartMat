-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Gegenereerd op: 18 jun 2018 om 11:39
-- Serverversie: 5.5.42
-- PHP-versie: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `matt`
--
DROP DATABASE `matt`;
CREATE DATABASE IF NOT EXISTS `matt` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `matt`;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `achievements`
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
-- Tabelstructuur voor tabel `danceclasses`
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
-- Tabelstructuur voor tabel `images`
--

DROP TABLE IF EXISTS `images`;
CREATE TABLE `images` (
  `idimages` int(11) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `images`
--

INSERT INTO `images` (`idimages`, `image`) VALUES
(1, 'placeholder');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `logingebruiker`
--

DROP TABLE IF EXISTS `logingebruiker`;
CREATE TABLE `logingebruiker` (
  `idloginGebruiker` int(11) NOT NULL,
  `password` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `logingebruiker`
--

INSERT INTO `logingebruiker` (`idloginGebruiker`, `password`, `email`) VALUES
(1, 'kipjes123', 'yoga@matt.nl');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `userprofile`
--

DROP TABLE IF EXISTS `userprofile`;
CREATE TABLE `userprofile` (
  `iduserprofile` int(11) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `sirname` varchar(30) NOT NULL,
  `age` int(11) NOT NULL,
  `gender` varchar(15) NOT NULL,
  `weight` int(11) NOT NULL,
  `height` int(5) NOT NULL,
  `exercisePref` varchar(30) NOT NULL,
  `exerciseRout` varchar(30) NOT NULL,
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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `userprofile`
--

INSERT INTO `userprofile` (`iduserprofile`, `firstname`, `sirname`, `age`, `gender`, `weight`, `height`, `exercisePref`, `exerciseRout`, `score`, `achFirstExercise`, `achFirstFinish`, `achTouchZen`, `danBallet`, `danSalsa`, `danStreet`, `yogaEssentials`, `yogaHalfmoon`, `yogaHatha`, `image`) VALUES
(1, 'Yoga', 'Matt', 28, 'male', 83, 0, '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `yogaclasses`
--

DROP TABLE IF EXISTS `yogaclasses`;
CREATE TABLE `yogaclasses` (
  `idyogaclasses` int(11) NOT NULL,
  `essentialsYoga` varchar(30) NOT NULL,
  `hathaYoga` varchar(30) NOT NULL,
  `halfmoonYoga` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `achievements`
--
ALTER TABLE `achievements`
  ADD PRIMARY KEY (`idachievements`);

--
-- Indexen voor tabel `danceclasses`
--
ALTER TABLE `danceclasses`
  ADD PRIMARY KEY (`iddanceclasses`);

--
-- Indexen voor tabel `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`idimages`);

--
-- Indexen voor tabel `logingebruiker`
--
ALTER TABLE `logingebruiker`
  ADD PRIMARY KEY (`idloginGebruiker`);

--
-- Indexen voor tabel `userprofile`
--
ALTER TABLE `userprofile`
  ADD PRIMARY KEY (`iduserprofile`);

--
-- Indexen voor tabel `yogaclasses`
--
ALTER TABLE `yogaclasses`
  ADD PRIMARY KEY (`idyogaclasses`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `achievements`
--
ALTER TABLE `achievements`
  MODIFY `idachievements` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT voor een tabel `danceclasses`
--
ALTER TABLE `danceclasses`
  MODIFY `iddanceclasses` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT voor een tabel `images`
--
ALTER TABLE `images`
  MODIFY `idimages` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT voor een tabel `logingebruiker`
--
ALTER TABLE `logingebruiker`
  MODIFY `idloginGebruiker` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT voor een tabel `userprofile`
--
ALTER TABLE `userprofile`
  MODIFY `iduserprofile` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT voor een tabel `yogaclasses`
--
ALTER TABLE `yogaclasses`
  MODIFY `idyogaclasses` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
