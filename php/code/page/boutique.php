<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en" id="haut_de_page">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boutique</title>
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
                <li><a href="../page/entrainement_chez_soi.php">Entraînement chez soi</a></li>
                <li><a href="../page/conseils_et_programmes.php">Conseils et programmes</a></li>
                <li><a href="#haut_de_page" id="header_page_actuelle">Boutique</a></li>
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

    <main id="boutique_main">
        <h1>Boutique</h1>
        <ul>
            <a href="boutique/elastiques.php"><li>
                <img src="../../images/elastique/1.jpg" alt="Image élastiques de sport">
                <h2>Kit 3 training band elastiques 15, 25, 35kg avec 3 mois offerts Freeletics</h2>
                <h3>25.99€</h3>
            </li></a>

            <a href="boutique/halteres.php"><li>
                <img src="../../images/halteres/1.jpg" alt="Image haltères de musculation">
                <h2>Kit halteres de musculation 20 kg avec disque de fonte en partie recyclee</h2>
                <h3>49.99€</h3>
            </li></a>

            <a href="boutique/cage_de_musculation.php"><li>
                <img src="../../images/cage_de_musculation/1.jpg" alt="Image cage de musculation">
                <h2>Cage de musculation - power rack 900</h2>
                <h3>449.99€</h3>
            </li></a>

            <a href="boutique/creatine.php"><li>
                <img src="../../images/creatine/1.jpg" alt="Image creatine">
                <h2>Creatine monohydrate labellisee Creapure® neutre 300g</h2>
                <h3>18.99€</h3>
            </li></a>
        </ul>
    </main>

</body>
</html>