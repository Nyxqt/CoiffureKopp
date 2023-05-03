<?php
require_once('../models/db.php');
require_once('../models/model.php');
require_once('../models/addAdmin.php');


function createAdmin($p)
{
    $msg = $p;
    require('../templates/back/addAdmin.php');
}
