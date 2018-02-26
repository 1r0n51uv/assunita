-- phpMyAdmin SQL Dump
-- version 4.1.14.8
-- http://www.phpmyadmin.net
--
-- Host: db700141872.db.1and1.com
-- Generation Time: Feb 22, 2018 alle 16:05
-- Versione del server: 5.5.59-0+deb7u1-log
-- PHP Version: 5.4.45-0+deb7u12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db700141872`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `UTENTE`
--

CREATE TABLE IF NOT EXISTS `UTENTE` (
  `KEYUSER` int(11) NOT NULL AUTO_INCREMENT,
  `NOME` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `COGNOME` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `EMAIL` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `NASCITA` date NOT NULL,
  `PASSWORD` varchar(250) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`KEYUSER`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
