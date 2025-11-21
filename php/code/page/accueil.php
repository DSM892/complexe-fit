<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en" id="haut_de_page">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil - Complexe-Fit</title>
    <link rel="icon" type="image/png" href="../../logos/logo_transparent.png">
    <link rel="stylesheet" href="../../css/style.css">
</head>
<body>

    <header>
        <nav>
            <ul>
                <li><a href="#haut_de_page"><img src="../../logos/logo_complet_transparent.png" alt="Logo" id="logo"></a></li>
                <li><a href="salles.php">Salles</a></li>
                <li><a href="abonnements.php">Abonnements</a></li>
                <li><a href="entrainement_chez_soi.php">Entraînement chez soi</a></li>
                <li><a href="conseils_et_programmes.php">Conseils et programmes</a></li>
                <li><a href="boutique.php">Boutique</a></li>
                <?php
                if (isset($_SESSION['firstname'])) {
                    $firstname = $_SESSION['firstname'];
                    echo('<li><a href="profil.php"><img src="../../logos/user.png" alt="Profil" id="user_img"></a></li>');
                } else {
                    echo('<li><a href="connexion.php"><img src="../../logos/user.png" alt="Connexion" id="user_img"></a></li>');
                }
                ?>
            </ul>
        </nav>
    </header>

    <main id="accueil_main">
        <div id="bienvenue">
            <?php
            if (isset($_SESSION['firstname'])) {
                echo('<p>Bienvenue, '.$_SESSION['firstname'].'</p>');
            } else {
                echo('<p>Bienvenue chez Complexe-Fit</p>');
            }
            ?>
            <p>Votre parcours fitness commence ici</p>
        </div>

        <div id="image">
            <img src="../../images/sport/bench_haltere_gourde_serviette.jpg" alt="Salle de sport Complexe-Fit">
        </div>

        <div id="liste">
            <h2>Pourquoi choisir Complexe-Fit ?</h2>
            <ul id="features_list">
                <li>
                    <img src="../../images/sport/velo.jpg" alt="Équipements modernes">
                    <h3>Equipements modernes</h3>
                    <p>Accès à du matériel de dernière génération dans toutes nos salles</p>
                </li>
                <li>
                    <img src="../../images/sport/planche.jpg" alt="Coachs professionnels">
                    <h3>Coachs professionnels</h3>
                    <p>Nos experts vous accompagnent dans votre progression personnelle</p>
                </li>
                <li>
                    <img src="../../images/sport/acces.jpg" alt="Accès 24/7">
                    <h3>Accès 24/7</h3>
                    <p>Entraînez-vous à l'heure qui vous convient le mieux</p>
                </li>
                <li>
                    <img src="../../images/sport/vieilles_femmes_rire.jpg" alt="Communauté">
                    <h3>Communauté active</h3>
                    <p>Rejoignez des milliers de membres passionnés par le fitness</p>
                </li>
            </ul>
        </div>

        <div id="messagerie">
            <h2>Prêt à commencer ?</h2>
            <?php
            if (!isset($_SESSION['firstname'])) {
                echo('<a href="abonnements.php">Découvrir nos abonnements</a>');
            } else {
                echo('<a href="messagerie.php">Accéder à la messagerie</a>');
            }
            ?>
        </div>

    </main>

</body>
</html>