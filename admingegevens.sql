-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Gegenereerd op: 29 jun 2017 om 14:49
-- Serverversie: 5.6.33
-- PHP-versie: 7.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `theater_balkendam`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `admingegevens`
--

CREATE TABLE `admingegevens` (
  `idadmingegevens` int(12) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `admingegevens`
--

INSERT INTO `admingegevens` (`idadmingegevens`, `username`, `password`) VALUES
(1, 'Youri', 'Poncia'),
(2, 'Hicham', 'Allouchi'),
(3, 'Lindsey', 'Wit'),
(4, 'Luka', 'Kostic');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `admingegevens`
--
ALTER TABLE `admingegevens`
  ADD PRIMARY KEY (`idadmingegevens`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `admingegevens`
--
ALTER TABLE `admingegevens`
  MODIFY `idadmingegevens` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
