<?php
$msg = '';
if (isset($_POST['submit'])) {
    if ((isset($_FILES['path']) && $_FILES['path']['error'] == 0)) {
        if ($_FILES['path']['size'] <= 1000000) {
            $fileInfo = pathinfo($_FILES['path']['name']);
            $extension = $fileInfo['extension'];
            $allowedExtensions = ['jpg', 'png', 'webp'];
            if (in_array($extension, $allowedExtensions)) {
                move_uploaded_file($_FILES['path']['tmp_name'], '../assets/images/' . basename($_FILES['path']['name']));
                $path = '../assets/images/' . basename($_FILES['path']['name']);

                $queryImage = dbConnect()->prepare("INSERT INTO image (path) VALUES (:path)");
                $queryImage->bindValue(':path', $path, PDO::PARAM_STR);
                $queryImage->execute();
                $msg = "Le contenu a bien été ajouté.";
            } else {
                $msg = 'Le format du fichier n\'est pas conforme, veuillez n\'envoyer que des fichiers .jpg .gif .png.';
            }
        } else {
            $msg = 'Votre fichier dépasse la limite de taille.';
        }
    }
}
