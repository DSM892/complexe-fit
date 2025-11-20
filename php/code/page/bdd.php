<?php 
$mysqli = new mysqli("db", "user", "root", "database_complexe-fit");
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
if ($mysqli->connect_error) {
    die("Erreur de connexion : " . $mysqli->connect_error);
}
?>