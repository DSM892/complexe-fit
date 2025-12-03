<?php
session_start();
include('bdd.php');

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $lastname = $_POST['lastname'];
    $firstname = $_POST['firstname'];

    $request = $mysqli->prepare("SELECT id FROM `USER` WHERE lastname=? AND firstname=?;");
    $request->bind_param("ss", $lastname, $firstname);
    $request->execute();
    $request = $request->get_result();
    header('Location: conversation.php?other_user_id='.$request->fetch_assoc()['id']);
    exit;
}
?>