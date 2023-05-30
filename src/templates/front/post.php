<?php $title = "Actualité"; ?>
<?php ob_start(); ?>
<!-- HIGHLIGHT -->
<section>
    <div class="container parallax-salon" id="salon-highlight">
        <h1 class="highlight-ff text-center text-white">L'EQUIPE</h1>
    </div>
</section>
<!-- MAIN CONTENT -->
<section class="mt-5">
    <div class="container-lg">

    </div>
</section>

<?php $content = ob_get_clean(); ?>
<?php require('layout.php') ?>