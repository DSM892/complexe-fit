<?php
include('./bdd.php');

$id = $_GET['temp_user'];

$request = $mysqli->prepare("SELECT * FROM `TEMP_USER` WHERE id=?;");
$request->bind_param("i", $id);
$request->execute();
$request = $request->get_result();

if ($request->num_rows > 0) {
    $TEMP_USER = $request->fetch_assoc();
    $id = $TEMP_USER['id'];
    $lastname = $TEMP_USER['lastname'];
    $firstname = $TEMP_USER['firstname'];
    $email = $TEMP_USER['email'];
    $mdp = $TEMP_USER['mdp'];
    $is_admin = $TEMP_USER['is_admin'];

    $request = $mysqli->prepare("INSERT INTO `USER` VALUES (NULL, ?, ?, ?, ?, 0);");
    echo $mysqli->error;
    $request->bind_param("ssss", $lastname, $firstname, $email, $mdp);

    if ($request->execute()) {
        $delete = $mysqli->prepare("DELETE FROM `TEMP_USER` WHERE id=?;");
        $delete->bind_param("i", $id);
        $delete->execute();

        header('Location: admin.php');
        exit;
    }
}
?>