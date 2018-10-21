<html>

<head>
    <meta charset="utf-8">
</head>

<body>
    <form method='get'>
        Imię
        <input type="text" name='name'>
        <br> Mail
        <input type="text" name='mail'>
        <br>
        <input type="submit">
        <br>

    </form>
</body>

</html>
<?php
    $name=$_GET['name'];
    $mail=$_GET['mail'];
$sqlmaker=" CREATE DATABASE rejestracja;
           USE rejestracja;
           CREATE TABLE uzytkownik(
               imie TEXT,
               mail TEXT
           );";
    $conn=new mysqli("localhost","root","");
    $doing=mysql_query($sql);

    $conn->close();
      
   
?>