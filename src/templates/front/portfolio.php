<?php $title = "Portfolio"; ?>
<?php ob_start(); ?>

<!-- HIGHLIGHT -->
<section>
    <div class="container parallax-salon" id="salon-highlight">
        <h1 class="highlight-ff text-center text-white uppercase">portfolio</h1>
    </div>
</section>
<!-- MAIN CONTENT -->
<?php
// TODO: CHANGE THE TEMPLATE TO SEARCH SECTION ON GAMING PROJECT
?>
<section class="mt-5">
    <div class="container-fluid-lg">
        <div class="row align-items-center p-0 m-0">
            <?php foreach ($images as $image) { ?>
                <div class="col-lg-2">
                    <a target="_blank" href="index.php?action=picture&id=<?= $image['id'] ?>">
                        <img class="img-fluid" src="<?= $image['path'] ?>">
                    </a>
                </div>
            <?php } ?>
        </div>
        <!-- PAGINATION -->
        <?php if (isset($_GET['p'])) { ?>
            <div aria-label="Page navigation example">
                <ul class="pagination justify-content-center">
                    <li class="page-item <?php if ($page == 1) {
                                                echo 'disabled';
                                            } ?>">
                        <a class="page-link" href="index.php?action=portfolio&p=<?= $previous ?>" tabindex="-1" aria-disabled="true">Précédent</a>
                    </li>
                    <?php for ($i = $start; $i <= $end; $i++) { ?>
                        <li class="page-item <?= ($page == $i) ? 'active" aria-current="page"' : '"' ?>><a class=" page-link" href="index.php?action=portfolio&p=<?php echo $i; ?>"><?= $i; ?></a></li>
                    <?php } ?>
                    <li class="page-item <?php if ($page == $num_pages) {
                                                echo 'disabled';
                                            } ?>">
                        <a class="page-link" href="index.php?action=portfolio&p=<?php echo $next ?>">Suivant</a>
                    </li>
                </ul>
            </div>
        <?php } ?>
    </div>
</section>

<?php $content = ob_get_clean(); ?>
<?php require('layout.php') ?>