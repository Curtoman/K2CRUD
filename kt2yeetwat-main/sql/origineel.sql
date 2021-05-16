-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 08 jan 2021 om 11:03
-- Serverversie: 10.1.37-MariaDB
-- PHP-versie: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `origineel`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `huis`
--

CREATE TABLE `huis` (
  `idKamer` int(11) NOT NULL,
  `aantalVerdiepingen` int(11) DEFAULT NULL,
  `aantalKamers` int(11) DEFAULT NULL,
  `Breedte` int(11) DEFAULT NULL,
  `Hoogte` int(11) DEFAULT NULL,
  `Diepte` int(11) DEFAULT NULL,
  `Prijs` int(11) DEFAULT NULL,
  `Huurder_idHuurder` int(11) NOT NULL,
  `TypeHuis_idTypeHuis` int(11) NOT NULL,
  `Status_idStatus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `huis`
--

INSERT INTO `huis` (`idKamer`, `aantalVerdiepingen`, `aantalKamers`, `Breedte`, `Hoogte`, `Diepte`, `Prijs`, `Huurder_idHuurder`, `TypeHuis_idTypeHuis`, `Status_idStatus`) VALUES
(1, 2, 6, 20, 20, 4, 300000, 2, 1, 1),
(2, 1, 4, 200, 300, 3, 120000, 3, 2, 2),
(3, 1, 5, 200, 200, 2, 200000, 2, 2, 1),
(4, 3, 10, 200, 300, 3, 400000, 1, 1, 2),
(5, 2, 4, 200, 200, 3, 150000, 2, 2, 1);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `huurder`
--

CREATE TABLE `huurder` (
  `idHuurder` int(11) NOT NULL,
  `Naam` varchar(45) DEFAULT NULL,
  `DatumHuur` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `huurder`
--

INSERT INTO `huurder` (`idHuurder`, `Naam`, `DatumHuur`) VALUES
(1, 'Naam Verkoper', '0000-00-00 00:00:00'),
(2, 'Naam Huurder', '0000-00-00 00:00:00'),
(3, 'Naam Verkoper', '2021-01-09 00:00:00'),
(4, 'Naam Huurder', '2021-01-08 00:00:00');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `koper`
--

CREATE TABLE `koper` (
  `idKoper` int(11) NOT NULL,
  `Naam` varchar(45) DEFAULT NULL,
  `DatumKoop` datetime DEFAULT NULL,
  `Huurder_idHuurder` int(11) NOT NULL,
  `Adres` varchar(45) DEFAULT NULL,
  `Telefoon` varchar(15) DEFAULT NULL,
  `Email` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `status`
--

CREATE TABLE `status` (
  `idStatus` int(11) NOT NULL,
  `Naam` varchar(45) DEFAULT NULL,
  `Verkocht` tinyint(4) DEFAULT NULL,
  `Verhuurd` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `status`
--

INSERT INTO `status` (`idStatus`, `Naam`, `Verkocht`, `Verhuurd`) VALUES
(1, 'Vehuurd', 0, 1),
(2, 'Verkocht', 1, 0);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `typehuis`
--

CREATE TABLE `typehuis` (
  `idTypeHuis` int(11) NOT NULL,
  `Naam` varchar(45) NOT NULL,
  `Koophuis` tinyint(4) NOT NULL,
  `Huurhuis` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `typehuis`
--

INSERT INTO `typehuis` (`idTypeHuis`, `Naam`, `Koophuis`, `Huurhuis`) VALUES
(1, 'Koophuis', 1, 0),
(2, 'Huurhuis', 0, 1);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `woonwijk`
--

CREATE TABLE `woonwijk` (
  `idWoonwijk` int(11) NOT NULL,
  `naamWijk` varchar(45) DEFAULT NULL,
  `Stad` varchar(45) DEFAULT NULL,
  `Huis_idKamer` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `woonwijk`
--

INSERT INTO `woonwijk` (`idWoonwijk`, `naamWijk`, `Stad`, `Huis_idKamer`) VALUES
(3, 'West-Kruiskade', 'Rotterdam', 1),
(4, 'Schiedam Centrum', 'Schiedam', 2),
(5, 'Spangen', 'Schiedam', 3),
(6, 'Bergen', 'Barendrecht', 4),
(7, 'Alexaderium', 'Rotterdam', 5);

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `huis`
--
ALTER TABLE `huis`
  ADD PRIMARY KEY (`idKamer`,`Huurder_idHuurder`,`TypeHuis_idTypeHuis`,`Status_idStatus`),
  ADD KEY `fk_Huis_Huurder1_idx` (`Huurder_idHuurder`),
  ADD KEY `fk_Huis_TypeHuis1_idx` (`TypeHuis_idTypeHuis`),
  ADD KEY `fk_Huis_Status1_idx` (`Status_idStatus`);

--
-- Indexen voor tabel `huurder`
--
ALTER TABLE `huurder`
  ADD PRIMARY KEY (`idHuurder`);

--
-- Indexen voor tabel `koper`
--
ALTER TABLE `koper`
  ADD PRIMARY KEY (`idKoper`,`Huurder_idHuurder`),
  ADD KEY `fk_Koper_Huurder1_idx` (`Huurder_idHuurder`);

--
-- Indexen voor tabel `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`idStatus`);

--
-- Indexen voor tabel `typehuis`
--
ALTER TABLE `typehuis`
  ADD PRIMARY KEY (`idTypeHuis`);

--
-- Indexen voor tabel `woonwijk`
--
ALTER TABLE `woonwijk`
  ADD PRIMARY KEY (`idWoonwijk`,`Huis_idKamer`),
  ADD KEY `fk_Woonwijk_Huis_idx` (`Huis_idKamer`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `huis`
--
ALTER TABLE `huis`
  MODIFY `idKamer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT voor een tabel `huurder`
--
ALTER TABLE `huurder`
  MODIFY `idHuurder` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT voor een tabel `koper`
--
ALTER TABLE `koper`
  MODIFY `idKoper` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `status`
--
ALTER TABLE `status`
  MODIFY `idStatus` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT voor een tabel `typehuis`
--
ALTER TABLE `typehuis`
  MODIFY `idTypeHuis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT voor een tabel `woonwijk`
--
ALTER TABLE `woonwijk`
  MODIFY `idWoonwijk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Beperkingen voor geëxporteerde tabellen
--

--
-- Beperkingen voor tabel `huis`
--
ALTER TABLE `huis`
  ADD CONSTRAINT `fk_Huis_Huurder1` FOREIGN KEY (`Huurder_idHuurder`) REFERENCES `huurder` (`idHuurder`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Huis_Status1` FOREIGN KEY (`Status_idStatus`) REFERENCES `status` (`idStatus`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Huis_TypeHuis1` FOREIGN KEY (`TypeHuis_idTypeHuis`) REFERENCES `typehuis` (`idTypeHuis`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Beperkingen voor tabel `koper`
--
ALTER TABLE `koper`
  ADD CONSTRAINT `fk_Koper_Huurder1` FOREIGN KEY (`Huurder_idHuurder`) REFERENCES `huurder` (`idHuurder`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Beperkingen voor tabel `woonwijk`
--
ALTER TABLE `woonwijk`
  ADD CONSTRAINT `fk_Woonwijk_Huis` FOREIGN KEY (`Huis_idKamer`) REFERENCES `huis` (`idKamer`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
