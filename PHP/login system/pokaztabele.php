<html>
<head>
<meta charset="utf-8">
</head>
<?php
$servername = "localhost";
$username = "root";
$dbname = "user";
$conn = new mysqli($servername, $username, '', $dbname);
$sql = "SELECT imie, haslo, mail FROM users";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    echo "<table><tr><th>Imie</th><th>haslo</th><th>mail</th>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["imie"]. "</td><td>" . $row["haslo"]. "</td><td> " . $row["mail"]. "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?>
</html>