
CREATE TABLE IF NOT EXISTS `uczniowie` (
  `id` int(2) NOT NULL,
  `imie` text CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  `nazwisko` text CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  `id_zawod` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `uczniowie` (`id`, `imie`, `nazwisko`, `id_zawod`) VALUES
(1, 'Ewa', 'Żminko', 4),
(2, 'Tomasz', 'Nielek', 4),
(3, 'Marek', 'Pierzchała', 5),
(4, 'Jarosław', 'Zawadzki', 4),
(5, 'Jacek', 'Tomczak', 5),
(6, 'Krystyna', 'Grubba', 1),
(7, 'Leon', 'Moza', 1),
(8, 'Tomasz', 'Klawikowski', 2),
(9, 'Tomasz', 'Nowak', 1),
(10, 'Sławomir', 'Lidzbarski', 1),
(11, 'Mariola', 'Czarnecka', 3),
(12, 'Józef', 'Rewa', 3),
(13, 'Piotr', 'Barton', 3),
(14, 'Wiesław', 'Łubkowski', 2),
(15, 'Jarosław', 'Wiżyn', 3),
(16, 'Witold', 'Gesse', 4),
(17, 'Paweł', 'Przybylski', 3),
(18, 'Przemysław', 'Ptak', 4),
(19, 'Andrzej', 'Silikowski', 1),
(20, 'Adam', 'Szychuda', 1);


CREATE TABLE IF NOT EXISTS `zawody` (
  `id_zawod` int(2) NOT NULL,
  `zawod` text CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `zawody` (`id_zawod`, `zawod`) VALUES
(1, 'technik elektryk'),
(2, 'technik energetyk'),
(3, 'technik elektronik'),
(4, 'technik informatyk'),
(5, 'technik teleinformatyk');

ALTER TABLE `uczniowie`
  ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `id` (`id`);


ALTER TABLE `zawody`
  ADD PRIMARY KEY (`id_zawod`), ADD UNIQUE KEY `id_zawod` (`id_zawod`);

