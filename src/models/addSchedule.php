<?php
$msg = '';
if (isset($_POST['submit'])) {

    if (
        (!isset($_POST['day']) || (empty($_POST['day'])))
        || (!isset($_POST['opening']) || empty($_POST['opening']))
        || (!isset($_POST['closing']) || empty($_POST['closing']))
    ) {
        $msg = '<div class="alert alert-danger mb-5 alert-dismissible" role="alert">
        Veuillez compléter tout les champs.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
    } else {
        $day = secureInput($_POST['day']);
        $opening = secureInput($_POST['opening']);
        $closing = secureInput($_POST['closing']);
        

        $query = dbConnect()->prepare("INSERT INTO schedule (day, opening, closing) VALUES (:day, :opening, :closing)");
        $query->bindValue(':day', $day, PDO::PARAM_STR);
        $query->bindValue(':opening', $opening);
        $query->bindValue(':closing', $closing);
        $query->execute();
        $msg = "Le contenu a bien été ajouté.";
    }
}