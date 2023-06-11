<?php

function getContents()
{
    // PAGINATION SYSTEM
    $db = dbConnect();
    $per_page = 10;
    $page = 1;
    if (isset($_GET['p']) && !empty($_GET['p'])) {
        $page = intval($_GET['p']);
    } else {
        $page = 1;
    }

    $start_page = 1;
    $nb_pagination = 3;
    $offset = ($page - 1) * $per_page;

    $total_query = "SELECT COUNT(*) as total FROM post";
    $total_result = $db->query($total_query);
    $total_row = $total_result->fetch();
    $total = $total_row['total'];

    $num_pages = ceil($total / $per_page);
    $start = max(1, $page - 2);
    $end = min($num_pages, $page + 2);

    $next = $page + 1;
    $previous = $page - 1;

    // SQL REQUEST CONTENT LIST

    $statement = $db->query("SELECT * FROM post ORDER BY id DESC LIMIT $offset, $per_page");
    $contents = [];
    while (($row = $statement->fetch())) {
        $content = [
            'id' => $row['id'],
            'title' => $row['title'],
            'content' => $row['content'],
            'path' => $row['path'],
        ];
        $contents[] = $content;
    }
    return [$contents, $next, $previous, $page, $end, $num_pages, $start];
}
