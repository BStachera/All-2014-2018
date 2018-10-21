<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kalkulator</title>
</head>
<body>
    <form method="post" action"?">
        X <input type="number" name="x">&nbsp;&nbsp;&nbsp;
         Y<input type="number" name="y"><br>
        <input type="radio" name="wynik" value="1">+<br>
        <input type="radio" name="wynik" value="2">-<br>
        <input type="radio" name="wynik" value="3">*<br>
        <input type="radio" name="wynik" value="4">/<br>
        <input type="submit" name="submit" value="Licz">
    </form>
    <?php 
    $w = $_POST['wynik'];
    $x = $_POST['x'];
    $y = $_POST['y'];
    if(isset($_POST["submit"])){
        switch ($w){
            case 1:
                print $x+$y;
                break;
            case 2:
                print $x-$y;
                break;
            case 3:
                print $x*$y;
                break;    
            case 4:
                print $x/$y;
                break;
        }
    }
    ?>
</body>
</html>