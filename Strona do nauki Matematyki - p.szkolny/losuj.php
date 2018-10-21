<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="Obrazki/logo.png">
    <title>od&radic;kuj się</title>
    <meta description="Strona Poświęcona Nauce Matematyki Dla osób 'Przykutych' do Niskiej Oceny">
    <link rel="stylesheet" type="text/css" href="style/style.css">
    <link rel="stylesheet" type="text/css" href="style/losuj.css">
    <sciript src="script.js" type="text/javascript"></sciript>
    <link href="https://fonts.googleapis.com/css?family=Lato|Roboto+Condensed" rel="stylesheet">
</head>

<body>
    <header>
        <a id="logo" href="index.php"></a>
        <div class="menu_container">
            <ul>
                <li><a href='losuj.php'> Zadania Maturalne</a></li>
                <li><a href='profil.php'> Profil</a></li>
                <li><a href='logowanie.php' style="float:right"> Zaloguj</a></li>
            </ul>
        </div>
    </header>
    <main>
        <form method="post">
            <div class="form">
        <?php        
        $servername = "localhost";
        $username = "root";
        $dbname = "odkuj";
        $random = rand(1, 25);
        $conn = new mysqli($servername, $username, '', $dbname);
        $sql = "SELECT `ID`,`pytanie`, `A`, `B`, `C`, `D` FROM pytania WHERE `ID`=".$random.";";
        $result = $conn->query($sql);
        if ($result->num_rows > 0){
            while($row = $result->fetch_assoc()) {
                print "<div class='pytanie'>". $row["pytanie"]."</div><br>";

                print " <ul class='quizz'> <input type='radio' name='odp' value='A' id='1'>
                    <li class='odpp'><label for='1' onclick='checked(\"A\")'>".$row["A"]." </label></li>";
                    
                print " <input type='radio' name='odp' value='B' id='2' >
                    <li class='odpp'><label for='2' onclick='checked(\"B\")'>".$row["B"]." </label></li>";

                print " <input type='radio' name='odp' value='C' id='3' >
                    <li class='odpp'><label for='3' onclick='checked(\"C\")'>".$row["C"]." </label></li>";

                print " <input type='radio' name='odp' value='D' id='4' >
                    <li class='odpp'><label for='4' onclick='checked(\"D\")'>".$row["D"]." </label></li>";
                print "<li class='odpp' style=' left : 60px'><label onclick='next()' id='next'>Losuj Pytanie </label></li></ul></div>";
                }
            
        } else {
            echo "0 results";
        }
        $conn->close();
        
            ?> 
    </form>
        </main>
    <footer><span class="footercopy">Copyright© Bartłomiej Stachera ( SB-graphicc), Tomasz Szymański. All Rights Reserved</span></footer>
<?php 
    $conn = new mysqli($servername, $username, '', $dbname);
    $odp  = $conn->query('SELECT `PoP` FROM pytania WHERE `ID` ='.$random.';')->fetch_object()->PoP;
    $conn->close();
    print " <script>
    document.getElementsByClassName('odpp')[4].style.display = 'none';
    function checked(x){
    if (x == '".$odp."'){
        document.getElementsByClassName('pytanie')[0].innerHTML = 'Gratulacje To Poprawna Odpowiedź ".$odp." :D';
        document.getElementsByClassName('odpp')[0].style.display = 'none';
        document.getElementsByClassName('odpp')[1].style.display = 'none';
        document.getElementsByClassName('odpp')[2].style.display = 'none';
        document.getElementsByClassName('odpp')[3].style.display = 'none';
        document.getElementsByClassName('odpp')[4].style.display = 'block';
    }else{
        document.getElementsByClassName('pytanie')[0].innerHTML = 'Zła odpowiedź Poprawna to ".$odp." :D';
        document.getElementsByClassName('odpp')[0].style.display = 'none';
        document.getElementsByClassName('odpp')[1].style.display = 'none';
        document.getElementsByClassName('odpp')[2].style.display = 'none';
        document.getElementsByClassName('odpp')[3].style.display = 'none';
        document.getElementsByClassName('odpp')[4].style.display = 'block';
    }
}
    function next(){ location.reload() } </script>";
?>
</body>
</html>