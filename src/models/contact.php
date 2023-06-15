<?php

if (isset($_POST['submit'])) {

    // Préparation du mail
    $destinataire = "contact@coiffure-kopp.fr";
    $sujet = "Message de coiffure-kopp.fr de la part de: " . filter_var($_POST['name']);
    $entete = "From: noreply@coiffure-kopp.fr" . "\r\n";
    $entete .= "MIME-Version: 1.0" . "\r\n";
    $entete .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    $message = 'Un message à été envoyé depuis coiffure-kopp.fr ' . filter_var($_POST['name']) . '
    <br />
    Email : ' . filter_var($_POST['email'], FILTER_SANITIZE_EMAIL) . '
    <br />
    <br />
    Voici son message :
    <br />
    <br />
    Sujet : ' . filter_var($_POST['subject'], FILTER_SANITIZE_EMAIL) . '
    <br />
    ' . filter_var($_POST['message'], FILTER_SANITIZE_FULL_SPECIAL_CHARS) . '
    <br />
    <br />
    ---------------
    <br />
    <br />
    Ceci est un mail automatique, Merci de ne pas y répondre.';


    mail($destinataire, $sujet, $message, $entete); // Envoi du mail
    echo '
    <script>
        /*alert("Message envoyé"); */
        window.addEventListener("load", () =>{$("#messageSent").modal("show");});
    </script>
    ';
}
