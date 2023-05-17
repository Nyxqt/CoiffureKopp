<?php ob_start(); ?>

<div class="container-fluid bg-dark pb-3">
    <div class="row justify-content-center">
        <div class="col-lg-3 d-flex flex-column">
            <h1 class="title-ff text-white uppercase">Coiffure kopp</h1>
            <span class="text-ff text-white">Salon de coiffure à Saint-Avold</span>
            <span class="text-ff text-white">63 Rue du Général Hirschauer</span>
            <span class="text-ff text-white">57500 Saint-Avold</span>
            <span class="text-ff text-white">03 87 92 83 68</span>
        </div>
        <div class="col-lg-3 d-flex flex-column">
            <h1 class="title-ff text-white uppercase">Horaires d'ouverture</h1>
            <span class="text-ff text-white">Lundi : Fermé</span>
            <span class="text-ff text-white">Mardi : de 08h à 18h</span>
            <span class="text-ff text-white">Merecredi : de 08h à 18h</span>
            <span class="text-ff text-white">Jeudi : de 08h à 18h</span>
            <span class="text-ff text-white">Vendredi : de 08h à 20h</span>
            <span class="text-ff text-white">Samedi : de 08h à 16h30</span>
            <span class="text-ff text-white">Dimanche : Fermé</span>

        </div>
        <div class="col-lg-3 d-flex flex-column">
            <h1 class="title-ff text-white uppercase">A propos</h1>
            <a class="nav-link footer-style text-white text-ff" href="">L'équipe</a>
        </div>
    </div>
</div>

<?php $footer = ob_get_clean(); ?>