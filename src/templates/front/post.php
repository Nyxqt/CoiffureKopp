<?php $title = "Actualité"; ?>
<?php ob_start(); ?>
<!-- HIGHLIGHT -->
<section>
    <div class="container parallax-salon" id="salon-highlight">
        <h1 class="highlight-ff text-center text-white">ARTICLE</h1>
    </div>
</section>
<!-- MAIN CONTENT -->
<section class="mt-5">
    <div class="container-lg">
        <h1 class="title-ff text-center"><?= $post[0]['pTitle'] ?></h1>
        <div class="row">
            <div class="col-lg-6">
                <img class="img-fluid" src="<?= $post[0]['path'] ?>">
            </div>
            <div class="col-lg-6 position-relative">
                <p class="fs-5 text-ff"><?= $post[0]['pContent'] ?></p>
                <p class="fs-5 text-ff fst-italic position-absolute bottom-0 end-0"><?= $post[0]['pDate'] ?></p>
            </div>
        </div>
    </div>
</section>

<?php $content = ob_get_clean(); ?>
<?php require('layout.php') ?>