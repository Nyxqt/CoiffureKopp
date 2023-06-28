<!DOCTYPE html>
<html lang="fr" data-bs-theme="dark">

<!-- HEAD -->

<head>
    <meta charset="utf-8" />
    <title><?= $title ?></title>
    <?php require('../assets/lib/externals.php') ?>

</head>

<!-- END OF HEAD -->


<body>
    <div class="container-fluid d-flex">
        <div class="d-flex flex-column flex-shrink-0 text-white p-3  sticky-left sticky-top border-end" style="width: 280px; height: 100vh;">
            <a href="index.php?action=home" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                <i class="fa-solid fa-database fa-xl"></i>
                <span class="fs-4 ms-2">Gestion</span>
            </a>
            <hr>
            <ul class="nav flex-column mb-auto">
                <li>
                    <a href="index.php?action=home" class="nav-link text-ff uppercase text-white">
                        <i class="fa-solid fa-house"></i>
                        Accueil
                    </a>
                </li>
                <li>
                    <a href="index.php?action=image&p=1" class="nav-link text-ff uppercase text-white">
                        <i class="fa-regular fa-image"></i>
                        Portfolio
                    </a>
                </li>
                <li>
                    <a href="index.php?action=content&p=1" class="nav-link text-ff uppercase text-white">
                        <i class="fa-solid fa-image"></i>
                        Contenu
                    </a>
                </li>
                <li>
                    <a href="index.php?action=admin&p=1" class="nav-link text-ff uppercase text-white">
                        <i class="fa-solid fa-user"></i>
                        Administrateurs
                    </a>
                </li>
                <li>
                    <a href="index.php?action=schedule" class="nav-link text-ff uppercase text-white">
                        <i class="fa-solid fa-calendar-days"></i>
                        Horaires
                    </a>
                </li>
                <li>
                    <a href="index.php?action=equipe" class="nav-link text-ff uppercase text-white">
                        <i class="fa-solid fa-people-group"></i>
                        L'équipe
                    </a>
                </li>
            </ul>
            <hr>
            <div class="dropdown">
                <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">

                </a>
                <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
                    <li><a class="dropdown-item" href="#">
                            <i class="fa-solid fa-gear"></i>
                            Configuration
                        </a>
                    </li>
                    <li><a class="dropdown-item" href="index.php?action=logout">
                            <i class="fa-solid fa-right-from-bracket"></i>
                            Déconnexion
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <?= $content ?>
    </div>

    <?php require('../assets/lib/externalsJS.php') ?>
    
</body>

</html>