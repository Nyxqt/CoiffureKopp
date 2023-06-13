<?php $title = "Contenu"; ?>
<?php ob_start(); ?>
<div class="container mt-5 text-center">
    <form action="" method="post" enctype="multipart/form-data">
        <div class="row mb-3 justify-content-center align-items-center">
            <div class="col-sm-6">
                <div class="input-group mb-3">
                    <input type="file" class="form-control" name="path[]" id="pathInput" multiple>
                    <label class="input-group-text" for="pathInput">Upload</label>
                </div>
            </div>
        </div>
        <div class="row justify-content-center align-items-center flex-column gap-3">
            <div class="col"><button type="submit" name="submit" class="btn btn-primary">Ajouter</button></div>
            <div class="col-sm-4"><?= $msg ?></div>
        </div>
    </form>
</div>
<?php $content = ob_get_clean(); ?>
<?php require('layout.php') ?>