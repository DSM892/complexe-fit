<?php
include('./bdd.php');

$id = $_GET['temp_user'];

$request = $mysqli->prepare("DELETE FROM `TEMP_USER` WHERE id=?;");
$request->bind_param("i", $id);
$request->execute();

header('Location: admin.php');
exit;
?>