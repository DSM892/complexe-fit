<?php
include('./bdd.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $lastname = $_POST['lastname'];
    $firstname = $_POST['firstname'];
    $email = $_POST['email'];
    $mdp = password_hash($_POST['mdp'], PASSWORD_BCRYPT);

    $request = $mysqli->prepare("INSERT INTO `TEMP_USER` VALUES (NULL, ?, ?, ?, ?, 0);");
    echo $mysqli->error;
    $request->bind_param("ssss", $lastname, $firstname, $email, $mdp);

    if ($request->execute()) {
        header('Location: accueil.php');
        exit;
    }
    $request->close();
}
?>