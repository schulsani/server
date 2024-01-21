<p>Die Daten wurden gesendet</p>
<?php
$servername = "localhost";
$username = "admin";
$password = "admin";
$dbname = "schulsani";

// Verbindung zur Datenbank herstellen
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
	die("Verbindung fehlgeschlagen: " . mysqli_connect_error());
}

// Datenabfrage
$sql = "SELECT status FROM status ORDER BY id DESC LIMIT 1";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
	$row = mysqli_fetch_assoc($result);
	echo $row["status"];
} else {
	echo "Keine Daten gefunden.";
}

// Verbindung schließen
mysqli_close($conn);
?>
<html>
<head>
    <meta http-equiv="refresh" content="2">
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
</head>
</html>
