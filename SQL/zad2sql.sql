-- 1. Dla każdego komitetu wypisz w ilu okręgach miał kandydatów.

SELECT komitet, COUNT(DISTINCT okreg) okregi
FROM kandydat
GROUP BY komitet;

-- 2. Posortuj kandydatów względem malejacej sumarycznej liczby 
-- uzyskanych głosów (wypisz dane kandydata i liczbę głosów).

SELECT id, imie, nazwisko, komitet, okreg, NVL(SUM(ile),0) glosy
FROM kandydat LEFT JOIN wynik ON id=na_kogo
GROUP BY id, imie, nazwisko, komitet, okreg
ORDER BY NVL(SUM(ile),0) DESC;

-- 3. Wypisz wszystkie pary (imię, nazwisko), które powtarzają się
-- w ramach jednego okręgu wyborczego wśród kandydatów różnych komitetów. 
  
SELECT DISTINCT imie, nazwisko
FROM kandydat
GROUP BY imie, nazwisko, okreg 
HAVING count(id) > 1;

-- 4. Wypisz okregi, w których nie wszystkie lokale przekazały 
-- wyniki wszystkich kandydatów. 

SELECT DISTINCT lokal.okreg 
FROM kandydat JOIN lokal ON kandydat.okreg=lokal.okreg 
WHERE kandydat.id NOT IN (SELECT na_kogo FROM wynik WHERE gdzie=lokal.id);

-- 5. Dla każdego okręgu wypisz minimalną i maksymalną łączną 
-- liczbę głosów oddanych w lokalach tego okręgu.

SELECT okreg, min(razem), max(razem) 
FROM
	(SELECT id, okreg, sum(ile) razem
	 FROM lokal LEFT JOIN wynik ON id=gdzie
	 GROUP BY id, okreg) glosy_w_lokalach
GROUP BY okreg;

-- 6. Posortuj kandydatów względem procentu głosów uzyskanych w ramach
-- ich okręgu (wypisz dane kandydata i procent głosów).

SELECT kandydat.id, imie, nazwisko, komitet, kandydat.okreg,
       (100*wynik_kandydata.ile/glosy_w_okregu.ile) procent
FROM kandydat,
     (SELECT na_kogo id, sum(ile) ile 
      FROM wynik GROUP BY na_kogo) wynik_kandydata,
     (SELECT okreg, sum(ile) ile 
      FROM wynik JOIN lokal ON lokal.id=gdzie GROUP BY okreg) glosy_w_okregu
WHERE kandydat.id=wynik_kandydata.id AND kandydat.okreg=glosy_w_okregu.okreg
ORDER BY (wynik_kandydata.ile/glosy_w_okregu.ile) DESC;

-- 7. Dla każdego kandydata podaj jego pozycję rankingową w ramach jego
-- okręgu, uwzględniając remisy. Na przykład, jeśli Abacki dostał 10
-- głosów, a Babacki, Cabacki i Dabacki dostali po 8 głosów, to Abacki ma
-- pozycję 1, a pozostali mają pozycję 2. Posortować po okręgach, pozycji
-- rankingowej i nazwisku. 

WITH kandydat_wynik AS 
     (SELECT id, imie, nazwisko, komitet, okreg, NVL(SUM(ile),0) ile 
      FROM kandydat LEFT JOIN wynik ON id=na_kogo
      GROUP BY id, imie, nazwisko, komitet, okreg)
SELECT gorszy.id, gorszy.imie, gorszy.nazwisko, gorszy.komitet, gorszy.okreg, 
       count(lepszy.id) miejsce
FROM kandydat_wynik gorszy, kandydat_wynik lepszy
WHERE gorszy.okreg=lepszy.okreg AND 
      (gorszy.ile<lepszy.ile OR gorszy.id=lepszy.id)
GROUP BY gorszy.id, gorszy.imie, gorszy.nazwisko, gorszy.komitet, gorszy.okreg
ORDER BY okreg, count(lepszy.id), nazwisko;
