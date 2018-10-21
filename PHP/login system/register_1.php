<html>
<meta charset="utf-8">
<meta http-equiv="Refresh" content="0.01; url=yea.html" />
</html>
<?php
$name=$_GET['name'];
$pass=$_GET['pass'];
$mail=$_GET['mail'];
$bd=mysqli_connect('localhost','root','','user');
$dodaj=mysqli_query($bd,"INSERT INTO users VALUES ('$name','$mail','$pass')");
?>