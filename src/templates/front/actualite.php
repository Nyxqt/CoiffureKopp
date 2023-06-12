<?php $title = "Actualité"; ?>
<?php ob_start(); ?>

<!-- HIGHLIGHT -->
<section>
    <div class="container parallax-salon" id="salon-highlight">
        <h1 class="highlight-ff text-center text-white">L'EQUIPE</h1>
    </div>
</section>
<!-- MAIN CONTENT -->
<section class=" mt-5">
    <div class="container-lg">
        <?php foreach ($actualite as $actu) { ?>
            <div class="row">
                <div class="col-lg-6">
                    <img class="w-100" src="<?= $actu['path'] ?>">
                </div>
                <div class="col-lg-6 text-center">
                    <h1 class="title-ff"><?= $actu['pTitle'] ?></h1>
                    <p class="text-ff fs-5 fst-italic">Publié le <?= $actu['pDate'] ?>.</p>
                    <a href="index.php?action=actualite&id=<?= $actu['pId'] ?>" class="btn btn-dark fs-4 mt-5">Voir l'article</a>
                </div>
            </div>
        <?php } ?>
    </div>
</section>

<?php $content = ob_get_clean(); ?>
<?php require('layout.php') ?>