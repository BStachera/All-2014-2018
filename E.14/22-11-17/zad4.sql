SELECT COUNT(*) AS 'Brzozowska ilosc' FROM lekarze
 INNER JOIN wizyty ON wizyty.id_lekarza = lekarze.id 
 WHERE data LIKE "2017-12-06 %" AND imie="Zofia" AND nazwisko = "Brzozowska";