-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Gegenereerd op: 29 jun 2017 om 15:29
-- Serverversie: 5.6.33
-- PHP-versie: 7.0.12

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

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `seizoen_2017_2018`
--

CREATE TABLE `seizoen_2017_2018` (
  `idseizoen_2017_2018` int(11) NOT NULL,
  `img` varchar(40) NOT NULL,
  `dag` varchar(20) NOT NULL,
  `datum` varchar(20) NOT NULL,
  `maand` varchar(20) NOT NULL,
  `naam` varchar(50) NOT NULL,
  `beschrijving` varchar(50) NOT NULL,
  `genre` varchar(15) NOT NULL,
  `jaar` int(11) NOT NULL,
  `soort` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Gegevens worden geëxporteerd voor tabel `seizoen_2017_2018`
--

INSERT INTO `seizoen_2017_2018` (`idseizoen_2017_2018`, `img`, `dag`, `datum`, `maand`, `naam`, `beschrijving`, `genre`, `jaar`, `soort`) VALUES
(0, 'fredDelfgaauw.JPG', 'Za', '10', '03', 'Fred Delfgaauw & Bert van den Brink', 'Vliegen met een vleugel', 'Toneel', 2018, 'Muziek'),
(1, 'orkestToermalijn.JPG', 'Zo', '22', '04', 'Orkest Toermalijn', 'Lenteconcert', 'Gastproductie', 2017, 'Muziek'),
(2, 'erikMesie.JPG', 'Vr', '27', '04', 'Erik Mesie', 'Een toontje lager', 'Muziek', 2018, 'Muziek'),
(3, 'fanfarekorpsDerGenie.JPG', 'Za', '05', '05', 'Fanfarekorps der Genie', 'Bevrijdingsconcert', 'Gastproductie', 2017, 'Muziek'),
(4, 'bergetLewis.JPG', 'Do', '05', '04', 'Berget Lewis', 'Zoals ik ben (reprise)', 'Muziek', 2018, 'Muziek'),
(6, 'gerardVanMaasakkers.JPG', 'Za', '11', '02', 'Gerard van Maasakkers', 'Lijflied', 'Muziek', 2018, 'Muziek'),
(7, 'monicaTriga.JPG', 'Za', '04', '02', 'Monica Triga', 'Africa Lusitana', 'Wereldecho\'s', 2018, 'Muziek'),
(8, 'hetGrootNiet.JPG', 'Do', '12', '01 ', 'Het Groot Niet Te Vermijden', 'Save the last dance', 'Muziektheater', 2018, 'Muziek'),
(9, 'balkendammerMannenkoor.JPG', 'Zo', '08', '01', 'Balkendammer Mannenkoor', 'Nieuwjaarsconcert', 'Gastproductie', 2018, 'Muziek'),
(10, 'balkendammerMannenkoor.JPG', 'Zo', '08', '01', 'Balkendammer Mannenkoor', 'Nieuwjaarsconcert', 'Gastproductie', 2018, 'Muziek'),
(11, 'harmonieKunst.JPG', 'Za', '07', '01', 'Harmonie Kunst & Vriendschap', 'Nieuwjaarsconcert', 'Gastproductie', 2018, 'Muziek'),
(12, 'lazySundayAfternoon.JPG', 'Zo', '18', '12', 'Lazy Sunday Afternoon', 'Double 5', 'Gastproductie', 2017, 'Muziek'),
(13, 'drieDonkenBlaaskapel.JPG', 'Zo', '11', '12', 'Drie Donken Blaaskapel', '', 'Gastproductie', 2017, 'Muziek'),
(14, 'petraBerger.JPG', 'Za', '10', '12', 'Petra Berger & liveband', 'Touched by Streisand', 'Muziek', 2017, 'Muziek'),
(15, 'suzetteIsabelle.JPG', 'Vr', '09', '12', 'Suzette & Isabelle Hendriks', 'Hold on', 'Gastproductie', 2017, 'Muziek'),
(16, 'regionaalSeniorenorkest.JPG', 'Zo', '27', '11', 'Regionaal Seniorenorkest De Meierij', 'Jubileumconcert', 'Gastproductie', 2017, 'Muziek'),
(17, 'marieChristien.JPG', 'Do', '24', '11', 'Marie Christien', 'Marie Crescendo-PLUS', 'Muziek', 2017, 'Muziek'),
(18, 'birgitSchuurman.JPG', 'Za', '19', '11', 'Birgit Schuurman', 'Het Grote Verlangen', 'Muziek', 2017, 'Muziek'),
(19, 'consonanti.JPG', 'Zo', '13', '11', 'Consonati o.I.v Dirigent Wolf Eekhof', 'Hedendaagse Brabantse Componisten', 'Gastproductie', 2017, 'Muziek'),
(20, 'fanfarekorpsDerGenie.JPG', 'Za', '29', '10', 'Fanfarekorps der Genie', '', 'Gastproductie', 2017, 'Muziek'),
(21, 'alderliefste.JPG', 'Vr', '21', '10', 'Alderliefste', 'Trois (reprise)', 'Muziek', 2017, 'Muziek'),
(22, 'regionaalSeniorenorkest.JPG', 'Do', '20', '10', 'Regionaal Seniorenorkest De Meierij', 'Najaarsconcert', 'Muziek', 2017, 'Muziek'),
(23, 'koorVoluum.JPG', 'Zo', '16', '10', 'Koor Voluum', 'Op die fiets!', 'Gastproductie', 2017, 'Muziek'),
(24, 'koorVoluum.JPG', 'Za', '15', '10', 'Koor Voluum', 'Op die fiets!', 'Gastproductie', 2017, 'Muziek'),
(25, 'koorVoluum.JPG', 'Vr', '14', '10', 'Koor Voluum', 'Op die fiets!', 'Gastproductie', 2017, 'Muziek'),
(26, 'montezuma.JPG', 'Vr', '07', '10', 'Montezuma\'s Revenge', 'Strikes Back (try out)', 'Muziek', 2017, 'Muziek'),
(27, 'jimiBellmartin.JPG', 'Vr', '30', '09', 'Jimi Bellmartin', 'Heartbeats of Barak 23', 'Gastproductie', 2017, 'Muziek'),
(28, 'theBritishPop.JPG', 'Do', '29', '09', 'The British Pop Invasion', 'De beste Britse popmuziek uit de sixties (UK)', 'Muziek', 2017, 'Muziek'),
(29, 'saskia.JPG', 'Do', '22', '09', 'Saskia & Serge', 'Sterker Dan Ooit', 'Muziek', 2017, 'Muziek'),
(30, 'theCops.JPG', 'Zo', '18', '09', 'The C.O.P.S.', 'A tribute to The Police & Sting', 'Muziek', 2017, 'Muziek'),
(31, 'newCoolCollective.JPG', 'Za', '17', '09', 'New Cool Collective', 'Seizoensopening!', 'Muziek', 2017, 'Muziek'),
(32, 'traneMetTuite.JPG', 'Vr', '09', '09', 'Trane Met Tuite ', 'Twedehants Smartlappesjow', 'Gastproductie', 2017, 'Muziek'),
(33, 'keesTorn.JPG', 'Za', '28', '04', 'Kees Torn', 'Loze Kreten', 'Cabaret', 2018, 'Cabaret'),
(34, 'luiderEnVan.JPG', 'Za', '12', '05', 'Luider en van Donselaar', 'Klittenband', 'Cabaret', 2018, 'Cabaret'),
(35, 'engeBuren.JPG', 'Vr', '18', '05', 'Enge Buren', 'Reuring', 'Cabaret', 2018, 'Cabaret'),
(36, 'dorineWiersma.JPG', 'Za', '19', '05', 'Dorine Wiersma', 'Goed zo, Dorine! (reprise)', 'Cabaret', 2018, 'Cabaret'),
(37, 'saraKroos.JPG', 'Do', '12', '04', 'Sara Kroos', 'Voor de leeuwen', 'Cabaret', 2018, 'Cabaret'),
(38, 'joepOnderdelinden.JPG', 'Za', '07', '04', 'Joep Onderlinden', 'NAT (reprise)', 'Cabaret', 2018, 'Cabaret'),
(39, 'peterFaber.JPG', 'Za', '31', '03', 'Peter Faber', 'Caveman (reprise)', 'Cabaret', 2018, 'Cabaret'),
(40, 'nightOfComedy.JPG', 'Vr', '30', '03', 'Night of Comedy', 'News of Comedy', 'Cabaret ', 2018, 'Cabaret'),
(41, 'harryGlotzback.JPG', 'Vr', '02', '03', 'Harry Glotzbach', 'EL Nino (reprise)', 'Cabaret', 2018, 'Cabaret'),
(42, 'vrouwHolland.JPG', 'Za', '14', '01', 'Vrouw Holland', 'Vrijheid van de slechte smaak (reprise)', 'Cabaret', 2018, 'Cabaret'),
(43, 'kerstMetDeKleinkeinder.JPG', 'Za', '17', '02', 'Kerst met de Kleinkeinder', 'De Kerststal', 'Muziektheater', 2017, 'Cabaret'),
(44, 'amsterdamsKleinkunst.JPG', 'Vr', '02', '12', 'Amsterdams Kleinkunst Festival 2017', 'met Louise Korthals, Hermitage en Poolvogel', 'Cabaret', 2017, 'Cabaret'),
(45, 'nilgunYerli.JPG', 'Za', '26', '11', 'Nilgun Yerli', 'Weer met Henk', 'Cabaret', 2017, 'Cabaret'),
(46, 'lebbis.JPG', 'Do', '17', '11', 'Lebbis', 'Branding (reprise)', 'Cabaret', 2017, 'Cabaret'),
(47, 'katinkaPolderman.JPG', 'Do', '03', '11', 'Katinka Polderman', 'Polderman tuigt af (reprise)', 'Cabaret', 2017, 'Cabaret'),
(48, 'help!.JPG', 'Wo', '26', '10', 'Help! ik heb mijn vrouw zwanger gemaakt', 'met o.a. Bastiaan Ragas (try out)', 'Muziektheater', 2017, 'Cabaret'),
(49, 'freekDeJonge.JPG', 'Za', '08', '10', 'Freek de Jonge ', 'NEVEN (reprise)', 'Cabaret', 2017, 'Cabaret'),
(50, 'wurreWurre.JPG', 'Za', '01', '10', 'Wurre Wurre', 'Broekvent', 'Cabaret', 2017, 'Cabaret'),
(51, 'leonVanDer.JPG', 'Za', '24', '09', 'Leon van der Zanden', 'Vruchtvlees (try out)', 'Cabaret', 2017, 'Cabaret'),
(52, 'damesVoorNa.JPG', 'Wo', '21', '09', 'Dames voor na Vieren', 'Koude Kermis (reprise)', 'Cabaret', 2017, 'Cabaret'),
(53, 'theaterverenigingBalkendam.JPG', 'Do', '19', '04', 'Theatervereniging Balkendam', 'Pompen of Verzuipen', 'Gastproductie', 2018, 'Toneel'),
(54, 'theaterverenigingBalkendam.JPG', 'Vr', '20', '04', 'Theatervereniging Balkendam', 'Pompen of Verzuipen', 'Gastproductie', 2018, 'Toneel'),
(55, 'theaterverenigingBalkendam.JPG', 'Za', '21', '04', 'Theatervereniging Balkendam', 'Pompen of Verzuipen', 'Gastproductie', 2018, 'Toneel'),
(56, 'theaterverenigingBalkendam.JPG', 'Do', '19', '03', 'Theatervereniging Balkendam', 'Pompen of Verzuipen', 'Senioren', 2018, 'Toneel'),
(57, 'nelKars.JPG', 'Do', '29', '03', 'Nel Kars', 'Buigen voor Oranje', 'Senioren', 2018, 'Toneel'),
(58, 'fredDelfgaauw.JPG', 'Za', '10', '03', 'Fred Delfgaauw & Bert van den Brink', 'Vliegen met een vleugel', 'Toneel', 2018, 'Toneel'),
(59, 'nelKars.JPG', 'Do', '08', '03', 'Nel Kars', 'Buigen Voor Oranje', 'Toneel', 2018, 'Toneel'),
(60, 'hetThrillerTheater.JPG', 'Vr', '10', '02', 'Het Thriller Theater ', 'Paul Vlaanderen en het mysterie... (reprise)', 'Toneel', 2018, 'Toneel'),
(61, 'ToneelculbDoe.JPG', 'Za', '18', '01', 'Toneelclub Doe\'k', '', 'Gastproductie', 2018, 'Toneel'),
(62, 'ToneelculbDoe.JPG', 'Vr', '27', '01', 'Toneelclub Doe\'k', '', 'Gastproductie', 2018, 'Toneel'),
(63, 'ToneelculbDoe.JPG', 'Do', '26', '01', 'Toneelclub Doe\'k ', '', 'Toneel', 2018, 'Toneel'),
(64, 'doek!VanMaria.JPG', 'Za', '21', '01', 'DOEK! van Maria Goos', 'met Loes Luca en Peter Blok (reprise)', 'Toneel', 2018, 'Toneel'),
(65, 'hormonologen.JPG', 'Vr', '20', '01', 'Hormonologen', 'met o.a. Nelleke van der Krogt (reprise)', 'Toneel', 2018, 'Toneel'),
(66, 'theatergroepSpring.JPG', 'Zo', '06', '11', 'Theatergroep Spring', 'Spring in \'t Louvre', 'Gastproductie', 2017, 'Toneel'),
(67, 'isabelle.JPG', 'Di', '01', '05', 'Isabelle', 'met o.a. Halina Reijn en Tineke Caels', 'Film', 2018, 'Films'),
(68, 'patatjeOorlog.JPG', 'Wo', '02', '05', 'Patatje Oorlog (6+)', 'met o.a. Rifka Lodeizen en Johnny de Mol', 'Film', 2018, 'Films'),
(69, 'dolfjeWeerwolfje.JPG', 'Do', '03', '05', 'Dolfje Weerwolfje (6+)', 'met o.a. Ole Kroes en Remko Vr', 'Film', 2018, 'Films'),
(70, 'janeEyre.JPG', 'Di', '08', '05', 'Jane Eyre', 'met o.a. Mia Wasikowska en Michael Fassbender', 'Film', 2018, 'Films'),
(71, 'deHeinekenOntvoering.JPG', 'Di', '15', '05', 'De Heineken Ontvoering', 'met o.a. Rutger Hauer en Gijs Naber', 'Film', 2018, 'Films'),
(72, 'deBendeVanOss.JPG', 'Di', '17', '04', 'De Bende van Oss', 'met o.a. Sylvia Hoeks en Marcel Musters', 'Film', 2018, 'Films'),
(73, 'novaZembla.JPG', 'Di', '10', '04', 'Nova Zembla 2D', 'met o.a. Robert de Hoog en Doutzen Kroes', 'Film', 2018, 'Films'),
(74, 'lotus.JPG', 'Di', '13', '03', 'Lotus', 'met o.a. Monic Hendrickx en Chris Zegers', 'Film', 2017, 'Films'),
(75, 'midnightInParis.JPG', 'Di', '06', '03', 'Midnight in Paris', 'met o.a. Owen Wilson en Rachel McAdams', 'Film', 2017, 'Films'),
(76, 'tousLesSoleils.JPG', 'Di', '14', '02', 'Tous les Soleils', 'met o.a. Stefano Accorsi en Lisa Cipriani', 'Film', 2017, 'Films'),
(77, 'madeInDagenham.JPG', 'Di', '07', '02', 'Made in Dagenharm', 'met o.a. Sally Hawkins en Andrea Riseborough', 'Film', 2017, 'Films'),
(78, '127Hours.JPG', 'Di', '31', '01', '127 Hours', 'met o.a. James Franco en Amber Tamblyn', 'Film ', 2017, 'Films'),
(79, 'orangesAndSunshine.JPG', 'Di', '17', '01', 'Oranges and Sunshine', 'met o.a. Hugo Weaving en Emily Watson', 'Film', 2017, 'Films');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `vrienden`
--

CREATE TABLE `vrienden` (
  `idvrienden` int(11) NOT NULL,
  `naam` varchar(100) CHARACTER SET utf8 NOT NULL,
  `bedrag` int(100) NOT NULL,
  `beschrijving` varchar(1000) CHARACTER SET utf8 NOT NULL,
  `geslacht` varchar(20) CHARACTER SET utf8 NOT NULL,
  `email` varchar(100) CHARACTER SET utf8 NOT NULL,
  `betaalmethode` varchar(20) CHARACTER SET utf8 NOT NULL,
  `telnum` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `vrienden`
--

INSERT INTO `vrienden` (`idvrienden`, `naam`, `bedrag`, `beschrijving`, `geslacht`, `email`, `betaalmethode`, `telnum`) VALUES
(1, 'Mike de Groot', 1259, 'Mike de Groot is al een lange tijd een grote partner en vriend van het Theater Balkendam. Elke maand doneert hij aan het Theater om het steeds groter en beter te maken.', 'Man', 'mikedegroot@live.com', 'Paypal', '0634567257'),
(2, 'Heidi Bloemen', 1000, '', 'Vrouw', 'heidibloemen@live.com', 'Mastercard', '0687464376'),
(5, 'Jan Keizer', 898, '', 'Man', 'jankeizer@live.com', 'Ideal', '0658785852');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `admingegevens`
--
ALTER TABLE `admingegevens`
  ADD PRIMARY KEY (`idadmingegevens`);

--
-- Indexen voor tabel `seizoen_2017_2018`
--
ALTER TABLE `seizoen_2017_2018`
  ADD PRIMARY KEY (`idseizoen_2017_2018`);

--
-- Indexen voor tabel `vrienden`
--
ALTER TABLE `vrienden`
  ADD PRIMARY KEY (`idvrienden`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `admingegevens`
--
ALTER TABLE `admingegevens`
  MODIFY `idadmingegevens` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT voor een tabel `seizoen_2017_2018`
--
ALTER TABLE `seizoen_2017_2018`
  MODIFY `idseizoen_2017_2018` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;
--
-- AUTO_INCREMENT voor een tabel `vrienden`
--
ALTER TABLE `vrienden`
  MODIFY `idvrienden` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
