<?php

function getPostData()
{
    $postId = $_GET['id'];
    $stmt = dbConnect()->prepare(
        'SELECT p.title as post_title, p.content as post_content, p.path as post_path, p.date  as post_date, p.id as post_id
    FROM post as p
    WHERE p.id = ' . $_GET['id']
    );
    $stmt->execute();
    $post = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $post;
}
