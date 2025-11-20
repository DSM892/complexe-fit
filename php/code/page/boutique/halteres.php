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
            <input type="radio" name="radio-btn" id="img-6">

            <div class="slides">
                <div class="slide first"><img src="../../../images/halteres/1.jpg" alt="Image haltères 1"></div>
                <div class="slide"><img src="../../../images/halteres/2.jpg" alt="Image haltères 2"></div>
                <div class="slide"><img src="../../../images/halteres/3.jpg" alt="Image haltères 3"></div>
                <div class="slide"><img src="../../../images/halteres/4.jpg" alt="Image haltères 4"></div>
                <div class="slide"><img src="../../../images/halteres/5.jpg" alt="Image haltères 5"></div>
                <div class="slide"><img src="../../../images/halteres/6.jpg" alt="Image haltères 6"></div>
            </div>

            <div class="navigation-manual">
                <label for="img-1" class="manual-btn"></label>
                <label for="img-2" class="manual-btn"></label>
                <label for="img-3" class="manual-btn"></label>
                <label for="img-4" class="manual-btn"></label>
                <label for="img-5" class="manual-btn"></label>
                <label for="img-6" class="manual-btn"></label>
            </div>
        </div>
        <div id="produit_description">
            <h1>Halteres 20kg</h1>
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
            <a href="https://www.decathlon.fr/p/kit-halteres-de-musculation-20-kg-avec-disque-de-fonte-en-partie-recyclee/_/R-p-7449?mc=8018574&c=noir">En savoir plus</a>
        </div>
    </main>

</body>
</html>