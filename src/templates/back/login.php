<?php $title = "Connexion"; ?>
<?php ob_start(); ?>

<!-- LOGIN SECTION -->

<section class="mt-4 mb-4">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                <div class="card bg-dark text-white" style="border-radius: 1rem;">
                    <div class="card-body p-5 text-center">

                        <div class="mb-md-5 mt-md-4 pb-5">
                            <form action="#" method="post">
                                <h2 class="fw-bold mb-2 text-uppercase">Connexion</h2>
                                <p class="text-white-50 mb-5">Veuillez entrer votre identifiant et mot de passe!</p>

                                <div class="form-outline form-white mb-4">
                                    <input name="email" type="email" id="typeEmailX" class="form-control form-control-lg" required />
                                    <label class="form-label" for="typeEmailX">Email</label>
                                </div>

                                <div class="input-group form-outline form-white mb-0">
                                    <input name="password" type="password" id="password" class="form-control form-control-lg" required />
                                    <span class="input-group-text" id="show_password" onclick="password_show_hide();">
                                        <i class="fa-regular fa-eye-slash" id="show_eye"></i>
                                        <i class="fa-regular fa-eye d-none" id="hide_eye"></i>
                                    </span>
                                </div>
                                <label class="form-label" for="password">Mot de passe</label>

                                <p class="small mb-5 pb-lg-2"><a class="text-white-50" href="#!">Mot de passe oublié?</a></p>

                                <div class="alert alert-danger mb-5 alert-dismissible <?php if ($msg == '') {
                                                                                            echo 'visually-hidden';
                                                                                        } ?>" role="alert">
                                    <?= $msg ?>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                                <button name="submit" class="btn btn-outline-warning btn-lg px-5" type="submit">Connexion</button>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php $content = ob_get_clean(); ?>
<?php require('layoutLogin.php') ?>