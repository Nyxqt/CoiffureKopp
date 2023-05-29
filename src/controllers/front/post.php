<?php
require_once('../models/db.php');
require_once('../models/model.php');
require_once('../models/post.php');


function post()
{
    $post = getPostData();
    require('../templates/front/actualite.php');
}
