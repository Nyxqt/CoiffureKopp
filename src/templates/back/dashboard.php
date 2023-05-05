<?php $title = "Dashboard"; ?>
<?php ob_start(); ?>

<?php echo date("d/m/Y") ?>

<?php $content = ob_get_clean(); ?>
<?php require('layout.php') ?>