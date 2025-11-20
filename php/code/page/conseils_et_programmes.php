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
                <li><a href="../page/entrainement_chez_soi.php">Entrainement chez soi</a></li>
                <li><a href="#haut_de_page" id="header_page_actuelle">Conseils et programmes</a></li>
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

    <main id="conseils_et_programmes_main">
        <h1>Conseils et programmes</h1>
        <div>
            <ul>
                <a href="https://conseilsport.decathlon.fr/la-methode-pilates-pourquoi-est-elle-efficace"><li>
                    <img src="../../images/conseils_et_programmes/pilates.jpg" alt="Image pilates">
                    <h2>La methode Pilates : pourquoi est elle efficace ?</h2>
                    <p>Developper le corps de façon harmonieuse, rectifier les mauvaises postures, renforcer la sangle abdominale... voila quelques uns des bienfaits du Pilates. </p>
                </li></a>

                <a href="https://conseilsport.decathlon.fr/cest-quoi-lendurance-fondamentale"><li>
                    <img src="../../images/conseils_et_programmes/endurance.jpg" alt="Image course à pied">
                    <h2>C’est quoi l’endurance fondamentale ?</h2>
                    <p>Et si pour progresser en course a pied, le secret etait de courir lentement ? On vous explique tout sur l endurance fondamentale, cette allure cle de l entraînement.</p>
                </li></a>

                <a href="https://conseilsport.decathlon.fr/sport-et-ecologie-des-initiatives-pour-notre-climat"><li>
                    <img src="../../images/conseils_et_programmes/sac_de_sport.jpg" alt="Image forêt">
                    <h2>Comment entretenir son sac de sport et sa valise pour les garder ?</h2>
                    <p>Mauvaises odeurs, usure ? Apprenez a entretenir votre sac de sport et votre valise avec nos petits conseils pour garantir hygiene, durabilite et… performance longue duree.</p>
                </li></a>

                <a href="https://conseilsport.decathlon.fr/8-exercices-avec-des-halteres-ma-routine-fitness"><li>
                    <img src="../../images/conseils_et_programmes/ecologie.jpg" alt="Image haltères de musculation">
                    <h2>Sport et ecologie : des initiatives pour limiter son impact</h2>
                    <p>Où comment capitaliser sur nos bonnes actions pour une pratique du sport responsable</p>
                </li></a>

                <a href="https://conseilsport.decathlon.fr/entretenir-et-laver-ses-chaussures-de-running"><li>
                    <img src="../../images/conseils_et_programmes/running.jpg" alt="Image chaussures de running">
                    <h2>Entretenir et laver ses chaussures de running</h2>
                    <p>Pour garantir une meilleure duree de vie a vos chaussures de course a pied, mais aussi pour des raisons d hygiene et d odeur, il est important de conserver vos fideles complices propres. Machine a laver ou nettoyage a la main ? On vous explique tout.</p>
                </li></a>

                <a href="https://conseilsport.decathlon.fr/callisthenie-sans-materiel-programme-gratuit-28-jours"><li>
                    <img src="../../images/conseils_et_programmes/callisthenie.jpg" alt="Image callisthénie">
                    <h2>Callisthenie sans materiel : programme gratuit 28 jours</h2>
                    <p>Testez le programme de callisthenie, 28 seances gratuites au poids de corps, sans materiel.</p>
                </li></a>

                <a href="https://conseilsport.decathlon.fr/faire-du-sport-avec-son-chien-quelles-precautions-prendre"><li>
                    <img src="../../images/conseils_et_programmes/cerveau.jpg" alt="Image bien-être">
                    <h2>Les bienfaits du sport sur le cerveau</h2>
                    <p>Les effets du sport sur le cerveau, vous avez deja entendu parler ? Vous ne vous en souvenez plus ? Cet article pourrait bien vous aider a vous en rappeler. Oui, le sport c est bon pour la memoire, mais pas que.</p>
                </li></a>

                <a href="https://conseilsport.decathlon.fr/les-bienfaits-du-sport-sur-le-cerveau"><li>
                    <img src="../../images/conseils_et_programmes/chien.jpg" alt="Image chien et sport">
                    <h2>Faire du sport avec son chien : quelles precautions prendre ?</h2>
                    <p>Quand on a la chance d’être l’heureux·se compagnon·ne d’un·e chien·ne, l’idee de faire du sport ensemble est allechante pour l’un.e comme pour l’autre. Nos conseils pour des super seances avec votre partenaire a quatre pattes.</p>
                </li></a>
            </ul>
        </div>
    </main>

</body>
</html>