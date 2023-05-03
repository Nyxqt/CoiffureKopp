<?php

require_once('../models/db.php');
require_once('../models/model.php');
require_once('../models/login.php');

function login($p)
{
    $msg = $p;
    require('../templates/back/login.php');
}
