<?php
session_start();

if (isset($_GET['action'])) {
    if ($_GET['action'] == 'home') {
        require('../controllers/front/homepage.php');
        homepage();
    } elseif ($_GET['action'] == 'salon') {
        require('../controllers/front/salon.php');
        salon();
    } elseif ($_GET['action'] == 'equipe') {
        require('../controllers/front/equipe.php');
        equipe();
    } elseif ($_GET['action'] == 'actualite') {
        if (isset($_GET['id'])) {
            require('../controllers/front/post.php');
            post();
        } else {
            require('../controllers/front/actualite.php');
            actualite();
        }
    }
} else {
    require('../controllers/front/homepage.php');
    homepage();
}
