<?php
require_once('../models/db.php');
require_once('../models/model.php');
require_once('../models/delAdmin.php');

function delAdmin($id)
{
    deleteAdmin($id);
    header('Location: index.php?action=admin&p=1');
}
