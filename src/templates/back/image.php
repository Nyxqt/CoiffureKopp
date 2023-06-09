<?php $title = "Images"; ?>
<?php ob_start(); ?>

<div class="container-fluid">
    <div class="row">
        <div class="d-flex mt-3">
            <a class="btn btn-primary" href="index.php?action=addImage" role="button">
                <i class="fa-solid fa-user-plus"></i>
                <span class="ms-2">Ajouter</span></a>
        </div>
        <table class="table table-dark table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Image</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data as $image) { ?>
                    <tr>
                        <th scope="row"><?= $image['id'] ?></th>
                        <td><img class="back-img" src="<?= $image['path'] ?>" alt=""></td>
                        <td>
                            <a class="btn btn-danger" href="index.php?action=delImage&id=<?= $image['id'] ?>" onclick="return(confirm('Voulez-vous supprimer cette entrée ?'));" role="button">
                                <span>Effacer</span><i class="fa-solid fa-user-minus ms-2"></i></a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        <!-- PAGINATION -->
        <?php if (isset($_GET['p'])) { ?>
            <div aria-label="Page navigation example">
                <ul class="pagination justify-content-center">
                    <li class="page-item <?php if ($page == 1) {
                                                echo 'disabled';
                                            } ?>">
                        <a class="page-link" href="index.php?action=image&p=<?= $previous ?>" tabindex="-1" aria-disabled="true">Précédent</a>
                    </li>
                    <?php for ($i = $start; $i <= $end; $i++) { ?>
                        <li class="page-item <?= ($page == $i) ? 'active" aria-current="page"' : '"' ?>><a class=" page-link" href="index.php?action=image&p=<?php echo $i; ?>"><?= $i; ?></a></li>
                    <?php } ?>
                    <li class="page-item <?php if ($page == $num_pages) {
                                                echo 'disabled';
                                            } ?>">
                        <a class="page-link" href="index.php?action=image&p=<?php echo $next ?>">Suivant</a>
                    </li>
                </ul>
            </div>
        <?php } ?>
    </div>
</div>

<?php $content = ob_get_clean(); ?>
<?php require('layout.php') ?>