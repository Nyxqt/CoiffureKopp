<?php


function getPictureData()
{
    $query = dbConnect()->prepare('SELECT * FROM image where id = ' . $_GET['id']);
    $query->execute();
    $data = $query->fetchAll(PDO::FETCH_ASSOC);
    return $data;
}
