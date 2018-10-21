<html>
<meta http-equiv="Refresh" content="0.01; url=http://localhost/sbs/zadnia07022017/dodaj.html" />
</html>
<?php
$code=$_GET['code'];
$name=$_GET['name'];
$continent=$_GET['continent'];
$region=$_GET['region'];
$bd=mysqli_connect('localhost','root','','world')
or die(mysqli_error());
$pokaz=mysqli_query($bd,"INSERT INTO country (Code, Name, Continent, Region) 
VALUES ('$code','$name','$continent','$region')");
mysqli_close($bd);
?>