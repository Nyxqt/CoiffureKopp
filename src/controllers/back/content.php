<?php
require_once('../models/db.php');
require_once('../models/model.php');
require_once('../models/content.php');


function content()
{
    $contents = getContents();
    $data = $contents[0];
    $previous = $contents[1];
    $next = $contents[2];
    $page = $contents[3];
    $end = $contents[4];
    $num_pages = $contents[5];
    $start = $contents[6];
    require('../templates/back/content.php');
}
