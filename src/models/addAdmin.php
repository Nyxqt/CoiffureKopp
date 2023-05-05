<?php
$msg = '';
if (isset($_POST['submit'])) {

    if (
        (!isset($_POST['email']) || (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)))
        || (!isset($_POST['pw']) || empty($_POST['pw']))
        || (!isset($_POST['pwconfirm']) || empty($_POST['pwconfirm']))
    ) {
        $msg = 'Veuillez compléter tout les champs.';
        exit;
    }
    if (($_POST['pw']) <> ($_POST['pwconfirm'])) {
        $msg = 'Les mots de passe ne sont pas identiques';
        exit;
    } else {
        $email = secureInput($_POST['email']);
        $password = password_hash($_POST['pw'], PASSWORD_DEFAULT);

        $query = dbConnect()->prepare("INSERT INTO admin (email, password) VALUES (:email, :password)");
        $query->bindValue(':password', $password, PDO::PARAM_STR);
        $query->bindValue(':email', $email, PDO::PARAM_STR);
        $query->execute();
        $msg = "L'inscription a bien été effectuée.";
    }
}
