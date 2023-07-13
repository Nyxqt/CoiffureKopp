<?php ob_start(); ?>

<div class="container-fluid bg-dark pb-3">
    <div class="row justify-content-center text-center">
        <div class="col-lg-3 d-flex flex-column">
            <h1 class="title-ff text-white uppercase">Coiffure kopp</h1>
            <span class="text-ff text-white">Salon de coiffure à Saint-Avold</span>
            <span class="text-ff text-white">63 Rue du Général Hirschauer</span>
            <span class="text-ff text-white">57500 Saint-Avold</span>
            <a href="tel:+33 03 87 92 83 68" class="text-ff text-white">03 87 92 83 68</a>
        </div>
        <div class="col-lg-3 d-flex flex-column">
            <h1 class="title-ff text-white uppercase">Horaires d'ouverture</h1>
            <?php foreach ($schedule as $sch) { ?>
                <span class="text-ff text-white"><?= $sch['day'] . ' : ' . $sch['status'] ?></span>
            <?php } ?>
        </div>
        <div class="col-lg-3 d-flex flex-column">
            <h1 class="title-ff text-white uppercase">A propos</h1>
            <a class="nav-link footer-style text-white text-ff" href="index.php?action=salon">Le salon</a>
            <a class="nav-link footer-style text-white text-ff" href="index.php?action=equipe">L'équipe</a>
            <a class="nav-link footer-style text-white text-ff" href="index.php?action=portfolio&p=1">Portfolio</a>
            <a class="nav-link footer-style text-white text-ff" href="index.php?action=actualite">Actualité</a>
            <a class="nav-link footer-style text-white text-ff" href="index.php?action=contact">Contact</a>
        </div>
    </div>
</div>

<?php $footer = ob_get_clean(); ?>