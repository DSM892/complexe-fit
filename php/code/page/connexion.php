<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en" id="haut_de_page">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    <link rel="icon" type="image/png" href="../../logos/logo_transparent.png">
    <link rel="stylesheet" href="../../css/style.css">
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
                <li><a href="../page/connexion.php"><img src="../../logos/user.png" alt="S'inscrire" id="user_img"></a></li>
            </ul>
        </nav>
    </header>

    <main id="connexion_main">
        <h1>Connexion</h1>
        <form action="connect_users.php" method="POST">
            <label for="email">Email :</label>
            <input type="text" id="email" name="email" required>

            <label for="mdp">Mot de passe :</label>
            <input type="password" id="mdp" name="mdp" required>

            <input type="submit" value="Se connecter">
            <a href="inscription.php">Inscription<a>
        </form>
    </main>
</body>
</html>