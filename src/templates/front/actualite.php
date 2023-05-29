<?php $title = "L'équipe"; ?>
<?php ob_start(); ?>

<!-- HIGHLIGHT -->
<section>
    <div class="container parallax-salon" id="salon-highlight">
        <h1 class="highlight-ff text-center text-white">L'EQUIPE</h1>
    </div>
</section>
<!-- MAIN CONTENT -->
<section>
    <div class="container-lg mt-5">
        <?php foreach ($actualite as $actu) { ?>
            <div class="row">
                <div class="col-lg-6">
                    <img src="<?= $actu['post_path'] ?>">
                </div>
                <div class="col-lg-6">
                    <h1><?= $actu['post_title'] ?></h1>
                </div>
            </div>
        <? } ?>
    </div>
</section>

<?php $content = ob_get_clean(); ?>
<?php require('layout.php') ?>