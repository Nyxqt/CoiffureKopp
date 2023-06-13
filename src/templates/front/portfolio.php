<?php $title = "Portfolio"; ?>
<?php ob_start(); ?>

<!-- HIGHLIGHT -->
<section>
    <div class="container parallax-salon" id="salon-highlight">
        <h1 class="highlight-ff text-center text-white">L'EQUIPE</h1>
    </div>
</section>
<!-- MAIN CONTENT -->
<?php
// TODO: CHANGE THE TEMPLATE TO SEARCH SECTION ON GAMING PROJECT
?>
<section class=" mt-5">
    <div class="container-lg">
        <div class="row">
            <?php foreach ($images as $image) { ?>
                <div class="col-lg-2">
                    <img class="news-img" src="<?= $image['path'] ?>">
                </div>
            <?php } ?>
        </div>

    </div>
</section>

<?php $content = ob_get_clean(); ?>
<?php require('layout.php') ?>