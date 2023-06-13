<?php
require_once('../models/db.php');
require_once('../models/model.php');
require_once('../models/delContent.php');

function delContent($id)
{
    deleteContent($id);
    header('Location: index.php?action=content&p=1');
}
