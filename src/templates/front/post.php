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
        <h1 class="title-ff text-center"><?= $post[0]['post_title'] ?></h1>
        <div class="row">
            <div class="col-lg-6">
                <img class="w-100" src="<?= $post[0]['post_path'] ?>">
            </div>
            <div class="col-lg-6">
                <p class="fs-5 text-ff"><?= $post[0]['post_content'] ?></p>
            </div>
        </div>
    </div>
</section>

<?php $content = ob_get_clean(); ?>
<?php require('layout.php') ?>