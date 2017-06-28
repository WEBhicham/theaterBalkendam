-- phpMyAdmin SQL Dump
-- version 4.4.15.5
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 28, 2017 at 07:51 PM
-- Server version: 5.6.34-log
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `theaterbalkendam`
--

-- --------------------------------------------------------

--
-- Table structure for table `vrienden`
--

CREATE TABLE IF NOT EXISTS `vrienden` (
  `idvrienden` int(11) NOT NULL,
  `naam` varchar(100) CHARACTER SET utf8 NOT NULL,
  `bedrag` int(100) NOT NULL,
  `beschrijving` varchar(1000) CHARACTER SET utf8 NOT NULL,
  `geslacht` varchar(20) CHARACTER SET utf8 NOT NULL,
  `email` varchar(100) CHARACTER SET utf8 NOT NULL,
  `betaalmethode` varchar(20) CHARACTER SET utf8 NOT NULL,
  `telnum` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vrienden`
--

INSERT INTO `vrienden` (`idvrienden`, `naam`, `bedrag`, `beschrijving`, `geslacht`, `email`, `betaalmethode`, `telnum`) VALUES
(1, 'Mike de Groot', 1259, 'Mike de Groot is al een lange tijd een grote partner en vriend van het Theater Balkendam. Elke maand doneert hij aan het Theater om het steeds groter en beter te maken.', 'Man', 'mikedegroot@live.com', 'Paypal', '0634567257'),
(2, 'Heidi Bloemen', 1000, '', 'Vrouw', 'heidibloemen@live.com', 'Mastercard', '0687464376'),
(3, 'Sanna Reiger', 100, '', 'Vrouw', 'sannareiger@live.com', 'Ideal', '0616765987'),
(4, 'Sjors Soeter', 50, '', 'Man', 'sjorssoeter@live.com', 'VISA', '0672458944'),
(5, 'Jan Keizer', 898, '', 'Man', 'jankeizer@live.com', 'Ideal', '0658785852');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `vrienden`
--
ALTER TABLE `vrienden`
  ADD PRIMARY KEY (`idvrienden`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `vrienden`
--
ALTER TABLE `vrienden`
  MODIFY `idvrienden` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
