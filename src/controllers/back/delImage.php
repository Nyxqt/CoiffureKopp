<?php
require_once('../models/db.php');
require_once('../models/model.php');
require_once('../models/delImage.php');

function delImage($id)
{
    deleteImage($id);
    header('Location: index.php?action=image&p=1');
}
