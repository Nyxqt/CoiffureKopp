<?php
require_once('../models/db.php');
require_once('../models/model.php');
require_once('../models/addContent.php');


function createContent($p)
{
    $msg = $p;
    require('../templates/back/addContent.php');
}
