<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en" id="haut_de_page">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salles</title>
    <link rel="icon" type="image/png" href="../../logos/logo_transparent.png">
    <link rel="stylesheet" href="../../css/style.css">
</head>
<body>

    <header>
        <nav>
            <ul>
                <li><a href="../page/accueil.php"><img src="../../logos/logo_complet_transparent.png" alt="Logo" id="logo"></a></li>
                <li><a href="../page/salles.php">Salles</a></li>
                <li><a href="#haut_de_page" id="header_page_actuelle">Abonnements</a></li>
                <li><a href="../page/entrainement_chez_soi.php">Entrainement chez soi</a></li>
                <li><a href="../page/conseils_et_programmes.php">Conseils et programmes</a></li>
                <li><a href="../page/boutique.php">Boutique</a></li>
                <?php
                if (isset($_SESSION['firstname'])) {
                    $firstname = $_SESSION['firstname'];
                    echo('<li><a href="../page/profil.php"><img src="../../logos/user.png" alt="Connexion" id="user_img"></a></li>');
                } else {
                    echo('<li><a href="../page/connexion.php"><img src="../../logos/user.png" alt="Connexion" id="user_img"></a></li>');
                }
                ?>
            </ul>
        </nav>
    </header>

    <main id="abonnements_main">
        <h1>Abonnements</h1>
        <ul>
            <li>
                <h2>Mensuel</h2>
                <p>Accès illimité à toutes les salles pendant un mois. Idéal pour ceux qui veulent tester nos installations.</p>
                <h3>30€ par mois</h3>
            </li>
            <li>
                <h2>Trimestriel</h2>
                <p>Accès illimité à toutes les salles pendant trois mois. Parfait pour ceux qui souhaitent s'engager sur le long terme.</p>
                <h3>80€ pour trois mois</h3>
            </li>
            <li>
                <h2>Annuel</h2>
                <p>Accès illimité à toutes les salles pendant un an. Le meilleur choix pour les passionnés de fitness.</p>
                <h3>300€ par an</h3>
            </li>
        </ul>
    </main>
</body>
</html>