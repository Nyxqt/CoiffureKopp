<?php

function getLatestNews()
{
    $stmt = dbConnect()->prepare('SELECT p.id as pId, p.title as pTitle, p.content as pContent, p.id_image as pId_image, i.path FROM post p INNER JOIN image i ON i.id = p.id_image
    ORDER BY p.id
    DESC 
    LIMIT 3');

    $stmt->execute();
    $news = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $news;
}
