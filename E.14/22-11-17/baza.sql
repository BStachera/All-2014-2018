-- phpMyAdmin SQL Dump
-- version 4.5.0.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Czas generowania: 12 Paź 2017, 19:50
-- Wersja serwera: 10.0.17-MariaDB
-- Wersja PHP: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `przychodnia`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `pacjenci`
--

CREATE TABLE `pacjenci` (
  `id` int(11) NOT NULL,
  `nazwisko` text COLLATE utf8_polish_ci NOT NULL,
  `imie` text COLLATE utf8_polish_ci NOT NULL,
  `adres` text COLLATE utf8_polish_ci NOT NULL,
  `data_urodzenia` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `pacjenci`
--

INSERT INTO `pacjenci` (`id`, `nazwisko`, `imie`, `adres`, `data_urodzenia`) VALUES
(1, 'Lasocki', 'Karol', 'ul. Nowa 15 12-345 Konin', '1995-06-12'),
(2, 'Misiak', 'Katarzyna', 'ul. Bulwarowa 14 22-435 Warszawa', '1990-12-01'),
(3, 'Krawiec', 'Wojciech', 'ul. Zamkowa 4 98-222 Lublin', '1999-03-13'),
(4, 'Borkowski', 'Damian', 'ul. Rynek 44 98-452 Warszawa', '1998-10-23'),
(5, 'Domacka', 'Joanna', 'ul. Kochanowskiego 87 99-452 Warszawa', '1996-11-30'),
(6, 'Krakowiak', 'Adam', 'ul. Zielona 33 78-345 Katowice', '1998-04-04'),
(7, 'Fus', 'Kamil', 'ul. Rolna 13 87-346 Katowice', '1997-06-23');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `wizyty`
--

CREATE TABLE `wizyty` (
  `id` int(11) NOT NULL,
  `id_lekarza` int(11) NOT NULL,
  `id_pacjenta` int(11) NOT NULL,
  `data` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `wizyty`
--

INSERT INTO `wizyty` (`id`, `id_lekarza`, `id_pacjenta`, `data`) VALUES
(1, 1, 2, '2017-12-05 14:00:00'),
(2, 1, 4, '2017-12-05 15:00:00'),
(3, 2, 1, '2017-12-06 14:00:00'),
(4, 2, 5, '2017-12-06 14:30:00'),
(5, 2, 6, '2017-12-06 15:00:00'),
(6, 3, 7, '2017-12-06 15:30:00'),
(7, 3, 3, '2017-12-10 16:00:00'),
(8, 3, 2, '2017-12-10 16:30:00'),
(9, 3, 4, '2017-12-10 17:00:00');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indexes for table `pacjenci`
--
ALTER TABLE `pacjenci`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wizyty`
--
ALTER TABLE `wizyty`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `pacjenci`
--
ALTER TABLE `pacjenci`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT dla tabeli `wizyty`
--
ALTER TABLE `wizyty`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
