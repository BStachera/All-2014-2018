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


-- Zrzut struktury bazy danych przychodnia
CREATE DATABASE IF NOT EXISTS `przychodnia` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `przychodnia`;

-- Zrzut struktury tabela przychodnia.lekarze
CREATE TABLE IF NOT EXISTS `lekarze` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nazwisko` text COLLATE utf8_polish_ci,
  `imie` text COLLATE utf8_polish_ci,
  `telefon` text COLLATE utf8_polish_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

-- Data exporting was unselected.
-- Zrzut struktury tabela przychodnia.pacjenci
CREATE TABLE IF NOT EXISTS `pacjenci` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nazwisko` text COLLATE utf8_polish_ci NOT NULL,
  `imie` text COLLATE utf8_polish_ci NOT NULL,
  `adres` text COLLATE utf8_polish_ci NOT NULL,
  `data_urodzenia` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

-- Data exporting was unselected.
-- Zrzut struktury tabela przychodnia.wizyty
CREATE TABLE IF NOT EXISTS `wizyty` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_lekarza` int(11) NOT NULL,
  `id_pacjenta` int(11) NOT NULL,
  `data` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

-- Data exporting was unselected.
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
