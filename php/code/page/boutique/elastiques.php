<!DOCTYPE html>
<html lang="en" id="haut_de_page">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boutique</title>
    <link rel="icon" type="image/png" href="../../../logos/logo_transparent.png">
    <link rel="stylesheet" href="../../../css/style.css">
    <link rel="stylesheet" href="../../../css/carrousel.css">
</head>
<body>

    <header>
        <nav>
            <ul>
                <li><a href="../../page/accueil.php"><img src="../../../logos/logo_complet_transparent.png" alt="Logo" id="logo"></a></li>
                <li><a href="../../page/salles.php">Salles</a></li>
                <li><a href="../../page/abonnements.php">Abonnements</a></li>
                <li><a href="../../page/entrainement_chez_soi.php">Entrainement chez soi</a></li>
                <li><a href="../../page/conseils_et_programmes.php">Conseils et programmes</a></li>
                <li><a href="../../page/boutique.php">Boutique</a></li>
                <li><a href="../../page/inscription.php"><img src="../../../logos/user.png" alt="S'inscrire" id="user_img"></a></li>
            </ul>
        </nav>
    </header>

    <main id="produit_main">
        <div class="slider" id="boutique_slider">
            <input type="radio" name="radio-btn" id="img-1" checked>
            <input type="radio" name="radio-btn" id="img-2">
            <input type="radio" name="radio-btn" id="img-3">
            <input type="radio" name="radio-btn" id="img-4">
            <input type="radio" name="radio-btn" id="img-5">

            <div class="slides">
                <div class="slide first"><img src="../../../images/elastique/1.jpg" alt="Image élastique 1"></div>
                <div class="slide"><img src="../../../images/elastique/2.jpg" alt="Image élastique 2"></div>
                <div class="slide"><img src="../../../images/elastique/3.jpg" alt="Image élastique 3"></div>
                <div class="slide"><img src="../../../images/elastique/4.jpg" alt="Image élastique 4"></div>
                <div class="slide"><img src="../../../images/elastique/5.jpg" alt="Image élastique 5"></div>
            </div>

            <div class="navigation-manual">
                <label for="img-1" class="manual-btn"></label>
                <label for="img-2" class="manual-btn"></label>
                <label for="img-3" class="manual-btn"></label>
                <label for="img-4" class="manual-btn"></label>
                <label for="img-5" class="manual-btn"></label>
            </div>
        </div>
        <div id="produit_description">
            <h1>Elastiques de sport 15kg/25kg/35kg</h1>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing 
                elit, sed do eiusmod tempor incididunt ut labore et 
                dolore magna aliqua. Ut enim ad minim veniam, quis 
                nostrud exercitation ullamco laboris nisi ut aliquip 
                ex ea commodo consequat. Duis aute irure dolor in 
                reprehenderit in voluptate velit esse cillum dolore 
                eu fugiat nulla pariatur. Excepteur sint occaecat 
                cupidatat non proident, sunt in culpa qui officia 
                deserunt mollit anim id est laborum.
            </p>
            <a href="https://www.decathlon.fr/p/kit-3-training-band-elastiques-15-25-35kg-avec-3-mois-offerts-freeletics/_/R-p-373225?mc=8966621&c=bleu_orange_jaune">En savoir plus</a>
        </div>
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