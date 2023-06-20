<?php ob_start(); ?>

<nav data-bs-theme="dark" class="navbar  navbar-expand-lg">
    <div class="container-fluid d-flex flex-column text-center">
        <a class="navbar-brand p-0 m-0 mb-2" href="index.php">
            <img src="../assets/images/placeholder.jpg" alt="Logo" width="60" height="60" class="mt-3">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarCollapse">

            <ul class="navbar-nav gap-5">
                <li class="nav-item">
                    <a class="nav-link title-ff title-fs nav-style" href="index.php?action=salon">Le salon</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link title-ff title-fs nav-style" href="index.php?action=equipe">L'équipe</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link title-ff title-fs nav-style" href="index.php?action=portfolio&p=1">Portfolio</a>
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