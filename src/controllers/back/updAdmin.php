<?php
require_once('../models/db.php');
require_once('../models/model.php');
require_once('../models/updAdmin.php');


function showUpdAdmin()
{
    $email = adminData();
    require('../templates/back/updAdmin.php');
}
