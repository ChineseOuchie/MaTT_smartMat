-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Gegenereerd op: 28 mei 2018 om 14:20
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
CREATE DATABASE IF NOT EXISTS `matt` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `matt`;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `loginGebruiker`
--

DROP TABLE IF EXISTS `loginGebruiker`;
CREATE TABLE `loginGebruiker` (
  `idloginGebruiker` int(11) NOT NULL,
  `password` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `loginGebruiker`
--

INSERT INTO `loginGebruiker` (`idloginGebruiker`, `password`, `email`) VALUES
(9, 'kipjes123', 'yoga@matt.nl');

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
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `userprofile`
--

INSERT INTO `userprofile` (`iduserprofile`, `firstname`, `sirname`, `age`, `gender`, `weight`, `score`, `achFirstExercise`, `achFirstFinish`, `achTouchZen`, `danBallet`, `danSalsa`, `danStreet`, `yogaEssentials`, `yogaHalfmoon`, `yogaHatha`, `image`) VALUES
(6, 'Yoga', 'Matt', 26, '', 79, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'yogamatt420.png'),
(10, 'Jeroen', 'Oers', 17, '', 60, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'jeroentje2000.png'),
(11, 'Paco', 'Lee', 12, '', 10, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sazuki_Swift.jpeg'),
(12, 'jeroen', 'van Oers', 17, 'female', 60, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL),
(13, 'kaas', 'melk', 17, 'male', 60, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL),
(14, 'good', 'good', 123, 'male', 123, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL);

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `loginGebruiker`
--
ALTER TABLE `loginGebruiker`
  ADD PRIMARY KEY (`idloginGebruiker`);

--
-- Indexen voor tabel `userprofile`
--
ALTER TABLE `userprofile`
  ADD PRIMARY KEY (`iduserprofile`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `loginGebruiker`
--
ALTER TABLE `loginGebruiker`
  MODIFY `idloginGebruiker` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT voor een tabel `userprofile`
--
ALTER TABLE `userprofile`
  MODIFY `iduserprofile` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
