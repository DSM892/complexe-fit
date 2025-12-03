<?php
session_start();
if (!isset($_SESSION['id'])) {
    header('Location: connexion.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en" id="haut_de_page">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Messagerie</title>
    <link rel="icon" type="image/png" href="../../logos/logo_transparent.png">
    <link rel="stylesheet" href="../../css/conversation.css">
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
                <li><a href="../page/boutique.php">Boutique</a></li>
                <li><a href="../page/profil.php"><img src="../../logos/user.png" alt="Profil" id="user_img"></a></li>
            </ul>
        </nav>
    </header>

    <main>
        <h1>Messagerie</h1>
        <?php
        include('./bdd.php');

        $other_user_id = $_GET['other_user_id'];
        $my_id = $_SESSION['id'];

        $stmt = $mysqli->prepare("
            SELECT sender_id, receiver_id, content, created_at FROM MESSAGES WHERE (sender_id = ? AND receiver_id = ?) OR (sender_id = ? AND receiver_id = ?) ORDER BY created_at ASC");
        $stmt->bind_param("iiii", $my_id, $other_user_id, $other_user_id, $my_id);
        $stmt->execute();
        $result = $stmt->get_result();

        while ($row = $result->fetch_assoc()) {
            $is_me = ($row['sender_id'] == $my_id);
            $cls = $is_me ? 'msg_me' : 'msg_other';
            echo '<p>'.$row['content'].'<br>'.$row['created_at'].'</p>';
        }
        ?>

        <form action="add_messages.php" method="POST">
            <input type="hidden" name="other_user_id" value="<?php echo $other_user_id; ?>">
            <input type="text" id="content" name="content" placeholder="Envoyer un message" required>
            <input type="submit" value="Envoyer">
        </form>
    </main>
</body>
</html>