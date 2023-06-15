<!DOCTYPE html>
<html lang="fr" data-bs-theme="light">

<!-- HEAD -->

<head>
    <meta charset="utf-8" />
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