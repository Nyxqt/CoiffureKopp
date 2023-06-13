<?php
require_once('../models/db.php');
require_once('../models/model.php');
require_once('../models/addImage.php');


function createImage($p)
{
    $msg = $p;
    require('../templates/back/addImage.php');
}
