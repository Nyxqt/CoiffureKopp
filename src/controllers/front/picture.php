<?php
require_once('../models/db.php');
require_once('../models/model.php');
require_once('../models/picture.php');


function picture()
{
    $picture = getPictureData();
    require('../templates/front/picture.php');
}
