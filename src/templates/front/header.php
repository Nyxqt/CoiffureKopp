<?php ob_start(); ?>

<nav class="navbar-expand-lg">
    <div class="container-md">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse d-flex flex-column" id="navbarCollapse">
            <a class="navbar-brand" href="index.php">
                <img src="../assets/images/placeholder.jpg" alt="Logo" width="60" height="60" class="mt-3">
            </a>
            <ul class="navbar-nav justify-content-around w-100 text-white">
                <li class="nav-item">
                    <a class="nav-link title-ff title-fs nav-style" href="index.php?action=salon">Le salon</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link title-ff title-fs nav-style" href="index.php?action=equipe">L'équipe</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link title-ff title-fs nav-style" href="index.php?action=portfolio">Portfolio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link title-ff title-fs nav-style" href="index.php?action=actualite">Actualité</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link title-ff title-fs nav-style" href="index.php?action=contact">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<?php $header = ob_get_clean(); ?>