<?php
require_once('../models/db.php');
require_once('../models/model.php');
require_once('../models/addSchedule.php');


function createSchedule($p)
{
    $msg = $p;
    require('../templates/back/addSchedule.php');
}
