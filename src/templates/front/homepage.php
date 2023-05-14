<?php $title = "Accueil"; ?>
<?php ob_start(); ?>
<!-- CAROUSEL -->
<section>
    <div id="carousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="../assets/images/carousel1.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="../assets/images/carousel2.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev align-self-center" type="button" data-bs-target="#carousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Précédent</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Suivant</span>
        </button>
    </div>
</section>
<!-- MAIN CONTENT -->
<section>
    <div class="container-md mt-5">
        <div class="row">
            <div class="col-md-6 text-center">
                <h1 class="title-ff">
                    Un salon talentueux
                </h1>
                <p class="text-ff fs-3">
                    Reconnu par un certificat du 'meilleur ouvrier de France', le salon est connu pour un accueil & un savoir-faire de qualité.
                </p>
                <div class="text-divider">
                    <h2 class="title-ff">Une expérience</h2>
                </div>
                <p class="text-ff fs-3">Je sais pas du coup mange du lorem : Lorem ipsum dolor sit amet consectetur, adipisicing elit. Saepe, atque ipsa. Quis omnis sit voluptas impedit inventore laudantium quisquam, pariatur est totam vitae ducimus neque quos veritatis iusto assumenda architecto?</p>
            </div>
            <div class="col-md-6">
                <img src="../assets/images/femme_nb.jpg" class="rounded content-img mx-auto d-block" alt="">
            </div>
        </div>
    </div>
</section>
<!-- CTA -->
<section>
    <div class="container-md mt-5 parallax">
        <div class="row justify-content-end p-3">
            <div class="col-md-6 text-center">
                <h1 class="title-ff text-white">
                    RÉVÉLEZ VOTRE MEILLEURE IMAGE
                </h1>
                <p class="text-ff fs-3 text-white">
                    Une coupe qui reflète votre personnalité, une couleur qui donne de la résonnance à votre visage, un coiffage qui est en harmonie avec votre façon d’être…
                    Vous proposez LA coupe idéale, celle qui respecte votre état d’esprit et la nature de vos cheveux, voici la mission que nous nous donnons.
                </p>
                <p class="text-ff fs-5 text-white">
                    Nous débutons toujours par un diagnostic durant lequel nous observons votre visage, vos cheveux et apprenons à vous connaître. Nous vous écoutons, nous vous questionnons, nous vous conseillons, pour obtenir une coupe en accord avec vous-même et votre façon de vivre. Formés constamment aux dernières techniques et tendances, nous vous proposons régulièrement de la nouveauté pour que votre beauté reste toujours actuelle.

                    Nos marques partenaires, Kevin Murphy et Redken, reflètent notre positionnement créatif, technique et respectueux de notre nature et celle du cheveu.
                </p>
                <a href="#" class="btn btn-light fs-4" role="button" data-bs-toggle="button">Contact</a>
            </div>
        </div>
    </div>
</section>
<!-- REMINDER NEWS -->

<?php $content = ob_get_clean(); ?>
<?php require('layout.php') ?>