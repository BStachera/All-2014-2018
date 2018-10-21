<?php
$bd = mysqli_connect ( 'localhost', 'root', '', 'user' );
$nick = mysqli_real_escape_string ( $bd, $_GET['nick'] );
$password = mysqli_real_escape_string ( $bd, $_GET['password'] );
$query = " SELECT imie, haslo FROM users WHERE imie='$nick' AND haslo='$password' ";
$do_query = mysqli_query ( $bd, $query ) or die ( 'Failed Database Query' . mysqli_error () );
$catch = mysqli_fetch_array ( $do_query );
if ($catch['imie'] == $nick && $catch['haslo'] == $password) {
    print "<h1> Zalogowano Pomyślnie</h1>";
    print " <meta http-equiv=\"Refresh\" content=\"0.01; url=yea.html\" /> ";
} else {
    print "<h1> Sprawdz Pasy</h1>";
}


?>