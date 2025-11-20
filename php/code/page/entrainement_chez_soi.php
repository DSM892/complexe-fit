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
                <li><a href="#haut_de_page" id="header_page_actuelle">Entrainement chez soi</a></li>
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

    <main id="entrainement_chez_soi_main">
        <h1>Entraînement chez soi</h1>
        <ul>
            <a href="https://www.youtube.com/watch?v=Ev3xdQ6Uq68&feature=youtu.be"><li>
                <img src="../../images/entrainement_chez_soi/etirements.jpg" alt="Image étirements">
                <h2>Routine d'etirements</h2>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipiscing elit. Consectetur adipiscing elit quisque faucibus ex sapien vitae. 
                    Ex sapien vitae pellentesque sem placerat in id.
                </p>
            </li></a>

            <a href="https://www.youtube.com/watch?v=fUDlyymcOlc&feature=youtu.be"><li>
                <img src="../../images/entrainement_chez_soi/surpoids.jpg" alt="Image sportive en surpoids">
                <h2>Surpoids</h2>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipiscing elit. Consectetur adipiscing elit quisque faucibus ex sapien vitae. 
                    Ex sapien vitae pellentesque sem placerat in id.
                </p>
            </li></a>

            <a href="https://www.youtube.com/watch?v=fUDlyymcOlc&feature=youtu.be"><li>
                <img src="../../images/entrainement_chez_soi/abdos.jpg" alt="Image abdos">
                <h2>Abdos</h2>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipiscing elit. Consectetur adipiscing elit quisque faucibus ex sapien vitae. 
                    Ex sapien vitae pellentesque sem placerat in id.
                </p>
            </li></a>

            <a href="https://conseilsport.decathlon.fr/8-exercices-avec-des-halteres-ma-routine-fitness"><li>
                <img src="../../images/entrainement_chez_soi/halteres.jpg" alt="Image haltères de musculation">
                <h2>Halteres</h2>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipiscing elit. Consectetur adipiscing elit quisque faucibus ex sapien vitae. 
                    Ex sapien vitae pellentesque sem placerat in id.
                </p>
            </li></a>

            <a href="https://conseilsport.decathlon.fr/8-exercices-avec-une-bande-elastique-ma-routine-fitness"><li>
                <img src="../../images/entrainement_chez_soi/elastique.jpg" alt="Image élastiques de sport">
                <h2>Elastiques</h2>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipiscing elit. Consectetur adipiscing elit quisque faucibus ex sapien vitae. 
                    Ex sapien vitae pellentesque sem placerat in id.
                </p>
            </li></a>

            <a href="https://www.youtube.com/watch?v=am7_2Z6GeS0&feature=youtu.be"><li>
                <img src="../../images/entrainement_chez_soi/grossesse.jpg" alt="Image grossesse et sport">
                <h2>Grossesse</h2>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipiscing elit. Consectetur adipiscing elit quisque faucibus ex sapien vitae. 
                    Ex sapien vitae pellentesque sem placerat in id.
                </p>
            </li></a>

            <a href="https://www.youtube.com/watch?v=WB19BOmN8tM&feature=youtu.be"><li>
                <img src="../../images/entrainement_chez_soi/teletravail.jpg" alt="Image télétravail et sport">
                <h2>Teletravail</h2>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipiscing elit. Consectetur adipiscing elit quisque faucibus ex sapien vitae. 
                    Ex sapien vitae pellentesque sem placerat in id.
                </p>
            </li></a>
        </ul>
    </main>

</body>
</html>