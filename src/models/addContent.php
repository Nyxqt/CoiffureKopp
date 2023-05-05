<?php
$msg = '';
if (isset($_POST['submit'])) {

    if (
        (!isset($_POST['title']) || (empty($_POST['title'])))
        || (!isset($_POST['content']) || empty($_POST['content']))
    ) {
        $msg = '<div class="alert alert-danger mb-5 alert-dismissible" role="alert">
        Veuillez compléter tout les champs.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
    } elseif ((isset($_FILES['path']) && $_FILES['path']['error'] == 0)) {
        if ($_FILES['path']['size'] <= 1000000) {
            $fileInfo = pathinfo($_FILES['path']['name']);
            $extension = $fileInfo['extension'];
            $allowedExtensions = ['jpg', 'png', 'webp'];
            if (in_array($extension, $allowedExtensions)) {
                move_uploaded_file($_FILES['path']['tmp_name'], '../assets/images/' . basename($_FILES['path']['name']));
                $path = '../assets/images/' . basename($_FILES['path']['name']);
                $title = secureInput($_POST['title']);
                $content = secureInput($_POST['content']);
                $date = date("d/m/Y");

                $query = dbConnect()->prepare("INSERT INTO post (title, content, path, date) VALUES (:title, :content, :path, :date)");
                $query->bindValue(':title', $title, PDO::PARAM_STR);
                $query->bindValue(':content', $content, PDO::PARAM_STR);
                $query->bindValue(':path', $path, PDO::PARAM_STR);
                $query->bindValue(':date', $date, PDO::PARAM_STR);
                $query->execute();
                $msg = "Le contenu a bien été ajouté.";
            } else {
                $msg = 'Le format du fichier n\'est pas conforme, veuillez n\'envoyer que des fichiers .jpg .gif .png.';
            }
        } else {
            $msg = 'Votre fichier dépasse la limite de taille.';
        }
    } else {
        $path = '../assets/images/placeholder.jpg';
        $title = secureInput($_POST['title']);
        $content = secureInput($_POST['content']);
        $date = date("d/m/Y");

        $query = dbConnect()->prepare("INSERT INTO post (title, content, path, date) VALUES (:title, :content, :path, :date)");
        $query->bindValue(':title', $title, PDO::PARAM_STR);
        $query->bindValue(':content', $content, PDO::PARAM_STR);
        $query->bindValue(':path', $path, PDO::PARAM_STR);
        $query->bindValue(':date', $date, PDO::PARAM_STR);
        $query->execute();
        $msg = "Le contenu a bien été ajouté.";
    }
}
