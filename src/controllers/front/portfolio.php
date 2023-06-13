<?php
require_once('../models/db.php');
require_once('../models/model.php');
require_once('../models/portfolio.php');


function portfolio()
{
    $data = getAdmins();
    $images = $data[0];
    $previous = $data[1];
    $next = $data[2];
    $page = $data[3];
    $end = $data[4];
    $num_pages = $data[5];
    $start = $data[6];
    require('../templates/front/portfolio.php');
}
