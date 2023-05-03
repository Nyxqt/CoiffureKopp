<?php $title = "Dashboard"; ?>
<?php ob_start(); ?>

Bonjour

<?php $content = ob_get_clean(); ?>
<?php require('layout.php') ?>