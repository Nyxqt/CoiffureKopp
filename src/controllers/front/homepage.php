<?php
require_once('../models/db.php');
require_once('../models/model.php');
require_once('../models/homepage.php');


function homepage()
{
    $news = getLatestNews();
    require('../templates/front/homepage.php');
}
