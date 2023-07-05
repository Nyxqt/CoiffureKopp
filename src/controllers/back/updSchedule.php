<?php
require_once('../models/db.php');
require_once('../models/model.php');
require_once('../models/updSchedule.php');


function showUpdSchedule()
{
    $schedule = scheduleData();
    require('../templates/back/updSchedule.php');
}
