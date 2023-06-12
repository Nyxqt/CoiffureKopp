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
        } elseif ($_GET['action'] == 'content') {
            require('../controllers/back/content.php');
            content();
        } elseif ($_GET['action'] == 'addContent') {
            require('../controllers/back/addContent.php');
            createContent($msg);
        } elseif ($_GET['action'] == 'updContent') {
            if (isset($_GET['id'])) {
                require('../controllers/back/updContent.php');
                showUpdContent();
            }
        } elseif ($_GET['action'] == 'delContent') {
            if (isset($_GET['id'])) {
                $id = intval($_GET['id']);
                require('../controllers/back/delContent.php');
                delContent($id);
            }
        } elseif ($_GET['action'] == 'image') {
            require('../controllers/back/image.php');
            image();
        } elseif ($_GET['action'] == 'addContent') {
            require('../controllers/back/addContent.php');
            createContent($msg);
        } elseif ($_GET['action'] == 'updContent') {
            if (isset($_GET['id'])) {
                require('../controllers/back/updContent.php');
                showUpdContent();
            }
        } elseif ($_GET['action'] == 'delContent') {
            if (isset($_GET['id'])) {
                $id = intval($_GET['id']);
                require('../controllers/back/delContent.php');
                delContent($id);
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
