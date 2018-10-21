<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
</head>
<body>
<?php setcookie('zawartosc', 10, time()+10); ?>
<form method="post" action="">
<p>Restartcookie:</p> <input type="submit" name="submit" value="check"></br>
</form>
<?php
	if(isset($_POST['submit'])){
		if(isset($_COOKIE['zawartosc'])){
			print "<p>ISTNIEJE</p>";
		}else{
			print "<p>Nie ISTNIEJE</p>";
		}
	}
?>
</body>
</html>