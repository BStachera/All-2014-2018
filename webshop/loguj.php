
<!DOCTYPE html>
<html lang="en">
<head>
<?php 
$login = sha1($_GET['login']);
$haslo = sha1($_GET['haslo']);
$linia = file('uzytkowik.txt');
print $linia{1};
?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

</body>
</html>