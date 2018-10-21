
CREATE TABLE `pilkarz` (
  id int(3) PRIMARY KEY,
  imie VARCHAR(20) NOT NULL,
  nazwisko VARCHAR(30) NOT NULL,
  pozycja CHAR(1)
);

CREATE TABLE druzyna (
  skrot VARCHAR(3) PRIMARY KEY,
  nazwa VARCHAR(20) NOT NULL
);

CREATE TABLE sklad (
  idpilkarza int(3) NOT NULL REFERENCES pilkarz,
  skrotdruz VARCHAR(3) NOT NULL REFERENCES druzyna,
  numer int(2),
  cena int(6),
  PRIMARY KEY (idpilkarza, skrotdruz)
);



INSERT INTO pilkarz VALUES (1, 'Edi', 'Andradina', 'N');
INSERT INTO pilkarz VALUES (2, 'Pavola', 'Stano', 'O');
INSERT INTO pilkarz VALUES (3, 'Jose', 'Hernani', 'O');
INSERT INTO pilkarz VALUES (4, 'Pawel', 'Brozek', 'N');
INSERT INTO pilkarz VALUES (5, 'Piotr', 'Brozek', 'P');
INSERT INTO pilkarz VALUES (6, 'Mariusz', 'Pawelek', 'B');
INSERT INTO pilkarz VALUES (7, 'Arkadiusz', 'Glowacki', 'O');
INSERT INTO pilkarz VALUES (8, 'Rafal', 'Boguski', 'N');
INSERT INTO pilkarz VALUES (9, 'Maciej', 'Iwanski', 'P');
INSERT INTO pilkarz VALUES (10, 'Dickson', 'Choto', 'O');
INSERT INTO pilkarz VALUES (11, 'Piotr', 'Giza', 'P');
INSERT INTO pilkarz VALUES (12, 'Robert', 'Lewandowski', 'N');
INSERT INTO pilkarz VALUES (13, 'Ilijan', 'Micanski', 'N');

INSERT INTO druzyna VALUES ('KK', 'Korona Kielce');
INSERT INTO druzyna VALUES ('WK', 'Wisla Krakow');
INSERT INTO druzyna VALUES ('LW', 'Legia Warszawa');
INSERT INTO druzyna VALUES ('LP', 'Lech Poznan');
INSERT INTO druzyna VALUES ('PW', 'Polonia Warszawa');

INSERT INTO sklad VALUES ( 1, 'KK', 11, 5400);
INSERT INTO sklad VALUES ( 2, 'KK',  2, 4800);
INSERT INTO sklad VALUES ( 3, 'KK',  5, 4700);
INSERT INTO sklad VALUES ( 4, 'WK', 11, 6000);
INSERT INTO sklad VALUES ( 5, 'WK',  3, NULL);
INSERT INTO sklad VALUES ( 6, 'WK',  1, 4100);
INSERT INTO sklad VALUES ( 7, 'WK',  4, 5200);
INSERT INTO sklad VALUES ( 8, 'WK',  7, 4700);
INSERT INTO sklad VALUES ( 9, 'LW',  8, 6100);
INSERT INTO sklad VALUES (10, 'LW',  3, NULL);
INSERT INTO sklad VALUES (11, 'LW',  6, 2700);
INSERT INTO sklad VALUES (12, 'LP',  9, 7600);

COMMIT;

----- Zadania ----
1.SELECT pilkarz.id,pilkarz.imie, druzyna.skrot, druzyna.nazwa
FROM pilkarz
INNER JOIN sklad
ON pilkarz.id= sklad.idpilkarza
INNER JOIN druzyna 
ON sklad.skrotdruz = druzyna.skrot;

2.SELECT imie,nazwisko
FROM pilkarz
LEFT JOIN sklad
On pilkarz.id = sklad.idpilkarza
WHERE sklad.idpilkarza IS NULL;




-- 3. wypisz wszystkie druzyny (skrot i nazwa), ktorych rozpietosc cen zawodnikow jest
--    mniejsza niz 1000; pomin druzyny bez zawodnikow i zawodnikow bez ceny
select skrot, nazwa from druzyna join sklad on skrot=skrotdruz 
where cena is not null group by skrot, nazwa having max(cena)-min(cena)<1000;

-- 4. wypisz wszystkich pilkarzy z druzyny w ktorej wystepuje zawodnik z najnizszym numerem 
--    (mozna zalozyc ze jest jeden)
select imie, nazwisko from pilkarz join sklad on id=idpilkarza 
where skrotdruz in (select skrotdruz from sklad where numer=(select min(numer) from sklad));

-- 5. ile maksymalnie pilkarzy z jednej formacji wystepuje w jednej druzynie? 
--    wypisz wszystkie pary (skrot_druzyny, formacja) osiagajace te liczbe
select skrot, pozycja from pilkarz join sklad on id=idpilkarza join druzyna on skrotdruz=skrot 
group by pozycja, skrot having count(*)= (
  select max(ilu) from (
    select count(*) ilu 
    from pilkarz join sklad on id=idpilkarza join druzyna on skrotdruz=skrot group by pozycja, skrot
  )
);

-- 6. wypisz 3 najdrozszych pilkarzy
select imie, nazwisko 
from pilkarz join sklad A on id=idpilkarza and A.cena is not null 
  left join sklad B on A.cena < B.cena group by imie, nazwisko, id having count(B.idpilkarza)<3;

-- 7. wypisz dla kazdego wycenionego zatrudnionego pilkarza skrot druzyny oraz informacje 
--    ktorym pod wzgledem ceny zawodnikiem jest w swojej druzynie; posortuj po skrocie druzyny
select A.skrotdruz, imie, nazwisko, count(B.cena)+1 as ktory 
from pilkarz join sklad A on id=idpilkarza 
  left join sklad B on A.skrotdruz=B.skrotdruz and B.cena>A.cena 
where A.cena is not null group by A.skrotdruz, id, imie, nazwisko order by skrotdruz;

-- 8. wypisz wszystkich pilkarzy, obok kazdego napisz jego numer oraz (jezeli istnieje) numer 
--    kolejnej osoby w druzynie; dla osob bez numerow wypisz 2 NULLe
select imie, nazwisko, A.numer, min(B.numer) 
from pilkarz left join sklad A on id=idpilkarza 
  left join sklad B on A.skrotdruz=B.skrotdruz and A.numer < B.numer 
group by id, imie, nazwisko, A.numer;