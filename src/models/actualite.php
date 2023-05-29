<?php

function getActualiteData()
{
    $stmt = dbConnect()->prepare(
        'SELECT p.title as post_title, p.path as post_path, p.date  as post_date, p.id as post_id
    FROM post as p
    ORDER BY id
    DESC'
    );
    $stmt->execute();
    $post = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $post;
}
