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
    } elseif ($_GET['action'] == 'contact') {
        require('../controllers/front/contact.php');
        contact();
    } elseif ($_GET['action'] == 'portfolio') {
        if (isset($_GET['p'])) {
            require('../controllers/front/portfolio.php');
            portfolio();
        }
    } elseif ($_GET['action'] == 'picture') {
        if (isset($_GET['id'])) {
            require('../controllers/front/picture.php');
            picture();
        }
    }
} else {
    require('../controllers/front/homepage.php');
    homepage();
}
