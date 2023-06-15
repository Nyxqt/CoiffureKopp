<?php $title = "Portfolio"; ?>
<?php ob_start(); ?>

<div class="mt-5 container-fluid-lg text-center">
    <img class="img-fluid" src="<?= $picture[0]['path'] ?>">
</div>

<?php $content = ob_get_clean(); ?>
<?php require('layout.php') ?>