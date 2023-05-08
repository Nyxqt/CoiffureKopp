<?php ob_start(); ?>

<nav class="navbar-expand-lg">
    <div class="container-md">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse d-flex" id="navbarCollapse">
            <ul class="navbar-nav justify-content-around w-100 text-white">
                <li class="nav-item">
                    <a class="nav-link title-ff title-fs" href="#">Le salon</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link title-ff title-fs" href="#">L'équipe</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link title-ff title-fs" href="#">Portfolio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link title-ff title-fs" href="#">Actualité</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link title-ff title-fs" href="#">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<?php $header = ob_get_clean(); ?>