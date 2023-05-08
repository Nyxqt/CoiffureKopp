<?php $title = "Accueil"; ?>
<?php ob_start(); ?>

coucou
<div class="test"></div>

<?php $content = ob_get_clean(); ?>
<?php require('layout.php') ?>