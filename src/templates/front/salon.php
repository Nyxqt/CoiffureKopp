<?php $title = "Le salon"; ?>
<?php ob_start(); ?>
<!-- HIGHLIGHT -->
<section>
    <div class="container parallax-salon" id="salon-highlight">
        <h1 class="highlight-ff text-center text-white">LE SALON</h1>
    </div>
</section>
<!-- MAIN CONTENT -->
<section>
    <div class="container-md mt-5">
        <div class="row">
            <div class="col-md-6 text-center">
                <div class="text-divider">
                    <h2 class="title-ff">LA CRÉATIVITÉ EN TOUTE SIMPLICITÉ</h2>
                </div>
                <p class="text-ff fs-5">
                    Les Coiffeurs-Créateurs ont le souci de vous satisfaire ! Et cela passe d’abord par un accueil chaleureux, en toute simplicité. La simplicité, c’est avant tout celle de la relation que nous souhaitons créer avec vous, une relation humaine d’échange et de partage.

                    Notre salon exprime notre passion pour la création et reflète les tendances du moment. Nous exposons des œuvres réalisées par des artistes locaux et nous renouvelons notre décoration régulièrement pour faire évoluer notre environnement et vous surprendre à chacune de vos visites.
                </p>
            </div>
            <div class="col-md-6">
                <img src="../assets/images/salon_coiffure.jpg" class="rounded w-100 mx-auto d-block" alt="">
            </div>
        </div>
    </div>
    <div class="container-md mt-5">
        <div class="row">
            <div class="col-md-6">
                <img src="../assets/images/salon_coiffure2.jpg" class="rounded w-100 mx-auto d-block" alt="">
            </div>
            <div class="col-md-6 text-center">
                <div class="text-divider">
                    <h2 class="title-ff">UN CONCEPT-STORE INTÉGRÉ</h2>
                </div>
                <p class="text-ff fs-5">
                    Toujours dans la volonté de vous proposer une expérience différente du salon de coiffure, vous pourrez visiter notre concept-store où vous trouverez des objets déco, design et tendances. L’occasion de compléter votre moment de détente par un peu de shopping….
                </p>
            </div>

        </div>
    </div>
</section>

<?php $content = ob_get_clean(); ?>
<?php require('layout.php') ?>