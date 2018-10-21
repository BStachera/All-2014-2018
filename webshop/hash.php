
<!DOCTYPE html>
<html lang="en">
<head>
<?php 
$login = sha1($_GET['login']);
$haslo = sha1($_GET['haslo']);
$hashed=fopen('uzytkowik.txt','a');
    fputs($hashed, $login."\r\n");
    fputs($hashed, $haslo."\r\n");
fclose($hashed);
print "<meta http-equiv='refresh' content='2; URL=loguj.html'>";
?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
  <?php
  print "<h1>Pomyślnie zarejestrowana Trwa przekierowywanie</h1>";
  ?>  
</body>
</html>