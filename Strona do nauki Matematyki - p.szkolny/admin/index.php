<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
<?php
$bd = mysqli_connect('localhost', 'root','','');
$dodaj = mysqli_query($bd, "CREATE DATABASE odkuj CHARACTER SET utf8 COLLATE utf8_general_ci");
print "dodano baze";
mysqli_close($bd);
$bd = mysqli_connect('localhost', 'root','','odkuj');
$sql = "CREATE TABLE `user` (
	login VARCHAR(50) NULL DEFAULT '0',
	password VARCHAR(50) NULL DEFAULT '0',
	mail VARCHAR(50) NULL DEFAULT '0',
	mode int(2) NULL DEFAULT '0',
	avatar int(2) NULL DEFAULT '1'
)";
$sql_2 = "CREATE TABLE `pytania` (
	ID INT(10) NOT NULL  AUTO_INCREMENT,
	pytanie VARCHAR(255),
	A VARCHAR(50) ,
	B VARCHAR(50) ,
	C VARCHAR(50) ,
	D VARCHAR(50) ,   
	PoP VARCHAR(1),
	PRIMARY KEY (ID)
  )";

  $inserting = "INSERT INTO `pytania`(`ID`, `pytanie`, `A`, `B`, `C`, `D`, `PoP`) VALUES 
  (1,'Liczba wieksza od zera jest liczba:','A. 1/3 - 0,(3)','B. -&radic;3 +1 7/9','C. 4 2/3 - 4&radic;3 1/16','D. -2^2','B'),
 (2,'Dwudziestu chlopcow stanowi 62, 5% klasy. Ile dziewczat jest w tej klasie?','A. 9','B. 12','C. 6','D. 32','B'),
 (3,'Wiadomo, ze a = 3 log8 4, zatem a jest rowne:','A. 512','B. 81','C. 2','D. 64','C'),
 (4,'Wartoscia wyrazenia (3 - &radic;5)^2 jest liczba:','A. 11 + 6&radic;6','B. 4 - 6&radic;5','C. 14 - 6&radic;5','D. 4','C'),
 (5,'Wartosc wyrazenia 5^100 + 5^100 + 5^100 + 5^100 + 5^100 jest rowna:','A. 5^500','B. 5^101','C. 25^100','D. 25^500','B'),
 (6,'Cene pewnego towaru obnizono najpierw o 30%, a nastepnie obnizono o 20%. Zatem cene towaru obnizono o:','A. 50%','B. 60%','C. 56%','D. 44%','D'),
 (7,'Licznik pewnego ulamka jest rowny 6. Jesli licznik tego ulamka zmniejszymy o 2, a mianownik o 3, to wartosc tego ulamka sie nie zmieni. Jaki to ulamek?','A. 6/10','B 6/5','C. 6/11','D. 6/9','D'),
 (8,'Wplacono 500 zl na lokate dwuletnia, przy rocznej stopiue 6% i kapitalizacji co pol roku. Po 2 latach stan konta wynosi:','A. 500(1,12)^2','B. 500(1,06)^2','C. 500(1,06)^4','D. 500(1,03)^4','D'),
 (9,'Liczba odwrotna do liczby 5 3/11 - 2 1/11 * 3&radic;-8 jest:','A. 11/70','B. 11/104','C. -11/104','D. -70/11','B'),
 (10,'Liczba 3&radic;3 * 6&radic;3 jest rowna: ','A. 9&radic;3','B. 18&radic;3','C. 18&radic;6','D. &radic;3 ','D'),
(11,'Liczba log2(log 20 + log 5) jest rowna:','A. 5','B. 2','C. 1','D. 0','C'),
 (12,'Zbiorem rozwiazan nierownosci 2x - 4 < 10 jest:','A. (-∞,7)','B. (-∞,-4) ∪ (2, +∞)','C. (7, +∞)','D. (-4,2)','A'),
 (13,'Wartosc wyrazenia 2&radic;50 - 4&radic;8 jest rowna:','A. 2^3/2','B. 2^1/2','C. 2^-1','D. 4^1/2','A'),
 (14,'Wartosc bezwzgledna liczby x= (1,5^2 - 1,2 : 4,8)/(-2 1/3 * 1/7)','A. 4','B. 6','C. 2/3','D. -2/3','B'),
 (15,'Ktora z podanych liczb jest wieksza od 1:','A. (0,1)^-3','B. (1/2)^10','C. (-2)^-4','D. 1/&radic;2','A'),
 (16,'Wyrazenie (3/5)^5 * (5/3)^4 jest rowne:','A. 1','B. (3/5)^9','C. 3/5','D. 0','C'),
 (17,'Wartosc wyrazenia (3/4 - 2/3)/(2/3 - 1/2) jest rowna:','A. 1','B. 1/2','C. 1/12','D. 1/72','B'),
 (18,'Wiadomo, ze x^0,1205 = 6. Wtedy x^0,3615 rowna sie:','A.3&radic;6','B. 216','C. 36','D. 3','B'),
 (19,'Przyblizenie dziesietne z dokladnosci do 0,01 liczby &radic;7 +&radic;6 wynosi 5,10. Przyblizenie liczby 1/(&radic;7 - &radic;6) z dokladnoscia do 0,01 wynosi: ','A. 0,20','B. 0,19','C. 5,10','D. 5,1','C'),
 (20,'Wartosc wyrazenia 4^log2 5 wynosi:','A. 5','B. 10','C. 25','D. &radic;5','C'),
 (21,'Liczba |1,(41)-&radic;2| jest rowna:','A. 1,(41) - &radic;2','B. 1,(41) + &radic;2','C. &radic;2 - 1,(41)','D. -&radic;2 - 1,(41)','C'),
 (22,'O godzinie 12 : 00 maratonczyk znajdowal sie w odleglosci 20000 m od mety. Zakladajac, ze biegl ze stala predkoscia 15 km/h, dobiegl do mety o godzinie:','A. 13 : 00','B. 13 : 20','C. 13 : 40','D. 14 : 00','B'),
 (23,'Dane sa przedzialy A = <-2,4) i B = (3,5>. Liczba 4:','A. nalezy tylko do przedzialu A','B. nalezy do obu przedzialow','C. nalezy tylko do przedzialu B','D. nie nalezy do zadnego z podanych przedzialow','C'),
 (24,'Dane sa liczby x = 2 + &radic;3 i y = 2 - &radic;3. Ilorazem x/y tych liczb jest:','A. liczba wymierna','B. liczba niewymierna','C. 1','D. -2 + &radic;3','B'),
 (25,'Liczby A = (5^4)^3, B = 5^5 + 5^5, C = 5^12 : 5^7, D = 5^3 * 5^6 ustawiono w kolejnosci malejacej, zatem:','A. B > A > D > C','B. A > D > B > C','C. A > B > D > C','D. C > B > D > A','B');";
$sql_3 = "INSERT INTO `user` VALUES ('admin','21232f297a57a5a743894a0e4a801fc3','support@odpierwiastkuj.pl',1,1);";
$do_sql = mysqli_query($bd, $sql);
print "dodano user<br>";
$do_sql = mysqli_query($bd, $sql_2);
print "dodano pytania<br>";
$do_sql = mysqli_query($bd, $inserting);
print "dodano pytania<br>";
$do_sql = mysqli_query($bd, $sql_3);
print "dodano Admin<br>";

mysqli_close($bd);
?>
</body>
</html>
