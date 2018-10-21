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
    <link rel="stylesheet" type="text/css" href="style/style_log.css">
    <sciript src="script.js" type="text/javascript"></sciript>
    <link href="https://fonts.googleapis.com/css?family=Lato|Roboto+Condensed" rel="stylesheet">
</head>

<body>
<?php  /* SQL CONN*/ $link = mysqli_connect("localhost", "root", "" , "odkuj"); ?>
<header>
    <a id="logo" href="index.php"></a>
    <div class="menu_container">
        <ul>
            <li><a href='losuj.php'> Zadania Maturalne</a></li>
            <li><a href='profil.php'>  Profil</a></li>
            <li><a href='logowanie.php' style="float:right"> Zaloguj</a></li>
        </ul>
    </div>
</header>
<main>
    <article>
<?php
/* HTML SHOW*/
    $log_reg = <<<HTML
        <form action='' method='post'>
        <div class='register_container'>
        <span class="reg">Logowanie</span>
        <ul class='login'>
            <li> <span class="reg">Login</span><input type="text" name='namel' class='reg' required><br> </li>
            <li> <span class="reg">Hasło</span><input type="password" name='passl' class='reg' required><br> </li>
            <li>   <input type="submit" value="Zaloguj"  class='reg' style='height: 40px; padding: 5px 10px;' name='loguj'></li>
        </ul>
        <span class="reg">Rejestracja</span>
        </form>
        <form action='' method='post'>
        <div class='register_container'>
        <ul class='login'>
            <li> <span class="reg">Login</span><input type="text" name='name' class='reg' required><br> </li>
            <li> <span class="reg">Hasło</span><input type="password" name='pass' class='reg' required><br> </li>
            <li> <span class="reg">Mail</span><input type="text" name='mail' class='reg' required><br> </li>
            <li> <input type="submit" value="Rejestruj"  class='reg' style='height: 40px; padding: 5px 10px;' name='rejestruj'></li>
        </ul>
            </form>
HTML;
    $wylog = <<<HTML
    <form action='' method='post'>
    <ul class='login'>
    <li> <input type="submit" value="Wyloguj"  class='reg' style='height: 40px; padding: 5px 10px;' name='wyloguj'></li>
    </ul>
    </form>
HTML;
/* END HTML SHOW*/
/* LOG CHECK*/

if(isset($_COOKIE['log'])){
        if($_COOKIE['log'] = 1){
            print ("Jesteś Zalogowany na konto ".$_COOKIE['name']."".$wylog."");
        }}else{
             print ($log_reg);
        }
/* END LOG CHECK*/
/* LOGIN*/
        if(isset($_POST['loguj'])){
            $nick = mysqli_real_escape_string ( $link, $_POST['namel']);
            $pass = mysqli_real_escape_string ( $link, $_POST['passl']);
            $password = md5($pass);
            $query = " SELECT login, password, avatar FROM user WHERE login='$nick' AND password='$password'";
            $result = mysqli_query($link, $query) or die("Error: ".mysqli_error($link));
            $row=mysqli_fetch_array($result, MYSQLI_ASSOC);
            
            if($row['login'] == $nick && $row['password'] == $password) {
                setcookie ('log', 1, time()+3600);
                setcookie ('img', $row['avatar'], time()+3600);
                setcookie ('name', $row['login'], time()+3600);
                
                header("Refresh:0");
            } else {
                print "<h2 style='color:red'>Błąd Logowania</h2>";
            }
        }
/* END LOGIN*/
/* REGISTER */
        if(isset($_POST['rejestruj'])){
            $name = $_POST['name'];
            $mail = $_POST['mail'];
            $pass = md5($_POST['pass']);
            $dodaj = mysqli_query($link , "INSERT INTO `user` VALUES ('$name','$pass','$mail',0,2)");
        }
/* END REGISTER */
/* UNLOG */
        if(isset($_POST['wyloguj'])){
            setcookie ('log', "OUT", time()-3600);
            setcookie ('name', "OUT", time()-3600);
            header("Refresh:0");
               
        }
/* END UNLOG*/
    ?>
    </article>
</main>
<footer>
    <span class="footercopy">Copyright© Bartłomiej Stachera ( SB-graphicc), Tomasz Szymański. All Rights Reserved</span>
</footer>
</body>
</html>