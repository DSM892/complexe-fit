<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salles</title>
    <link rel="icon" type="image/png" href="../../logos/logo_transparent.png">
    <link rel="stylesheet" href="../../css/style.css">
    <!-- Leaflet CSS -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <style>
        #map {
            height: 600px;
            width: 1000px;
        }
    </style>
</head>
<body>

    <header>
        <nav>
            <ul>
                <li><a href="../page/accueil.php"><img src="../../logos/logo_complet_transparent.png" alt="Logo" id="logo"></a></li>
                <li><a href="#haut_de_page" id="header_page_actuelle">Salles</a></li>
                <li><a href="../page/abonnements.php">Abonnements</a></li>
                <li><a href="../page/entrainement_chez_soi.php">Entraînement chez soi</a></li>
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

    <main id="salles_main">
        <h1>Salles</h1>
        <div id="map"></div>

        <!-- Leaflet JS -->
        <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
        <script>
            // Initialisation de la carte centrée sur la France
            const map = L.map('map').setView([46.85219084156061, 2.494016499332636], 5);

            // Chargement des tuiles OpenStreetMap
            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '&copy; OpenStreetMap contributors'
            }).addTo(map);

            // Liste des salles avec position et URL
            const salles = [
                { position: [48.86177122117126, 2.3566836203050787], url: "salles/paris.php", title: "87 Rue du Temple, 75003 Paris" },
                { position: [45.761025868909606, 4.835270489238566], url: "salles/lyon.php", title: "42 Rue de la République, 69002 Lyon" },
                { position: [49.44453716221692, 1.0974475317422878], url: "salles/rouen.php", title: "17 rue de la Seille, 76000 Rouen" },
                { position: [50.62443131417116, 3.065053039879338], url: "salles/lille.php", title: "158 Rue Barthélemy Delespaul, 59000 Lille" },
                { position: [43.34094288587986, 5.381131362408371], url: "salles/marseille.php", title: "87 Bd Alphonse Allais, 13014 Marseille" }
            ];

            // Ajout des markers cliquables
            salles.forEach(salle => {
                const marker = L.marker(salle.position).addTo(map);
                marker.bindPopup(salle.title);

                marker.on('click', () => {
                    window.location.href = salle.url;
                });
            });
        </script>
    </main>

    <footer>
        <p>&copy; 2024 Complexe-Fit. Tous droits réservés.</p>
        <ul>
            <li><img src="../../images/equipe/1.jpg" alt="Membre de l'équipe 1"></li>
            <li><p>Bernard Balot</p></li>
            <li><img src="../../images/equipe/2.jpg" alt="Membre de l'équipe 2"></li>
            <li><p>Marie Culasse</p></li>
            <li><img src="../../images/equipe/3.jpg" alt="Membre de l'équipe 3"></li>
            <li><p>Jean Dupont</p></li>
        </ul>
    </footer>
</body>
</html>