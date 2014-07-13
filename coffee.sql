-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 11, 2014 at 06:25 PM
-- Server version: 5.5.32
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `coffee`
--

CREATE TABLE IF NOT EXISTS `coffee` (
  `shopname` varchar(100) NOT NULL,
  `shopmail` varchar(100) NOT NULL,
  `ownername` varchar(100) NOT NULL,
  `shopaddress` varchar(1000) NOT NULL,
  `shortdesc` varchar(100) NOT NULL,
  `lat` varchar(100) NOT NULL,
  `longi` varchar(100) NOT NULL,
  `id` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `coffee`
--

INSERT INTO `coffee` (`shopname`, `shopmail`, `ownername`, `shopaddress`, `shortdesc`, `lat`, `longi`, `id`) VALUES
('shop1', 'shop1@email.com', 'shop1', '184/196 Dimtimkar Road,Mumbai', 'first shop', '18.9644077', '72.8311048', '53bffcb81dd99'),
('shop2', 'shop2@email.com', 'shop2', 'pune,mumbai', 'second shop', '18.506399', '73.9104938', '53c00d5d3b788'),
('shop3', 'shop3@email.com', 'shop3', 'panvel,mumbai', 'third shop', '18.9894007', '73.1175162', '53c00ee0a3d5d');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
