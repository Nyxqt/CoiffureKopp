<?php
require_once('../models/db.php');
require_once('../models/model.php');
require_once('../models/image.php');


function image()
{
    $images = getImages();
    $data = $images[0];
    $previous = $images[1];
    $next = $images[2];
    $page = $images[3];
    $end = $images[4];
    $num_pages = $images[5];
    $start = $images[6];
    require('../templates/back/image.php');
}
