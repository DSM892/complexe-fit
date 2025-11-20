<?php
include("bdd.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $mdp = $_POST['mdp'];
    $result = $mysqli->query("SELECT * FROM USER;");

    if ($result->num_rows > 0) {
        while ($USER = $result->fetch_assoc()) {
            if ($email === $USER['email']) {
                if (password_verify($mdp, $USER['mdp'])) {
                    session_start();
                    $_SESSION['id'] = $USER['id'];
                    $_SESSION['firstname'] = $USER['firstname'];
                    $_SESSION['is_admin']  = $USER['is_admin'];
                    header('Location: accueil.php');
                    exit;
                }
            }
        }
        echo "Erreur : Utilisateur introuvable !";
    }
    echo "Erreur : Aucun utilisateur !";
}
?>