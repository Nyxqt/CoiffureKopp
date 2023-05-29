<?php
require_once('../models/db.php');
require_once('../models/model.php');
require_once('../models/actualite.php');


function actualite()
{
    $actualite = getActualiteData();
    require('../templates/front/actualite.php');
}
