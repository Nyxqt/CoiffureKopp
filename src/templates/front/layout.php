<!DOCTYPE html>
<html lang="fr" data-bs-theme="light">

<!-- HEAD -->

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="HTML, CSS, JavaScript, SQL, PHP">
    <meta name="description" content="Site vitrine pour Coiffure Kopp à Saint-Avold">
    <meta name="author" content="Zinedine Geiss">
    <meta name="referrer" content="no-referrer-when-downgrade">
    <title><?= $title ?></title>
    <?php require('../assets/lib/externals.php') ?>
</head>

<!-- END OF HEAD -->

<!-- REQUIRE HEADER + FOOTER -->

<?php
require('header.php');
require('footer.php');
?>

<body>
    <header class="sticky-top">
        <?= $header ?>
    </header>
    <main>
        <?= $content ?>
    </main>
    <footer class="mt-5">
        <?= $footer ?>
    </footer>

    <?php require('../assets/lib/externalsJS.php') ?>
    <script src="../assets/js/navbar.js"></script>
</body>

</html>