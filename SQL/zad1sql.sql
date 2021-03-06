
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+01:00";
 
CREATE DATABASE test_pracownicy;
USE test_pracownicy;


CREATE TABLE `dzialy` (
  `id_dzialu` int(3) NOT NULL,
  `nazwa` varchar(20) NOT NULL,
  `miejscowosc` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=uft8_polish_ci;

CREATE TABLE `pracownicy` (
  `nr_akt` int(2) NOT NULL,
  `nazwisko` tinytext NOT NULL,
  `stanowisko` varchar(20) DEFAULT NULL,
  `id_pracownika` int(6) DEFAULT NULL,
  `data_r` date DEFAULT NULL,
  `null_table` text,
  `wynagrodzenie` int(10) DEFAULT NULL,
  `dodatek_funkcyjny` int(10) DEFAULT NULL,
  `null_table2` text,
  `id_dzialu` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=uft8_polish_ci;

CREATE TABLE `prac_archiw` (
  `nr_akt` int(5) NOT NULL,
  `nazwisko` text NOT NULL,
  `stanowisko` varchar(20) NOT NULL,
  `nr_szefa` int(5) NOT NULL,
  `data_r` date DEFAULT NULL,
  `data_z` date DEFAULT NULL,
  `płaca` int(10) NOT NULL,
  `dodatek_fukcyjny` int(6) DEFAULT NULL,
  `prowizja` int(5) DEFAULT NULL,
  `id_dzialu` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=uft8_polish_ci;

CREATE TABLE `stanowiska` (
  `stanowisko` varchar(20) NOT NULL,
  `zarobek_min` int(10) NOT NULL,
  `zarobek_max` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=uft8_polish_ci;

CREATE TABLE `taryfikator` (
  `id` int(2) NOT NULL,
  `min_zarobek` int(10) NOT NULL,
  `max_zarobek` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=uft8_polish_ci;

ALTER TABLE `dzialy`
  ADD PRIMARY KEY (`id_dzialu`);

ALTER TABLE `taryfikator`
  ADD PRIMARY KEY (`id`);

INSERT INTO dzialy VALUES (10, 'ZARZAD', 'CZESTOCHOWA');
INSERT INTO dzialy VALUES (20, 'PRODUKCJA', 'HONG KONG');
INSERT INTO dzialy VALUES (30, 'ZAOPATRZENIE', 'AMSTERDAM');
INSERT INTO dzialy VALUES (40, 'MARKETING', 'PARYZ');
INSERT INTO dzialy VALUES (50, 'BADANIA', 'JAMAJKA');
INSERT INTO dzialy VALUES (60, 'KSIEGOWOSC','WIEDEN');
INSERT INTO dzialy VALUES (70, 'SPRZEDAZ', 'CZESTOCHOWA');
INSERT INTO dzialy VALUES (80, 'MAGAZYN', 'KLOBUCK');

INSERT INTO taryfikator VALUES (1,  1150, 1350);
INSERT INTO taryfikator VALUES (2, 1351, 1550);
INSERT INTO taryfikator VALUES (3, 1551, 2000);
INSERT INTO taryfikator VALUES (4, 2001, 3000);
INSERT INTO taryfikator VALUES (5, 3001, 9999);

INSERT INTO stanowiska VALUES ('PREZES',6700,9000);
INSERT INTO stanowiska VALUES ('CZLONEK ZARZADU',4000,6000);
INSERT INTO stanowiska VALUES ('GLOWNY INFORMATYK',3000,5000);
INSERT INTO stanowiska VALUES ('DYREKTOR',4000,6000);
INSERT INTO stanowiska VALUES ('TECHNOLOG',1500,2500);
INSERT INTO stanowiska VALUES ('OPERATOR',1200,2000);
INSERT INTO stanowiska VALUES ('LABORANT', 1150, 1500);
INSERT INTO stanowiska VALUES ('INFORMATYK', 1500, 3000);
INSERT INTO stanowiska VALUES ('LOGISTYK', 1200, 2000);
INSERT INTO stanowiska VALUES ('MANAGER', 2000, 3000);
INSERT INTO stanowiska VALUES ('GRAFIK', 1200, 2200);
INSERT INTO stanowiska VALUES ('GLOWNY KSIEGOWY', 2500,3500);
INSERT INTO stanowiska VALUES ('KSIEGOWY', 2000, 3000);
INSERT INTO stanowiska VALUES ('REFERENT', 1200, 1500);
INSERT INTO stanowiska VALUES ('SPRZEDAWCA', 1200, 1500);
INSERT INTO stanowiska VALUES ('MANAGER GRUPY', 2500, 3500);
INSERT INTO stanowiska VALUES ('AKWIZYTOR', 1150, 1500);
INSERT INTO stanowiska VALUES ('PRAKTYKANT', 1150, 1300);

INSERT INTO pracownicy VALUES (8901, 'KROL', 'PREZES', NULL, '1989/07/01', NULL, 7000, 4000, NULL, 10);
INSERT INTO pracownicy VALUES (8902, 'MICHALSKI', 'DYREKTOR', 8901, '1989/08/15', NULL, 5000, 1500, NULL,	40);
INSERT INTO pracownicy VALUES (9121, 'KUKULSKI', 'DYREKTOR', 8901, '1991/04/02', NULL,	5000, 1500, NULL, 30);
INSERT INTO pracownicy VALUES (9011, 'WIERZBICKI', 'INFORMATYK', 8902, '1990/03/20', NULL, 2000, NULL, NULL, 40);
INSERT INTO pracownicy VALUES (9235, 'FIKUS', 'DYREKTOR', 8901, '1994/09/16', NULL,  5000, 1500, NULL, 70);
INSERT INTO pracownicy VALUES (8904, 'SKALSKI', 'GLOWNY INFORMATYK', 8901, '1989/08/18', NULL, 3500, 2500, NULL, 10);
INSERT INTO pracownicy VALUES (8910, 'MONIUSZKO', 'DYREKTOR', 8901, '1989/09/01', NULL, 5000, 1500, NULL, 20);
INSERT INTO pracownicy VALUES (8911, 'WRZOSEK', 'OPERATOR', 8910, '1989/11/10', NULL, 1500, NULL, NULL, 20);
INSERT INTO pracownicy VALUES (9411, 'LISIECKI', 'LABORANT', 8910, '1994/09/10', NULL, 1300, NULL, NULL, 20);
INSERT INTO pracownicy VALUES (8932, 'BRZOZKA',	 'GLOWNY KSIEGOWY', 8901, '1989/12/06', NULL, 3000, 2000, NULL, 60);
INSERT INTO pracownicy VALUES (8913, 'KOWALSKA', 'CZLONEK ZARZADU', 8901, '1989/11/15', NULL, 5000, 2000, NULL, 10);
INSERT INTO pracownicy VALUES (9010, 'WISNIEWSKA', 'GRAFIK',	 8902, '1990/02/12', NULL, 1800, NULL, NULL, 40);
INSERT INTO pracownicy VALUES (9025, 'MALIK', 'LOGISTYK', 9121, '1990/06/01', NULL, 1500, NULL, NULL, 30);
INSERT INTO pracownicy VALUES (9332, 'PRUSINSKA', 'DYREKTOR', 8901, '1997/07/15', NULL, 5000, 1500, NULL, 50);
INSERT INTO pracownicy VALUES (9027, 'GADULA', 'LOGISTYK', 9121, '1990/06/20', NULL, 1500, NULL, NULL, 30);
INSERT INTO pracownicy VALUES (9028, 'LESZCZYNSKI', 'SPRZEDAWCA', 9235, '1990/08/10', NULL, 1200, NULL, 6000, 70);
INSERT INTO pracownicy VALUES (9102, 'KOWALCZYK', 'AKWIZYTOR',	 9235, '1991/01/10', NULL, 1200, NULL, 12000, 70);
INSERT INTO pracownicy VALUES (9122, 'WOJCIK', 'KSIEGOWY', 8932, '1991/05/10', NULL, 2200, NULL, NULL, 60);
INSERT INTO pracownicy VALUES (9130, 'LELIWA', 'MANAGER', 8902, '1991/06/01', NULL, 2200, NULL, NULL, 40);
INSERT INTO pracownicy VALUES (8920, 'WOJCIK', 'TECHNOLOG', 8910, '1989/12/01', NULL, 1800, NULL, NULL, 20);
INSERT INTO pracownicy VALUES (9337, 'MAZUR', 'INFORMATYK', 8932, '1993/07/12', NULL, 2000, NULL, NULL, 60);
INSERT INTO pracownicy VALUES (9345, 'SZCZESNY', 'OPERATOR', 8910, '1993/10/05', NULL, 1500, NULL, NULL, 20);
INSERT INTO pracownicy VALUES (9403, 'BIELECKA', 'REFERENT', 8932, '1994/03/01', NULL, 1400, NULL, NULL, 60);
INSERT INTO pracownicy VALUES (9120, 'RYBAK', 'TECHNOLOG', 8910, '1991/01/20', NULL, 1800, NULL, NULL, 20);
INSERT INTO pracownicy VALUES (9641, 'MALYSZ', 'MANAGER GRUPY', 9235, '1996/12/05', NULL, 3000, 500, 10000, 70);
INSERT INTO pracownicy VALUES (9731, 'NAWROCKI', 'LABORANT', 9332, '1997/04/01', NULL, 1300, NULL, NULL, 50);
INSERT INTO pracownicy VALUES (9780, 'SAMOSINSKI', 'PRAKTYKANT', 9332, '2006/04/01', NULL, 1150, NULL, NULL, NULL);

INSERT INTO prac_archiw VALUES (9641, 'MALIK', 'SPRZEDAWCA', 9235, '1992/12/05', '1995/10/30', 1800, NULL, 5000, 70);
INSERT INTO prac_archiw VALUES (9332, 'PROTASIEWICZ', 'LABORANT', 8910, '1993/03/15', '1994/12/01', 1200, NULL, NULL, 20);
INSERT INTO prac_archiw VALUES (8912, 'SZCZERBA', 'OPERATOR', 8910, '1989/11/15', '1995/06/30', 1300, NULL, NULL, 20);
INSERT INTO prac_archiw VALUES (9350, 'KWIATKOWSKA', 'REFERENT', 8932, '1994/01/10', '1998/03/31', 1100, NULL, NULL, 60);
INSERT INTO prac_archiw VALUES (9440, 'BRODECKA', 'KSIEGOWY', 8932, '1994/10/10', '1999/09/30', 1600, NULL, NULL, 60);
INSERT INTO prac_archiw VALUES (9153, 'MONETA',	 'DYREKTOR', 8901, '1992/04/10', '1997/06/30', 3200, 1500, NULL, 50);


/* 
1. W dniu 30.11.2011 przestali pracować pracownicy o numerze akt 9731 oraz 9411. Napisać zapytanie, które pozwoli zaktualizować dane. 
2. Dane pracowników dopisać do tabeli prac_archiw 
3. Usunąć dane tych pracowników z tabeli pracownicy 
4. Wypisać nazwisko, datę zatrudnienia, miesiąc i dzień dla wszystkich pracowników 
5. Wypisać nazwisko i rok zatrudnienia wszystkich pracowników 
6. Wpisać pracowników, którzy zostali zatrudnieni w kwietniu 
7. Wypisać nazwiska i liczbę lat pracy pracowników zapisanych w tabeli prac_archiw 
8. Wypisać dzisiejszą datę 
9. Podać ile lat zatrudnieni są pracownicy o numerze akt 9345 i 9403 (podać nr_akt, nazwisko i liczbę lat) 
10. Podać ilu pracowników pracuje w poszczególnych działach (nazwa działu, liczba pracowników) 
11. Podać ile pracowników pracuje w dziale produkcja 
12. Podać ile osób pracuje na każdym stanowisku 
13. Podać łączną płace dla stanowiska dyrektor i logistyk 
14. Wypisać wartość średniej płacy 
15. Wypisać nazwisko i płacę pracowników, których płaca jest większa od średniej płacy 
16. Wpisać pracowników, których płaca jest najwyższa 
17. Napisać zapytanie, które zmieni płacę prezesa (nr_akt 8901) na 5000. 
18. Wypisać nazwisko pracownika, stanowisko, płacę, płacę minimalną na tym stanowisku i płacę maksymalną. 
19. Wypisać nazwiska pracowników, których płaca jest równa płacy minimalnej na tym stanowisku. 

ODPOWIEDZI 
1.  update pracownicy set data_z='2011-11-30' where nr_akt='9731' or nr_akt='9411';
2.  INSERT INTO `prac_archiw` SELECT * FROM `pracownicy` WHERE nr_akt='9731' OR nr_akt='9411';
3.  DELETE FROM `pracownicy` WHERE nr_akt='9731' OR nr_akt='9411';
4.  SELECT nazwisko, month(data_r) miesiac, day(data_r) dzien FROM pracownicy;
5.  SELECT nazwisko, year(data_r) rok FROM pracownicy;
6.  SELECT * FROM pracownicy WHERE month(data_r)=4;
7.  SELECT nazwisko, year(data_z)-year(data_r) AS 'lata pracy' FROM prac_archiw;
8.  SELECT NOW() AS 'AKTUALNA DATA';
9.  SELECT nr_akt, nazwisko, year(NOW())-year(data_r) AS 'Lata PRACY' FROM `pracownicy` WHERE nr_akt='9345' OR nr_akt='9403';
10. SELECT dzialy.nazwa, count(*) AS 'ilosc Pracowników' FROM pracownicy JOIN dzialy ON pracownicy.id_dzialu= dzialy.id_dzialu GROUP BY dzialy.nazwa;
11.  SELECT dzialy.nazwa, count(*) AS 'ilosc Pracowników' FROM pracownicy JOIN dzialy ON pracownicy.id_dzialu = dzialy.id_dzialu WHERE dzialy.nazwa='produkcja' GROUP BY dzialy.nazwa;
*/