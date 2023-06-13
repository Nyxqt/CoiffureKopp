<?php $title = "Contenu"; ?>
<?php ob_start(); ?>
<div class="container mt-5 text-center">
    <form action="" method="post" enctype="multipart/form-data">
        <div class="row mb-3 justify-content-center align-items-center">
            <div class="col-sm-6">
                <div class="form-floating">
                    <textarea id="titleInput" type="text" placeholder="Titre" class="form-control" name="title"></textarea>
                    <label for="titleInput" class="floatingTextarea">Titre</label>
                </div>
            </div>
        </div>
        <div class="row mb-3 justify-content-center align-items-center">
            <div class="col-sm-6">
                <div class="form-floating">
                    <textarea id="contentInput" placeholder="Contenu" class="form-control" name="content"></textarea>
                    <label for="contentInput" class="floatingTextarea">Contenu</label>
                </div>
            </div>
        </div>
        <div class="row mb-3 justify-content-center align-items-center">
            <div class="col-sm-6">
                <div class="input-group mb-3">
                    <input type="file" class="form-control" name="path" id="pathInput">
                    <label class="input-group-text" for="pathInput">Upload</label>
                </div>
            </div>
        </div>
        <div class="row justify-content-center align-items-center flex-column gap-3">
            <div class="col"><button type="submit" name="submit" class="btn btn-primary">Sign in</button></div>
            <div class="col-sm-4"><?= $msg ?></div>
        </div>
    </form>
</div>
<?php $content = ob_get_clean(); ?>
<?php require('layout.php') ?>