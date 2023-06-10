<?php
require_once('../models/db.php');
require_once('../models/model.php');
require_once('../models/updContent.php');


function showUpdContent()
{
    $contents = contentData();
    require('../templates/back/updContent.php');
}
