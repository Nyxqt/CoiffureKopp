<?php

function getLatestNews()
{
    $stmt = dbConnect()->prepare('SELECT title as news_title, path as news_img, id as news_id
    FROM post
    ORDER BY id
    DESC 
    LIMIT 3');
    $stmt->execute();
    $news = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $news;
}
