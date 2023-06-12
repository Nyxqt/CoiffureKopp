<?php

function getActualiteData()
{
    $stmt = dbConnect()->prepare(
        'SELECT p.id as pId, p.title as pTitle, p.content as pContent, p.id_image as pId_image, p.date as pDate, i.path FROM post p INNER JOIN image i ON i.id = p.id_image
    ORDER BY p.id
    DESC'
    );
    $stmt->execute();
    $post = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $post;
}
