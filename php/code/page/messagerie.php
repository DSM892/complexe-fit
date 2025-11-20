<?php
session_start();
include('bdd.php');

// 🔒 Vérifie que l'utilisateur est connecté
if (!isset($_SESSION['id'])) {
    header('Location: connexion.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en" id="haut_de_page">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Messagerie</title>
    <link rel="icon" type="image/png" href="../../logos/logo_transparent.png">
    <link rel="stylesheet" href="../../css/style.css">
    <style>
        #messagerie_main {
            display: flex;
            flex-direction: column;
            align-items: center;
            color: white;
            padding: 30px;
        }

        .message-box {
            width: 60%;
            max-width: 800px;
            border: 1px solid #ccc;
            border-radius: 10px;
            background-color: #222;
            padding: 15px;
            margin: 10px 0;
        }

        .message-meta {
            font-size: 14px;
            color: #aaa;
        }

        form {
            margin-top: 20px;
            display: flex;
            flex-direction: column;
            width: 300px;
        }

        input[type="text"] {
            margin-bottom: 10px;
            padding: 10px;
            border-radius: 5px;
            border: none;
        }

        input[type="submit"] {
            padding: 10px;
            border: none;
            border-radius: 5px;
            background-color: #28a745;
            color: white;
            font-weight: bold;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #218838;
        }

        a {
            color: white;
            text-decoration: underline;
            margin-top: 10px;
        }
    </style>
</head>
<body>

    <header>
        <nav>
            <ul>
                <li><a href="../page/accueil.php"><img src="../../logos/logo_complet_transparent.png" alt="Logo" id="logo"></a></li>
                <li><a href="../page/salles.php">Salles</a></li>
                <li><a href="../page/abonnements.php">Abonnements</a></li>
                <li><a href="../page/entrainement_chez_soi.php">Entrainement chez soi</a></li>
                <li><a href="../page/conseils_et_programmes.php">Conseils et programmes</a></li>
                <li><a href="../page/boutique.php">Boutique</a></li>
                <li><a href="../page/profil.php"><img src="../../logos/user.png" alt="Profil" id="user_img"></a></li>
            </ul>
        </nav>
    </header>

    <main id="messagerie_main">
        <h2>Messagerie</h2>
        <?php
        $messages = $mysqli->query("SELECT MESSAGES.content, MESSAGES.created_at, USER.firstname FROM MESSAGES JOIN USER ON MESSAGES.sender_id = USER.id ORDER BY MESSAGES.created_at DESC");

        if ($messages->num_rows > 0) {
            while ($msg = $messages->fetch_assoc()) {
                echo '<div class="message-box">';
                echo '<p>'.$msg['content'].'</p>';
                echo '<p class="message-meta">Envoyé par <strong>'.$msg['firstname'].'</strong> le '.$msg['created_at'].'</p>';
                echo '</div>';
            }
        } else {
            echo '<p>Aucun message pour le moment.</p>';
        }
        ?>

        <form action="add_messages.php" method="POST">
            <label for="content">Nouveau message :</label>
            <input type="text" id="content" name="content" placeholder="Écris ton message ici..." required>
            <input type="submit" value="Envoyer">
            <a href="messagerie.php">Rafraîchir</a>
        </form>
    </main>

</body>
</html>
