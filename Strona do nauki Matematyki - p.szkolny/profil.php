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
    $profile = "
    <div class='article_main_header'>Twój Profil</div><br><br>
    <div class='article_main_description'>Avatar<img src='style/grafika/avatar/";
    $profile_a = ".png' title='Avatar'></img></div><br>
    <div class='article_main_description'>Nazwa Użytkownika:";
    $profile_b = <<<HTML
    </div>
    <form action='' method='post'>
        <ul class='login'>
            <li> <input type="submit" value="Wyloguj"  class='reg' style='height: 40px; padding: 5px 10px;' name='wyloguj'></li>
        </ul>
    </form>
    <div class="article_main_description">Miłego Użytkowania Pozdrawia Ekipa Odperwiastkuj się</div>
    <div class="article_main_description">[Strona Używa Plików coockie do logowania. po wylogowaniu pliki są usuwane.]</div>
HTML;
$login = <<<HTML
    <div class='article_main_description'> MUSISZ SIĘ ZALOGOWAĆ </div>
    <form action='logowanie.php' method='post'>
    <ul class='login'>
            <li> <input type="submit" value="Zaloguj Się"  class='reg' style='height: 40px; padding: 5px 10px;'></li>
    </ul>
    </form> 
HTML;
    if(isset($_COOKIE['log'])){
      if ($_COOKIE['log'] = 1){
          print $profile;
          echo $_COOKIE['img'];
          print $profile_a;
          echo $_COOKIE['name'];
          print $profile_b;
      }
    }else{
        print $login;
    }
    
    if(isset($_POST['wyloguj'])){
        setcookie ('log', "OUT", time()-3600);
        setcookie ('name', "OUT", time()-3600);
        setcookie ('img', "OUT", time()-3600);
           
    }
    
    ?>
        </article>
    </main>
    <footer><span class="footercopy">Copyright© Bartłomiej Stachera ( SB-graphicc), Tomasz Szymański. All Rights Reserved</span></footer>
</body>
</html>