<?php $title = "Modifier"; ?>
<?php ob_start(); ?>


<div class="container-fluid mt-5">
    <div class="row justify-content-center text-center">
        <div class="col-sm-3">
            <form method="POST" action="#">
                <div class="form-floating mt-2">
                    <textarea class="form-control" name="title" placeholder="Titre" id="title" required><?= $contents['title'] ?></textarea>
                    <label for="email">Titre</label>
                </div>
                <div class="form-floating mt-2">
                    <textarea class="form-control" name="content" placeholder="Contenu" id="content" required><?= $contents['content'] ?></textarea>
                    <label for="email">Contenu</label>
                </div>
                <div class="input-group mt-2">
                    <input type="file" class="form-control" name="path" id="pathInput">
                    <label class="input-group-text" for="pathInput">Upload</label>
                </div>
                <div class="form-floating mt-2">
                    <input type="hidden" name="upd" value="1" />
                    <input class="btn btn-primary" type="submit" value="Modifier l'article" />
                </div>
            </form>
        </div>
    </div>

</div>

<?php $content = ob_get_clean(); ?>
<?php require('layout.php') ?>