<html>
<head>
    <style>
        body{
            background-color: #325793;
            color: #dce6f7;
            text-decoration: none;

        }
    </style>
</head>
<body>

<?php
print "<table>";
$bd=mysqli_connect('localhost','root','','world')
or die(mysqli_error());
$pokaz=mysqli_query($bd,'SELECT * FROM country');

while($tab=mysqli_fetch_array($pokaz))
    print '<tr><td>'.$tab['Code'].'</td><td>'.$tab['Name'].'</td><td>'.$tab['Continent'].'</td><td>'.$tab['Region'].
        '</td></tr>';
mysqli_close($bd);
print '</table>';
?>
</body>
</html>
