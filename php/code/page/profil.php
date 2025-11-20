<?php session_start() ?>

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
                <li><a href="../page/profil.php"><img src="../../logos/user.png" alt="Profil" id="user_img"></a></li>
            </ul>
        </nav>
    </header>

    <main id="connexion_main">
        <?php
        if (isset($_SESSION['is_admin'])) {
            if($_SESSION['is_admin']==1) {
                echo("<a href='admin.php'>Demandes d'inscriptions</a>");
            }
        }
        ?>
        <a href="logout.php">Se déconnecter</a>
    </main>
</body>
</html>