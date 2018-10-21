<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
	session_start(); 	
	if(!isset($_SESSION['licznik']))
	{
		$_SESSION['licznik'] = 0;
	}	
	$_SESSION['licznik']++; 
    echo 'Odwiedziłeś już nas'.$_SESSION['licznik'].' razy!';
    print $_SERVER['HTTP_X_FORWARDED_FOR'].''.$_SERVER['REMOTE_ADDR'];
?>
</body>
</html>