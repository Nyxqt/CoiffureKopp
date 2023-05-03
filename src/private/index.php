<?php
session_start();
if (isset($_SESSION['email'])) {
    if (isset($_GET['action'])) {
        if ($_GET['action'] == 'home') {
            require('../controllers/back/dashboard.php');
            dashboard();
        }
    } else {
        require('../controllers/back/dashboard.php');
        dashboard();
    }
} else {
    require('../controllers/back/login.php');
    login();
}
