-- phpMyAdmin SQL Dump
-- version 4.6.0
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 14, 2016 at 11:12 AM
-- Server version: 5.7.8-rc
-- PHP Version: 7.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fantastic_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `proizvodi`
--

CREATE TABLE `proizvodi2` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `naziv_proizvoda` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `tip_životinje` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `tip_proizvoda` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `opis_proizvoda` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `cijena` double NOT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `proizvodi`
--

INSERT INTO `proizvodi2` (`id`, `naziv_proizvoda`, `tip_životinje`, `tip_proizvoda`, `opis_proizvoda`, `cijena`) VALUES
(1, 'Predilica za mačke', 'mačka', 'igračka', 'Predilica za mačke omogućuje oštrenje noktiju mačke za bolji lov po žitu.', 21),
(2, 'Ampule kapi protiv krpelja', 'Mačka', 'Lijek', 'Ampule u kojima se nalaze kapi protiv krpelja. Jedna ampula je dostatna za mjesec dana bez krpelja. Može sadržavati olovo.', 44.29),
(3, 'Suha hrana za pse', 'pas', 'hrana', 'Suha hrana za pse s dodatkom kalcija i šumečih tableta', 45);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `proizvodi`
--


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
