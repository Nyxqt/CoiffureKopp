<?php $title = "Modifier"; ?>
<?php ob_start(); ?>


<div class="container-fluid mt-5">
    <div class="row justify-content-center text-center">
        <div class="col-sm-3">
            <form method="POST" action="#">
                <div class="form-floating mt-2">
                    <textarea class="form-control" name="email" placeholder="Email" id="email" required><?= $email ?></textarea>
                    <label for="email">Email</label>
                </div>
                <div class="form-floating mt-2">
                    <input type="hidden" name="upd" value="1" />
                    <input class="btn btn-primary" type="submit" value="Modifier le compte" />
                </div>
            </form>
        </div>
    </div>

</div>

<?php $content = ob_get_clean(); ?>
<?php require('layout.php') ?>