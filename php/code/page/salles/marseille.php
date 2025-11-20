<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complexe-Fit Marseille</title>
    <link rel="icon" type="image/png" href="../../../logos/logo_transparent.png">
    <link rel="stylesheet" href="../../../css/style.css">
</head>
<body>

    <header>
        <nav>
            <ul>
                <li><a href="../accueil.php"><img src="../../../logos/logo_complet_transparent.png" alt="Logo" id="logo"></a></li>
                <li><a href="../salles.php" id="header_page_actuelle">Salles</a></li>
                <li><a href="../abonnements.php">Abonnements</a></li>
                <li><a href="../entrainement_chez_soi.php">Entrainement chez soi</a></li>
                <li><a href="../conseils_et_programmes.php">Conseils et programmes</a></li>
                <li><a href="../boutique.php">Boutique</a></li>
                <?php
                if (isset($_SESSION['firstname'])) {
                    $firstname = $_SESSION['firstname'];
                    echo('<li><a href="../page/profil.php"><img src="../../../logos/user.png" alt="Connexion" id="user_img"></a></li>');
                } else {
                    echo('<li><a href="../page/connexion.php"><img src="../../../logos/user.png" alt="Connexion" id="user_img"></a></li>');
                }
                ?>
            </ul>
        </nav>
    </header>
    
    <main id="salles_specifique_main">
        <h1>Complexe-Fit Marseille</h1>
        <h2>87 Bd Alphonse Allais, 13014 Marseille</h2>
        <p>
            Bienvenue au Complexe-Fit Marseille ! Notre salle de sport située au cœur 
            de la métropole marseillaise vous offre un espace moderne et équipé pour tous vos 
            besoins en matière de fitness et de bien-être. Que vous soyez débutant 
            ou athlète confirmé, notre équipe de professionnels est là pour vous 
            accompagner dans votre parcours sportif.
        </p>
        <div id="details_salles_specifique1">
            <img src="../../../images/salles/marseille.jpg" alt="Complexe-Fit Marseille">
            <div id="details_salles_specifique2">
                <div>
                    <h3>Itinéraire :</h3>
                    <ul>
                        <li>En métro : Ligne 3, station "Temple" (à 2 minutes à pied)</li>
                        <li>En bus : Lignes 20, 65, arrêt "République - Temple"</li>
                        <li>En vélo : Station Vélib' à proximité</li>
                        <li>En voiture : Parking public disponible à proximité</li>
                    </ul>
                </div>
                <div>
                    <h3>Nos équipements :</h3>
                    <ul>
                        <li>Machines de musculation dernier cri</li>
                        <li>Zone cardio avec tapis de course, vélos elliptiques et rameurs</li>
                        <li>Salle de cours collectifs (yoga, pilates, zumba, etc.)</li>
                        <li>Espace détente avec sauna et hammam</li>
                    </ul>
                </div>
                <div>
                    <h3>Nos services :</h3>
                    <ul>
                        <li>Coaching personnalisé</li>
                        <li>Programmes d'entraînement adaptés à vos objectifs</li>
                        <li>Ateliers nutrition et bien-être</li>
                        <li>Accès 24/7 pour les membres</li>
                    </ul>
                </div>
            </div>
        </div>
    </main>

</body>
</html>