<?php
session_start();

if (isset($_GET['action'])) {
    if ($_GET['action'] == 'home') {
        require('../controllers/front/homepage.php');
        homepage();
    }
} else {
    require('../controllers/front/homepage.php');
    homepage();
}
