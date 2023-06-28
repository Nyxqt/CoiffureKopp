<?php
require_once('../models/db.php');
require_once('../models/model.php');
require_once('../models/schedule.php');


function schedule()
{
    $schedules = getSchedules();
    $data = $schedules[0];
    $previous = $schedules[1];
    $next = $schedules[2];
    $page = $schedules[3];
    $end = $schedules[4];
    $num_pages = $schedules[5];
    $start = $schedules[6];
    require('../templates/back/schedule.php');
}