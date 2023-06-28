<?php $title = "Horaires"; ?>
<?php ob_start(); ?>
<div class="container mt-5 text-center">
    <form action="" method="post" enctype="multipart/form-data">
        <div class="row mb-3 justify-content-center align-items-center">
            <div class="col-sm-6">
                <div class="form-floating">
                    <textarea id="dayInput" type="text" placeholder="Jour" class="form-control" name="day"></textarea>
                    <label for="dayInput" class="floatingTextarea">Jour</label>
                </div>
            </div>
        </div>
        <div class="row mb-3 justify-content-center align-items-center">
            <div class="col-sm-6">
                <div class="form-floating">
                    <input type="number" id="openingInput" placeholder="Ouverture" class="form-control" name="opening"></input>
                    <label for="openingInput" class="floatingTextarea">Ouverture</label>
                </div>
            </div>
        </div>
        <div class="row mb-3 justify-content-center align-items-center">
            <div class="col-sm-6">
                <div class="form-floating">
                    <input type="number" id="closingInput" placeholder="Fermeture" class="form-control" name="closing"></input>
                    <label for="closingInput" class="floatingTextarea">Fermeture</label>
                </div>
            </div>
        </div>
        <div class="row justify-content-center align-items-center flex-column gap-3">
            <div class="col"><button type="submit" name="submit" class="btn btn-primary">Envoyé</button></div>
            <div class="col-sm-4"><?= $msg ?></div>
        </div>
    </form>
</div>
<?php $content = ob_get_clean(); ?>
<?php require('layout.php') ?>