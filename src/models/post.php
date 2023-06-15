<?php

function getPostData()
{
    $postId = $_GET['id'];
    $stmt = dbConnect()->prepare(
        'SELECT p.id as pId, p.title as pTitle, p.content as pContent, p.id_image as pId_image, p.date as pDate, i.path 
        FROM post p 
        INNER JOIN image i ON i.id = p.id_image
        WHERE p.id = ' . $_GET['id']
    );
    $stmt->execute();
    $post = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $post;
}
