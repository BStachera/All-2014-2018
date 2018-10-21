<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styl_oszczep.css" type="text/css">
    <title>Rzut Oszczepem</title>
</head>
<body>
<?php
    $bd = mysqli_connect('localhost','root','','sport');
?>
<div class="contener">
    <header>
        <h1>Klub Sportowy: Rzut Oszczepem</h1>
    </header>
    <main>
        <h3>Nasz Rekord:
            <?php 
                $rekord = mysqli_query($bd, "SELECT MAX(wynik) AS `Najlepszy wynik` FROM wyniki WHERE dyscyplina_id = 3")   ;
                while ($row = $rekord->fetch_assoc())                                                                       {
                    echo $row['Najlepszy wynik']."m"                                                                        ;}
            ?>
        </h3>
            <?php
            $i = 0;
                for($i = 1; $i <= 6; $i++){
                    print "<table>";
                    $wyniki_uczestnikow = mysqli_query($bd, "SELECT imie, nazwisko, SUM(wynik)/2 AS wynik FROM wyniki LEFT JOIN sportowiec ON wyniki.sportowiec_id = sportowiec.id WHERE wyniki.dyscyplina_id = 3 AND wyniki.sportowiec_id =$i");
                    while ($wyn = $wyniki_uczestnikow->fetch_assoc()){
                        echo "<tr><th>".$wyn['imie']." ".$wyn['nazwisko']."</th></tr>";
                        echo "<tr><td>Średni wynik: ".$wyn['wynik']." m</td></tr>";
                    }
                    print "</table>";
                }
                ?>
    </main>
    <footer>
    <p>Klub Sportowy</p>
    <p>Strone Opracował: PESEL</p>
    </footer>
    </div>
</body>
<?php
    mysqli_close($bd);
?>
</html>