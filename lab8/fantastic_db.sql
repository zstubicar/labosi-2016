-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2016 at 12:27 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.6.19

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

CREATE TABLE `proizvodi` (
  `naziv_proizvoda` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `tip_životinje` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `tip_proizvoda` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `opis_proizvoda` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `cijena` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `proizvodi`
--

INSERT INTO `proizvodi` (`naziv_proizvoda`, `tip_životinje`, `tip_proizvoda`, `opis_proizvoda`, `cijena`) VALUES
('Predilica za mačke', 'mačka', 'igračka', 'Predilica za mačke omogućuje oštrenje noktiju mačke za bolji lov po žitu.', 21),
('Ampule kapi protiv krpelja', 'Mačka', 'Lijek', 'Ampule u kojima se nalaze kapi protiv krpelja. Jedna ampula je dostatna za mjesec dana bez krpelja. Može sadržavati olovo.', 44.29),
('Suha hrana za pse', 'pas', 'hrana', 'Suha hrana za pse s dodatkom kalcija i šumečih tableta', 45);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `proizvodi`
--
ALTER TABLE `proizvodi`
  ADD PRIMARY KEY (`cijena`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `proizvodi`
--
ALTER TABLE `proizvodi`
  MODIFY `cijena` double NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
