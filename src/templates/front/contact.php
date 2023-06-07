<?php $title = "Contact"; ?>
<?php ob_start(); ?>
<!-- HIGHLIGHT -->
<section>
    <div class="container parallax-salon" id="salon-highlight">
        <h1 class="highlight-ff text-center text-white">Nous contacter</h1>
    </div>
</section>
<section class="mt-5">
    <div class="container-lg">
        <div class="d-flex flex-column text-center p-0">
            <h1 class="title-ff m-0">Prendre rendez-vous par téléphone</h1>
            <h2 class="title-ff fs-1">03 87 92 83 68</h2>
        </div>
        <div class="row mt-5">
            <div class="col-lg-6 text-center text-ff">
                <form action="#" method="post">
                    <div class="form-floating mt-2">
                        <input name="name" type="text" class="form-control" id="floatingName" placeholder="Votre nom" required>
                        <label for="floatingName">Votre nom</label>
                    </div>
                    <div class="form-floating mt-2">
                        <input name="email" type="email" class="form-control" id="floatingMail" placeholder="Votre email" required>
                        <label for="floatingMail">Votre email</label>
                    </div>
                    <div class="form-floating mt-2">
                        <input name="subject" type="text" class="form-control" id="floatingSubject" placeholder="Sujet" required>
                        <label for="floatingSubject">Sujet</label>
                    </div>
                    <div class="form-floating mt-2">
                        <textarea name="message" class="form-control" id="floatingMessage" placeholder="Votre message" required></textarea>
                        <label for="floatingMessage">Votre message</label>
                    </div>
                    <button name="submit" type="submit" class="btn btn-dark fs-5 uppercase mt-2">
                        <span>envoyer</span>
                    </button>
                </form>
            </div>
            <div class="col-lg-6">
                <p class="text-ff fw-bold fs-5 uppercase">Coiffure Kopp</p>
                <p class="text-ff fs-5 uppercase">Salon de coiffure sur Saint-Avold</p>
                <p class="text-ff fs-5">63 Rue du Général Hirschauer</p>
                <p class="text-ff fs-5">57500 Saint-Avold</p>
                <iframe class="mt-3" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2612.128360965223!2d6.702941977492584!3d49.103201883445784!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47945433a1f0e35d%3A0x2f5f6232c6c7969c!2sCOIFFURE%20KOPP!5e0!3m2!1sfr!2sfr!4v1685709739470!5m2!1sfr!2sfr" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
</section>
<?php $content = ob_get_clean(); ?>
<?php require('layout.php') ?>