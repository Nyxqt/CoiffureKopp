<?php $title = "Actualité"; ?>
<?php ob_start(); ?>

<div class="container-fluid">
    <div class="row">
        <div class="d-flex mt-3">
            <a class="btn btn-primary" href="index.php?action=addSchedule" role="button">
                <i class="fa-solid fa-user-plus"></i>
                <span class="ms-2">Ajouter</span></a>
        </div>
        <table class="table table-dark table-striped">
            <thead>
                <tr>
                    <th scope="col">Jour</th>
                    <th scope="col">Ouverture</th>
                    <th scope="col">Fermeture</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data as $schedule) { ?>
                    <tr>
                        <th scope="row"><?= $schedule['day'] ?></th>
                        <td><?= $schedule['opening'] ?></td>
                        <td><?= $schedule['closing'] ?></td>
                        <td><a class="btn btn-warning" href="index.php?action=updSchedule&id=<?= $schedule['id'] ?>" role="button">
                                <span>Modifier</span><i class="fa-solid fa-user-gear ms-2"></i></a>
                            <a class="btn btn-danger" href="index.php?action=delSchedule&id=<?= $schedule['id'] ?>" onclick="return(confirm('Voulez-vous supprimer cette entrée ?'));" role="button">
                                <span>Effacer</span><i class="fa-solid fa-user-minus ms-2"></i></a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        <!-- PAGINATION -->
        <?php if (isset($_GET['p'])) { ?>
            <div aria-label="Page navigation example">
                <ul class="pagination justify-schedule-center">
                    <li class="page-item <?php if ($page == 1) {
                                                echo 'disabled';
                                            } ?>">
                        <a class="page-link" href="index.php?action=schedule&p=<?= $previous ?>" tabindex="-1" aria-disabled="true">Précédent</a>
                    </li>
                    <?php for ($i = $start; $i <= $end; $i++) { ?>
                        <li class="page-item <?= ($page == $i) ? 'active" aria-current="page"' : '"' ?>><a class=" page-link" href="index.php?action=schedule&p=<?php echo $i; ?>"><?= $i; ?></a></li>
                    <?php } ?>
                    <li class="page-item <?php if ($page == $num_pages) {
                                                echo 'disabled';
                                            } ?>">
                        <a class="page-link" href="index.php?action=schedule&p=<?php echo $next ?>">Suivant</a>
                    </li>
                </ul>
            </div>
        <?php } ?>
    </div>
</div>

<?php $content = ob_get_clean(); ?>
<?php require('layout.php') ?>