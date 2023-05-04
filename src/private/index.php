<?php
session_start();
if (isset($_SESSION['email'])) {
    if (isset($_GET['action'])) {
        if ($_GET['action'] == 'home') {
            require('../controllers/back/dashboard.php');
            dashboard();
        } elseif ($_GET['action'] == 'admin') {
            require('../controllers/back/admin.php');
            admin();
        } elseif ($_GET['action'] == 'addAdmin') {
            require('../controllers/back/addAdmin.php');
            createAdmin($msg);
        } elseif ($_GET['action'] == 'updAdmin') {
            if (isset($_GET['id'])) {
                require('../controllers/back/updAdmin.php');
                showUpdAdmin();
            }
        } elseif ($_GET['action'] == 'delAdmin') {
            if (isset($_GET['id'])) {
                $id = intval($_GET['id']);
                require('../controllers/back/delAdmin.php');
                delAdmin($id);
            }
        }
    } else {
        require('../controllers/back/dashboard.php');
        dashboard();
    }
} else {
    require('../controllers/back/login.php');
    login($msg);
}
