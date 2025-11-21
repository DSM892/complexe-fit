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
                <li><a href="../page/salles.php" id="text">Salles</a></li>
                <li><a href="../page/abonnements.php" id="text">Abonnements</a></li>
                <li><a href="../page/entrainement_chez_soi.php" id="text">Entraînement chez soi</a></li>
                <li><a href="../page/conseils_et_programmes.php" id="text">Conseils et programmes</a></li>
                <li><a href="#haut_de_page" id="text">Boutique</a></li>
                <?php
                if (isset($_SESSION['firstname'])) {
                    $firstname = $_SESSION['firstname'];
                    echo('<li><a href="../page/profil.php"><img src="../../logos/user.png" alt="Connexion" id="user_img"></a></li>');
                } else {
                    echo('<li><a href="../page/profil.php"><img src="../../logos/user.png" alt="Profil" id="user_img"></a></li>');
                }
                ?>
            </ul>
        </nav>
    </header>

    <main id="admin_main">
        <h1>Demande d'inscription</h1>
        <?php
            include("./bdd.php");
            ?>
            <table>
                <thead>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Email</th>
                    <th id="actions">Actions</th>
                </thead>
                <tbody>
            <?php 
            $result = $mysqli->query("SELECT * FROM TEMP_USER;");

            if ($result->num_rows > 0) {
                while ($TEMP_USER = $result->fetch_assoc()) {
                    $id = $TEMP_USER['id'];
                    $lastname = $TEMP_USER['lastname'];
                    $firstname = $TEMP_USER['firstname'];
                    $email = $TEMP_USER['email'];
                    echo "<tr>
                    <td>$lastname</td>
                    <td>$firstname</td>
                    <td>$email</td>
                    <td id='actions'>
                        <a href='approve_temp_users.php?temp_user=" . $id . "' style='color: green;'>Accepter</a>
                        <a href='disapprove_temp_users.php?temp_user=" . $id . "' style='color: red;'>Rejeter</a>
                    </td>
                    </tr>";
                };
            } else {
                echo "<tr><td colspan='4'>Aucune demande d'inscription en attente.</td></tr>";
            }
            ?>
                </tbody>
            </table>
    </main>

</body>
</html>