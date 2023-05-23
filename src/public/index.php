<?php
session_start();

if (isset($_GET['action'])) {
    if ($_GET['action'] == 'home') {
        require('../controllers/front/homepage.php');
        homepage();
    } elseif ($_GET['action'] == 'salon') {
        require('../controllers/front/salon.php');
        salon();
    }
} else {
    require('../controllers/front/homepage.php');
    homepage();
}
