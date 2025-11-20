<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
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
                <li><a href="../page/inscription.php"><img src="../../logos/user.png" alt="S'inscrire" id="user_img"></a></li>
            </ul>
        </nav>
    </header>

    <main id="inscription_main">
        <h1>Inscription</h1>
        <form action="add_temp_users.php" method="POST">
            <label for="lastname">Nom :</label>
            <input type="text" id="lastname" name="lastname" required>

            <label for="firstname">Prénom :</label>
            <input type="text" id="firstname" name="firstname" required>

            <label for="email">Email :</label>
            <input type="text" id="email" name="email" required>

            <label for="mdp">Mot de passe :</label>
            <input type="password" id="mdp" name="mdp" required>

            <input type="submit" value="S'inscrire">
            <a href="connexion.php">Connexion</a>
        </form>
    </main>
</body>
</html>