<?php
session_start();
include('bdd.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $content = $_POST['content'];

    $sender_id = $_SESSION['id'];
    $created_at = date('Y-m-d H:i:s');

    $request = $mysqli->prepare("INSERT INTO `MESSAGES` VALUES (NULL, ?, ?, ?);");
    $request->bind_param("iss", $sender_id, $content, $created_at);

    if ($request->execute()) {
        header('Location: messagerie.php');
        exit;
    }
    $request->close();
}
?>