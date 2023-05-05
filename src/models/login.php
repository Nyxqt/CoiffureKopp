<?php

$msg = '';
if (isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['password']) && !empty($_POST['password'])) {

    $email = secureInput($_POST['email']);
    $password = secureInput($_POST['password']);
    $query = dbConnect()->prepare("SELECT * FROM admin WHERE email = :email");
    $query->bindValue(":email", $email, PDO::PARAM_STR);
    $query->execute();
    $admin = $query->fetch();
    if ($admin == false || is_null($admin)) {
        $msg = "Identifiant ou mot de passe invalide!";
        exit;
    } else {
        if ($email == $admin['email'] && password_verify($password, $admin['password'])) {
            $_SESSION['email'] = $email;
            header('location: index.php');
        } else {
            $msg = "Identifiant ou mot de passe invalide!";
            exit;
        }
    }
}
