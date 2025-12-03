<?php
session_start();
include('bdd.php');

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $content = $_POST['content'];
    $sender_id = $_SESSION['id'];
    $receiver_id = $_POST['other_user_id'];
    $created_at = date('Y-m-d H:i:s');

    $request = $mysqli->prepare("INSERT INTO `MESSAGES` (sender_id, receiver_id, content, created_at) VALUES (?, ?, ?, ?)");
    $request->bind_param("iiss", $sender_id, $receiver_id, $content, $created_at);
    $request->execute();

    header('Location: conversation.php?other_user_id='.$receiver_id);
    exit;
}
?>