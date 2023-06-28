<!DOCTYPE html>
<html lang="fr" data-bs-theme="dark">

<head>
    <meta charset="utf-8" />
    <title><?= $title ?></title>
    <?php require('../assets/lib/externals.php') ?>
</head>

<body>
    <?= $content ?>
    <?php require('../assets/lib/externalsJS.php') ?>
    <script src="../assets/js/login.js"></script>
</body>

</html>