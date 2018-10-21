-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Wersja serwera:               10.1.26-MariaDB - mariadb.org binary distribution
-- Serwer OS:                    Win32
-- HeidiSQL Wersja:              9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Zrzut struktury bazy danych meteo
CREATE DATABASE IF NOT EXISTS `meteo` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `meteo`;

-- Zrzut struktury tabela meteo.lokalizacja
CREATE TABLE IF NOT EXISTS `lokalizacja` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `Nazwa` text,
  `Adres` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Zrzut struktury tabela meteo.pogoda
CREATE TABLE IF NOT EXISTS `pogoda` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `temperatura` int(11) DEFAULT NULL,
  `Opad` int(10) unsigned DEFAULT NULL,
  `Cisnienie` int(10) unsigned DEFAULT NULL,
  `PredkoscWiatru` int(10) unsigned DEFAULT NULL,
  `Wilgotnosc` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Zrzut struktury tabela meteo.prognoza
CREATE TABLE IF NOT EXISTS `prognoza` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `Lokalizacja_id` int(10) unsigned NOT NULL,
  `Pogoda_id` int(10) unsigned NOT NULL,
  `dataProg` date DEFAULT NULL,
  `godzina` time DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
